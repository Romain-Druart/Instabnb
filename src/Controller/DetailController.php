<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetailController extends AbstractController
{
    /**
     * @Route("/annonce/{id}/detail",
     *     name="detail",
     *     defaults={"id"=1},
     *     requirements={"id"="\d+"}
     * )
     */
    public function index(int $id)
    {

        $voyage1 = [['id' => 1, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 2, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 3, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 4, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 5, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 6, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 7, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 8, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 9, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne", "createdDate" => new \DateTime()],
            ['id' => 10, "title" => "RANDONNEE EN GRECE", "content" => "Profitez d'une superbe randonné de 3 jours", "price" => "749,99€/personne","createdDate" => new \DateTime()]];

        return $this->render('detail/index.html.twig',
            [
            'controller_name' => 'DetailController', 'voyage1' => $voyage1, 'id' => $id
        ]);
    }
}
