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

/* activite/Detail.html.twig */
class __TwigTemplate_ae02e23d425b8c2ea0d2df9fd11503f5ed393b8c7cd914e062067a1c3e5a8662 extends \Twig\Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/Detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/Detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/Detail.html.twig", 1);
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
        echo "<!DOCTYPE html>
<html>

<!-- Mirrored from View/html/gym/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:39 GMT -->
<head>
<meta charset=\"utf-8\">
<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "</title>


";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "<!-- Responsive -->
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">

<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->
<!--[if lt IE 9]><script src=\"js/respond.js\"></script><![endif]-->
</head>

<body class=\"hidden-bar-wrapper\">

<div class=\"page-wrapper\">
 \t
    <!-- Preloader -->
    <div class=\"preloader\"></div>
 \t
 \t<!-- Main Header-->
    <header class=\"main-header header-style-two\">
    \t
\t\t<!-- Header Top -->
        <div class=\"header-top\">
            <div class=\"auto-container\">
                <div class=\"clearfix\">
\t\t\t\t
\t\t\t\t\t<!-- Top Left -->
\t\t\t\t\t<div class=\"top-left pull-left\">
\t\t\t\t\t\t<!-- Info List -->
                        <ul class=\"info-list\">
\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>
\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>
\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Top Right -->
                    <div class=\"top-right pull-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!--Language-->
                        <div class=\"language dropdown\"><a class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" href=\"#\"><span class=\"flag-icon fa fa-globe\"></span>EN &nbsp;<span class=\"icon fa fa-angle-down\"></span></a>
                        \t<ul class=\"dropdown-menu style-one\" aria-labelledby=\"dropdownMenu2\">
                                <li><a href=\"#\">English</a></li>
                                <li><a href=\"#\">German</a></li>
                                <li><a href=\"#\">Arabic</a></li>
                                <li><a href=\"#\">Hindi</a></li>
                            </ul>
                        </div>
\t\t\t\t\t\t
                    </div>
\t\t\t\t\t
                </div>
            </div>
        </div>
\t\t
\t\t<!-- Header Upper -->
        <div class=\"header-upper\">
        \t<div class=\"auto-container clearfix\">
            \t
\t\t\t\t<div class=\"pull-left logo-box\">
\t\t\t\t\t<div class=\"logo\"><a href=\"index.html\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "}\" alt=\"\" title=\"\"></a></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"nav-outer clearfix\">
\t\t\t\t\t<!--Mobile Navigation Toggler-->
\t\t\t\t\t<div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu\"></span></div>
\t\t\t\t\t<!-- Main Menu -->
\t\t\t\t\t<nav class=\"main-menu navbar-expand-md\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<!-- Toggle Button -->    \t
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t<ul class=\"navigation clearfix\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home Page 01</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Home Page 02</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Home Page 03</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Header Styles</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Header Style 01</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Header Style 02</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Header Style 03</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"price.html\">Price</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"team.html\">Team</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"time-table.html\">Time Table</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"testimonial.html\">Testimonial</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">Comming Soon</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Classes</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes.html\">Classes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Portfolio</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">Portfolio Detail</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Shop</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Our Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-single.html\">Product Single</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopping-cart.html\">Shopping Cart</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"account.php\">Account</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"not-found.html\">Not Found</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
            </div>
        </div>
        <!--End Header Upper-->
        
\t\t<!-- Sticky Header  -->
        <div class=\"sticky-header\">
            <div class=\"auto-container clearfix\">
                <!--Logo-->
                <div class=\"logo pull-left\">
                    <a href=\"index.html\" title=\"\"><img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-small.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a>
                </div>
                <!--Right Col-->
                <div class=\"pull-right\">
                    <!-- Main Menu -->
                    <nav class=\"main-menu\">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
\t\t\t\t\t
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
\t\t<!-- Mobile Menu  -->
        <div class=\"mobile-menu\">
            <div class=\"menu-backdrop\"></div>
            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>
            
            <nav class=\"menu-box\">
                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-2.png"), "html", null, true);
        echo "\" alt=\"\" title=\"\"></a></div>
                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
\t\t<!-- End Mobile Menu -->
\t
    </header>
    <!-- End Main Header -->
\t
\t<!--Page Title-->
    <section class=\"page-title\" style=\"background-image:url(images/background/11.jpg)\">
    \t<div class=\"auto-container\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t<h2>Detail Activite</h2>
\t\t\t\t\t<div class=\"text\">Fitness is not a destination it is a way of life.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<ul class=\"page-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t<li>Detail Activite</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </section>
    <!--End Page Title-->
