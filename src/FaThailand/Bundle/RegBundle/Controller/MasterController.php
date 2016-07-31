<?php

namespace FaThailand\Bundle\RegBundle\Controller;

use Sylius\Bundle\ResourceBundle\Controller\ResourceController;
use Symfony\Component\HttpFoundation\Request;

class MasterController extends ResourceController
{
    public function registrationAction(Request $request)
    {
        return parent::createAction($request);
    }

    public function thankYouAction(Request $request)
    {
        $data = null;

        if ($code = $request->get('code')) {
            $data = $this->get('fa.repository.reg_master')->findOneBy(['code' => $code]);
        }

        return $this->render('FaThailandRegBundle:Master:thankYou.html.twig', ['data' => $data]);
    }
}
