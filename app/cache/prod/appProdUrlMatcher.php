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

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Fdr\\UserBundle\\Controller\\UserController::showAction',));
            }

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Fdr\\UserBundle\\Controller\\UserController::editAction',));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Fdr\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Fdr\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            // user_recherche
            if ($pathinfo === '/user/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_recherche;
                }

                return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\UserController::rechercheAction',  '_route' => 'user_recherche',);
            }
            not_user_recherche:

        }

        // fdr_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fdr_user_homepage')), array (  '_controller' => 'Fdr\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/parametrage')) {
            // parametrage
            if (rtrim($pathinfo, '/') === '/parametrage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'parametrage');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ParametrageController::editAction',  '_route' => 'parametrage',);
            }

            // parametrage_update
            if (preg_match('#^/parametrage/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_parametrage_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'parametrage_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ParametrageController::updateAction',));
            }
            not_parametrage_update:

        }

        if (0 === strpos($pathinfo, '/feuillederoute')) {
            // feuillederoute
            if (rtrim($pathinfo, '/') === '/feuillederoute') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'feuillederoute');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::indexAction',  '_route' => 'feuillederoute',);
            }

            // feuillederoute_all
            if ($pathinfo === '/feuillederoute/all') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::allAction',  '_route' => 'feuillederoute_all',);
            }

            // feuillederoute_show
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::showAction',));
            }

            // feuillederoute_new
            if ($pathinfo === '/feuillederoute/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::newAction',  '_route' => 'feuillederoute_new',);
            }

            if (0 === strpos($pathinfo, '/feuillederoute/create')) {
                // feuillederoute_create
                if ($pathinfo === '/feuillederoute/create/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_feuillederoute_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::createAction',  'idfdl' => NULL,  '_route' => 'feuillederoute_create',);
                }
                not_feuillederoute_create:

                // feuillederoute_create_idfdl
                if (preg_match('#^/feuillederoute/create/(?P<idfdl>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_feuillederoute_create_idfdl;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_create_idfdl')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::createAction',));
                }
                not_feuillederoute_create_idfdl:

            }

            // feuillederoute_editdebut
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/editdebut$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_editdebut')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::editdebutAction',));
            }

            // feuillederoute_updatedebut
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/updatedebut$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_feuillederoute_updatedebut;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_updatedebut')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::updatedebutAction',));
            }
            not_feuillederoute_updatedebut:

            // feuillederoute_delete
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_feuillederoute_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::deleteAction',));
            }
            not_feuillederoute_delete:

            // feuillederoute_updatecloture
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/cloture$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_updatecloture')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::updateclotureAction',));
            }

            // feuillederoute_new_fdl
            if (preg_match('#^/feuillederoute/(?P<id>\\d+)/new_fdl$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_new_fdl')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::newfdlAction',));
            }

            // feuillederoute_apercu
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/apercu(?:/(?P<quoi>view|save))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_feuillederoute_apercu;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_apercu')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::apercuAction',  'quoi' => 'view',));
            }
            not_feuillederoute_apercu:

            // feuillederoute_apercu_cloture
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/apercucloture(?:/(?P<quoi>view|save))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_feuillederoute_apercu_cloture;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_apercu_cloture')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::apercuClotureAction',  'quoi' => 'view',));
            }
            not_feuillederoute_apercu_cloture:

            // feuillederoute_show_cloture
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/showcloture$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_show_cloture')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::showClotureAction',));
            }

            // feuillederoute_chngeetat
            if (preg_match('#^/feuillederoute/(?P<id>[^/]++)/etat/(?P<chngeetat>cloturer|annuler|ouverte)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_feuillederoute_chngeetat;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'feuillederoute_chngeetat')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::chngeetatAction',));
            }
            not_feuillederoute_chngeetat:

            // feuillederoute_recherche
            if ($pathinfo === '/feuillederoute/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_feuillederoute_recherche;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::rechercheAction',  '_route' => 'feuillederoute_recherche',);
            }
            not_feuillederoute_recherche:

            // groupeMateriel
            if (0 === strpos($pathinfo, '/feuillederoute/groupes') && preg_match('#^/feuillederoute/groupes/(?P<dateDebut>[^/]++)/(?P<dateFin>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupeMateriel')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::groupeMaterielAction',));
            }

            // etatExcel
            if (0 === strpos($pathinfo, '/feuillederoute/excel') && preg_match('#^/feuillederoute/excel/(?P<dateDebut>[^/]++)/(?P<dateFin>[^/]++)/(?P<type>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'etatExcel')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::phpToExcelAction',));
            }

            if (0 === strpos($pathinfo, '/feuillederoute/reporting')) {
                // reporting
                if ($pathinfo === '/feuillederoute/reporting') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::reportingAction',  '_route' => 'reporting',);
                }

                // groupeVehicule
                if (preg_match('#^/feuillederoute/reporting/(?P<type>[^/]++)/(?P<dateDebut>[^/]++)/(?P<dateFin>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_groupeVehicule;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'groupeVehicule')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FeuilleDeRouteController::groupeVehiculeAction',));
                }
                not_groupeVehicule:

            }

        }

        if (0 === strpos($pathinfo, '/ville')) {
            // ville
            if (rtrim($pathinfo, '/') === '/ville') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ville');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::indexAction',  '_route' => 'ville',);
            }

            // ville_show
            if (preg_match('#^/ville/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::showAction',));
            }

            // ville_new
            if ($pathinfo === '/ville/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::newAction',  '_route' => 'ville_new',);
            }

            // ville_create
            if ($pathinfo === '/ville/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ville_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::createAction',  '_route' => 'ville_create',);
            }
            not_ville_create:

            // ville_edit
            if (preg_match('#^/ville/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::editAction',));
            }

            // ville_update
            if (preg_match('#^/ville/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_ville_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::updateAction',));
            }
            not_ville_update:

            // ville_delete
            if (preg_match('#^/ville/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_ville_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ville_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VilleController::deleteAction',));
            }
            not_ville_delete:

        }

        if (0 === strpos($pathinfo, '/typeprestation')) {
            // typeprestation
            if (rtrim($pathinfo, '/') === '/typeprestation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typeprestation');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::indexAction',  '_route' => 'typeprestation',);
            }

            // typeprestation_show
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::showAction',));
            }

            // typeprestation_new
            if ($pathinfo === '/typeprestation/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::newAction',  '_route' => 'typeprestation_new',);
            }

            // typeprestation_create
            if ($pathinfo === '/typeprestation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_typeprestation_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::createAction',  '_route' => 'typeprestation_create',);
            }
            not_typeprestation_create:

            // typeprestation_edit
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::editAction',));
            }

            // typeprestation_update
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_typeprestation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::updateAction',));
            }
            not_typeprestation_update:

            // typeprestation_delete
            if (preg_match('#^/typeprestation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_typeprestation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeprestation_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::deleteAction',));
            }
            not_typeprestation_delete:

            // typeprestation_recherche
            if ($pathinfo === '/typeprestation/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_typeprestation_recherche;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypePrestationController::rechercheAction',  '_route' => 'typeprestation_recherche',);
            }
            not_typeprestation_recherche:

        }

        if (0 === strpos($pathinfo, '/secteur')) {
            // secteur
            if (rtrim($pathinfo, '/') === '/secteur') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'secteur');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::indexAction',  '_route' => 'secteur',);
            }

            // secteur_show
            if (preg_match('#^/secteur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::showAction',));
            }

            // secteur_new
            if ($pathinfo === '/secteur/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::newAction',  '_route' => 'secteur_new',);
            }

            // secteur_create
            if ($pathinfo === '/secteur/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_secteur_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::createAction',  '_route' => 'secteur_create',);
            }
            not_secteur_create:

            // secteur_edit
            if (preg_match('#^/secteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::editAction',));
            }

            // secteur_update
            if (preg_match('#^/secteur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_secteur_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::updateAction',));
            }
            not_secteur_update:

            // secteur_delete
            if (preg_match('#^/secteur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_secteur_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'secteur_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\SecteurController::deleteAction',));
            }
            not_secteur_delete:

        }

        if (0 === strpos($pathinfo, '/vehicule')) {
            // vehicule
            if (rtrim($pathinfo, '/') === '/vehicule') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vehicule');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::indexAction',  '_route' => 'vehicule',);
            }

            // vehicule_show
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::showAction',));
            }

            // vehicule_new
            if ($pathinfo === '/vehicule/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::newAction',  '_route' => 'vehicule_new',);
            }

            // vehicule_create
            if ($pathinfo === '/vehicule/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vehicule_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::createAction',  '_route' => 'vehicule_create',);
            }
            not_vehicule_create:

            // vehicule_edit
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::editAction',));
            }

            // vehicule_update
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vehicule_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::updateAction',));
            }
            not_vehicule_update:

            // vehicule_vidange
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/vidange$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vehicule_vidange;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_vidange')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::vidangeAction',));
            }
            not_vehicule_vidange:

            // vehicule_delete
            if (preg_match('#^/vehicule/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vehicule_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vehicule_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::deleteAction',));
            }
            not_vehicule_delete:

            // vehicule_recherche
            if ($pathinfo === '/vehicule/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_vehicule_recherche;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\VehiculeController::rechercheAction',  '_route' => 'vehicule_recherche',);
            }
            not_vehicule_recherche:

        }

        if (0 === strpos($pathinfo, '/boncarburanthuile')) {
            // boncarburanthuile
            if (rtrim($pathinfo, '/') === '/boncarburanthuile') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'boncarburanthuile');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::indexAction',  '_route' => 'boncarburanthuile',);
            }

            // boncarburanthuile_show
            if (preg_match('#^/boncarburanthuile/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'boncarburanthuile_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\BonCarburantHuileController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/typeconsommation')) {
            // typeconsommation
            if (rtrim($pathinfo, '/') === '/typeconsommation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'typeconsommation');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::indexAction',  '_route' => 'typeconsommation',);
            }

            // typeconsommation_show
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::showAction',));
            }

            // typeconsommation_new
            if ($pathinfo === '/typeconsommation/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::newAction',  '_route' => 'typeconsommation_new',);
            }

            // typeconsommation_create
            if ($pathinfo === '/typeconsommation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_typeconsommation_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::createAction',  '_route' => 'typeconsommation_create',);
            }
            not_typeconsommation_create:

            // typeconsommation_edit
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::editAction',));
            }

            // typeconsommation_update
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_typeconsommation_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::updateAction',));
            }
            not_typeconsommation_update:

            // typeconsommation_delete
            if (preg_match('#^/typeconsommation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_typeconsommation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'typeconsommation_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\TypeConsommationController::deleteAction',));
            }
            not_typeconsommation_delete:

        }

        if (0 === strpos($pathinfo, '/role')) {
            // role
            if (rtrim($pathinfo, '/') === '/role') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
            }

            // role_show
            if (preg_match('#^/role/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::showAction',));
            }

            // role_new
            if ($pathinfo === '/role/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
            }

            // role_create
            if ($pathinfo === '/role/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_role_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
            }
            not_role_create:

            // role_edit
            if (preg_match('#^/role/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::editAction',));
            }

            // role_update
            if (preg_match('#^/role/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_role_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::updateAction',));
            }
            not_role_update:

            // role_delete
            if (preg_match('#^/role/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::deleteAction',));
            }
            not_role_delete:

            // role_recherche
            if ($pathinfo === '/role/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_recherche;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\RoleController::rechercheAction',  '_route' => 'role_recherche',);
            }
            not_role_recherche:

        }

        if (0 === strpos($pathinfo, '/peage')) {
            // peage
            if (rtrim($pathinfo, '/') === '/peage') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'peage');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::indexAction',  '_route' => 'peage',);
            }

            // peage_show
            if (preg_match('#^/peage/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'peage_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\PeageController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/modification')) {
                // modification
                if (rtrim($pathinfo, '/') === '/modification') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'modification');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::indexAction',  '_route' => 'modification',);
                }

                // modification_show
                if (preg_match('#^/modification/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::showAction',));
                }

                // modification_delete
                if (preg_match('#^/modification/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_modification_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::deleteAction',));
                }
                not_modification_delete:

                // modification_recherche
                if ($pathinfo === '/modification/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_modification_recherche;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::rechercheAction',  '_route' => 'modification_recherche',);
                }
                not_modification_recherche:

                // modification_vider
                if ($pathinfo === '/modification/vider') {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_modification_vider;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::viderAction',  '_route' => 'modification_vider',);
                }
                not_modification_vider:

                // modification_vider_recherche
                if (preg_match('#^/modification/(?P<ids>[^/]++)/vider_recherche$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_modification_vider_recherche;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification_vider_recherche')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ModificationController::deleteRechercheAction',  'ids' => -1,));
                }
                not_modification_vider_recherche:

            }

            if (0 === strpos($pathinfo, '/missionaffretement')) {
                // missionaffretement
                if (rtrim($pathinfo, '/') === '/missionaffretement') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'missionaffretement');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::indexAction',  'etat' => 'ouverte',  '_route' => 'missionaffretement',);
                }

                // missionaffretement_etat
                if (preg_match('#^/missionaffretement(?:/(?P<etat>ouverte|cloturer|annuler|valider))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_missionaffretement_etat;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_etat')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::indexAction',  'etat' => 'ouverte',));
                }
                not_missionaffretement_etat:

                // missionaffretement_show
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::showAction',));
                }

                // missionaffretement_new
                if ($pathinfo === '/missionaffretement/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::newAction',  '_route' => 'missionaffretement_new',);
                }

                // missionaffretement_create
                if ($pathinfo === '/missionaffretement/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_missionaffretement_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::createAction',  '_route' => 'missionaffretement_create',);
                }
                not_missionaffretement_create:

                // missionaffretement_edit
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::editAction',));
                }

                // missionaffretement_update
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_missionaffretement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::updateAction',));
                }
                not_missionaffretement_update:

                // missionaffretement_delete
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_missionaffretement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::deleteAction',));
                }
                not_missionaffretement_delete:

                // missionaffretement_chngeetat
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/etat/(?P<chngeetat>cloturer|annuler|ouverte)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_missionaffretement_chngeetat;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_chngeetat')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::chngeetatAction',));
                }
                not_missionaffretement_chngeetat:

                // missionaffretement_recherche
                if ($pathinfo === '/missionaffretement/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_missionaffretement_recherche;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::rechercheAction',  '_route' => 'missionaffretement_recherche',);
                }
                not_missionaffretement_recherche:

                // missionaffretement_apercu
                if (preg_match('#^/missionaffretement/(?P<id>[^/]++)/apercu(?:/(?P<quoi>view|save))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_missionaffretement_apercu;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'missionaffretement_apercu')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\MissionAffretementController::apercuAction',  'quoi' => 'view',));
                }
                not_missionaffretement_apercu:

            }

            if (0 === strpos($pathinfo, '/manutentionnaire')) {
                // manutentionnaire
                if (rtrim($pathinfo, '/') === '/manutentionnaire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'manutentionnaire');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::indexAction',  '_route' => 'manutentionnaire',);
                }

                // manutentionnaire_show
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::showAction',));
                }

                // manutentionnaire_new
                if ($pathinfo === '/manutentionnaire/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::newAction',  '_route' => 'manutentionnaire_new',);
                }

                // manutentionnaire_create
                if ($pathinfo === '/manutentionnaire/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_manutentionnaire_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::createAction',  '_route' => 'manutentionnaire_create',);
                }
                not_manutentionnaire_create:

                // manutentionnaire_edit
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::editAction',));
                }

                // manutentionnaire_update
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_manutentionnaire_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::updateAction',));
                }
                not_manutentionnaire_update:

                // manutentionnaire_delete
                if (preg_match('#^/manutentionnaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_manutentionnaire_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'manutentionnaire_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::deleteAction',));
                }
                not_manutentionnaire_delete:

                // manutentionnaire_recherche
                if ($pathinfo === '/manutentionnaire/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_manutentionnaire_recherche;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ManutentionnaireController::rechercheAction',  '_route' => 'manutentionnaire_recherche',);
                }
                not_manutentionnaire_recherche:

            }

        }

        if (0 === strpos($pathinfo, '/filiale')) {
            // filiale
            if (rtrim($pathinfo, '/') === '/filiale') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'filiale');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::indexAction',  '_route' => 'filiale',);
            }

            // filiale_show
            if (preg_match('#^/filiale/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::showAction',));
            }

            // filiale_new
            if ($pathinfo === '/filiale/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::newAction',  '_route' => 'filiale_new',);
            }

            // filiale_create
            if ($pathinfo === '/filiale/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_filiale_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::createAction',  '_route' => 'filiale_create',);
            }
            not_filiale_create:

            // filiale_edit
            if (preg_match('#^/filiale/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::editAction',));
            }

            // filiale_update
            if (preg_match('#^/filiale/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_filiale_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::updateAction',));
            }
            not_filiale_update:

            // filiale_delete
            if (preg_match('#^/filiale/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_filiale_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'filiale_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\FilialeController::deleteAction',));
            }
            not_filiale_delete:

        }

        if (0 === strpos($pathinfo, '/depot')) {
            // depot
            if (rtrim($pathinfo, '/') === '/depot') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'depot');
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::indexAction',  '_route' => 'depot',);
            }

            // depot_show
            if (preg_match('#^/depot/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::showAction',));
            }

            // depot_new
            if ($pathinfo === '/depot/new') {
                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::newAction',  '_route' => 'depot_new',);
            }

            // depot_create
            if ($pathinfo === '/depot/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_depot_create;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::createAction',  '_route' => 'depot_create',);
            }
            not_depot_create:

            // depot_edit
            if (preg_match('#^/depot/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::editAction',));
            }

            // depot_update
            if (preg_match('#^/depot/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_depot_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::updateAction',));
            }
            not_depot_update:

            // depot_delete
            if (preg_match('#^/depot/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_depot_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'depot_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::deleteAction',));
            }
            not_depot_delete:

            // depot_recherche
            if ($pathinfo === '/depot/search') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_depot_recherche;
                }

                return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\DepotController::rechercheAction',  '_route' => 'depot_recherche',);
            }
            not_depot_recherche:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/client')) {
                // client
                if (rtrim($pathinfo, '/') === '/client') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'client');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // client_show
                if (preg_match('#^/client/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::showAction',));
                }

                // client_new
                if ($pathinfo === '/client/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::newAction',  '_route' => 'client_new',);
                }

                // client_create
                if ($pathinfo === '/client/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_client_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::createAction',  '_route' => 'client_create',);
                }
                not_client_create:

                // client_edit
                if (preg_match('#^/client/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::editAction',));
                }

                // client_update
                if (preg_match('#^/client/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_client_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::updateAction',));
                }
                not_client_update:

                // client_delete
                if (preg_match('#^/client/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_client_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'client_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::deleteAction',));
                }
                not_client_delete:

                // client_recherche
                if ($pathinfo === '/client/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_client_recherche;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ClientController::rechercheAction',  '_route' => 'client_recherche',);
                }
                not_client_recherche:

            }

            if (0 === strpos($pathinfo, '/chauffeur')) {
                // chauffeur
                if (rtrim($pathinfo, '/') === '/chauffeur') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chauffeur');
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::indexAction',  '_route' => 'chauffeur',);
                }

                // chauffeur_show
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_show')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::showAction',));
                }

                // chauffeur_new
                if ($pathinfo === '/chauffeur/new') {
                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::newAction',  '_route' => 'chauffeur_new',);
                }

                // chauffeur_create
                if ($pathinfo === '/chauffeur/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_chauffeur_create;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::createAction',  '_route' => 'chauffeur_create',);
                }
                not_chauffeur_create:

                // chauffeur_edit
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_edit')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::editAction',));
                }

                // chauffeur_update
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_chauffeur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_update')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::updateAction',));
                }
                not_chauffeur_update:

                // chauffeur_delete
                if (preg_match('#^/chauffeur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_chauffeur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chauffeur_delete')), array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::deleteAction',));
                }
                not_chauffeur_delete:

                // chauffeur_recherche
                if ($pathinfo === '/chauffeur/search') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chauffeur_recherche;
                    }

                    return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\ChauffeurController::rechercheAction',  '_route' => 'chauffeur_recherche',);
                }
                not_chauffeur_recherche:

            }

        }

        if (0 === strpos($pathinfo, '/test')) {
            // test
            if ($pathinfo === '/test') {
                return array (  '_controller' => 'FdrAdminBundle:Default:test',  '_route' => 'test',);
            }

            // testrep
            if ($pathinfo === '/testrep') {
                return array (  '_controller' => 'FdrAdminBundle:Default:testrep',  '_route' => 'testrep',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Fdr\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'Fdr\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // home_admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_admin');
            }

            return array (  '_controller' => 'FdrAdminBundle:Default:index',  'name' => 'admin',  '_route' => 'home_admin',);
        }

        // home_user
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home_user');
            }

            return array (  '_controller' => 'Fdr\\AdminBundle\\Controller\\HomeController::indexAction',  '_route' => 'home_user',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