\t
\t<!-- Sidebar Cart Item -->
\t<div class=\"xs-sidebar-group info-group\">
\t\t<div class=\"xs-overlay xs-bg-black\"></div>
\t\t<div class=\"xs-sidebar-widget\">
\t\t\t<div class=\"sidebar-widget-container\">
\t\t\t\t<div class=\"widget-heading\">
\t\t\t\t\t<a href=\"#\" class=\"close-side-widget\">
\t\t\t\t\t\tX
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar-textwidget\">
\t\t\t\t\t
\t\t\t\t\t<!-- Sidebar Info Content -->
\t\t\t\t\t<div class=\"sidebar-info-contents\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content-box\">
\t\t\t\t\t\t\t\t<h2>About Us</h2>
\t\t\t\t\t\t\t\t<p class=\"text\">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"theme-btn btn-style-two\"><span class=\"txt\">Consultation</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t\t<h2>Contact Info</h2>
\t\t\t\t\t\t\t\t<ul class=\"list-style-one\">
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span>Chicago 12, Melborne City, USA</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span>(111) 111-111-1111</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope\"></span>Gym@gmail.com</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-clock-o\"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Social Box -->
\t\t\t\t\t\t\t<ul class=\"social-box\">
\t\t\t\t\t\t\t\t<li class=\"facebook\"><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"twitter\"><a href=\"#\" class=\"fa fa-twitter\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"linkedin\"><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"instagram\"><a href=\"#\" class=\"fa fa-instagram\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"youtube\"><a href=\"#\" class=\"fa fa-youtube\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END sidebar widget item -->
\t
\t<!--Shop Single Section-->
    <section class=\"shop-single-section\">
    \t<div class=\"auto-container\">
        \t
            <!--Shop Single-->
            <div class=\"shop-page product-details\">
                
                <!--Basic Details-->
                <div class=\"basic-details\">
                    <div class=\"row clearfix\">
                    
                        <div class=\"image-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"carousel-outer\">
        
                                <ul class=\"image-carousel owl-carousel owl-theme\">
                                    <li><a =\"images/resource/products/13.jpg\" class=\"lightbox-image\" title=\"Image Caption Here\"><img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 292, $this->source); })()), "image", [], "any", false, false, false, 292))), "html", null, true);
        echo "\" alt=\"\"></a></li>
                                   
                                </ul>
                                
                                <ul class=\"thumbs-carousel owl-carousel owl-theme\">
                                    <li><img src=\"images/resource/products/14.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/15.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/16.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/17.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/14.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/15.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/16.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/17.jpg\" alt=\"\"></li>
                                </ul>
                                
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        <div class=\"info-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"details-header\">
                                <h2>Detail de l'Activité</h2>
                                <div class=\"rating\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></div>
                                <div class=\"item-price\">";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 315, $this->source); })()), "nomA", [], "any", false, false, false, 315), "html", null, true);
        echo "</div>
                            </div>

                            <div class=\"text\">
                                <p> Ceci est l'une de nos Activités</p>
                            </div>

                            <div class=\"other-options\">
                                <div class=\"clearfix\">
                                    <h4><strong>Age</strong></h4>
                                    <div class=\"pull-left\">
                                    <select name=\"cat_age\" id=\"cat_age-select\">

                                    <option value=\"\">";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 328, $this->source); })()), "catAge", [], "any", false, false, false, 328), "html", null, true);
        echo "</option>
                            
                                     </select>
                                     </div>

\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t ";
        // line 343
        echo "\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"btn btn-danger\"><span class=\"txt\">Imprimer</span></button>
                                           <a class=\"btn btn-danger\"role=\"button\" href=\"";
        // line 344
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addEnfant");
        echo "\" style=\"margin:5px;\">
\t\t\t\t\t\t\t\t\t\t   Rejoindre
                                        </a>
\t\t\t\t\t\t\t\t</div>
                                
                            </div>
                            
                            <h4><strong>Type:</strong></h4>
                         <div class=\"pull-left\">
                           <select name=\"Type\" id=\"type-select\">

                           <option value=\"\">";
        // line 355
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 355, $this->source); })()), "type", [], "any", false, false, false, 355), "html", null, true);
        echo "</option>
                            
                             </select>
                         </div>  
                            
                            
                        </div>
                        
                    </div>
                </div>
                <!--Basic Details-->
                
                <!--Product Info Tabs-->
                <div class=\"product-info-tabs\">
                    <!--Product Tabs-->
                    <div class=\"prod-tabs tabs-box\">
                    
                        <!--Tab Btns-->
                        <ul class=\"tab-btns tab-buttons clearfix\">
                            <li data-tab=\"#prod-details\" class=\"tab-btn active-btn\">Description</li>
                            <li data-tab=\"#prod-info\" class=\"tab-btn\">Additional Information</li>
                            <li data-tab=\"#prod-reviews\" class=\"tab-btn\">Reviews (2)</li>
                        </ul>
                        
                        <!--Tabs Container-->
                        <div class=\"tabs-content\">
                            
                            <!--Tab / Active Tab-->
                            <div class=\"tab active-tab\" id=\"prod-details\">
                                <div class=\"content\">
                                    <p><quote>“Never say never because limits, like fears, are often just an illusion.” – Michael Jordan</quote></p>
                                    <p>“Without self-discipline, success is impossible, period.” – Lou Holtz</p>
                                </div>
                            </div>
                            
                            <!--Tab / Active Tab-->
                            <div class=\"tab\" id=\"prod-info\">
                                <div class=\"content\">
                                    <p>
