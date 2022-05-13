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

/* commentaire/affiche.html.twig */
class __TwigTemplate_14c7f41c83957067263ec602538f13ca373fe6c72fafe1719f4f639c23984d22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commentaire/affiche.html.twig", 1);
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

<!-- Mirrored from View/html/gym/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:10 GMT -->
<head>
<meta charset=\"utf-8\">
<title> ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "</title>

";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">

<link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

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
\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">detail Blog</a></li>
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
        </div>
\t\t<!-- End Mobile Menu -->
\t
    </header>
    <!-- End Main Header -->
\t
\t<!--Page Title-->
    <section class=\"page-title\" style=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/4.jpg"), "html", null, true);
        echo "\">
    \t<div class=\"auto-container\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"pull-left\"> 
\t\t\t\t\t<h2>Blog</h2>
\t\t\t\t\t<div class=\"text\">Fitness is not a destination it is a way of life.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<ul class=\"page-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t<li>Blog</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        </div>
        <div class=\"row\">
                                <div class=\"col-md-12  align-self-center\">
                                    <div class=\"card bg-white mb-6\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Gestion des Activites</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover\">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th class=\"border-top-0\">ID_com</th>
                                                            <th class=\"border-top-0\">Nom_c</th>
                                                            <th class=\"border-top-0\">Email</th>
                                                            <th class=\"border-top-0\">Message</th>                                    
                                                            <th class=\"border-top-0\">Date</th>
                                                            <th class=\"border-top-0\">Nom_article</th> 
                                                            <th class=\"border-top-0\">Id_b</th>                                            
                                                            <th class=\"border-top-0\">Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                                                          
                                                       
                                                        
                                                        ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 250, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 251
            echo "            <tr>
                      <td>";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "idCom", [], "any", false, false, false, 252), "html", null, true);
            echo "</td>
                <td>";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nomC", [], "any", false, false, false, 253), "html", null, true);
            echo "</td>
                <td>";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "email", [], "any", false, false, false, 254), "html", null, true);
            echo "</td>
                <td>";
            // line 255
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "message", [], "any", false, false, false, 255), "html", null, true);
            echo "</td>
                 <td>";
            // line 256
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "date", [], "any", false, false, false, 256)), "html", null, true);
            echo "</td>
                <td>";
            // line 257
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commentaire"], "nomArticle", [], "any", false, false, false, 257), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_show", ["idCom" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idCom", [], "any", false, false, false, 259)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifier", ["idCom" => twig_get_attribute($this->env, $this->source, $context["commentaire"], "idCom", [], "any", false, false, false, 260)]), "html", null, true);
            echo "\">edit</a>

                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 265
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 269
        echo "                                                        
                                                    </tbody>
                                                </table>
                           
                                            </div>
    </section>
    <!--End Page Title-->
\t
\t<!-- Portfolio Page Section -->
\t<section class=\"portfolio-page-section\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Gallery Block -->
\t\t\t\t<div class=\"gallery-block col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
            <br>
            <br>
            <br>
\t\t\t<!-- Post Share Options -->

            <!--
\t\t\t<div class=\"pagination-outer text-center\">
\t\t\t\t<div class=\"styled-pagination text-center\">
\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t<li class=\"prev\"><a href=\"#\"><span class=\"fa fa-angle-double-left\"></span> Prev</a></li>
\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t<li class=\"next\"><a href=\"#\">Next <span class=\"fa fa-angle-double-right\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t
  
\t</section>
\t<!-- End Portfolio Page Section -->
\t
   
\t<!-- Subscribe Section -->
    
\t<section class=\"subscribe-section\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"inner-container margin-bottom\">
            
\t\t\t\t<div class=\"pattern-layer\" style=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/background/7.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t\t<div class=\"section-image\" style=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/resource/newslatter.png"), "html", null, true);
        echo "\"></div>
\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t
\t\t\t\t\t<!-- Title Column -->
                    <!--
