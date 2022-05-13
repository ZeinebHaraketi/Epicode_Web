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

/* client/index.html.twig */
class __TwigTemplate_e4311e04b6fa35d6ebef23ccbb4a12266549ea61b30254300694a1fdb31488a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Remise en Forme</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listprog");
        echo "\">Nos Programmes</a></li>
                                        <li><a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterCons");
        echo "\">Nos Consultations</a></li>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Cours</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes.html\">Classes</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Parc Enfant</a>

\t\t\t\t\t\t\t\t\t<ul>


\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 204
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listactivites");
        echo "\">Activite</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 214
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listproduit");
        echo "\">Our Products</a></li>

\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Forum</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 226
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listblg");
        echo "\">Notre Blog</a></li>
                                        <li><a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouterCom");
        echo "\">Nos Commentaires</a></li>
\t\t\t\t\t\t\t\t\t

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

\t<!--Main Slider-->

    <section class=\"main-slider\">

    \t

        <div class=\"rev_slider_wrapper fullwidthbanner-container\"  id=\"rev_slider_one_wrapper\" data-source=\"gallery\">

            <div class=\"rev_slider fullwidthabanner\" id=\"rev_slider_one\" data-version=\"5.4.1\">

                <ul>

                

                \t<li data-description=\"Slide Description\" data-easein=\"default\" data-easeout=\"default\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-fstransition=\"fade\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-1688\" data-masterspeed=\"default\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-thumb=\"images/main-slider/image-1.jpg\" data-title=\"Slide Title\" data-transition=\"parallaxvertical\">

                    <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgparallax=\"10\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"images/main-slider/image-1.jpg\"> 

                    

\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['50','15','15','15']\"

                    data-voffset=\"['65','65','65','65']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"border-curve\"></div>

                    </div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['-70','-70','-130','-130']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"title\">The mind is primary</div>

                    </div>

\t\t\t\t\t

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['10','10','-40','-60']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<h1>Fitness Club</h1>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['95','95','55','20']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"text\">wake up. it’s time to change</div>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['180','180','150','110']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"btns-box\">

                    \t\t<div class=\"btn-one-outer\"><a href=\"#\" class=\"theme-btn btn-style-one\"><span class=\"txt\">Join Us Now</span></a></div>

                        </div>

                    </div>

                    

                    </li>

                    

                    <li data-description=\"Slide Description\" data-easein=\"default\" data-easeout=\"default\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-fstransition=\"fade\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-1689\" data-masterspeed=\"default\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-thumb=\"images/main-slider/image-2.jpg\" data-title=\"Slide Title\" data-transition=\"parallaxvertical\">

                    <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgparallax=\"10\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"images/main-slider/image-2.jpg\"> 

                    

                    <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['50','15','15','15']\"

                    data-voffset=\"['65','65','65','65']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"border-curve\"></div>

                    </div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['-70','-70','-130','-130']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"title\">The mind is primary</div>

                    </div>

\t\t\t\t\t

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['10','10','-40','-60']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<h1>Fitness Club</h1>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['95','95','55','20']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"text\">wake up. it’s time to change</div>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['180','180','150','110']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"btns-box\">

                    \t\t<div class=\"btn-one-outer\"><a href=\"#\" class=\"theme-btn btn-style-one\"><span class=\"txt\">Join Us Now</span></a></div>

                        </div>

                    </div>

                    

                    </li>

                    

                </ul>

            </div>

        </div>

\t\t

\t\t<!-- Social Box -->

\t\t<div class=\"social-box\">

\t\t\t<ul>

\t\t\t\t<li class=\"share\"><span class=\"icon fa fa-share\"></span></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-twitter\"></a></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-google\"></a></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-whatsapp\"></a></li>

\t\t\t</ul>

\t\t</div>

\t\t

    </section>

    <!--End Main Slider-->

\t

\t<!-- Services Section -->

\t<section class=\"services-section\">

\t\t<div class=\"side-text\">GYM</div>

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Service Block -->

\t\t\t\t<div class=\"service-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t<div class=\"icon-box\">

\t\t\t\t\t\t\t<span class=\"icon flaticon-tools-and-utensils\"></span>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4><a href=\"classes-detail.html\">Progression</a></h4>

\t\t\t\t\t\t<div class=\"text\">The point of using Lorem Ipsum is that it has pi motive re-or-less for normal distribution.</div>

\t\t\t\t\t\t<span class=\"big-icon flaticon-tools-and-utensils\"></span>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Service Block -->

\t\t\t\t<div class=\"service-block style-two col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t<div class=\"icon-box\">

\t\t\t\t\t\t\t<span class=\"icon flaticon-sports\"></span>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4><a href=\"classes-detail.html\">Workout</a></h4>

\t\t\t\t\t\t<div class=\"text\">The point of using Lorem Ipsum is that it has pi motive re-or-less for normal distribution.</div>

\t\t\t\t\t\t<span class=\"big-icon flaticon-sports\"></span>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Service Block -->

\t\t\t\t<div class=\"service-block style-three col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t<div class=\"icon-box\">

\t\t\t\t\t\t\t<span class=\"icon flaticon-plan\"></span>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4><a href=\"classes-detail.html\">Nutrition</a></h4>

\t\t\t\t\t\t<div class=\"text\">The point of using Lorem Ipsum is that it has pi motive re-or-less for normal distribution.</div>

\t\t\t\t\t\t<span class=\"big-icon flaticon-plan\"></span>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- About Section -->

\t

\t<!-- About Section -->

\t<section class=\"about-section\">

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Content Column -->

\t\t\t\t<div class=\"content-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Fitness All About</div>

\t\t\t\t\t\t\t<h2>What is Functional</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"red-text\">Kick your feet up! With a gym designed around you, <br> we think you’ll love it here.</div>

