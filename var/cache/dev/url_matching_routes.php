<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_mon', '_controller' => 'App\\Controller\\MonController::index'], null, null, null, false, false, null]],
        '/cv' => [[['_route' => 'mon_cv', '_controller' => 'App\\Controller\\MonController::cvv'], null, null, null, false, false, null]],
        '/loisir' => [[['_route' => 'mes_loisirs', '_controller' => 'App\\Controller\\MonController::loiisir'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'mon_portfolio', '_controller' => 'App\\Controller\\MonController::portfolio'], null, null, null, false, false, null]],
        '/programmeC' => [[['_route' => 'mon_progC', '_controller' => 'App\\Controller\\MonController::programmeC'], null, null, null, false, false, null]],
        '/configueswt' => [[['_route' => 'mon_switch', '_controller' => 'App\\Controller\\MonController::swt'], null, null, null, false, false, null]],
        '/ubuntu' => [[['_route' => 'mon_ubuntu', '_controller' => 'App\\Controller\\MonController::ubuntu'], null, null, null, false, false, null]],
        '/indexenglish' => [[['_route' => 'index_english', '_controller' => 'App\\Controller\\MonController::indexenglish'], null, null, null, false, false, null]],
        '/portfolioenglish' => [[['_route' => 'portfolio_english', '_controller' => 'App\\Controller\\MonController::portfolioenglish'], null, null, null, false, false, null]],
        '/cvenglish' => [[['_route' => 'cv_english', '_controller' => 'App\\Controller\\MonController::cvenglish'], null, null, null, false, false, null]],
        '/loisirenglish' => [[['_route' => 'loisir_english', '_controller' => 'App\\Controller\\MonController::loisirenglish'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
