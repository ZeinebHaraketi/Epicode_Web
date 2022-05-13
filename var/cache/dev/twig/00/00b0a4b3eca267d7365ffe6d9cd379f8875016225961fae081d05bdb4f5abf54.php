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

/* client/showblog.html.twig */
class __TwigTemplate_360d08f47bdd4c617d78dff30cf60b9f84fe24e5cb027f06fffd1641a021998d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/showblog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/showblog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/showblog.html.twig", 1);
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
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />

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



                        </aside>
                    </div>
                    

                    <!--Content Side-->
                    <div class=\"content-side col-lg-8 col-md-12 col-sm-12\">
                        <!-- Blog Single -->
                        <div class=\"blog-single\">
                            <div class=\"inner-box\">
                                <div class=\"image\">
                                    <img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 275, $this->source); })()), "image", [], "any", false, false, false, 275))), "html", null, true);
        echo "\" alt=\"\" />
                                </div>
                                <div class=\"lower-content\">
                                    <ul class=\"post-meta\">
                                        <li><span class=\"icon flaticon-folder\"></span> Categorie ";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 279, $this->source); })()), "titre", [], "any", false, false, false, 279), "html", null, true);
        echo "</li>
                                        <li><span class=\"icon flaticon-user-1\"></span> Auteur : ";
        // line 280
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 280, $this->source); })()), "auteur", [], "any", false, false, false, 280), "html", null, true);
        echo "</li>
                                        <li><span class=\"icon flaticon-calendar-1\"></span> Date : ";
        // line 281
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 281, $this->source); })()), "date", [], "any", false, false, false, 281)), "html", null, true);
        echo "</li>
                                    </ul>
                                    <h3>";
        // line 283
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 283, $this->source); })()), "titre", [], "any", false, false, false, 283), "html", null, true);
        echo "</h3><p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 283, $this->source); })()), "contenu", [], "any", false, false, false, 283), "html", null, true);
        echo "</p>
                                    <h3>Last rate :</h3><p>
                                        ";
        // line 285
        $context["totalstars"] = 0;
        // line 286
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rates"]) || array_key_exists("rates", $context) ? $context["rates"] : (function () { throw new RuntimeError('Variable "rates" does not exist.', 286, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ra"]) {
            // line 287
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["ra"], "idblg", [], "any", false, false, false, 287) == twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 287, $this->source); })()), "idB", [], "any", false, false, false, 287))) {
                // line 288
                echo "                                                ";
                $context["totalstars"] = twig_get_attribute($this->env, $this->source, $context["ra"], "rat", [], "any", false, false, false, 288);
                // line 289
                echo "                                            ";
            }
            // line 290
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ra'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "                                        ";
        echo $this->extensions['blackknight467\StarRatingBundle\Extensions\StarRatingExtension']->rating((isset($context["totalstars"]) || array_key_exists("totalstars", $context) ? $context["totalstars"] : (function () { throw new RuntimeError('Variable "totalstars" does not exist.', 291, $this->source); })()));
        echo "

                                    </p>
                                    <div class=\"two-column\">

                                        <a href=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ratingAd", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 296, $this->source); })()), "idB", [], "any", false, false, false, 296)]), "html", null, true);
        echo "\" >Rate</a>
                                    <!-- Author Box -->
                                    <div class=\"author-box\" >
                                        <div class=\"sidebar-title\">
                                            <h4>Les Commentaires</h4>
                                        </div>

                                    <!-- Comments Area -->
                                    <div class=\"comments-area\">
                                        <div class=\"group-title\">
                                            <h4>1 Comments</h4>
                                        </div>

                                      ";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["comments"]);
        foreach ($context['_seq'] as $context["_key"] => $context["comments"]) {
            // line 310
            echo "                                        <div class=\"comment-box\">
                                            <div class=\"comment\">
                                                <div class=\"author-thumb\">
                                                    <img src=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
            echo "\" alt=\"\">
                                                    <a class=\"theme-btn reply-btn\" href=\"#\">@Arij Grissiaa</a>
                                                </div>
                                                <div class=\"comment-info clearfix\"><strong>Titre Blog : ";
            // line 316
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comments"], "getIdB", [], "method", false, false, false, 316), "getTitre", [], "method", false, false, false, 316), "html", null, true);
            echo " </strong><br/><div class=\"comment-time\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "date", [], "any", false, false, false, 316)), "html", null, true);
            echo "</div></div>

                                               ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["likes"]) || array_key_exists("likes", $context) ? $context["likes"] : (function () { throw new RuntimeError('Variable "likes" does not exist.', 318, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["nbj"]) {
                // line 319
                echo "                                                    ";
                if ((twig_get_attribute($this->env, $this->source, $context["nbj"], "idCom", [], "any", false, false, false, 319) == twig_get_attribute($this->env, $this->source, $context["comments"], "idCom", [], "any", false, false, false, 319))) {
                    // line 320
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likec", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 320, $this->source); })()), "idB", [], "any", false, false, false, 320), "ido" => twig_get_attribute($this->env, $this->source, $context["nbj"], "id", [], "any", false, false, false, 320)]), "html", null, true);
                    echo "\" class=\"btn\" id=\"green\"><i class=\"fa fa-thumbs-up fa-lg\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nbj"], "getLikec", [], "method", false, false, false, 320), "html", null, true);
                    echo "</a>
                                                        <a href=\"";
                    // line 321
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dislikec", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 321, $this->source); })()), "idB", [], "any", false, false, false, 321), "ido" => twig_get_attribute($this->env, $this->source, $context["nbj"], "id", [], "any", false, false, false, 321)]), "html", null, true);
                    echo "\" class=\"btn\" id=\"red\"><i class=\"fa fa-thumbs-down fa-lg\" aria-hidden=\"true\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nbj"], "getDislikec", [], "method", false, false, false, 321), "html", null, true);
                    echo "</a>
                                                    ";
                }
                // line 323
                echo "                                                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 324
                echo "                                                <a class=\"btn\" id=\"green\"><i class=\"fa fa-thumbs-up fa-lg\" aria-hidden=\"true\"></i>0</a>
                                                <a class=\"btn\" id=\"red\"><i class=\"fa fa-thumbs-down fa-lg\" aria-hidden=\"true\"></i>0</a>
                                               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nbj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "
                                                <div class=\"text\">Message commentaire : ";
            // line 328
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comments"], "getMessage", [], "method", false, false, false, 328), "html", null, true);
            echo ".</div>

                                                <div style=\"position: absolute;right: 0 ;bottom: 0\">
                                                    <a class=\"\"

                                                       style=\"  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;