\t\t\t\t\t\t<div class=\"text\">Our state of the art gyms provide you with a great place to work out in, whether you are there to burn off some calories or are training for something more specific. Why not visit your nearest Gym Center and take a look? We’re here to help you!</div>

\t\t\t\t\t\t<!-- Featured Block -->

\t\t\t\t\t\t<div class=\"featured-block\">

\t\t\t\t\t\t\t<div class=\"block-inner\">

\t\t\t\t\t\t\t\t<span class=\"icon flaticon-people\"></span>

\t\t\t\t\t\t\t\t<strong>Free Fitness Training</strong>

\t\t\t\t\t\t\t\t<div class=\"feature-text\">Train with the best experts in bodybuilding field.</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Featured Block -->

\t\t\t\t\t\t<div class=\"featured-block\">

\t\t\t\t\t\t\t<div class=\"block-inner\">

\t\t\t\t\t\t\t\t<span class=\"icon flaticon-stationary-bike\"></span>

\t\t\t\t\t\t\t\t<strong>Cardio and Strength</strong>

\t\t\t\t\t\t\t\t<div class=\"feature-text\">Our personal trainers will help you find a perfect workout.</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Image Column -->

\t\t\t\t<div class=\"image-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column wow fadeInRight\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"award\"><img src=\"images/resource/award.png\" alt=\"\" /></div>

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<img src=\"images/resource/about-1.png\" alt=\"\" />

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End About Section -->

\t

\t<!-- Team Section -->

\t<section class=\"team-section\">

\t\t<div class=\"side-text\">Trainer</div>

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t<div class=\"sec-title light centered\">

\t\t\t\t<div class=\"title\">Team Staff</div>

\t\t\t\t<h2>Team of Expert <br> Coaches</h2>

\t\t\t</div>

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Team Block -->

\t\t\t\t<div class=\"team-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInLeft\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/resource/team-1.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<div class=\"title\">Crossfit Coach</div>

\t\t\t\t\t\t\t<a href=\"team.html\" class=\"name\">MATIE JUNIOR</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"shared-boxed\">

\t\t\t\t\t\t\t<div class=\"shared-inner\">

\t\t\t\t\t\t\t\t<span class=\"share-now fa fa-share-alt\"></span>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-facebook\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-dribbble\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-behance\"></span></a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Team Block -->

\t\t\t\t<div class=\"team-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/resource/team-2.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<div class=\"title\">Bodybuilding Coach</div>

\t\t\t\t\t\t\t<a href=\"team.html\" class=\"name\">Steve Cross</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"shared-boxed\">

\t\t\t\t\t\t\t<div class=\"shared-inner\">

\t\t\t\t\t\t\t\t<span class=\"share-now fa fa-share-alt\"></span>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-facebook\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-dribbble\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-behance\"></span></a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Team Block -->

\t\t\t\t<div class=\"team-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInRight\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/resource/team-3.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<div class=\"title\">Cardio & Conditioning</div>

\t\t\t\t\t\t\t<a href=\"team.html\" class=\"name\">MAdona FRON</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"shared-boxed\">

\t\t\t\t\t\t\t<div class=\"shared-inner\">

\t\t\t\t\t\t\t\t<span class=\"share-now fa fa-share-alt\"></span>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-facebook\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-dribbble\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-behance\"></span></a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End Team Section -->

\t

\t<!-- Testimonials Section -->

    <section class=\"testimonials-thumbs-carousel\">

    \t<div class=\"auto-container\">

        \t

\t\t\t<!-- Carousel Wrapper -->

\t\t\t<div id=\"carousel-thumb\" class=\"carousel slide carousel-thumbnails\" data-ride=\"carousel\">

\t\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t\t<div class=\"carousel-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Testimonial</div>

\t\t\t\t\t\t\t<h2>REviews From <br> You</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Slides -->

\t\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">

\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item active\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Slides -->

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Controls -->

\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"prev\">

\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>

\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>

\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"next\">

\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>

\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>

\t\t\t\t\t\t</a>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"pagers-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t\t<!-- Controls-->

\t\t\t\t\t\t<ol class=\"carousel-indicators\">

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"0\" class=\"active\"> <div class=\"image\"><img src=\"images/resource/author-1.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"1\"><div class=\"image\"><img src=\"images/resource/author-2.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"2\"><div class=\"image\"><img src=\"images/resource/author-3.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"3\"><div class=\"image\"><img src=\"images/resource/author-4.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t</ol>

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t</div>

\t\t\t</div>

\t\t\t    

        </div>

    </section>

\t<!-- End Testimonials Section -->

\t

\t<!-- Video Section -->

\t<section class=\"video-section\">

\t\t<div class=\"side-text\">Video</div>

\t\t<div class=\"outer-container\">

\t\t\t<div class=\"inner-container\">

\t\t\t\t<!--Video Box-->

\t\t\t\t<div class=\"video-box\">

\t\t\t\t\t<figure class=\"video-image\">

\t\t\t\t\t\t<img src=\"images/resource/video-img.jpg\" alt=\"\">

\t\t\t\t\t</figure>

\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=kxPCFljwJws\" class=\"lightbox-image overlay-box\"><span class=\"flaticon-play-arrow\"><i class=\"ripple\"></i></span></a>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Video Section -->

\t

\t<!-- Calculate Section -->

\t<section class=\"calculate-section\">

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Form Column -->

\t\t\t\t<div class=\"form-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Body mass index</div>

\t\t\t\t\t\t\t<h2>What is your <br> Bmi</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t<div class=\"default-form\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/contact.html\">

\t\t\t\t\t\t\t\t<div class=\"row clearfix\">

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cm\" placeholder=\"185 Cm\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"weight\" placeholder=\"Weight / kg\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"age\" placeholder=\"Age\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6 col-md-6 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select-box\">

