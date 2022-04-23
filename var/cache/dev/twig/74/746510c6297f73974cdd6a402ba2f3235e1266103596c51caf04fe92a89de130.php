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

/* Frontoffice/agency/show.html.twig */
class __TwigTemplate_5961e785a32e90ce39fea33b871bae85a01c1220d1f55a3972c29777353e86c7 extends Template
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
        return "Frontoffice/basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/agency/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/agency/show.html.twig"));

        $this->parent = $this->loadTemplate("Frontoffice/basefront.html.twig", "Frontoffice/agency/show.html.twig", 1);
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

        echo "Agency";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "<div class=\"popular_places_area\" style=\"margin-left: 50px\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"filter_result_wrap\">
                        <h3>Filter Result</h3>
                        <div class=\"filter_bordered\">
                            <div class=\"filter_inner\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"single_select\">
                                            <select>
                                                <option data-display=\"Country\">Country</option>
                                                <option value=\"1\">Africa</option>
                                                <option value=\"2\">canada</option>
                                                <option value=\"4\">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"single_select\">
                                            <select>
                                                <option data-display=\"Travel type\">Travel type</option>
                                                <option value=\"1\">advance</option>
                                                <option value=\"2\">advance</option>
                                                <option value=\"4\">premium</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\" style=\"margin-left: 150px\">
        <div class=\"row\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agencies"]) || array_key_exists("agencies", $context) ? $context["agencies"] : (function () { throw new RuntimeError('Variable "agencies" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["agency"]) {
            // line 40
            echo "                    <div class=\"col-lg-5\">
                    <div class=\"col-lg-10 col-md-15\">
                        <div class=\"single_place\">
                            <div class=\"thumb\">
                                <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/images/" . twig_get_attribute($this->env, $this->source, $context["agency"], "imageagency", [], "any", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"\" />
                                <a href=\"#\" class=\"prise\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "numberofavailablecars", [], "any", false, false, false, 45), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"place_info\">
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_front_index", ["idAgency" => twig_get_attribute($this->env, $this->source, $context["agency"], "idAgency", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "nameagency", [], "any", false, false, false, 48), "html", null, true);
            echo "</h3></a>
                                <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["agency"], "agencyphonenumber", [], "any", false, false, false, 49), "html", null, true);
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
                        </div>

                    </div>

                    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return "Frontoffice/agency/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  151 => 49,  145 => 48,  139 => 45,  135 => 44,  129 => 40,  125 => 39,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Frontoffice/basefront.html.twig'%}
{% block title %}Agency{% endblock %}
{% block body %}
<div class=\"popular_places_area\" style=\"margin-left: 50px\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"filter_result_wrap\">
                        <h3>Filter Result</h3>
                        <div class=\"filter_bordered\">
                            <div class=\"filter_inner\">
                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"single_select\">
                                            <select>
                                                <option data-display=\"Country\">Country</option>
                                                <option value=\"1\">Africa</option>
                                                <option value=\"2\">canada</option>
                                                <option value=\"4\">USA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class=\"col-lg-12\">
                                        <div class=\"single_select\">
                                            <select>
                                                <option data-display=\"Travel type\">Travel type</option>
                                                <option value=\"1\">advance</option>
                                                <option value=\"2\">advance</option>
                                                <option value=\"4\">premium</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\" style=\"margin-left: 150px\">
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
                                <a href=\"{{ path('app_car_front_index',{'idAgency':agency.idAgency}) }}\"><h3>{{ agency.nameagency }}</h3></a>
                                <p>{{ agency.agencyphonenumber}}</p>
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
", "Frontoffice/agency/show.html.twig", "C:\\Users\\aymen\\allintravel\\templates\\Frontoffice\\agency\\show.html.twig");
    }
}
