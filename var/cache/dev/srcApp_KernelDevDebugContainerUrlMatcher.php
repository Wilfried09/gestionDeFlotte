<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
<<<<<<< HEAD
            '/' => array(array(array('_route' => 'racine', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null, false, null)),
=======
            '/container' => array(array(array('_route' => 'container', '_controller' => 'App\\Controller\\ContainerController::container'), null, null, null, false, null)),
            '/containership' => array(array(array('_route' => 'containership', '_controller' => 'App\\Controller\\ContainershipController::containership'), null, null, null, false, null)),
            '/' => array(array(array('_route' => 'racine', '_controller' => 'App\\Controller\\HomeController::index'), null, null, null, false, null)),
            '/product' => array(array(array('_route' => 'product', '_controller' => 'App\\Controller\\ProductController::product'), null, null, null, true, null)),
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
<<<<<<< HEAD
            '/container' => array(array(array('_route' => 'container_list', '_controller' => 'App\\Controller\\ContainerController::list'), null, null, null, false, null)),
            '/containership' => array(array(array('_route' => 'containership_list', '_controller' => 'App\\Controller\\ContainershipController::list'), null, null, null, false, null)),
            '/product' => array(array(array('_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::list'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                        .'|wdt/([^/]++)(*:57)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:102)'
                                .'|router(*:116)'
                                .'|exception(?'
                                    .'|(*:136)'
                                    .'|\\.css(*:149)'
                                .')'
                            .')'
                            .'|(*:159)'
                        .')'
                    .')'
                    .'|/container(?'
                        .'|/(\\d+)(*:188)'
                        .'|ship/(\\d+)(*:206)'
                    .')'
                    .'|/product/(\\d+)(*:229)'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            38 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            57 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            102 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            116 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            136 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            149 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            159 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
            188 => array(array(array('_route' => 'container_view', '_controller' => 'App\\Controller\\ContainerController::view'), array('id'), null, null, false, null)),
            206 => array(array(array('_route' => 'containership_view', '_controller' => 'App\\Controller\\ContainershipController::view'), array('id'), null, null, false, null)),
            229 => array(array(array('_route' => 'product_view', '_controller' => 'App\\Controller\\ProductController::view'), array('id'), null, null, false, null)),
=======
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/container(?'
                        .'|/([^/]++)(*:29)'
                        .'|ship/([^/]++)(*:49)'
                    .')'
                    .'|/product/([^/]++)(*:74)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:112)'
                        .'|wdt/([^/]++)(*:132)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:178)'
                                .'|router(*:192)'
                                .'|exception(?'
                                    .'|(*:212)'
                                    .'|\\.css(*:225)'
                                .')'
                            .')'
                            .'|(*:235)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            29 => array(array(array('_route' => 'containerId', '_controller' => 'App\\Controller\\ContainerController::containerId'), array('id'), null, null, false, null)),
            49 => array(array(array('_route' => 'containershipId', '_controller' => 'App\\Controller\\ContainershipController::containershipId'), array('id'), null, null, false, null)),
            74 => array(array(array('_route' => 'productId', '_controller' => 'App\\Controller\\ProductController::productId'), array('id'), null, null, false, null)),
            112 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            132 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            178 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            192 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            212 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            225 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            235 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
>>>>>>> bf81d60aeabe2054419241afe887874e5d997734
        );
    }
}