\t\t\t\t\t<div class=\"title-column col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t\t<h3>Don’t miss any updates <br> Get subscribed!</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t-->
\t\t\t\t\t<!-- Form Column -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Subscribe Section -->
\t
\t<!-- Main Footer -->
    <footer class=\"main-footer style-four\" style=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/background/2.jpg"), "html", null, true);
        echo "\">
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

<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>

";
        // line 549
        $this->displayBlock('javascripts', $context, $blocks);
        // line 574
        echo "
</body>

<!-- Mirrored from View/html/gym/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:23 GMT -->
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
        echo "    Epicode
";
        
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
        echo "    

<!-- Stylesheets -->
<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Color Switcher Mockup -->
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color-switcher-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<!-- Color Themes -->
<link id=\"theme-color-file\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/color-themes/default-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 549
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 550
        echo "    

<script src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.mCustomScrollbar.concat.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/appear.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/parallax.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tilt.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 561
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.paroller.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nav-tool.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 565
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 566
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 567
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/color-settings.js"), "html", null, true);
        echo "\"></script>

<!--Google Map APi Key-->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o\"></script>
<script src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/map-script.js"), "html", null, true);
        echo "\"></script>
<!--End Google Map APi-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commentaire/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 571,  817 => 567,  813 => 566,  809 => 565,  805 => 564,  801 => 563,  797 => 562,  793 => 561,  789 => 560,  785 => 559,  781 => 558,  777 => 557,  773 => 556,  769 => 555,  765 => 554,  760 => 552,  756 => 550,  746 => 549,  733 => 27,  727 => 24,  721 => 21,  717 => 20,  712 => 18,  707 => 15,  697 => 14,  686 => 11,  676 => 10,  661 => 574,  659 => 549,  459 => 352,  435 => 331,  431 => 330,  368 => 269,  359 => 265,  349 => 260,  345 => 259,  340 => 257,  336 => 256,  332 => 255,  328 => 254,  324 => 253,  320 => 252,  317 => 251,  312 => 250,  268 => 209,  87 => 30,  85 => 14,  81 => 12,  79 => 10,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<!DOCTYPE html>
<html>

<!-- Mirrored from View/html/gym/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:10 GMT -->
<head>
<meta charset=\"utf-8\">
<title> {% block title %}
    Epicode
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

{% endblock %}
<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">

<link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">

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
\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Blog</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">detail Blog</a></li>
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
        </div>
\t\t<!-- End Mobile Menu -->
\t
    </header>
    <!-- End Main Header -->
\t
\t<!--Page Title-->
    <section class=\"page-title\" style=\"{{asset('images/4.jpg')}}\">
    \t<div class=\"auto-container\">
\t\t\t<div class=\"clearfix\">
\t\t\t\t<div class=\"pull-left\"> 
\t\t\t\t\t<h2>Blog</h2>
\t\t\t\t\t<div class=\"text\">Fitness is not a destination it is a way of life.</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t<ul class=\"page-breadcrumb\">
\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>
\t\t\t\t\t\t<li>Blog</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
        </div>
        <div class=\"row\">
                                <div class=\"col-md-12  align-self-center\">
                                    <div class=\"card bg-white mb-6\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Gestion des Activites</h5>
                                            <div class=\"table-responsive\">
                                                <table class=\"table table-hover\">
                                                    <thead>
                                                        <tr>
                                                            
                                                            <th class=\"border-top-0\">ID_com</th>
                                                            <th class=\"border-top-0\">Nom_c</th>
                                                            <th class=\"border-top-0\">Email</th>
                                                            <th class=\"border-top-0\">Message</th>                                    
                                                            <th class=\"border-top-0\">Date</th>
                                                            <th class=\"border-top-0\">Nom_article</th> 
                                                            <th class=\"border-top-0\">Id_b</th>                                            
                                                            <th class=\"border-top-0\">Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                                                          
                                                       
                                                        
                                                        {% for commentaire in commentaires %}
            <tr>
                      <td>{{ commentaire.idCom }}</td>
                <td>{{ commentaire.nomC }}</td>
                <td>{{ commentaire.email }}</td>
                <td>{{ commentaire.message }}</td>
                 <td>{{ commentaire.date | date }}</td>
                <td>{{ commentaire.nomArticle }}</td>
                <td>
                    <a href=\"{{ path('app_commentaire_show', {'idCom': commentaire.idCom}) }}\">show</a>
                    <a href=\"{{ path('modifier', {'idCom': commentaire.idCom}) }}\">edit</a>

                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
                                                        
                                                    </tbody>
                                                </table>
                           
                                            </div>
    </section>
    <!--End Page Title-->