\t\t\t\t\t\t\t\t\t\t\t<option>Gender</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Male</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Female</option>

\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select-box\">

\t\t\t\t\t\t\t\t\t\t\t<option>Select an activity factor</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Factor 01</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Factor 02</option>

\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn-two-outer\"><button class=\"theme-btn btn-style-two\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Calculate</span></button></div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!--End Default Form -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Info Column -->

\t\t\t\t<div class=\"info-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"table-outer\">

\t\t\t\t\t\t\t<div class=\"table-boxed\">

\t\t\t\t\t\t\t\t<div class=\"table-content\">

\t\t\t\t\t\t\t\t\t<!-- Title -->

\t\t\t\t\t\t\t\t\t<div class=\"title clearfix\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col\">BMI</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col\">WEIGHT STATUS</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>Below 18.5</span>Underweight</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>18.5-24.9</span>Healthy</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>25.0-29.9</span>Overweight</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>30.0-and Above</span>Obese</li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"info-list\">

\t\t\t\t\t\t\t\t<div class=\"table-name\"><span>BMR</span> - Metabolic Rate</div>

\t\t\t\t\t\t\t\t<div class=\"table-name\"><span>BMI</span> - Body Mass Index</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End Calculate Section -->

\t

\t<!-- TimeTable Section -->

\t<section class=\"timetable-section\" style=\"";
        // line 1864
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/background/1.jpg"), "html", null, true);
        echo "\">

\t\t<div class=\"side-text\">Trainer</div>

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t<div class=\"sec-title light centered\">

\t\t\t\t<div class=\"title\">Time Table</div>

\t\t\t\t<h2>Working housr <br> & Classes</h2>

\t\t\t</div>

\t\t\t

\t\t\t<div class=\"inner-container\">

\t\t\t\t<div class=\"table-outer\">

\t\t\t\t\t<div class=\"table-inner\">

\t\t\t\t\t\t<!-- Table Title Box -->

\t\t\t\t\t\t<div class=\"table-title-box clearfix\">

\t\t\t\t\t\t\t<div class=\"title\">ALL EVENTS</div>

\t\t\t\t\t\t\t<div class=\"day\">MONDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">TUESDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">WEDNESDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">THURSDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">FRIDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">SATURDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">SUNDAY</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Timetable Tabs-->

\t\t\t\t\t\t<div class=\"timetable-tabs tabs-box\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!--Tab Btns-->

\t\t\t\t\t\t\t<ul class=\"tab-btns tab-buttons clearfix\">

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-cardio\" class=\"tab-btn active-btn\">CARDIO</li>

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-crossfit\" class=\"tab-btn\">CROSSFIT</li>

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-gym\" class=\"tab-btn\">GYM</li>

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-powerlifting\" class=\"tab-btn\">POWERLIFTING</li>

\t\t\t\t\t\t\t</ul>

\t\t\t\t\t

\t\t\t\t\t\t\t<!--Tabs Container-->

\t\t\t\t\t\t\t<div class=\"tabs-content\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab / Active Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab active-tab\" id=\"prod-cardio\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab\" id=\"prod-crossfit\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab\" id=\"prod-gym\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab\" id=\"prod-powerlifting\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t

\t\t</div>

\t</section>

\t<!-- End TimeTable Section -->

\t

\t<!-- News Section -->

\t<section class=\"news-section\">

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t<div class=\"sec-title centered\">

\t\t\t\t<div class=\"title\">Our Blog & Artical</div>

\t\t\t\t<h2>Latest News <br> Posts</h2>

\t\t\t</div>

\t\t\t

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- News Block -->

\t\t\t\t<div class=\"news-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInLeft\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"blog-single.html\"><img src=\"images/resource/news-1.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t\t<div class=\"post-date\">21<span>JUN</span></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lower-content\">

\t\t\t\t\t\t\t<h4><a href=\"blog-single.html\">Push Your Fitness Further With Facilities</a></h4>

\t\t\t\t\t\t\t<div class=\"text\">at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis accusamus et </div>

\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><a href=\"blog-single.html\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Read More</span></a></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- News Block -->

\t\t\t\t<div class=\"news-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"blog-single.html\"><img src=\"images/resource/news-2.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t\t<div class=\"post-date\">25<span>mar</span></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lower-content\">

\t\t\t\t\t\t\t<h4><a href=\"blog-single.html\">How to keep your Body HEALTHY IN OVER FESTIVAL</a></h4>

\t\t\t\t\t\t\t<div class=\"text\">at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis accusamus et </div>

\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><a href=\"blog-single.html\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Read More</span></a></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- News Block -->

\t\t\t\t<div class=\"news-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInRight\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"blog-single.html\"><img src=\"images/resource/news-3.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t\t<div class=\"post-date\">18<span>sep</span></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lower-content\">

\t\t\t\t\t\t\t<h4><a href=\"blog-single.html\">GIVE YOUR FITNESS A BOOST WITH OUR GYM CHALLENGE</a></h4>

\t\t\t\t\t\t\t<div class=\"text\">at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis accusamus et </div>

\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><a href=\"blog-single.html\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Read More</span></a></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t\t

\t\t</div>

\t</section>

\t<!-- End News Section -->

\t

\t<!-- Contact Map Section -->

\t<section class=\"contact-map-section\">

\t\t<!-- Map Boxed -->

\t\t<div class=\"map-boxed\">

\t\t\t<!--Map Outer-->

\t\t\t<div class=\"map-outer\">

\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s\" height=\"550\" ></iframe>

\t\t\t</div>

\t\t</div>

\t\t

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"map-info-boxed\">

\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t<!-- Column -->

