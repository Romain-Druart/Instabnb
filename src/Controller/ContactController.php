<?php

namespace App\Controller;

use App\Service\ContactService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\DTO\Task;
use App\Form\TaskType;


class ContactController extends AbstractController
{

    /**
     * @var ContactService
     */
    private $contactService;

    public function __construct(ContactService $contactService)
    {
           $this->contactService = $contactService;
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request)
    {

        $task = new Task();

        $form = $this->createForm(TaskType::class, $task, ['attr' => ['novalidate' => 'novalidate']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($task);
            // $entityManager->flush();
            return $this->redirectToRoute('product');
        }

        return $this->render('contact/index.html.twig', [
            'form2' => $form->createView(), 'controller_name' => 'ContactController',
        ]);
    }
}
