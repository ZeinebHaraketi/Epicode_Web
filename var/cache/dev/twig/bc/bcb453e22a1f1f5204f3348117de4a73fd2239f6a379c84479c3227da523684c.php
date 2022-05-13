<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Back.html.twig */
class __TwigTemplate_62e9beb4f1e05dd3d67b53f9ba09e7bbe52e1ff176a6fa53aaa60c9c3eb8eefd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title> ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

         ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    </head>


    <body class=\"fixed-left\">

        <!-- Loader -->
        <div id=\"preloader\"><div id=\"status\"><div class=\"spinner\"></div></div></div>

        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <button type=\"button\" class=\"button-menu-mobile button-menu-mobile-topbar open-left waves-effect\">
                    <i class=\"ion-close\"></i>
                </button>

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_back");
        echo "\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/images/logo.png\" height=\"24\" alt=\"logo\"></a> -->
                    </div>
                </div>

                <div class=\"sidebar-inner slimscrollleft\">

                    <div id=\"sidebar-menu\">
                        <ul>
                            <li class=\"menu-title\">Main</li>

                            <li>
                                <a href=\"index.html\" class=\"waves-effect\">
                                    <i class=\"mdi mdi-airplay\"></i>
                                    <span> Dashboard <span class=\"badge badge-pill badge-primary float-right\">7</span></span>
                                </a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-layers\"></i> <span> Advanced UI </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"advanced-highlight.html\">Highlight</a></li>
                                    <li><a href=\"advanced-rating.html\">Rating</a></li>
                                    <li><a href=\"advanced-alertify.html\">Alertify</a></li>
                                    <li><a href=\"advanced-rangeslider.html\">Range Slider</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"mdi mdi-calendar-clock\"></i><span> Calendar </span></a>
                            </li>


                            <li class=\"menu-title\">Components</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-bullseye\"></i> <span> UI Elements </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-cards.html\">Cards</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-images.html\">Images</a></li>
                                    <li><a href=\"ui-alerts.html\">Alerts</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-dropdowns.html\">Dropdowns</a></li>
                                    <li><a href=\"ui-lightbox.html\">Lightbox</a></li>
                                    <li><a href=\"ui-navs.html\">Navs</a></li>
                                    <li><a href=\"ui-pagination.html\">Pagination</a></li>
                                    <li><a href=\"ui-popover-tooltips.html\">Popover & Tooltips</a></li>
                                    <li><a href=\"ui-badge.html\">Badge</a></li>
                                    <li><a href=\"ui-carousel.html\">Carousel</a></li>
                                    <li><a href=\"ui-video.html\">Video</a></li>
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                    <li><a href=\"ui-grid.html\">Grid</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Activite </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\">Accueil Activite</a></li>
                                    <li><a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newActivite");
        echo "\">Ajouter Activite</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>
