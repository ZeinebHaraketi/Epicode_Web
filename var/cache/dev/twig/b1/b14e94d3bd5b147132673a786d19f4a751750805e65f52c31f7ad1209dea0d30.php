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

/* programme/new.html.twig */
class __TwigTemplate_cdb8bbb5cfbc3cf051e2e31000952fcef81773b9559965ba1cc4b06e5f8a8337 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "programme/new.html.twig"));

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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Annex</a>
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
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil consultation</a></li>
                                 <li><a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cons_statistique");
        echo "\">statistiques consultation </a></li>
                                  <li><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cons_statistique2");
        echo "\">statistiques consultation par categorie</a></li>  
                                    
                                </ul>
                            </li><li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme</span> <span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span><span class=\"badge badge-pill badge-info float-right\"></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 111
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
        // line 196
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/us_flag.jpg"), "html", null, true);
        echo "\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/italy_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/french_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/spain_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 202
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
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 231
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
        // line 284
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
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card m-b-30\">
\t\t\t\t\t\t\t\t\t
                                        <div class=\"card-body\">
                                           ";
        // line 346
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), 'form_start');
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
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 356, $this->source); })()), "nomP", [], "any", false, false, false, 356), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom"]]);
        echo "
                                                                 ";
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 357, $this->source); })()), "nomP", [], "any", false, false, false, 357), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                          <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">date rendez vous:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "dateR", [], "any", false, false, false, 370), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "date rendez-vous "]]);
        echo "
                                                                 ";
        // line 371
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 371, $this->source); })()), "dateR", [], "any", false, false, false, 371), 'errors');
        echo "
                                                            </div>
                                                        </div>
                                                        <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">id consultation:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "idC", [], "any", false, false, false, 384), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "le id de consultation"]]);
        echo "
                                                                 ";
        // line 385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 385, $this->source); })()), "idC", [], "any", false, false, false, 385), 'errors');
        echo "
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <br>
                                                          <br>
                                                          <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">description:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 400, $this->source); })()), "description", [], "any", false, false, false, 400), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "description"]]);
        echo "
                                                                 ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 401, $this->source); })()), "description", [], "any", false, false, false, 401), 'errors');
        echo "

                                                       
                                                            </div>
                                                          </div>

                                                         <br>
                                                          <br>
                                                          <br>
                                                          <br>
                                                          <br>


                                                       <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">ID_kine:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                               <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i></span>
                                                                </div>   
                                                          ";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 420, $this->source); })()), "idKine", [], "any", false, false, false, 420), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "id_kine"]]);
        echo "
                                                          ";
        // line 421
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 421, $this->source); })()), "idKine", [], "any", false, false, false, 421), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                       <br>
                                                          <br>
                                                          

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
        // line 475
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), 'form_end');
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
        // line 495
        $this->displayBlock('javascripts', $context, $blocks);
        // line 512
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

    // line 495
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 496
        echo "        <!-- jQuery  -->
        <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 501
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 506
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "programme/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 510,  719 => 507,  715 => 506,  711 => 505,  707 => 504,  703 => 503,  699 => 502,  695 => 501,  691 => 500,  687 => 499,  683 => 498,  679 => 497,  676 => 496,  666 => 495,  653 => 18,  649 => 17,  645 => 16,  639 => 14,  629 => 13,  617 => 512,  615 => 495,  592 => 475,  535 => 421,  531 => 420,  509 => 401,  505 => 400,  487 => 385,  483 => 384,  467 => 371,  463 => 370,  447 => 357,  443 => 356,  430 => 346,  365 => 284,  309 => 231,  300 => 225,  291 => 219,  271 => 202,  267 => 201,  263 => 200,  259 => 199,  253 => 196,  165 => 111,  156 => 105,  152 => 104,  148 => 103,  85 => 43,  61 => 21,  59 => 13,  45 => 1,);
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nomP , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom'}} ) }}
                                                                 {{ form_errors(form.nomP) }}
                                                            </div>
                                                        </div>
                                                          <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">date rendez vous:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.dateR , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'date rendez-vous '}} ) }}
                                                                 {{ form_errors(form.dateR) }}
                                                            </div>
                                                        </div>
                                                        <br>
                                                          <br>
                                                          <br>

                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">id consultation:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.idC , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'le id de consultation'}} ) }}
                                                                 {{ form_errors(form.idC) }}
                                                            </div>
                                                        </div>

                                                        <br>
                                                          <br>
                                                          <br>
                                                          <br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t  
                                                         <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">description:</label>
                                                        <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-heartbeat\" aria-hidden=\"true\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.description, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'description'}} ) }}
                                                                 {{ form_errors(form.description) }}

                                                       
                                                            </div>
                                                          </div>

                                                         <br>
                                                          <br>
                                                          <br>
                                                          <br>
                                                          <br>


                                                       <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">ID_kine:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                               <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-id-card\" aria-hidden=\"true\"></i></span>
                                                                </div>   
                                                          {{ form_widget(form.idKine , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'id_kine'}} ) }}
                                                          {{ form_errors(form.idKine) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                       <br>
                                                          <br>
                                                          

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
</html>", "programme/new.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\programme\\new.html.twig");
    }
}
