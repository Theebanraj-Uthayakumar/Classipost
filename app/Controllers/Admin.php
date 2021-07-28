<?php

namespace App\Controllers;

use App\Models\BaseModel;
use PharIo\Manifest\Url;
use App\Libraries\hash;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/index');
    }
    public function index2()
    {
        return view('Admin/index2');
    }
    public function index3()
    {
        return view('Admin/index3');
    }
    public function starter()
    {
        return view('Admin/starter');
    }
    public function widgets()
    {
        return view('Admin/pages/widgets');
    }
    public function calendar()
    {
        return view('Admin/pages/calendar');
    }
    public function gallery()
    {
        return view('Admin/pages/gallery');
    }
    public function kanban()
    {
        return view('Admin/pages/kanban');
    }
    public function chartjs()
    {
        return view('Admin/pages/charts/chartjs');
    }
    public function flot()
    {
        return view('Admin/pages/charts/flot');
    }
    public function inline()
    {
        return view('Admin/pages/charts/inline');
    }
    public function uplot()
    {
        return view('Admin/pages/charts/uplot');
    }
    public function four04()
    {
        return view('Admin/pages/examples/404');
    }
    public function five00()
    {
        return view('Admin/pages/examples/500');
    }
    public function blank()
    {
        return view('Admin/pages/examples/blank');
    }
    public function contact_us()
    {
        return view('Admin/pages/examples/contact-us');
    }
    public function contacts()
    {
        return view('Admin/pages/examples/contacts');
    }
    public function e_commerce()
    {
        return view('Admin/pages/examples/e-commerce');
    }
    public function faq()
    {
        return view('Admin/pages/examples/faq');
    }
    public function forgot_password_v2()
    {
        return view('Admin/pages/examples/forgot-password-v2');
    }
    public function forgot_password()
    {
        return view('Admin/pages/examples/forgot-password');
    }
    public function invoice_print()
    {
        return view('Admin/pages/examples/invoice-print');
    }
    public function invoice()
    {
        return view('Admin/pages/examples/invoice');
    }
    public function language_menu()
    {
        return view('Admin/pages/examples/language-menu');
    }
    public function legacy_user_menu()
    {
        return view('Admin/pages/examples/legacy-user-menu');
    }
    public function lockscreen()
    {
        return view('Admin/pages/examples/lockscreen');
    }
    public function login_v2()
    {
        return view('Admin/pages/examples/login-v2');
    }
    public function login()
    {
        return view('Admin/pages/examples/login');
    }
    public function pace()
    {
        return view('Admin/pages/examples/pace');
    }
    public function profile()
    {
        return view('Admin/pages/examples/profile');
    }
    public function project_add()
    {
        return view('Admin/pages/examples/project-add');
    }
    public function project_detail()
    {
        return view('Admin/pages/examples/project-detail');
    }
    public function project_edit()
    {
        return view('Admin/pages/examples/project-edit');
    }
    public function projects()
    {
        return view('Admin/pages/examples/projects');
    }
    public function recover_password_v2()
    {
        return view('Admin/pages/examples/recover-password-v2');
    }
    public function recover_password()
    {
        return view('Admin/pages/examples/recover-password');
    }
    public function register_v2()
    {
        return view('Admin/pages/examples/register-v2');
    }
    public function register()
    {
        return view('Admin/pages/examples/register');
    }
    public function advanced()
    {
        return view('Admin/pages/forms/advanced');
    }
    public function editors()
    {
        return view('Admin/pages/forms/editors');
    }
    public function general()
    {
        return view('Admin/pages/forms/general');
    }
    public function validation()
    {
        return view('Admin/pages/forms/validation');
    }
    public function boxed()
    {
        return view('Admin/pages/layout/boxed');
    }
    public function collapsed_sidebar()
    {
        return view('Admin/pages/Admin_collapsed_sidebar');
    }
    public function fixed_footer()
    {
        return view('Admin/pages/layout/fixed-footer');
    }
    public function fixed_sidebar_custom()
    {
        return view('Admin/pages/layout/fixed-sidebar-custom');
    }
    public function fixed_sidebar()
    {
        return view('Admin/pages/layout/fixed-sidebar');
    }
    public function fixed_topnav()
    {
        return view('Admin/pages/layout/fixed-topnav');
    }
    public function top_nav_sidebar()
    {
        return view('Admin/pages/layout/top-nav-sidebar');
    }
    public function top_nav()
    {
        return view('Admin/pages/layout/top-nav');
    }
    public function compose()
    {
        return view('Admin/pages/mailbox/compose');
    }
    public function mailbox()
    {
        return view('Admin/pages/mailbox/mailbox');
    }
    public function read_mail()
    {
        return view('Admin/pages/mailbox/read-mail');
    }
    public function enhanced_results()
    {
        return view('Admin/pages/search/enhanced-results');
    }
    public function enhanced()
    {
        return view('Admin/pages/search/enhanced');
    }
    public function simple_results()
    {
        return view('Admin/pages/search/simple-results');
    }
    public function simple()
    {
        return view('Admin/pages/search/simple');
    }
    public function data()
    {
        return view('Admin/pages/tables/data');
    }
    public function jsgrid()
    {
        return view('Admin/pages/tables/jsgrid');
    }
    public function simple1()
    {
        return view('Admin/pages/tables/simple');
    }
    public function buttons()
    {
        return view('Admin/pages/UI/buttons');
    }
    public function general1()
    {
        return view('Admin/pages/UI/general');
    }
    public function icons()
    {
        return view('Admin/pages/UI/icons');
    }
    public function modals()
    {
        return view('Admin/pages/UI/modals');
    }
    public function navbar()
    {
        return view('Admin/pages/UI/navbar');
    }
    public function ribbons()
    {
        return view('Admin/pages/UI/ribbons');
    }
    public function sliders()
    {
        return view('Admin/pages/UI/sliders');
    }
    public function timeline()
    {
        return view('Admin/pages/UI/timeline');
    }
    public function iframe()
    {
        return view('Admin/iframe');
    }
}
