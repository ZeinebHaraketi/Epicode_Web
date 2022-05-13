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

/* produit/index.html.twig */
class __TwigTemplate_ff90480dfb1bfe7d4bd62a1e1ba5d55b0a9c78f75d16d4e95afdfc22492b97f9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title> ";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
        <meta content=\"Admin Dashboard\" name=\"description\" />
        <meta content=\"Mannatthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
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
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        echo "\">Accueil Activite</a></li>
                                    <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newActivite");
        echo "\">Ajouter Activite</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>
\t\t\t\t\t\t\t<li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Enfant </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_enfant_index");
        echo "\">Accueil Enfant</a></li>
                                    <li><a href=\"";
        // line 125
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
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blg_index");
        echo "\">Accueil Blog</a></li>
                                    <li><a href=\"";
        // line 136
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
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
        echo "\">Accueil Commentaire</a></li>
                                    <li><a href=\"";
        // line 147
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
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil Consultation</a></li>
                                    <li><a href=\"";
        // line 158
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
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil Programme</a></li>
                                    <li><a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_new");
        echo "\">Ajouter Programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
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
                                <li><a href=\"pages-login.html\">programme</a></li>
                                <li><a href=\"pages-register.html\"> consultation </a></li>
                                <li><a href=\"pages-recoverpw.html\"></a></li>
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
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"user\" class=\"rounded-circle\">
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
                                            <li class=\"breadcrumb-item active\">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class=\"page-title\">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->

                        <!-- Column -->
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                         

                        </form>


                        <div class=\"row\">
                            <div class=\"col-md-12  align-self-center\">
                                <div class=\"card bg-white mb-6\">
                                    <div class=\"card-body new-user\">
                                        <h5 class=\"header-title mb-4 mt-0\">Members Profiles</h5>

                                        <h1>Produit</h1>

                                        <table class=\"table\"  >
                                            <colgroup span=\"7\" class=\"columns\"></colgroup>
                                            <thead>
                                            <tr>
                                                <th>IdP</th>
                                                <th>NomP</th>
                                                <th>Prix</th>
                                                <th>Photo</th>
                                                <th>Categories</th>
                                                <th>Codeqr </td>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 422, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 423
            echo "                                                <tr>
                                                    <td>";
            // line 424
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "idP", [], "any", false, false, false, 424), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 425
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nomP", [], "any", false, false, false, 425), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 426
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 426), "html", null, true);
            echo "</td>


                                                    <td>  <img   src=\"";
            // line 429
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["produit"], "photo", [], "any", false, false, false, 429))), "html", null, true);
            echo "\" ></td>
                                                    <td>";
            // line 430
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", [], "any", false, false, false, 430), "html", null, true);
            echo "</td>
                                                    <td>
                                                        <img src=\"";
            // line 432
            echo twig_escape_filter($this->env, $this->env->getRuntime('Endroid\QrCodeBundle\Twig\QrCodeRuntime')->qrCodePathFunction(twig_get_attribute($this->env, $this->source, $context["produit"], "nomP", [], "any", false, false, false, 432)), "html", null, true);
            echo "\" />
                                                    </td>
                                                    <td>
                                                        <a class=\"btn btn-warning\" role=\"button\" href=\"";
            // line 435
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["idP" => twig_get_attribute($this->env, $this->source, $context["produit"], "idP", [], "any", false, false, false, 435)]), "html", null, true);
            echo "\">show</a>
                                                        <a class=\"btn btn-success\" role=\"button\"href=\"";
            // line 436
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["idP" => twig_get_attribute($this->env, $this->source, $context["produit"], "idP", [], "any", false, false, false, 436)]), "html", null, true);
            echo "\">edit</a>
                                                    </td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 440
            echo "                                                <tr>
                                                    <td colspan=\"7\">no records found</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        echo "                                            </tbody>
                                        </table>

                                        </div>
                                            <br>
                                            <div class=\"align-center\"> ";
        // line 449
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 449, $this->source); })()));
        echo "</div>
                                        <div>
                                            <a class=\"btn btn-danger\"role=\"button\" href=\"";
        // line 451
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        echo "\" style=\"margin:5px\">
                                          <img src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/add.png"), "html", null, true);
        echo "\" alt=\"add\"  height=\"22\" width=\"25\">

                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                    
                            </div>

                                      ";
        // line 463
        echo "

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- container -->


                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class=\"footer\">
                © 2018 Annex by Epicode.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    ";
        // line 488
        $this->displayBlock('javascripts', $context, $blocks);
        // line 517
        echo "
    </body>
    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Admin!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "

            <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 488
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 489
        echo "        <!-- jQuery  -->
        <script type=\"text/javascript\">
                        function imprimer_page(){
                            window.print();
                        }
                    </script>

        <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashborad.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 515,  790 => 512,  785 => 510,  781 => 509,  777 => 508,  772 => 506,  768 => 505,  764 => 504,  760 => 503,  756 => 502,  752 => 501,  748 => 500,  744 => 499,  740 => 498,  736 => 497,  732 => 496,  723 => 489,  713 => 488,  701 => 28,  697 => 27,  693 => 26,  688 => 24,  683 => 22,  679 => 20,  669 => 19,  650 => 14,  636 => 517,  634 => 488,  607 => 463,  594 => 452,  590 => 451,  585 => 449,  578 => 444,  569 => 440,  560 => 436,  556 => 435,  550 => 432,  545 => 430,  541 => 429,  535 => 426,  531 => 425,  527 => 424,  524 => 423,  519 => 422,  263 => 169,  259 => 168,  246 => 158,  242 => 157,  229 => 147,  225 => 146,  212 => 136,  208 => 135,  195 => 125,  191 => 124,  180 => 116,  176 => 115,  89 => 30,  87 => 19,  79 => 14,  71 => 8,  61 => 7,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}



