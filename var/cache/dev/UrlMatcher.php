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
        '/activite/excel' => [[['_route' => 'excel', '_controller' => 'App\\Controller\\ActiviteController::Excel'], null, null, null, false, false, null]],
        '/activite/statistique' => [[['_route' => 'app_act_statistique', '_controller' => 'App\\Controller\\ActiviteController::statAct'], null, null, null, false, false, null]],
        '/activite' => [[['_route' => 'app_activite_index', '_controller' => 'App\\Controller\\ActiviteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activite/triAct_Age' => [[['_route' => 'triAct_Age', '_controller' => 'App\\Controller\\ActiviteController::triAct_Age'], null, null, null, false, false, null]],
        '/activite/triAct' => [[['_route' => 'triAct', '_controller' => 'App\\Controller\\ActiviteController::triAct'], null, null, null, false, false, null]],
        '/activite/pdf' => [[['_route' => 'PDF_Activite', '_controller' => 'App\\Controller\\ActiviteController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/activite/listactivites' => [[['_route' => 'listactivites', '_controller' => 'App\\Controller\\ActiviteController::list'], null, null, null, false, false, null]],
        '/activite/new' => [[['_route' => 'newActivite', '_controller' => 'App\\Controller\\ActiviteController::newActivite'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activite/addEnfant' => [[['_route' => 'addEnfant', '_controller' => 'App\\Controller\\ActiviteController::addEnfant'], null, null, null, false, false, null]],
        '/activite/activite/add_activite' => [[['_route' => 'add_activite', '_controller' => 'App\\Controller\\ActiviteController::AjouterActivite'], null, null, null, false, false, null]],
        '/activite/activite/listeA' => [[['_route' => 'listeA', '_controller' => 'App\\Controller\\ActiviteController::listActivite'], null, null, null, false, false, null]],
        '/activiteAddActiviteJSON' => [[['_route' => 'AddActiviteJSON', '_controller' => 'App\\Controller\\ActiviteController::AddActiviteJSON'], null, null, null, false, false, null]],
        '/activiteAllActiviteJSON' => [[['_route' => 'AllActiviteJSON', '_controller' => 'App\\Controller\\ActiviteController::AllActiviteJSON'], null, null, null, false, false, null]],
        '/activite/mobile/aff' => [[['_route' => 'affmobactivite', '_controller' => 'App\\Controller\\ActiviteController::affmobactivite'], null, null, null, false, false, null]],
        '/activite/mobile/new' => [[['_route' => 'addmobact', '_controller' => 'App\\Controller\\ActiviteController::addmobblg'], null, null, null, false, false, null]],
        '/blg' => [[['_route' => 'app_blg_index', '_controller' => 'App\\Controller\\BlgController::index'], null, ['GET' => 0], null, true, false, null]],
        '/blg/listblg' => [[['_route' => 'listblg', '_controller' => 'App\\Controller\\BlgController::list'], null, null, null, false, false, null]],
        '/blg/new' => [[['_route' => 'app_blg_new', '_controller' => 'App\\Controller\\BlgController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blg/mobile/aff' => [[['_route' => 'affmobblg', '_controller' => 'App\\Controller\\BlgController::affmobblg'], null, null, null, false, false, null]],
        '/blg/mobile/affrating' => [[['_route' => 'affmobratingblg', '_controller' => 'App\\Controller\\BlgController::affmobratingblg'], null, null, null, false, false, null]],
        '/blg/mobile/new' => [[['_route' => 'addmobblg', '_controller' => 'App\\Controller\\BlgController::addmobblg'], null, null, null, false, false, null]],
        '/blg/mobile/addrate' => [[['_route' => 'addmobblgrate', '_controller' => 'App\\Controller\\BlgController::addmobblgrate'], null, null, null, false, false, null]],
        '/blg/mobile/editblg' => [[['_route' => 'editmobblg', '_controller' => 'App\\Controller\\BlgController::editmobblg'], null, null, null, false, false, null]],
        '/blg/mobile/del' => [[['_route' => 'delmobBLG', '_controller' => 'App\\Controller\\BlgController::delmobBLG'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/back' => [[['_route' => 'app_client_back', '_controller' => 'App\\Controller\\ClientController::Back'], null, null, null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaireafficher' => [[['_route' => 'afficher', '_controller' => 'App\\Controller\\CommentaireController::afficher'], null, null, null, false, false, null]],
        '/commentaireajouterCom' => [[['_route' => 'ajouterCom', '_controller' => 'App\\Controller\\CommentaireController::FunctionName'], null, null, null, false, false, null]],
        '/consultation/statistique' => [[['_route' => 'app_cons_statistique', '_controller' => 'App\\Controller\\ConsultationController::statCons'], null, null, null, false, false, null]],
        '/consultation/statistique2' => [[['_route' => 'app_cons_statistique2', '_controller' => 'App\\Controller\\ConsultationController::statCons2'], null, null, null, false, false, null]],
        '/consultation' => [[['_route' => 'app_consultation_index', '_controller' => 'App\\Controller\\ConsultationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultation/new' => [[['_route' => 'app_consultation_new', '_controller' => 'App\\Controller\\ConsultationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consultationapp_consultation_ front_index' => [[['_route' => 'app_consultation_ front_index', '_controller' => 'App\\Controller\\ConsultationController::app'], null, null, null, false, false, null]],
        '/consultationajouterCons' => [[['_route' => 'ajouterCons', '_controller' => 'App\\Controller\\ConsultationController::ajouterCons'], null, null, null, false, false, null]],
        '/consultation/mobile/aff' => [[['_route' => 'affmobconsult', '_controller' => 'App\\Controller\\ConsultationController::affmobconsult'], null, null, null, false, false, null]],
        '/consultation/mobile/new' => [[['_route' => 'addmobcons', '_controller' => 'App\\Controller\\ConsultationController::addmobcons'], null, null, null, false, false, null]],
        '/consultation/mobile/editcons' => [[['_route' => 'editmobcons', '_controller' => 'App\\Controller\\ConsultationController::editmobcons'], null, null, null, false, false, null]],
        '/consultation/mobile/del' => [[['_route' => 'delmobcons', '_controller' => 'App\\Controller\\ConsultationController::delmobcons'], null, null, null, false, false, null]],
        '/enfant' => [[['_route' => 'app_enfant_index', '_controller' => 'App\\Controller\\EnfantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/enfant/enfant_stat' => [[['_route' => 'enfant_stat', '_controller' => 'App\\Controller\\EnfantController::enfant_stat'], null, null, null, false, false, null]],
        '/enfant/new' => [[['_route' => 'app_enfant_new', '_controller' => 'App\\Controller\\EnfantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/enfantAddEnfantJSON' => [[['_route' => 'AddEnfantJSON', '_controller' => 'App\\Controller\\EnfantController::AddEnfantJSON'], null, null, null, false, false, null]],
        '/enfant/mobile/aff' => [[['_route' => 'affmobenfant', '_controller' => 'App\\Controller\\EnfantController::affmobenfant'], null, null, null, false, false, null]],
        '/enfant/mobile/new' => [[['_route' => 'addmobenf', '_controller' => 'App\\Controller\\EnfantController::addmobenf'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'app_panier_index', '_controller' => 'App\\Controller\\PanierController::index'], null, ['GET' => 0], null, true, false, null]],
        '/panier/listpanier' => [[['_route' => 'listpanier', '_controller' => 'App\\Controller\\PanierController::list'], null, null, null, false, false, null]],
        '/panier/new' => [[['_route' => 'app_panier_new', '_controller' => 'App\\Controller\\PanierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/panier/show' => [[['_route' => 'app_panier_show', '_controller' => 'App\\Controller\\PanierController::show'], null, ['GET' => 0], null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/listproduit' => [[['_route' => 'listproduit', '_controller' => 'App\\Controller\\ProduitController::list'], null, null, null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/mobile/aff' => [[['_route' => 'affmobproduit', '_controller' => 'App\\Controller\\ProduitController::affmobproduit'], null, null, null, false, false, null]],
        '/produit/mobile/new' => [[['_route' => 'addmobprod', '_controller' => 'App\\Controller\\ProduitController::addmobprod'], null, null, null, false, false, null]],
        '/produit/mobile/editprod' => [[['_route' => 'editmobproduit', '_controller' => 'App\\Controller\\ProduitController::editmobproduit'], null, null, null, false, false, null]],
        '/produit/mobile/del' => [[['_route' => 'delmobproduit', '_controller' => 'App\\Controller\\ProduitController::delmobproduit'], null, null, null, false, false, null]],
        '/programme' => [[['_route' => 'app_programme_index', '_controller' => 'App\\Controller\\ProgrammeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/programme/new' => [[['_route' => 'app_programme_new', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/fc-load-events' => [[['_route' => 'fc_load_events', '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAction'], null, null, null, false, false, null]],
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
                .'|/activite/(?'
                    .'|activite/show/([^/]++)(*:204)'
                    .'|([^/]++)(?'
                        .'|(*:223)'
                    .')'
                    .'|activite/(?'
                        .'|modif_act/([^/]++)(*:262)'
                        .'|([^/]++)(?'
                            .'|(*:281)'
                            .'|/remove/([^/]++)(*:305)'
                        .')'
                        .'|Details/([^/]++)(*:330)'
                    .')'
                    .'|enfant/([^/]++)/edit(*:359)'
                    .'|listActWithSearch(*:384)'
                    .'|Rechercher_Act(*:406)'
                    .'|UpdateActiviteJSON/([^/]++)(*:441)'
                    .'|DeleteActiviteJSON/([^/]++)(*:476)'
                .')'
                .'|/blg/(?'
                    .'|show/([^/]++)(*:506)'
                    .'|([^/]++)(?'
                        .'|/edit(*:530)'
                        .'|(*:538)'
                    .')'
                    .'|bl(?'
                        .'|g/([^/]++)(*:562)'
                        .'|og/([^/]++)/remove/([^/]++)(*:597)'
                    .')'
                    .'|showblogclient/([^/]++)(*:629)'
                    .'|commentaire/([^/]++)/edit(*:662)'
                    .'|ajax_search(*:681)'
                    .'|ratingAdd/([^/]++)(*:707)'
                    .'|dislike(*:722)'
                    .'|like(*:734)'
                .')'
                .'|/co(?'
                    .'|mmentaire/(?'
                        .'|([^/]++)(?'
                            .'|(*:773)'
                            .'|/edit(*:786)'
                            .'|(*:794)'
                        .')'
                        .'|commentaire/([^/]++)(*:823)'
                    .')'
                    .'|nsultation/(?'
                        .'|([^/]++)(?'
                            .'|(*:857)'
                            .'|/edit(*:870)'
                        .')'
                        .'|delete/([^/]++)(*:894)'
                        .'|consultation/([^/]++)(*:923)'
                        .'|([^/]++)/(?'
                            .'|afficher(*:951)'
                            .'|modifier(*:967)'
                        .')'
                    .')'
                .')'
                .'|/enfant/(?'
                    .'|([^/]++)(?'
                        .'|(*:1000)'
                        .'|/edit(*:1014)'
                        .'|(*:1023)'
                    .')'
                    .'|ajouter(*:1040)'
                    .'|([^/]++)/modifier(*:1066)'
                    .'|UpdateEnfantJSON/([^/]++)(*:1100)'
                    .'|DeleteEnfantJSON/([^/]++)(*:1134)'
                .')'
                .'|/p(?'
                    .'|anier/(?'
                        .'|new/([^/]++)(*:1170)'
                        .'|([^/]++)(?'
                            .'|/edit(*:1195)'
                            .'|(*:1204)'
                        .')'
                        .'|panier/([^/]++)(*:1229)'
                        .'|AddQuantity/([^/]++)(*:1258)'
                        .'|RemoveQuantity/([^/]++)(*:1290)'
                    .')'
                    .'|ro(?'
                        .'|duit/(?'
                            .'|show/([^/]++)(*:1326)'
                            .'|([^/]++)(?'
                                .'|/edit(*:1351)'
                                .'|(*:1360)'
                            .')'
                            .'|produit/([^/]++)(*:1386)'
                        .')'
                        .'|gramme/(?'
                            .'|show/([^/]++)(*:1419)'
                            .'|([^/]++)(?'
                                .'|/edit(*:1444)'
                                .'|(*:1453)'
                            .')'
                            .'|programme/([^/]++)(*:1481)'
                            .'|listprog(*:1498)'
                            .'|afficher/([^/]++)(*:1524)'
                        .')'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1564)'
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
        204 => [[['_route' => 'app_activite_show', '_controller' => 'App\\Controller\\ActiviteController::show'], ['idA'], ['GET' => 0], null, false, true, null]],
        223 => [
            [['_route' => 'app_activite_edit', '_controller' => 'App\\Controller\\ActiviteController::edit'], ['idA'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'app_activite_delete', '_controller' => 'App\\Controller\\ActiviteController::delete'], ['idA'], ['POST' => 0], null, false, true, null],
        ],
        262 => [[['_route' => 'modif_act', '_controller' => 'App\\Controller\\ActiviteController::ModifierActivite'], ['id'], null, null, false, true, null]],
        281 => [[['_route' => 'supp_act', '_controller' => 'App\\Controller\\ActiviteController::SupprimerActivite'], ['idA'], null, null, false, true, null]],
        305 => [[['_route' => 'remove_enfant', '_controller' => 'App\\Controller\\ActiviteController::removeEnfant'], ['id', 'id_enfant'], null, null, false, true, null]],
        330 => [[['_route' => 'app_activite_details', '_controller' => 'App\\Controller\\ActiviteController::Details'], ['idA'], ['GET' => 0], null, false, true, null]],
        359 => [[['_route' => 'edit_enfant', '_controller' => 'App\\Controller\\ActiviteController::editEnfant'], ['id_enfant'], null, null, false, false, null]],
        384 => [[['_route' => 'listActWithSearch', '_controller' => 'App\\Controller\\ActiviteController::listActWithSearch'], [], null, null, false, false, null]],
        406 => [[['_route' => 'RechAct', '_controller' => 'App\\Controller\\ActiviteController::SearchActivite'], [], null, null, false, false, null]],
        441 => [[['_route' => 'UpdateActiviteJSON', '_controller' => 'App\\Controller\\ActiviteController::UpdateActiviteJSON'], ['idA'], null, null, false, true, null]],
        476 => [[['_route' => 'DeleteActiviteJSON', '_controller' => 'App\\Controller\\ActiviteController::DeleteActiviteJSON'], ['idA'], null, null, false, true, null]],
        506 => [[['_route' => 'app_blg_show', '_controller' => 'App\\Controller\\BlgController::show'], ['idB'], null, null, false, true, null]],
        530 => [[['_route' => 'app_blg_edit', '_controller' => 'App\\Controller\\BlgController::edit'], ['idB'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        538 => [[['_route' => 'app_blg_delete', '_controller' => 'App\\Controller\\BlgController::delete'], ['idB'], ['POST' => 0], null, false, true, null]],
        562 => [[['_route' => 'supp_blg', '_controller' => 'App\\Controller\\BlgController::SupprimerBlg'], ['idB'], null, null, false, true, null]],
        597 => [[['_route' => 'blog_uncomment', '_controller' => 'App\\Controller\\BlgController::removeComment'], ['id', 'idCom'], null, null, false, true, null]],
        629 => [[['_route' => 'showblogclient', '_controller' => 'App\\Controller\\BlgController::showblogclient'], ['idB'], null, null, false, true, null]],
        662 => [[['_route' => 'edit_comment', '_controller' => 'App\\Controller\\BlgController::editCommentaire'], ['idCom'], null, null, false, false, null]],
        681 => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\BlgController::chercherBlog'], [], null, null, true, false, null]],
        707 => [[['_route' => 'ratingAd', '_controller' => 'App\\Controller\\BlgController::edittRating'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        722 => [[['_route' => 'dislikec', '_controller' => 'App\\Controller\\BlgController::DislikeCAction'], [], null, null, true, false, null]],
        734 => [[['_route' => 'likec', '_controller' => 'App\\Controller\\BlgController::LikeCAction'], [], null, null, true, false, null]],
        773 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['idCom'], ['GET' => 0], null, false, true, null]],
        786 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['idCom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        794 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['idCom'], ['POST' => 0], null, false, true, null]],
        823 => [[['_route' => 'supp_com', '_controller' => 'App\\Controller\\CommentaireController::Supprimercommentaire'], ['idCom'], null, null, false, true, null]],
        857 => [[['_route' => 'app_consultation_show', '_controller' => 'App\\Controller\\ConsultationController::show'], ['idC'], ['GET' => 0], null, false, true, null]],
        870 => [[['_route' => 'app_consultation_edit', '_controller' => 'App\\Controller\\ConsultationController::edit'], ['idC'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        894 => [[['_route' => 'app_consultation_delete', '_controller' => 'App\\Controller\\ConsultationController::delete'], ['idC'], ['POST' => 0], null, false, true, null]],
        923 => [[['_route' => 'supp_cons', '_controller' => 'App\\Controller\\ConsultationController::SupprimerConsultation'], ['idC'], null, null, false, true, null]],
        951 => [[['_route' => 'afficher_cons', '_controller' => 'App\\Controller\\ConsultationController::afficher'], ['idC'], ['GET' => 0], null, false, false, null]],
        967 => [[['_route' => 'app_consultation_modifier', '_controller' => 'App\\Controller\\ConsultationController::modifier'], ['idC'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1000 => [[['_route' => 'app_enfant_show', '_controller' => 'App\\Controller\\EnfantController::show'], ['idEnfant'], ['GET' => 0], null, false, true, null]],
        1014 => [[['_route' => 'app_enfant_edit', '_controller' => 'App\\Controller\\EnfantController::edit'], ['idEnfant'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1023 => [[['_route' => 'app_enfant_delete', '_controller' => 'App\\Controller\\EnfantController::delete'], ['idEnfant'], ['POST' => 0], null, false, true, null]],
        1040 => [[['_route' => 'ajouter', '_controller' => 'App\\Controller\\EnfantController::ajouter'], [], null, null, false, false, null]],
        1066 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\EnfantController::modifier'], ['idEnfant'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1100 => [[['_route' => 'UpdateEnfantJSON', '_controller' => 'App\\Controller\\EnfantController::UpdateEnfantJSON'], ['id_enfant'], null, null, false, true, null]],
        1134 => [[['_route' => 'DeleteEnfantJSON', '_controller' => 'App\\Controller\\EnfantController::DeleteEnfantJSON'], ['id_enfant'], null, null, false, true, null]],
        1170 => [[['_route' => 'app_panier_new_front', '_controller' => 'App\\Controller\\PanierController::newFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1195 => [[['_route' => 'app_panier_edit', '_controller' => 'App\\Controller\\PanierController::edit'], ['idPa'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1204 => [[['_route' => 'app_panier_delete', '_controller' => 'App\\Controller\\PanierController::delete'], ['idPa'], ['POST' => 0], null, false, true, null]],
        1229 => [[['_route' => 'supp_panier', '_controller' => 'App\\Controller\\PanierController::SupprimerPanier'], ['idPa'], null, null, false, true, null]],
        1258 => [[['_route' => 'AddQuantity', '_controller' => 'App\\Controller\\PanierController::AddQuantityAction'], ['id'], null, null, false, true, null]],
        1290 => [[['_route' => 'RemoveQuantity', '_controller' => 'App\\Controller\\PanierController::RemoveQuantityAction'], ['id'], null, null, false, true, null]],
        1326 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idP'], ['GET' => 0], null, false, true, null]],
        1351 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1360 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['idP'], ['POST' => 0], null, false, true, null]],
        1386 => [[['_route' => 'supp_produit', '_controller' => 'App\\Controller\\ProduitController::SupprimerBlg'], ['idP'], null, null, false, true, null]],
        1419 => [[['_route' => 'app_programme_show', '_controller' => 'App\\Controller\\ProgrammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1444 => [[['_route' => 'app_programme_edit', '_controller' => 'App\\Controller\\ProgrammeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1453 => [[['_route' => 'app_programme_delete', '_controller' => 'App\\Controller\\ProgrammeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1481 => [[['_route' => 'supp_prog', '_controller' => 'App\\Controller\\ProgrammeController::SupprimerProgramme'], ['id'], null, null, false, true, null]],
        1498 => [[['_route' => 'listprog', '_controller' => 'App\\Controller\\ProgrammeController::list'], [], null, null, false, false, null]],
        1524 => [[['_route' => 'afficher_front', '_controller' => 'App\\Controller\\ProgrammeController::affiche_front'], ['id'], ['GET' => 0], null, false, true, null]],
        1564 => [
            [['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
