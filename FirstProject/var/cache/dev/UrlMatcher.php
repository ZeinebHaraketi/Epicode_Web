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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/back' => [[['_route' => 'app_client_back', '_controller' => 'App\\Controller\\ClientController::Back'], null, null, null, false, false, null]],
        '/coaching' => [[['_route' => 'app_coaching_index', '_controller' => 'App\\Controller\\CoachingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coaching/new' => [[['_route' => 'app_coaching_new', '_controller' => 'App\\Controller\\CoachingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coaching/front/new' => [[['_route' => 'app_coaching_indexfront', '_controller' => 'App\\Controller\\CoachingController::newfront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/coaching/p' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\CoachingController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/coaching/stat' => [[['_route' => 'coaching_stat', '_controller' => 'App\\Controller\\CoachingController::indexAction'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/front' => [[['_route' => 'app_cours_indexfront', '_controller' => 'App\\Controller\\CoursController::indexfront'], null, ['GET' => 0], null, false, false, null]],
        '/cours/new' => [[['_route' => 'app_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/event/calendar' => [[['_route' => 'calendar', '_controller' => 'App\\Controller\\ReservationController::calendar'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/api/([^/]++)/edit(*:187)'
                .'|/co(?'
                    .'|aching/(?'
                        .'|edit/([^/]++)(*:224)'
                        .'|delete/([^/]++)(*:247)'
                        .'|([^/]++)(*:263)'
                    .')'
                    .'|urs/(?'
                        .'|edit/([^/]++)(*:292)'
                        .'|delete/([^/]++)(*:315)'
                        .'|([^/]++)(*:331)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['POST' => 0], null, false, false, null]],
        224 => [[['_route' => 'app_coaching_edit', '_controller' => 'App\\Controller\\CoachingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        247 => [[['_route' => 'app_coaching_delete', '_controller' => 'App\\Controller\\CoachingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'app_coaching_show', '_controller' => 'App\\Controller\\CoachingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        315 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        331 => [
            [['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
