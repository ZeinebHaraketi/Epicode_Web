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

/* activite/editEnfant.html.twig */
class __TwigTemplate_1ef6a62c78b2b41463e949b3bba6060c1b8c77b53a52a6e66665286678857e88 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/editEnfant.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/editEnfant.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/editEnfant.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"page-wrapper\">

    <!-- Preloader -->
    <div class=\"preloader\"></div>

    <!-- Main Header-->
    <header class=\"main-header header-style-two\">

        <!-- Header Top -->
        <div class=\"header-top\">
            <div class=\"auto-container\">
                <div class=\"clearfix\">

                    <!-- Top Left -->
                    <div class=\"top-left pull-left\">
                        <!-- Info List -->
                        <ul class=\"info-list\">
                            <li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>
                            <li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>
                            <li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>
                        </ul>
                    </div>

                    <!-- Top Right -->
                    <div class=\"top-right pull-right\">

                        <!--Language-->
                        <div class=\"language dropdown\"><a class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" href=\"#\"><span class=\"flag-icon fa fa-globe\"></span>EN &nbsp;<span class=\"icon fa fa-angle-down\"></span></a>
                            <ul class=\"dropdown-menu style-one\" aria-labelledby=\"dropdownMenu2\">
                                <li><a href=\"#\">English</a></li>
                                <li><a href=\"#\">German</a></li>
                                <li><a href=\"#\">Arabic</a></li>
                                <li><a href=\"#\">Hindi</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class=\"header-upper\">
            <div class=\"auto-container clearfix\">

                <div class=\"pull-left logo-box\">
                    <div class=\"logo\"><a href=\"index.html\"><img src=\"https://via.placeholder.com/230x100\" alt=\"\" title=\"\"></a></div>
                </div>

                <div class=\"nav-outer clearfix\">
                    <!--Mobile Navigation Toggler-->
                    <div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu\"></span></div>
                    <!-- Main Menu -->
                    <nav class=\"main-menu navbar-expand-md\">
                        <div class=\"navbar-header\">
                            <!-- Toggle Button -->
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>

                        <div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">
                            <ul class=\"navigation clearfix\">
                                <li class=\"dropdown\"><a href=\"#\">Home</a>
                                    <ul>
                                        <li><a href=\"index.html\">Home Page 01</a></li>
                                        <li><a href=\"index-2.html\">Home Page 02</a></li>
                                        <li><a href=\"index-3.html\">Home Page 03</a></li>
                                        <li class=\"dropdown\"><a href=\"#\">Header Styles</a>
                                            <ul>
                                                <li><a href=\"index.html\">Header Style 01</a></li>
                                                <li><a href=\"index-2.html\">Header Style 02</a></li>
                                                <li><a href=\"index-3.html\">Header Style 03</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">About</a>
                                    <ul>
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"faq.html\">Faq</a></li>
                                        <li><a href=\"price.html\">Price</a></li>
                                        <li><a href=\"team.html\">Team</a></li>
                                        <li><a href=\"time-table.html\">Time Table</a></li>
                                        <li><a href=\"testimonial.html\">Testimonial</a></li>
                                        <li><a href=\"comming-soon.html\">Comming Soon</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">Classes</a>
                                    <ul>
                                        <li><a href=\"classes.html\">Classes</a></li>
                                        <li><a href=\"classes-detail.html\">Classes Detail</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">Portfolio</a>
                                    <ul>
                                        <li><a href=\"portfolio.html\">Portfolio</a></li>
                                        <li><a href=\"portfolio-detail.html\">Portfolio Detail</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">Shop</a>
                                    <ul>
                                        <li><a href=\"shop.html\">Our Products</a></li>
                                        <li><a href=\"shop-single.html\">Product Single</a></li>
                                        <li><a href=\"shopping-cart.html\">Shopping Cart</a></li>
                                        <li><a href=\"checkout.html\">Checkout</a></li>
                                        <li><a href=\"account.html\">Account</a></li>
                                    </ul>
                                </li>
                                <li class=\"current dropdown\"><a href=\"#\">Blog</a>
                                    <ul>
                                        <li><a href=\"blog.html\">Our Blog</a></li>
                                        <li><a href=\"blog-single.html\">Blog Single</a></li>
                                        <li><a href=\"not-found.html\">Not Found</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class=\"sticky-header\">
            <div class=\"auto-container clearfix\">
                <!--Logo-->
                <div class=\"logo pull-left\">
                    <a href=\"index.html\" title=\"\"><img src=\"https://via.placeholder.com/125x55\" alt=\"\" title=\"\"></a>
                </div>
                <!--Right Col-->
                <div class=\"pull-right\">
                    <!-- Main Menu -->
                    <nav class=\"main-menu\">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class=\"mobile-menu\">
            <div class=\"menu-backdrop\"></div>
            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>

            <nav class=\"menu-box\">
                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"https://via.placeholder.com/175x100\" alt=\"\" title=\"\"></a></div>
                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class=\"page-title\" style=\"background-image:url(https://via.placeholder.com/1920x600)\">
        <div class=\"auto-container\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2>Latest News</h2>
                    <div class=\"text\">Fitness is not a destination it is a way of life.</div>
                </div>
                <div class=\"pull-right\">
                    <ul class=\"page-breadcrumb\">
                        <li><a href=\"index.html\">home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Cart Item -->
    <div class=\"xs-sidebar-group info-group\">
        <div class=\"xs-overlay xs-bg-black\"></div>
        <div class=\"xs-sidebar-widget\">
            <div class=\"sidebar-widget-container\">
                <div class=\"widget-heading\">
                    <a href=\"#\" class=\"close-side-widget\">
                        X
                    </a>
                </div>
                <div class=\"sidebar-textwidget\">

                    <!-- Sidebar Info Content -->
                    <div class=\"sidebar-info-contents\">
                        <div class=\"content-inner\">
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"https://via.placeholder.com/230x100\" alt=\"\" /></a>
                            </div>
                            <div class=\"content-box\">
                                <h2>About Us</h2>
                                <p class=\"text\">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href=\"#\" class=\"theme-btn btn-style-two\"><span class=\"txt\">Consultation</span></a>
                            </div>
                            <div class=\"contact-info\">
                                <h2>Contact Info</h2>
                                <ul class=\"list-style-one\">
                                    <li><span class=\"icon fa fa-location-arrow\"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class=\"icon fa fa-phone\"></span>(111) 111-111-1111</li>
                                    <li><span class=\"icon fa fa-envelope\"></span>Gym@gmail.com</li>
                                    <li><span class=\"icon fa fa-clock-o\"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class=\"social-box\">
                                <li class=\"facebook\"><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>
                                <li class=\"twitter\"><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                <li class=\"linkedin\"><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                <li class=\"instagram\"><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                                <li class=\"youtube\"><a href=\"#\" class=\"fa fa-youtube\"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    <!--Sidebar Page Container-->
    <div class=\"sidebar-page-container style-two\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">

                <!--Sidebar Side-->
                <div class=\"sidebar-side col-lg-4 col-md-12 col-sm-12\">
                    <aside class=\"sidebar sticky-top\">

                        <!-- Search -->
                        <div class=\"sidebar-widget search-box\">
                            <h2 class=\"page-header-title\">Modifier Vos Informations</h2>
                        </div>






                    </aside>
                </div>

                <!-- Default Form -->
                <div class=\"default-form style-two\">

                    <!-- Default Form -->
                    ";
        // line 262
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"row clearfix\">



                        <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            ";
        // line 268
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "nom", [], "any", false, false, false, 268), 'row', ["attr" => ["class" => "form-control mr-5", "placeholder" => "Add Enfant", "cols" => "50", "required" => "true", "style" => "resize: none;"]]);
        echo "

                        </div>

                         <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "prenom", [], "any", false, false, false, 273), 'row', ["attr" => ["class" => "form-control mr-5", "placeholder" => "Add Enfant", "cols" => "50", "required" => "true", "style" => "resize: none;"]]);
        echo "

                        </div>

                        <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "age", [], "any", false, false, false, 278), 'row', ["attr" => ["class" => "form-control mr-5", "placeholder" => "Add Enfant", "cols" => "50", "required" => "true", "style" => "resize: none;"]]);
        echo "

                        </div>
                       
                       <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "sexe", [], "any", false, false, false, 283), 'row', ["attr" => ["class" => "form-control mr-5", "placeholder" => "Add Enfant", "cols" => "50", "required" => "true", "style" => "resize: none;"]]);
        echo "

                        </div>

                        <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "photo", [], "any", false, false, false, 288), 'row', ["attr" => ["class" => "form-control mr-5", "placeholder" => "Add Enfant", "cols" => "50", "required" => "true", "style" => "resize: none;"]]);
        echo "

                        </div>


                        <div class=\"form-group clearfix col-lg-12 col-md-12 col-sm-12\">
                            <div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Submit</span></button></div>
                        </div>



                    </div>
                    ";
        // line 300
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), 'form_end');
        echo "

                    <!--End Default Form -->
                </div>
                </div>
                </div>




            </div>
        <!--End pagewrapper-->

        <!-- Color Palate / Color Switcher -->

        <div class=\"color-palate\">
            <div class=\"color-trigger\">
                <i class=\"fa fa-gear\"></i>
            </div>
            <div class=\"color-palate-head\">
                <h6>Choose Your Color</h6>
            </div>
            <div class=\"various-color clearfix\">
                <div class=\"colors-list\">
                    <span class=\"palate default-color active\" data-theme-file=\"css/color-themes/default-theme.css\"></span>
                    <span class=\"palate green-color\" data-theme-file=\"css/color-themes/green-theme.css\"></span>
                    <span class=\"palate olive-color\" data-theme-file=\"css/color-themes/olive-theme.css\"></span>
                    <span class=\"palate orange-color\" data-theme-file=\"css/color-themes/orange-theme.css\"></span>
                    <span class=\"palate purple-color\" data-theme-file=\"css/color-themes/purple-theme.css\"></span>
                    <span class=\"palate teal-color\" data-theme-file=\"css/color-themes/teal-theme.css\"></span>
                    <span class=\"palate brown-color\" data-theme-file=\"css/color-themes/brown-theme.css\"></span>
                    <span class=\"palate redd-color\" data-theme-file=\"css/color-themes/redd-color.css\"></span>
                </div>
            </div>

            <h5>Other Options</h5>
            <ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>

            <a href=\"#\" class=\"purchase-btn\">Purchase now \$17</a>

            <div class=\"palate-foo\">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
            </div>

        </div>



        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activite/editEnfant.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  384 => 300,  369 => 288,  361 => 283,  353 => 278,  345 => 273,  337 => 268,  328 => 262,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"page-wrapper\">

    <!-- Preloader -->
    <div class=\"preloader\"></div>

    <!-- Main Header-->
    <header class=\"main-header header-style-two\">

        <!-- Header Top -->
        <div class=\"header-top\">
            <div class=\"auto-container\">
                <div class=\"clearfix\">

                    <!-- Top Left -->
                    <div class=\"top-left pull-left\">
                        <!-- Info List -->
                        <ul class=\"info-list\">
                            <li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>
                            <li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>
                            <li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>
                        </ul>
                    </div>

                    <!-- Top Right -->
                    <div class=\"top-right pull-right\">

                        <!--Language-->
                        <div class=\"language dropdown\"><a class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" href=\"#\"><span class=\"flag-icon fa fa-globe\"></span>EN &nbsp;<span class=\"icon fa fa-angle-down\"></span></a>
                            <ul class=\"dropdown-menu style-one\" aria-labelledby=\"dropdownMenu2\">
                                <li><a href=\"#\">English</a></li>
                                <li><a href=\"#\">German</a></li>
                                <li><a href=\"#\">Arabic</a></li>
                                <li><a href=\"#\">Hindi</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Header Upper -->
        <div class=\"header-upper\">
            <div class=\"auto-container clearfix\">

                <div class=\"pull-left logo-box\">
                    <div class=\"logo\"><a href=\"index.html\"><img src=\"https://via.placeholder.com/230x100\" alt=\"\" title=\"\"></a></div>
                </div>

                <div class=\"nav-outer clearfix\">
                    <!--Mobile Navigation Toggler-->
                    <div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu\"></span></div>
                    <!-- Main Menu -->
                    <nav class=\"main-menu navbar-expand-md\">
                        <div class=\"navbar-header\">
                            <!-- Toggle Button -->
                            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>

                        <div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">
                            <ul class=\"navigation clearfix\">
                                <li class=\"dropdown\"><a href=\"#\">Home</a>
                                    <ul>
                                        <li><a href=\"index.html\">Home Page 01</a></li>
                                        <li><a href=\"index-2.html\">Home Page 02</a></li>
                                        <li><a href=\"index-3.html\">Home Page 03</a></li>
                                        <li class=\"dropdown\"><a href=\"#\">Header Styles</a>
                                            <ul>
                                                <li><a href=\"index.html\">Header Style 01</a></li>
                                                <li><a href=\"index-2.html\">Header Style 02</a></li>
                                                <li><a href=\"index-3.html\">Header Style 03</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">About</a>
                                    <ul>
                                        <li><a href=\"about.html\">About Us</a></li>
                                        <li><a href=\"faq.html\">Faq</a></li>
                                        <li><a href=\"price.html\">Price</a></li>
                                        <li><a href=\"team.html\">Team</a></li>
                                        <li><a href=\"time-table.html\">Time Table</a></li>
                                        <li><a href=\"testimonial.html\">Testimonial</a></li>
                                        <li><a href=\"comming-soon.html\">Comming Soon</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">Classes</a>
                                    <ul>
                                        <li><a href=\"classes.html\">Classes</a></li>
                                        <li><a href=\"classes-detail.html\">Classes Detail</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">Portfolio</a>
                                    <ul>
                                        <li><a href=\"portfolio.html\">Portfolio</a></li>
                                        <li><a href=\"portfolio-detail.html\">Portfolio Detail</a></li>
                                    </ul>
                                </li>
                                <li class=\"dropdown\"><a href=\"#\">Shop</a>
                                    <ul>
                                        <li><a href=\"shop.html\">Our Products</a></li>
                                        <li><a href=\"shop-single.html\">Product Single</a></li>
                                        <li><a href=\"shopping-cart.html\">Shopping Cart</a></li>
                                        <li><a href=\"checkout.html\">Checkout</a></li>
                                        <li><a href=\"account.html\">Account</a></li>
                                    </ul>
                                </li>
                                <li class=\"current dropdown\"><a href=\"#\">Blog</a>
                                    <ul>
                                        <li><a href=\"blog.html\">Our Blog</a></li>
                                        <li><a href=\"blog-single.html\">Blog Single</a></li>
                                        <li><a href=\"not-found.html\">Not Found</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                            </ul>
                        </div>
                    </nav>

                </div>

            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class=\"sticky-header\">
            <div class=\"auto-container clearfix\">
                <!--Logo-->
                <div class=\"logo pull-left\">
                    <a href=\"index.html\" title=\"\"><img src=\"https://via.placeholder.com/125x55\" alt=\"\" title=\"\"></a>
                </div>
                <!--Right Col-->
                <div class=\"pull-right\">
                    <!-- Main Menu -->
                    <nav class=\"main-menu\">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->

                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class=\"mobile-menu\">
            <div class=\"menu-backdrop\"></div>
            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>

            <nav class=\"menu-box\">
                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"https://via.placeholder.com/175x100\" alt=\"\" title=\"\"></a></div>
                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class=\"page-title\" style=\"background-image:url(https://via.placeholder.com/1920x600)\">
        <div class=\"auto-container\">
            <div class=\"clearfix\">
                <div class=\"pull-left\">
                    <h2>Latest News</h2>
                    <div class=\"text\">Fitness is not a destination it is a way of life.</div>
                </div>
                <div class=\"pull-right\">
                    <ul class=\"page-breadcrumb\">
                        <li><a href=\"index.html\">home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Cart Item -->
    <div class=\"xs-sidebar-group info-group\">
        <div class=\"xs-overlay xs-bg-black\"></div>
        <div class=\"xs-sidebar-widget\">
            <div class=\"sidebar-widget-container\">
                <div class=\"widget-heading\">
                    <a href=\"#\" class=\"close-side-widget\">
                        X
                    </a>
                </div>
                <div class=\"sidebar-textwidget\">

                    <!-- Sidebar Info Content -->
                    <div class=\"sidebar-info-contents\">
                        <div class=\"content-inner\">
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"https://via.placeholder.com/230x100\" alt=\"\" /></a>
                            </div>
                            <div class=\"content-box\">
                                <h2>About Us</h2>
                                <p class=\"text\">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                                <a href=\"#\" class=\"theme-btn btn-style-two\"><span class=\"txt\">Consultation</span></a>
                            </div>
                            <div class=\"contact-info\">
                                <h2>Contact Info</h2>
                                <ul class=\"list-style-one\">
                                    <li><span class=\"icon fa fa-location-arrow\"></span>Chicago 12, Melborne City, USA</li>
                                    <li><span class=\"icon fa fa-phone\"></span>(111) 111-111-1111</li>
                                    <li><span class=\"icon fa fa-envelope\"></span>Gym@gmail.com</li>
                                    <li><span class=\"icon fa fa-clock-o\"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                                </ul>
                            </div>
                            <!-- Social Box -->
                            <ul class=\"social-box\">
                                <li class=\"facebook\"><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>
                                <li class=\"twitter\"><a href=\"#\" class=\"fa fa-twitter\"></a></li>
                                <li class=\"linkedin\"><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
                                <li class=\"instagram\"><a href=\"#\" class=\"fa fa-instagram\"></a></li>
                                <li class=\"youtube\"><a href=\"#\" class=\"fa fa-youtube\"></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->

    <!--Sidebar Page Container-->
    <div class=\"sidebar-page-container style-two\">
        <div class=\"auto-container\">
            <div class=\"row clearfix\">

                <!--Sidebar Side-->
                <div class=\"sidebar-side col-lg-4 col-md-12 col-sm-12\">
                    <aside class=\"sidebar sticky-top\">

                        <!-- Search -->
                        <div class=\"sidebar-widget search-box\">
                            <h2 class=\"page-header-title\">Modifier Vos Informations</h2>
                        </div>






                    </aside>
                </div>

                <!-- Default Form -->
                <div class=\"default-form style-two\">

                    <!-- Default Form -->
                    {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
                    <div class=\"row clearfix\">



                        <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            {{ form_row(form.nom,{'attr': {'class': 'form-control mr-5' , 'placeholder' : 'Add Enfant' , 'cols' : '50','required' : 'true', 'style' : 'resize: none;'}}) }}

                        </div>

                         <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            {{ form_row(form.prenom,{'attr': {'class': 'form-control mr-5' , 'placeholder' : 'Add Enfant' , 'cols' : '50','required' : 'true', 'style' : 'resize: none;'}}) }}

                        </div>

                        <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            {{ form_row(form.age,{'attr': {'class': 'form-control mr-5' , 'placeholder' : 'Add Enfant' , 'cols' : '50','required' : 'true', 'style' : 'resize: none;'}}) }}

                        </div>
                       
                       <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            {{ form_row(form.sexe,{'attr': {'class': 'form-control mr-5' , 'placeholder' : 'Add Enfant' , 'cols' : '50','required' : 'true', 'style' : 'resize: none;'}}) }}

                        </div>

                        <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                            {{ form_row(form.photo,{'attr': {'class': 'form-control mr-5' , 'placeholder' : 'Add Enfant' , 'cols' : '50','required' : 'true', 'style' : 'resize: none;'}}) }}

                        </div>


                        <div class=\"form-group clearfix col-lg-12 col-md-12 col-sm-12\">
                            <div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Submit</span></button></div>
                        </div>



                    </div>
                    {{ form_end(form) }}

                    <!--End Default Form -->
                </div>
                </div>
                </div>




            </div>
        <!--End pagewrapper-->

        <!-- Color Palate / Color Switcher -->

        <div class=\"color-palate\">
            <div class=\"color-trigger\">
                <i class=\"fa fa-gear\"></i>
            </div>
            <div class=\"color-palate-head\">
                <h6>Choose Your Color</h6>
            </div>
            <div class=\"various-color clearfix\">
                <div class=\"colors-list\">
                    <span class=\"palate default-color active\" data-theme-file=\"css/color-themes/default-theme.css\"></span>
                    <span class=\"palate green-color\" data-theme-file=\"css/color-themes/green-theme.css\"></span>
                    <span class=\"palate olive-color\" data-theme-file=\"css/color-themes/olive-theme.css\"></span>
                    <span class=\"palate orange-color\" data-theme-file=\"css/color-themes/orange-theme.css\"></span>
                    <span class=\"palate purple-color\" data-theme-file=\"css/color-themes/purple-theme.css\"></span>
                    <span class=\"palate teal-color\" data-theme-file=\"css/color-themes/teal-theme.css\"></span>
                    <span class=\"palate brown-color\" data-theme-file=\"css/color-themes/brown-theme.css\"></span>
                    <span class=\"palate redd-color\" data-theme-file=\"css/color-themes/redd-color.css\"></span>
                </div>
            </div>

            <h5>Other Options</h5>
            <ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>

            <a href=\"#\" class=\"purchase-btn\">Purchase now \$17</a>

            <div class=\"palate-foo\">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
            </div>

        </div>



        {% endblock %}

", "activite/editEnfant.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\activite\\editEnfant.html.twig");
    }
}