\t\t\t\t\t\t\t\t\t“It’s not the will to win that matters — everyone has that. It’s the will to prepare to win that matters.” – Paul “Bear” Bryant
\t\t\t\t\t\t\t\t\t</p>
                                </div>
                            </div>
                            
                            <!--Tab-->
                            <div class=\"tab\" id=\"prod-reviews\">
                                <!--Reviews Container-->
                                <div class=\"reviews-container\">
                                    
                                    <!--Review-->
                                    <div class=\"review-box clearfix\">
                                        <figure class=\"rev-thumb\"><img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resource/author-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                        <div class=\"rev-content\">
                                            <div class=\"rev-header clearfix\">
                                                <h4>Michel Britney</h4>
                                                <div class=\"rating\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star-o\"></span> <span class=\"fa fa-star-o\"></span></div>
                                                <div class=\"time\">18 Hours Ago</div>
                                            </div>
                                            <div class=\"rev-text\">The mad lightning no one you beat of just one drum they call him Flipper Flipper faster than lightning no one you see is smarter each week my friends you are sure to get a smile from seven stranded cast aways here on Gilligans Isle they call him Flipper Flipper faster.</div>
                                        </div>
                                    </div>
                                    
                                    <!--Review-->
                                    <div class=\"review-box clearfix\">
                                        <figure class=\"rev-thumb\"><img src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resource/author-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></figure>
                                        <div class=\"rev-content\">
                                            <div class=\"rev-header clearfix\">
                                                <h4>Denny</h4>
                                                <div class=\"rating\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star-o\"></span> <span class=\"fa fa-star-o\"></span></div>
                                                <div class=\"time\">18 Hours Ago</div>
                                            </div>
                                            <div class=\"rev-text\">The mad lightning no one you beat of just one drum they call him Flipper Flipper faster than lightning no one you see is smarter each week my friends you are sure to get a smile from seven stranded cast aways here on Gilligans Isle they call him Flipper Flipper faster than lightning no one you see is smarter than he loveable space that needs your face threes company too.</div>
                                        </div>
                                    </div>
                                    
                                    <!--Add Review-->
                                    <div class=\"add-review\">
                                        <h2>Add a Review</h2>
                                        
                                        <form method=\"post\" action=\"https://expert-themes.com/html/gym/shop-single.html\">
                                            <div class=\"row clearfix\">
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Name *</label>
                                                    <input type=\"text\" name=\"name\" value=\"\" placeholder=\"\" required>
                                                </div>
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Email *</label>
                                                    <input type=\"email\" name=\"email\" value=\"\" placeholder=\"\" required>
                                                </div>
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Website *</label>
                                                    <input type=\"text\" name=\"website\" value=\"\" placeholder=\"\" required>
                                                </div>
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Rating </label>
                                                    <div class=\"rating\">
                                                        <a href=\"#\" class=\"rate-box\" title=\"1 Out of 5\"><span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"2 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"3 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"> </span> <span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"4 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"5 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></a>
                                                    </div>
                                                </div>
                                                <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                                                    <label>Your Review</label>
                                                    <textarea name=\"review-message\"></textarea>
                                                </div>
                                                <div class=\"form-group text-right col-md-12 col-sm-12 col-xs-12\">
                                                    <button type=\"button\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Add Review</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                            
                                    
                                </div>
                            </div>
                            <!--End Tab-->
                            
                        </div>
                    </div>
                    
                </div>
                <!--End Product Info Tabs-->
                
            </div>
            
        </div>
    </section>
    <!--End Shop Single Section-->
\t
\t<!-- Subscribe Section -->
\t<section class=\"subscribe-section\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"inner-container margin-bottom\">
\t\t\t\t<div class=\"pattern-layer\" style=\"background-image:url(images/background/7.jpg)\"></div>
\t\t\t\t<div class=\"section-image\" style=\"background-image:url(images/resource/newslatter.png)\"></div>
\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t
\t\t\t\t\t<!-- Title Column -->
\t\t\t\t\t<div class=\"title-column col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t\t<h3>Don’t miss any updates <br> Get subscribed!</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Form Column -->
\t\t\t\t\t<div class=\"form-column col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"newsletter-form\">
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/contact.html\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"Add your email ......\" required=\"\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"theme-btn submit-btn\"><span class=\"txt\">Subscribe</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Subscribe Section -->
\t
\t<!-- Main Footer -->
    <footer class=\"main-footer style-four\" style=\"background-image:url(asset('images/background/2.jpg'))\">
