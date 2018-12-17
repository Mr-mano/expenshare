<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ‘App\Entity’\Debt;

/**
 * Class DebtController
 * @package App\Controller
 * @Route("/debt")
 */


class DebtController extends AbstractController
{

    public function index(Request $request)
    {
        /**
         * @Route("/debt", name="debt", methods="GET")
         */

        $debt = $this->getDoctrine()->getRepository(Debt::class)
            ->createQueryBuilder('d')
            ->getQuery()
            ->getArrayResult();

        if ($request->isXmlHTTpRequest()) {
            return $this->json($debt);
        }

    }
}