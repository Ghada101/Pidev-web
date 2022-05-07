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

/* Backoffice/agency/show.html.twig */
class __TwigTemplate_15f0f6809e05b6dd94fd1a3de58876a6a6d845d60c69269d30ab4f408fcaa8c2 extends Template
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
        return "Backoffice/baseback.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/agency/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/agency/show.html.twig"));

        $this->parent = $this->loadTemplate("Backoffice/baseback.html.twig", "Backoffice/agency/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Agency ";
        
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
        echo "    <h1>Agency</h1>

<div class=\"popular_places_area\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"filter_result_wrap\">
                       
                        <div class=\"filter_bordered\">
                            <div class=\"filter_inner\">
                                <div class=\"row\">
                                    <div class=\"reset_btn\">
                                <a href=";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agency_new");
        echo ">
                                <button class=\"boxed-btn4\" type=\"submit\" >Create Agency</button>
                                </a>
                            </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\" style=\"margin-left: 100px\">
        <div class=\"row\">
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencies"]) || array_key_exists("agencies", $context) ? $context["agencies"] : (function () { throw new RuntimeError('Variable "agencies" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agency"]) {
            // line 30
            echo "                    <div class=\"col-lg-5\">
                    <div class=\"col-lg-10 col-md-15\">
                        <div class=\"single_place\">
                            <div class=\"thumb\">
                                <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/images/" . twig_get_attribute($this->env, $this->source, $context["agency"], "imageagency", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" alt=\"\" />
                                <a href=\"#\" class=\"prise\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "numberofavailablecars", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"place_info\">
                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_index", ["idAgency" => twig_get_attribute($this->env, $this->source, $context["agency"], "idAgency", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "nameagency", [], "any", false, false, false, 38), "html", null, true);
            echo "</h3></a>
                                <p>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "agencyphonenumber", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                                <p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "agencylocation", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
                                <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <a href=\"#\">(20 Review)</a>
                                </span>
                                    <div class=\"days\">
                                        <i class=\"fa fa-clock-o\"></i>
                                        <a href=\"#\">5 Days</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-row\" style=\"margin-right: auto;align-items: center\">
                                <div>
                                <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agency_delete", ["idAgency" => twig_get_attribute($this->env, $this->source, $context["agency"], "idAgency", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                                <button class=\"boxed-btn4\" style=\"margin-left:10% ;margin-bottom: 15px;\" type=\"submit\" > Delete</button>
                                </a>
                                    </div>
                                <div>
                                <a href=";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_agency_edit", ["idAgency" => twig_get_attribute($this->env, $this->source, $context["agency"], "idAgency", [], "any", false, false, false, 63)]), "html", null, true);
            echo ">
                                <button class=\"boxed-btn3\" style=\"margin-right: auto;margin-bottom: 15px;margin-left: 15px;padding:  13px 39px\"  type=\"submit\" >Update</button>
                                </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>

    </div>
        </div>
    </div>

</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/agency/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 74,  175 => 63,  167 => 58,  146 => 40,  142 => 39,  136 => 38,  130 => 35,  126 => 34,  120 => 30,  116 => 29,  101 => 17,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backoffice/baseback.html.twig'%}
{% block title %} Agency {% endblock %}


{% block body %}
    <h1>Agency</h1>

<div class=\"popular_places_area\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"filter_result_wrap\">
                       
                        <div class=\"filter_bordered\">
                            <div class=\"filter_inner\">
                                <div class=\"row\">
                                    <div class=\"reset_btn\">
                                <a href={{path('app_agency_new')}}>
                                <button class=\"boxed-btn4\" type=\"submit\" >Create Agency</button>
                                </a>
                            </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\" style=\"margin-left: 100px\">
        <div class=\"row\">
            {% for agency in agencies %}
                    <div class=\"col-lg-5\">
                    <div class=\"col-lg-10 col-md-15\">
                        <div class=\"single_place\">
                            <div class=\"thumb\">
                                <img src=\"{{ asset('upload/images/'~agency.imageagency)}}\" alt=\"\" />
                                <a href=\"#\" class=\"prise\">{{ agency.numberofavailablecars }}</a>
                            </div>
                            <div class=\"place_info\">
                                <a href=\"{{ path('app_car_index',{'idAgency':agency.idAgency}) }}\"><h3>{{ agency.nameagency }}</h3></a>
                                <p>{{ agency.agencyphonenumber}}</p>
                                <p>{{agency.agencylocation}}</p>
                                <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <i class=\"fa fa-star\"></i>
                                    <a href=\"#\">(20 Review)</a>
                                </span>
                                    <div class=\"days\">
                                        <i class=\"fa fa-clock-o\"></i>
                                        <a href=\"#\">5 Days</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-row\" style=\"margin-right: auto;align-items: center\">
                                <div>
                                <a href=\"{{ path('app_agency_delete', {'idAgency': agency.idAgency}) }}\">
                                <button class=\"boxed-btn4\" style=\"margin-left:10% ;margin-bottom: 15px;\" type=\"submit\" > Delete</button>
                                </a>
                                    </div>
                                <div>
                                <a href={{path('app_agency_edit',{'idAgency':agency.idAgency})}}>
                                <button class=\"boxed-btn3\" style=\"margin-right: auto;margin-bottom: 15px;margin-left: 15px;padding:  13px 39px\"  type=\"submit\" >Update</button>
                                </a>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>
    {% endfor %}
        </div>

    </div>
        </div>
    </div>

</div>



{% endblock %}
", "Backoffice/agency/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\agency\\show.html.twig");
    }
}
