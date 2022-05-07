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

/* frontOffice/room/indexFront.html.twig */
class __TwigTemplate_3d7193d2b2826d8babd8b9d38e1e05c85b5f049881bf02cf6e0d506619d2b618 extends Template
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
        return "frontOffice/baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontOffice/room/indexFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontOffice/room/indexFront.html.twig"));

        $this->parent = $this->loadTemplate("frontOffice/baseFront.html.twig", "frontOffice/room/indexFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<body>
    <!-- bradcam_area  -->
    <div class=\"bradcam_area bradcam_bg_4 mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"bradcam_text text-center\">
                        <h3>Rooms</h3>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area   -->
    <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center mb_80\">
                        <h3>Take a Look !</h3>
                    </div>
                </div>
            </div>

<!--================Blog Area =================-->
    <section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\"> 
                    
                    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 37
            echo "                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                            <img class=\"card-img rounded-0\" src=\"";
            // line 39
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["room"], "image", [], "any", false, false, false, 39)), "html", null, true);
            echo "\" alt=\"\">
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_book_new", ["idroom" => twig_get_attribute($this->env, $this->source, $context["room"], "idRoom", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"class=\"blog_item_date\">
                                    <h3>Book</h3>
                                    <p>NOW</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2> Capacity: ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomCapacity", [], "any", false, false, false, 48), "html", null, true);
            echo "</h2>
                                    <h2> Type: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "roomType", [], "any", false, false, false, 49), "html", null, true);
            echo "</h2>
                                </a>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                            ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["room"], "price", [], "any", false, false, false, 53), "html", null, true);
            echo " DT</a> </li>
                                    <li><a href=\"#\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["room"], "fkHotel", [], "any", false, false, false, 54), "hotelName", [], "any", false, false, false, 54), "html", null, true);
            echo " </a></li>
                                </ul>
                            </div>
                        </article> 

                        
                         
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    </div>
                </div>
              
               
            </div>
            <div class=\"navigation\">
                ";
        // line 68
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["rooms"]) || array_key_exists("rooms", $context) ? $context["rooms"] : (function () { throw new RuntimeError('Variable "rooms" does not exist.', 68, $this->source); })()));
        echo "
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "frontOffice/room/indexFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 68,  171 => 62,  157 => 54,  153 => 53,  146 => 49,  142 => 48,  131 => 40,  127 => 39,  123 => 37,  119 => 36,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontOffice/baseFront.html.twig' %}


{% block title %}HotelRoom index{% endblock %}

{% block body %}
<body>
    <!-- bradcam_area  -->
    <div class=\"bradcam_area bradcam_bg_4 mb-50\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"bradcam_text text-center\">
                        <h3>Rooms</h3>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area   -->
    <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    <div class=\"section_title text-center mb_80\">
                        <h3>Take a Look !</h3>
                    </div>
                </div>
            </div>

<!--================Blog Area =================-->
    <section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 mb-5 mb-lg-0\">
                    <div class=\"blog_left_sidebar\"> 
                    
                    {% for room in rooms %}
                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                            <img class=\"card-img rounded-0\" src=\"{{ asset('uploads/') ~room.image}}\" alt=\"\">
                            <a href=\"{{ path('app_book_new' , {'idroom': room.idRoom}) }}\"class=\"blog_item_date\">
                                    <h3>Book</h3>
                                    <p>NOW</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"single-blog.html\">
                                    <h2> Capacity: {{ room.roomCapacity }}</h2>
                                    <h2> Type: {{ room.roomType}}</h2>
                                </a>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                            {{ room.price }} DT</a> </li>
                                    <li><a href=\"#\"><i class=\"fa fa-building\" aria-hidden=\"true\"></i> {{ room.fkHotel.hotelName }} </a></li>
                                </ul>
                            </div>
                        </article> 

                        
                         
                        {% endfor %}
                    </div>
                </div>
              
               
            </div>
            <div class=\"navigation\">
                {{ knp_pagination_render(rooms) }}
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


</body>

{% endblock %}
", "frontOffice/room/indexFront.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\room\\indexFront.html.twig");
    }
}
