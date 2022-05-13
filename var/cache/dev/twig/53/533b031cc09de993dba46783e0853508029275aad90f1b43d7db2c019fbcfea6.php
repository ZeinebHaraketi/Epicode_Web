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

/* consultation/new.html.twig */
class __TwigTemplate_8f8a680ec431e72db96514de4bb2adcbae3a0ba10b24b91d43943d62ea9ee3b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/new.html.twig"));

        // line 1
        echo "





<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
           ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Annex</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 46
        echo "assets/images/logo.png";
        echo "\" height=\"24\" alt=\"logo\"></a> -->
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
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil consultation</a></li>
                                 <li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cons_statistique");
        echo "\">statistiques consultation </a></li>
                                  <li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cons_statistique2");
        echo "\">statistiques consultation par categorie</a></li>  
                                    
                                </ul>
                            </li><li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil programmme</a></li>
                                   
                                </ul>
                            </li>
                          

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Activite </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>
\t\t\t\t\t\t\t

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-gauge\"></i><span> Charts </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartist.html\">Chartist Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs Chart</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-c3.html\">C3 Chart</a></li>
                                    <li><a href=\"charts-other.html\">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-cards-outline\"></i> <span> Icons </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font Awesome</a></li>
                                    <li><a href=\"icons-themify.html\">Themify Icons</a></li>
                                    <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                                    <li><a href=\"icons-typicons.html\">Typicons Icons</a></li>
                                </ul>
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

                        <nav class=\"navbar-dark bg-dark\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        English <img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/us_flag.jpg"), "html", null, true);
        echo "\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/italy_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/french_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/spain_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/russia_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Russian </span></a>
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
                                            <div class=\"notify-icon\"><img src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
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
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
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
                                <li class=\"hide-phone app-search\">
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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Forms</a></li>
                                                <li class=\"breadcrumb-item active\">Form Elements</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Form Elements</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <!--
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card m-b-30\">
\t\t\t\t\t\t\t\t\t
                                        <div class=\"card-body\">
            
                                           
                                            
                                            <div class=\"form-group row\">
                                                <label for=\"example-text-input\" class=\"col-sm-2 col-form-label\">Text</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"text\" value=\"Artisanal kale\" id=\"example-text-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-search-input\" class=\"col-sm-2 col-form-label\">Search</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"search\" value=\"How do I shoot web\" id=\"example-search-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-email-input\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"email\" value=\"bootstrap@example.com\" id=\"example-email-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-url-input\" class=\"col-sm-2 col-form-label\">URL</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"url\" value=\"https://getbootstrap.com\" id=\"example-url-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-tel-input\" class=\"col-sm-2 col-form-label\">Telephone</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"tel\" value=\"1-(555)-555-5555\" id=\"example-tel-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-password-input\" class=\"col-sm-2 col-form-label\">Password</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"password\" value=\"hunter2\" id=\"example-password-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-number-input\" class=\"col-sm-2 col-form-label\">Number</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"number\" value=\"42\" id=\"example-number-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-datetime-local-input\" class=\"col-sm-2 col-form-label\">Date and time</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"datetime-local\" value=\"2011-08-19T13:45:00\" id=\"example-datetime-local-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-date-input\" class=\"col-sm-2 col-form-label\">Date</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"date\" value=\"2011-08-19\" id=\"example-date-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-month-input\" class=\"col-sm-2 col-form-label\">Month</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"month\" value=\"2011-08\" id=\"example-month-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-week-input\" class=\"col-sm-2 col-form-label\">Week</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"week\" value=\"2011-W33\" id=\"example-week-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-sm-2 col-form-label\">Time</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"time\" value=\"13:45:00\" id=\"example-time-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-color-input\" class=\"col-sm-2 col-form-label\">Color</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"color\" value=\"#67a8e4\" id=\"example-color-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label class=\"col-sm-2 col-form-label\">Select</label>
                                                <div class=\"col-sm-10\">
                                                    <select class=\"form-control\">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label class=\"col-sm-2 col-form-label\">Custom Select</label>
                                                <div class=\"col-sm-10\">
                                                    <select class=\"custom-select\">
                                                        <option selected>Open this select menu</option>
                                                        <option value=\"1\">One</option>
                                                        <option value=\"2\">Two</option>
                                                        <option value=\"3\">Three</option>
                                                    </select>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-text-input-lg\" class=\"col-sm-2 col-form-label\">Large</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\".form-control-lg\" id=\"example-text-input-lg\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-text-input-sm\" class=\"col-sm-2 col-form-label\">Small</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\".form-control-sm\" id=\"example-text-input-sm\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row has-success\">
                                                <label for=\"inputHorizontalSuccess\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control form-control-success\" id=\"inputHorizontalSuccess\" placeholder=\"name@example.com\">
                                                    <div class=\"form-control-feedback\">Success! You've done it.</div>
                                                    <small class=\"form-text text-muted\">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row has-warning\">
                                                <label for=\"inputHorizontalWarning\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control form-control-warning\" id=\"inputHorizontalWarning\" placeholder=\"name@example.com\">
                                                    <div class=\"form-control-feedback\">Shucks, check the formatting of that and try again.</div>
                                                    <small class=\"form-text text-muted\">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row has-danger\">
                                                <label for=\"inputHorizontalDnger\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control form-control-danger\" id=\"inputHorizontalDnger\" placeholder=\"name@example.com\">
                                                    <div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
                                                    <small class=\"form-text text-muted\">Example help text that remains unchanged.</small>
                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div> 
