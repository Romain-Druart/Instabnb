<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToRfc3339Transformer;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $voyage1 = [[
            "id" => 1,
            "title" => "CROISIERE DANS LA MANCHE",
            "content" => "Profitez d'une superbe croisière de 3 jours",
            "price" => "3249,99€/personne",
            "createdDate" => new \DateTime()

        ],[
            "id" => 2,
            "title" => "RANDONNEE EN GRECE",
            "content" => "Profitez d'une superbe randonné de 3 jours",
            "price" => "749,99€/personne",
            "createdDate" => new \DateTime()
        ]];


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController', 'voyage1' => $voyage1
        ]);
    }
}