\"
                                                       role=\"button\" href=\"";
            // line 347
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_comment", ["idCom" => twig_get_attribute($this->env, $this->source, $context["comments"], "idCom", [], "any", false, false, false, 347)]), "html", null, true);
            echo "\">Modifier</a>
                                                        <a class=\"\"style=\"background-color: #ff3c3c; /* Green */
                                                        border: none;
                                                        color: white;
      padding: 15px 15px;
                                                        text-align: center;
                                                        text-decoration: none;
                                                        display: inline-block;
                                                        font-size: 16px;
                                                        margin: 4px 2px;
                                                        transition-duration: 0.4s;
                                                        cursor: pointer;\"

                                                    role=\"button\" href=\"";
            // line 360
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_uncomment", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["blg"]) || array_key_exists("blg", $context) ? $context["blg"] : (function () { throw new RuntimeError('Variable "blg" does not exist.', 360, $this->source); })()), "idB", [], "any", false, false, false, 360), "idCom" => twig_get_attribute($this->env, $this->source, $context["comments"], "getIdCom", [], "method", false, false, false, 360)]), "html", null, true);
            echo "\">Supprimer</a>


                                            </div>
                                        </div>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comments'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "
                                    </div>

                                    <!-- Comments Form -->
                                    <div class=\"comments-form\">
                                        <div class=\"group-title\">
                                            <h4>Leave Reply</h4>
                                        </div>

                                        <!-- Default Form -->
                                        <div class=\"default-form style-two\">

                                            <!-- Default Form -->
                                            ";
        // line 380
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 380, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                                                <div class=\"row clearfix\">



                                                    <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                                                        ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 386, $this->source); })()), "message", [], "any", false, false, false, 386), 'row', ["attr" => ["class" => "form-control mr-5", "placeholder" => "Add Comment", "cols" => "50", "required" => "true", "style" => "resize: none;"]]);
        echo "

                                                    </div>

                                                    <div class=\"form-group clearfix col-lg-12 col-md-12 col-sm-12\">
                                                        <div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Commenter</span></button></div>
                                                    </div>

                                                </div>
                                            ";
        // line 395
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })()), 'form_end');
        echo "

                                            <!--End Default Form -->
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Subscribe Section -->
        <section class=\"subscribe-section\">
            <div class=\"auto-container\">
                <div class=\"inner-container margin-bottom\">
                    <div class=\"pattern-layer\" style=\"background-image:url(https://via.placeholder.com/1545x200)\"></div>
                    <div class=\"section-image\" style=\"background-image:url(https://via.placeholder.com/161x165)\"></div>
                    <div class=\"row clearfix\">

                        <!-- Title Column -->
                        <div class=\"title-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"inner-column\">
                                <h3>Don’t miss any updates <br> Get subscribed!</h3>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class=\"form-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"inner-column\">

                                <div class=\"newsletter-form\">
                                    <form method=\"post\" action=\"contact.html\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" name=\"email\" value=\"\" placeholder=\"Add your email ......\" required=\"\">
                                            <button type=\"submit\" class=\"theme-btn submit-btn\"><span class=\"txt\">Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Section -->


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
        return "client/showblog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 395,  552 => 386,  543 => 380,  528 => 367,  515 => 360,  499 => 347,  477 => 328,  474 => 327,  466 => 324,  461 => 323,  454 => 321,  447 => 320,  444 => 319,  439 => 318,  432 => 316,  426 => 313,  421 => 310,  417 => 309,  401 => 296,  392 => 291,  386 => 290,  383 => 289,  380 => 288,  377 => 287,  372 => 286,  370 => 285,  363 => 283,  358 => 281,  354 => 280,  350 => 279,  343 => 275,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/starrating/css/rating.css') }}\" />

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



                        </aside>
                    </div>
                    

                    <!--Content Side-->
                    <div class=\"content-side col-lg-8 col-md-12 col-sm-12\">
                        <!-- Blog Single -->
                        <div class=\"blog-single\">
                            <div class=\"inner-box\">
                                <div class=\"image\">
                                    <img src=\"{{ asset('uploads/'~blg.image) }}\" alt=\"\" />
                                </div>
                                <div class=\"lower-content\">
                                    <ul class=\"post-meta\">
                                        <li><span class=\"icon flaticon-folder\"></span> Categorie {{ blg.titre }}</li>
                                        <li><span class=\"icon flaticon-user-1\"></span> Auteur : {{ blg.auteur }}</li>
                                        <li><span class=\"icon flaticon-calendar-1\"></span> Date : {{ blg.date |date }}</li>
                                    </ul>
                                    <h3>{{ blg.titre }}</h3><p>{{ blg.contenu }}</p>
                                    <h3>Last rate :</h3><p>
                                        {% set totalstars = 0 %}
                                        {% for ra in rates %}
                                            {%  if (ra.idblg == blg.idB) %}
                                                {% set totalstars = ra.rat  %}
                                            {% endif %}
                                        {% endfor %}
                                        {{  totalstars|rating }}

                                    </p>
                                    <div class=\"two-column\">

                                        <a href=\"{{ path('ratingAd', {'id': blg.idB}) }}\" >Rate</a>
                                    <!-- Author Box -->
                                    <div class=\"author-box\" >
                                        <div class=\"sidebar-title\">
                                            <h4>Les Commentaires</h4>
                                        </div>

                                    <!-- Comments Area -->
                                    <div class=\"comments-area\">
                                        <div class=\"group-title\">
                                            <h4>1 Comments</h4>
                                        </div>

                                      {% for comments in comments %}
                                        <div class=\"comment-box\">
                                            <div class=\"comment\">
                                                <div class=\"author-thumb\">
                                                    <img src=\"{{ asset('assets/images/users/avatar-2.jpg') }}\" alt=\"\">
                                                    <a class=\"theme-btn reply-btn\" href=\"#\">@Arij Grissiaa</a>
                                                </div>
                                                <div class=\"comment-info clearfix\"><strong>Titre Blog : {{ comments.getIdB().getTitre()}} </strong><br/><div class=\"comment-time\">{{ comments.date| date }}</div></div>

                                               {% for nbj in likes %}
                                                    {% if  nbj.idCom == comments.idCom %}
                                                        <a href=\"{{ path('likec',{'id':blg.idB, 'ido': nbj.id}) }}\" class=\"btn\" id=\"green\"><i class=\"fa fa-thumbs-up fa-lg\" aria-hidden=\"true\"></i>{{ nbj.getLikec() }}</a>
                                                        <a href=\"{{ path('dislikec',{'id':blg.idB, 'ido': nbj.id}) }}\" class=\"btn\" id=\"red\"><i class=\"fa fa-thumbs-down fa-lg\" aria-hidden=\"true\"></i>{{ nbj.getDislikec() }}</a>
                                                    {% endif %}
                                                {% else %}
                                                <a class=\"btn\" id=\"green\"><i class=\"fa fa-thumbs-up fa-lg\" aria-hidden=\"true\"></i>0</a>
                                                <a class=\"btn\" id=\"red\"><i class=\"fa fa-thumbs-down fa-lg\" aria-hidden=\"true\"></i>0</a>
                                               {% endfor %}

                                                <div class=\"text\">Message commentaire : {{ comments.getMessage() }}.</div>

                                                <div style=\"position: absolute;right: 0 ;bottom: 0\">
                                                    <a class=\"\"

                                                       style=\"  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;


