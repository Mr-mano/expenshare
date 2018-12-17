<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ‘App\Entity’\Person;

/**
 * Class PersonController
 * @package App\Controller
 * @Route("/person")
 */

class PersonController extends AbstractController
{

    public function index(Request $request)
    {
        /**
         * @Route("/person", name="person", methods="GET")
         */

        $person = $this->getDoctrine()->getRepository(Person::class)
            ->createQueryBuilder('p')
            ->getQuery()
            ->getArrayResult();

        if ($request->isXmlHTTpRequest()) {
            return $this->json($person);
        }

    }
}