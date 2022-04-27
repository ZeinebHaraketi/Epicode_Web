<?php

namespace App\Controller;

use App\Entity\Coaching;
use App\Form\CoachingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator
use Dompdf\Dompdf;
use Dompdf\Options;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

/**
 * @Route("/coaching")
 */

class CoachingController extends AbstractController
{
    /**
     * @Route("/", name="app_coaching_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request,PaginatorInterface $paginator): Response
    {
        $donnees = $coachings = $entityManager
        ->getRepository(Coaching::class)
        ->findAll();
        $coachings = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3 // Nombre de résultats par page
        );

    return $this->render('coaching/index.html.twig', [
        'coachings' => $coachings,
    ]);
}

/**
     * @Route("/new", name="app_coaching_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coaching = new Coaching();
        $form = $this->createForm(CoachingType::class, $coaching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coaching);
            $entityManager->flush();
            $this->addFlash('success', 'séance ajoutée!');

            return $this->redirectToRoute('app_coaching_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coaching/new.html.twig', [
            'coaching' => $coaching,
            'form' => $form->createView(),
            
        ]);
        
    }

     /**
     * @Route("/front/new", name="app_coaching_indexfront", methods={"GET", "POST"})
     */
    public function newfront(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coaching = new Coaching();
        $form = $this->createForm(CoachingType::class, $coaching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coaching);
            $entityManager->flush();

            return $this->redirectToRoute('app_coaching_indexfront', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coaching/newfront.html.twig', [
            'coaching' => $coaching,
            'form' => $form->createView(),
        ]);
    }

   

 

    /**
     * @Route("/edit/{id}", name="app_coaching_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Coaching $coaching, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CoachingType::class, $coaching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_coaching_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coaching/edit.html.twig', [
            'coaching' => $coaching,
            'form' => $form->createView(),
        ]);
    }

   

    
    /**
     * @Route("/p", name="pdf", methods={"GET"})
     * @return Response
     * @param EntityManagerInterface $entityManager
     */
    public function pdf(EntityManagerInterface $entityManager): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('coaching/pdf.html.twig', [
            'coachings' => $entityManager
            ->getRepository(Coaching::class)
            ->findAll()
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
    }



    /**
     * @Route("/stat", name="coaching_stat")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Coaching::class);
        $coachings = $repository->findAll();
        $em = $this->getDoctrine()->getManager();
        
        $rd=0; 
        $qu=0;
        $es=0;
       

        foreach ($coachings as $coachings)
        {
            if (  $coachings->getPrix()==50)  :
            
                $rd+=1; 
             elseif ($coachings->getPrix()==20):

                $qu+=1; 
             else :
                $es +=1;  
            
             endif;

        }


        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['prix', 'nombres'],
             ['séance présentielle',     $rd],
             ['séance en ligne',      $qu]
            
            ]
        );
        $pieChart->getOptions()->setTitle('stat des seances selon le type ');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);
    
        return $this->render('coaching/stat.html.twig', array('piechart' => $pieChart));
        }

    /**
     * @Route("/delete/{id}", name="app_coaching_delete", methods={"POST"})
     */
    public function delete(Request $request, Coaching $coaching, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coaching->getId(), $request->request->get('_token'))) {
            $entityManager->remove($coaching);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_coaching_index', [], Response::HTTP_SEE_OTHER);
    }
 /**
     * @Route("/{id}", name="app_coaching_show", methods={"GET"})
     */
    public function show(Coaching $coaching): Response
    {
        return $this->render('coaching/show.html.twig', [
            'coaching' => $coaching,
        ]);
    }
   


    /**
     * @Route("/modifiervalidation/{id}", name="c")
     * @param Request $request
     * @return Response
     */      
    public function modiferValidation(Request $request,$id): Response
    {
        $Coaching = new Coaching();
        $Coaching = $this->getDoctrine()->getRepository(Coaching::class)->find($id);

       $Coaching->setValidation("valide");
      
        $em = $this->getDoctrine()->getManager();
        $em->persist($Coaching);
        $em->flush();
        return $this->redirectToRoute("app_coaching_index");
        }

    
}
