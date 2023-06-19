<?php

namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PartieRepository;
use App\Repository\JoueurRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Joueur;
use App\Form\JoueurFormType;

class PartieController extends AbstractController
{
    #[Route('/partie', name: 'app_partie')]
    public function index(): Response
    {
        return $this->render('partie/index.html.twig', [
            'controller_name' => 'PartieController',
        ]);
    }

    #[Route('/list', name: 'app_list')]
    public function list(PartieRepository $partieRepo): Response
    {
        $partie = $partieRepo->findAll();
        return $this->render('partie/list.html.twig', [
            'show' => $partie
        ]);
    }
/*
    #[Route('/list/{id}', name: 'app_listbyid')]
    public function listid(PartieRepository $partieRepo, $id): Response
    {

        $partiebyid[] = $partieRepo->find($id);
        //var_dump($carbyid) . die();
        return $this->render('partie/details.html.twig', [
            'showbyid' => $partiebyid
        ]);
    }
    #[Route('/add', name: 'app_add')]
    public function add(JoueurRepository $joueurrepo, Request $req): Response
    {
        $joueur = new Joueur();
        $form = $this->createForm(JoueurFormType::class, $joueur);
        $form->handleRequest($req);
        if ($form->isSubmitted()) {
            $joueurrepo->save($joueur, true);
            return $this->redirectToRoute('app_list');
        }

        return $this->renderForm('partie/add.html.twig', [
            'formadd' => $form
        ]);
    }


    #[Route('/order', name: 'app_order')]
    public function order(JoueurRepository $joueurrepo, Request $req): Response
    {
        $joueur = $joueurrepo->findAll();
        $order = $joueurrepo->getOrderbyScore();
       // $max = $joueurrepo->maxKilometrage();
       // $form = $this->createForm(SearchType::class);
      //  $form->handleRequest($req);
    /*    if ($form->isSubmitted()) {
            $dataform = $form->getData();

            $result = $carRepository->searchCar($dataform);
            // var_dump($result) . die();

            return $this->render('partie/order.html.twig', array('order' => $order, 'cars' => $result, 'max' => $max, 'search' => $form->createView()));
        }*/
       // return $this->render('partie/order.html.twig', array('order' => $order, 'joueurrepo' => $joueurrepo,)); 
        
    //}
}
