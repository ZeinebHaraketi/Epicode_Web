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

/* enfant/edit.html.twig */
class __TwigTemplate_20f39a0c49646b58e8b8afa24f855816c9027be5bb733ee4ffb63142529d75c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enfant/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "enfant/edit.html.twig"));

        // line 1
        echo "


<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title>Epicode</title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
           ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
                        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"";
        // line 43
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
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\">Accueil Activite</a></li>
                                    <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newActivite");
        echo "\">Ajouter Activite</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>
\t\t\t\t\t\t\t<li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Enfant </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant_index");
        echo "\">Accueil Enfant</a></li>
                                    <li><a href=\"";
        // line 114
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
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blg_index");
        echo "\">Accueil Blog</a></li>
                                    <li><a href=\"";
        // line 125
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
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
        echo "\">Accueil Commentaire</a></li>
                                    <li><a href=\"";
        // line 136
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
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil Consultation</a></li>
                                    <li><a href=\"";
        // line 147
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
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil Programme</a></li>
                                    <li><a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new");
        echo "\">Ajouter Programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

\t\t\t\t\t\t\t

                           

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

                        <nav class=\"navbar-custom navbar-dark bg-dark\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        English <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/us_flag.jpg"), "html", null, true);
        echo "\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/italy_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/french_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/spain_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 242
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
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 271
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
        // line 324
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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Feel The Burn</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Enfant</a></li>
                                                <li class=\"breadcrumb-item active\">Ajouter Enfant</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Ajouter Enfant</h4>
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
        // line 560
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), 'form_start');
        echo "
                                            <div class=\"general-label\">
                                                <form class=\"form-horizontal\" role=\"form\">
                                                    <div class=\"form-group row\">
                                                        <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Nom:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 570
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 570, $this->source); })()), "nom", [], "any", false, false, false, 570), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom_Enfant"]]);
        echo "
                                                                 ";
        // line 571
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 571, $this->source); })()), "nom", [], "any", false, false, false, 571), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                          <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Prenom::</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-list-alt\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 584
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "prenom", [], "any", false, false, false, 584), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Prenom_Enfant"]]);
        echo "
                                                                 ";
        // line 585
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 585, $this->source); })()), "prenom", [], "any", false, false, false, 585), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                        <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Age:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-gamepad\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 598
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 598, $this->source); })()), "age", [], "any", false, false, false, 598), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Age "]]);
        echo "
                                                                 ";
        // line 599
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 599, $this->source); })()), "age", [], "any", false, false, false, 599), 'errors');
        echo "
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <br>
                                                          <br>
                                                         
                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Sexe:</label>
                                                        
                                                          <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                             <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-venus-mars\"></i></span>
                                                                </div>   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 614
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "sexe", [], "any", false, false, false, 614), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Sexe "]]);
        echo "
                                                             ";
        // line 615
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 615, $this->source); })()), "sexe", [], "any", false, false, false, 615), 'errors');
        echo "
                                                            </div>
                                                          </div>
                                                              
                                                               
                                                          <br>
                                                          <br>
                                                          <br>
                                                         

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Photo:</label>
                                                        
                                                          <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 630
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 630, $this->source); })()), "photo", [], "any", false, false, false, 630), 'widget', ["attr" => ["class" => "dropify", "data-height" => "300"]]);
        echo "
                                                             ";
        // line 631
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "photo", [], "any", false, false, false, 631), 'errors');
        echo "
                                                            </div>
                                                          </div>

                                                         
                                                          <br>
                                                          <br>
                                                          <br>


                                                       <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">ID_A:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 
                                                          ";
        // line 645
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 645, $this->source); })()), "idA", [], "any", false, false, false, 645), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "La catégorie D age "]]);
        echo "
                                                          ";
        // line 646
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 646, $this->source); })()), "idA", [], "any", false, false, false, 646), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                       <br>
                                                          <br>
                                                          

                                                       <!--<div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Add Blog</span></button></div>-->
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 
                                                           <button type=\"submit\" name=\"submit-form\" class=\"btn  btn-primary\">Modifier</button>
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
        // line 700
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 700, $this->source); })()), 'form_end');
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
        // line 720
        $this->displayBlock('javascripts', $context, $blocks);
        // line 737
        echo "    </body>
\t
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t\t
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 720
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 721
        echo "        <!-- jQuery  -->
        <script src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "enfant/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  980 => 735,  974 => 732,  970 => 731,  966 => 730,  962 => 729,  958 => 728,  954 => 727,  950 => 726,  946 => 725,  942 => 724,  938 => 723,  934 => 722,  931 => 721,  921 => 720,  908 => 18,  904 => 17,  900 => 16,  894 => 14,  884 => 13,  872 => 737,  870 => 720,  847 => 700,  790 => 646,  786 => 645,  769 => 631,  765 => 630,  747 => 615,  743 => 614,  725 => 599,  721 => 598,  705 => 585,  701 => 584,  685 => 571,  681 => 570,  668 => 560,  429 => 324,  373 => 271,  364 => 265,  355 => 259,  335 => 242,  331 => 241,  327 => 240,  323 => 239,  317 => 236,  236 => 158,  232 => 157,  219 => 147,  215 => 146,  202 => 136,  198 => 135,  185 => 125,  181 => 124,  168 => 114,  164 => 113,  153 => 105,  149 => 104,  85 => 43,  61 => 21,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("


<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title>Epicode</title>
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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
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

\t\t\t\t\t\t\t

                           

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

                        <nav class=\"navbar-custom navbar-dark bg-dark\">

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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Feel The Burn</a></li>
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Enfant</a></li>
                                                <li class=\"breadcrumb-item active\">Ajouter Enfant</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Ajouter Enfant</h4>
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
                                                        <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Nom:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-user\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom_Enfant'}} ) }}
                                                                 {{ form_errors(form.nom) }}
                                                            </div>
                                                        </div>
                                                          <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Prenom::</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-list-alt\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Prenom_Enfant'}} ) }}
                                                                 {{ form_errors(form.prenom) }}
                                                            </div>
                                                        </div>
                                                        <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Age:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-gamepad\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.age , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Age '}} ) }}
                                                                 {{ form_errors(form.age) }}
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <br>
                                                          <br>
                                                         
                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Sexe:</label>
                                                        
                                                          <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                             <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-venus-mars\"></i></span>
                                                                </div>   
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {{ form_widget(form.sexe, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Sexe '}}) }}
                                                             {{ form_errors(form.sexe) }}
                                                            </div>
                                                          </div>
                                                              
                                                               
                                                          <br>
                                                          <br>
                                                          <br>
                                                         

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">Photo:</label>
                                                        
                                                          <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {{ form_widget(form.photo, {'attr': {'class': 'dropify','data-height':'300'}}) }}
                                                             {{ form_errors(form.photo) }}
                                                            </div>
                                                          </div>

                                                         
                                                          <br>
                                                          <br>
                                                          <br>


                                                       <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">ID_A:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 
                                                          {{ form_widget(form.idA , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'La catégorie D age '}} ) }}
                                                          {{ form_errors(form.idA) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                       <br>
                                                          <br>
                                                          

                                                       <!--<div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Add Blog</span></button></div>-->
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                 
                                                           <button type=\"submit\" name=\"submit-form\" class=\"btn  btn-primary\">Modifier</button>
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
</html>", "enfant/edit.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\enfant\\edit.html.twig");
    }
}
