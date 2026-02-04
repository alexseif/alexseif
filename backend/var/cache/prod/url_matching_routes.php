<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/intake-form-submission' => [[['_route' => 'admin_intake_form_submission_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/intake-form-submission/new' => [[['_route' => 'admin_intake_form_submission_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/intake-form-submission/batch-delete' => [[['_route' => 'admin_intake_form_submission_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/intake-form-submission/autocomplete' => [[['_route' => 'admin_intake_form_submission_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/intake-form-submission/render-filters' => [[['_route' => 'admin_intake_form_submission_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/logout' => [
            [['_route' => '_logout_main'], null, null, null, false, false, null],
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
        ],
        '/' => [[['_route' => 'alx_home', '_controller' => 'App\\Controller\\DefaultController::home'], null, null, null, false, false, null]],
        '/merry-christmas' => [[['_route' => 'alx_christmas_card', '_controller' => 'App\\Controller\\DefaultController::merryChristmas'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'alx_about', '_controller' => 'App\\Controller\\DefaultController::about'], null, null, null, false, false, null]],
        '/portfolio_2' => [[['_route' => 'alx_portfolio', '_controller' => 'App\\Controller\\DefaultController::portfolio'], null, null, null, false, false, null]],
        '/actionPlan' => [[['_route' => 'alx_action_plan', '_controller' => 'App\\Controller\\DefaultController::actionPlan'], null, null, null, false, false, null]],
        '/todo' => [[['_route' => 'alx_todo', '_controller' => 'App\\Controller\\DefaultController::todo'], null, null, null, false, false, null]],
        '/web-evolution' => [[['_route' => 'app_web_evolution', '_controller' => 'App\\Controller\\DefaultController::webEvolution'], null, null, null, false, false, null]],
        '/intake' => [[['_route' => 'app_intake', '_controller' => 'App\\Controller\\DefaultController::intake'], null, null, null, false, false, null]],
        '/intake/thank-you' => [[['_route' => 'app_intake_thank_you', '_controller' => 'App\\Controller\\DefaultController::intakeThankYou'], null, null, null, false, false, null]],
        '/intake/submit' => [[['_route' => 'app_intake_submit', '_controller' => 'App\\Controller\\DefaultController::submitIntake'], null, ['POST' => 0], null, false, false, null]],
        '/experiments' => [[['_route' => 'app_experiments_index', '_controller' => 'App\\Controller\\ExperimentsController::index'], null, null, null, true, false, null]],
        '/experiments/cta' => [[['_route' => 'app_experiments_cta', '_controller' => 'App\\Controller\\ExperimentsController::cta'], null, null, null, false, false, null]],
        '/experiments/yinYang' => [[['_route' => 'app_experiments_yinYang', '_controller' => 'App\\Controller\\ExperimentsController::yinYang'], null, null, null, false, false, null]],
        '/experiments/graph' => [[['_route' => 'app_experiments_graph', '_controller' => 'App\\Controller\\ExperimentsController::graph'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/ai/copilot' => [[['_route' => 'app_ai_copilot', '_controller' => 'App\\Controller\\HomeController::copilot'], null, null, null, false, false, null]],
        '/ai/chatGpt' => [[['_route' => 'app_ai_chatgpt', '_controller' => 'App\\Controller\\HomeController::chatGpt'], null, null, null, false, false, null]],
        '/landing_page' => [[['_route' => 'old_landing_page', '_controller' => 'App\\Controller\\LandingPageController::oldLandingPage'], null, null, null, false, false, null]],
        '/wordpress_optimize' => [[['_route' => 'old_wordpress_optimize', '_controller' => 'App\\Controller\\LandingPageController::oldLandingPage'], null, null, null, false, false, null]],
        '/wordpress-optimization' => [[['_route' => 'app_landing_page', '_controller' => 'App\\Controller\\LandingPageController::wordpressOptimization'], null, null, null, false, false, null]],
        '/mindfulness-techniques' => [[['_route' => 'app_mindfulness_techniques', '_controller' => 'App\\Controller\\MindfulnessController::mindfulnessTechniques'], null, null, null, false, false, null]],
        '/cbt' => [[['_route' => 'app_cbt', '_controller' => 'App\\Controller\\MindfulnessController::cbt'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|intake\\-form\\-submission/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:61)'
                            .'|delete(*:74)'
                        .')'
                        .'|(*:82)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|/(?'
                            .'|edit(*:114)'
                            .'|delete(*:128)'
                        .')'
                        .'|(*:137)'
                    .')'
                .')'
                .'|/(en|ar|eg)/wordpress\\-optimization(*:182)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        61 => [[['_route' => 'admin_intake_form_submission_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        74 => [[['_route' => 'admin_intake_form_submission_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        82 => [[['_route' => 'admin_intake_form_submission_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\IntakeFormSubmissionCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        114 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        128 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        137 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        182 => [
            [['_route' => 'app_landing_page_locale', '_locale' => 'en', '_controller' => 'App\\Controller\\LandingPageController::indexLocale'], ['_locale'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
