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
        '/agency/show' => [[['_route' => 'app_agency_index', '_controller' => 'App\\Controller\\AgencyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/agency/front' => [[['_route' => 'app_agency_frontindex', '_controller' => 'App\\Controller\\AgencyController::Frontindex'], null, ['GET' => 0], null, false, false, null]],
        '/agency/back' => [[['_route' => 'app_agency_index_back', '_controller' => 'App\\Controller\\AgencyController::defaultBack'], null, ['GET' => 0], null, false, false, null]],
        '/agency/new' => [[['_route' => 'app_agency_new', '_controller' => 'App\\Controller\\AgencyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/agency/admin/msg' => [[['_route' => 'msg', '_controller' => 'App\\Controller\\AgencyController::msg'], null, null, null, false, false, null]],
        '/agency/chatframe' => [[['_route' => 'chatframe', '_controller' => 'App\\Controller\\AgencyController::chatframeAction'], null, null, null, false, false, null]],
        '/agencylove' => [[['_route' => 'app_agencylove_index', '_controller' => 'App\\Controller\\AgencyloveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/rent' => [[['_route' => 'app_rent_index', '_controller' => 'App\\Controller\\RentController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/agency(?'
                    .'|/(?'
                        .'|([^/]++)/(?'
                            .'|de(?'
                                .'|tails(*:205)'
                                .'|lete(*:217)'
                            .')'
                            .'|edit(*:230)'
                        .')'
                        .'|search/([^/]++)/([^/]++)(*:263)'
                        .'|SearchAll/([^/]++)(*:289)'
                    .')'
                    .'|love/(?'
                        .'|new/([^/]++)(*:318)'
                        .'|([^/]++)(?'
                            .'|(*:337)'
                            .'|/edit(*:350)'
                        .')'
                        .'|count(*:364)'
                    .')'
                .')'
                .'|/car/(?'
                    .'|([^/]++)(*:390)'
                    .'|front/([^/]++)(*:412)'
                    .'|new/([^/]++)(*:432)'
                    .'|([^/]++)(?'
                        .'|(*:451)'
                        .'|/(?'
                            .'|edit(*:467)'
                            .'|delete(*:481)'
                        .')'
                    .')'
                .')'
                .'|/rent/(?'
                    .'|new/([^/]++)/([^/]++)(*:522)'
                    .'|([^/]++)(*:538)'
                    .'|edit/([^/]++)/([^/]++)/([^/]++)(*:577)'
                    .'|([^/]++)(*:593)'
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
        205 => [[['_route' => 'app_agency_show', '_controller' => 'App\\Controller\\AgencyController::show'], ['idAgency'], ['GET' => 0], null, false, false, null]],
        217 => [[['_route' => 'app_agency_delete', '_controller' => 'App\\Controller\\AgencyController::deleteAgency'], ['idAgency'], null, null, false, false, null]],
        230 => [[['_route' => 'app_agency_edit', '_controller' => 'App\\Controller\\AgencyController::edit'], ['idAgency'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_agency_findByname', '_controller' => 'App\\Controller\\AgencyController::findByName'], ['nameagency', 'pageNumber'], null, null, false, true, null]],
        289 => [[['_route' => 'app_agency_findall', '_controller' => 'App\\Controller\\AgencyController::searchAllAgencies'], ['pageNumber'], null, null, false, true, null]],
        318 => [[['_route' => 'app_agencylove_new', '_controller' => 'App\\Controller\\AgencyloveController::new'], ['idAgency'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        337 => [[['_route' => 'app_agencylove_show', '_controller' => 'App\\Controller\\AgencyloveController::show'], ['idagencylove'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_agencylove_edit', '_controller' => 'App\\Controller\\AgencyloveController::edit'], ['idagencylove'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'app_agencylove_count', '_controller' => 'App\\Controller\\AgencyloveController::countLove'], [], null, null, false, false, null]],
        390 => [[['_route' => 'app_car_index', '_controller' => 'App\\Controller\\CarController::index'], ['idAgency'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_car_front_index', '_controller' => 'App\\Controller\\CarController::Frontindex'], ['idAgency'], ['GET' => 0], null, false, true, null]],
        432 => [[['_route' => 'app_car_new', '_controller' => 'App\\Controller\\CarController::new'], ['idAgency'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        451 => [[['_route' => 'app_car_show', '_controller' => 'App\\Controller\\CarController::show'], ['idCar'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'app_car_edit', '_controller' => 'App\\Controller\\CarController::edit'], ['idCar'], null, null, false, false, null]],
        481 => [[['_route' => 'app_car_delete', '_controller' => 'App\\Controller\\CarController::deleteCar'], ['idCar'], null, null, false, false, null]],
        522 => [[['_route' => 'app_rent_new', '_controller' => 'App\\Controller\\RentController::new'], ['idAgency', 'idCar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        538 => [[['_route' => 'app_rent_show', '_controller' => 'App\\Controller\\RentController::show'], ['idrent'], ['GET' => 0], null, false, true, null]],
        577 => [[['_route' => 'app_rent_edit', '_controller' => 'App\\Controller\\RentController::edit'], ['idrent', 'idAgency', 'idCar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        593 => [
            [['_route' => 'app_rent_delete', '_controller' => 'App\\Controller\\RentController::delete'], ['idrent'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
