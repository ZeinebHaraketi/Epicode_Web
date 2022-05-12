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

/* base-front.html.twig */
class __TwigTemplate_71846ebe6c10c32295d65e4a673dbed5f1548975425f25d6bcf2379797d83367 extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>


<!-- Mirrored from View/html/gym/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:51:52 GMT -->
<head>

<meta charset=\"utf-8\">

<title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

<!-- Stylesheets -->
";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 71
        echo "</head>



<body class=\"hidden-bar-wrapper\">



<div class=\"page-wrapper\">

 \t

    <!-- Preloader -->

    <div class=\"preloader\"></div>

 \t

 \t<!-- Main Header-->

    <header class=\"main-header header-style-one\">

    \t

\t\t<!-- Header Top -->

        <div class=\"header-top\">

            <div class=\"outer-container\">

                <div class=\"clearfix\">

\t\t\t\t

\t\t\t\t\t<!-- Top Left -->

\t\t\t\t\t<div class=\"top-left pull-left\">

\t\t\t\t\t\t<div class=\"text\">Welcome to iron GYM Fitness</div>

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<!-- Top Right -->

                    <div class=\"top-right pull-right\">

\t\t\t\t\t

\t\t\t\t\t\t<!-- Info List -->

                        <ul class=\"info-list\">

\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>

\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>

\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>

\t\t\t\t\t\t</ul>

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

        \t<div class=\"outer-container clearfix\">

            \t

\t\t\t\t<div class=\"pull-left logo-box\">

\t\t\t\t\t<div class=\"logo\"><a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" title=\"\"></a></div>

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

\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Home</a>

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

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Cours</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 269
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cours_indexfront");
        echo "\">Voir Cours</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 270
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar");
        echo "\">Voir Planning</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Coaching</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_indexfront");
        echo "\">Seance Coaching</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">Coaching Detail</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop</a>

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

\t\t\t\t\t<!-- Main Menu End-->

\t\t\t\t\t<div class=\"outer-box clearfix\">

\t\t\t\t\t

\t\t\t\t\t\t<!-- Cart Box -->

\t\t\t\t\t\t<div class=\"cart-box\">

\t\t\t\t\t\t\t<div class=\"dropdown\">

\t\t\t\t\t\t\t\t<button class=\"cart-box-btn dropdown-toggle\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"flaticon-shopping-bag-1\"></span><span class=\"total-cart\">2</span></button>

\t\t\t\t\t\t\t\t<div class=\"dropdown-menu pull-right cart-panel\" aria-labelledby=\"dropdownMenu3\">



\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-1.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Flying Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-2.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Patient Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-total\">Sub Total: <span>\$198</span></div>

\t\t\t\t\t\t\t\t\t<ul class=\"btns-boxed\">

\t\t\t\t\t\t\t\t\t\t<li><a href=\"shoping-cart.html\">View Cart</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">CheckOut</a></li>

\t\t\t\t\t\t\t\t\t</ul>



\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Nav Btn -->

\t\t\t\t\t\t<div class=\"nav-btn navSidebar-button\"><span class=\"icon flaticon-menu\"></span></div>

\t\t\t\t\t\t\t

\t\t\t\t\t</div>

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

                    <a href=\"index.html\" title=\"\"><img src=\"images/logo-small.png\" alt=\"\" title=\"\"></a>

                </div>

                <!--Right Col-->

                <div class=\"pull-right\">

                    <!-- Main Menu -->

                    <nav class=\"main-menu\">

                        <!--Keep This Empty / Menu will come through Javascript-->

                    </nav><!-- Main Menu End-->

\t\t\t\t\t

\t\t\t\t\t<!-- Main Menu End-->

\t\t\t\t\t<div class=\"outer-box clearfix\">

\t\t\t\t\t

\t\t\t\t\t\t<!-- Cart Box -->

\t\t\t\t\t\t<div class=\"cart-box\">

\t\t\t\t\t\t\t<div class=\"dropdown\">

