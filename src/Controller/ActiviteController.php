<?php

namespace App\Controller;

use App\Entity\Activite;
use App\Form\ActiviteType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * @Route("/activite")
 */
class ActiviteController extends AbstractController
{
    /**
     * @Route("/", name="app_activite_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $activites = $entityManager
            ->getRepository(Activite::class)
            ->findAll();

        return $this->render('activite/index.html.twig', [
            'activites' => $activites,
        ]);
    }

    /**
     * @Route("/listactivites", name="listactivites")
     */
    public function list(Request $request): Response
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
}
