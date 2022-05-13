<?php

namespace App\Controller;

use App\Entity\Blg;
use App\Entity\Commentaire;
use App\Entity\Likes;
use App\Entity\Ratingblg;
use App\Form\BlgType;
use App\Form\CommentaireType;
use App\Form\RatingblgType;
use App\Repository\BlgRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/blg")
 */
class BlgController extends AbstractController
{
    /**
     * @Route("/", name="app_blg_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager,Request $request, PaginatorInterface $paginator): Response
    {
        $Donne = $entityManager
            ->getRepository(Blg::class)
            ->findAll();
        $rates = $entityManager
            ->getRepository(Ratingblg::class)
            ->findAll();
            $blgs= $paginator->paginate(
                $Donne,
                $request->query->getInt('page',1),
                4
     
              );
        return $this->render('blg/index.html.twig', [
            'blgs' => $blgs,
            'rates' => $rates,
        ]);
    }
    /**
     * @Route("/listblg", name="listblg")
     */
    public function list(Request $request): Response
    {

            $Repository=$this -> getDoctrine () -> getRepository (Blg::class);
        $blg= $Repository -> findAll();
        return $this->render('blg/affiche.html.twig', [
            'blg' => $blg,
        ]);

       
    }

    /**
     * @Route("/new", name="app_blg_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,Client $twilioClient): Response
    {
        $blg = new Blg();
        $ratin = new Ratingblg();
        $form = $this->createForm(BlgType::class, $blg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            $image= $request -> files->get ('blg')['image'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
           
            $blg->setImage($filename);

            $blg->setDate(new \DateTime());
            $entityManager->persist($blg);
            $entityManager->flush();
            $ratin->setIdblg($blg->getIdB());
            $ratin->setRat(0);
            $entityManager->persist($ratin);
            $entityManager->flush();
              //Send SMS 
            //
            /*
            $twilioClient->messages->create("+216 20 072 897", [
                "body" => "Nouveau Blog  à été avec success",
                "from" => "+17152882584"
            ]);
           */

            return $this->redirectToRoute('app_blg_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blg/new.html.twig', [
            'blg' => $blg,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/show/{idB}", name="app_blg_show", )
     */
    public function show($idB, Request $request)
    {

        $repo = $this->getDoctrine()->getRepository(Blg::class);

        $repo2 = $this->getDoctrine()->getRepository(Commentaire::class);
        $comment = new Commentaire();

        $form = $this->createForm(CommentaireType::class, $comment);
        $form->handleRequest($request);

        $article = $repo->find($idB);

        $comments = $repo2->findBy(['idB' => $idB], array('date' => 'DESC'));


        if ($form->isSubmitted() && $form->isValid()) {
            $comment->getIdB()->setTitre($article);
            $dt = new \DateTime();
            $comment->setDate($dt);
            $comment->setNomArticle($article);

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('listblg', array('id' => $idB));


        }

        return $this->render('blg/show.html.twig', ['blg' => $article, 'comments' => $comments, 'form' => $form->createView()]);

    }
        /**
     * @Route("/{idB}/edit", name="app_blg_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Blg $blg, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BlgType::class, $blg);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image= $request -> files->get ('blg')['image'];
            $uploads_directory= $this->getParameter('kernel.project_dir').'/public/uploads';;
            $filename =md5(uniqid()) . '.' . $image ->guessExtension();
            $image ->move(
                $uploads_directory,
                $filename
            );
        $blg->setImage ($filename);

            $entityManager->flush();

          


            return $this->redirectToRoute('app_blg_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('blg/edit.html.twig', [
            'blg' => $blg,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idB}", name="app_blg_delete", methods={"POST"})
     */
    public function delete(Request $request, Blg $blg, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blg->getIdB(), $request->request->get('_token'))) {
            $entityManager->remove($blg);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_blg_index', [], Response::HTTP_SEE_OTHER);
    }
    
/**
     * @Route("/blg/{idB}", name="supp_blg")
     */
    public function SupprimerBlg($idB)
    {
        $em=$this->getDoctrine()->getManager();
        $delete=$em->getRepository(Blg::class)->find($idB);
        $em->remove($delete);
        $em->flush();
        return $this->redirectToRoute('app_blg_index');
    }




    //CLIENT SHOW BLOG
    /**
     * @Route("/showblogclient/{idB}", name="showblogclient", )
     */
    public function showblogclient($idB, Request $request)
    {
        $likedislike = new Likes();
        $alllikes= $this->getDoctrine()->getRepository(Likes::class)->findAll();

        $repo = $this->getDoctrine()->getRepository(Blg::class);

        $repo2 = $this->getDoctrine()->getRepository(Commentaire::class);
        $comment = new Commentaire();

        $form = $this->createForm(CommentaireType::class, $comment);
        $form->handleRequest($request);

        $article = $repo->find($idB);

        $comments = $repo2->findBy(['idB' => $idB], array('date' => 'DESC'));

        $rates = $this->getDoctrine()->getManager()
            ->getRepository(Ratingblg::class)
            ->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $dt = new \DateTime();

            $comment->setDate($dt);
            $comment->setIdB($article);
            $comment->setNomArticle("nomArt");
            $comment->setNomC("nommmmS");
            $comment->setEmail("arije@gmail.com");

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);

            $likedislike->setDislikec(0);
            $likedislike->setLikec(0);
            $likedislike->setIdcom($comment);
            $em->persist($likedislike);
            $em->flush();

            return $this->redirectToRoute('showblogclient', array('idB' => $idB,'likes'=> $alllikes));


        }