\t\t\t\t\t\t\t\t<button class=\"cart-box-btn dropdown-toggle\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"flaticon-shopping-bag-1\"></span><span class=\"total-cart\">2</span></button>

\t\t\t\t\t\t\t\t<div class=\"dropdown-menu pull-right cart-panel\" aria-labelledby=\"dropdownMenu3\">



\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-1.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Flying Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-2.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Patient Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-total\">Sub Total: <span>\$198</span></div>

\t\t\t\t\t\t\t\t\t<ul class=\"btns-boxed\">

\t\t\t\t\t\t\t\t\t\t<li><a href=\"shoping-cart.html\">View Cart</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">CheckOut</a></li>

\t\t\t\t\t\t\t\t\t</ul>



\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Nav Btn -->

\t\t\t\t\t\t<div class=\"nav-btn navSidebar-button\"><span class=\"icon flaticon-menu\"></span></div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t\t

                </div>

            </div>

        </div><!-- End Sticky Menu -->

    

\t\t<!-- Mobile Menu  -->

        <div class=\"mobile-menu\">

            <div class=\"menu-backdrop\"></div>

            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>

            

            <nav class=\"menu-box\">

                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"images/logo-2.png\" alt=\"\" title=\"\"></a></div>

                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>

            </nav>

        </div><!-- End Mobile Menu -->

\t

    </header>

    <!-- End Main Header -->


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

\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" /></a>

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

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

\t<!-- END sidebar widget item -->

\t
\t





<!-- TimeTable Section -->

\t<section class=\"timetable-section\" style=\"background-image: url(images/background/1.jpg)\">

\t\t<div class=\"side-text\">Trainer</div>

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t

\t\t\t

\t\t\t<div class=\"inner-container\">

\t\t\t\t<div class=\"table-outer\">

\t\t\t\t\t<div class=\"table-inner\">

\t\t\t\t\t\t<!-- Table Title Box -->

\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t


            


        </div>
    </div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t 


\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t";
        // line 716
        $this->displayBlock('body', $context, $blocks);
        // line 717
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t

\t\t</div>

\t</section>

\t<!-- End TimeTable Section -->
\t<section class=\"ftco-section bg-light\">
    <div class=\"container\">
       
        <div class=\"row d-flex\">



            


        </div>
    </div>
</section>
\t

\t
\t<!-- Main Footer -->
\t";
        // line 750
        $this->displayBlock('footer', $context, $blocks);
        // line 944
        echo "\t

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

\t

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

\t

    <h5>Other Options</h5>

    <ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>

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



<!--Scroll to top-->

<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>

 ";
        // line 1048
        $this->displayBlock('javascripts', $context, $blocks);
        // line 1120
        echo "

</body>


<!-- Mirrored from View/html/gym/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:52:33 GMT -->
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\"
      integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">



<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION SETTINGS STYLES -->

<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/css/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION LAYERS STYLES -->

<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/css/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION NAVIGATION STYLES -->



<link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



<!-- Color Switcher Mockup -->

<link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/color-switcher-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



<!-- Color Themes -->

<link id=\"theme-color-file\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/color-themes/default-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap') }}\" rel=\"stylesheet\">



<link rel=\"shortcut icon\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">

<link rel=\"icon\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/images/favicon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\">



<!-- Responsive -->

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">



<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->

<!--[if lt IE 9]><script src=\"js/respond.js\"></script><![endif]-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 716
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 750
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 751
        echo "
    <footer class=\"main-footer\" style=\"background-image:url(images/background/2.jpg)\">

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

                                    \t<a href=\"index.html\"><img src=\"images/footer-logo.png\" alt=\"\" /></a>

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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1048
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 1049
        echo "


 <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\"
        integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
</script>


<script src=\"";
        // line 1057
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.js"), "html", null, true);
        echo " \"></script>

<!--Revolution Slider-->

<script src=\"";
        // line 1061
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1063
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1065
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1067
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1069
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1071
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1073
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.migration.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1075
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1077
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1079
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1081
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/plugins/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1083
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main-slider-script.js"), "html", null, true);
        echo "\"></script>



