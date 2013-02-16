<?php

namespace Consorcio\AbmBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/default")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $apellido = 'Cualquier Apellido';
        return $this->render('ConsorcioAbmBundle:Default:index.html.twig',array('name'=>$name,'apellido'=>$apellido));
    }
}
