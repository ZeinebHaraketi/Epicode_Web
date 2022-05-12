<?php

namespace App\Controller;

use App\Entity\Panier;
use App\Entity\Produit;
use App\Form\PanierType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panier")
 */
class PanierController extends AbstractController
{
    /**
     * @Route("/", name="app_panier_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $paniers = $entityManager
            ->getRepository(Panier::class)
            ->findAll();

        return $this->render('panier/index.html.twig', [
            'paniers' => $paniers,
        ]);
    }
    /**
     * @Route("/listpanier", name="listpanier")
     */
    public function list(Request $request): Response
    {
        
        $Repository=$this -> getDoctrine () -> getRepository (Panier::class);
        $panier= $Repository -> findAll();
        return $this->render('panier/affiche.html.twig', [
            'panier' => $panier,
        ]);

       
    }

    /**
     * @Route("/new", name="app_panier_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $panier = new Panier();
        $form = $this->createForm(PanierType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($panier);
            $entityManager->flush();

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('panier/new.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/new/{id}", name="app_panier_new_front", methods={"GET", "POST"})
     */
    public function newFront(Request $request, EntityManagerInterface $entityManager,$id): Response
    {
        $prod=$this->getDoctrine()->getRepository(Produit::class)->find($id);

        $panier=$this->getDoctrine()->getRepository(Panier::class)->findOneBy([
            'idP' => $prod
        ]);
        if (!empty($panier)) {

            $panier->setQuantite( $panier->getQuantite()+1);

            }
        else
        {
            $panier = new Panier();
            $panier->setIdP($prod);
            $panier->setQuantite(1);
            $panier->setCoupon("");

        }
        $entityManager->persist($panier);
        $entityManager->flush();


            return $this->redirectToRoute('app_panier_show', [], Response::HTTP_SEE_OTHER);

    }



    /**
     * @Route("/show", name="app_panier_show", methods={"GET"})
     */
    public function show(): Response
    {
        $paniers = $this->getDoctrine()->getRepository(Panier::class)->findAll();
        $totalp=0;
        foreach($paniers as $tmp)
        {
            $totalp= $totalp +((intval($tmp->getIdP()->getPrix())) *  $tmp->getQuantite());
        }
        return $this->render('panier/affiche.html.twig', [
            'paniers' => $paniers,
            'totalp' => $totalp,
        ]);
    }

    /**
     * @Route("/{idPa}/edit", name="app_panier_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PaniertType::class, $panier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
          
            $entityManager->flush();

            return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('panier/edit.html.twig', [
            'panier' => $panier,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPa}", name="app_panier_delete", methods={"POST"})
     */
    public function delete(Request $request, Panier $panier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$panier->getIdPa(), $request->request->get('_token'))) {
            $entityManager->remove($panier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_panier_index', [], Response::HTTP_SEE_OTHER);
    }
    
/**
     * @Route("/panier/{idPa}", name="supp_panier")
     */
    public function SupprimerPanier($idPa)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Panier::class)->find($idPa);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_panier_show', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/AddQuantity/{id}", name="AddQuantity")
     */
    function AddQuantityAction(Request $request,$id){
        $panier=$this->getDoctrine()->getRepository(Panier::class)->find($id);
        $panier->setQuantite( $panier->getQuantite()+1);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('app_panier_show', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/RemoveQuantity/{id}", name="RemoveQuantity")
     */
    function RemoveQuantityAction(Request $request,$id){
        $panier=$this->getDoctrine()->getRepository(Panier::class)->find($id);
        $panier->setQuantite( $panier->getQuantite()-1);

        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('app_panier_show', [], Response::HTTP_SEE_OTHER);
    }



       
} 