\t\t\t\t\t\t\t\t
                            </div> --><!-- end row -->
                            
                           

                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card m-b-30\">
\t\t\t\t\t\t\t\t\t
                                        <div class=\"card-body\">
                                           ";
        // line 509
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 509, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"general-label\">
                                                <form class=\"form-horizontal\" role=\"form\">
                                                    <div class=\"form-group row\">
                                                        <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Nom :</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 519
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 519, $this->source); })()), "nom", [], "any", false, false, false, 519), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                                                                 ";
        // line 520
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 520, $this->source); })()), "nom", [], "any", false, false, false, 520), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                          <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">prenom:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "prenom", [], "any", false, false, false, 533), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "prenom "]]);
        echo "
                                                                 ";
        // line 534
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 534, $this->source); })()), "prenom", [], "any", false, false, false, 534), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                        <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">age:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-gamepad\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 547
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 547, $this->source); })()), "age", [], "any", false, false, false, 547), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "age"]]);
        echo "
                                                                 ";
        // line 548
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 548, $this->source); })()), "age", [], "any", false, false, false, 548), 'errors');
        echo "
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <br>
                                                          <br>
                                                          
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">sexe:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-venus-mars\" aria-hidden=\"true\"></i><span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 563
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 563, $this->source); })()), "sexe", [], "any", false, false, false, 563), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "sexe"]]);
        echo "
                                                                 ";
        // line 564
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 564, $this->source); })()), "sexe", [], "any", false, false, false, 564), 'errors');
        echo "

                                                       
                                                            </div>
                                                          </div>

                                                         <br>
                                                          <br>
                                                          <br>
                        
                                                       <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">etatPhysique:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                             <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i><span>
                                                                </div>    
                                                          ";
        // line 580
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 580, $this->source); })()), "etatPhysique", [], "any", false, false, false, 580), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "etatphysique "]]);
        echo "
                                                          ";
        // line 581
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 581, $this->source); })()), "etatPhysique", [], "any", false, false, false, 581), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                     <br>
                                                          <br>
                                                          <br>
                                                          
                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">categorieC:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-list-alt\"></i></span>
                                                                </div>
                                                          ";
        // line 596
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 596, $this->source); })()), "categorieC", [], "any", false, false, false, 596), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "categorie "]]);
        echo "
                                                          ";
        // line 597
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 597, $this->source); })()), "categorieC", [], "any", false, false, false, 597), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                      
                                                        
                                                         <br>
                                                        <br>
                                                          <br>
                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">email:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                               <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></span>
                                                                </div>    
                                                          ";
        // line 612
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 612, $this->source); })()), "email", [], "any", false, false, false, 612), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "email"]]);
        echo "
                                                          ";
        // line 613
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "email", [], "any", false, false, false, 613), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                         <br>
                                                          <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <br>

                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">dateRdv:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                              <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
                                                                </div>      
                                                          ";
        // line 627
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 627, $this->source); })()), "dateRdv", [], "any", false, false, false, 627), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "date rende-vous "]]);
        echo "
                                                          ";
        // line 628
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 628, $this->source); })()), "dateRdv", [], "any", false, false, false, 628), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                          
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <br> 
                                                          

                                                       <!--<div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Add Blog</span></button></div>-->
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 
                                                           <button type=\"submit\" name=\"submit-form\" class=\"btn  btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div>       
                                                    </div> <!--end row-->
        
                                                    <div class=\"form-group row\">

                                                        <!--
                                                        <div class=\"col-md-10 offset-md-2\">
                                                            <div class=\"input-group mt-2\">
                                                                <div class=\"custom-file\">
                                                                    <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile04\">
                                                                    <label class=\"custom-file-label\" for=\"inputGroupFile04\">Choose file</label>
                                                                </div>
                                                                <div class=\"input-group-append\">
                                                                    <button class=\"btn btn-outline-primary\" type=\"button\">Button</button>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class=\"col-md-10 offset-md-2\">
                                                            <div class=\"input-group mt-2\">
                                                                <select class=\"custom-select\" id=\"inputGroupSelect04\">
                                                                    <option selected>Choose...</option>
                                                                    <option value=\"1\">One</option>
                                                                    <option value=\"2\">Two</option>
                                                                    <option value=\"3\">Three</option>
                                                                </select>
                                                                <div class=\"input-group-append\">
                                                                    <button class=\"btn btn-outline-primary\" type=\"button\">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div> --><!--end row-->
        
                                                                                      
                                                </form>                                    
                                            </div>
                                            ";
        // line 682
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 682, $this->source); })()), 'form_end');
        echo "
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                
            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->
   
        
         ";
        // line 702
        $this->displayBlock('javascripts', $context, $blocks);
        // line 719
        echo "    </body>
