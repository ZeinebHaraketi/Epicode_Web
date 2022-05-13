<?php

namespace App\Controller;

use App\Entity\Consultation;
use App\Form\ConsultationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @Route("/consultation")
 */
class ConsultationController extends AbstractController
{
    /**
 * @Route("/statistique", name="app_cons_statistique")
 */
public function statCons(){

    $repository = $this->getDoctrine()->getRepository(Consultation::class);
    $consultation = $repository->findAll();

    $em = $this->getDoctrine()->getManager();


    $pr1=0;
    $pr2=0;
   



    foreach ($consultation as $consultations)
    {
        if ( $consultations->getSexe()=="Masculin")  :

            $pr1+=1;
        else:

            $pr2+=1;
          


        endif;

    }

    $pieChart2 = new PieChart();
    $pieChart2->getData()->setArrayToDataTable(
        [['Sexe', 'label'],
            ['Masculin', $pr1],
            ['Feminin', $pr2],
           
        ]
    );
    $pieChart2->getOptions()->setTitle('STATISTIQUE DES categories DES PATIENTS');
    $pieChart2->getOptions()->setHeight(500);
    $pieChart2->getOptions()->setWidth(900);
    $pieChart2->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart2->getOptions()->getTitleTextStyle()->setColor('#91b59f');
    $pieChart2->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart2->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart2->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('consultation/stats.html.twig', array('piechart' => $pieChart2));
}
    /**
 * @Route("/statistique2", name="app_cons_statistique2")
 */
public function statCons2(){

    $repository = $this->getDoctrine()->getRepository(Consultation::class);
    $consultation = $repository->findAll();

    $em = $this->getDoctrine()->getManager();


    $pr1=0;
    $pr2=0;
    $pr3=0;
    $pr4=0;
   



    foreach ($consultation as $consultations)
    {
        if ( $consultations->getcategoriec()=="Blessure")  :

            $pr1+=1;
        else:

            $pr2+=1;
            $pr3+=1;
            $pr4+=1;
          


        endif;

    }

    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [['categorier', 'label'],
            ['blessure', $pr1],
            ['Regime', $pr2],
            ['Terapie', $pr3],
            ['Autre', $pr4],
            
           
        ]
    );
    $pieChart->getOptions()->setTitle('STATISTIQUE DES SEXES DES PATIENTS');
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#91b59f');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('consultation/stat2.html.twig', array('piechart' => $pieChart));
}
/**
 * @Route("/",  name="app_consultation_index", methods={"GET"})
 */
