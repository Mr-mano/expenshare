<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ‘App\Entity’\Expense;

/**
 * Class ShareGroupController
 * @package App/Controller
 * @Route("/share/group")
 */


class ShareGroupController extends AbstractController
{

    public function index(Request $request)
    {
        /**
         * @Route("/share/group", name="share_group", methods="GET")
         */

        $share = $this->getDoctrine()->getRepository(ShareGroup::class)
            ->createQueryBuilder('s')
            ->getQuery()
            ->getArrayResult();

        if ($request->isXmlHTTpRequest()) {
            return $this->json($share);
        }
    }
}