\"
                                                       role=\"button\" href=\"{{ path('edit_comment', {'idCom': comments.idCom}) }}\">Modifier</a>
                                                        <a class=\"\"style=\"background-color: #ff3c3c; /* Green */
                                                        border: none;
                                                        color: white;
      padding: 15px 15px;
                                                        text-align: center;
                                                        text-decoration: none;
                                                        display: inline-block;
                                                        font-size: 16px;
                                                        margin: 4px 2px;
                                                        transition-duration: 0.4s;
                                                        cursor: pointer;\"

                                                    role=\"button\" href=\"{{ path('blog_uncomment', {'id':blg.idB,'idCom': comments.getIdCom()}) }}\">Supprimer</a>


                                            </div>
                                        </div>

                                        {% endfor %}

                                    </div>

                                    <!-- Comments Form -->
                                    <div class=\"comments-form\">
                                        <div class=\"group-title\">
                                            <h4>Leave Reply</h4>
                                        </div>

                                        <!-- Default Form -->
                                        <div class=\"default-form style-two\">

                                            <!-- Default Form -->
                                            {{ form_start(form, {attr: {novalidate: 'novalidate'}}) }}
                                                <div class=\"row clearfix\">



                                                    <div class=\"form-group col-lg-12 col-md-12 col-sm-12\">
                                                        {{ form_row(form.message,{'attr': {'class': 'form-control mr-5' , 'placeholder' : 'Add Comment' , 'cols' : '50','required' : 'true', 'style' : 'resize: none;'}}) }}

                                                    </div>

                                                    <div class=\"form-group clearfix col-lg-12 col-md-12 col-sm-12\">
                                                        <div class=\"btn-three-outer\"><button class=\"theme-btn btn-style-three\" type=\"submit\" name=\"submit-form\"><span class=\"txt\">Commenter</span></button></div>
                                                    </div>

                                                </div>
                                            {{ form_end(form) }}

                                            <!--End Default Form -->
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Subscribe Section -->
        <section class=\"subscribe-section\">
            <div class=\"auto-container\">
                <div class=\"inner-container margin-bottom\">
                    <div class=\"pattern-layer\" style=\"background-image:url(https://via.placeholder.com/1545x200)\"></div>
                    <div class=\"section-image\" style=\"background-image:url(https://via.placeholder.com/161x165)\"></div>
                    <div class=\"row clearfix\">

                        <!-- Title Column -->
                        <div class=\"title-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"inner-column\">
                                <h3>Don’t miss any updates <br> Get subscribed!</h3>
                            </div>
                        </div>

                        <!-- Form Column -->
                        <div class=\"form-column col-lg-6 col-md-12 col-sm-12\">
                            <div class=\"inner-column\">

                                <div class=\"newsletter-form\">
                                    <form method=\"post\" action=\"contact.html\">
                                        <div class=\"form-group\">
                                            <input type=\"email\" name=\"email\" value=\"\" placeholder=\"Add your email ......\" required=\"\">
                                            <button type=\"submit\" class=\"theme-btn submit-btn\"><span class=\"txt\">Subscribe</span></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End Subscribe Section -->


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

", "client/showblog.html.twig", "C:\\COPIE PIDEV SYMFONY\\Trie + Recherche Ajax + Front modifié\\FirstProject\\templates\\client\\showblog.html.twig");
    }
}
