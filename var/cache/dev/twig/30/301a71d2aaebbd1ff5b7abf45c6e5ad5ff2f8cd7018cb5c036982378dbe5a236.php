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

/* Frontoffice/car/index.html.twig */
class __TwigTemplate_75b1188a09705a10e5726eb1684c2fd6a80d79ced9bf3fe8d30626c8c77a817d extends Template
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
        return "Frontoffice/basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/car/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/car/index.html.twig"));

        $this->parent = $this->loadTemplate("Frontoffice/basefront.html.twig", "Frontoffice/car/index.html.twig", 1);
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
        echo "<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider  d-flex align-items-center slider_bg_c1 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Cars</h3>
                            <p>We are delighted to provide you the best services !</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_c2 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Cars</h3>
                            <p>We are delighted to provide you the best services !</p>
                           <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_c3 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Cars</h3>
                            <p>We are delighted to provide you the best services !</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- slider_area_end -->


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
                                <div class=\"col-lg-12\">
                                    <div class=\"range_slider_wrap\">
                                        <span class=\"range\">Prise range</span>
                                        <div id=\"slider-range\"></div>
                                        <p>
                                            <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:#7A838B; font-weight:400;\">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8\" style=\"margin-left: 5%\">
                <div class=\"row\">
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["car"]) {
            // line 90
            echo "                        <div class=\"col-lg-5\">
                            <div class=\"col-lg-10 col-md-15\">
                                <div class=\"single_place\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("upload/images/" . twig_get_attribute($this->env, $this->source, $context["car"], "carimage", [], "any", false, false, false, 94))), "html", null, true);
            echo "\" alt=\"\" />
                                        <a href=\"#\" class=\"prise\">";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carbrand", [], "any", false, false, false, 95), "html", null, true);
            echo "</a>
                                    </div>
                                    <div class=\"place_info\">
                                        <div class=\"form-row\">
                                            <div  style=\"background-color:";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carcolor", [], "any", false, false, false, 99), "html", null, true);
            echo ";width:20px; height:20px;border-radius: 50%;margin-right: 5px\"></div>
                                            <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rent_new", ["idAgency" => (isset($context["idAgency"]) || array_key_exists("idAgency", $context) ? $context["idAgency"] : (function () { throw new RuntimeError('Variable "idAgency" does not exist.', 100, $this->source); })()), "idCar" => twig_get_attribute($this->env, $this->source, $context["car"], "idCar", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">
                                                <h3>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "namecar", [], "any", false, false, false, 101), "html", null, true);
            echo "</h3>

                                            </a>
                                        </div>
                                        <p>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["car"], "carnumber", [], "any", false, false, false, 105), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['car'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                </div>
            </div>
        </div>
        <div class=\"navigation\">
            ";
        // line 129
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cars"]) || array_key_exists("cars", $context) ? $context["cars"] : (function () { throw new RuntimeError('Variable "cars" does not exist.', 129, $this->source); })()));
        echo "
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
        return "Frontoffice/car/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 129,  218 => 125,  192 => 105,  185 => 101,  181 => 100,  177 => 99,  170 => 95,  166 => 94,  160 => 90,  156 => 89,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Frontoffice/basefront.html.twig'%}
{% block body %}
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider  d-flex align-items-center slider_bg_c1 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Cars</h3>
                            <p>We are delighted to provide you the best services !</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_c2 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Cars</h3>
                            <p>We are delighted to provide you the best services !</p>
                           <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_c3 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Cars</h3>
                            <p>We are delighted to provide you the best services !</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- slider_area_end -->


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
                                <div class=\"col-lg-12\">
                                    <div class=\"range_slider_wrap\">
                                        <span class=\"range\">Prise range</span>
                                        <div id=\"slider-range\"></div>
                                        <p>
                                            <input type=\"text\" id=\"amount\" readonly style=\"border:0; color:#7A838B; font-weight:400;\">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-8\" style=\"margin-left: 5%\">
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
                                            <a href=\"{{ path('app_rent_new',{'idAgency':idAgency,'idCar':car.idCar}) }}\">
                                                <h3>{{ car.namecar }}</h3>

                                            </a>
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
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"navigation\">
            {{ knp_pagination_render(cars) }}
        </div>

        </div>
    </div>
    </div>
{% endblock %}
", "Frontoffice/car/index.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\car\\index.html.twig");
    }
}