\t\t\t\t\t\t\t<li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Enfant </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant_index");
        echo "\">Accueil Enfant</a></li>
                                    <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant_new");
        echo "\">Ajouter Enfant</a></li>
                      
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                           <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Blog </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blg_index");
        echo "\">Accueil Blog</a></li>
                                    <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blg_new");
        echo "\">Ajouter Blog</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Commentaire </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
        echo "\">Accueil Commentaire</a></li>
                                    <li><a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_new");
        echo "\">Ajouter Commentaire</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil Consultation</a></li>
                                    <li><a href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_new");
        echo "\">Ajouter Consultation</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"";
        // line 160
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil Programme</a></li>
                                    <li><a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new");
        echo "\">Ajouter Programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>


                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-table\"></i><span> Tables </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class=\"menu-title\">Extra</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-map-marker-multiple\"></i><span> Maps </span> <span class=\"badge badge-pill badge-danger float-right\">2</span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-google-pages\"></i><span> Pages </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-404.html\">Error 404</a></li>
                                    <li><a href=\"pages-500.html\">Error 500</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class=\"clearfix\"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">

                    <!-- Top Bar Start -->
                    <div class=\"topbar\">

                        <nav class=\"navbar-custom navbar-dark bg-dark\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        English <img src=\"assets/images/flags/us_flag.jpg\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/italy_flag.jpg\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/french_flag.jpg\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/spain_flag.jpg\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/russia_flag.jpg\" alt=\"\" height=\"16\"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <i class=\"ti-email noti-icon\"></i>
                                        <span class=\"badge badge-danger noti-icon-badge\">5</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg\">
                                        <!-- item-->
                                        <div class=\"dropdown-item noti-title\">
                                            <h5><span class=\"badge badge-danger float-right\">745</span>Messages</h5>
                                        </div>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-2.jpg\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-3.jpg\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-4.jpg\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Luis M. Konrad</b><small class=\"text-muted\">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <i class=\"ti-bell noti-icon\"></i>
                                        <span class=\"badge badge-success noti-icon-badge\">23</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg\">
                                        <!-- item-->
                                        <div class=\"dropdown-item noti-title\">
                                            <h5><span class=\"badge badge-danger float-right\">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon bg-primary\"><i class=\"mdi mdi-cart-outline\"></i></div>
                                            <p class=\"notify-details\"><b>Your order is placed</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon bg-success\"><i class=\"mdi mdi-message\"></i></div>
                                            <p class=\"notify-details\"><b>New Message received</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon bg-warning\"><i class=\"mdi mdi-martini\"></i></div>
                                            <p class=\"notify-details\"><b>Your item is shipped</b><small class=\"text-muted\">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                    
                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <img src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/user.jpg"), "html", null, true);
        echo "\" alt=\"user\" class=\"rounded-circle\">
                                    </a> 
                                    <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                        
                                        <!-- item-->
                                         
                                        <div class=\"dropdown-item noti-title\">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-account-circle m-r-5 text-muted\"></i> Profile</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-wallet m-r-5 text-muted\"></i> My Wallet</a>
                                        <a class=\"dropdown-item\" href=\"#\"><span class=\"badge badge-success float-right\">5</span><i class=\"mdi mdi-settings m-r-5 text-muted\"></i> Settings</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i> Lock screen</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i> Logout</a>
                                    </div>
                                </li>
                                  
                            </ul>

                            <ul class=\"list-inline menu-left mb-0\">
                                <li class=\"float-left\">
                                    <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                        <i class=\"mdi mdi-menu\"></i>
                                    </button>
                                </li>
                                <li class=\"hide-phone app-search \">
                                    <form role=\"search\" class=\"\">
                                        <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                                        <a href=\"\"><i class=\"fa fa-search\"></i></a>
                                    </form>
                                </li>
                            </ul>

                            <div class=\"clearfix\"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class=\"page-content-wrapper \">

                        <div class=\"container-fluid\">

                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"page-title-box\">
                                        <div class=\"btn-group float-right\">
                                            <ol class=\"breadcrumb hide-phone p-0 m-0\">
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Annex</a></li>
                                                <li class=\"breadcrumb-item active\">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                                    
                            <div class=\"row\">
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round\">
                                                        <i class=\"mdi mdi-webcam\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 align-self-center text-center\">
                                                    <div class=\"m-l-10\">
                                                        <h5 class=\"mt-0 round-inner\">\$18090</h5>
                                                        <p class=\"mb-0 text-muted\">Visits Today</p>                                                                 
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-danger\"> <i class=\"mdi mdi-arrow-down\"></i> <span>5.26%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round\">
                                                        <i class=\"mdi mdi-account-multiple-plus\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 text-center align-self-center\">
                                                    <div class=\"m-l-10 \">
                                                        <h5 class=\"mt-0 round-inner\">562</h5>
                                                        <p class=\"mb-0 text-muted\">New Users</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-success\"> <i class=\"mdi mdi-arrow-up\"></i> <span>8.68%</span></h6>
                                                </div>                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round \">
                                                        <i class=\"mdi mdi-basket\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 align-self-center text-center\">
                                                    <div class=\"m-l-10 \">
                                                        <h5 class=\"mt-0 round-inner\">7514</h5>
                                                        <p class=\"mb-0 text-muted\">New Orders</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-danger\"> <i class=\"mdi mdi-arrow-down\"></i> <span>2.35%</span></h6>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round\">
                                                        <i class=\"mdi mdi-rocket\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 align-self-center text-center\">
                                                    <div class=\"m-l-10\">
                                                        <h5 class=\"mt-0 round-inner\">\$32874</h5>
                                                        <p class=\"mb-0 text-muted\">Total Sales</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-success\"> <i class=\"mdi mdi-arrow-up\"></i> <span>2.35%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-lg-12 col-xl-8\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <h5 class=\"header-title pb-3 mt-0\">Overview</h5>
                                            <div id=\"multi-line-chart\" style=\"height:400px;\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-12 col-xl-4\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <a href=\"\" class=\"btn btn-primary btn-sm float-right\">More Info</a>
                                            <h5 class=\"header-title mt-0 pb-3\">Revenue By Country</h5>
                                                                                            
                                            <ul class=\"list-unstyled list-inline text-center\">
                                                <li class=\"list-inline-item\">
                                                    <p><i class=\"mdi mdi-checkbox-blank-circle text-primary mr-2\"></i>Canada</p> 
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <p><i class=\"mdi mdi-checkbox-blank-circle text-info mr-2\"></i>USA</p>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <p><i class=\"mdi mdi-checkbox-blank-circle text-greylight mr-2\"></i>London</p>    
                                                </li>
                                            </ul> 
                                            <div id=\"morris-donut-chart\" style=\"height:345px;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                
                                <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                    <div class=\"card bg-info m-b-30\">
                                        <div class=\"card-body\">
                                            <div id=\"verticalCarousel\" class=\"carousel slide vertical\" data-ride=\"carousel\">
                                                <!-- Carousel items -->
                                                <div class=\"carousel-inner\">
                                                    <div class=\"carousel-item active\">
                                                        <div class=\"row d-flex justify-content-center text-center\">
                                                            <div class=\"col-sm-12 carousel-icon\">
                                                                <i class=\"fa fa-twitter text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-6 text-white\">                                                                
                                                                <h2>54k</h2>
                                                                <p class=\"\">Followers</p>                                                                
                                                            </div>
                                                            <div class=\"col-6 text-white\">                                                                
                                                                <h2>44k</h2>
                                                                <p class=\"\">Tweets</p>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class=\"carousel-item\">
                                                        <div class=\"row d-flex justify-content-center\">
                                                            <div class=\"col-sm-12 carousel-icon text-center\">
                                                                <i class=\"fa fa-twitter text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-sm-10 mx-auto text-white text-center\">
                                                                <p>Lorem Ipsum is simply dummy text of the <span class=\"warning\">#TWITTER</span> and typesetting industry. A description list is perfect for defining terms.</p>
                                                            </div>
                                                        </div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"card bg-primary \">
                                        <div class=\"card-body\">
                                            <div id=\"verticalCarousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                                                <!-- Carousel items -->
                                                <div class=\"carousel-inner\">
                                                    <div class=\"carousel-item active\">
                                                        <div class=\"row d-flex justify-content-center\">
                                                            <div class=\"col-lg-12 carousel-icon text-center\">
                                                                <i class=\"fa fa-facebook text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-sm-10 mx-auto text-white text-center\">
                                                                <p>Lorem Ipsum is simply dummy text of the <mark> FACEBOOK </mark> and typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"carousel-item\">
                                                        <div class=\"row d-flex justify-content-center text-white text-center\">
                                                            <div class=\"col-sm-12 carousel-icon\">
                                                                <i class=\"fa fa-facebook text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-6\">                                                                
                                                                <h2>54k</h2>
                                                                <p class=\"\">Followers</p>                                                               
                                                            </div>
                                                            <div class=\"col-6\">                                                                
                                                                <h2>44k</h2>
                                                                <p class=\"\">Posts</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                    <div class=\"card bg-white m-b-30\">
                                        <div class=\"card-body new-user\">
                                            
                                            <div class=\"row text-center\">
                                                <div class=\"col-6\">
                                                    <h5><i class=\"mdi mdi-database mr-2 text-primary font-20\"></i> 5 TB</h5>
                                                    <h6 class=\"text-lightdark\">Bandwidth usage</h6>
                                                    <span class=\"text-muted\"> <small>June 2018</small></span>
                                                </div>
                                                <div class=\"col-6\">
                                                    <h5><i class=\"mdi mdi-download mr-2 text-success font-20\"></i>5412</h5>
                                                    <h6 class=\"text-lightdark\">Download count</h6>
                                                    <span class=\"text-muted\"> <small>June 2018</small></span>
                                                </div>
                                            </div>
                                            <div id=\"morris-area-chart\" style=\"height: 310px\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-12 col-xl-4\">
                                    <div class=\"card bg-white m-b-30\">
                                        <img src=\"assets/images/widgets/wather.jpg\" alt=\"\" class=\"img-fluid\">
                                        
                                        <div class=\"card-body bg-primary\">                                
                                            <div class=\"row\">
                                                <div class=\"col-6  align-self-center\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6 col-sm-6 text-center\">
                                                            <canvas id=\"partly-cloudy-day\" width=\"70\" height=\"70\"></canvas>
                                                            <h6 class=\"text-white\">SUNDAY <span>25<sup>th</sup></span></h6>
                                                        </div>
                                                        <div class=\"col-lg-6 col-sm-6 text-center align-self-center\">
                                                            <h5 class=\"mt-0 text-white\"><b>32°</b></h5>
                                                            <p class=\"text-white  font-12\">Partly cloudy</p>
                                                            <p class=\"text-white font-12\">15km/h - 37%</p>
                                                        </div>
                                                    </div><!-- End row -->
                                                </div>
                                                <div class=\"col-6 align-self-center\">
                                                    <div class=\"row\">
                                                        <div class=\"col-6 text-center\">
                                                            <h6 class=\"text-white mt-0 font-14\">MON</h6>
                                                            <canvas id=\"rain\" width=\"28\" height=\"35\"></canvas>
                                                            <h6 class=\"text-white font-14\">38°<i class=\"wi-degrees\"></i></h6>
                                                        </div>
                                                        <div class=\"col-6 text-center\">
                                                            <h6 class=\"text-white mt-0 font-14\">TUE</h6>
                                                            <canvas id=\"wind\" width=\"35\" height=\"35\"></canvas>
                                                            <h6 class=\"text-white font-14\">32°<i class=\"wi-degrees\"></i></h6>
                                                        </div>                                                                                                                                              
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end row -->                            
                                        </div>
                                    </div>
                                </div>                                                 
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-lg-12 col-xl-8 align-self-center\">
                                    <div class=\"card bg-white m-b-30\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Members Profiles</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover\">
                                                    <thead>
                                                        <tr>
                                                            <th class=\"border-top-0\" style=\"width:60px;\">Member</th>
                                                            <th class=\"border-top-0\">Name</th>
                                                            <th class=\"border-top-0\">Country</th>
                                                            <th class=\"border-top-0\">Earnings</th>
                                                            <th class=\"border-top-0\">Sales</th>                                    
                                                            <th class=\"border-top-0\">Reviews</th>
                                                            <th class=\"border-top-0\">Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-2.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/us_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$100</td>
                                                            <td>10</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" aria-valuenow=\"94\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 94%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-3.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">William A. Johnson</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/french_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$490</td>
                                                            <td>24</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 38%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-4.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Bobby M. Gray</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/spain_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$380</td>
                                                            <td>19</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-dark\" role=\"progressbar\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:65%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-5.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Robert N. Carlile</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/russia_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$450</td>
                                                            <td>30</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"88\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 88%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-6.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/italy_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$500</td>
                                                            <td>40</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar l-blue\" role=\"progressbar\" aria-valuenow=\"17\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 17%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-12 col-xl-4\">
                                    <div class=\"card bg-white m-b-30\">
                                        <div class=\"card-body new-user\">
                                                <h5 class=\"header-title mt-0 mb-4\">New Users</h5>
                                            <ul class=\"list-unstyled mb-0 pr-3\" id=\"boxscroll2\" tabindex=\"1\" style=\"overflow: hidden; outline: none;\">
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Ruby T. Curd <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">Newyork</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">William A. Johnson <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">California</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">                                                    
                                                            <p class=\"media-heading mb-0\">Robert N. Carlile<i class=\"fa fa-circle text-danger mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">10 min ago</small>
                                                            <small class=\"text-muted\">India</small>                                                   
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Bobby M. Gray <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">Australia</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Ruby T. Curd <i class=\"fa fa-circle text-danger mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">36 min ago</small>
                                                            <small class=\"text-muted\">New Zealand</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Robert N. Carlile <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">India</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Bobby M. Gray<i class=\"fa fa-circle text-danger mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">58 min ago</small>
                                                            <small class=\"text-muted\">Australia</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                    
                                        </div>                                
                                    </div>
                                </div>
                            </div>                                                 
                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class=\"footer\">
                    © 2018 Annex by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        ";
        // line 908
        $this->displayBlock('javascripts', $context, $blocks);
        // line 931
        echo "        
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Epicode";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            
       
        <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 908
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 909
        echo "             <!-- jQuery  -->
        <script src=\"";
        // line 910
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 911
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 916
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 917
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 918
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 919
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 920
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 922
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 923
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 924
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 926
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashborad.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 929
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1147 => 929,  1141 => 926,  1136 => 924,  1132 => 923,  1128 => 922,  1123 => 920,  1119 => 919,  1115 => 918,  1111 => 917,  1107 => 916,  1103 => 915,  1099 => 914,  1095 => 913,  1091 => 912,  1087 => 911,  1083 => 910,  1080 => 909,  1070 => 908,  1058 => 21,  1054 => 20,  1050 => 19,  1045 => 17,  1040 => 15,  1036 => 13,  1026 => 12,  1007 => 7,  995 => 931,  993 => 908,  394 => 312,  240 => 161,  236 => 160,  223 => 150,  219 => 149,  206 => 139,  202 => 138,  189 => 128,  185 => 127,  172 => 117,  168 => 116,  157 => 108,  153 => 107,  87 => 44,  64 => 23,  62 => 12,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title> {% block title %}Epicode{% endblock %} </title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

         {% block stylesheets %}
            
       
        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon.ico')}}\">

        <link href=\"{{asset('assets/plugins/morris/morris.css')}}\" rel=\"stylesheet\">

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\">
       {% endblock %}

    </head>


    <body class=\"fixed-left\">

        <!-- Loader -->
        <div id=\"preloader\"><div id=\"status\"><div class=\"spinner\"></div></div></div>

        <!-- Begin page -->
        <div id=\"wrapper\">

            <!-- ========== Left Sidebar Start ========== -->
            <div class=\"left side-menu\">
                <button type=\"button\" class=\"button-menu-mobile button-menu-mobile-topbar open-left waves-effect\">
                    <i class=\"ion-close\"></i>
                </button>

                <!-- LOGO -->
                <div class=\"topbar-left\">
                    <div class=\"text-center\">
                        <a href=\"{{path('app_client_back')}}\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/images/logo.png\" height=\"24\" alt=\"logo\"></a> -->
                    </div>
                </div>

                <div class=\"sidebar-inner slimscrollleft\">

                    <div id=\"sidebar-menu\">
                        <ul>
                            <li class=\"menu-title\">Main</li>

                            <li>
                                <a href=\"index.html\" class=\"waves-effect\">
                                    <i class=\"mdi mdi-airplay\"></i>
                                    <span> Dashboard <span class=\"badge badge-pill badge-primary float-right\">7</span></span>
                                </a>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-layers\"></i> <span> Advanced UI </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"advanced-highlight.html\">Highlight</a></li>
                                    <li><a href=\"advanced-rating.html\">Rating</a></li>
                                    <li><a href=\"advanced-alertify.html\">Alertify</a></li>
                                    <li><a href=\"advanced-rangeslider.html\">Range Slider</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href=\"calendar.html\" class=\"waves-effect\"><i class=\"mdi mdi-calendar-clock\"></i><span> Calendar </span></a>
                            </li>


                            <li class=\"menu-title\">Components</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-bullseye\"></i> <span> UI Elements </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                    <li><a href=\"ui-cards.html\">Cards</a></li>
                                    <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                    <li><a href=\"ui-modals.html\">Modals</a></li>
                                    <li><a href=\"ui-images.html\">Images</a></li>
                                    <li><a href=\"ui-alerts.html\">Alerts</a></li>
                                    <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                    <li><a href=\"ui-dropdowns.html\">Dropdowns</a></li>
                                    <li><a href=\"ui-lightbox.html\">Lightbox</a></li>
                                    <li><a href=\"ui-navs.html\">Navs</a></li>
                                    <li><a href=\"ui-pagination.html\">Pagination</a></li>
                                    <li><a href=\"ui-popover-tooltips.html\">Popover & Tooltips</a></li>
                                    <li><a href=\"ui-badge.html\">Badge</a></li>
                                    <li><a href=\"ui-carousel.html\">Carousel</a></li>
                                    <li><a href=\"ui-video.html\">Video</a></li>
                                    <li><a href=\"ui-typography.html\">Typography</a></li>
                                    <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                    <li><a href=\"ui-grid.html\">Grid</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Activite </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"{{ path('app_activite_index') }}\">Accueil Activite</a></li>
                                    <li><a href=\"{{ path('newActivite') }}\">Ajouter Activite</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>