\t\t\t\t\t<div class=\"image-column col-lg-5 col-md-12 col-sm-12\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<img src=\"images/resource/info.jpg\" alt=\"\" />

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<!-- Column -->

\t\t\t\t\t<div class=\"info-column col-lg-7 col-md-12 col-sm-12\">

\t\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t<span class=\"icon flaticon-location-2\"></span>

\t\t\t\t\t\t\t\t\t<strong>Location</strong>

\t\t\t\t\t\t\t\t\t27 Division St, New York, USA

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t<span class=\"icon flaticon-call-2\"></span>

\t\t\t\t\t\t\t\t\t<strong>Contact</strong>

\t\t\t\t\t\t\t\t\t<a href=\"tel:+1-044-123-456-789\">+1 (044) 123 456 789</a>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t<span class=\"icon flaticon-email-1\"></span>

\t\t\t\t\t\t\t\t\t<strong>Email</strong>

\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@example.com\">info@example.com</a>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t\t

\t</section>

\t<!-- End Contact Section -->

\t

\t<!-- Contact Form Section -->

\t<section class=\"contact-form-section\">

\t\t<div class=\"auto-container\">

\t\t

\t\t\t<div class=\"row clearfix\">

\t\t\t

\t\t\t\t<!-- Title Column -->

\t\t\t\t<div class=\"title-column col-lg-4 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Contact Now</div>

\t\t\t\t\t\t\t<h2>Ask Us <br> Anything</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"text\">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Form Column -->

\t\t\t\t<div class=\"form-column col-lg-8 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t<div class=\"default-form style-two\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/contact.html\">

\t\t\t\t\t\t\t\t<div class=\"row clearfix\">

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" placeholder=\"Name\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" placeholder=\"Subject\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Your Message write hear\"></textarea>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">SEND MESSAGE</span></button></div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!--End Default Form -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End Contact Form Section -->

\t

\t<!-- Clients Section -->

    <section class=\"clients-section\">

        <div class=\"auto-container\">

            

            <div class=\"sponsors-outer\">

                <!--Sponsors Carousel-->

                <ul class=\"sponsors-carousel owl-carousel owl-theme\">

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/1.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/2.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/3.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/4.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/5.png\" alt=\"\"></a></figure></li>

\t\t\t\t\t<li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/1.png\" alt=\"\"></a></figure></li>

\t\t\t\t\t<li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/2.png\" alt=\"\"></a></figure></li>

\t\t\t\t\t<li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/3.png\" alt=\"\"></a></figure></li>

                </ul>

            </div>

            

        </div>

    </section>

    <!-- End Clients Section -->

\t

\t<!-- Main Footer -->

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





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1948 => 1864,  308 => 227,  304 => 226,  289 => 214,  276 => 204,  249 => 180,  245 => 179,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}







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

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Remise en Forme</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path ('listprog') }}\">Nos Programmes</a></li>
                                        <li><a href=\"{{path ('ajouterCons') }}\">Nos Consultations</a></li>
\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Cours</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes.html\">Classes</a></li>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Parc Enfant</a>

\t\t\t\t\t\t\t\t\t<ul>


\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path ('listactivites') }}\">Activite</a></li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path('listproduit')}}\">Our Products</a></li>

\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Forum</a>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{path ('listblg') }}\">Notre Blog</a></li>
                                        <li><a href=\"{{path ('ajouterCom') }}\">Nos Commentaires</a></li>
\t\t\t\t\t\t\t\t\t

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

\t<!--Main Slider-->

    <section class=\"main-slider\">

    \t

        <div class=\"rev_slider_wrapper fullwidthbanner-container\"  id=\"rev_slider_one_wrapper\" data-source=\"gallery\">

            <div class=\"rev_slider fullwidthabanner\" id=\"rev_slider_one\" data-version=\"5.4.1\">

                <ul>

                

                \t<li data-description=\"Slide Description\" data-easein=\"default\" data-easeout=\"default\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-fstransition=\"fade\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-1688\" data-masterspeed=\"default\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-thumb=\"images/main-slider/image-1.jpg\" data-title=\"Slide Title\" data-transition=\"parallaxvertical\">

                    <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgparallax=\"10\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"images/main-slider/image-1.jpg\"> 

                    

\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['50','15','15','15']\"

                    data-voffset=\"['65','65','65','65']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"border-curve\"></div>

                    </div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['-70','-70','-130','-130']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"title\">The mind is primary</div>

                    </div>

\t\t\t\t\t

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['10','10','-40','-60']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<h1>Fitness Club</h1>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['95','95','55','20']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"text\">wake up. it’s time to change</div>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['180','180','150','110']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"btns-box\">

                    \t\t<div class=\"btn-one-outer\"><a href=\"#\" class=\"theme-btn btn-style-one\"><span class=\"txt\">Join Us Now</span></a></div>

                        </div>

                    </div>

                    

                    </li>

                    

                    <li data-description=\"Slide Description\" data-easein=\"default\" data-easeout=\"default\" data-fsmasterspeed=\"1500\" data-fsslotamount=\"7\" data-fstransition=\"fade\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\" data-index=\"rs-1689\" data-masterspeed=\"default\" data-param1=\"\" data-param10=\"\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-rotate=\"0\" data-saveperformance=\"off\" data-slotamount=\"default\" data-thumb=\"images/main-slider/image-2.jpg\" data-title=\"Slide Title\" data-transition=\"parallaxvertical\">

                    <img alt=\"\" class=\"rev-slidebg\" data-bgfit=\"cover\" data-bgparallax=\"10\" data-bgposition=\"center center\" data-bgrepeat=\"no-repeat\" data-no-retina=\"\" src=\"images/main-slider/image-2.jpg\"> 

                    

                    <div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['50','15','15','15']\"

                    data-voffset=\"['65','65','65','65']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"border-curve\"></div>

                    </div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"tp-caption tp-shape tp-shapewrapper tp-resizeme\"

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"shape\"

                    data-height=\"auto\"

                    data-whitespace=\"nowrap\"

                    data-width=\"['660','1000','750','550']\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['-70','-70','-130','-130']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-frames='[{\"from\":\"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1000,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"title\">The mind is primary</div>

                    </div>

