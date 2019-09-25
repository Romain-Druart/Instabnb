<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\DTO\Task;
use App\Form\TaskType;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */

    public function index(Request $request)
    {
        $task = new Task();

        $form = $this->createForm(TaskType::class, $task, ['attr' => ['novalidate' => 'novalidate']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($request);
            dump($task);
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/index.html.twig', [
            'form2' => $form->createView(), 'controller_name' => 'ContactController',
        ]);
    }
}
