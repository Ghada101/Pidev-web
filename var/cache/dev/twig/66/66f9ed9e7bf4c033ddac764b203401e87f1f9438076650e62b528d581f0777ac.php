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

/* Backoffice/car/index.html.twig */
class __TwigTemplate_607f4092e13bd14fd84f77383e78a2434a2f574d480e86423056af10fc3904fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/car/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/car/index.html.twig"));

        $this->parent = $this->loadTemplate("Backoffice/baseback.html.twig", "Backoffice/car/index.html.twig", 1);
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

        echo "Car";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <h1>Car</h1>
    <div class=\"popular_places_area\">
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
                        <div class=\"reset_btn\">
                            <a href=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_new", ["idAgency" => (isset($context["idAgency"]) || array_key_exists("idAgency", $context) ? $context["idAgency"] : (function () { throw new RuntimeError('Variable "idAgency" does not exist.', 39, $this->source); })())]), "html", null, true);
        echo ">
                            <button class=\"boxed-btn4\" type=\"submit\" >Add Car</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8\" style=\"margin-left: 100px\">
                <div class=\"row\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 49
            echo "                        <div class=\"col-lg-5\">
                            <div class=\"col-lg-10 col-md-15\">
                                <div class=\"single_place\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/images/" . twig_get_attribute($this->env, $this->source, $context["car"], "carimage", [], "any", false, false, false, 53))), "html", null, true);
            echo "\" alt=\"\" />
                                        <a href=\"#\" class=\"prise\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carbrand", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>
                                    </div>
                                    <div class=\"place_info\">
                                                <div class=\"form-row\">
                                                    <div  style=\"background-color:";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carcolor", [], "any", false, false, false, 58), "html", null, true);
            echo ";width:20px; height:20px;border-radius: 50%;margin-right: 5px\"></div>
                                                    <h3>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "namecar", [], "any", false, false, false, 59), "html", null, true);
            echo "</h3>

                                                </div>
                                        <p>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carnumber", [], "any", false, false, false, 62), "html", null, true);
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
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_delete", ["idCar" => twig_get_attribute($this->env, $this->source, $context["car"], "idCar", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\">
                                                <button class=\"boxed-btn4\" style=\"margin-left:35px;margin-bottom: 15px; \" type=\"submit\" > Delete</button>
                                            </a>
                                        </div>
                                        <div>
                                            <a href=";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_car_edit", ["idCar" => twig_get_attribute($this->env, $this->source, $context["car"], "idCar", [], "any", false, false, false, 85), "idAgency" => (isset($context["idAgency"]) || array_key_exists("idAgency", $context) ? $context["idAgency"] : (function () { throw new RuntimeError('Variable "idAgency" does not exist.', 85, $this->source); })())]), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </div>
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
        return "Backoffice/car/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 94,  196 => 85,  188 => 80,  167 => 62,  161 => 59,  157 => 58,  150 => 54,  146 => 53,  140 => 49,  136 => 48,  124 => 39,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backoffice/baseback.html.twig'%}
{% block title %}Car{% endblock %}

{% block body %}

    <h1>Car</h1>
    <div class=\"popular_places_area\">
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
                        <div class=\"reset_btn\">
                            <a href={{path('app_car_new',{'idAgency':idAgency})}}>
                            <button class=\"boxed-btn4\" type=\"submit\" >Add Car</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8\" style=\"margin-left: 100px\">
                <div class=\"row\">
                    {% for car in cars %}
                        <div class=\"col-lg-5\">
                            <div class=\"col-lg-10 col-md-15\">
                                <div class=\"single_place\">
                                    <div class=\"thumb\">
                                        <img src=\"{{ asset('upload/images/'~car.carimage)}}\" alt=\"\" />
                                        <a href=\"#\" class=\"prise\">{{ car.carbrand }}</a>
                                    </div>
                                    <div class=\"place_info\">
                                                <div class=\"form-row\">
                                                    <div  style=\"background-color:{{ car.carcolor }};width:20px; height:20px;border-radius: 50%;margin-right: 5px\"></div>
                                                    <h3>{{ car.namecar }}</h3>

                                                </div>
                                        <p>{{ car.carnumber}}</p>
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
                                            <a href=\"{{ path('app_car_delete', {'idCar': car.idCar}) }}\">
                                                <button class=\"boxed-btn4\" style=\"margin-left:35px;margin-bottom: 15px; \" type=\"submit\" > Delete</button>
                                            </a>
                                        </div>
                                        <div>
                                            <a href={{path('app_car_edit',{'idCar': car.idCar,'idAgency':idAgency})}}>
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
", "Backoffice/car/index.html.twig", "C:\\Users\\aymen\\allintravel\\templates\\Backoffice\\car\\index.html.twig");
    }
}
