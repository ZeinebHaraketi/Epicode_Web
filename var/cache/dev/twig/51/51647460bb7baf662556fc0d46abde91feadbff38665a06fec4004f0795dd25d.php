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

/* blg/affiche.html.twig */
class __TwigTemplate_67b5a3baa39c0be20bdf2e7a751f387868be8784f73b0817788d1279a23ccd8a extends \Twig\Template
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
        // line 560
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blg/affiche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blg/affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blg/affiche.html.twig", 560);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 562
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "<div class=\"sidebar-page-container\">
\t<div class=\"auto-container\">
\t\t<div class=\"row clearfix\">

            <div class=\"sidebar-side col-lg-4 col-md-12 col-sm-12\">
                <aside class=\"sidebar sticky-top\">



                    <!-- Categories Widget -->
                    <div class=\"sidebar-widget categories-widget\">
                        <div class=\"sidebar-title\">
                            <h4>Categorie</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"blog-cat\">
                                <li><a href=\"#\">FITNESS <span>( 24 )</span></a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Search -->


                    <div class=\"sidebar-widget search-box\">
                        <form method=\"post\" action=\"contact.html\">
                            <div class=\"form-group\">
                                <input type=\"search\"  id=\"search\" name=\"search-field\" value=\"\" placeholder=\"Search.....\" required=\"\">
                                <button type=\"submit\"><span class=\"icon fa fa-search\"></span></button>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
            </ul>
            <!--Content Side-->
\t\t\t<div class=\"content-side col-lg-8 col-md-12 col-sm-12\">
\t\t\t\t<!-- Blog Classic -->
\t\t\t\t<div class=\"blog-classic\">

\t\t\t\t\t<!-- News Block Three -->
\t\t\t\t\t";
        // line 605
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["blg"]);
        foreach ($context['_seq'] as $context["_key"] => $context["blg"]) {
            // line 606
            echo "
                        <div class=\"news-block-three\">
                            <div class=\"inner-box\">
                                <div class=\"image\">
                                    <a href=\"blog-single.html\"><img src=\"";
            // line 610
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["blg"], "image", [], "any", false, false, false, 610))), "html", null, true);
            echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"lower-content\">
                                    <ul class=\"post-meta\">
                                        <li><span class=\"icon flaticon-folder\"></span> Categorie : ";
            // line 614
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blg"], "categorie", [], "any", false, false, false, 614), "html", null, true);
            echo "</li>
                                        <li><span class=\"icon flaticon-user-1\"></span> Auteur :";
            // line 615
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blg"], "auteur", [], "any", false, false, false, 615), "html", null, true);
            echo "</li>
                                        <li><span class=\"icon flaticon-comment-1\"></span> 0</li>
                                        <li><span class=\"icon flaticon-calendar-1\"></span> ";
            // line 617
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blg"], "date", [], "any", false, false, false, 617)), "html", null, true);
            echo "</li>
                                    </ul>
                                    <h3><a href=\"blog-single.html\">";
            // line 619
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blg"], "titre", [], "any", false, false, false, 619), "html", null, true);
            echo "</a></h3>
                                    <div class=\"text\">";
            // line 620
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blg"], "contenu", [], "any", false, false, false, 620), "html", null, true);
            echo "</div>


                                    <a class=\"read-more\" href=\"";
            // line 623
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showblogclient", ["idB" => twig_get_attribute($this->env, $this->source, $context["blg"], "idB", [], "any", false, false, false, 623)]), "html", null, true);
            echo "\">Read More</a>
                                </div>

                        </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 630
        echo "


\t\t\t\t</div>
\t\t\t</div>