\t\t\t\t\t

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['10','10','-40','-60']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<h1>Fitness Club</h1>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['95','95','55','20']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"text\">wake up. it’s time to change</div>

                    </div>

                    

                    <div class=\"tp-caption\" 

                    data-paddingbottom=\"[0,0,0,0]\"

                    data-paddingleft=\"[0,0,0,0]\"

                    data-paddingright=\"[0,0,0,0]\"

                    data-paddingtop=\"[0,0,0,0]\"

                    data-responsive_offset=\"on\"

                    data-type=\"text\"

                    data-height=\"none\"

                    data-width=\"['660','1000','750','550']\"

                    data-whitespace=\"normal\"

                    data-hoffset=\"['15','15','15','15']\"

                    data-voffset=\"['180','180','150','110']\"

                    data-x=\"['right','left','left','left']\"

                    data-y=\"['middle','middle','middle','middle']\"

                    data-textalign=\"['top','top','top','top']\"

                    data-frames='[{\"from\":\"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;\",\"mask\":\"x:0px;y:0px;s:inherit;e:inherit;\",\"speed\":1500,\"to\":\"o:1;\",\"delay\":1000,\"ease\":\"Power3.easeInOut\"},{\"delay\":\"wait\",\"speed\":1000,\"to\":\"auto:auto;\",\"mask\":\"x:0;y:0;s:inherit;e:inherit;\",\"ease\":\"Power3.easeInOut\"}]'>

                    \t<div class=\"btns-box\">

                    \t\t<div class=\"btn-one-outer\"><a href=\"#\" class=\"theme-btn btn-style-one\"><span class=\"txt\">Join Us Now</span></a></div>

                        </div>

                    </div>

                    

                    </li>

                    

                </ul>

            </div>

        </div>

\t\t

\t\t<!-- Social Box -->

\t\t<div class=\"social-box\">

\t\t\t<ul>

\t\t\t\t<li class=\"share\"><span class=\"icon fa fa-share\"></span></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-twitter\"></a></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-google\"></a></li>

\t\t\t\t<li><a href=\"#\" class=\"fa fa-whatsapp\"></a></li>

\t\t\t</ul>

\t\t</div>

\t\t

    </section>

    <!--End Main Slider-->

\t

\t<!-- Services Section -->

\t<section class=\"services-section\">

\t\t<div class=\"side-text\">GYM</div>

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Service Block -->

\t\t\t\t<div class=\"service-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t<div class=\"icon-box\">

\t\t\t\t\t\t\t<span class=\"icon flaticon-tools-and-utensils\"></span>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4><a href=\"classes-detail.html\">Progression</a></h4>

\t\t\t\t\t\t<div class=\"text\">The point of using Lorem Ipsum is that it has pi motive re-or-less for normal distribution.</div>

\t\t\t\t\t\t<span class=\"big-icon flaticon-tools-and-utensils\"></span>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Service Block -->

\t\t\t\t<div class=\"service-block style-two col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t<div class=\"icon-box\">

\t\t\t\t\t\t\t<span class=\"icon flaticon-sports\"></span>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4><a href=\"classes-detail.html\">Workout</a></h4>

\t\t\t\t\t\t<div class=\"text\">The point of using Lorem Ipsum is that it has pi motive re-or-less for normal distribution.</div>

\t\t\t\t\t\t<span class=\"big-icon flaticon-sports\"></span>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Service Block -->

\t\t\t\t<div class=\"service-block style-three col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t<div class=\"icon-box\">

\t\t\t\t\t\t\t<span class=\"icon flaticon-plan\"></span>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<h4><a href=\"classes-detail.html\">Nutrition</a></h4>

\t\t\t\t\t\t<div class=\"text\">The point of using Lorem Ipsum is that it has pi motive re-or-less for normal distribution.</div>

\t\t\t\t\t\t<span class=\"big-icon flaticon-plan\"></span>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- About Section -->

\t

\t<!-- About Section -->

\t<section class=\"about-section\">

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Content Column -->

\t\t\t\t<div class=\"content-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Fitness All About</div>

\t\t\t\t\t\t\t<h2>What is Functional</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"red-text\">Kick your feet up! With a gym designed around you, <br> we think you’ll love it here.</div>

\t\t\t\t\t\t<div class=\"text\">Our state of the art gyms provide you with a great place to work out in, whether you are there to burn off some calories or are training for something more specific. Why not visit your nearest Gym Center and take a look? We’re here to help you!</div>

\t\t\t\t\t\t<!-- Featured Block -->

\t\t\t\t\t\t<div class=\"featured-block\">

\t\t\t\t\t\t\t<div class=\"block-inner\">

\t\t\t\t\t\t\t\t<span class=\"icon flaticon-people\"></span>

\t\t\t\t\t\t\t\t<strong>Free Fitness Training</strong>

\t\t\t\t\t\t\t\t<div class=\"feature-text\">Train with the best experts in bodybuilding field.</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Featured Block -->

\t\t\t\t\t\t<div class=\"featured-block\">

\t\t\t\t\t\t\t<div class=\"block-inner\">

\t\t\t\t\t\t\t\t<span class=\"icon flaticon-stationary-bike\"></span>

\t\t\t\t\t\t\t\t<strong>Cardio and Strength</strong>

\t\t\t\t\t\t\t\t<div class=\"feature-text\">Our personal trainers will help you find a perfect workout.</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Image Column -->

