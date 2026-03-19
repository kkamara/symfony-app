<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController {
  #[Route("/")]
  public function index() {
    return new Response("<h1>Hello from controller</h1>");
  }
}