\t\t</div>
\t</div>
</div>
<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/625fd94a7b967b11798b97bd/1g136hj8c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 3;
                var that = this;
                var value = \$(this).val(); // elyyktbo fi input 7atito fi var var
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"";
        // line 670
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajax_search");
        echo "\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'blgs') {
                                            if (id != 'error') {
                                                x= document.getElementById(\"containerr\");
                                                entitySelector.append('<div style=\"display: table;width:100%;padding: 15px;margin-bottom:95px;background-color: white;border-radius: 8rem;border: 1px solid black\"><h3 style=\"text-align: center\">'+value[1]+'</h3><br/><a href=\"/showblogclient/'+id+'\">'+'<img src=\"/uploads/'+value[0]+'\" style=\"width: 50%; height: 50%;display: flex;align-items: center;justify-content: center;margin: auto;margin-bottom: 600px;\"/><hr/>'+'</a></div>');
                                            } else {
                                                entitySelector.append('<div class=\"errorLi\" style=\"margin-top:8px;text-align: center;padding: 15px;\"><div class=\"card\"><div class=\"card-body\"><h2 style=\"margin-bottom: 465px;\">'+value+'</h2> </div>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
    <script>
        \$(document).ready(function(){
            \$(\".btn1\").click(function(){
                \$(\"h1\").slideUp();
            });
            \$(\".btn2\").click(function(){
                \$(\"h1\").slideDown();
            });
            \$(\".btn3\").click(function(){
                \$(\"h1\").slideToggle();
            });
        });
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blg/affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 670,  166 => 630,  153 => 623,  147 => 620,  143 => 619,  138 => 617,  133 => 615,  129 => 614,  122 => 610,  116 => 606,  112 => 605,  58 => 562,  35 => 560,);
    }

    public function getSourceContext()
    {
        return new Source("{#{% extends \"base.html.twig\" %}#}

{#{% block body %}#}
{#<!DOCTYPE html>#}
{#<html>#}

{#<!-- Mirrored from View/html/gym/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:10 GMT -->#}
{#<head>#}
{#<meta charset=\"utf-8\">#}
{#<title> {% block title %}#}
{#    Epicode#}
{#{% endblock %}</title>#}

{#{% block stylesheets %}#}
{#    #}

{#<!-- Stylesheets -->#}
{#<link href=\"{{asset('css/bootstrap.css')}}\" rel=\"stylesheet\">#}

{#<link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">#}
{#<link href=\"{{asset('css/responsive.css')}}\" rel=\"stylesheet\">#}

{#<!-- Color Switcher Mockup -->#}
{#<link href=\"{{asset('css/color-switcher-design.css')}}\" rel=\"stylesheet\">#}

{#<!-- Color Themes -->#}
{#<link id=\"theme-color-file\" href=\"{{asset('css/color-themes/default-theme.css')}}\" rel=\"stylesheet\">#}

{#{% endblock %}#}
{#<link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;display=swap\" rel=\"stylesheet\">#}

{#<link rel=\"shortcut icon\" href=\"images/favicon.png\" type=\"image/x-icon\">#}
{#<link rel=\"icon\" href=\"images/favicon.png\" type=\"image/x-icon\">#}

{#<!-- Responsive -->#}
{#<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">#}
{#<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">#}

{#<!--[if lt IE 9]><script src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js\"></script><![endif]-->#}
{#<!--[if lt IE 9]><script src=\"js/respond.js\"></script><![endif]-->#}
{#</head>#}

{#<body class=\"hidden-bar-wrapper\">#}

{#<div class=\"page-wrapper\">#}
{# \t#}
{#    <!-- Preloader -->#}
{#    <div class=\"preloader\"></div>#}
{# \t#}
{# \t<!-- Main Header-->#}
{#    <header class=\"main-header header-style-two\">#}
{#    \t#}
{#\t\t<!-- Header Top -->#}
{#        <div class=\"header-top\">#}
{#            <div class=\"auto-container\">#}
{#                <div class=\"clearfix\">#}
{#\t\t\t\t#}
{#\t\t\t\t\t<!-- Top Left -->#}
{#\t\t\t\t\t<div class=\"top-left pull-left\">#}
{#\t\t\t\t\t\t<!-- Info List -->#}
{#                        <ul class=\"info-list\">#}
{#\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span> 27 Division St, New York, USA</li>#}
{#\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span> <a href=\"tel:+1-044-123-456-789\"> +1 (044) 123 456 789</a></li>#}
{#\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope-o\"></span> <a href=\"mailto:info@example.com\"> info@example.com</a></li>#}
{#\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t</div>#}
{#\t\t\t\t\t#}
{#\t\t\t\t\t<!-- Top Right -->#}
{#                    <div class=\"top-right pull-right\">#}
{#\t\t\t\t\t\t#}
{#\t\t\t\t\t\t<!--Language-->#}
{#                        <div class=\"language dropdown\"><a class=\"btn btn-default dropdown-toggle\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\" href=\"#\"><span class=\"flag-icon fa fa-globe\"></span>EN &nbsp;<span class=\"icon fa fa-angle-down\"></span></a>#}
{#                        \t<ul class=\"dropdown-menu style-one\" aria-labelledby=\"dropdownMenu2\">#}
{#                                <li><a href=\"#\">English</a></li>#}
{#                                <li><a href=\"#\">German</a></li>#}
{#                                <li><a href=\"#\">Arabic</a></li>#}
{#                                <li><a href=\"#\">Hindi</a></li>#}
{#                            </ul>#}
{#                        </div>#}
{#\t\t\t\t\t\t#}
{#                    </div>#}
{#\t\t\t\t\t#}
{#                </div>#}
{#            </div>#}
{#        </div>#}
{#\t\t#}
{#\t\t<!-- Header Upper -->#}
{#        <div class=\"header-upper\">#}
{#        \t<div class=\"auto-container clearfix\">#}
{#            \t#}
{#\t\t\t\t<div class=\"pull-left logo-box\">#}
{#\t\t\t\t\t<div class=\"logo\"><a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" title=\"\"></a></div>#}
{#\t\t\t\t</div>#}
{#\t\t\t\t#}
{#\t\t\t\t<div class=\"nav-outer clearfix\">#}
{#\t\t\t\t\t<!--Mobile Navigation Toggler-->#}
{#\t\t\t\t\t<div class=\"mobile-nav-toggler\"><span class=\"icon flaticon-menu\"></span></div>#}
{#\t\t\t\t\t<!-- Main Menu -->#}
{#\t\t\t\t\t<nav class=\"main-menu navbar-expand-md\">#}
{#\t\t\t\t\t\t<div class=\"navbar-header\">#}
{#\t\t\t\t\t\t\t<!-- Toggle Button -->    \t#}
{#\t\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">#}
{#\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>#}
{#\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>#}
{#\t\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>#}
{#\t\t\t\t\t\t\t</button>#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t#}
{#\t\t\t\t\t\t<div class=\"navbar-collapse collapse clearfix\" id=\"navbarSupportedContent\">#}
{#\t\t\t\t\t\t\t<ul class=\"navigation clearfix\">#}
{#\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Home</a>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Home Page 01</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Home Page 02</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Home Page 03</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Header Styles</a>#}
{#\t\t\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index.html\">Header Style 01</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-2.html\">Header Style 02</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"index-3.html\">Header Style 03</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">About</a>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">Faq</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"price.html\">Price</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"team.html\">Team</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"time-table.html\">Time Table</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"testimonial.html\">Testimonial</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"comming-soon.html\">Comming Soon</a></li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Classes</a>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes.html\">Classes</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"classes-detail.html\">Classes Detail</a></li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t<li class=\"current dropdown\"><a href=\"#\">Blog</a>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\">Blog</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"portfolio-detail.html\">detail Blog</a></li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Shop</a>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop.html\">Our Products</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"shop-single.html\">Product Single</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"shopping-cart.html\">Shopping Cart</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\">Checkout</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"account.php\">Account</a></li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\">Blog</a>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Single</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"not-found.html\">Not Found</a></li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</li>#}
{#\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact us</a></li>#}
{#\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t</nav>#}
{#\t\t\t\t\t#}
{#\t\t\t\t</div>#}
{#\t\t\t\t#}
{#            </div>#}
{#        </div>#}
{#        <!--End Header Upper-->#}
{#        #}
{#\t\t<!-- Sticky Header  -->#}
{#        <div class=\"sticky-header\">#}
{#            <div class=\"auto-container clearfix\">#}
{#                <!--Logo-->#}
{#                <div class=\"logo pull-left\">#}
{#                    <a href=\"index.html\" title=\"\"><img src=\"images/logo-small.png\" alt=\"\" title=\"\"></a>#}
{#                </div>#}
{#                <!--Right Col-->#}
{#                <div class=\"pull-right\">#}
{#                    <!-- Main Menu -->#}
{#                    <nav class=\"main-menu\">#}
{#                        <!--Keep This Empty / Menu will come through Javascript-->#}
{#                    </nav><!-- Main Menu End-->#}
{#\t\t\t\t\t#}
{#                </div>#}
{#            </div>#}
{#        </div><!-- End Sticky Menu -->#}
{#    #}
{#\t\t<!-- Mobile Menu  -->#}
{#        <div class=\"mobile-menu\">#}
{#            <div class=\"menu-backdrop\"></div>#}
{#            <div class=\"close-btn\"><span class=\"icon flaticon-multiply\"></span></div>#}
{#            #}
{#            <nav class=\"menu-box\">#}
{#                <div class=\"nav-logo\"><a href=\"index.html\"><img src=\"images/logo-2.png\" alt=\"\" title=\"\"></a></div>#}
{#                <div class=\"menu-outer\"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>#}
{#            </nav>#}
{#        </div>#}
{#\t\t<!-- End Mobile Menu -->#}
{#\t#}
{#    </header>#}
{#    <!-- End Main Header -->#}
{#\t#}
{#\t<!--Page Title-->#}
{#    <section class=\"page-title\" style=\"{{asset('images/4.jpg')}}\">#}
{#    \t<div class=\"auto-container\">#}
{#\t\t\t<div class=\"clearfix\">#}
{#\t\t\t\t<div class=\"pull-left\"> #}
{#\t\t\t\t\t<h2>Blog</h2>#}
{#\t\t\t\t\t<div class=\"text\">Fitness is not a destination it is a way of life.</div>#}
{#\t\t\t\t</div>#}
{#\t\t\t\t<div class=\"pull-right\">#}
{#\t\t\t\t\t<ul class=\"page-breadcrumb\">#}
{#\t\t\t\t\t\t<li><a href=\"index.html\">home</a></li>#}
{#\t\t\t\t\t\t<li>Blog</li>#}
{#\t\t\t\t\t</ul>#}
{#\t\t\t\t</div>#}
{#\t\t\t</div>#}
{#        </div>#}
{#    </section>#}
{#    <!--End Page Title-->#}
{#\t#}
{#\t<!-- Portfolio Page Section -->#}
{#\t<section class=\"portfolio-page-section\">#}
{#\t\t<div class=\"auto-container\">#}
{#\t\t\t<div class=\"row clearfix\">#}
{#\t\t\t\t#}
{#\t\t\t\t#}
{#\t\t\t\t#}
{#\t\t\t\t<!-- Gallery Block -->#}
{#\t\t\t\t<div class=\"gallery-block col-lg-4 col-md-6 col-sm-12\">#}
{#\t\t\t\t\t<div class=\"inner-box\">#}
{#\t\t\t\t\t\t<div class=\"image\">#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t\t<div class=\"content\">#}
{#\t\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t</div>#}
{#\t\t\t\t</div>#}
{#\t\t\t\t#}
{#\t\t\t</div>#}
{#\t\t\t#}
{#            <br>#}
{#            <br>#}
{#            <br>#}
{#\t\t\t<!-- Post Share Options -->#}

{#            <!--#}
{#\t\t\t<div class=\"pagination-outer text-center\">#}
{#\t\t\t\t<div class=\"styled-pagination text-center\">#}
{#\t\t\t\t\t<ul class=\"clearfix\">#}
{#\t\t\t\t\t\t<li class=\"prev\"><a href=\"#\"><span class=\"fa fa-angle-double-left\"></span> Prev</a></li>#}
{#\t\t\t\t\t\t<li><a href=\"#\">1</a></li>#}
{#\t\t\t\t\t\t<li><a href=\"#\">2</a></li>#}
{#\t\t\t\t\t\t<li class=\"active\"><a href=\"#\">3</a></li>#}
{#\t\t\t\t\t\t<li><a href=\"#\">4</a></li>#}
{#\t\t\t\t\t\t<li><a href=\"#\">5</a></li>#}
{#\t\t\t\t\t\t<li class=\"next\"><a href=\"#\">Next <span class=\"fa fa-angle-double-right\"></span></a></li>#}
{#\t\t\t\t\t</ul>#}
{#\t\t\t\t</div>#}
{#\t\t\t</div>#}
{#\t\t\t-->#}
{#\t\t</div>#}

{#\t\t<div class=\"card\" style=\"width: 80rem;\" >#}

{#    <div class=\"container\">#}
{#  <div class=\"row\">#}
{# {% for blg in blg %}#}
{# <img class=\"img-thumbnail\" src=\"{{asset('uploads/'~blg.image)}}\" alt=\"Card image cap\">#}
{#    <div class=\"col-sm\">#}
{#       <h5 class=\"card-title\">{{ blg.titre }}</h5>#}
{#    <p class=\"card-text\">{{ blg.contenu }}</p>#}
{#    <p class=\"card-text\">{{ blg.date |date }}</p>#}
{#    <p class=\"card-text\">{{ blg.auteur}}</p>#}
{#\t<p class=\"card-text\">{{ blg.auteur}}</p>#}
{#\t<p class=\"card-text\">{{ blg.categorie}}</p>#}
{#\t#}
{#    <a href=\"#\" class=\"btn btn-primary\">Go somewhere</a>#}
{#    </div>#}
{#    {% endfor %}#}
{#  </div>#}
{#</div>#}
{# #}
{#    {% for blg in blg %}#}
{#                #}
{#  #}
{#  <div class=\"card-body\">#}
{#    #}
{#  </div>#}
{#</div>#}

{#{% endfor %}#}
{#\t</section>#}
{#\t<!-- End Portfolio Page Section -->#}
{#\t#}
{#   #}
{#\t<!-- Subscribe Section -->#}
{#    #}
{#\t<section class=\"subscribe-section\">#}
{#\t\t<div class=\"auto-container\">#}
{#\t\t\t<div class=\"inner-container margin-bottom\">#}
{#            #}
{#\t\t\t\t<div class=\"pattern-layer\" style=\"{{asset('images/background/7.jpg')}}\"></div>#}
{#\t\t\t\t<div class=\"section-image\" style=\"{{asset('images/resource/newslatter.png')}}\"></div>#}
{#\t\t\t\t<div class=\"row clearfix\">#}
{#\t\t\t\t\t#}
{#\t\t\t\t\t<!-- Title Column -->#}
{#                    <!--#}
{#\t\t\t\t\t<div class=\"title-column col-lg-6 col-md-12 col-sm-12\">#}
{#\t\t\t\t\t\t<div class=\"inner-column\">#}
{#\t\t\t\t\t\t\t<h3>Don’t miss any updates <br> Get subscribed!</h3>#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t</div>#}
{#\t\t\t\t\t-->#}
{#\t\t\t\t\t<!-- Form Column -->#}
{#\t\t\t\t\t#}
{#\t\t\t\t\t#}
{#\t\t\t\t</div>#}
{#\t\t\t</div>#}
{#\t\t</div>#}
{#\t</section>#}
{#\t<!-- End Subscribe Section -->#}
{#\t#}
{#\t<!-- Main Footer -->#}
{#    <footer class=\"main-footer style-four\" style=\"{{asset('images/background/2.jpg')}}\">#}
{#\t\t<div class=\"auto-container\">#}
{#        \t<!-- Widgets Section -->#}
{#            <div class=\"widgets-section\">#}
{#            \t<div class=\"row clearfix\">#}
{#                \t#}
{#                    <!-- Big Column -->#}
{#                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">#}
{#                        <div class=\"row clearfix\">#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t\t<!--Footer Column-->#}
{#                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">#}
{#                                <div class=\"footer-widget logo-widget\">#}
{#\t\t\t\t\t\t\t\t\t<div class=\"logo\">#}
{#                                    \t<a href=\"index.html\"><img src=\"images/footer-logo.png\" alt=\"\" /></a>#}
{#                                    </div>#}
{#\t\t\t\t\t\t\t\t\t<div class=\"text\">Gym Expert is a champ in providing its users with absolutely everything a fitness or gym site needs. consectetur adipiscing elit. Suspendisse interdum nulla eu posuere scelerisque.</div>#}
{#\t\t\t\t\t\t\t\t\t<div class=\"social-links\">#}
{#\t\t\t\t\t\t\t\t\t\t<span>Follow on Socials </span>#}
{#\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-facebook\"></a>#}
{#\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-twitter\"></a>#}
{#\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-instagram\"></a>#}
{#\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"fa fa-linkedin\"></a>#}
{#\t\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t\t<!-- Footer Column -->#}
{#\t\t\t\t\t\t\t<div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">#}
{#\t\t\t\t\t\t\t\t<div class=\"footer-widget news-widget\">#}
{#\t\t\t\t\t\t\t\t\t<h4>Latest Posts</h4>#}
{#\t\t\t\t\t\t\t\t\t<!-- Footer Column -->#}
{#\t\t\t\t\t\t\t\t\t<div class=\"widget-content\">#}
{#\t\t\t\t\t\t\t\t\t\t<div class=\"post\">#}
{#\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\"><a href=\"blog-single.html\"><img src=\"images/resource/post-thumb-3.jpg\" alt=\"\"></a></div>#}
{#\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"blog-single.html\">Your Future is Created by What You Do Today</a></h5>#}
{#\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">JUNE 21, 2020</span>#}
{#\t\t\t\t\t\t\t\t\t\t</div>#}

{#\t\t\t\t\t\t\t\t\t\t<div class=\"post\">#}
{#\t\t\t\t\t\t\t\t\t\t\t<div class=\"thumb\"><a href=\"blog-single.html\"><img src=\"images/resource/post-thumb-4.jpg\" alt=\"\"></a></div>#}
{#\t\t\t\t\t\t\t\t\t\t\t<h5><a href=\"blog-single.html\">How to Maximise Time Spent at The GYM.</a></h5>#}
{#\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">JUNE 21, 2019</span>#}
{#\t\t\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t</div>#}
{#\t\t\t\t\t#}
{#\t\t\t\t\t<!-- Big Column -->#}
{#                    <div class=\"big-column col-lg-6 col-md-12 col-sm-12\">#}
{#                        <div class=\"row clearfix\">#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t\t<!-- Footer Column -->#}
{#                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">#}
{#                                <div class=\"footer-widget links-widget\">#}
{#\t\t\t\t\t\t\t\t\t<h4>Our Services</h4>#}
{#\t\t\t\t\t\t\t\t\t<ul class=\"list-link\">#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Fat Burn</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Streching</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Weight Loss</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Self Defense</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Body Building</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Psycho Trainning</a></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Strength Trainning</a></li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t\t<!-- Footer Column -->#}
{#                            <div class=\"footer-column col-lg-6 col-md-6 col-sm-12\">#}
{#                                <div class=\"footer-widget timing-widget\">#}
{#\t\t\t\t\t\t\t\t\t<h4>Working Hours</h4>#}
{#\t\t\t\t\t\t\t\t\t<ul>#}
{#\t\t\t\t\t\t\t\t\t\t<li>Monday – Friday:<span>07:00 – 21:00</span></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li>Saturday:<span>07:00 – 16:00</span></li>#}
{#\t\t\t\t\t\t\t\t\t\t<li>Sunday Closed</li>#}
{#\t\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t</div>#}
{#\t\t\t\t\t#}
{#\t\t\t\t</div>#}
{#\t\t\t</div>#}
{#\t\t#}
{#\t\t\t<!-- Footer Bottom -->#}
{#\t\t\t<div class=\"footer-bottom\">#}
{#\t\t\t\t<div class=\"copyright\">Copyright 2020 Theme by expertthemes</div>#}
{#\t\t\t</div>#}
{#\t\t#}
{#\t\t</div>#}
{#\t</footer>#}
{#\t#}
{#\t<!-- Sidebar Cart Item -->#}
{#\t<div class=\"xs-sidebar-group info-group\">#}
{#\t\t<div class=\"xs-overlay xs-bg-black\"></div>#}
{#\t\t<div class=\"xs-sidebar-widget\">#}
{#\t\t\t<div class=\"sidebar-widget-container\">#}
{#\t\t\t\t<div class=\"widget-heading\">#}
{#\t\t\t\t\t<a href=\"#\" class=\"close-side-widget\">#}
{#\t\t\t\t\t\tX#}
{#\t\t\t\t\t</a>#}
{#\t\t\t\t</div>#}
{#\t\t\t\t<div class=\"sidebar-textwidget\">#}
{#\t\t\t\t\t#}
{#\t\t\t\t\t<!-- Sidebar Info Content -->#}
{#\t\t\t\t\t<div class=\"sidebar-info-contents\">#}
{#\t\t\t\t\t\t<div class=\"content-inner\">#}
{#\t\t\t\t\t\t\t<div class=\"logo\">#}
{#\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"images/logo.png\" alt=\"\" /></a>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t<div class=\"content-box\">#}
{#\t\t\t\t\t\t\t\t<h2>About Us</h2>#}
{#\t\t\t\t\t\t\t\t<p class=\"text\">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>#}
{#\t\t\t\t\t\t\t\t<a href=\"#\" class=\"theme-btn btn-style-two\"><span class=\"txt\">Consultation</span></a>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t<div class=\"contact-info\">#}
{#\t\t\t\t\t\t\t\t<h2>Contact Info</h2>#}
{#\t\t\t\t\t\t\t\t<ul class=\"list-style-one\">#}
{#\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-location-arrow\"></span>Chicago 12, Melborne City, USA</li>#}
{#\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-phone\"></span>(111) 111-111-1111</li>#}
{#\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-envelope\"></span>Gym@gmail.com</li>#}
{#\t\t\t\t\t\t\t\t\t<li><span class=\"icon fa fa-clock-o\"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>#}
{#\t\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t\t\t<!-- Social Box -->#}
{#\t\t\t\t\t\t\t<ul class=\"social-box\">#}
{#\t\t\t\t\t\t\t\t<li class=\"facebook\"><a href=\"#\" class=\"fa fa-facebook-f\"></a></li>#}
{#\t\t\t\t\t\t\t\t<li class=\"twitter\"><a href=\"#\" class=\"fa fa-twitter\"></a></li>#}
{#\t\t\t\t\t\t\t\t<li class=\"linkedin\"><a href=\"#\" class=\"fa fa-linkedin\"></a></li>#}
{#\t\t\t\t\t\t\t\t<li class=\"instagram\"><a href=\"#\" class=\"fa fa-instagram\"></a></li>#}
{#\t\t\t\t\t\t\t\t<li class=\"youtube\"><a href=\"#\" class=\"fa fa-youtube\"></a></li>#}
{#\t\t\t\t\t\t\t</ul>#}
{#\t\t\t\t\t\t</div>#}
{#\t\t\t\t\t</div>#}
{#\t\t\t\t\t#}
{#\t\t\t\t</div>#}
{#\t\t\t</div>#}
{#\t\t</div>#}
{#\t</div>#}
{#\t<!-- END sidebar widget item -->#}
{#\t#}
{#</div>#}
{#<!--End pagewrapper-->#}

{#<!-- Color Palate / Color Switcher -->#}
{#<div class=\"color-palate\">#}
{#    <div class=\"color-trigger\">#}
{#        <i class=\"fa fa-gear\"></i>#}
{#    </div>#}
{#    <div class=\"color-palate-head\">#}
{#        <h6>Choose Your Color</h6>#}
{#    </div>#}
{#\t<div class=\"various-color clearfix\">#}
{#        <div class=\"colors-list\">#}
{#            <span class=\"palate default-color active\" data-theme-file=\"css/color-themes/default-theme.css\"></span>#}
{#            <span class=\"palate green-color\" data-theme-file=\"css/color-themes/green-theme.css\"></span>#}
{#            <span class=\"palate olive-color\" data-theme-file=\"css/color-themes/olive-theme.css\"></span>#}
{#            <span class=\"palate orange-color\" data-theme-file=\"css/color-themes/orange-theme.css\"></span>#}
{#            <span class=\"palate purple-color\" data-theme-file=\"css/color-themes/purple-theme.css\"></span>#}
{#            <span class=\"palate teal-color\" data-theme-file=\"css/color-themes/teal-theme.css\"></span>#}
{#            <span class=\"palate brown-color\" data-theme-file=\"css/color-themes/brown-theme.css\"></span>#}
{#            <span class=\"palate redd-color\" data-theme-file=\"css/color-themes/redd-color.css\"></span>#}
{#        </div>#}
{#    </div>#}
{#\t#}
{#    <h5>Other Options</h5>#}
{#\t<ul class=\"rtl-version option-box\"> <li class=\"rtl\">RTL Version</li> <li>LTR Version</li> </ul>#}
{#\t#}
{#    <a href=\"#\" class=\"purchase-btn\">Purchase now \$17</a>#}
{#    #}
{#    <div class=\"palate-foo\">#}
{#        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>#}
{#    </div>#}

{#</div>#}

{#<!-- Search Popup -->#}
{#<div class=\"search-popup\">#}
{#\t<button class=\"close-search style-two\"><span class=\"flaticon-multiply\"></span></button>#}
{#\t<button class=\"close-search\"><span class=\"flaticon-up-arrow-1\"></span></button>#}
{#\t<form method=\"post\" action=\"https://expert-themes.com/html/gym/blog.html\">#}
{#\t\t<div class=\"form-group\">#}
{#\t\t\t<input type=\"search\" name=\"search-field\" value=\"\" placeholder=\"Search Here\" required=\"\">#}
{#\t\t\t<button type=\"submit\"><i class=\"fa fa-search\"></i></button>#}
{#\t\t</div>#}
{#\t</form>#}
{#</div>#}
{#<!-- End Header Search -->#}

{#<!--Scroll to top-->#}
{#<div class=\"scroll-to-top scroll-to-target\" data-target=\"html\"><span class=\"fa fa-arrow-up\"></span></div>#}

{#{% block javascripts %}#}
{#    #}

{#<script src=\"{{asset('js/jquery.js')}}\"></script>#}

{#<script src=\"{{asset('js/popper.min.js')}}\"></script>#}
{#<script src=\"{{asset('js/bootstrap.min.js')}}\"></script>#}
{#<script src=\"{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}\"></script>#}
{#<script src=\"{{asset('js/jquery.fancybox.js')}}\"></script>#}
{#<script src=\"{{asset('js/appear.js')}}\"></script>#}
{#<script src=\"{{asset('js/parallax.min.js')}}\"></script>#}
{#<script src=\"{{asset('js/tilt.jquery.min.js')}}\"></script>#}
{#<script src=\"{{asset('js/jquery.paroller.min.js')}}\"></script>#}
{#<script src=\"{{asset('js/owl.js')}}\"></script>#}
{#<script src=\"{{asset('js/wow.js')}}\"></script>#}
{#<script src=\"{{asset('js/nav-tool.js')}}\"></script>#}
{#<script src=\"{{asset('js/jquery-ui.js')}}\"></script>#}
{#<script src=\"{{asset('js/script.js')}}\"></script>#}
{#<script src=\"{{asset('js/color-settings.js')}}\"></script>#}

{#<!--Google Map APi Key-->#}
{#<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCIJ_QKHN-bi6_1C9f5eYE3pZs1zhQIo5o\"></script>#}
{#<script src=\"{{asset('js/map-script.js')}}\"></script>#}
{#<!--End Google Map APi-->#}
{#{% endblock %}#}

{#</body>#}

{#<!-- Mirrored from View/html/gym/portfolio.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Nov 2020 18:53:23 GMT -->#}
{#</html>#}
{#{% endblock %}#}

{% extends 'base.html.twig' %}

{% block body %}<div class=\"sidebar-page-container\">
\t<div class=\"auto-container\">
\t\t<div class=\"row clearfix\">

            <div class=\"sidebar-side col-lg-4 col-md-12 col-sm-12\">
                <aside class=\"sidebar sticky-top\">



                    <!-- Categories Widget -->
                    <div class=\"sidebar-widget categories-widget\">
                        <div class=\"sidebar-title\">
                            <h4>Categorie</h4>
                        </div>
                        <div class=\"widget-content\">
                            <ul class=\"blog-cat\">
                                <li><a href=\"#\">FITNESS <span>( 24 )</span></a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- Search -->


                    <div class=\"sidebar-widget search-box\">
                        <form method=\"post\" action=\"contact.html\">
                            <div class=\"form-group\">
                                <input type=\"search\"  id=\"search\" name=\"search-field\" value=\"\" placeholder=\"Search.....\" required=\"\">
                                <button type=\"submit\"><span class=\"icon fa fa-search\"></span></button>
                            </div>
                        </form>
                    </div>
                </aside>
            </div>
            <ul class=\"nav nav-second-level\" id=\"entitiesNav\">
            </ul>
            <!--Content Side-->
\t\t\t<div class=\"content-side col-lg-8 col-md-12 col-sm-12\">
\t\t\t\t<!-- Blog Classic -->
\t\t\t\t<div class=\"blog-classic\">

\t\t\t\t\t<!-- News Block Three -->
\t\t\t\t\t{% for blg in blg %}

                        <div class=\"news-block-three\">
                            <div class=\"inner-box\">
                                <div class=\"image\">
                                    <a href=\"blog-single.html\"><img src=\"{{ asset('uploads/'~blg.image) }}\" alt=\"\"></a>
                                </div>
                                <div class=\"lower-content\">
                                    <ul class=\"post-meta\">
                                        <li><span class=\"icon flaticon-folder\"></span> Categorie : {{ blg.categorie }}</li>
                                        <li><span class=\"icon flaticon-user-1\"></span> Auteur :{{ blg.auteur }}</li>
                                        <li><span class=\"icon flaticon-comment-1\"></span> 0</li>
                                        <li><span class=\"icon flaticon-calendar-1\"></span> {{ blg.date |date }}</li>
                                    </ul>
                                    <h3><a href=\"blog-single.html\">{{ blg.titre }}</a></h3>
                                    <div class=\"text\">{{ blg.contenu }}</div>


                                    <a class=\"read-more\" href=\"{{ path('showblogclient', {'idB': blg.idB}) }}\">Read More</a>
                                </div>

                        </div>


                    {% endfor %}



\t\t\t\t</div>
\t\t\t</div>



\t\t</div>
\t</div>
</div>
<!--Start of Tawk.to Script-->
<script type=\"text/javascript\">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
s1.async=true;
s1.src='https://embed.tawk.to/625fd94a7b967b11798b97bd/1g136hj8c';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- jQuery is necessary -->
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
    <script type=\"text/javascript\">
        jQuery(document).ready(function() {
            var searchRequest = null;
            \$(\"#search\").keyup(function() {
                var minlength = 3;
                var that = this;
                var value = \$(this).val(); // elyyktbo fi input 7atito fi var var
                var entitySelector = \$(\"#entitiesNav\").html('');
                if (value.length >= minlength ) {
                    if (searchRequest != null)
                        searchRequest.abort();
                    searchRequest = \$.ajax({
                        type: \"GET\",
                        url: \"{{ path('ajax_search') }}\",
                        data: {
                            'q' : value
                        },
                        dataType: \"text\",
                        success: function(msg){
                            //we need to check if the value is the same
                            if (value==\$(that).val()) {
                                var result = JSON.parse(msg);
                                \$.each(result, function(key, arr) {
                                    \$.each(arr, function(id, value) {
                                        if (key == 'blgs') {
                                            if (id != 'error') {
                                                x= document.getElementById(\"containerr\");
                                                entitySelector.append('<div style=\"display: table;width:100%;padding: 15px;margin-bottom:95px;background-color: white;border-radius: 8rem;border: 1px solid black\"><h3 style=\"text-align: center\">'+value[1]+'</h3><br/><a href=\"/showblogclient/'+id+'\">'+'<img src=\"/uploads/'+value[0]+'\" style=\"width: 50%; height: 50%;display: flex;align-items: center;justify-content: center;margin: auto;margin-bottom: 600px;\"/><hr/>'+'</a></div>');
                                            } else {
                                                entitySelector.append('<div class=\"errorLi\" style=\"margin-top:8px;text-align: center;padding: 15px;\"><div class=\"card\"><div class=\"card-body\"><h2 style=\"margin-bottom: 465px;\">'+value+'</h2> </div>');
                                            }
                                        }
                                    });
                                });
                            }
                        }
                    });
                }
            });
        });
    </script>
    <script>
        \$(document).ready(function(){
            \$(\".btn1\").click(function(){
                \$(\"h1\").slideUp();
            });
            \$(\".btn2\").click(function(){
                \$(\"h1\").slideDown();
            });
            \$(\".btn3\").click(function(){
                \$(\"h1\").slideToggle();
            });
        });
    </script>
    {% endblock %}
", "blg/affiche.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\blg\\affiche.html.twig");
    }
}