\t\t\t\t\t\t\t<li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Enfant </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('app_enfant_index') }}\">Accueil Enfant</a></li>
                                    <li><a href=\"{{ path('app_enfant_new') }}\">Ajouter Enfant</a></li>
                      
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                           <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Blog </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"{{ path('app_blg_index') }}\">Accueil Blog</a></li>
                                    <li><a href=\"{{ path('app_blg_new') }}\">Ajouter Blog</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Commentaire </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"{{ path('app_commentaire_index') }}\">Accueil Commentaire</a></li>
                                    <li><a href=\"{{ path('app_commentaire_new') }}\">Ajouter Commentaire</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"{{ path('app_consultation_index') }}\">Accueil Consultation</a></li>
                                    <li><a href=\"{{ path('app_consultation_new') }}\">Ajouter Consultation</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t    <li><a href=\"{{ path('app_programme_index') }}\">Accueil Programme</a></li>
                                    <li><a href=\"{{ path('app_programme_new') }}\">Ajouter Programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>


                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-table\"></i><span> Tables </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                    <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                    <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                    <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class=\"menu-title\">Extra</li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-map-marker-multiple\"></i><span> Maps </span> <span class=\"badge badge-pill badge-danger float-right\">2</span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"maps-google.html\"> Google Map</a></li>
                                    <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-google-pages\"></i><span> Pages </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"pages-login.html\">Login</a></li>
                                    <li><a href=\"pages-register.html\">Register</a></li>
                                    <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                    <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                    <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                    <li><a href=\"pages-404.html\">Error 404</a></li>
                                    <li><a href=\"pages-500.html\">Error 500</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class=\"clearfix\"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class=\"content-page\">
                <!-- Start content -->
                <div class=\"content\">

                    <!-- Top Bar Start -->
                    <div class=\"topbar\">

                        <nav class=\"navbar-custom navbar-dark bg-dark\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        English <img src=\"assets/images/flags/us_flag.jpg\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/italy_flag.jpg\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/french_flag.jpg\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/spain_flag.jpg\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"assets/images/flags/russia_flag.jpg\" alt=\"\" height=\"16\"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <i class=\"ti-email noti-icon\"></i>
                                        <span class=\"badge badge-danger noti-icon-badge\">5</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg\">
                                        <!-- item-->
                                        <div class=\"dropdown-item noti-title\">
                                            <h5><span class=\"badge badge-danger float-right\">745</span>Messages</h5>
                                        </div>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-2.jpg\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-3.jpg\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"assets/images/users/avatar-4.jpg\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Luis M. Konrad</b><small class=\"text-muted\">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <i class=\"ti-bell noti-icon\"></i>
                                        <span class=\"badge badge-success noti-icon-badge\">23</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg\">
                                        <!-- item-->
                                        <div class=\"dropdown-item noti-title\">
                                            <h5><span class=\"badge badge-danger float-right\">87</span>Notification</h5>
                                        </div>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon bg-primary\"><i class=\"mdi mdi-cart-outline\"></i></div>
                                            <p class=\"notify-details\"><b>Your order is placed</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon bg-success\"><i class=\"mdi mdi-message\"></i></div>
                                            <p class=\"notify-details\"><b>New Message received</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon bg-warning\"><i class=\"mdi mdi-martini\"></i></div>
                                            <p class=\"notify-details\"><b>Your item is shipped</b><small class=\"text-muted\">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                    
                                <li class=\"list-inline-item dropdown notification-list\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect nav-user\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                       aria-haspopup=\"false\" aria-expanded=\"false\">
                                        <img src=\"{{asset('assets/images/users/user.jpg')}}\" alt=\"user\" class=\"rounded-circle\">
                                    </a> 
                                    <div class=\"dropdown-menu dropdown-menu-right profile-dropdown \">
                                        
                                        <!-- item-->
                                         
                                        <div class=\"dropdown-item noti-title\">
                                            <h5>Welcome</h5>
                                        </div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-account-circle m-r-5 text-muted\"></i> Profile</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-wallet m-r-5 text-muted\"></i> My Wallet</a>
                                        <a class=\"dropdown-item\" href=\"#\"><span class=\"badge badge-success float-right\">5</span><i class=\"mdi mdi-settings m-r-5 text-muted\"></i> Settings</a>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-lock-open-outline m-r-5 text-muted\"></i> Lock screen</a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"#\"><i class=\"mdi mdi-logout m-r-5 text-muted\"></i> Logout</a>
                                    </div>
                                </li>
                                  
                            </ul>

                            <ul class=\"list-inline menu-left mb-0\">
                                <li class=\"float-left\">
                                    <button class=\"button-menu-mobile open-left waves-light waves-effect\">
                                        <i class=\"mdi mdi-menu\"></i>
                                    </button>
                                </li>
                                <li class=\"hide-phone app-search \">
                                    <form role=\"search\" class=\"\">
                                        <input type=\"text\" placeholder=\"Search...\" class=\"form-control\">
                                        <a href=\"\"><i class=\"fa fa-search\"></i></a>
                                    </form>
                                </li>
                            </ul>

                            <div class=\"clearfix\"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class=\"page-content-wrapper \">

                        <div class=\"container-fluid\">

                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <div class=\"page-title-box\">
                                        <div class=\"btn-group float-right\">
                                            <ol class=\"breadcrumb hide-phone p-0 m-0\">
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Annex</a></li>
                                                <li class=\"breadcrumb-item active\">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                                    
                            <div class=\"row\">
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round\">
                                                        <i class=\"mdi mdi-webcam\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 align-self-center text-center\">
                                                    <div class=\"m-l-10\">
                                                        <h5 class=\"mt-0 round-inner\">\$18090</h5>
                                                        <p class=\"mb-0 text-muted\">Visits Today</p>                                                                 
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-danger\"> <i class=\"mdi mdi-arrow-down\"></i> <span>5.26%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round\">
                                                        <i class=\"mdi mdi-account-multiple-plus\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 text-center align-self-center\">
                                                    <div class=\"m-l-10 \">
                                                        <h5 class=\"mt-0 round-inner\">562</h5>
                                                        <p class=\"mb-0 text-muted\">New Users</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-success\"> <i class=\"mdi mdi-arrow-up\"></i> <span>8.68%</span></h6>
                                                </div>                                                        
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round \">
                                                        <i class=\"mdi mdi-basket\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 align-self-center text-center\">
                                                    <div class=\"m-l-10 \">
                                                        <h5 class=\"mt-0 round-inner\">7514</h5>
                                                        <p class=\"mb-0 text-muted\">New Orders</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-danger\"> <i class=\"mdi mdi-arrow-down\"></i> <span>2.35%</span></h6>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class=\"col-md-6 col-lg-6 col-xl-3\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <div class=\"d-flex flex-row\">
                                                <div class=\"col-3 align-self-center\">
                                                    <div class=\"round\">
                                                        <i class=\"mdi mdi-rocket\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col-6 align-self-center text-center\">
                                                    <div class=\"m-l-10\">
                                                        <h5 class=\"mt-0 round-inner\">\$32874</h5>
                                                        <p class=\"mb-0 text-muted\">Total Sales</p>
                                                    </div>
                                                </div>
                                                <div class=\"col-3 align-self-end align-self-center\">
                                                    <h6 class=\"m-0 float-right text-center text-success\"> <i class=\"mdi mdi-arrow-up\"></i> <span>2.35%</span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-lg-12 col-xl-8\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <h5 class=\"header-title pb-3 mt-0\">Overview</h5>
                                            <div id=\"multi-line-chart\" style=\"height:400px;\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-12 col-xl-4\">
                                    <div class=\"card m-b-30\">
                                        <div class=\"card-body\">
                                            <a href=\"\" class=\"btn btn-primary btn-sm float-right\">More Info</a>
                                            <h5 class=\"header-title mt-0 pb-3\">Revenue By Country</h5>
                                                                                            
                                            <ul class=\"list-unstyled list-inline text-center\">
                                                <li class=\"list-inline-item\">
                                                    <p><i class=\"mdi mdi-checkbox-blank-circle text-primary mr-2\"></i>Canada</p> 
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <p><i class=\"mdi mdi-checkbox-blank-circle text-info mr-2\"></i>USA</p>
                                                </li>
                                                <li class=\"list-inline-item\">
                                                    <p><i class=\"mdi mdi-checkbox-blank-circle text-greylight mr-2\"></i>London</p>    
                                                </li>
                                            </ul> 
                                            <div id=\"morris-donut-chart\" style=\"height:345px;\"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row\">
                                
                                <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                    <div class=\"card bg-info m-b-30\">
                                        <div class=\"card-body\">
                                            <div id=\"verticalCarousel\" class=\"carousel slide vertical\" data-ride=\"carousel\">
                                                <!-- Carousel items -->
                                                <div class=\"carousel-inner\">
                                                    <div class=\"carousel-item active\">
                                                        <div class=\"row d-flex justify-content-center text-center\">
                                                            <div class=\"col-sm-12 carousel-icon\">
                                                                <i class=\"fa fa-twitter text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-6 text-white\">                                                                
                                                                <h2>54k</h2>
                                                                <p class=\"\">Followers</p>                                                                
                                                            </div>
                                                            <div class=\"col-6 text-white\">                                                                
                                                                <h2>44k</h2>
                                                                <p class=\"\">Tweets</p>                                                               
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class=\"carousel-item\">
                                                        <div class=\"row d-flex justify-content-center\">
                                                            <div class=\"col-sm-12 carousel-icon text-center\">
                                                                <i class=\"fa fa-twitter text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-sm-10 mx-auto text-white text-center\">
                                                                <p>Lorem Ipsum is simply dummy text of the <span class=\"warning\">#TWITTER</span> and typesetting industry. A description list is perfect for defining terms.</p>
                                                            </div>
                                                        </div>
                                                    </div>                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class=\"card bg-primary \">
                                        <div class=\"card-body\">
                                            <div id=\"verticalCarousel2\" class=\"carousel slide\" data-ride=\"carousel\">
                                                <!-- Carousel items -->
                                                <div class=\"carousel-inner\">
                                                    <div class=\"carousel-item active\">
                                                        <div class=\"row d-flex justify-content-center\">
                                                            <div class=\"col-lg-12 carousel-icon text-center\">
                                                                <i class=\"fa fa-facebook text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-sm-10 mx-auto text-white text-center\">
                                                                <p>Lorem Ipsum is simply dummy text of the <mark> FACEBOOK </mark> and typesetting industry.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class=\"carousel-item\">
                                                        <div class=\"row d-flex justify-content-center text-white text-center\">
                                                            <div class=\"col-sm-12 carousel-icon\">
                                                                <i class=\"fa fa-facebook text-white pt-3\"></i>
                                                            </div>
                                                            <div class=\"col-6\">                                                                
                                                                <h2>54k</h2>
                                                                <p class=\"\">Followers</p>                                                               
                                                            </div>
                                                            <div class=\"col-6\">                                                                
                                                                <h2>44k</h2>
                                                                <p class=\"\">Posts</p>                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-6 col-xl-4\">
                                    <div class=\"card bg-white m-b-30\">
                                        <div class=\"card-body new-user\">
                                            
                                            <div class=\"row text-center\">
                                                <div class=\"col-6\">
                                                    <h5><i class=\"mdi mdi-database mr-2 text-primary font-20\"></i> 5 TB</h5>
                                                    <h6 class=\"text-lightdark\">Bandwidth usage</h6>
                                                    <span class=\"text-muted\"> <small>June 2018</small></span>
                                                </div>
                                                <div class=\"col-6\">
                                                    <h5><i class=\"mdi mdi-download mr-2 text-success font-20\"></i>5412</h5>
                                                    <h6 class=\"text-lightdark\">Download count</h6>
                                                    <span class=\"text-muted\"> <small>June 2018</small></span>
                                                </div>
                                            </div>
                                            <div id=\"morris-area-chart\" style=\"height: 310px\"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-12 col-xl-4\">
                                    <div class=\"card bg-white m-b-30\">
                                        <img src=\"assets/images/widgets/wather.jpg\" alt=\"\" class=\"img-fluid\">
                                        
                                        <div class=\"card-body bg-primary\">                                
                                            <div class=\"row\">
                                                <div class=\"col-6  align-self-center\">
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-6 col-sm-6 text-center\">
                                                            <canvas id=\"partly-cloudy-day\" width=\"70\" height=\"70\"></canvas>
                                                            <h6 class=\"text-white\">SUNDAY <span>25<sup>th</sup></span></h6>
                                                        </div>
                                                        <div class=\"col-lg-6 col-sm-6 text-center align-self-center\">
                                                            <h5 class=\"mt-0 text-white\"><b>32°</b></h5>
                                                            <p class=\"text-white  font-12\">Partly cloudy</p>
                                                            <p class=\"text-white font-12\">15km/h - 37%</p>
                                                        </div>
                                                    </div><!-- End row -->
                                                </div>
                                                <div class=\"col-6 align-self-center\">
                                                    <div class=\"row\">
                                                        <div class=\"col-6 text-center\">
                                                            <h6 class=\"text-white mt-0 font-14\">MON</h6>
                                                            <canvas id=\"rain\" width=\"28\" height=\"35\"></canvas>
                                                            <h6 class=\"text-white font-14\">38°<i class=\"wi-degrees\"></i></h6>
                                                        </div>
                                                        <div class=\"col-6 text-center\">
                                                            <h6 class=\"text-white mt-0 font-14\">TUE</h6>
                                                            <canvas id=\"wind\" width=\"35\" height=\"35\"></canvas>
                                                            <h6 class=\"text-white font-14\">32°<i class=\"wi-degrees\"></i></h6>
                                                        </div>                                                                                                                                              
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end row -->                            
                                        </div>
                                    </div>
                                </div>                                                 
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 col-lg-12 col-xl-8 align-self-center\">
                                    <div class=\"card bg-white m-b-30\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Members Profiles</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover\">
                                                    <thead>
                                                        <tr>
                                                            <th class=\"border-top-0\" style=\"width:60px;\">Member</th>
                                                            <th class=\"border-top-0\">Name</th>
                                                            <th class=\"border-top-0\">Country</th>
                                                            <th class=\"border-top-0\">Earnings</th>
                                                            <th class=\"border-top-0\">Sales</th>                                    
                                                            <th class=\"border-top-0\">Reviews</th>
                                                            <th class=\"border-top-0\">Progress</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-2.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/us_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$100</td>
                                                            <td>10</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-primary\" role=\"progressbar\" aria-valuenow=\"94\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 94%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-3.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">William A. Johnson</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/french_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$490</td>
                                                            <td>24</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"38\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 38%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-4.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Bobby M. Gray</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/spain_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$380</td>
                                                            <td>19</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-dark\" role=\"progressbar\" aria-valuenow=\"65\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:65%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-5.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Robert N. Carlile</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/russia_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$450</td>
                                                            <td>30</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"88\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 88%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <img class=\"rounded-circle\" src=\"assets/images/users/avatar-6.jpg\" alt=\"user\" width=\"40\"> </td>
                                                            <td>
                                                                <a href=\"javascript:void(0);\">Ruby T. Curd</a>
                                                            </td>
                                                            <td>                                                                
                                                                <img src=\"assets/images/flags/italy_flag.jpg\" alt=\"\" style=\"width:30px\">
                                                            </td>
                                                            <td>\$500</td>
                                                            <td>40</td>                                   
                                                            <td>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-half text-warning\"></i>
                                                                    <i class=\"mdi mdi-star-outline text-warning\"></i>
                                                            </td>
                                                                <td>
                                                                <div class=\"progress\" style=\"height:8px;\">
                                                                    <div class=\"progress-bar l-blue\" role=\"progressbar\" aria-valuenow=\"17\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 17%;\"></div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-12 col-lg-12 col-xl-4\">
                                    <div class=\"card bg-white m-b-30\">
                                        <div class=\"card-body new-user\">
                                                <h5 class=\"header-title mt-0 mb-4\">New Users</h5>
                                            <ul class=\"list-unstyled mb-0 pr-3\" id=\"boxscroll2\" tabindex=\"1\" style=\"overflow: hidden; outline: none;\">
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-5.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Ruby T. Curd <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">Newyork</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">William A. Johnson <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">California</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-3.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">                                                    
                                                            <p class=\"media-heading mb-0\">Robert N. Carlile<i class=\"fa fa-circle text-danger mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">10 min ago</small>
                                                            <small class=\"text-muted\">India</small>                                                   
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-2.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Bobby M. Gray <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">Australia</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-1.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Ruby T. Curd <i class=\"fa fa-circle text-danger mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">36 min ago</small>
                                                            <small class=\"text-muted\">New Zealand</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-6.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Robert N. Carlile <i class=\"fa fa-circle text-success mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">Now</small>
                                                            <small class=\"text-muted\">India</small>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class=\"p-3\">
                                                    <div class=\"media\">
                                                        <div class=\"thumb float-left\">
                                                            <a href=\"#\">
                                                                <img class=\" rounded-circle\" src=\"assets/images/users/avatar-4.jpg\" alt=\"\">
                                                            </a>
                                                        </div>
                                                        <div class=\"media-body\">
                                                            <p class=\"media-heading mb-0\">Bobby M. Gray<i class=\"fa fa-circle text-danger mr-1 pull-right\"></i></p>
                                                            <small class=\"pull-right text-muted\">58 min ago</small>
                                                            <small class=\"text-muted\">Australia</small>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>                                    
                                        </div>                                
                                    </div>
                                </div>
                            </div>                                                 
                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class=\"footer\">
                    © 2018 Annex by Mannatthemes.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        {% block javascripts %}
             <!-- jQuery  -->
        <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/popper.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/modernizr.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset('assets/plugins/skycons/skycons.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/raphael/raphael-min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/morris/morris.min.js')}}\"></script>
        
        <script src=\"{{asset('assets/pages/dashborad.js')}}\"></script>

        <!-- App js -->
        <script src=\"{{asset('assets/js/app.js')}}\"></script>
        {% endblock %}
        
    </body>
</html>", "Back.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\Back.html.twig");
    }
}
