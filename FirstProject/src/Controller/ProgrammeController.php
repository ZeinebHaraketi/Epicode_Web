<?php

namespace App\Controller;

use App\Entity\Consultation;
use App\Entity\Programme;
use App\Form\ProgrammeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/programme")
 */
class ProgrammeController extends AbstractController
{
    /**
     * @Route("/", name="app_programme_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $programmes = $entityManager
            ->getRepository(Programme::class)
            ->findAll();

        return $this->render('programme/index.html.twig', [
            'programmes' => $programmes,
        ]);
    }

    /**
     * @Route("/new", name="app_programme_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $programme = new Programme();
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($programme);
            $entityManager->flush();

            return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programme/new.html.twig', [
            'programme' => $programme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{id}", name="app_programme_show", methods={"GET"})
     */
    public function show(Programme $programme): Response
    {
        return $this->render('programme/show.html.twig', [
            'programme' => $programme,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_programme_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProgrammeType::class, $programme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('programme/edit.html.twig', [
            'programme' => $programme,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_programme_delete", methods={"POST"})
     */
    public function delete(Request $request, Programme $programme, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$programme->getId(), $request->request->get('_token'))) {
            $entityManager->remove($programme);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_programme_index', [], Response::HTTP_SEE_OTHER);
    }
    


    /**
     * @Route("/programme/{id}", name="supp_prog")
     */
    public function SupprimerProgramme($id): Response
    {
        $em= $this->getDoctrine()->getManager();
        $delete= $em->getRepository(Programme::class)->find($id);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_programme_index');
    }
    
    /**
     * @Route("/listprog", name="listprog")
     */
    public function list(Request $request): Response
    {
        $Repository=$this -> getDoctrine () -> getRepository (Programme::class);
        $programme= $Repository -> findAll();

        foreach($programme as $prog)
        {
            $datee = null;
            $rest=substr($prog->getDateR(), 0, 2);
            if(substr($prog->getDateR(), 5, 1)=="/")
            {
                $rest1=substr($prog->getDateR(), 4, 1);
                $rest1='0'.$rest1;
                $rest2=substr($prog->getDateR(), 6,4);

            }
            else
            {
                $rest1=substr($prog->getDateR(), 4, 2);
                $rest2=substr($prog->getDateR(), 7,4);

            }
            $res=$rest.'-'.$rest1.'-'.$rest2;
            try {
                $datee = new \DateTime($res);
            } catch (\Exception $e) {
    
            }
                $datec[] = [
                    'id' => $prog->getId(),
                    'start' => $datee->format('Y-m-d H:i:s'),
                    'title' => $prog->getDescription(),
                ];
    
    
        }
        $data = json_encode($datec);

        return $this->render('programme/affiche.html.twig', [
            'programme' => $programme,
            'data' => $data,

        ]);

    }
   /**
    * @Route("/afficher/{id}", name="afficher_front", methods={"GET"})
    */
   public function affiche_front(Programme $programme): Response
   {
    
        return $this->render('programme/afficher_front.html.twig', [
            'programme' => $programme,
        ]);
   }


  
}

