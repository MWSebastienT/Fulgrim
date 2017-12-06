<?php

namespace DestinyFinalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('DestinyFinalBundle:Default:index.html.twig');
    }

    /**
     * @Route("/destiny")
     */
    public function destinyAction()
    {
        return $this->render('DestinyFinalBundle:Destiny:index.html.twig');
    }


}
