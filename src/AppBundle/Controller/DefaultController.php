<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $ourService = $this->get('our_service');
        return $this->render('default/index.html.twig', [
            'text' => $ourService->getText(),
            'placeholderImage' => $ourService->getPlaceholderDi(),
        ]);
    }
}
