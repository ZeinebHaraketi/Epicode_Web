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

/* consultation/index.html.twig */
class __TwigTemplate_ec800d6fd7ebfd5599838879753fffe4ff6b13c4fdd1f5e68644c4d7e8e70859 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        // line 1
        echo "    <!DOCTYPE html>
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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
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
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil consultation</a></li>
                                 <li><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cons_statistique");
        echo "\">statistiques consultation </a></li>
                                  <li><a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cons_statistique2");
        echo "\">statistiques consultation par categorie</a></li>  
                                    
                                </ul>
                            </li><li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil programmme</a></li>
                                   
                                </ul>
                            </li>

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
                            </li>#}

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
                                        </a>#}

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
        // line 287
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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                                                <li class=\"breadcrumb-item active\">Consultation</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
    
                                <!-- Column -->
                            

                           
                            <div class=\"row\">
                                <div class=\"col-md-12  align-self-center\">
                                    <div class=\"card bg-white mb-6\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Members Profiles</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover\">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th class=\"border-top-0\">IdC</th>
                                                            <th class=\"border-top-0\">Nom</th>
                                                            <th class=\"border-top-0\">Age</th>
                                                            <th class=\"border-top-0\">Sexe</th> 
                                                            <th class=\"border-top-0\">Date_RDV</th>                                    
                                                            <th class=\"border-top-0\">EtatPhysique</th>
                                                            <th class=\"border-top-0\">categorie</th> 
                                                            <th class=\"border-top-0\">Prenom</th>
                                                            <th class=\"border-top-0\">Email</th>
                                                            <th class=\"border-top-0\">actions</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                 ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["consultations"]) || array_key_exists("consultations", $context) ? $context["consultations"] : (function () { throw new RuntimeError('Variable "consultations" does not exist.', 374, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
            // line 375
            echo "                                                         <tr>
                                                            <td>";
            // line 376
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "idC", [], "any", false, false, false, 376), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 377
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "nom", [], "any", false, false, false, 377), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 378
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "age", [], "any", false, false, false, 378), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "sexe", [], "any", false, false, false, 379), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 380
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "dateRdv", [], "any", false, false, false, 380), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 381
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "etatPhysique", [], "any", false, false, false, 381), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 382
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "categorieC", [], "any", false, false, false, 382), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "prenom", [], "any", false, false, false, 383), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consultation"], "email", [], "any", false, false, false, 384), "html", null, true);
            echo "</td>
                                                            <td>
                                                            <td>   
                                                            <a class=\"btn btn-warning\"role=\"button\" href=\"";
            // line 387
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_show", ["idC" => twig_get_attribute($this->env, $this->source, $context["consultation"], "idC", [], "any", false, false, false, 387)]), "html", null, true);
            echo "\">
                                                            <img src=\"";
            // line 388
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/show.png"), "html", null, true);
            echo "\" alt=\"show\"  height=\"22\" width=\"25\">
                                                            </a>
                                                            </td>
                    
                    <td>    <a class=\"btn btn-success\"role=\"button\" href=\"";
            // line 392
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_edit", ["idC" => twig_get_attribute($this->env, $this->source, $context["consultation"], "idC", [], "any", false, false, false, 392)]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 393
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/edit.png"), "html", null, true);
            echo "\" alt=\"edit\"  height=\"22\" width=\"25\">

                    </a></td>
                     
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 400
            echo "            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consultation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                                                        
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                            <br>
                                             <div class=\"align-center\"> ";
        // line 410
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["consultations"]) || array_key_exists("consultations", $context) ? $context["consultations"] : (function () { throw new RuntimeError('Variable "consultations" does not exist.', 410, $this->source); })()));
        echo "</div>
                                            <a class=\"btn btn-danger\"role=\"button\" href=\"";
        // line 411
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_new");
        echo "\">
                                          <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/add.png"), "html", null, true);
        echo "\" alt=\"add\"  height=\"22\" width=\"25\">
                                         

                                            </a>
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
        // line 439
        $this->displayBlock('javascripts', $context, $blocks);
        // line 462
        echo "        
    </body>