\t\t<div class=\"auto-container\">
        \t<!-- Widgets Section -->
            <div class=\"widgets-section\">
            \t<div class=\"row clearfix\">
                \t
                    <!-- Big Column -->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget logo-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"logo\">
                                    \t<a href=\"index.html\"><img src=\"";
        // line 537
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"text\">Gym Expert is a champ in providing its users with absolutely everything a fitness or gym site needs. consectetur adipiscing elit. Suspendisse interdum nulla eu posuere scelerisque.</div>
\t\t\t\t\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t\t\t\t\t<span>Follow on Socials </span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer Column -->
\t\t\t\t\t\t\t<div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget news-widget\">
\t\t\t\t\t\t\t\t\t<h4>Latest Posts</h4>
\t\t\t\t\t\t\t\t\t<!-- Footer Column -->
\t\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\"><a href=\"blog-single.html\"><img src=\"images/resource/post-thumb-3.jpg\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"blog-single.html\">Your Future is Created by What You Do Today</a></h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">JUNE 21, 2020</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\"><a href=\"blog-single.html\"><img src=\"images/resource/post-thumb-4.jpg\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"blog-single.html\">How to Maximise Time Spent at The GYM.</a></h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">JUNE 21, 2019</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Big Column -->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer Column -->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget links-widget\">
\t\t\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-link\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fat Burn</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Streching</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Weight Loss</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Self Defense</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Body Building</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Psycho Trainning</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Strength Trainning</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer Column -->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget timing-widget\">
\t\t\t\t\t\t\t\t\t<h4>Working Hours</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>Monday – Friday:<span>07:00 – 21:00</span></li>
\t\t\t\t\t\t\t\t\t\t<li>Saturday:<span>07:00 – 16:00</span></li>
\t\t\t\t\t\t\t\t\t\t<li>Sunday Closed</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t\t<!-- Footer Bottom -->
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"copyright\">Copyright 2020 Theme by expertthemes</div>
\t\t\t</div>
\t\t
\t\t</div>
\t</footer>
\t
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
\t<div class=\"various-color clearfix\">
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
\t
    <h5>Other Options</h5>
\t<ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>
\t
    <a href=\"#\" class=\"purchase-btn\">Purchase now \$17</a>
    
    <div class=\"palate-foo\">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!-- Search Popup -->
<div class=\"search-popup\">
\t<button class=\"close-search style-two\"><span class=\"flaticon-multiply\"></span></button>
\t<button class=\"close-search\"><span class=\"flaticon-up-arrow-1\"></span></button>
\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/blog.html\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"search\" name=\"search-field\" value=\"\" placeholder=\"Search Here\" required=\"\">
\t\t\t<button type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t</div>
\t</form>
</div>
<!-- End Header Search -->

";
        // line 669
        $this->displayBlock('javascripts', $context, $blocks);
        // line 690
        echo "</body>

<!-- Mirrored from View/html/gym/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:45 GMT -->
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "    Details Activite
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "    

<!-- Stylesheets -->
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Color Switcher Mockup -->
<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color-switcher-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Color Themes -->
<link id=\"theme-color-file\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color-themes/default-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">

<link rel=\"shortcut icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 669
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 670
        echo "    

<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>

<script src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.bootstrap-touchspin.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 683
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 684
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 685
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nav-tool.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 686
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/color-settings.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activite/Detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  918 => 688,  914 => 687,  910 => 686,  906 => 685,  902 => 684,  898 => 683,  894 => 682,  890 => 681,  886 => 680,  882 => 679,  878 => 678,  874 => 677,  870 => 676,  866 => 675,  859 => 670,  849 => 669,  836 => 33,  832 => 32,  825 => 28,  819 => 25,  813 => 22,  809 => 21,  804 => 19,  799 => 16,  789 => 15,  778 => 11,  768 => 10,  754 => 690,  752 => 669,  617 => 537,  496 => 419,  480 => 406,  426 => 355,  412 => 344,  409 => 343,  400 => 328,  384 => 315,  358 => 292,  307 => 244,  260 => 200,  238 => 181,  147 => 93,  88 => 36,  86 => 15,  81 => 12,  79 => 10,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<!DOCTYPE html>
<html>

<!-- Mirrored from View/html/gym/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:39 GMT -->
<head>
<meta charset=\"utf-8\">
<title>{% block title %}
    Details Activite
{% endblock %}</title>


{% block stylesheets %}
    

<!-- Stylesheets -->
<link href=\"{{asset('css/bootstrap.css')}}\" rel=\"stylesheet\">

<link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">
<link href=\"{{asset('css/responsive.css')}}\" rel=\"stylesheet\">

<!-- Color Switcher Mockup -->
<link href=\"{{asset('css/color-switcher-design.css')}}\" rel=\"stylesheet\">

<!-- Color Themes -->
<link id=\"theme-color-file\" href=\"{{asset('css/color-themes/default-theme.css')}}\" rel=\"stylesheet\">

<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">

<link rel=\"shortcut icon\" href=\"{{asset('images/favicon.png')}}\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"{{asset('images/favicon.png')}}\" type=\"image/x-icon\">

