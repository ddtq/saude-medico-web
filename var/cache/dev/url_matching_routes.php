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
        '/admin/management' => [[['_route' => 'admin_management', '_controller' => 'App\\Controller\\AdminManagementController::index'], null, null, null, false, false, null]],
        '/cadastrar/medico/newdoctor' => [[['_route' => 'cadastrar_medico', '_controller' => 'App\\Controller\\CadastrarMedicoController::index'], null, null, null, false, false, null]],
        '/admin/doctor/create' => [[['_route' => 'new_doctor', '_controller' => 'App\\Controller\\CadastrarMedicoController::create'], null, null, null, false, false, null]],
        '/editar/cadastro/medico/modify' => [[['_route' => 'editar_cadastro_medico', '_controller' => 'App\\Controller\\EditarCadastroMedicoController::index'], null, null, null, false, false, null]],
        '/admin/disableDoctor' => [[['_route' => 'admin_disableDoctor', '_controller' => 'App\\Controller\\EditarCadastroMedicoController::desabilityDoctor'], null, null, null, false, false, null]],
        '/admin/cadastro/edit/user' => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\EditarCadastroMedicoController::edit'], null, null, null, false, false, null]],
        '/admin/cadastro/update/user' => [[['_route' => 'admin_update_user', '_controller' => 'App\\Controller\\EditarCadastroMedicoController::update'], null, null, null, false, false, null]],
        '/saudemedico' => [[['_route' => 'medico', '_controller' => 'App\\Controller\\MedicoController::index'], null, null, null, false, false, null]],
        '/sala' => [[['_route' => 'sala', '_controller' => 'App\\Controller\\SalaController::index'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/send/link/sms' => [[['_route' => 'send_link_sms', '_controller' => 'App\\Controller\\SendLinkSmsController::loginSuccess'], null, null, null, false, false, null]],
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
