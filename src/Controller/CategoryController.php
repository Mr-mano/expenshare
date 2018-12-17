<?php

namespace App\Controller;

;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ‘App\Entity’\Category;

/**
 * Class CategoryController
 * @package App/Controller
 * @Route("/category")
 */

class CategoryController extends AbstractController
{

    public function index(Request $request)
    {
        /**
         * @Route("/category", name="category", methods="GET")
         *
         */

        $categories = $this->getDoctrine()->getRepository(Category::class)
            ->createQueryBuilder('c')
            ->getQuery()
            ->getArrayResult();

        if ($request->isXmlHTTpRequest()) {
            return $this->json($categories);
        }
    }
}