{% endblock %}
<!-- Responsive -->
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">

<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->
<!--[if lt IE 9]><script src=\"js/respond.js\"></script><![endif]-->
</head>

<body class=\"hidden-bar-wrapper\">

<div class=\"page-wrapper\">
 \t
    <!-- Preloader -->
    <div class=\"preloader\"></div>
 \t
 \t<!-- Main Header-->
    <header class=\"main-header header-style-two\">
    \t
\t\t<!-- Header Top -->
        <div class=\"header-top\">
            <div class=\"auto-container\">
                <div class=\"clearfix\">
\t\t\t\t
\t\t\t\t\t<!-- Top Left -->
\t\t\t\t\t<div class=\"top-left pull-left\">
\t\t\t\t\t\t<!-- Info List -->
                        <ul class=\"info-list\">
\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>
\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>
\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Top Right -->
                    <div class=\"top-right pull-right\">
\t\t\t\t\t\t
\t\t\t\t\t\t<!--Language-->
                        <div class=\"language dropdown\"><a class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" href=\"#\"><span class=\"flag-icon fa fa-globe\"></span>EN &nbsp;<span class=\"icon fa fa-angle-down\"></span></a>
                        \t<ul class=\"dropdown-menu style-one\" aria-labelledby=\"dropdownMenu2\">
                                <li><a href=\"#\">English</a></li>
                                <li><a href=\"#\">German</a></li>
                                <li><a href=\"#\">Arabic</a></li>
                                <li><a href=\"#\">Hindi</a></li>
                            </ul>
                        </div>
\t\t\t\t\t\t
                    </div>
\t\t\t\t\t
                </div>
            </div>
        </div>
\t\t
\t\t<!-- Header Upper -->
        <div class=\"header-upper\">
        \t<div class=\"auto-container clearfix\">
            \t
\t\t\t\t<div class=\"pull-left logo-box\">
\t\t\t\t\t<div class=\"logo\"><a href=\"index.html\"><img src=\"{{asset('images/logo.png')}}}\" alt=\"\" title=\"\"></a></div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"nav-outer clearfix\">
\t\t\t\t\t<!--Mobile Navigation Toggler-->
\t\t\t\t\t<div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu\"></span></div>
\t\t\t\t\t<!-- Main Menu -->
\t\t\t\t\t<nav class=\"main-menu navbar-expand-md\">
\t\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t\t<!-- Toggle Button -->    \t
\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t\t<ul class=\"navigation clearfix\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Home</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home Page 01</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Home Page 02</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Home Page 03</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Header Styles</a>
\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Header Style 01</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Header Style 02</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Header Style 03</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">About</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"price.html\">Price</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"team.html\">Team</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"time-table.html\">Time Table</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"testimonial.html\">Testimonial</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">Comming Soon</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Classes</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes.html\">Classes</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Portfolio</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">Portfolio Detail</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Shop</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Our Products</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-single.html\">Product Single</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopping-cart.html\">Shopping Cart</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"account.php\">Account</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"not-found.html\">Not Found</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
            </div>
        </div>
        <!--End Header Upper-->
        
\t\t<!-- Sticky Header  -->
        <div class=\"sticky-header\">
            <div class=\"auto-container clearfix\">
                <!--Logo-->
                <div class=\"logo pull-left\">
                    <a href=\"index.html\" title=\"\"><img src=\"{{asset('images/logo-small.png')}}\" alt=\"\" title=\"\"></a>
                </div>
                <!--Right Col-->
                <div class=\"pull-right\">
                    <!-- Main Menu -->
                    <nav class=\"main-menu\">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav><!-- Main Menu End-->
\t\t\t\t\t
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    
\t\t<!-- Mobile Menu  -->
        <div class=\"mobile-menu\">
            <div class=\"menu-backdrop\"></div>
            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>
            
            <nav class=\"menu-box\">
                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"{{asset('images/logo-2.png')}}\" alt=\"\" title=\"\"></a></div>
                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
\t\t<!-- End Mobile Menu -->
\t
    </header>
    <!-- End Main Header -->
\t
\t<!--Page Title-->
    <section class=\"page-title\" style=\"background-image:url(images/background/11.jpg)\">
    \t<div class=\"auto-container\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t<h2>Detail Activite</h2>
\t\t\t\t\t<div class=\"text\">Fitness is not a destination it is a way of life.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<ul class=\"page-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t<li>Detail Activite</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        </div>
    </section>
    <!--End Page Title-->
