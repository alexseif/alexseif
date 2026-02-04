<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'alx_home', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/merry-christmas' => [[['_route' => 'alx_christmas_card', '_controller' => 'App\\Controller\\DefaultController::merryChristmas'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'alx_about', '_controller' => 'App\\Controller\\DefaultController::about'], null, null, null, false, false, null]],
        '/portfolio_2' => [[['_route' => 'alx_portfolio', '_controller' => 'App\\Controller\\DefaultController::portfolio'], null, null, null, false, false, null]],
        '/actionPlan' => [[['_route' => 'alx_action_plan', '_controller' => 'App\\Controller\\DefaultController::actionPlan'], null, null, null, false, false, null]],
        '/todo' => [[['_route' => 'alx_todo', '_controller' => 'App\\Controller\\DefaultController::todo'], null, null, null, false, false, null]],
        '/web-evolution' => [[['_route' => 'app_web_evolution', '_controller' => 'App\\Controller\\DefaultController::webEvolution'], null, null, null, false, false, null]],
        '/portfolio' => [[['_route' => 'app_portfolio_index', '_controller' => 'App\\Controller\\PortfolioController::index'], null, ['GET' => 0], null, true, false, null]],
        '/portfolio/new' => [[['_route' => 'app_portfolio_new', '_controller' => 'App\\Controller\\PortfolioController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/portfolio/([^/]++)(?'
                    .'|(*:29)'
                    .'|/edit(*:41)'
                    .'|(*:48)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        29 => [[['_route' => 'app_portfolio_show', '_controller' => 'App\\Controller\\PortfolioController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        41 => [[['_route' => 'app_portfolio_edit', '_controller' => 'App\\Controller\\PortfolioController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        48 => [
            [['_route' => 'app_portfolio_delete', '_controller' => 'App\\Controller\\PortfolioController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
