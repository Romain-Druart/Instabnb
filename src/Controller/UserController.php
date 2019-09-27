<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function create(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user = new User();
        $user->setFirstName('Romain');
        $user->setLastName('Druart');
        $user->setEmail('monmail@gmail.com');
        $user->setPsw('Azerty01');

        $entityManager->persist($user);
        $entityManager->flush();

        return new Response('Saved new user with id '.$user->getID());
    }

    /**
     * @Route("/users/{id}/edit", name="edit_user")
     */
    public function edit($id): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find(id);
        if(!$user){
            throw $this->createNotFoundException('No product found for id: '.$id);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $user->setLastName('Dupre');

        $entityManager->flush();


    }

    public function index()
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
