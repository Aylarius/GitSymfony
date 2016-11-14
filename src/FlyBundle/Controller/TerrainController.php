<?php

namespace FlyBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FlyBundle\Entity\Terrain;

/**
 * Terrain controller.
 *
 */
class TerrainController extends Controller
{
    /**
     * Lists all Terrain entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $terrains = $em->getRepository('FlyBundle:Terrain')->findAll();

        return $this->render('FlyBundle:Terrain:index.html.twig', array(
            'terrains' => $terrains,
        ));
    }

    /**
     * Finds and displays a Terrain entity.
     *
     */
    public function showAction(Terrain $terrain)
    {

        return $this->render('FlyBundle:Terrain:show.html.twig', array(
            'terrain' => $terrain,
        ));
    }
}
