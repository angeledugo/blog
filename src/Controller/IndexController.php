<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Post;
use App\Repository\PostRepository;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(PostRepository $postRepository)
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'posts' => $postRepository->findAll()
        ]);
    }
}
