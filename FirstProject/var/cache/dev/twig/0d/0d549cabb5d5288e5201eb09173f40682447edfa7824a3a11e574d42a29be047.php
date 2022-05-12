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

/* coaching/pdf.html.twig */
class __TwigTemplate_f2ad6111791d2387477570a580dc26265e9e35a08981b9194cb2b243512a3ae8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coaching/pdf.html.twig"));

        // line 1
        echo "
<div class=\"table-responsive\">
    <table border=\"2\" class=\"table mb-0\">
        <thead>
        <tr>
            <th>id</th>
            <th>DateS</th>
            <th>Prix</th>
            <th>NomUser</th>
            <th>PrenomUser</th>
            
                             
        </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["coachings"]) || array_key_exists("coachings", $context) ? $context["coachings"] : (function () { throw new RuntimeError('Variable "coachings" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["coaching"]) {
            // line 17
            echo "        <tr>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "dateS", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "prix", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "nomUser", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coaching"], "prenomUser", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coaching'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>

</table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "coaching/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  83 => 22,  79 => 21,  75 => 20,  71 => 19,  67 => 18,  64 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"table-responsive\">
    <table border=\"2\" class=\"table mb-0\">
        <thead>
        <tr>
            <th>id</th>
            <th>DateS</th>
            <th>Prix</th>
            <th>NomUser</th>
            <th>PrenomUser</th>
            
                             
        </tr>
        </thead>
        <tbody>
        {%   for coaching in coachings  %}
        <tr>
            <td>{{ coaching.id }}</td>
                <td>{{ coaching.dateS }}</td>
                <td>{{ coaching.prix }}</td>
                <td>{{ coaching.nomUser }}</td>
                <td>{{ coaching.prenomUser }}</td>
        </tr>

        {% endfor %}
        </tbody>

</table>
</div>", "coaching/pdf.html.twig", "C:\\Users\\WAEL\\Desktop\\3eme\\pidev\\copie\\FirstProject\\templates\\coaching\\pdf.html.twig");
    }
}