<script src=\"";
        // line 1087
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1089
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1091
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1093
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1095
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/appear.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/parallax.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1099
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/tilt.jquery.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.paroller.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/wow.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/nav-tool.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/script.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 1113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/color-settings.js"), "html", null, true);
        echo "\"></script>





 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1394 => 1113,  1389 => 1111,  1384 => 1109,  1379 => 1107,  1374 => 1105,  1369 => 1103,  1364 => 1101,  1359 => 1099,  1354 => 1097,  1349 => 1095,  1344 => 1093,  1339 => 1091,  1334 => 1089,  1329 => 1087,  1322 => 1083,  1317 => 1081,  1312 => 1079,  1307 => 1077,  1302 => 1075,  1297 => 1073,  1292 => 1071,  1287 => 1069,  1282 => 1067,  1277 => 1065,  1272 => 1063,  1267 => 1061,  1260 => 1057,  1250 => 1049,  1240 => 1048,  1038 => 751,  1028 => 750,  1010 => 716,  984 => 55,  979 => 53,  968 => 45,  959 => 39,  950 => 33,  945 => 31,  938 => 27,  933 => 25,  928 => 23,  916 => 15,  906 => 14,  887 => 11,  871 => 1120,  869 => 1048,  763 => 944,  761 => 750,  726 => 717,  724 => 716,  287 => 282,  272 => 270,  268 => 269,  68 => 71,  66 => 14,  60 => 11,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<html>


<!-- Mirrored from View/html/gym/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:51:52 GMT -->
<head>

<meta charset=\"utf-8\">

<title>{% block title %}Homepage{% endblock %}</title>

<!-- Stylesheets -->
{% block stylesheets %}
<link href=\"{{ asset('front/css/bootstrap.css') }}\" rel=\"stylesheet\">


<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css\"
      integrity=\"sha256-5veQuRbWaECuYxwap/IOE/DAwNxgm4ikX7nrgsqYp88=\" crossorigin=\"anonymous\">



<link href=\"{{ asset('front/plugins/revolution/css/settings.css') }}\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION SETTINGS STYLES -->

<link href=\"{{ asset('front/plugins/revolution/css/layers.css') }}\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION LAYERS STYLES -->

<link href=\"{{ asset('front/plugins/revolution/css/navigation.css') }}\" rel=\"stylesheet\" type=\"text/css\"><!-- REVOLUTION NAVIGATION STYLES -->



<link href=\"{{ asset('front/css/style.css') }}\" rel=\"stylesheet\">

<link href=\"{{ asset('front/css/responsive.css') }}\" rel=\"stylesheet\">



<!-- Color Switcher Mockup -->

<link href=\"{{ asset('front/css/color-switcher-design.css') }}\" rel=\"stylesheet\">



<!-- Color Themes -->

<link id=\"theme-color-file\" href=\"{{ asset('front/css/color-themes/default-theme.css') }}\" rel=\"stylesheet\">



<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap') }}\" rel=\"stylesheet\">



<link rel=\"shortcut icon\" href=\"{{ asset('front/images/favicon.png') }}\" type=\"image/x-icon\">

<link rel=\"icon\" href=\"{{ asset('front/images/favicon.png') }}\" type=\"image/x-icon\">



<!-- Responsive -->

<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">



<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->

<!--[if lt IE 9]><script src=\"js/respond.js\"></script><![endif]-->
{% endblock %}
</head>



<body class=\"hidden-bar-wrapper\">



<div class=\"page-wrapper\">

 \t

    <!-- Preloader -->

    <div class=\"preloader\"></div>

 \t

 \t<!-- Main Header-->

    <header class=\"main-header header-style-one\">

    \t

\t\t<!-- Header Top -->

        <div class=\"header-top\">

            <div class=\"outer-container\">

                <div class=\"clearfix\">

\t\t\t\t

\t\t\t\t\t<!-- Top Left -->

\t\t\t\t\t<div class=\"top-left pull-left\">

\t\t\t\t\t\t<div class=\"text\">Welcome to iron GYM Fitness</div>

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<!-- Top Right -->

                    <div class=\"top-right pull-right\">

