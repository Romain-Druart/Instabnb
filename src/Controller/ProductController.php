<?php

namespace App\Controller;
use App\DTO\Task;
use App\Entity\Product1;
use phpDocumentor\Reflection\Types\Resource_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\TaskType;
class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function create(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = new Product1();
        $product->setTitle((Task::class)->title);
        $product->setPrice((Task::class)->price);
        $product->setContent((Task::class)->content);
        $product->setCreatedAt(new \DateTime());

        //get informations from Form, send them to the DataBase, get informations and put them in both home and annonce

        $entityManager->persist($product);
        $entityManager->flush();

        return new Response('Saved new product with id ' . $product->getID());
    }

    /**
     * @Route("/products/{id}/edit", name="edit_product")
     */
    public function edit($id): Response
    {
        $product = $this->getDoctrine()->getRepository(Product1::class)->find($id);
        if (!$product) {
            throw $this->createNotFoundException('No product found for id: ' . $id);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $product->setPrice('40.00');
        $entityManager->flush();

        return new Response('Updated at id: ' . $id);
    }

    /**
     * @Route("/products")
     */
    public function list(): Response
    {
        $products = $this->getDoctrine()
            ->getRepository(Product1::class)
            ->findProducts();
    dump($products);
        return $this->render('product/index.html.twig', ['controller_name' => 'ProductController', 'products' => $products]);
    }

    public function index()
    {
        return $this->render(':product:index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}