public function index(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
{
    $Donne = $entityManager
    ->getRepository(Consultation::class)
    ->findAll();
    $consultations= $paginator->paginate(
        $Donne,
        $request->query->getInt('page',1),
        4

      );


return $this->render('consultation/index.html.twig', [
    'consultations' => $consultations,
]);
}
    /**
     * @Route("/new", name="app_consultation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $consultation = new Consultation();
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($consultation);
            $entityManager->flush();

            return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/new.html.twig', [
            'consultation' => $consultation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idC}", name="app_consultation_show", methods={"GET"})
     */
    public function show(Consultation $consultation): Response
    {
        return $this->render('consultation/show.html.twig', [
            'consultation' => $consultation,
        ]);
    }

    /**
     * @Route("/{idC}/edit", name="app_consultation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Consultation $consultation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/edit.html.twig', [
            'consultation' => $consultation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/delete/{idC}", name="app_consultation_delete", methods={"POST"})
     */
    public function delete(Request $request, Consultation $consultation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$consultation->getIdC(), $request->request->get('_token'))) {
            $entityManager->remove($consultation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_consultation_index', [], Response::HTTP_SEE_OTHER);
    }
    
    /**
     * @Route("/consultation/{idC}", name="supp_cons")
     */
    public function SupprimerConsultation($idC): Response
    {
        $em= $this->getDoctrine()->getManager();
        $delete= $em->getRepository(Consultation::class)->find($idC);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_consultation_ front_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
 * @Route("app_consultation_ front_index", name="app_consultation_ front_index")
 */
public function app(EntityManagerInterface $entityManager): Response
{
    $consultations = $entityManager
            ->getRepository(Consultation::class)
            ->findAll();

        return $this->render('consultation/index_front.html.twig', [
            'consultations' => $consultations,
        ]);
}
    
        /**
         * @Route("ajouterCons", name="ajouterCons")
         */
        public function ajouterCons(Request $request, EntityManagerInterface $entityManager ,\Swift_Mailer $mailer): Response
        {
            $consultation = new Consultation();
            $form = $this->createForm(ConsultationType::class, $consultation);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager->persist($consultation);
                $entityManager->flush();
                $c=$this->getDoctrine()->getRepository(Consultation::class)->find($consultation);
                $message = (new \Swift_Message('Nouveau patient'))
            
            ->setFrom('aa@gmaul.com')
            ->setTo('gamra.benmarzouka@esprit.tn')
            ->setBody( $consultation->getNom()  ) ;
              // On envoie le message
              $mailer->send($message);

              $this->addFlash('message', 'Le message a bien été envoyé');
    
                return $this->redirectToRoute('app_consultation_ front_index', [], Response::HTTP_SEE_OTHER);
            }
    
            return $this->render('consultation/ajouter_form.html.twig', [
                'consultation' => $consultation,
                'form' => $form->createView(),
            ]);
    
}

/**
 * @Route("/{idC}/afficher", name="afficher_cons", methods={"GET"})
 */
public function afficher(Consultation $consultation): Response
{
    
        return $this->render('consultation/afficher.html.twig', [
            'consultation' => $consultation,
        ]);
    }
    /**
     * @Route("/{idC}/modifier ", name="app_consultation_modifier", methods={"GET", "POST"})
     */
    public function modifier(Request $request, Consultation $consultation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ConsultationType::class, $consultation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_consultation_ front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('consultation/modifier.html.twig', [
            'consultation' => $consultation,
            'form' => $form->createView(),
        ]);
    }
    //*****MOBILE

    /**
     * @Route("/mobile/aff", name="affmobconsult")
     */
    public function affmobconsult(NormalizerInterface $normalizer)
    {
        $med=$this->getDoctrine()->getRepository(Consultation::class)->findAll();
        $jsonContent = $normalizer->normalize($med,'json',['consultation'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/new", name="addmobcons")
     */
    public function addmobcons(Request $request,NormalizerInterface $normalizer,EntityManagerInterface $entityManager)
    {
        $consultation= new Consultation();
        $consultation->setNom($request->get('nom'));
        $consultation->setPrenom($request->get('prenom'));
        $consultation->setAge($request->get('age'));
        $consultation->setSexe($request->get('sexe'));
        $consultation->setEmail($request->get('email'));
        $consultation->setEtatPhysique($request->get('etatphy'));
        $consultation->setCategorieC($request->get('categorie'));
        $rest=substr($request->get('daterdv'), 0, 20);
        $rest1=substr($request->get('daterdv'), 30, 34);
        $res=$rest.$rest1;
        try {
            $date = new \DateTime($res);
            $consultation->setDateRdv( $date->format('d/m/Y'));
        } catch (\Exception $e) {

        }

        $entityManager->persist($consultation);
        $entityManager->flush();

        $jsonContent = $normalizer->normalize($consultation,'json',['consultation'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/editcons", name="editmobcons")
     */
    public function editmobcons(Request $request,NormalizerInterface $normalizer)
    {   $em=$this->getDoctrine()->getManager();

        $consultation = $em->getRepository(Consultation::class)->find($request->get('id'));

        $consultation->setNom($request->get('nom'));
        $consultation->setPrenom($request->get('prenom'));
        $consultation->setAge($request->get('age'));
        $consultation->setSexe($request->get('sexe'));
        $consultation->setEmail($request->get('email'));
        $consultation->setEtatPhysique($request->get('etatphy'));
        $consultation->setCategorieC($request->get('categorie'));
        $rest=substr($request->get('daterdv'), 0, 20);
        $rest1=substr($request->get('daterdv'), 30, 34);
        $res=$rest.$rest1;
        try {
            $date = new \DateTime($res);
            $consultation->setDateRdv( $date->format('d/m/Y'));
        } catch (\Exception $e) {

        }
        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($consultation) {
            return $consultation->getIdC();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($consultation);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/mobile/del", name="delmobcons")
     */
    public function delmobcons(Request $request,NormalizerInterface $normalizer)
    {           $em=$this->getDoctrine()->getManager();
        $consul=$this->getDoctrine()->getRepository(Consultation::class)
            ->find($request->get('id'));
        $em->remove($consul);
        $em->flush();
        $jsonContent = $normalizer->normalize($consul,'json',['consultation'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

}