        return $this->render('client/showblog.html.twig', ['likes'=> $alllikes,'blg' => $article,'rates' => $rates, 'comments' => $comments, 'form' => $form->createView()]);

    }


    //COMMENTAIRE DELETE

    /**
     * @Route("/blog/{id}/remove/{idCom}", name="blog_uncomment")
     */
    public function removeComment($id,$idCom){
        $alllikes= $this->getDoctrine()->getRepository(Likes::class)->findAll();

        $manager= $this->getDoctrine()->getManager();
        $comment= $manager->getRepository(Commentaire::class)->find($idCom);
        $manager->remove($comment);
        $manager->flush();
        return $this->redirectToRoute('showblogclient',array('idB' => $id,'likes'=> $alllikes));

    }

    //COMMENATIRE EDIT
    /**
     * @Route("/commentaire/{idCom}/edit", name="edit_comment")
     */
    public function editCommentaire(Request $request, $idCom, EntityManagerInterface $entityManager): Response
    {
        $alllikes= $this->getDoctrine()->getRepository(Likes::class)->findAll();

        $commentaireCourant = $entityManager->getRepository(Commentaire::class)->find($idCom);

        $form = $this->createForm(CommentaireType::class, $commentaireCourant);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {


            $entityManager->flush();

            return $this->redirectToRoute('showblogclient', ["idB"=>$commentaireCourant->getIdB(),'likes'=> $alllikes], Response::HTTP_SEE_OTHER);
        }

        return $this->render('client/editCommentaire.html.twig', [
            'comment' => $commentaireCourant,
            'form' => $form->createView(),
        ]);
    }


    //RECHERCHE AVANCE AJAX BLOG

    //SEARCH

    /**
     * @Route("/ajax_search/", name="ajax_search")
     */
    public function chercherBlog(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');// ooofkdokfdfdf
        $products =  $em->getRepository(Blg::class)->rechercheAvance($requestString);
        if(!$products) {
            $result['blgs']['error'] = "Blog non trouvé :( ";
        } else {
            $result['blgs'] = $this->getRealEntities($products);
        }
        return new Response(json_encode($result));
    }





    // LES  attributs
    /**
     * @Route("/ratingAdd/{id}", name="ratingAd", methods={"GET", "POST"})
     */
    public function edittRating(Request $request,$id): Response
    {
        $blg = $this->getDoctrine()->getManager()->getRepository(Blg::class)->find($id);
        $rates = $this->getDoctrine()->getManager()
            ->getRepository(Ratingblg::class)
            ->findAll();
        $alllikes= $this->getDoctrine()->getRepository(Likes::class)->findAll();

        $ratings = $this->getDoctrine()->getManager()->getRepository(Ratingblg::class)->findAll();
        $ratin = new Ratingblg();
        $form = $this->createForm(RatingblgType::class,$ratin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ratin->setIdblg($blg);

            $em = $this->getDoctrine()->getManager();
            $em->persist($ratin);
            $em->flush();

            return $this->redirectToRoute('showblogclient', ['idB' => $id,'likes'=> $alllikes], Response::HTTP_SEE_OTHER);
        }

        return $this->render('client/editRating.html.twig', [
            'id' => $id,
            'form' => $form->createView(),
        ]);
    }


    public function getRealEntities($blgs){
        foreach ($blgs as $blgs){
            $realEntities[$blgs->getIdB()] = [$blgs->getImage(),$blgs->getTitre(),$blgs->getAuteur(),$blgs->getContenu()];

        }
        return $realEntities;
    }


    /**
     * @Route("/dislike/", name="dislikec")
     */
    function DislikeCAction(Request $request){
        $alllikes= $this->getDoctrine()->getRepository(Likes::class)->findAll();

        $l=$this->getDoctrine()->getRepository(Likes::class)->find(
            $request->get('ido')
        );
        $l->setDislikec($l->getDislikec() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('showblogclient', ['idB' => $request->get('id'),'likes'=> $alllikes], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/like/", name="likec")
     */
    function LikeCAction(Request $request){
        $alllikes= $this->getDoctrine()->getRepository(Likes::class)->findAll();

        $l=$this->getDoctrine()->getRepository(Likes::class)->find(
            $request->get('ido')
        );
        $l->setLikec($l->getLikec() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('showblogclient', ['idB' => $request->get('id'),'likes'=> $alllikes], Response::HTTP_SEE_OTHER);
    }

       //*****MOBILE

    /**
     * @Route("/mobile/aff", name="affmobblg")
     */
    public function affmobblg(NormalizerInterface $normalizer)
    {
        $med=$this->getDoctrine()->getRepository(Blg::class)->findAll();
        $jsonContent = $normalizer->normalize($med,'json',['blog'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
         * @Route("/mobile/affrating", name="affmobratingblg")
     */
    public function affmobratingblg(Request $request,NormalizerInterface $normalizer)
    {
        $med=$this->getDoctrine()->getRepository(Ratingblg::class)->findBy([
            'idblg'=> $request->get('idblg')
        ]);
        $jsonContent = $normalizer->normalize($med,'json',['ratingblg'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/new", name="addmobblg")
     */
    public function addmobblg(Request $request,NormalizerInterface $normalizer,EntityManagerInterface $entityManager)
    {
        $blog= new Blg();
        $blog->setTitre($request->get('titre'));
        $blog->setContenu($request->get('contenu'));
        $blog->setAuteur($request->get('auteur'));
        $blog->setImage($request->get('image'));
        $blog->setCategorie($request->get('categorie'));

        $blog->setDate(new \DateTime());
        $entityManager->persist($blog);
        $entityManager->flush();

        $jsonContent = $normalizer->normalize($blog,'json',['blog'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/mobile/addrate", name="addmobblgrate")
     */
    public function addmobblgrate(Request $request,NormalizerInterface $normalizer,EntityManagerInterface $entityManager)
    {
        $ratin= new Ratingblg();
        $blg = $this->getDoctrine()->getManager()->getRepository(Blg::class)->find($request->get('idblg'));

        $ratin->setIdblg($blg);
        $ratin->setRat($request->get('rate'));

        $entityManager->persist($ratin);
        $entityManager->flush();

        $jsonContent = $normalizer->normalize($ratin,'json',['blog'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/editblg", name="editmobblg")
     */
    public function editmobblg(Request $request,NormalizerInterface $normalizer)
    {   $em=$this->getDoctrine()->getManager();

        $blog = $em->getRepository(Blg::class)->find($request->get('id'));

        $blog->setTitre($request->get('titre'));
        $blog->setContenu($request->get('contenu'));
        $blog->setAuteur($request->get('auteur'));
        $blog->setImage($request->get('image'));
        $blog->setCategorie($request->get('categorie'));


        $em->flush();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($blog) {
            return $blog->getIdB();
        });
        $encoders = [new JsonEncoder()];
        $normalizers = array($normalizer);
        $serializer = new Serializer($normalizers,$encoders);
        $formatted = $serializer->normalize($blog);
        return new JsonResponse($formatted);
    }
    /**
     * @Route("/mobile/del", name="delmobBLG")
     */
    public function delmobBLG(Request $request,NormalizerInterface $normalizer)
    {           $em=$this->getDoctrine()->getManager();
        $blog=$this->getDoctrine()->getRepository(Blg::class)
            ->find($request->get('id'));
        $em->remove($blog);
        $em->flush();
        $jsonContent = $normalizer->normalize($blog,'json',['blog'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }


}  
