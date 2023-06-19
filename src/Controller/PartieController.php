<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\PartieRepository;
use Symfony\Component\Routing\Annotation\Route;

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
}