\t
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

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
\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 702
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 703
        echo "        <!-- jQuery  -->
        <script src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 709
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 710
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 711
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 717
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultation/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  953 => 717,  947 => 714,  943 => 713,  939 => 712,  935 => 711,  931 => 710,  927 => 709,  923 => 708,  919 => 707,  915 => 706,  911 => 705,  907 => 704,  904 => 703,  894 => 702,  881 => 21,  877 => 20,  873 => 19,  867 => 17,  857 => 16,  845 => 719,  843 => 702,  820 => 682,  763 => 628,  759 => 627,  742 => 613,  738 => 612,  720 => 597,  716 => 596,  698 => 581,  694 => 580,  675 => 564,  671 => 563,  653 => 548,  649 => 547,  633 => 534,  629 => 533,  613 => 520,  609 => 519,  596 => 509,  357 => 273,  301 => 220,  292 => 214,  283 => 208,  263 => 191,  259 => 190,  255 => 189,  251 => 188,  245 => 185,  155 => 98,  143 => 89,  134 => 83,  130 => 82,  126 => 81,  88 => 46,  64 => 24,  62 => 16,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("





<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title>Annex - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
           {% block stylesheets %}
        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon.ico')}}\">

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\">
\t\t
\t\t{% endblock %}

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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Annex</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"{{('assets/images/logo.png')}}\" height=\"24\" alt=\"logo\"></a> -->
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
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('app_consultation_index') }}\">Accueil consultation</a></li>
                                 <li><a href=\"{{ path('app_cons_statistique') }}\">statistiques consultation </a></li>
                                  <li><a href=\"{{ path('app_cons_statistique2') }}\">statistiques consultation par categorie</a></li>  
                                    
                                </ul>
                            </li><li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('app_programme_index') }}\">Accueil programmme</a></li>
                                   
                                </ul>
                            </li>
                          

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Activite </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('app_programme_index') }}\">Accueil programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>
\t\t\t\t\t\t\t

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-gauge\"></i><span> Charts </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                    <li><a href=\"charts-chartist.html\">Chartist Chart</a></li>
                                    <li><a href=\"charts-chartjs.html\">Chartjs Chart</a></li>
                                    <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                    <li><a href=\"charts-c3.html\">C3 Chart</a></li>
                                    <li><a href=\"charts-other.html\">Jquery Knob Chart</a></li>
                                </ul>
                            </li>

                            <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-cards-outline\"></i> <span> Icons </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                    <li><a href=\"icons-material.html\">Material Design</a></li>
                                    <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                    <li><a href=\"icons-fontawesome.html\">Font Awesome</a></li>
                                    <li><a href=\"icons-themify.html\">Themify Icons</a></li>
                                    <li><a href=\"icons-dripicons.html\">Dripicons</a></li>
                                    <li><a href=\"icons-typicons.html\">Typicons Icons</a></li>
                                </ul>
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

                        <nav class=\"navbar-dark bg-dark\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        English <img src=\"{{asset('assets/images/flags/us_flag.jpg')}}\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"{{asset('assets/images/flags/italy_flag.jpg')}}\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"{{asset('assets/images/flags/french_flag.jpg')}}\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"{{asset('assets/images/flags/spain_flag.jpg')}}\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"{{asset('assets/images/flags/russia_flag.jpg')}}\" alt=\"\" height=\"16\"/><span> Russian </span></a>
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
                                            <div class=\"notify-icon\"><img src=\"{{asset('assets/images/users/avatar-2.jpg')}}\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"{{asset('assets/images/users/avatar-3.jpg')}}\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"{{asset('assets/images/users/avatar-4.jpg')}}\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
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
                                        <img src=\"{{asset('assets/images/users/avatar-1.jpg')}}\" alt=\"user\" class=\"rounded-circle\">
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
                                <li class=\"hide-phone app-search\">
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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Forms</a></li>
                                                <li class=\"breadcrumb-item active\">Form Elements</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Form Elements</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                            <!--
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card m-b-30\">
\t\t\t\t\t\t\t\t\t
                                        <div class=\"card-body\">
            
                                           
                                            
                                            <div class=\"form-group row\">
                                                <label for=\"example-text-input\" class=\"col-sm-2 col-form-label\">Text</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"text\" value=\"Artisanal kale\" id=\"example-text-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-search-input\" class=\"col-sm-2 col-form-label\">Search</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"search\" value=\"How do I shoot web\" id=\"example-search-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-email-input\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"email\" value=\"bootstrap@example.com\" id=\"example-email-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-url-input\" class=\"col-sm-2 col-form-label\">URL</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"url\" value=\"https://getbootstrap.com\" id=\"example-url-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-tel-input\" class=\"col-sm-2 col-form-label\">Telephone</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"tel\" value=\"1-(555)-555-5555\" id=\"example-tel-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-password-input\" class=\"col-sm-2 col-form-label\">Password</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"password\" value=\"hunter2\" id=\"example-password-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-number-input\" class=\"col-sm-2 col-form-label\">Number</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"number\" value=\"42\" id=\"example-number-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-datetime-local-input\" class=\"col-sm-2 col-form-label\">Date and time</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"datetime-local\" value=\"2011-08-19T13:45:00\" id=\"example-datetime-local-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-date-input\" class=\"col-sm-2 col-form-label\">Date</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"date\" value=\"2011-08-19\" id=\"example-date-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-month-input\" class=\"col-sm-2 col-form-label\">Month</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"month\" value=\"2011-08\" id=\"example-month-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-week-input\" class=\"col-sm-2 col-form-label\">Week</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"week\" value=\"2011-W33\" id=\"example-week-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-time-input\" class=\"col-sm-2 col-form-label\">Time</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"time\" value=\"13:45:00\" id=\"example-time-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-color-input\" class=\"col-sm-2 col-form-label\">Color</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control\" type=\"color\" value=\"#67a8e4\" id=\"example-color-input\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label class=\"col-sm-2 col-form-label\">Select</label>
                                                <div class=\"col-sm-10\">
                                                    <select class=\"form-control\">
                                                        <option>Select</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label class=\"col-sm-2 col-form-label\">Custom Select</label>
                                                <div class=\"col-sm-10\">
                                                    <select class=\"custom-select\">
                                                        <option selected>Open this select menu</option>
                                                        <option value=\"1\">One</option>
                                                        <option value=\"2\">Two</option>
                                                        <option value=\"3\">Three</option>
                                                    </select>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-text-input-lg\" class=\"col-sm-2 col-form-label\">Large</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control form-control-lg\" type=\"text\" placeholder=\".form-control-lg\" id=\"example-text-input-lg\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row\">
                                                <label for=\"example-text-input-sm\" class=\"col-sm-2 col-form-label\">Small</label>
                                                <div class=\"col-sm-10\">
                                                    <input class=\"form-control form-control-sm\" type=\"text\" placeholder=\".form-control-sm\" id=\"example-text-input-sm\">
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row has-success\">
                                                <label for=\"inputHorizontalSuccess\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control form-control-success\" id=\"inputHorizontalSuccess\" placeholder=\"name@example.com\">
                                                    <div class=\"form-control-feedback\">Success! You've done it.</div>
                                                    <small class=\"form-text text-muted\">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row has-warning\">
                                                <label for=\"inputHorizontalWarning\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control form-control-warning\" id=\"inputHorizontalWarning\" placeholder=\"name@example.com\">
                                                    <div class=\"form-control-feedback\">Shucks, check the formatting of that and try again.</div>
                                                    <small class=\"form-text text-muted\">Example help text that remains unchanged.</small>
                                                </div>
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                            <div class=\"form-group row has-danger\">
                                                <label for=\"inputHorizontalDnger\" class=\"col-sm-2 col-form-label\">Email</label>
                                                <div class=\"col-sm-10\">
                                                    <input type=\"email\" class=\"form-control form-control-danger\" id=\"inputHorizontalDnger\" placeholder=\"name@example.com\">
                                                    <div class=\"form-control-feedback\">Sorry, that username's taken. Try another?</div>
                                                    <small class=\"form-text text-muted\">Example help text that remains unchanged.</small>
                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t
                                            </div>
