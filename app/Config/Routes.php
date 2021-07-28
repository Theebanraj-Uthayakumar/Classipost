<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/index', 'Home::index');
$routes->get('/product', 'Home::product');
$routes->get('/product_details', 'Home::product_details');
$routes->get('/contact', 'Home::contact');
$routes->get('/my_account', 'Home::my_account');
$routes->get('/login', 'Home::login');
$routes->get('/post_ad', 'Home::post_ad');
$routes->get('/faq', 'Home::faq');
$routes->get('/favourate_ad', 'Home::favourate_ad');
$routes->get('/about', 'Home::about');
$routes->get('/terms', 'Home::terms');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/careers', 'Home::careers');
$routes->get('/support', 'Home::support');
$routes->post('/loginControl', 'Home::loginControl');


//Admin Routes
$routes->get('/Admin_index', 'Admin::index');
$routes->get('/Admin_index2', 'Admin::index2');
$routes->get('/Admin_index3', 'Admin::index3');
$routes->get('/Admin_starter', 'Admin::starter');
$routes->get('/Admin_widgets', 'Admin::widgets');
$routes->get('/Admin_calendar', 'Admin::calendar');
$routes->get('/Admin_gallery', 'Admin::gallery');
$routes->get('/Admin_kanban', 'Admin::kanban');
$routes->get('/Admin_chartjs', 'Admin::chartjs');
$routes->get('/Admin_flot', 'Admin::flot');
$routes->get('/Admin_inline', 'Admin::inline');
$routes->get('/Admin_uplot', 'Admin::uplot');
$routes->get('/Admin_404', 'Admin::four04');
$routes->get('/Admin_500', 'Admin::five00');
$routes->get('/Admin_blank', 'Admin::blank');
$routes->get('/Admin_contact_us', 'Admin::contact_us');
$routes->get('/Admin_contacts', 'Admin::contacts');
$routes->get('/Admin_e_commerce', 'Admin::e_commerce');
$routes->get('/Admin_faq', 'Admin::faq');
$routes->get('/Admin_forgot_password_v2', 'Admin::forgot_password_v2');
$routes->get('/Admin_forgot_password', 'Admin::forgot_password');
$routes->get('/Admin_invoice_print', 'Admin::invoice_print');
$routes->get('/Admin_invoice', 'Admin::invoice');
$routes->get('/Admin_language_menu', 'Admin::language_menu');
$routes->get('/Admin_legacy_user_menu', 'Admin::legacy_user_menu');
$routes->get('/Admin_lockscreen', 'Admin::lockscreen');
$routes->get('/Admin_login_v2', 'Admin::login_v2');
$routes->get('/Admin_login', 'Admin::login');
$routes->get('/Admin_pace', 'Admin::pace');
$routes->get('/Admin_profile', 'Admin::profile');
$routes->get('/Admin_project_add', 'Admin::project_add');
$routes->get('/Admin_project_detail', 'Admin::project_detail');
$routes->get('/Admin_project_edit', 'Admin::project_edit');
$routes->get('/Admin_projects', 'Admin::projects');
$routes->get('/Admin_recover_password_v2', 'Admin::recover_password_v2');
$routes->get('/Admin_recover_password', 'Admin::recover_password');
$routes->get('/Admin_register_v2', 'Admin::register_v2');
$routes->get('/Admin_advanced', 'Admin::advanced');
$routes->get('/Admin_editors', 'Admin::editors');
$routes->get('/Admin_general', 'Admin::general');
$routes->get('/Admin_validation', 'Admin::validation');
$routes->get('/Admin_boxed', 'Admin::boxed');
$routes->get('/Admin_collapsed_sidebar', 'Admin::collapsed_sidebar');
$routes->get('/Admin_fixed_footer', 'Admin::fixed_footer');
$routes->get('/Admin_fixed_sidebar_custom', 'Admin::fixed_sidebar_custom');
$routes->get('/Admin_fixed_sidebar', 'Admin::fixed_sidebar');
$routes->get('/Admin_fixed_topnav', 'Admin::fixed_topnav');
$routes->get('/Admin_top_nav_sidebar', 'Admin::top_nav_sidebar');
$routes->get('/Admin_top_nav', 'Admin::top_nav');
$routes->get('/Admin_compose', 'Admin::compose');
$routes->get('/Admin_mailbox', 'Admin::mailbox');
$routes->get('/Admin_read_mail', 'Admin::read_mail');
$routes->get('/Admin_enhanced-results', 'Admin::enhanced-results');
$routes->get('/Admin_enhanced', 'Admin::enhanced');
$routes->get('/Admin_simple_results', 'Admin::simple_results');
$routes->get('/Admin_simple', 'Admin::simple');
$routes->get('/Admin_data', 'Admin::data');
$routes->get('/Admin_jsgrid', 'Admin::jsgrid');
$routes->get('/Admin_simple1', 'Admin::simple1');
$routes->get('/Admin_buttons', 'Admin::buttons');
$routes->get('/Admin_general1', 'Admin::general1');
$routes->get('/Admin_icons', 'Admin::icons');
$routes->get('/Admin_modals', 'Admin::modals');
$routes->get('/Admin_navbar', 'Admin::navbar');
$routes->get('/Admin_ribbons', 'Admin::ribbons');
$routes->get('/Admin_sliders', 'Admin::sliders');
$routes->get('/Admin_timeline', 'Admin::timeline');
$routes->get('/Admin_iframe', 'Admin::iframe');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