\t
\t<!-- Portfolio Page Section -->
\t<section class=\"portfolio-page-section\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- Gallery Block -->
\t\t\t\t<div class=\"gallery-block col-lg-4 col-md-6 col-sm-12\">
\t\t\t\t\t<div class=\"inner-box\">
\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
            <br>
            <br>
            <br>
\t\t\t<!-- Post Share Options -->

            <!--
\t\t\t<div class=\"pagination-outer text-center\">
\t\t\t\t<div class=\"styled-pagination text-center\">
\t\t\t\t\t<ul class=\"clearfix\">
\t\t\t\t\t\t<li class=\"prev\"><a href=\"#\"><span class=\"fa fa-angle-double-left\"></span> Prev</a></li>
\t\t\t\t\t\t<li><a href=\"#\">1</a></li>
\t\t\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">3</a></li>
\t\t\t\t\t\t<li><a href=\"#\">4</a></li>
\t\t\t\t\t\t<li><a href=\"#\">5</a></li>
\t\t\t\t\t\t<li class=\"next\"><a href=\"#\">Next <span class=\"fa fa-angle-double-right\"></span></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t-->
\t\t
  
\t</section>
\t<!-- End Portfolio Page Section -->
\t
   
\t<!-- Subscribe Section -->
    
\t<section class=\"subscribe-section\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"inner-container margin-bottom\">
            
\t\t\t\t<div class=\"pattern-layer\" style=\"{{asset('images/background/7.jpg')}}\"></div>
\t\t\t\t<div class=\"section-image\" style=\"{{asset('images/resource/newslatter.png')}}\"></div>
\t\t\t\t<div class=\"row clearfix\">
\t\t\t\t\t
\t\t\t\t\t<!-- Title Column -->
                    <!--
\t\t\t\t\t<div class=\"title-column col-lg-6 col-md-12 col-sm-12\">
\t\t\t\t\t\t<div class=\"inner-column\">
\t\t\t\t\t\t\t<h3>Don’t miss any updates <br> Get subscribed!</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t-->
\t\t\t\t\t<!-- Form Column -->
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Subscribe Section -->
\t
\t<!-- Main Footer -->
    <footer class=\"main-footer style-four\" style=\"{{asset('images/background/2.jpg')}}\">
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

<!--Scroll to top-->
<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>

{% block javascripts %}
    

<script src=\"{{asset('js/jquery.js')}}\"></script>

<script src=\"{{asset('js/popper.min.js')}}\"></script>
<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.fancybox.js')}}\"></script>
<script src=\"{{asset('js/appear.js')}}\"></script>
<script src=\"{{asset('js/parallax.min.js')}}\"></script>
<script src=\"{{asset('js/tilt.jquery.min.js')}}\"></script>
<script src=\"{{asset('js/jquery.paroller.min.js')}}\"></script>
<script src=\"{{asset('js/owl.js')}}\"></script>
<script src=\"{{asset('js/wow.js')}}\"></script>
<script src=\"{{asset('js/nav-tool.js')}}\"></script>
<script src=\"{{asset('js/jquery-ui.js')}}\"></script>
<script src=\"{{asset('js/script.js')}}\"></script>
<script src=\"{{asset('js/color-settings.js')}}\"></script>

<!--Google Map APi Key-->
<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o\"></script>
<script src=\"{{asset('js/map-script.js')}}\"></script>
<!--End Google Map APi-->
{% endblock %}

</body>

<!-- Mirrored from View/html/gym/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:23 GMT -->
</html>
{% endblock %}", "commentaire/affiche.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\commentaire\\affiche.html.twig");
    }
}
