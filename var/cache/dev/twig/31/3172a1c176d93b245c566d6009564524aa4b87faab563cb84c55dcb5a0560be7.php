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

/* backOffice/hotelchain/index.html.twig */
class __TwigTemplate_8fa03ca92d240e95e96041d046617440278fb4a37d7492a386657f623ae617fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/hotelchain/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "backOffice/hotelchain/index.html.twig"));

        $this->parent = $this->loadTemplate("backOffice/baseBack.html.twig", "backOffice/hotelchain/index.html.twig", 1);
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

        echo "HotelChain index";
        
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
";
        // line 11
        echo "        <a class=\"btn btn-info mb-4\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotelchain_new");
        echo "\" style=\"margin-left:90%\">Create new</a>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "            <div class=\"alert alert-success\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo " 

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "            <div class=\"alert alert-info\">
                ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    


      <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h4 class=\"m-0 font-weight-bold text-primary\">Hotel Chains</h4>
            </div>
                <div class=\"card-body\">
                
                    <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    
        <thead>
            <tr>
                
                <th>HotelchainName</th>
                <th>HotelchainStaff</th>
                <th>HotelchainDescription</th>
                <th>Phone</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotelchains"]) || array_key_exists("hotelchains", $context) ? $context["hotelchains"] : (function () { throw new RuntimeError('Variable "hotelchains" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["hotelchain"]) {
            // line 53
            echo "            <tr>
                
                <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotelchain"], "hotelchainName", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotelchain"], "hotelchainStaff", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotelchain"], "hotelchainDescription", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotelchain"], "phone", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td>          
                <a class=\"btn btn-success\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotelchain_show", ["idHotelchain" => twig_get_attribute($this->env, $this->source, $context["hotelchain"], "idHotelchain", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">show</a>
                <a class=\"btn btn-warning\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotelchain_edit", ["idHotelchain" => twig_get_attribute($this->env, $this->source, $context["hotelchain"], "idHotelchain", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">edit</a>
                
                
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotelchain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        
        </tbody>
    </table>
  </div>
        <div class=\"navigation\">
                ";
        // line 76
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["hotelchains"]) || array_key_exists("hotelchains", $context) ? $context["hotelchains"] : (function () { throw new RuntimeError('Variable "hotelchains" does not exist.', 76, $this->source); })()));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "backOffice/hotelchain/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 76,  228 => 71,  219 => 67,  208 => 61,  204 => 60,  199 => 58,  195 => 57,  191 => 56,  187 => 55,  183 => 53,  178 => 52,  153 => 29,  144 => 26,  141 => 25,  137 => 24,  134 => 23,  125 => 20,  122 => 19,  118 => 18,  114 => 16,  105 => 14,  102 => 13,  98 => 12,  93 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backOffice/baseBack.html.twig' %}

{% block title %}HotelChain index{% endblock %}

{% block body %}


<!-- Page Heading -->
{# <a class=\"btn btn-success\" href=\"{{ path('excel') }}\">EXCEL</a>
 #}
        <a class=\"btn btn-info mb-4\"  href=\"{{ path('app_hotelchain_new') }}\" style=\"margin-left:90%\">Create new</a>
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
                <h4 class=\"m-0 font-weight-bold text-primary\">Hotel Chains</h4>
            </div>
                <div class=\"card-body\">
                
                    <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    
        <thead>
            <tr>
                
                <th>HotelchainName</th>
                <th>HotelchainStaff</th>
                <th>HotelchainDescription</th>
                <th>Phone</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for hotelchain in hotelchains %}
            <tr>
                
                <td>{{ hotelchain.hotelchainName }}</td>
                <td>{{ hotelchain.hotelchainStaff }}</td>
                <td>{{ hotelchain.hotelchainDescription }}</td>
                <td>{{ hotelchain.phone }}</td>
                <td>          
                <a class=\"btn btn-success\" href=\"{{ path('app_hotelchain_show', {'idHotelchain': hotelchain.idHotelchain}) }}\">show</a>
                <a class=\"btn btn-warning\" href=\"{{ path('app_hotelchain_edit', {'idHotelchain': hotelchain.idHotelchain}) }}\">edit</a>
                
                
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
        
        </tbody>
    </table>
  </div>
        <div class=\"navigation\">
                {{ knp_pagination_render(hotelchains) }}
            </div>
        </div>
    </div>
{% endblock %}
", "backOffice/hotelchain/index.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\hotelchain\\index.html.twig");
    }
}
