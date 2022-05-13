<?php

namespace App\Controller;

use App\Entity\Activite;
use APP\Controller\ActiviteController;
use App\Entity\Enfant;
use App\Form\EnfantType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/enfant")
 */
class EnfantController extends AbstractController
{
    /**
     * @Route("/", name="app_enfant_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $enfants = $entityManager
            ->getRepository(Enfant::class)
            ->findAll();

        return $this->render('enfant/index.html.twig', [
            'enfants' => $enfants,
        ]);
    }

    /**
     * @Route("/enfant_stat", name="enfant_stat")
     */
    public function enfant_stat()
    {
        $repository = $this->getDoctrine()->getRepository(Enfant::class);
      $enfant = $repository->findAll();

       $em = $this->getDoctrine()->getManager();


      $pr1=0;
      $pr2=0;
       //$pr3= 0;



       foreach ($enfant as $enfant)
      {
        if ( $enfant->getSexe()=="Feminin")  :

            $pr1+=1;
        else:

            $pr2+=1;
            //$pr3+=1;


        endif;

      }

      $pieChart = new PieChart();
      $pieChart->getData()->setArrayToDataTable(
        [['Sexe', 'Sexe'],
            ['Feminin', $pr1],
            ['Masculin', $pr2],
          
        ]
      );
       $pieChart->getOptions()->setTitle('STATISTIQUE SELON LE SEXE ');
      $pieChart->getOptions()->setHeight(500);
      $pieChart->getOptions()->setWidth(900);
      $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
      $pieChart->getOptions()->getTitleTextStyle()->setColor('#91b59f');
      $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
      $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
      $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

      return $this->render('enfant/stat.html.twig', array('piechart' => $pieChart));
    }
    

    /**
     * @Route("/new", name="app_enfant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $enfant = new Enfant();
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('photo')->getData();
            $image= $request -> files->get ('enfant')['photo'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
           
            $enfant->setPhoto($filename);
            $entityManager->persist($enfant);
            $entityManager->flush();

            return $this->redirectToRoute('app_enfant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('enfant/new.html.twig', [
            'enfant' => $enfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEnfant}", name="app_enfant_show", methods={"GET"})
     */
    public function show(Enfant $enfant): Response
    {
        return $this->render('enfant/show.html.twig', [
            'enfant' => $enfant,
        ]);
    }

    /**
     * @Route("/{idEnfant}/edit", name="app_enfant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Enfant $enfant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image= $request -> files->get ('enfant')['photo'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';;
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $enfant ->setPhoto ($filename);
            

            $entityManager->flush();

            return $this->redirectToRoute('app_enfant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('enfant/edit.html.twig', [
            'enfant' => $enfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEnfant}", name="app_enfant_delete", methods={"POST"})
     */
    public function delete(Request $request, Enfant $enfant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$enfant->getIdEnfant(), $request->request->get('_token'))) {
            $entityManager->remove($enfant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_enfant_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/ajouter", name="ajouter")
     */
    public function ajouter(Request $request, EntityManagerInterface $entityManager)
    {
        $enfant = new Enfant();
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $image= $request -> files->get ('enfant')['photo'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';;
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $enfant ->setPhoto ($filename);
            

            $entityManager->persist($enfant);
            $entityManager->flush();

            return $this->redirectToRoute('listactivites', [], Response::HTTP_SEE_OTHER);    
        }
        return $this->render('enfant/ajout_front.html.twig', [
            'enfant' => $enfant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idEnfant}/modifier", name="modifier",methods={"GET", "POST"})
     */
    public function modifier(Request $request,Enfant $enfant ,EntityManagerInterface $entityManager)
    {
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image= $request -> files->get ('enfant')['photo'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';;
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $enfant ->setPhoto ($filename);
            

            $entityManager->flush();

            return $this->redirectToRoute('listactivites', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('enfant/modifier.html.twig', [
            'enfant' => $enfant,
            'form' => $form->createView(),
        ]);
    }
	
	// Ajouter un enfant a partir de Json

   /**
    * @Route("AddEnfantJSON", name="AddEnfantJSON")
    */
   public function AddEnfantJSON(Request $request,NormalizerInterface $Normalizer)
   {
    $em= $this->getDoctrine()->getManager();
    $enfant = new Enfant();
    
    $enfant->setNom($request->get('nom'));
    $enfant->setPrenom($request->get('prenom'));
    $enfant->setAge($request->get('age'));
    $enfant->setSexe($request->get('sexe'));
    $enfant->setPhoto($request->get('photo'));

    $em->persist($enfant);
        $em->flush();
        $jsonContent = $Normalizer->normalize($enfant,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

   }
   /**
     * @Route("/mobile/aff", name="affmobenfant")
     */
    public function affmobenfant(NormalizerInterface $normalizer)
    {
        $med=$this->getDoctrine()->getRepository(Enfant::class)->findAll();
        $jsonContent = $normalizer->normalize($med,'json',['enf'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

     /**
     * @Route("/mobile/new", name="addmobenf")
     */
    public function addmobenf(Request $request,NormalizerInterface $normalizer,EntityManagerInterface $entityManager)
    {
       
		$enfant = new Enfant();
       
		
        $enfant->setNom($request->get('nom'));
    $enfant->setPrenom($request->get('prenom'));
    $enfant->setAge($request->get('age'));
    $enfant->setSexe($request->get('sexe'));
    $enfant->setPhoto($request->get('photo'));
	$enfant->setIdA($request->get('idA'));

    $entityManager->persist($enfant);
        $entityManager->flush();
        $entityManager->flush();

        $jsonContent = $normalizer->normalize($enfant,'json',['enf'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
    * @Route("/UpdateEnfantJSON/{id_enfant}", name="UpdateEnfantJSON")
    */
    public function UpdateEnfantJSON($id_enfant,Request $request,NormalizerInterface $Normalizer)
    {
      $em = $this->getDoctrine()->getManager();
     $enfant = $em->getRepository(Enfant::class)->find($id_enfant);
     $enfant->setNom($request->get('nom'));
     $enfant->setPrenom($request->get('prenom'));
     $enfant->setAge($request->get('age'));
     $enfant->setSexe($request->get('sexe'));
     $enfant->setPhoto($request->get('photo'));
	 $enfant->setIdA($request->get('idA'));
 
     $em->flush();
     $jsonContent = $Normalizer->normalize($enfant, 'json', ['groups' => 'post:read']);
     return new Response("Information updated successfully" . json_encode($jsonContent));;
    }
    
    //Supprimer d'une activité a partie du json

   /**
    * @Route("/DeleteEnfantJSON/{id_enfant}", name="DeleteEnfantJSON")
    * 
    */

   public function DeleteEnfantJSON($id_enfant,Request $request,NormalizerInterface $Normalizer)
   {
    $em=$this->getDoctrine()->getManager();
    $enfant=$em->getRepository(Enfant::class)->find($id_enfant);
    $em->remove($enfant);
    $em->flush();
    $jsonContent = $Normalizer->normalize($enfant,'json',['groups'=>'post:read']);
        return new Response("Delete successfully".json_encode($jsonContent));
    
   }
}