\t
\t<!-- Sidebar Cart Item -->
\t<div class=\"xs-sidebar-group info-group\">
\t\t<div class=\"xs-overlay xs-bg-black\"></div>
\t\t<div class=\"xs-sidebar-widget\">
\t\t\t<div class=\"sidebar-widget-container\">
\t\t\t\t<div class=\"widget-heading\">
\t\t\t\t\t<a href=\"#\" class=\"close-side-widget\">
\t\t\t\t\t\tX
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar-textwidget\">
\t\t\t\t\t
\t\t\t\t\t<!-- Sidebar Info Content -->
\t\t\t\t\t<div class=\"sidebar-info-contents\">
\t\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"{{asset('images/logo.png')}}\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"content-box\">
\t\t\t\t\t\t\t\t<h2>About Us</h2>
\t\t\t\t\t\t\t\t<p class=\"text\">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"theme-btn btn-style-two\"><span class=\"txt\">Consultation</span></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-info\">
\t\t\t\t\t\t\t\t<h2>Contact Info</h2>
\t\t\t\t\t\t\t\t<ul class=\"list-style-one\">
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span>Chicago 12, Melborne City, USA</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span>(111) 111-111-1111</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope\"></span>Gym@gmail.com</li>
\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-clock-o\"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Social Box -->
\t\t\t\t\t\t\t<ul class=\"social-box\">
\t\t\t\t\t\t\t\t<li class=\"facebook\"><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"twitter\"><a href=\"#\" class=\"fa fa-twitter\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"linkedin\"><a href=\"#\" class=\"fa fa-linkedin\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"instagram\"><a href=\"#\" class=\"fa fa-instagram\"></a></li>
\t\t\t\t\t\t\t\t<li class=\"youtube\"><a href=\"#\" class=\"fa fa-youtube\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- END sidebar widget item -->
\t
\t<!--Shop Single Section-->
    <section class=\"shop-single-section\">
    \t<div class=\"auto-container\">
        \t
            <!--Shop Single-->
            <div class=\"shop-page product-details\">
                
                <!--Basic Details-->
                <div class=\"basic-details\">
                    <div class=\"row clearfix\">
                    
                        <div class=\"image-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"carousel-outer\">
        
                                <ul class=\"image-carousel owl-carousel owl-theme\">
                                    <li><a =\"images/resource/products/13.jpg\" class=\"lightbox-image\" title=\"Image Caption Here\"><img src=\"{{asset('uploads/'~ activite.image)}}\" alt=\"\"></a></li>
                                   
                                </ul>
                                
                                <ul class=\"thumbs-carousel owl-carousel owl-theme\">
                                    <li><img src=\"images/resource/products/14.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/15.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/16.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/17.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/14.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/15.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/16.jpg\" alt=\"\"></li>
                                    <li><img src=\"images/resource/products/17.jpg\" alt=\"\"></li>
                                </ul>
                                
                            </div>
                        </div>
                        
                        <!--Info Column-->
                        <div class=\"info-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"details-header\">
                                <h2>Detail de l'Activité</h2>
                                <div class=\"rating\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></div>
                                <div class=\"item-price\">{{ activite.nomA }}</div>
                            </div>

                            <div class=\"text\">
                                <p> Ceci est l'une de nos Activités</p>
                            </div>

                            <div class=\"other-options\">
                                <div class=\"clearfix\">
                                    <h4><strong>Age</strong></h4>
                                    <div class=\"pull-left\">
                                    <select name=\"cat_age\" id=\"cat_age-select\">

                                    <option value=\"\">{{ activite.catAge }}</option>
                            
                                     </select>
                                     </div>

