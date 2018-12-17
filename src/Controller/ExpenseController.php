<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ‘App\Entity’\Expense;

/**
 * Class PersonController
 * @package App\Controller
 * @Route("/expense")
 */


class ExpenseController extends AbstractController
{

    public function index(Request $request)
    {
        /**
         * @Route("/expense", name="expense", methods="GET")
         */

        $expense = $this->getDoctrine()->getRepository(Expense::class)
            ->createQueryBuilder('e')
            ->getQuery()
            ->getArrayResult();

        if ($request->isXmlHTTpRequest()) {
            return $this->json($expense);
        }
    }
}