\t\t\t\t<div class=\"image-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column wow fadeInRight\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"award\"><img src=\"images/resource/award.png\" alt=\"\" /></div>

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<img src=\"images/resource/about-1.png\" alt=\"\" />

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End About Section -->

\t

\t<!-- Team Section -->

\t<section class=\"team-section\">

\t\t<div class=\"side-text\">Trainer</div>

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t<div class=\"sec-title light centered\">

\t\t\t\t<div class=\"title\">Team Staff</div>

\t\t\t\t<h2>Team of Expert <br> Coaches</h2>

\t\t\t</div>

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Team Block -->

\t\t\t\t<div class=\"team-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInLeft\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/resource/team-1.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<div class=\"title\">Crossfit Coach</div>

\t\t\t\t\t\t\t<a href=\"team.html\" class=\"name\">MATIE JUNIOR</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"shared-boxed\">

\t\t\t\t\t\t\t<div class=\"shared-inner\">

\t\t\t\t\t\t\t\t<span class=\"share-now fa fa-share-alt\"></span>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-facebook\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-dribbble\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-behance\"></span></a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Team Block -->

\t\t\t\t<div class=\"team-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/resource/team-2.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<div class=\"title\">Bodybuilding Coach</div>

\t\t\t\t\t\t\t<a href=\"team.html\" class=\"name\">Steve Cross</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"shared-boxed\">

\t\t\t\t\t\t\t<div class=\"shared-inner\">

\t\t\t\t\t\t\t\t<span class=\"share-now fa fa-share-alt\"></span>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-facebook\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-dribbble\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-behance\"></span></a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Team Block -->

\t\t\t\t<div class=\"team-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInRight\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/resource/team-3.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t<div class=\"title\">Cardio & Conditioning</div>

\t\t\t\t\t\t\t<a href=\"team.html\" class=\"name\">MAdona FRON</a>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"shared-boxed\">

\t\t\t\t\t\t\t<div class=\"shared-inner\">

\t\t\t\t\t\t\t\t<span class=\"share-now fa fa-share-alt\"></span>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-facebook\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-dribbble\"></span></a>

\t\t\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-behance\"></span></a>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End Team Section -->

\t

\t<!-- Testimonials Section -->

    <section class=\"testimonials-thumbs-carousel\">

    \t<div class=\"auto-container\">

        \t

\t\t\t<!-- Carousel Wrapper -->

\t\t\t<div id=\"carousel-thumb\" class=\"carousel slide carousel-thumbnails\" data-ride=\"carousel\">

\t\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t\t<div class=\"carousel-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Testimonial</div>

\t\t\t\t\t\t\t<h2>REviews From <br> You</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Slides -->

\t\t\t\t\t\t<div class=\"carousel-inner\" role=\"listbox\">

\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item active\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<div class=\"carousel-item\">

\t\t\t\t\t\t\t\t<div class=\"testimonial-block\">

\t\t\t\t\t\t\t\t\t<div class=\"inner-box\">

\t\t\t\t\t\t\t\t\t\t<div class=\"title\">Nutritionist</div>

\t\t\t\t\t\t\t\t\t\t<h4>Mellisa Martinez</h4>

\t\t\t\t\t\t\t\t\t\t<div class=\"rating\">

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-star\"></span>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"quote-icon flaticon-right-quote\"></div>

\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. </div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Slides -->

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Controls -->

\t\t\t\t\t\t<a class=\"carousel-control-prev\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"prev\">

\t\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>

\t\t\t\t\t\t\t<span class=\"sr-only\">Previous</span>

\t\t\t\t\t\t</a>

\t\t\t\t\t\t<a class=\"carousel-control-next\" href=\"#carousel-thumb\" role=\"button\" data-slide=\"next\">

\t\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>

\t\t\t\t\t\t\t<span class=\"sr-only\">Next</span>

\t\t\t\t\t\t</a>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t\t<div class=\"pagers-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t\t<!-- Controls-->

\t\t\t\t\t\t<ol class=\"carousel-indicators\">

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"0\" class=\"active\"> <div class=\"image\"><img src=\"images/resource/author-1.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"1\"><div class=\"image\"><img src=\"images/resource/author-2.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"2\"><div class=\"image\"><img src=\"images/resource/author-3.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t\t<li data-target=\"#carousel-thumb\" data-slide-to=\"3\"><div class=\"image\"><img src=\"images/resource/author-4.jpg\" alt=\"\"></div></li>

\t\t\t\t\t\t</ol>

\t\t\t\t\t</div>

\t\t\t\t\t

\t\t\t\t</div>

\t\t\t</div>

\t\t\t    

        </div>

    </section>

\t<!-- End Testimonials Section -->

\t

\t<!-- Video Section -->

\t<section class=\"video-section\">

\t\t<div class=\"side-text\">Video</div>

\t\t<div class=\"outer-container\">

\t\t\t<div class=\"inner-container\">

\t\t\t\t<!--Video Box-->

\t\t\t\t<div class=\"video-box\">

\t\t\t\t\t<figure class=\"video-image\">

\t\t\t\t\t\t<img src=\"images/resource/video-img.jpg\" alt=\"\">

\t\t\t\t\t</figure>

\t\t\t\t\t<a href=\"https://www.youtube.com/watch?v=kxPCFljwJws\" class=\"lightbox-image overlay-box\"><span class=\"flaticon-play-arrow\"><i class=\"ripple\"></i></span></a>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- Video Section -->

\t

\t<!-- Calculate Section -->

\t<section class=\"calculate-section\">

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- Form Column -->

\t\t\t\t<div class=\"form-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Body mass index</div>

\t\t\t\t\t\t\t<h2>What is your <br> Bmi</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t<div class=\"default-form\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/contact.html\">

