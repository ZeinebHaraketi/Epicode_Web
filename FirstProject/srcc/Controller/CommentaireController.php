<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\LikeDislike;
use App\Form\CommentaireType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/commentaire")
 */
class CommentaireController extends AbstractController
{
    /**
     * @Route("/", name="app_commentaire_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
    {
        $Donne = $entityManager
            ->getRepository(Commentaire::class)
            ->findAll();
            
            $commentaires= $paginator->paginate(
                $Donne,
                $request->query->getInt('page',1),
                4
     
              );

        return $this->render('commentaire/index.html.twig', [
            'commentaires' => $commentaires,
        ]);
    }

    /**
     * @Route("/new", name="app_commentaire_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDate(new \DateTime());

            $entityManager->persist($commentaire);
            $entityManager->flush();
            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/new.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCom}", name="app_commentaire_show", methods={"GET"})
     */
    public function show(Commentaire $commentaire): Response
    {
        return $this->render('commentaire/show.html.twig', [
            'commentaire' => $commentaire,
        ]);
    }

    /**
     * @Route("/{idCom}/edit", name="app_commentaire_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/edit.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idCom}", name="app_commentaire_delete", methods={"POST"})
     */
    public function delete(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commentaire->getIdCom(), $request->request->get('_token'))) {
            $entityManager->remove($commentaire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commentaire_index', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/commentaire/{idCom}", name="supp_com")
     */
    public function Supprimercommentaire($idCom)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Commentaire::class)->find($idCom);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_commentaire_index');
    }
    /**
 * @Route("afficher", name="afficher")
 */
public function afficher(EntityManagerInterface $entityManager): Response
{
    $commentaires = $entityManager
    ->getRepository(Commentaire::class)
    ->findAll();

return $this->render('commentaire/affiche.html.twig', [
    'commentaires' => $commentaires,
]);
}
    /**
 * @Route("ajouterCom", name="ajouterCom")
 */
public function FunctionName(Request $request, EntityManagerInterface $entityManager): Response
{
    $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setDate(new \DateTime());
            $entityManager->persist($commentaire);
            $entityManager->flush();

            return $this->redirectToRoute('afficher', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/ajputer.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);
}
/**
 * @Route("modifier", name="modifier" , methods={"GET", "POST"})
 */
public function modifier(Request $request, Commentaire $commentaire, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('afficher', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commentaire/modifier.html.twig', [
            'commentaire' => $commentaire,
            'form' => $form->createView(),
        ]);

}

}
