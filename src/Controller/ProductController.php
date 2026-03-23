<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProductController extends AbstractController
{
    #[Route('/products', name: 'product_index')]
    public function index(ProductRepository $repo): Response
    {
        return $this->render('product/index.html.twig', [
            'products' => $repo->findAll(),
        ]);
    }

    #[Route("/product/{id<\d+>}", name: 'product_show')]
    public function show(Product $product, ProductRepository $repo): Response {
        return $this->render(
            'product/show.html.twig',
            compact('product'),
        );
    }
}
