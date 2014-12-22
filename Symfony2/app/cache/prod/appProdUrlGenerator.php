<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'parc_info_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parc_info_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parc_info_rechercher' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::rechercherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parc_info_matHS' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::matHSAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/matHS',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'parc_info_ficture' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GestionParcInfo\\ParcInfoBundle\\Controller\\DefaultController::fixtureAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fixture',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
