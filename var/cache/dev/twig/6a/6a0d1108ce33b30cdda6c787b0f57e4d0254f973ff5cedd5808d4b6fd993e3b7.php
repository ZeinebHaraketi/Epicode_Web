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

/* consultation/edit.html.twig */
class __TwigTemplate_dcca52340e327d4fdc7e6ff4c6662976e9802d6ed1da41fd58b263efbde815ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/edit.html.twig"));

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
                        <a href=\"index.html\" class=\"logo\"><i class=\"mdi mdi-assistant\"></i> Feel The Burn</a>
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
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_programme_index");
        echo "\">Accueil programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                             <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
        echo "\">Accueil consultation</a></li>
                                   
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

                        <nav class=\"navbar-custom\">

                            <ul class=\"list-inline float-right mb-0\">
                                <!-- language-->
                                <li class=\"list-inline-item dropdown notification-list hide-phone\">
                                    <a class=\"nav-link dropdown-toggle arrow-none waves-effect text-white\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
                                        aria-haspopup=\"false\" aria-expanded=\"false\">
                                        English <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/us_flag.jpg"), "html", null, true);
        echo "\" class=\"ml-2\" height=\"16\" alt=\"\"/>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right language-switch\">
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/italy_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Italian </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/french_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> French </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/spain_flag.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"16\"/><span> Spanish </span></a>
                                        <a class=\"dropdown-item\" href=\"#\"><img src=\"";
        // line 208
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
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Charles M. Jones</b><small class=\"text-muted\">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-fluid rounded-circle\" /> </div>
                                            <p class=\"notify-details\"><b>Thomas J. Mimms</b><small class=\"text-muted\">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href=\"javascript:void(0);\" class=\"dropdown-item notify-item\">
                                            <div class=\"notify-icon\"><img src=\"";
        // line 237
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
        // line 290
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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Consultation</a></li>
                                                <li class=\"breadcrumb-item active\">Modifier consultation</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Modifier consultation</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                           
                            
                        
                            

                           
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"card m-b-30\">
\t\t\t\t\t\t\t\t\t
                                        <div class=\"card-body\">
                                           ";
        // line 359
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), 'form_start');
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
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "nom", [], "any", false, false, false, 369), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "Nom_programme"]]);
        echo "
                                                                 ";
        // line 370
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 370, $this->source); })()), "nom", [], "any", false, false, false, 370), 'errors');
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
        // line 383
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "prenom", [], "any", false, false, false, 383), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "La catégorie D age "]]);
        echo "
                                                                 ";
        // line 384
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 384, $this->source); })()), "prenom", [], "any", false, false, false, 384), 'errors');
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-hourglass\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 397
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()), "age", [], "any", false, false, false, 397), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "le id de consultation"]]);
        echo "
                                                                 ";
        // line 398
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 398, $this->source); })()), "age", [], "any", false, false, false, 398), 'errors');
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-venus-mars\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 413
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 413, $this->source); })()), "sexe", [], "any", false, false, false, 413), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "le id de consultation"]]);
        echo "
                                                                 ";
        // line 414
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 414, $this->source); })()), "sexe", [], "any", false, false, false, 414), 'errors');
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-medkit\"></i></span>
                                                                </div>    
                                                          ";
        // line 431
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), "etatPhysique", [], "any", false, false, false, 431), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "La catégorie D age "]]);
        echo "
                                                          ";
        // line 432
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 432, $this->source); })()), "etatPhysique", [], "any", false, false, false, 432), 'errors');
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
        // line 447
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "categorieC", [], "any", false, false, false, 447), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "La catégorie D age "]]);
        echo "
                                                          ";
        // line 448
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 448, $this->source); })()), "categorieC", [], "any", false, false, false, 448), 'errors');
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-envelope-o\"></i></span>
                                                                </div> 
                                                          ";
        // line 465
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "email", [], "any", false, false, false, 465), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "La catégorie D age "]]);
        echo "
                                                          ";
        // line 466
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 466, $this->source); })()), "email", [], "any", false, false, false, 466), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                         <br>
                                                          <br>
                                                          <br>

                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">dateRdv:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                  <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-calendar-o\"></i></span>
                                                                </div> 
                                                          ";
        // line 481
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), "dateRdv", [], "any", false, false, false, 481), 'widget', ["attr" => ["class" => "form-control form-control-user", "placeholder" => "La catégorie D age "]]);
        echo "
                                                          ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 482, $this->source); })()), "dateRdv", [], "any", false, false, false, 482), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                          

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
        // line 533
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), 'form_end');
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
        // line 556
        $this->displayBlock('javascripts', $context, $blocks);
        // line 573
        echo "    </body>