{% block body %}
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui\">
        <title> {% block title %}Admin!{% endblock %} </title>
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
                    <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Annex</a>
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
                                <li><a href=\"pages-login.html\">programme</a></li>
                                <li><a href=\"pages-register.html\"> consultation </a></li>
                                <li><a href=\"pages-recoverpw.html\"></a></li>
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
                                    <img src=\"assets/images/users/avatar-1.jpg\" alt=\"user\" class=\"rounded-circle\">
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
                                            <li class=\"breadcrumb-item active\">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class=\"page-title\">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title end breadcrumb -->

                        <!-- Column -->
                        <form>
                            <input id=\"impression\" class=\"js-programmatic-set-val btn btn-outline-primary mr-1 mb-1s\" name=\"impression\" type=\"button\" onclick=\"imprimer_page()\" value=\"Print this page\" />
                         

                        </form>


                        <div class=\"row\">
                            <div class=\"col-md-12  align-self-center\">
                                <div class=\"card bg-white mb-6\">
                                    <div class=\"card-body new-user\">
                                        <h5 class=\"header-title mb-4 mt-0\">Members Profiles</h5>

                                        <h1>Produit</h1>

                                        <table class=\"table\"  >
                                            <colgroup span=\"7\" class=\"columns\"></colgroup>
                                            <thead>
                                            <tr>
                                                <th>IdP</th>
                                                <th>NomP</th>
                                                <th>Prix</th>
                                                <th>Photo</th>
                                                <th>Categories</th>
                                                <th>Codeqr </td>
                                                <th>actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for produit in produits %}
                                                <tr>
                                                    <td>{{ produit.idP }}</td>
                                                    <td>{{ produit.nomP }}</td>
                                                    <td>{{ produit.prix }}</td>


                                                    <td>  <img   src=\"{{asset('uploads/'~produit.photo)}}\" ></td>
                                                    <td>{{ produit.categories }}</td>
                                                    <td>
                                                        <img src=\"{{ qr_code_path(produit.nomP) }}\" />
                                                    </td>
                                                    <td>
                                                        <a class=\"btn btn-warning\" role=\"button\" href=\"{{ path('app_produit_show', {'idP': produit.idP}) }}\">show</a>
                                                        <a class=\"btn btn-success\" role=\"button\"href=\"{{ path('app_produit_edit', {'idP': produit.idP}) }}\">edit</a>
                                                    </td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"7\">no records found</td>
                                                </tr>
                                            {% endfor %}
                                            </tbody>
                                        </table>

                                        </div>
                                            <br>
                                            <div class=\"align-center\"> {{ knp_pagination_render(produits) }}</div>
                                        <div>
                                            <a class=\"btn btn-danger\"role=\"button\" href=\"{{ path('app_produit_new') }}\" style=\"margin:5px\">
                                          <img src=\"{{asset('assets/images/add.png')}}\" alt=\"add\"  height=\"22\" width=\"25\">

                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                    
                            </div>

                                      {#  <a href=\"{{ path('app_produit_new') }}\">Create new</a>#}


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- container -->


                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

            <footer class=\"footer\">
                © 2018 Annex by Epicode.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    {% block javascripts %}
        <!-- jQuery  -->
        <script type=\"text/javascript\">
                        function imprimer_page(){
                            window.print();
                        }
                    </script>

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
    </html>

{% endblock %}

", "produit/index.html.twig", "C:\\Users\\WAEL\\Desktop\\mobile integration\\FirstProject\\templates\\produit\\index.html.twig");
    }
}
