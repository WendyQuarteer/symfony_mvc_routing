<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'appLearning')]
class LearningController extends AbstractController
{
    #[Route('/about-me', name: 'aboutMe')]
    public function aboutMe(): Response
    {
        return $this->render('learning/about.html.twig', [
            'about' => 'Lorem Ipsum'
        ]);
    }

    #[Route('/', name: 'home')]
    public function showMyName(): Response
    {
        return $this->render('/base.html.twig', [
            'name' => 'Unknown'
            //TODO: create form
        ]);
    }

    #[Route('/change-name', name: 'changeName')]
    public function changeName(): Response
    {
        return $this->render('learning/nameChange.html.twig', [
            //TODO: do something
        ]);
    }

}
