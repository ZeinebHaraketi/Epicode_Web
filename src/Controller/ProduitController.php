<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Services\QrcodeService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/produit")
 */
class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="app_produit_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
    {
        $Donne= $entityManager
            ->getRepository(Produit::class)
            ->findAll();
            $produits= $paginator->paginate(
                $Donne,
                $request->query->getInt('page',1),
                4
     
              );

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }
    /**
     * @Route("/listproduit", name="listproduit")
     */
    public function list(Request $request): Response
    {
        
        $Repository=$this -> getDoctrine () -> getRepository (Produit::class);
        $produits= $Repository -> findAll();
        return $this->render('produit/affiche.html.twig', [
            'produits' => $produits,
        ]);

       
    }

    /**
     * @Route("/new", name="app_produit_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,QrcodeService $qrcodeService): Response
    {
        $qrCode=null;

        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('photo')->getData();
            $photo= $request -> files->get ('produit')['photo'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';
            $filename =md5(uniqid()) . '.' . $photo ->guessExtension();
            $photo ->move(
                $uploads_directory,
                $filename
            );
           
            $produit->setPhoto($filename);

            $qrCode=$qrcodeService->qrCode($produit->getNomP());

            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }



        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{idP}", name="app_produit_show", methods={"GET"})
     */
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    /**
     * @Route("/{idP}/edit", name="app_produit_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photo= $request -> files->get ('produit')['photo'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';;
            $filename =md5(uniqid()) . '.' . $photo ->guessExtension();
            $photo ->move(
                $uploads_directory,
                $filename
            );
        $produit->setPhoto ($filename);

            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idP}", name="app_produit_delete", methods={"POST"})
     */
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getIdP(), $request->request->get('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
    
/**
     * @Route("/produit/{idP}", name="supp_produit")
     */
    public function SupprimerBlg($idP)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Produit::class)->find($idP);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_produit_index');
    }
          
    //*****MOBILE

    /**
     * @Route("/mobile/aff", name="affmobproduit")
     */
    public function affmobproduit(NormalizerInterface $normalizer)
    {
        $med=$this->getDoctrine()->getRepository(Produit::class)->findAll();
        $jsonContent = $normalizer->normalize($med,'json',['produit'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/new", name="addmobprod")
     */
    public function addmobprod(Request $request,NormalizerInterface $normalizer,EntityManagerInterface $entityManager)
    {
        $produit= new Produit();
        $produit->setNomP($request->get('nom'));
        $produit->setPrix($request->get('prix'));
        $produit->setPhoto($request->get('image'));
        $produit->setCategories($request->get('categorie'));

        $entityManager->persist($produit);
        $entityManager->flush();

        $jsonContent = $normalizer->normalize($produit,'json',['produit'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/editprod", name="editmobproduit")
     */
    public function editmobproduit(Request $request,NormalizerInterface $normalizer)
    {   $em=$this->getDoctrine()->getManager();

        $produit = $em->getRepository(Produit::class)->find($request->get('id'));

        $produit->setNomP($request->get('nom'));
        $produit->setPrix($request->get('prix'));
        $produit->setPhoto($request->get('image'));
        $produit->setCategories($request->get('categorie'));


        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($produit) {
            return $produit->getId();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($produit);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/mobile/del", name="delmobproduit")
     */
    public function delmobproduit(Request $request,NormalizerInterface $normalizer)
    {           $em=$this->getDoctrine()->getManager();
        $prod=$this->getDoctrine()->getRepository(Produit::class)
            ->find($request->get('id'));
        $em->remove($prod);
        $em->flush();
        $jsonContent = $normalizer->normalize($prod,'json',['produit'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

}  

