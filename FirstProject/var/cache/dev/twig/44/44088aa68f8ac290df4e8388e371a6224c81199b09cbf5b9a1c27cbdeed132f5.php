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

/* coaching/index.html.twig */
class __TwigTemplate_51b4387da73ebd4c96c7add90d5bfc197ba1d7f0e98c2cf8beba5c80247a28f4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching/index.html.twig"));

        $this->parent = $this->loadTemplate("base-admin.html.twig", "coaching/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Coaching index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Coaching index</h1>
     ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "            <div class=\"alert alert-success\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <div class=\"row\">
                                <div class=\"col-md-12  align-self-center\">
                                    <div class=\"card bg-white mb-6\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Gestion des seances coaching</h5>
                                            <div class=\"table-responsive\">

                                                   <table class=\"table table-hover\">
        <thead>
            <tr>
                <th class=\"border-top-0\">";
        // line 23
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 23, $this->source); })()), "IdSeance", "Id");
        echo "</th>
                <th class=\"border-top-0\">";
        // line 24
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 24, $this->source); })()), "DateSeance", "DateS");
        echo "</th>
                <th class=\"border-top-0\">";
        // line 25
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 25, $this->source); })()), "Prix", "Prix");
        echo "</th>
                <th class=\"border-top-0\">";
        // line 26
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 26, $this->source); })()), "NomUser", "NomUser");
        echo "</th>
                <th class=\"border-top-0\">";
        // line 27
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 27, $this->source); })()), "PrenomUser", "PrenomUser");
        echo "</th>
                <th class=\"border-top-0\">validation</th>
                <th class=\"border-top-0\">actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 33, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["coaching"]) {
            // line 34
            echo "            <tr>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "dateS", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "prix", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "nomUser", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "prenomUser", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                 <td>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_show", ["id" => twig_get_attribute($this->env, $this->source, $context["coaching"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["coaching"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\">edit</a>
                    
                </td>
                <td>
                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_show", ["id" => twig_get_attribute($this->env, $this->source, $context["coaching"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["coaching"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">edit</a>
                    
                </td>
                
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coaching'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
        
    </table>
    
                                        </div>

                                    </div>
                                </div>
                    
                            </div>                                                 
                        </div><!-- container -->


                   
    ";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 71, $this->source); })()));
        echo " 

    <a class=\"btn btn-info\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_coaching_new");
        echo "\"> Create new </a>
    <a class=\"btn btn-secondary\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coaching_stat");
        echo "\"> Stat </a>
    <a class=\"btn btn-dark\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf");
        echo "\"> PDF </a>
   
    
    
    
   
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "coaching/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 75,  234 => 74,  230 => 73,  225 => 71,  209 => 57,  200 => 53,  189 => 47,  185 => 46,  178 => 42,  174 => 41,  169 => 39,  165 => 38,  161 => 37,  157 => 36,  153 => 35,  150 => 34,  145 => 33,  136 => 27,  132 => 26,  128 => 25,  124 => 24,  120 => 23,  107 => 12,  98 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-admin.html.twig' %}

{% block title %}Coaching index{% endblock %}

{% block body %}
    <h1>Coaching index</h1>
     {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"row\">
                                <div class=\"col-md-12  align-self-center\">
                                    <div class=\"card bg-white mb-6\">
                                        <div class=\"card-body new-user\">
                                            <h5 class=\"header-title mb-4 mt-0\">Gestion des seances coaching</h5>
                                            <div class=\"table-responsive\">

                                                   <table class=\"table table-hover\">
        <thead>
            <tr>
                <th class=\"border-top-0\">{{knp_pagination_sortable(coachings,'IdSeance','Id')  }}</th>
                <th class=\"border-top-0\">{{knp_pagination_sortable(coachings,'DateSeance','DateS')  }}</th>
                <th class=\"border-top-0\">{{knp_pagination_sortable(coachings,'Prix','Prix')  }}</th>
                <th class=\"border-top-0\">{{knp_pagination_sortable(coachings,'NomUser','NomUser')  }}</th>
                <th class=\"border-top-0\">{{knp_pagination_sortable(coachings,'PrenomUser','PrenomUser')  }}</th>
                <th class=\"border-top-0\">validation</th>
                <th class=\"border-top-0\">actions</th>
            </tr>
        </thead>
        <tbody>
        {% for coaching in coachings %}
            <tr>
                <td>{{ coaching.id }}</td>
                <td>{{ coaching.dateS }}</td>
                <td>{{ coaching.prix }}</td>
                <td>{{ coaching.nomUser }}</td>
                <td>{{ coaching.prenomUser }}</td>
                 <td>
                    <a href=\"{{ path('app_coaching_show', {'id': coaching.id}) }}\">show</a>
                    <a href=\"{{ path('app_coaching_edit', {'id': coaching.id}) }}\">edit</a>
                    
                </td>
                <td>
                    <a href=\"{{ path('app_coaching_show', {'id': coaching.id}) }}\">show</a>
                    <a href=\"{{ path('app_coaching_edit', {'id': coaching.id}) }}\">edit</a>
                    
                </td>
                
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        
    </table>
    
                                        </div>

                                    </div>
                                </div>
                    
                            </div>                                                 
                        </div><!-- container -->


                   
    {{ knp_pagination_render(coachings) }} 

    <a class=\"btn btn-info\" href=\"{{path('app_coaching_new')}}\"> Create new </a>
    <a class=\"btn btn-secondary\" href=\"{{path('coaching_stat')}}\"> Stat </a>
    <a class=\"btn btn-dark\" href=\"{{path('pdf')}}\"> PDF </a>
   
    
    
    
   
    
{% endblock %}
", "coaching/index.html.twig", "C:\\Users\\WAEL\\Desktop\\3eme\\pidev\\copie\\FirstProject\\templates\\coaching\\index.html.twig");
    }
}
