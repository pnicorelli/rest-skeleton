<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\FOSRestController;

class HealtcheckController extends FOSRestController
{
    /**
     * @Route("/ping", name="healtcheck")
     */
    public function ping()
    {
        return new JsonResponse(array("response" => "pong"));
    }
}
