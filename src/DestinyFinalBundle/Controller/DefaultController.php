<?php

namespace DestinyFinalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/",name="default_show")
     */
    public function indexAction()
    {
        return $this->render('DestinyFinalBundle:Default:index.html.twig');
    }

    /**
     * @Route("/gallery", name="gallery_show")
     */
    public function destinyAction()
    {
        return $this->render('DestinyFinalBundle:Destiny:gallery.html.twig');
    }


}
