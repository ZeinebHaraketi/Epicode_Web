<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Entity\Enfant;
use App\Form\ActiviteType;
use App\Form\EnfantType;
use App\Controller\EnfantController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\SearchActiviteType;
use App\Repository\ActiviteRepository;
use App\Repository\EnfantRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
//use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;






/**
 * @Route("/activite")
 */
class ActiviteController extends AbstractController

{
    /**
     * @Route("/excel", name="excel")
     */
    public function Excel()
    {
        $spreadsheet = new Spreadsheet();
        
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setTitle("Liste des Activités");
        
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);
        
        // In this case, we want to write the file in the public directory
        $publicDirectory = $this->get('kernel')->getProjectDir() . '/public';
        // e.g /var/www/project/public/my_first_excel_symfony4.xlsx
        $excelFilepath =  $publicDirectory . '/Activite.xlsx';
        
        // Create the file
        $writer->save($excelFilepath);
        
        // Return a text response to the browser saying that the excel was succesfully created
        return new Response("Excel generated succesfully");
    }
     /**
 * @Route("/statistique", name="app_act_statistique")
 */
public function statAct(){

    $repository = $this->getDoctrine()->getRepository(Activite::class);
    $activite = $repository->findAll();

    $em = $this->getDoctrine()->getManager();


    $pr1=0;
    $pr2=0;
    $pr3= 0;



    foreach ($activite as $activite)
    {
        if ( $activite->getType()=="Sport")  :

            $pr1+=1;
        else:

            $pr2+=1;
            $pr3+=1;


        endif;

    }

    $pieChart = new PieChart();
    $pieChart->getData()->setArrayToDataTable(
        [['Type', 'label'],
            ['Sport', $pr1],
            ['Divertissement', $pr2],
            ['Education', $pr3],
        ]
    );
    $pieChart->getOptions()->setTitle('STATISTIQUE DES CATEGORIES D_AGE');
    $pieChart->getOptions()->setHeight(500);
    $pieChart->getOptions()->setWidth(900);
    $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
    $pieChart->getOptions()->getTitleTextStyle()->setColor('#91b59f');
    $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
    $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
    $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

    return $this->render('activite/stats.html.twig', array('piechart' => $pieChart));
}

    /**
     * @Route("/", name="app_activite_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
    {
        $Donne = $entityManager
            ->getRepository(Activite::class)
            ->findAll();
        
            $activites= $paginator->paginate(
                $Donne,
                $request->query->getInt('page',1),
                4
     
              );

        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
        ]);
    }

    /**
     * @Route("/triAct_Age", name="triAct_Age")
     * 
     */
    public function triAct_Age(): Response
    {
        $repo=$this->getDoctrine()->getRepository(Activite::class);
        $activite= $repo->findBy([],['catAge'=>'DESC']);
        dump($activite);
        return $this->render('activite/tri.html.twig', ['activite'=>$activite]);
    }

    /**
     * @Route("/triAct", name="triAct")
     * 
     */
    public function triAct(): Response
    {
        $repo=$this->getDoctrine()->getRepository(Activite::class);
        $activite= $repo->findBy([],['nomA'=>'ASC']);
        dump($activite);
        return $this->render('activite/tri.html.twig', ['activite'=>$activite]);
    }


    // LES  attributs
    public function getRealEntities($activites){
        foreach ($activites as $activites){
            $realEntities[$activites->getIdA()] = [$activites->getImage(),$activites->getNomA(),$activites->getCatAge(),$activites->getType()];

        }
        return $realEntities;
    }

    //RECHERCHE AVANCE AJAX BLOG

    //SEARCH

    /**
     * @Route("/ajax_search/", name="ajax_search")
     */
    public function chercherProduit(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');// ooofkdokfdfdf
        $products =  $em->getRepository(Activite::class)->rechercheAvance($requestString);

        if(!$products) {
            $result['activites']['error'] = "Activité non trouvé :( ";
        } else {
            $result['activites'] = $this->getRealEntities($products);
        }
        return new Response(json_encode($result));
    }

   
    


 /**
     * @Route("/pdf", name="PDF_Activite", methods={"GET"})
     */
    public function pdf()
    {
        $activite= $this->getDoctrine()->getRepository(Activite::class)->findAll();

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('activite/pdf.html.twig', [
            'activites' => $activite
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("ListeDesActivites.pdf", [
            "activites" => true
        ]);
    }
    /**
     * @Route("/listactivites", name="listactivites")
     */
    public function list(Request $request, PaginatorInterface $paginator): Response
    {
        
        $Repository=$this -> getDoctrine () -> getRepository (Activite::class);
        $activites= $Repository -> findAll();

        return $this->render('activite/affiche.html.twig', [
            'activites' => $activites,
        ]);

       
    }

    

    /**
     * @Route("/new", name="newActivite",methods={"GET", "POST"})
     */
    public function newActivite(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activite = new Activite();
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageFile = $form->get('image')->getData();
            $image= $request -> files->get ('activite')['image'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
           
            $activite->setImage($filename);
                $entityManager->persist($activite);
                $entityManager->flush();
                $activite= $form->getData();
                $this->addFlash('message','Activite a bien ete ajouter ');
                return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
            

        }

        return $this->render('activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/addEnfant", name="addEnfant")
     */
    public function addEnfant(Request $request, EntityManagerInterface $entityManager)
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
     * @Route("/activite/show/{idA}", name="app_activite_show", methods={"GET"})
     */
    public function show(Activite $activite): Response
    {
        return $this->render('activite/show.html.twig', [
            'activite' => $activite,
        ]);
    }

    /**
     * @Route("/{idA}", name="app_activite_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActiviteType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image= $request -> files->get ('activite')['image'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';;
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $activite ->setImage ($filename);
            

            $entityManager->flush();

            return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idA}", name="app_activite_delete", methods={"POST"})
     */
    public function delete(Request $request, Activite $activite, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activite->getIdA(), $request->request->get('_token'))) {
            $entityManager->remove($activite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activite_index', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/activite/add_activite", name="add_activite")
     */
    public function AjouterActivite(Request $request)
    {
        $activite= new Activite();
        $form= $this->createForm(ActiviteType::class,$activite);
        $em=$this->getDoctrine()->getManager();

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()) {
            /**
         * @var UploadedFile $file
         */
        $file = $form->get('image')->getData();
        $fileName = md5(uniqid()).'.'.$file->guessExtension();
        $file->move($this->getParameter('images_directory'),$fileName);
        $activite->setImage($fileName);
        $em->persist($activite);
        $em->flush();
        return $this->redirectToRoute("listeA");
        }
        return $this->render("activite/add_act.html.twig",array('form'=>$form->createView()));
    }

     /**
     * @Route("/activite/listeA", name="listeA")
     */
    public function listActivite(): Response
    {
        //return $this->render('$0.html.twig', []);
        $activite= $this->getDoctrine()->getRepository(Activite::class)->findAll();

        return $this->render("activite/list.html.twig",array('activite'=>$activite));
    }

     /**
     * @Route("/activite/modif_act/{id}", name="modif_act")
     */
    public function ModifierActivite(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $activite = $em->getRepository(Activite::class)->find($id);
        $form = $this->createForm(ActiviteType::class, $activite);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $file = $form->get('image')->getData();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('images_directory'),$fileName);
            $activite->setImage($fileName);
            $em->flush();
            return $this->redirectToRoute('listeA');
        }
        return $this->render('activite/modifier_activite.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/activite/{idA}", name="supp_act")
     */
    public function SupprimerActivite($idA)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Activite::class)->find($idA);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_activite_index');
    }

    


   /**
    * @Route("/activite/{id}/remove/{id_enfant}", name="remove_enfant")
    */
   public function removeEnfant($id,$id_enfant)
   {
    $manager= $this->getDoctrine()->getManager();
    $comment= $manager->getRepository(Enfant::class)->find($id_enfant);
    $manager->remove($comment);
    $manager->flush();
    return $this->redirectToRoute('showACT', array('idA' => $id));
   }
   
   //Enfant EDIT
    /**
     * @Route("/enfant/{id_enfant}/edit", name="edit_enfant")
     */
    public function editEnfant(Request $request, $id_enfant, EntityManagerInterface $entityManager): Response
    {
        $enfantCourant = $entityManager->getRepository(Enfant::class)->find($id_enfant);

        $form = $this->createForm(EnfantType::class, $enfantCourant);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->flush();

            return $this->redirectToRoute('showACT', ["idA"=>$enfantCourant->getIdA()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activite/editEnfant.html.twig', [
            'enfant' => $enfantCourant,
            'form' => $form->createView(),
        ]);
    }

    //recherch selon le nom

    /**
     * @Route("/listActWithSearch", name="listActWithSearch")
     */
    public function listActWithSearch(Request $request, ActiviteRepository $activiteRepository)
    {
        //all activites
        $activite= $activiteRepository->findAll();
        //search
        $searchForm = $this->createForm(SearchActiviteType::class);
        $searchForm->add("Recherche",SubmitType::class);
        $searchForm->handleRequest($request);

        if ($searchForm->isSubmitted()) {
            $Nom_a = $searchForm['nomA']->getData();
            $resulta = $activiteRepository->searchNom($Nom_a);
            return $this->render('activite/SearchAct.html.twig', array(
                "activites" => $resulta,
                "searchAct" => $searchForm->createView()));
        }
        return $this->render('activite/SearchAct.html.twig', array(
            "activites" => $activite,
            "searchAct" => $searchForm->createView()));
    }

    //Recherche Dynamique
    /**
     * @Route("/Rechercher_Act", name="RechAct")
     */
    public function SearchActivite(Request $request, ActiviteRepository $activiteRepository)
    {
        $data=$request->get('search');
        $activite=$activiteRepository->rechercher($data);
        return $this->render("activite/SearchAct.html.twig",array('listactivite'=>$activite));
    }
    
    /**
     * @Route("/activite/Details/{idA}", name="app_activite_details", methods={"GET"})
     */
    public function Details(Activite $activite): Response
    {
        return $this->render('activite/Detail.html.twig', [
            'activite' => $activite,
        ]);
    }
    

   // Ajouter un activite a partir de Json

   /**
    * @Route("AddActiviteJSON", name="AddActiviteJSON")
    */
   public function AddActiviteJSON(Request $request,NormalizerInterface $Normalizer)
   {
    $em= $this->getDoctrine()->getManager();
    $Activite = new Activite();
    
    $Activite->setNomA($request->get('nomA'));
    $Activite->setCatAge($request->get('catAge'));
    $Activite->setType($request->get('type'));
    $Activite->setImage($request->get('image'));
    $Activite->setIdEnfant($request->get('idEnfant'));

    $em->persist($Activite);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Activite,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));

   }

   // Afficher une activité à partir de Json

   /**
    * @Route("AllActiviteJSON", name="AllActiviteJSON")
    */
   public function AllActiviteJSON(NormalizerInterface $Normalizer,ActiviteRepository $activiterepository)
   {
       $repository= $this->getDoctrine()->getRepository(Activite::class);
       $Activite = $activiterepository->findAll();
       $jsonContent = $Normalizer->normalize($Activite,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
   }
   
    /**
     * @Route("/mobile/aff", name="affmobactivite")
     */
    public function affmobactivite(NormalizerInterface $normalizer)
    {
        $med=$this->getDoctrine()->getRepository(Activite::class)->findAll();
        $jsonContent = $normalizer->normalize($med,'json',['act'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


   /**
     * @Route("/mobile/new", name="addmobact")
     */
    public function addmobblg(Request $request,NormalizerInterface $normalizer,EntityManagerInterface $entityManager)
    {
        $act= new Activite();
		$enfant = new Enfant();
        $id = $request->query->get('id_enfant');
        $enfant = $this->getDoctrine()->getRepository(Enfant::class)->findOneBy(['idEnfant' => $id]);
		
        $act->setNomA($request->get('nom_a'));
        $act->setCatAge($request->get('cat_age'));
        $act->setType($request->get('type'));
        $act->setImage($request->get('image'));
        $act->setIdEnfant($enfant);

        
        $entityManager->persist($act);
        $entityManager->flush();

        $jsonContent = $normalizer->normalize($act,'json',['act'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

   // Update une activité à partir de Json
 
    
 
   /**
    * @Route("/UpdateActiviteJSON/{idA}", name="UpdateActiviteJSON")
    */
   public function UpdateActiviteJSON($idA,Request $request,NormalizerInterface $Normalizer)
   {/*
	   $enfant = new Enfant();
        $id = $request->query->get('idEnfant');
        $enfant = $this->getDoctrine()->getRepository(Enfant::class)->findOneBy(['idEnfant' => $id]);
    $em=$this->getDoctrine()->getManager();	
    $act=$em->getRepository(Activite::class)->find($idA);
        $act->setNomA($request->get('nomA'));
        $act->setCatAge($request->get('catAge'));
        $act->setType($request->get('type'));
        $act->setImage($request->get('image'));
        $act->setIdEnfant($enfant);
    $em->flush();
    $jsonContent = $Normalizer->normalize($act,'json',['act'=>'post:read']);
    return new Response("Update successfully".json_encode($jsonContent));*/
	 $em = $this->getDoctrine()->getManager();
    $Activite = $em->getRepository(Activite::class)->find($idA);
    $Activite->setNomA($request->get('nomA'));
    $Activite->setCatAge($request->get('catAge'));
    $Activite->setType($request->get('type'));
    $Activite->setImage($request->get('image'));
    $Activite->setIdEnfant($request->get('idEnfant'));
    $em->flush();
    $jsonContent = $Normalizer->normalize($Activite, 'json', ['groups' => 'post:read']);
    return new Response("Information updated successfully" . json_encode($jsonContent));;
   }

   //Supprimer d'une activité a partie du json

   /**
    * @Route("/DeleteActiviteJSON/{idA}", name="DeleteActiviteJSON")
    * 
    */

   public function DeleteActiviteJSON($idA,Request $request,NormalizerInterface $Normalizer)
   {
    $em=$this->getDoctrine()->getManager();
    $Activite=$em->getRepository(Activite::class)->find($idA);
    $em->remove($Activite);
    $em->flush();
    $jsonContent = $Normalizer->normalize($Activite,'json',['groups'=>'post:read']);
        return new Response("Delete successfully".json_encode($jsonContent));
    /*
    if ($Activite!= null) {
        $em->remove($Activite);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Activite,'json',['groups'=>'post:read']);
        return new Response("Delete successfully".json_encode($jsonContent));
    }
    else 
    {
        return new Response("id agence invalide.");   
    }*/
    
   }
    
}
