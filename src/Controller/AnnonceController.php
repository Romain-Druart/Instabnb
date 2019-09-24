<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnnonceController extends AbstractController
{
    /**
     * @Route("/annonce/{page}", name="annonces",
     *     defaults={"page"=1},
     *     requirements={"page"="\d+"}
     *
     *     )
     */
    public function index()
    {
            $Annonce1 = [['id' => 1, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 2, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 3, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 4, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 5, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 6, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 7, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 8, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 9, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 10, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne","createdDate" => new \DateTime()]];

        return $this->render('annonce/index.html.twig', [
            'controller_name' => 'AnnonceController', 'Annonce1' => $Annonce1
        ]);
    }
}
