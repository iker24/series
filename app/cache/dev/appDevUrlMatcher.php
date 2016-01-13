<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/premios')) {
            // premios
            if (rtrim($pathinfo, '/') === '/premios') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'premios');
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::indexAction',  '_route' => 'premios',);
            }

            // premios_show
            if (preg_match('#^/premios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'premios_show')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::showAction',));
            }

            // premios_new
            if ($pathinfo === '/premios/new') {
                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::newAction',  '_route' => 'premios_new',);
            }

            // premios_create
            if ($pathinfo === '/premios/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_premios_create;
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::createAction',  '_route' => 'premios_create',);
            }
            not_premios_create:

            // premios_edit
            if (preg_match('#^/premios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'premios_edit')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::editAction',));
            }

            // premios_update
            if (preg_match('#^/premios/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_premios_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'premios_update')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::updateAction',));
            }
            not_premios_update:

            // premios_delete
            if (preg_match('#^/premios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_premios_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'premios_delete')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\premiosController::deleteAction',));
            }
            not_premios_delete:

        }

        if (0 === strpos($pathinfo, '/categorias')) {
            // categorias
            if (rtrim($pathinfo, '/') === '/categorias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorias');
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::indexAction',  '_route' => 'categorias',);
            }

            // categorias_show
            if (preg_match('#^/categorias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_show')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::showAction',));
            }

            // categorias_new
            if ($pathinfo === '/categorias/new') {
                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::newAction',  '_route' => 'categorias_new',);
            }

            // categorias_create
            if ($pathinfo === '/categorias/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categorias_create;
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::createAction',  '_route' => 'categorias_create',);
            }
            not_categorias_create:

            // categorias_edit
            if (preg_match('#^/categorias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_edit')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::editAction',));
            }

            // categorias_update
            if (preg_match('#^/categorias/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_categorias_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_update')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::updateAction',));
            }
            not_categorias_update:

            // categorias_delete
            if (preg_match('#^/categorias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_categorias_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorias_delete')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\categoriasController::deleteAction',));
            }
            not_categorias_delete:

        }

        if (0 === strpos($pathinfo, '/noticias')) {
            // noticias_buscar
            if ($pathinfo === '/noticias/buscar') {
                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::buscarNoticiasAction',  '_route' => 'noticias_buscar',);
            }

            // noticias_responder
            if ($pathinfo === '/noticias/responder') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_noticias_responder;
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::responderNoticiasAction',  '_route' => 'noticias_responder',);
            }
            not_noticias_responder:

            if (0 === strpos($pathinfo, '/noticias/conseguridad')) {
                // noticias
                if (rtrim($pathinfo, '/') === '/noticias/conseguridad') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'noticias');
                    }

                    return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::indexAction',  '_route' => 'noticias',);
                }

                // noticias_show
                if (preg_match('#^/noticias/conseguridad/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_show')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::showAction',));
                }

                // noticias_new
                if ($pathinfo === '/noticias/conseguridad/new') {
                    return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::newAction',  '_route' => 'noticias_new',);
                }

                // noticias_create
                if ($pathinfo === '/noticias/conseguridad/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_noticias_create;
                    }

                    return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::createAction',  '_route' => 'noticias_create',);
                }
                not_noticias_create:

                // noticias_edit
                if (preg_match('#^/noticias/conseguridad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_edit')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::editAction',));
                }

                // noticias_update
                if (preg_match('#^/noticias/conseguridad/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_noticias_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_update')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::updateAction',));
                }
                not_noticias_update:

                // noticias_delete
                if (preg_match('#^/noticias/conseguridad/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_noticias_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticias_delete')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\noticiasController::deleteAction',));
                }
                not_noticias_delete:

            }

        }

        if (0 === strpos($pathinfo, '/series')) {
            // series
            if (rtrim($pathinfo, '/') === '/series') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'series');
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::indexAction',  '_route' => 'series',);
            }

            // series_show
            if (preg_match('#^/series/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_show')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::showAction',));
            }

            // series_new
            if ($pathinfo === '/series/new') {
                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::newAction',  '_route' => 'series_new',);
            }

            // series_create
            if ($pathinfo === '/series/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_series_create;
                }

                return array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::createAction',  '_route' => 'series_create',);
            }
            not_series_create:

            // series_edit
            if (preg_match('#^/series/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_edit')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::editAction',));
            }

            // series_update
            if (preg_match('#^/series/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_series_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_update')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::updateAction',));
            }
            not_series_update:

            // series_delete
            if (preg_match('#^/series/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_series_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'series_delete')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\seriesController::deleteAction',));
            }
            not_series_delete:

        }

        // uni_series_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_series_homepage')), array (  '_controller' => 'uni\\Bundle\\SeriesBundle\\Controller\\DefaultController::indexAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
