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

/* Frontoffice/hotel/contentajax.html.twig */
class __TwigTemplate_c11c4f88d2f69ab8e1a281869146057ce5b215b296d92a3311d7e2fffc6355c8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/hotel/contentajax.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/hotel/contentajax.html.twig"));

        // line 1
        echo "
<table id='commandeSection' class=\"table table-bordered\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>HotelName</th>
                <th>HotelStaff</th>
                <th>HotelLocation</th>
                <th>HotelPhone</th>
                <th>HotelDescription</th>
                <th>Hotel Chain</th>
                <th>HotelImg</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 16, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 17
            echo "            <tr>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelName", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelStaff", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelLocation", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelPhone", [], "any", false, false, false, 21), "html", null, true);
            echo "</td> 
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelDescription", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "fkHotelchain", [], "any", false, false, false, 23), "hotelchainName", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelImg", [], "any", false, false, false, 24)), "html", null, true);
            echo "\" alt=\"\" style=\"border: 1px solid #ddd; max-width:100px;height:auto; display: block;margin-left: auto;margin-right: auto;\" }></td>
                <td>
                    <a class=\"btn btn-success\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_show", ["idHotel" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idHotel", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\">show</a>
                    <a class=\"btn btn-warning\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_edit", ["idHotel" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idHotel", [], "any", false, false, false, 27)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        
        </tbody> 
    </table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/hotel/contentajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  110 => 31,  101 => 27,  97 => 26,  92 => 24,  88 => 23,  84 => 22,  80 => 21,  76 => 20,  72 => 19,  68 => 18,  65 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table id='commandeSection' class=\"table table-bordered\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>HotelName</th>
                <th>HotelStaff</th>
                <th>HotelLocation</th>
                <th>HotelPhone</th>
                <th>HotelDescription</th>
                <th>Hotel Chain</th>
                <th>HotelImg</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for hotel in hotels %}
            <tr>
                <td>{{ hotel.hotelName }}</td>
                <td>{{ hotel.hotelStaff }}</td>
                <td>{{ hotel.hotelLocation }}</td>
                <td>{{ hotel.hotelPhone }}</td> 
                <td>{{ hotel.hotelDescription }}</td>
                <td>{{ hotel.fkHotelchain.hotelchainName }}</td>
                <td><img src=\"{{ asset('uploads/') ~hotel.hotelImg}}\" alt=\"\" style=\"border: 1px solid #ddd; max-width:100px;height:auto; display: block;margin-left: auto;margin-right: auto;\" }></td>
                <td>
                    <a class=\"btn btn-success\" href=\"{{ path('app_hotel_show', {'idHotel': hotel.idHotel}) }}\">show</a>
                    <a class=\"btn btn-warning\" href=\"{{ path('app_hotel_edit', {'idHotel': hotel.idHotel}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"8\">no records found</td>
            </tr>
        {% endfor %}
        
        </tbody> 
    </table>", "Frontoffice/hotel/contentajax.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\hotel\\contentajax.html.twig");
    }
}
