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

/* Frontoffice/rent/index.html.twig */
class __TwigTemplate_5a5adb3693d6f2fdf0de2b6765e83210ac0596c5de53972ac7a5c970da30d18c extends Template
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
        return "Frontoffice/basefront.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/index.html.twig"));

        $this->parent = $this->loadTemplate("Frontoffice/basefront.html.twig ", "Frontoffice/rent/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>actions</th>
                /tr>
        </thead><
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rents"]) || array_key_exists("rents", $context) ? $context["rents"] : (function () { throw new RuntimeError('Variable "rents" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rent"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            ((twig_get_attribute($this->env, $this->source, $context["rent"], "startdate", [], "any", false, false, false, 15)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "startdate", [], "any", false, false, false, 15), "Y-m-d , h:m"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 16
            ((twig_get_attribute($this->env, $this->source, $context["rent"], "enddate", [], "any", false, false, false, 16)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rent"], "enddate", [], "any", false, false, false, 16), "Y-m-d , h:m"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>
                    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rent_edit", ["idrent" => twig_get_attribute($this->env, $this->source, $context["rent"], "idrent", [], "any", false, false, false, 18), "idAgency" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "idagency", [], "any", false, false, false, 18), "idAgency", [], "any", false, false, false, 18), "idCar" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rent"], "idCar", [], "any", false, false, false, 18), "idCar", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/rent/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 26,  106 => 22,  97 => 18,  92 => 16,  88 => 15,  85 => 14,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Frontoffice/basefront.html.twig ' %}
{% block body %}
    <div class=\"container\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>actions</th>
                /tr>
        </thead><
        <tbody>
        {% for rent in rents %}
            <tr>
                <td>{{ rent.startdate ? rent.startdate|date('Y-m-d , h:m') : '' }}</td>
                <td>{{ rent.enddate ? rent.enddate|date('Y-m-d , h:m') : '' }}</td>
                <td>
                    <a href=\"{{ path('app_rent_edit', {'idrent': rent.idrent ,'idAgency':rent.idagency.idAgency,'idCar':rent.idCar.idCar}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    </div>
{% endblock %}
", "Frontoffice/rent/index.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\rent\\index.html.twig");
    }
}
