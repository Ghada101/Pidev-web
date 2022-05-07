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
        '/book' => [[['_route' => 'app_book_index', '_controller' => 'App\\Controller\\BookController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dislikee' => [[['_route' => 'app_dislikee_index', '_controller' => 'App\\Controller\\DislikeeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dislikee/new' => [[['_route' => 'app_dislikee_new', '_controller' => 'App\\Controller\\DislikeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hotel' => [[['_route' => 'app_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, true, false, null]],
        '/hotel/indexFront' => [[['_route' => 'app_hotel_indexFront', '_controller' => 'App\\Controller\\HotelController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/hotel/new' => [[['_route' => 'app_hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/hotelchain' => [
            [['_route' => 'app_hotelchain_index', '_controller' => 'App\\Controller\\HotelchainController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'excel', '_controller' => 'App\\Controller\\HotelchainController::Exceldownload'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
        ],
        '/hotelchain/new' => [[['_route' => 'app_hotelchain_new', '_controller' => 'App\\Controller\\HotelchainController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/likee' => [[['_route' => 'app_likee_index', '_controller' => 'App\\Controller\\LikeeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/likee/new' => [[['_route' => 'app_likee_new', '_controller' => 'App\\Controller\\LikeeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/rent' => [[['_route' => 'app_rent_index', '_controller' => 'App\\Controller\\RentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/room' => [[['_route' => 'app_room_index', '_controller' => 'App\\Controller\\RoomController::index'], null, ['GET' => 0], null, true, false, null]],
        '/room/new' => [[['_route' => 'app_room_new', '_controller' => 'App\\Controller\\RoomController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/subject/Back' => [[['_route' => 'app_subject_back', '_controller' => 'App\\Controller\\SubjectController::back'], null, ['GET' => 0], null, false, false, null]],
        '/topic/show' => [[['_route' => 'app_topic_index', '_controller' => 'App\\Controller\\TopicController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/topic/showBack' => [[['_route' => 'app_topic_index_Back', '_controller' => 'App\\Controller\\TopicController::indexBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/topic/new' => [[['_route' => 'app_topic_new', '_controller' => 'App\\Controller\\TopicController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/topic/searchTopics/firas' => [[['_route' => 'apptopicsearch', '_controller' => 'App\\Controller\\TopicController::search'], null, null, null, false, false, null]],
        '/topic/mobile/listTopics' => [[['_route' => 'mobile_liste_topic', '_controller' => 'App\\Controller\\TopicController::liste_topics'], null, ['GET' => 0], null, false, false, null]],
        '/topic/mobile/ajouter' => [[['_route' => 'mobile_ajouter_topic', '_controller' => 'App\\Controller\\TopicController::ajoutertopic'], null, null, null, false, false, null]],
        '/hotels' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HotelController::indexFront'], null, null, null, false, false, null]],
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
                .'|/book/(?'
                    .'|new/([^/]++)(*:395)'
                    .'|([^/]++)(?'
                        .'|(*:414)'
                        .'|/(?'
                            .'|edit(*:430)'
                            .'|list(*:442)'
                        .')'
                        .'|(*:451)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ar/(?'
                        .'|([^/]++)(*:480)'
                        .'|front/([^/]++)(*:502)'
                        .'|new/([^/]++)(*:522)'
                        .'|([^/]++)(?'
                            .'|(*:541)'
                            .'|/(?'
                                .'|edit(*:557)'
                                .'|delete(*:571)'
                            .')'
                        .')'
                    .')'
                    .'|omment/(?'
                        .'|show(?'
                            .'|Back/([^/]++)(*:612)'
                            .'|/([^/]++)(*:629)'
                        .')'
                        .'|([^/]++)(?'
                            .'|(*:649)'
                            .'|/(?'
                                .'|edit(*:665)'
                                .'|([^/]++)(?'
                                    .'|(*:684)'
                                    .'|/(?'
                                        .'|back(*:700)'
                                        .'|like(*:712)'
                                        .'|dislike(*:727)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|jaime(*:744)'
                    .')'
                .')'
                .'|/dislikee/([^/]++)(?'
                    .'|(*:775)'
                    .'|/edit(*:788)'
                    .'|(*:796)'
                .')'
                .'|/hotel(?'
                    .'|/(?'
                        .'|([^/]++)(?'
                            .'|(*:829)'
                            .'|/(?'
                                .'|edit(*:845)'
                                .'|delete(*:859)'
                            .')'
                        .')'
                        .'|Search(*:875)'
                        .'|rating(*:889)'
                    .')'
                    .'|chain/([^/]++)(?'
                        .'|(*:915)'
                        .'|/edit(*:928)'
                        .'|(*:936)'
                    .')'
                    .'|room/([^/]++)(*:958)'
                .')'
                .'|/likee/([^/]++)(?'
                    .'|(*:985)'
                    .'|/edit(*:998)'
                    .'|(*:1006)'
                .')'
                .'|/r(?'
                    .'|ent/(?'
                        .'|new/([^/]++)/([^/]++)(*:1049)'
                        .'|([^/]++)(*:1066)'
                        .'|edit/([^/]++)/([^/]++)/([^/]++)(*:1106)'
                        .'|([^/]++)(*:1123)'
                    .')'
                    .'|oom/([^/]++)(?'
                        .'|(*:1148)'
                        .'|/edit(*:1162)'
                        .'|(*:1171)'
                    .')'
                .')'
                .'|/subject/(?'
                    .'|Show(?'
                        .'|Back/([^/]++)(*:1214)'
                        .'|/([^/]++)(*:1232)'
                    .')'
                    .'|new/([^/]++)(*:1254)'
                    .'|([^/]++)(?'
                        .'|(*:1274)'
                        .'|/(?'
                            .'|edit(*:1291)'
                            .'|([^/]++)(?'
                                .'|(*:1311)'
                                .'|/back(*:1325)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/topic/(?'
                    .'|showTransl/([^/]++)(*:1367)'
                    .'|([^/]++)(?'
                        .'|(*:1387)'
                        .'|/(?'
                            .'|edit(*:1404)'
                            .'|back(*:1417)'
                        .')'
                        .'|(*:1427)'
                    .')'
                    .'|Accept/([^/]++)(*:1452)'
                    .'|admin/accepter/([^/]++)(*:1484)'
                    .'|mobile/(?'
                        .'|topicbyid/([^/]++)(*:1521)'
                        .'|delete/([^/]++)(*:1545)'
                        .'|modifier/([^/]++)(*:1571)'
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
        205 => [[['_route' => 'app_agency_show', '_controller' => 'App\\Controller\\AgencyController::show'], ['idAgency'], ['GET' => 0], null, false, false, null]],
        217 => [[['_route' => 'app_agency_delete', '_controller' => 'App\\Controller\\AgencyController::deleteAgency'], ['idAgency'], null, null, false, false, null]],
        230 => [[['_route' => 'app_agency_edit', '_controller' => 'App\\Controller\\AgencyController::edit'], ['idAgency'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        263 => [[['_route' => 'app_agency_findByname', '_controller' => 'App\\Controller\\AgencyController::findByName'], ['nameagency', 'pageNumber'], null, null, false, true, null]],
        289 => [[['_route' => 'app_agency_findall', '_controller' => 'App\\Controller\\AgencyController::searchAllAgencies'], ['pageNumber'], null, null, false, true, null]],
        318 => [[['_route' => 'app_agencylove_new', '_controller' => 'App\\Controller\\AgencyloveController::new'], ['idAgency'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        337 => [[['_route' => 'app_agencylove_show', '_controller' => 'App\\Controller\\AgencyloveController::show'], ['idagencylove'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_agencylove_edit', '_controller' => 'App\\Controller\\AgencyloveController::edit'], ['idagencylove'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        364 => [[['_route' => 'app_agencylove_count', '_controller' => 'App\\Controller\\AgencyloveController::countLove'], [], null, null, false, false, null]],
        395 => [[['_route' => 'app_book_new', '_controller' => 'App\\Controller\\BookController::new'], ['idroom'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'app_book_show', '_controller' => 'App\\Controller\\BookController::show'], ['idbook'], ['GET' => 0], null, false, true, null]],
        430 => [[['_route' => 'app_book_edit', '_controller' => 'App\\Controller\\BookController::edit'], ['idbook'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'book_list', '_controller' => 'App\\Controller\\BookController::list'], ['idbook'], ['GET' => 0], null, false, false, null]],
        451 => [[['_route' => 'app_book_delete', '_controller' => 'App\\Controller\\BookController::delete'], ['idbook'], ['POST' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_car_index', '_controller' => 'App\\Controller\\CarController::index'], ['idAgency'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'app_car_front_index', '_controller' => 'App\\Controller\\CarController::Frontindex'], ['idAgency'], ['GET' => 0], null, false, true, null]],
        522 => [[['_route' => 'app_car_new', '_controller' => 'App\\Controller\\CarController::new'], ['idAgency'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        541 => [[['_route' => 'app_car_show', '_controller' => 'App\\Controller\\CarController::show'], ['idCar'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'app_car_edit', '_controller' => 'App\\Controller\\CarController::edit'], ['idCar'], null, null, false, false, null]],
        571 => [[['_route' => 'app_car_delete', '_controller' => 'App\\Controller\\CarController::deleteCar'], ['idCar'], null, null, false, false, null]],
        612 => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], ['IdSubject'], ['GET' => 0], null, false, true, null]],
        629 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::new'], ['IdSubject'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        649 => [[['_route' => 'app_comment_show1   ', '_controller' => 'App\\Controller\\CommentController::show'], ['commentId'], ['GET' => 0], null, false, true, null]],
        665 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['commentId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        684 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['commentId', 'IdSubject'], ['POST' => 0], null, false, true, null]],
        700 => [[['_route' => 'app_comment_deleteBack', '_controller' => 'App\\Controller\\CommentController::deleteBack'], ['commentId', 'IdSubject'], ['POST' => 0], null, false, false, null]],
        712 => [[['_route' => 'app_comment_like', '_controller' => 'App\\Controller\\CommentController::like'], ['IdSubject', 'idcom'], ['GET' => 0], null, false, false, null]],
        727 => [[['_route' => 'app_comment_dislike', '_controller' => 'App\\Controller\\CommentController::dislike'], ['IdSubject', 'idcom'], ['GET' => 0], null, false, false, null]],
        744 => [[['_route' => 'app_commentjaime', '_controller' => 'App\\Controller\\CommentController::likeeee'], [], ['GET, POST' => 0], null, false, false, null]],
        775 => [[['_route' => 'app_dislikee_show', '_controller' => 'App\\Controller\\DislikeeController::show'], ['dislikeid'], ['GET' => 0], null, false, true, null]],
        788 => [[['_route' => 'app_dislikee_edit', '_controller' => 'App\\Controller\\DislikeeController::edit'], ['dislikeid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        796 => [[['_route' => 'app_dislikee_delete', '_controller' => 'App\\Controller\\DislikeeController::delete'], ['dislikeid'], ['POST' => 0], null, false, true, null]],
        829 => [[['_route' => 'app_hotel_show', '_controller' => 'App\\Controller\\HotelController::show'], ['idHotel'], ['GET' => 0], null, false, true, null]],
        845 => [[['_route' => 'app_hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['idHotel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        859 => [[['_route' => 'app_hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['idHotel'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        875 => [[['_route' => 'demo_create', '_controller' => 'App\\Controller\\HotelController::index3'], [], null, null, false, false, null]],
        889 => [[['_route' => 'app_hotel_rating', '_controller' => 'App\\Controller\\HotelController::rating'], [], ['POST' => 0], null, false, false, null]],
        915 => [[['_route' => 'app_hotelchain_show', '_controller' => 'App\\Controller\\HotelchainController::show'], ['idHotelchain'], ['GET' => 0], null, false, true, null]],
        928 => [[['_route' => 'app_hotelchain_edit', '_controller' => 'App\\Controller\\HotelchainController::edit'], ['idHotelchain'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        936 => [[['_route' => 'app_hotelchain_delete', '_controller' => 'App\\Controller\\HotelchainController::delete'], ['idHotelchain'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        958 => [[['_route' => 'indexFront', '_controller' => 'App\\Controller\\RoomController::indexFront'], ['idHotel'], null, null, false, true, null]],
        985 => [[['_route' => 'app_likee_show', '_controller' => 'App\\Controller\\LikeeController::show'], ['likeid'], ['GET' => 0], null, false, true, null]],
        998 => [[['_route' => 'app_likee_edit', '_controller' => 'App\\Controller\\LikeeController::edit'], ['likeid'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1006 => [[['_route' => 'app_likee_delete', '_controller' => 'App\\Controller\\LikeeController::delete'], ['likeid'], ['POST' => 0], null, false, true, null]],
        1049 => [[['_route' => 'app_rent_new', '_controller' => 'App\\Controller\\RentController::new'], ['idAgency', 'idCar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1066 => [[['_route' => 'app_rent_show', '_controller' => 'App\\Controller\\RentController::show'], ['idrent'], ['GET' => 0], null, false, true, null]],
        1106 => [[['_route' => 'app_rent_edit', '_controller' => 'App\\Controller\\RentController::edit'], ['idrent', 'idAgency', 'idCar'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1123 => [[['_route' => 'app_rent_delete', '_controller' => 'App\\Controller\\RentController::delete'], ['idrent'], ['POST' => 0], null, false, true, null]],
        1148 => [[['_route' => 'app_room_show', '_controller' => 'App\\Controller\\RoomController::show'], ['idRoom'], ['GET' => 0], null, false, true, null]],
        1162 => [[['_route' => 'app_room_edit', '_controller' => 'App\\Controller\\RoomController::edit'], ['idRoom'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1171 => [[['_route' => 'app_room_delete', '_controller' => 'App\\Controller\\RoomController::delete'], ['idRoom'], ['POST' => 0], null, false, true, null]],
        1214 => [[['_route' => 'app_subject_indexBack', '_controller' => 'App\\Controller\\SubjectController::showBack'], ['IdTopic'], ['GET' => 0], null, false, true, null]],
        1232 => [[['_route' => 'app_subject_index', '_controller' => 'App\\Controller\\SubjectController::show'], ['IdTopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1254 => [[['_route' => 'app_subject_new', '_controller' => 'App\\Controller\\SubjectController::new'], ['IdTopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1274 => [[['_route' => 'app_subject_show', '_controller' => 'App\\Controller\\SubjectController::showById'], ['subjectId'], ['GET' => 0], null, false, true, null]],
        1291 => [[['_route' => 'app_subject_edit', '_controller' => 'App\\Controller\\SubjectController::edit'], ['subjectId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1311 => [[['_route' => 'app_subject_delete', '_controller' => 'App\\Controller\\SubjectController::delete'], ['subjectId', 'IdTopic'], ['POST' => 0], null, false, true, null]],
        1325 => [[['_route' => 'app_subject_deleteBack', '_controller' => 'App\\Controller\\SubjectController::deleteBack'], ['subjectId', 'IdTopic'], ['POST' => 0], null, false, false, null]],
        1367 => [[['_route' => 'app_topic_index_Transl', '_controller' => 'App\\Controller\\TopicController::indexTransl'], ['idTopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1387 => [[['_route' => 'app_topic_show', '_controller' => 'App\\Controller\\TopicController::show'], ['topicId'], ['GET' => 0], null, false, true, null]],
        1404 => [[['_route' => 'app_topic_edit', '_controller' => 'App\\Controller\\TopicController::edit'], ['topicId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1417 => [[['_route' => 'app_topic_delete_Back', '_controller' => 'App\\Controller\\TopicController::deleteBack'], ['topicId'], ['POST' => 0], null, false, false, null]],
        1427 => [[['_route' => 'app_topic_delete', '_controller' => 'App\\Controller\\TopicController::delete'], ['topicId'], ['POST' => 0], null, false, true, null]],
        1452 => [[['_route' => 'app_topic_Accept', '_controller' => 'App\\Controller\\TopicController::AcceptTopic'], ['idTopic'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1484 => [[['_route' => 'app_topic_accepter', '_controller' => 'App\\Controller\\TopicController::acceptertopic'], ['idtopic'], ['GET' => 0], null, false, true, null]],
        1521 => [[['_route' => 'mobile_topicbyid', '_controller' => 'App\\Controller\\TopicController::topicbyid'], ['id'], ['GET' => 0], null, false, true, null]],
        1545 => [[['_route' => 'mobile_delete_topic', '_controller' => 'App\\Controller\\TopicController::deletetopic'], ['id'], null, null, false, true, null]],
        1571 => [
            [['_route' => 'mobile_modifier_topic', '_controller' => 'App\\Controller\\TopicController::modifiertopic'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