\t\t\t\t\t

\t\t\t\t\t\t<!-- Info List -->

                        <ul class=\"info-list\">

\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>

\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>

\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>

\t\t\t\t\t\t</ul>

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

        \t<div class=\"outer-container clearfix\">

            \t

\t\t\t\t<div class=\"pull-left logo-box\">

\t\t\t\t\t<div class=\"logo\"><a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" title=\"\"></a></div>

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

\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Home</a>

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

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Cours</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_cours_indexfront') }}\">Voir Cours</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{  path('calendar')  }}\">Voir Planning</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Coaching</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_coaching_indexfront') }}\">Seance Coaching</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">Coaching Detail</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop</a>

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

\t\t\t\t\t<!-- Main Menu End-->

\t\t\t\t\t<div class=\"outer-box clearfix\">

\t\t\t\t\t

\t\t\t\t\t\t<!-- Cart Box -->

\t\t\t\t\t\t<div class=\"cart-box\">

\t\t\t\t\t\t\t<div class=\"dropdown\">

\t\t\t\t\t\t\t\t<button class=\"cart-box-btn dropdown-toggle\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"flaticon-shopping-bag-1\"></span><span class=\"total-cart\">2</span></button>

\t\t\t\t\t\t\t\t<div class=\"dropdown-menu pull-right cart-panel\" aria-labelledby=\"dropdownMenu3\">



\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-1.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Flying Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-2.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Patient Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-total\">Sub Total: <span>\$198</span></div>

\t\t\t\t\t\t\t\t\t<ul class=\"btns-boxed\">

\t\t\t\t\t\t\t\t\t\t<li><a href=\"shoping-cart.html\">View Cart</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">CheckOut</a></li>

\t\t\t\t\t\t\t\t\t</ul>



\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Nav Btn -->

\t\t\t\t\t\t<div class=\"nav-btn navSidebar-button\"><span class=\"icon flaticon-menu\"></span></div>

\t\t\t\t\t\t\t

\t\t\t\t\t</div>

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

                    <a href=\"index.html\" title=\"\"><img src=\"images/logo-small.png\" alt=\"\" title=\"\"></a>

                </div>

                <!--Right Col-->

                <div class=\"pull-right\">

                    <!-- Main Menu -->

                    <nav class=\"main-menu\">

                        <!--Keep This Empty / Menu will come through Javascript-->

                    </nav><!-- Main Menu End-->

\t\t\t\t\t

\t\t\t\t\t<!-- Main Menu End-->

\t\t\t\t\t<div class=\"outer-box clearfix\">

\t\t\t\t\t

\t\t\t\t\t\t<!-- Cart Box -->

\t\t\t\t\t\t<div class=\"cart-box\">

\t\t\t\t\t\t\t<div class=\"dropdown\">

\t\t\t\t\t\t\t\t<button class=\"cart-box-btn dropdown-toggle\" type=\"button\" id=\"dropdownMenu\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"flaticon-shopping-bag-1\"></span><span class=\"total-cart\">2</span></button>

\t\t\t\t\t\t\t\t<div class=\"dropdown-menu pull-right cart-panel\" aria-labelledby=\"dropdownMenu3\">



\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-1.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Flying Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-product\">

\t\t\t\t\t\t\t\t\t\t<div class=\"inner\">

\t\t\t\t\t\t\t\t\t\t\t<div class=\"cross-icon\"><span class=\"icon fa fa-remove\"></span></div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"image\"><img src=\"images/resource/post-thumb-2.jpg\" alt=\"\" /></div>

\t\t\t\t\t\t\t\t\t\t\t<h3><a href=\"shop-single.html\">Patient Ninja</a></h3>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"quantity-text\">Quantity 1</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"price\">\$99.00</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"cart-total\">Sub Total: <span>\$198</span></div>

\t\t\t\t\t\t\t\t\t<ul class=\"btns-boxed\">

\t\t\t\t\t\t\t\t\t\t<li><a href=\"shoping-cart.html\">View Cart</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">CheckOut</a></li>