</html>
    


";
        
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

    // line 439
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 440
        echo "             <!-- jQuery  -->
        <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 448
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/skycons/skycons.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>
        
        <script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/dashborad.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  718 => 460,  712 => 457,  707 => 455,  703 => 454,  699 => 453,  694 => 451,  690 => 450,  686 => 449,  682 => 448,  678 => 447,  674 => 446,  670 => 445,  666 => 444,  662 => 443,  658 => 442,  654 => 441,  651 => 440,  641 => 439,  629 => 21,  625 => 20,  621 => 19,  616 => 17,  611 => 15,  607 => 13,  597 => 12,  578 => 7,  562 => 462,  560 => 439,  530 => 412,  526 => 411,  522 => 410,  514 => 404,  505 => 400,  493 => 393,  489 => 392,  482 => 388,  478 => 387,  472 => 384,  468 => 383,  464 => 382,  460 => 381,  456 => 380,  452 => 379,  448 => 378,  444 => 377,  440 => 376,  437 => 375,  432 => 374,  342 => 287,  165 => 113,  156 => 107,  152 => 106,  148 => 105,  64 => 23,  62 => 12,  54 => 7,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!DOCTYPE html>
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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
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
                            </li>#}

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
                                        </a>#}

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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                                                <li class=\"breadcrumb-item active\">Consultation</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Dashboard</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
    
                                <!-- Column -->
                            

                           
                            <div class=\"row\">
                                <div class=\"col-md-12  align-self-center\">
                                    <div class=\"card bg-white mb-6\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Members Profiles</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover\">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th class=\"border-top-0\">IdC</th>
                                                            <th class=\"border-top-0\">Nom</th>
                                                            <th class=\"border-top-0\">Age</th>
                                                            <th class=\"border-top-0\">Sexe</th> 
                                                            <th class=\"border-top-0\">Date_RDV</th>                                    
                                                            <th class=\"border-top-0\">EtatPhysique</th>
                                                            <th class=\"border-top-0\">categorie</th> 
                                                            <th class=\"border-top-0\">Prenom</th>
                                                            <th class=\"border-top-0\">Email</th>
                                                            <th class=\"border-top-0\">actions</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                 {% for consultation in consultations %}
                                                         <tr>
                                                            <td>{{ consultation.idC }}</td>
                                                            <td>{{ consultation.nom }}</td>
                                                            <td>{{ consultation.age }}</td>
                                                            <td>{{ consultation.sexe }}</td>
                                                            <td>{{ consultation.dateRdv }}</td>
                                                            <td>{{ consultation.etatPhysique }}</td>
                                                            <td>{{ consultation.categorieC }}</td>
                                                            <td>{{ consultation.prenom }}</td>
                                                            <td>{{ consultation.email }}</td>
                                                            <td>
                                                            <td>   
                                                            <a class=\"btn btn-warning\"role=\"button\" href=\"{{ path('app_consultation_show', {'idC': consultation.idC}) }}\">
                                                            <img src=\"{{asset('assets/images/show.png')}}\" alt=\"show\"  height=\"22\" width=\"25\">
                                                            </a>
                                                            </td>
                    
                    <td>    <a class=\"btn btn-success\"role=\"button\" href=\"{{ path('app_consultation_edit', {'idC': consultation.idC}) }}\">
                                        <img src=\"{{asset('assets/images/edit.png')}}\" alt=\"edit\"  height=\"22\" width=\"25\">

                    </a></td>
                     
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"10\">no records found</td>
            </tr>
        {% endfor %}
                                                        
                                                    </tbody>
                                                </table>
                                                
                                            </div>
                                            <br>
                                             <div class=\"align-center\"> {{ knp_pagination_render( consultations) }}</div>
                                            <a class=\"btn btn-danger\"role=\"button\" href=\"{{ path('app_consultation_new') }}\">
                                          <img src=\"{{asset('assets/images/add.png')}}\" alt=\"add\"  height=\"22\" width=\"25\">
                                         

                                            </a>
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
</html>
    


", "consultation/index.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\consultation\\index.html.twig");
    }
}