\t\t\t\t\t\t\t\t\t\t\t
                                        </div>
                                    </div>
                                </div> 
\t\t\t\t\t\t\t\t
                            </div> --><!-- end row -->
                            
                           

                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card m-b-30\">
\t\t\t\t\t\t\t\t\t
                                        <div class=\"card-body\">
                                           {{ form_start(form)}}
                                            <div class=\"general-label\">
                                                <form class=\"form-horizontal\" role=\"form\">
                                                    <div class=\"form-group row\">
                                                        <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Nom :</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                                                                 {{ form_errors(form.nom) }}
                                                            </div>
                                                        </div>
                                                          <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">prenom:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'prenom '}} ) }}
                                                                 {{ form_errors(form.prenom) }}
                                                            </div>
                                                        </div>
                                                        <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">age:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-gamepad\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.age , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'age'}} ) }}
                                                                 {{ form_errors(form.age) }}
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <br>
                                                          <br>
                                                          
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">sexe:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-venus-mars\" aria-hidden=\"true\"></i><span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.sexe, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'sexe'}} ) }}
                                                                 {{ form_errors(form.sexe) }}

                                                       
                                                            </div>
                                                          </div>

                                                         <br>
                                                          <br>
                                                          <br>
                        
                                                       <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">etatPhysique:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                             <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i><span>
                                                                </div>    
                                                          {{ form_widget(form.etatPhysique , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'etatphysique '}} ) }}
                                                          {{ form_errors(form.etatPhysique) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                     <br>
                                                          <br>
                                                          <br>
                                                          
                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">categorieC:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-list-alt\"></i></span>
                                                                </div>
                                                          {{ form_widget(form.categorieC , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'categorie '}} ) }}
                                                          {{ form_errors(form.categorieC) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                      
                                                        
                                                         <br>
                                                        <br>
                                                          <br>
                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">email:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                               <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i></span>
                                                                </div>    
                                                          {{ form_widget(form.email , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'email'}} ) }}
                                                          {{ form_errors(form.email) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                         <br>
                                                          <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <br>

                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">dateRdv:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                              <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
                                                                </div>      
                                                          {{ form_widget(form.dateRdv , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'date rende-vous '}} ) }}
                                                          {{ form_errors(form.dateRdv) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                          
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <br> 
                                                          

                                                       <!--<div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Add Blog</span></button></div>-->
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 
                                                           <button type=\"submit\" name=\"submit-form\" class=\"btn  btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div>       
                                                    </div> <!--end row-->
        
                                                    <div class=\"form-group row\">

                                                        <!--
                                                        <div class=\"col-md-10 offset-md-2\">
                                                            <div class=\"input-group mt-2\">
                                                                <div class=\"custom-file\">
                                                                    <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile04\">
                                                                    <label class=\"custom-file-label\" for=\"inputGroupFile04\">Choose file</label>
                                                                </div>
                                                                <div class=\"input-group-append\">
                                                                    <button class=\"btn btn-outline-primary\" type=\"button\">Button</button>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class=\"col-md-10 offset-md-2\">
                                                            <div class=\"input-group mt-2\">
                                                                <select class=\"custom-select\" id=\"inputGroupSelect04\">
                                                                    <option selected>Choose...</option>
                                                                    <option value=\"1\">One</option>
                                                                    <option value=\"2\">Two</option>
                                                                    <option value=\"3\">Three</option>
                                                                </select>
                                                                <div class=\"input-group-append\">
                                                                    <button class=\"btn btn-outline-primary\" type=\"button\">Button</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div> --><!--end row-->
        
                                                                                      
                                                </form>                                    
                                            </div>
                                            {{ form_end(form) }}
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                
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

        <!-- App js -->
        <script src=\"{{asset('assets/js/app.js')}}\"></script>
        {% endblock %}
    </body>
\t
</html>", "consultation/new.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\consultation\\new.html.twig");
    }
}
