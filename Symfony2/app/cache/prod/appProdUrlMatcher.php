<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // parc_info_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'parc_info_homepage');
            }

            return array (  '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'parc_info_homepage',);
        }

        // parc_info_ajouter
        if ($pathinfo === '/ajouter') {
            return array (  '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'parc_info_ajouter',);
        }

        // parc_info_rechercher
        if ($pathinfo === '/search') {
            return array (  '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::rechercherAction',  '_route' => 'parc_info_rechercher',);
        }

        // parc_info_matHS
        if ($pathinfo === '/matHS') {
            return array (  '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::matHSAction',  '_route' => 'parc_info_matHS',);
        }

        // parc_info_ficture
        if ($pathinfo === '/fixture') {
            return array (  '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::fixtureAction',  '_route' => 'parc_info_ficture',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