\t\t\t\t\t\t\t\t\t</ul>



\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Nav Btn -->

\t\t\t\t\t\t<div class=\"nav-btn navSidebar-button\"><span class=\"icon flaticon-menu\"></span></div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t\t

                </div>

            </div>

        </div><!-- End Sticky Menu -->

    

\t\t<!-- Mobile Menu  -->

        <div class=\"mobile-menu\">

            <div class=\"menu-backdrop\"></div>

            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>

            

            <nav class=\"menu-box\">

                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"images/logo-2.png\" alt=\"\" title=\"\"></a></div>

                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>

            </nav>

        </div><!-- End Mobile Menu -->

\t

    </header>

    <!-- End Main Header -->


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

\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" /></a>

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

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

\t<!-- END sidebar widget item -->

\t
\t





<!-- TimeTable Section -->

\t<section class=\"timetable-section\" style=\"background-image: url(images/background/1.jpg)\">

\t\t<div class=\"side-text\">Trainer</div>

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t

\t\t\t

\t\t\t<div class=\"inner-container\">

\t\t\t\t<div class=\"table-outer\">

\t\t\t\t\t<div class=\"table-inner\">

\t\t\t\t\t\t<!-- Table Title Box -->

\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t


            


        </div>
    </div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t 


\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t

\t\t\t\t\t\t\t{% block body %}{% endblock %}

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t

\t\t</div>

\t</section>

\t<!-- End TimeTable Section -->
\t<section class=\"ftco-section bg-light\">
    <div class=\"container\">
       
        <div class=\"row d-flex\">



            


        </div>
    </div>
</section>
\t

\t
\t<!-- Main Footer -->
\t{% block footer %}

    <footer class=\"main-footer\" style=\"background-image:url(images/background/2.jpg)\">

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

                                    \t<a href=\"index.html\"><img src=\"images/footer-logo.png\" alt=\"\" /></a>

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
{% endblock  %}
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

\t

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

\t

    <h5>Other Options</h5>

    <ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>

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



<!--Scroll to top-->

<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>

 {% block javascripts %}



 <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js\"
        integrity=\"sha256-YicH/8aE660iEnJtgll3vT54dJApy3XkYmqNfGVFEzA=\" crossorigin=\"anonymous\"></script>
</script>


<script src=\"{{asset('front/js/jquery.js') }} \"></script>

<!--Revolution Slider-->

<script src=\"{{asset('front/plugins/revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/jquery.themepunch.tools.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>

<script src=\"{{asset('front/plugins/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>

<script src=\"{{asset('front/js/main-slider-script.js') }}\"></script>



<script src=\"{{asset('front/js/popper.min.js') }}\"></script>

<script src=\"{{asset('front/js/bootstrap.min.js') }}\"></script>

<script src=\"{{asset('front/js/jquery.mCustomScrollbar.concat.min.js') }}\"></script>

<script src=\"{{asset('front/js/jquery.fancybox.js') }}\"></script>

<script src=\"{{asset('front/js/appear.js') }}\"></script>

<script src=\"{{asset('front/js/parallax.min.js') }}\"></script>

<script src=\"{{asset('front/js/tilt.jquery.min.js') }}\"></script>

<script src=\"{{asset('front/js/jquery.paroller.min.js') }}\"></script>

<script src=\"{{asset('front/js/owl.js') }}\"></script>

<script src=\"{{asset('front/js/wow.js') }}\"></script>

<script src=\"{{asset('front/js/nav-tool.js') }}\"></script>

<script src=\"{{asset('front/js/jquery-ui.js') }}\"></script>

<script src=\"{{asset('front/js/script.js') }}\"></script>

<script src=\"{{asset('front/js/color-settings.js') }}\"></script>





 {% endblock %}


</body>


<!-- Mirrored from View/html/gym/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:52:33 GMT -->
</html>", "base-front.html.twig", "C:\\Users\\WAEL\\Desktop\\3eme\\pidev\\copie\\FirstProject\\templates\\base-front.html.twig");
    }
}