\t\t\t\t\t\t\t\t<div class=\"row clearfix\">

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"cm\" placeholder=\"185 Cm\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"weight\" placeholder=\"Weight / kg\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"age\" placeholder=\"Age\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-6 col-md-6 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select-box\">

\t\t\t\t\t\t\t\t\t\t\t<option>Gender</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Male</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Female</option>

\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<select class=\"custom-select-box\">

\t\t\t\t\t\t\t\t\t\t\t<option>Select an activity factor</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Factor 01</option>

\t\t\t\t\t\t\t\t\t\t\t<option>Factor 02</option>

\t\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn-two-outer\"><button class=\"theme-btn btn-style-two\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Calculate</span></button></div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!--End Default Form -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Info Column -->

\t\t\t\t<div class=\"info-column col-lg-6 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t

\t\t\t\t\t\t<div class=\"table-outer\">

\t\t\t\t\t\t\t<div class=\"table-boxed\">

\t\t\t\t\t\t\t\t<div class=\"table-content\">

\t\t\t\t\t\t\t\t\t<!-- Title -->

\t\t\t\t\t\t\t\t\t<div class=\"title clearfix\">

\t\t\t\t\t\t\t\t\t\t<div class=\"col\">BMI</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col\">WEIGHT STATUS</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>Below 18.5</span>Underweight</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>18.5-24.9</span>Healthy</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>25.0-29.9</span>Overweight</li>

\t\t\t\t\t\t\t\t\t\t<li class=\"clearfix\"><span>30.0-and Above</span>Obese</li>

\t\t\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"info-list\">

\t\t\t\t\t\t\t\t<div class=\"table-name\"><span>BMR</span> - Metabolic Rate</div>

\t\t\t\t\t\t\t\t<div class=\"table-name\"><span>BMI</span> - Body Mass Index</div>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End Calculate Section -->

\t

\t<!-- TimeTable Section -->

\t<section class=\"timetable-section\" style=\"{{asset('images/background/1.jpg')}}\">

\t\t<div class=\"side-text\">Trainer</div>

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t<div class=\"sec-title light centered\">

\t\t\t\t<div class=\"title\">Time Table</div>

\t\t\t\t<h2>Working housr <br> & Classes</h2>

\t\t\t</div>

\t\t\t

\t\t\t<div class=\"inner-container\">

\t\t\t\t<div class=\"table-outer\">

\t\t\t\t\t<div class=\"table-inner\">

\t\t\t\t\t\t<!-- Table Title Box -->

\t\t\t\t\t\t<div class=\"table-title-box clearfix\">

\t\t\t\t\t\t\t<div class=\"title\">ALL EVENTS</div>

\t\t\t\t\t\t\t<div class=\"day\">MONDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">TUESDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">WEDNESDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">THURSDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">FRIDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">SATURDAY</div>

\t\t\t\t\t\t\t<div class=\"day\">SUNDAY</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Timetable Tabs-->

\t\t\t\t\t\t<div class=\"timetable-tabs tabs-box\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!--Tab Btns-->

\t\t\t\t\t\t\t<ul class=\"tab-btns tab-buttons clearfix\">

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-cardio\" class=\"tab-btn active-btn\">CARDIO</li>

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-crossfit\" class=\"tab-btn\">CROSSFIT</li>

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-gym\" class=\"tab-btn\">GYM</li>

\t\t\t\t\t\t\t\t<li data-tab=\"#prod-powerlifting\" class=\"tab-btn\">POWERLIFTING</li>

\t\t\t\t\t\t\t</ul>

\t\t\t\t\t

\t\t\t\t\t\t\t<!--Tabs Container-->

\t\t\t\t\t\t\t<div class=\"tabs-content\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab / Active Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab active-tab\" id=\"prod-cardio\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab\" id=\"prod-crossfit\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab\" id=\"prod-gym\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t<!--Tab-->

\t\t\t\t\t\t\t\t<div class=\"tab\" id=\"prod-powerlifting\">

\t\t\t\t\t\t\t\t\t<div class=\"content\">

\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Cardio Burn <span>MAdona FRON <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Crossfit Class <span>Madison fren <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">Power Lifting <span>Steve Cross <br> 11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">GYM OPEN <span>11:00  -  12:00</span></div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t<!-- Time Box -->

\t\t\t\t\t\t\t\t\t\t\t<div class=\"time-box\">

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"box-inner\">

\t\t\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t

\t\t</div>

\t</section>

\t<!-- End TimeTable Section -->

\t

\t<!-- News Section -->

\t<section class=\"news-section\">

\t\t<div class=\"auto-container\">

\t\t\t<!-- Sec Title -->

\t\t\t<div class=\"sec-title centered\">

\t\t\t\t<div class=\"title\">Our Blog & Artical</div>

\t\t\t\t<h2>Latest News <br> Posts</h2>

\t\t\t</div>

\t\t\t

\t\t\t<div class=\"row clearfix\">

\t\t\t\t

\t\t\t\t<!-- News Block -->

\t\t\t\t<div class=\"news-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInLeft\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"blog-single.html\"><img src=\"images/resource/news-1.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t\t<div class=\"post-date\">21<span>JUN</span></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lower-content\">

\t\t\t\t\t\t\t<h4><a href=\"blog-single.html\">Push Your Fitness Further With Facilities</a></h4>

\t\t\t\t\t\t\t<div class=\"text\">at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis accusamus et </div>

\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><a href=\"blog-single.html\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Read More</span></a></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- News Block -->

\t\t\t\t<div class=\"news-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInUp\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"blog-single.html\"><img src=\"images/resource/news-2.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t\t<div class=\"post-date\">25<span>mar</span></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lower-content\">

\t\t\t\t\t\t\t<h4><a href=\"blog-single.html\">How to keep your Body HEALTHY IN OVER FESTIVAL</a></h4>

