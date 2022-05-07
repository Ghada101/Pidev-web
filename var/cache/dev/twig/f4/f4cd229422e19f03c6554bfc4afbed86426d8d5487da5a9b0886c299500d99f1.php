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

/* Backoffice/hotel/show.html.twig */
class __TwigTemplate_1a7f30bb5722e7fab052303026fef7d707adcc17f5bfb036b8ba6be3aa97661e extends Template
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
        return "backOffice/baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/hotel/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/hotel/show.html.twig"));

        $this->parent = $this->loadTemplate("backOffice/baseBack.html.twig", "Backoffice/hotel/show.html.twig", 1);
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

        echo "Hotel";
        
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
        echo "    <h1>Hotel</h1>
<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_index");
        echo "\">
<span style=\"margin-left: 90%\">Back to the list</span>
  <i class=\"fa fa-angle-right\"></i>
  </a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>HotelName</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 15, $this->source); })()), "hotelName", [], "any", false, false, false, 15), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HotelStaff</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 19, $this->source); })()), "hotelStaff", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HotelLocation</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 23, $this->source); })()), "hotelLocation", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HotelPhone</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 27, $this->source); })()), "hotelPhone", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HotelDescription</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 31, $this->source); })()), "hotelDescription", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>HotelImg</th>
                <td><img src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, (isset($context["hotel"]) || array_key_exists("hotel", $context) ? $context["hotel"] : (function () { throw new RuntimeError('Variable "hotel" does not exist.', 35, $this->source); })()), "hotelImg", [], "any", false, false, false, 35)), "html", null, true);
        echo "\" alt=\"\" style=\"border: 1px solid #ddd; max-width:250px;height:200px; display: block;\" }></td>
            </tr>
        </tbody>
    </table>

    ";
        // line 40
        echo twig_include($this->env, $context, "hotel/_delete_form.html.twig");
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/hotel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  137 => 35,  130 => 31,  123 => 27,  116 => 23,  109 => 19,  102 => 15,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backOffice/baseBack.html.twig' %}

{% block title %}Hotel{% endblock %}

{% block body %}
    <h1>Hotel</h1>
<a href=\"{{ path('app_hotel_index') }}\">
<span style=\"margin-left: 90%\">Back to the list</span>
  <i class=\"fa fa-angle-right\"></i>
  </a>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>HotelName</th>
                <td>{{ hotel.hotelName }}</td>
            </tr>
            <tr>
                <th>HotelStaff</th>
                <td>{{ hotel.hotelStaff }}</td>
            </tr>
            <tr>
                <th>HotelLocation</th>
                <td>{{ hotel.hotelLocation }}</td>
            </tr>
            <tr>
                <th>HotelPhone</th>
                <td>{{ hotel.hotelPhone }}</td>
            </tr>
            <tr>
                <th>HotelDescription</th>
                <td>{{ hotel.hotelDescription }}</td>
            </tr>
            <tr>
                <th>HotelImg</th>
                <td><img src=\"{{ asset('uploads/') ~hotel.hotelImg}}\" alt=\"\" style=\"border: 1px solid #ddd; max-width:250px;height:200px; display: block;\" }></td>
            </tr>
        </tbody>
    </table>

    {{ include('hotel/_delete_form.html.twig') }}


{% endblock %}
", "Backoffice/hotel/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\hotel\\show.html.twig");
    }
}
