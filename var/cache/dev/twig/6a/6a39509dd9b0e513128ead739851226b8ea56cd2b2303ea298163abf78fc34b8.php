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

/* Backoffice/room/index.html.twig */
class __TwigTemplate_73bdd1af42e08b4426096d0302270b2650862e1dffb3683437406b59a7bd1b55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/room/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/room/index.html.twig"));

        $this->parent = $this->loadTemplate("backOffice/baseBack.html.twig", "Backoffice/room/index.html.twig", 1);
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

        echo "HotelRoom index";
        
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
        echo "
<!-- Page Heading -->
        <a class=\"btn btn-info mb-4\"  href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_new");
        echo "\" style=\"margin-left:90%\">Create new</a>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "            <div class=\"alert alert-success\">
                ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
 
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "            <div class=\"alert alert-info\">
                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    

      <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h4 class=\"m-0 font-weight-bold text-primary\">Hotel Rooms</h4>
            </div>
                <div class=\"card-body\">
                
                    <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
              
        <thead>
            <tr>
                <th>RoomType</th>
                <th>RoomCapacity</th>
                <th>Nbrroom</th>
                <th>Price</th>
                <th>hotel</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 49, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 50
            echo "            <tr>               
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomType", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomCapacity", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "nbrroom", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "fkHotel", [], "any", false, false, false, 55), "hotelName", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 56
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["room"], "image", [], "any", false, false, false, 56)), "html", null, true);
            echo "\" alt=\"\" style=\"border: 1px solid #ddd; max-width:100px;height:auto; display: block;margin-left: auto;margin-right: auto;\" }></td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_show", ["idRoom" => twig_get_attribute($this->env, $this->source, $context["room"], "idRoom", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_room_edit", ["idRoom" => twig_get_attribute($this->env, $this->source, $context["room"], "idRoom", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>
            <div class=\"navigation\">
                ";
        // line 70
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 70, $this->source); })()));
        echo "
            </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/room/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 70,  231 => 67,  222 => 63,  213 => 59,  209 => 58,  204 => 56,  200 => 55,  196 => 54,  192 => 53,  188 => 52,  184 => 51,  181 => 50,  176 => 49,  151 => 26,  142 => 23,  139 => 22,  135 => 21,  132 => 20,  123 => 17,  120 => 16,  116 => 15,  112 => 13,  103 => 11,  100 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backOffice/baseBack.html.twig' %}

{% block title %}HotelRoom index{% endblock %}

{% block body %}

<!-- Page Heading -->
        <a class=\"btn btn-info mb-4\"  href=\"{{ path('app_room_new') }}\" style=\"margin-left:90%\">Create new</a>
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{message}}
            </div>
        {% endfor %} 
 
        {% for message in app.flashes('info') %}
            <div class=\"alert alert-info\">
                {{message}}
            </div>
        {% endfor %}
        
        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{message}}
            </div>
        {% endfor %}
    

      <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h4 class=\"m-0 font-weight-bold text-primary\">Hotel Rooms</h4>
            </div>
                <div class=\"card-body\">
                
                    <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
              
        <thead>
            <tr>
                <th>RoomType</th>
                <th>RoomCapacity</th>
                <th>Nbrroom</th>
                <th>Price</th>
                <th>hotel</th>
                <th>Image</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for room in rooms %}
            <tr>               
                <td>{{ room.roomType }}</td>
                <td>{{ room.roomCapacity }}</td>
                <td>{{ room.nbrroom }}</td>
                <td>{{ room.price }}</td>
                <td>{{ room.fkHotel.hotelName }}</td>
                <td><img src=\"{{ asset('uploads/') ~room.image}}\" alt=\"\" style=\"border: 1px solid #ddd; max-width:100px;height:auto; display: block;margin-left: auto;margin-right: auto;\" }></td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_room_show', {'idRoom': room.idRoom}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_room_edit', {'idRoom': room.idRoom}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
            <div class=\"navigation\">
                {{ knp_pagination_render(rooms) }}
            </div>

{% endblock %}
", "Backoffice/room/index.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\room\\index.html.twig");
    }
}
