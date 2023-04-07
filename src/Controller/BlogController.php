<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog-details', name: 'app_blog_details')]
    public function blogDetails(): Response
    {
        return $this->render('blog/blog_details.html.twig', [
            'controller_name' => 'Blog_detailsController',
        ]);
    }
}