\t
</html>
";
        
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

    // line 556
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 557
        echo "        <!-- jQuery  -->
        <script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- App js -->
        <script src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultation/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  799 => 571,  793 => 568,  789 => 567,  785 => 566,  781 => 565,  777 => 564,  773 => 563,  769 => 562,  765 => 561,  761 => 560,  757 => 559,  753 => 558,  750 => 557,  740 => 556,  727 => 21,  723 => 20,  719 => 19,  713 => 17,  703 => 16,  690 => 573,  688 => 556,  662 => 533,  608 => 482,  604 => 481,  586 => 466,  582 => 465,  562 => 448,  558 => 447,  540 => 432,  536 => 431,  516 => 414,  512 => 413,  494 => 398,  490 => 397,  474 => 384,  470 => 383,  454 => 370,  450 => 369,  437 => 359,  365 => 290,  309 => 237,  300 => 231,  291 => 225,  271 => 208,  267 => 207,  263 => 206,  259 => 205,  253 => 202,  163 => 115,  151 => 106,  88 => 46,  64 => 24,  62 => 16,  45 => 1,);
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
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Programme </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('app_programme_index') }}\">Accueil programme</a></li>
                                   
                                </ul>
\t\t\t\t\t\t\t\t
                            </li>

                             <li class=\"has_sub\">
                                <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-clipboard-outline\"></i><span> Consultation </span><span class=\"float-right\"><i class=\"mdi mdi-chevron-right\"></i></span></a>
                                <ul class=\"list-unstyled\">
                                <li><a href=\"{{ path('app_consultation_index') }}\">Accueil consultation</a></li>
                                   
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

                        <nav class=\"navbar-custom\">

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
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Consultation</a></li>
                                                <li class=\"breadcrumb-item active\">Modifier consultation</li>
                                            </ol>
                                        </div>
                                        <h4 class=\"page-title\">Modifier consultation</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->
                           
                            
                        
                            

                           
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.nom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'Nom_programme'}} ) }}
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.prenom , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'La catégorie D age '}} ) }}
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-hourglass\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.age , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'le id de consultation'}} ) }}
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-venus-mars\"></i></span>
                                                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.sexe, {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'le id de consultation'}} ) }}
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-medkit\"></i></span>
                                                                </div>    
                                                          {{ form_widget(form.etatPhysique , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'La catégorie D age '}} ) }}
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
                                                          {{ form_widget(form.categorieC , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'La catégorie D age '}} ) }}
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
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-envelope-o\"></i></span>
                                                                </div> 
                                                          {{ form_widget(form.email , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'La catégorie D age '}} ) }}
                                                          {{ form_errors(form.email) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 

                                                         <br>
                                                          <br>
                                                          <br>

                                                          <label class=\"col-md-2 control-label\" for=\"example-input1-group1\">dateRdv:</label>
                                                       <div class=\"col-md-10\">
                                                            <div class=\"input-group\">
                                                                  <div class=\"input-group-prepend\">
                                                                    <span class=\"input-group-text\"><i class=\"fa fa-calendar-o\"></i></span>
                                                                </div> 
                                                          {{ form_widget(form.dateRdv , {'attr': {'class': 'form-control form-control-user' , 'placeholder' : 'La catégorie D age '}} ) }}
                                                          {{ form_errors(form.dateRdv) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                                                            </div>
                                                        </div> 
                                                          

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
</html>
", "consultation/edit.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\consultation\\edit.html.twig");
    }
}
