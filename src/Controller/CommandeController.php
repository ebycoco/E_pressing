<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande_index")
     */
    public function index()
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    /**
     * @Route("/commande/offre", name="commande_offre")
     */
    public function offre()
    {
        return $this->render('commande/offre.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    /**
     * @Route("/commande/detail", name="commande_detail")
     */
    public function detail()
    {
        return $this->render('commande/detail.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
    /**
     * @Route("/commande/livraison", name="commande_livraison")
     */
    public function livraison()
    {
        return $this->render('commande/livraision.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }
}