\t\t\t\t\t\t\t<div class=\"text\">at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis accusamus et </div>

\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><a href=\"blog-single.html\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Read More</span></a></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- News Block -->

\t\t\t\t<div class=\"news-block col-lg-4 col-md-6 col-sm-12\">

\t\t\t\t\t<div class=\"inner-box wow fadeInRight\" data-wow-delay=\"0ms\" data-wow-duration=\"1500ms\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<a href=\"blog-single.html\"><img src=\"images/resource/news-3.jpg\" alt=\"\" /></a>

\t\t\t\t\t\t\t<div class=\"post-date\">18<span>sep</span></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"lower-content\">

\t\t\t\t\t\t\t<h4><a href=\"blog-single.html\">GIVE YOUR FITNESS A BOOST WITH OUR GYM CHALLENGE</a></h4>

\t\t\t\t\t\t\t<div class=\"text\">at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis accusamus et </div>

\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><a href=\"blog-single.html\" class=\"theme-btn btn-style-three\"><span class=\"txt\">Read More</span></a></div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t\t

\t\t</div>

\t</section>

\t<!-- End News Section -->

\t

\t<!-- Contact Map Section -->

\t<section class=\"contact-map-section\">

\t\t<!-- Map Boxed -->

\t\t<div class=\"map-boxed\">

\t\t\t<!--Map Outer-->

\t\t\t<div class=\"map-outer\">

\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25216.765666144616!2d144.9456413371385!3d-37.8112271492458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b8c21cb29b%3A0x1c045678462e3510!2sMelbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2s!4v1598513355690!5m2!1sen!2s\" height=\"550\" ></iframe>

\t\t\t</div>

\t\t</div>

\t\t

\t\t<div class=\"auto-container\">

\t\t\t<div class=\"map-info-boxed\">

\t\t\t\t<div class=\"clearfix\">

\t\t\t\t\t<!-- Column -->

\t\t\t\t\t<div class=\"image-column col-lg-5 col-md-12 col-sm-12\">

\t\t\t\t\t\t<div class=\"image\">

\t\t\t\t\t\t\t<img src=\"images/resource/info.jpg\" alt=\"\" />

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<!-- Column -->

\t\t\t\t\t<div class=\"info-column col-lg-7 col-md-12 col-sm-12\">

\t\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t<span class=\"icon flaticon-location-2\"></span>

\t\t\t\t\t\t\t\t\t<strong>Location</strong>

\t\t\t\t\t\t\t\t\t27 Division St, New York, USA

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t<span class=\"icon flaticon-call-2\"></span>

\t\t\t\t\t\t\t\t\t<strong>Contact</strong>

\t\t\t\t\t\t\t\t\t<a href=\"tel:+1-044-123-456-789\">+1 (044) 123 456 789</a>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t\t<span class=\"icon flaticon-email-1\"></span>

\t\t\t\t\t\t\t\t\t<strong>Email</strong>

\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@example.com\">info@example.com</a>

\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t\t

\t</section>

\t<!-- End Contact Section -->

\t

\t<!-- Contact Form Section -->

\t<section class=\"contact-form-section\">

\t\t<div class=\"auto-container\">

\t\t

\t\t\t<div class=\"row clearfix\">

\t\t\t

\t\t\t\t<!-- Title Column -->

\t\t\t\t<div class=\"title-column col-lg-4 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t<!-- Sec Title -->

\t\t\t\t\t\t<div class=\"sec-title\">

\t\t\t\t\t\t\t<div class=\"title\">Contact Now</div>

\t\t\t\t\t\t\t<h2>Ask Us <br> Anything</h2>

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"text\">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</div>

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t\t<!-- Form Column -->

\t\t\t\t<div class=\"form-column col-lg-8 col-md-12 col-sm-12\">

\t\t\t\t\t<div class=\"inner-column\">

\t\t\t\t\t\t

\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t<div class=\"default-form style-two\">

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!-- Default Form -->

\t\t\t\t\t\t\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/contact.html\">

\t\t\t\t\t\t\t\t<div class=\"row clearfix\">

\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"username\" placeholder=\"Name\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 col-md-6 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12 col-md-12 col-sm-12 form-group\">

\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"subject\" placeholder=\"Subject\" required>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<textarea name=\"message\" placeholder=\"Your Message write hear\"></textarea>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<div class=\"form-group clearfix col-lg-12 col-md-12 col-sm-12\">

\t\t\t\t\t\t\t\t\t\t<div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">SEND MESSAGE</span></button></div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</form>

\t\t\t\t\t\t\t

\t\t\t\t\t\t\t<!--End Default Form -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t

\t\t\t</div>

\t\t</div>

\t</section>

\t<!-- End Contact Form Section -->

\t

\t<!-- Clients Section -->

    <section class=\"clients-section\">

        <div class=\"auto-container\">

            

            <div class=\"sponsors-outer\">

                <!--Sponsors Carousel-->

                <ul class=\"sponsors-carousel owl-carousel owl-theme\">

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/1.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/2.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/3.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/4.png\" alt=\"\"></a></figure></li>

                    <li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/5.png\" alt=\"\"></a></figure></li>

\t\t\t\t\t<li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/1.png\" alt=\"\"></a></figure></li>

\t\t\t\t\t<li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/2.png\" alt=\"\"></a></figure></li>

\t\t\t\t\t<li class=\"slide-item\"><figure class=\"image-box\"><a href=\"#\"><img src=\"images/clients/3.png\" alt=\"\"></a></figure></li>

                </ul>

            </div>

            

        </div>

    </section>

    <!-- End Clients Section -->

\t

\t<!-- Main Footer -->

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





{% endblock %}", "client/index.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\client\\index.html.twig");
    }
}