\t\t\t\t\t\t\t\t\t <br>
\t\t\t\t\t\t\t\t\t {#
                                    <div class=\"pull-left\">
                                        <!--Btns Box-->
                                        <div class=\"btns-box\">
                                           

                                        </div>
                                    </div>
\t\t\t\t\t\t\t\t\t#}
\t\t\t\t\t\t\t\t\t <button type=\"button\" class=\"btn btn-danger\"><span class=\"txt\">Imprimer</span></button>
                                           <a class=\"btn btn-danger\"role=\"button\" href=\"{{ path('addEnfant') }}\" style=\"margin:5px;\">
\t\t\t\t\t\t\t\t\t\t   Rejoindre
                                        </a>
\t\t\t\t\t\t\t\t</div>
                                
                            </div>
                            
                            <h4><strong>Type:</strong></h4>
                         <div class=\"pull-left\">
                           <select name=\"Type\" id=\"type-select\">

                           <option value=\"\">{{ activite.type }}</option>
                            
                             </select>
                         </div>  
                            
                            
                        </div>
                        
                    </div>
                </div>
                <!--Basic Details-->
                
                <!--Product Info Tabs-->
                <div class=\"product-info-tabs\">
                    <!--Product Tabs-->
                    <div class=\"prod-tabs tabs-box\">
                    
                        <!--Tab Btns-->
                        <ul class=\"tab-btns tab-buttons clearfix\">
                            <li data-tab=\"#prod-details\" class=\"tab-btn active-btn\">Description</li>
                            <li data-tab=\"#prod-info\" class=\"tab-btn\">Additional Information</li>
                            <li data-tab=\"#prod-reviews\" class=\"tab-btn\">Reviews (2)</li>
                        </ul>
                        
                        <!--Tabs Container-->
                        <div class=\"tabs-content\">
                            
                            <!--Tab / Active Tab-->
                            <div class=\"tab active-tab\" id=\"prod-details\">
                                <div class=\"content\">
                                    <p><quote>“Never say never because limits, like fears, are often just an illusion.” – Michael Jordan</quote></p>
                                    <p>“Without self-discipline, success is impossible, period.” – Lou Holtz</p>
                                </div>
                            </div>
                            
                            <!--Tab / Active Tab-->
                            <div class=\"tab\" id=\"prod-info\">
                                <div class=\"content\">
                                    <p>
\t\t\t\t\t\t\t\t\t“It’s not the will to win that matters — everyone has that. It’s the will to prepare to win that matters.” – Paul “Bear” Bryant
\t\t\t\t\t\t\t\t\t</p>
                                </div>
                            </div>
                            
                            <!--Tab-->
                            <div class=\"tab\" id=\"prod-reviews\">
                                <!--Reviews Container-->
                                <div class=\"reviews-container\">
                                    
                                    <!--Review-->
                                    <div class=\"review-box clearfix\">
                                        <figure class=\"rev-thumb\"><img src=\"{{asset('images/resource/author-3.jpg')}}\" alt=\"\"></figure>
                                        <div class=\"rev-content\">
                                            <div class=\"rev-header clearfix\">
                                                <h4>Michel Britney</h4>
                                                <div class=\"rating\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star-o\"></span> <span class=\"fa fa-star-o\"></span></div>
                                                <div class=\"time\">18 Hours Ago</div>
                                            </div>
                                            <div class=\"rev-text\">The mad lightning no one you beat of just one drum they call him Flipper Flipper faster than lightning no one you see is smarter each week my friends you are sure to get a smile from seven stranded cast aways here on Gilligans Isle they call him Flipper Flipper faster.</div>
                                        </div>
                                    </div>
                                    
                                    <!--Review-->
                                    <div class=\"review-box clearfix\">
                                        <figure class=\"rev-thumb\"><img src=\"{{asset('images/resource/author-4.jpg')}}\" alt=\"\"></figure>
                                        <div class=\"rev-content\">
                                            <div class=\"rev-header clearfix\">
                                                <h4>Denny</h4>
                                                <div class=\"rating\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star-o\"></span> <span class=\"fa fa-star-o\"></span></div>
                                                <div class=\"time\">18 Hours Ago</div>
                                            </div>
                                            <div class=\"rev-text\">The mad lightning no one you beat of just one drum they call him Flipper Flipper faster than lightning no one you see is smarter each week my friends you are sure to get a smile from seven stranded cast aways here on Gilligans Isle they call him Flipper Flipper faster than lightning no one you see is smarter than he loveable space that needs your face threes company too.</div>
                                        </div>
                                    </div>
                                    
                                    <!--Add Review-->
                                    <div class=\"add-review\">
                                        <h2>Add a Review</h2>
                                        
                                        <form method=\"post\" action=\"https://expert-themes.com/html/gym/shop-single.html\">
                                            <div class=\"row clearfix\">
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Name *</label>
                                                    <input type=\"text\" name=\"name\" value=\"\" placeholder=\"\" required>
                                                </div>
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Email *</label>
                                                    <input type=\"email\" name=\"email\" value=\"\" placeholder=\"\" required>
                                                </div>
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Website *</label>
                                                    <input type=\"text\" name=\"website\" value=\"\" placeholder=\"\" required>
                                                </div>
                                                <div class=\"form-group col-md-6 col-sm-12 col-xs-12\">
                                                    <label>Rating </label>
                                                    <div class=\"rating\">
                                                        <a href=\"#\" class=\"rate-box\" title=\"1 Out of 5\"><span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"2 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"3 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"> </span> <span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"4 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></a>
                                                        <a href=\"#\" class=\"rate-box\" title=\"5 Out of 5\"><span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span> <span class=\"fa fa-star\"></span></a>
                                                    </div>
                                                </div>
                                                <div class=\"form-group col-md-12 col-sm-12 col-xs-12\">
                                                    <label>Your Review</label>
                                                    <textarea name=\"review-message\"></textarea>
                                                </div>
                                                <div class=\"form-group text-right col-md-12 col-sm-12 col-xs-12\">
                                                    <button type=\"button\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Add Review</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>                                            
                                    
                                </div>
                            </div>
                            <!--End Tab-->
                            
                        </div>
                    </div>
                    
                </div>
                <!--End Product Info Tabs-->
                
            </div>
            
        </div>
    </section>
    <!--End Shop Single Section-->
\t
\t<!-- Subscribe Section -->
\t<section class=\"subscribe-section\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"inner-container margin-bottom\">
\t\t\t\t<div class=\"pattern-layer\" style=\"background-image:url(images/background/7.jpg)\"></div>
\t\t\t\t<div class=\"section-image\" style=\"background-image:url(images/resource/newslatter.png)\"></div>
\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t
\t\t\t\t\t<!-- Title Column -->
\t\t\t\t\t<div class=\"title-column col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t\t<h3>Don’t miss any updates <br> Get subscribed!</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Form Column -->
\t\t\t\t\t<div class=\"form-column col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"newsletter-form\">
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/contact.html\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"Add your email ......\" required=\"\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"theme-btn submit-btn\"><span class=\"txt\">Subscribe</span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Subscribe Section -->
\t
\t<!-- Main Footer -->
    <footer class=\"main-footer style-four\" style=\"background-image:url(asset('images/background/2.jpg'))\">
\t\t<div class=\"auto-container\">
        \t<!-- Widgets Section -->
            <div class=\"widgets-section\">
            \t<div class=\"row clearfix\">
                \t
                    <!-- Big Column -->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!--Footer Column-->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget logo-widget\">
\t\t\t\t\t\t\t\t\t<div class=\"logo\">
                                    \t<a href=\"index.html\"><img src=\"{{asset('images/footer-logo.png')}}\" alt=\"\" /></a>
                                    </div>
\t\t\t\t\t\t\t\t\t<div class=\"text\">Gym Expert is a champ in providing its users with absolutely everything a fitness or gym site needs. consectetur adipiscing elit. Suspendisse interdum nulla eu posuere scelerisque.</div>
\t\t\t\t\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t\t\t\t\t<span>Follow on Socials </span>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-facebook\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-instagram\"></a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-linkedin\"></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer Column -->
\t\t\t\t\t\t\t<div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
\t\t\t\t\t\t\t\t<div class=\"footer-widget news-widget\">
\t\t\t\t\t\t\t\t\t<h4>Latest Posts</h4>
\t\t\t\t\t\t\t\t\t<!-- Footer Column -->
\t\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\"><a href=\"blog-single.html\"><img src=\"images/resource/post-thumb-3.jpg\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"blog-single.html\">Your Future is Created by What You Do Today</a></h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">JUNE 21, 2020</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"post\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\"><a href=\"blog-single.html\"><img src=\"images/resource/post-thumb-4.jpg\" alt=\"\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"blog-single.html\">How to Maximise Time Spent at The GYM.</a></h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">JUNE 21, 2019</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<!-- Big Column -->
                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">
                        <div class=\"row clearfix\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer Column -->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget links-widget\">
\t\t\t\t\t\t\t\t\t<h4>Our Services</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-link\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fat Burn</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Streching</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Weight Loss</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Self Defense</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Body Building</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Psycho Trainning</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Strength Trainning</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<!-- Footer Column -->
                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">
                                <div class=\"footer-widget timing-widget\">
\t\t\t\t\t\t\t\t\t<h4>Working Hours</h4>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>Monday – Friday:<span>07:00 – 21:00</span></li>
\t\t\t\t\t\t\t\t\t\t<li>Saturday:<span>07:00 – 16:00</span></li>
\t\t\t\t\t\t\t\t\t\t<li>Sunday Closed</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t
\t\t\t<!-- Footer Bottom -->
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"copyright\">Copyright 2020 Theme by expertthemes</div>
\t\t\t</div>
\t\t
\t\t</div>
\t</footer>
\t
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
\t<div class=\"various-color clearfix\">
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
\t
    <h5>Other Options</h5>
\t<ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>
\t
    <a href=\"#\" class=\"purchase-btn\">Purchase now \$17</a>
    
    <div class=\"palate-foo\">
        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
    </div>

</div>

<!-- Search Popup -->
<div class=\"search-popup\">
\t<button class=\"close-search style-two\"><span class=\"flaticon-multiply\"></span></button>
\t<button class=\"close-search\"><span class=\"flaticon-up-arrow-1\"></span></button>
\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/blog.html\">
\t\t<div class=\"form-group\">
\t\t\t<input type=\"search\" name=\"search-field\" value=\"\" placeholder=\"Search Here\" required=\"\">
\t\t\t<button type=\"submit\"><i class=\"fa fa-search\"></i></button>
\t\t</div>
\t</form>
</div>
<!-- End Header Search -->

{% block javascripts %}
    

<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>

<script src=\"{{asset('js/jquery.js')}}\"></script>
<script src=\"{{asset('js/popper.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.fancybox.js')}}\"></script>
<script src=\"{{asset('js/appear.js')}}\"></script>
<script src=\"{{asset('js/jquery.bootstrap-touchspin.js')}}\"></script>
<script src=\"{{asset('js/owl.js')}}\"></script>
<script src=\"{{asset('js/wow.js')}}\"></script>
<script src=\"{{asset('js/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/nav-tool.js')}}\"></script>
<script src=\"{{asset('js/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
<script src=\"{{asset('js/color-settings.js')}}\"></script>
{% endblock %}
</body>

<!-- Mirrored from View/html/gym/shop-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:45 GMT -->
</html>
{% endblock %}", "activite/Detail.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\activite\\Detail.html.twig");
    }
}
