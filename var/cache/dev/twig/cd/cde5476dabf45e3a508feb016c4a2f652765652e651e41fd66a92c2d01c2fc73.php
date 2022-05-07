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

/* Frontoffice/hotel/scriptRatings.html.twig */
class __TwigTemplate_13870ccb80995366f1a843ad8c3c3e02a3e0b153535410afcc700708f49f83b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/hotel/scriptRatings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/hotel/scriptRatings.html.twig"));

        // line 1
        echo "<html> 
<head>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
</head>
<style>


.star-rated {
  float: left;
  unicode-bidi: bidi-override;
  direction: rtl;
  font-size: 28px;
  margin-top: -11px;
  color: #c60000;
  margin-left: 10px;
  margin-right: 10px;
}
.star-rated > span {
  display: inline-block;
  position: relative;
  width: 0.7em;
  cursor: pointer;
}
.star-rated > span:hover:before,
.star-rated > span:hover ~ span:before,
.star-rated > span.upstar-rated:before,
.star-rated > span.upstar-rated ~ span:before {
  content: \"\\2605\";
  position: absolute;
}

.rating {
   width: 180px;
}

.rating__star {
   cursor: pointer;
   color: #dabd18b2;
}
</style>

<body>
<div class=\"popular_places_area\">
        <div class=\"container\">
  <div class=\"row\">
      <div class=\"col-lg-10\">
          <div class=\"row\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 49
            echo "              <div class=\"col-lg-6 col-md-6\">
                  <div class=\"single_place\">
                      <div class=\"thumb\">
                          <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/") . twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelImg", [], "any", false, false, false, 52)), "html", null, true);
            echo "\" alt=\"\"
                          style=\"width:100%;height:100%;
                          display: block; margin-left: auto; margin-right: auto;\" }>
                      <a class =\"prise\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("indexFront", ["idHotel" => twig_get_attribute($this->env, $this->source, $context["hotel"], "idHotel", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelLocation", [], "any", false, false, false, 55), "html", null, true);
            echo "</a>
                      </div>
                      <div class=\"place_info\">
                          <a href=\"#\"><h3>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelName", [], "any", false, false, false, 58), "html", null, true);
            echo "</h3></a>
                          <a href=\"#\"><h4>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelDescription", [], "any", false, false, false, 59), "html", null, true);
            echo "</h4></a>
                          <p><i class=\"fa fa-phone\" aria-hidden=\"true\"> </i> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hotel"], "hotelPhone", [], "any", false, false, false, 60), "html", null, true);
            echo "</p>
                          <div class=\"rating_days d-flex justify-content-between\">        
                              <div id=\"Appstar-rated\" class=\"star-rated\">
                                <span id=\"spanstar-ratedFirst\" title=\"5\">☆</span>
                                  <span id=\"spanstar-ratedsecond\" title=\"4\">☆</span>
                                  <span id=\"spanstar-ratedthird\" title=\"3\">☆</span>
                                  <span id=\"spanstar-ratedFourth\" title=\"2\">☆</span>
                                  <span id=\"spanstar-ratedFifth\" title=\"1\">☆</span>
                                  <button class=\"btn btn-info\" id=\"test\">test</button>
                                </div> 
                              

                                        <div class=\"days\">
                                            <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                            <a href=\"#\">";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["hotel"], "fkHotelchain", [], "any", false, false, false, 74), "hotelchainName", [], "any", false, false, false, 74), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        
                    </div> 
                    <div class=\"navigation\">
                            ";
        // line 84
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["hotels"]) || array_key_exists("hotels", $context) ? $context["hotels"] : (function () { throw new RuntimeError('Variable "hotels" does not exist.', 84, $this->source); })()));
        echo "
                        </div>
                </div>
            </div>
        </div>
    </div>

    

";
        // line 93
        $this->displayBlock('script', $context, $blocks);
        // line 162
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 93
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 94
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
document.getElementById('Appstar-rated').addEventListener('click', function(event) {
  if (event.target.tagName.toLowerCase() != 'span') return;
  
  if (event.target.classList.contains('upstar-rated')) {
    event.target.classList.remove('upstar-rated');
  } else {
    Array.prototype.forEach.call(document.getElementsByClassName('upstar-rated'), function(el) {
      el.classList.remove('upstar-rated');
    });
    event.target.classList.add('upstar-rated');
    console.log(\"rating\");
  }
});

let rating = 0; 
let star1 = document.getElementById('spanstar-ratedFirst'); 
let star2 = document.getElementById('spanstar-ratedsecond'); 
let star3 = document.getElementById('spanstar-ratedthird'); 
let star4 = document.getElementById('spanstar-ratedFourth'); 
let star5 = document.getElementById('spanstar-ratedFifth'); 
star1.onclick=function() {
rating = 5;
  console.log(rating);
}
star2.onclick=function() {
rating = 4;
  console.log(rating);
}
star3.onclick=function() {
rating = 3;
  console.log(rating);
}
star4.onclick=function() {
rating = 2;
  console.log(rating);
}
star5.onclick=function() {
rating = 1;
  console.log(rating);

}

 function greeting() {
        \$.ajax({
            type: \"POST\", 
            url: \"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_rating");
        echo "\",
            data:{ rating: rating, path:'ajax' },
            success: function (response) {
              //console.log(JSON.parse(response));
              console.log(\"sucess\");
              
            }
        });
    }

let buttonVar = document.getElementById(\"test\");
buttonVar.onclick=function() {
  greeting();
  console.log(\"mchaat\");
}
 
 
 
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/hotel/scriptRatings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 142,  196 => 94,  186 => 93,  173 => 162,  171 => 93,  159 => 84,  154 => 81,  141 => 74,  124 => 60,  120 => 59,  116 => 58,  108 => 55,  102 => 52,  97 => 49,  93 => 48,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html> 
<head>
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
</head>
<style>


.star-rated {
  float: left;
  unicode-bidi: bidi-override;
  direction: rtl;
  font-size: 28px;
  margin-top: -11px;
  color: #c60000;
  margin-left: 10px;
  margin-right: 10px;
}
.star-rated > span {
  display: inline-block;
  position: relative;
  width: 0.7em;
  cursor: pointer;
}
.star-rated > span:hover:before,
.star-rated > span:hover ~ span:before,
.star-rated > span.upstar-rated:before,
.star-rated > span.upstar-rated ~ span:before {
  content: \"\\2605\";
  position: absolute;
}

.rating {
   width: 180px;
}

.rating__star {
   cursor: pointer;
   color: #dabd18b2;
}
</style>

<body>
<div class=\"popular_places_area\">
        <div class=\"container\">
  <div class=\"row\">
      <div class=\"col-lg-10\">
          <div class=\"row\">
              {% for hotel in hotels %}
              <div class=\"col-lg-6 col-md-6\">
                  <div class=\"single_place\">
                      <div class=\"thumb\">
                          <img src=\"{{ asset('uploads/') ~hotel.hotelImg}}\" alt=\"\"
                          style=\"width:100%;height:100%;
                          display: block; margin-left: auto; margin-right: auto;\" }>
                      <a class =\"prise\" href=\"{{ path('indexFront' , {'idHotel': hotel.idHotel }) }}\">{{ hotel.hotelLocation }}</a>
                      </div>
                      <div class=\"place_info\">
                          <a href=\"#\"><h3>{{ hotel.hotelName }}</h3></a>
                          <a href=\"#\"><h4>{{ hotel.hotelDescription }}</h4></a>
                          <p><i class=\"fa fa-phone\" aria-hidden=\"true\"> </i> {{ hotel.hotelPhone  }}</p>
                          <div class=\"rating_days d-flex justify-content-between\">        
                              <div id=\"Appstar-rated\" class=\"star-rated\">
                                <span id=\"spanstar-ratedFirst\" title=\"5\">☆</span>
                                  <span id=\"spanstar-ratedsecond\" title=\"4\">☆</span>
                                  <span id=\"spanstar-ratedthird\" title=\"3\">☆</span>
                                  <span id=\"spanstar-ratedFourth\" title=\"2\">☆</span>
                                  <span id=\"spanstar-ratedFifth\" title=\"1\">☆</span>
                                  <button class=\"btn btn-info\" id=\"test\">test</button>
                                </div> 
                              

                                        <div class=\"days\">
                                            <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                            <a href=\"#\">{{ hotel.fkHotelchain.hotelchainName }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                        
                    </div> 
                    <div class=\"navigation\">
                            {{ knp_pagination_render(hotels) }}
                        </div>
                </div>
            </div>
        </div>
    </div>

    

{% block script %}
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

<script>
document.getElementById('Appstar-rated').addEventListener('click', function(event) {
  if (event.target.tagName.toLowerCase() != 'span') return;
  
  if (event.target.classList.contains('upstar-rated')) {
    event.target.classList.remove('upstar-rated');
  } else {
    Array.prototype.forEach.call(document.getElementsByClassName('upstar-rated'), function(el) {
      el.classList.remove('upstar-rated');
    });
    event.target.classList.add('upstar-rated');
    console.log(\"rating\");
  }
});

let rating = 0; 
let star1 = document.getElementById('spanstar-ratedFirst'); 
let star2 = document.getElementById('spanstar-ratedsecond'); 
let star3 = document.getElementById('spanstar-ratedthird'); 
let star4 = document.getElementById('spanstar-ratedFourth'); 
let star5 = document.getElementById('spanstar-ratedFifth'); 
star1.onclick=function() {
rating = 5;
  console.log(rating);
}
star2.onclick=function() {
rating = 4;
  console.log(rating);
}
star3.onclick=function() {
rating = 3;
  console.log(rating);
}
star4.onclick=function() {
rating = 2;
  console.log(rating);
}
star5.onclick=function() {
rating = 1;
  console.log(rating);

}

 function greeting() {
        \$.ajax({
            type: \"POST\", 
            url: \"{{ path('app_hotel_rating')}}\",
            data:{ rating: rating, path:'ajax' },
            success: function (response) {
              //console.log(JSON.parse(response));
              console.log(\"sucess\");
              
            }
        });
    }

let buttonVar = document.getElementById(\"test\");
buttonVar.onclick=function() {
  greeting();
  console.log(\"mchaat\");
}
 
 
 
</script>
{% endblock %}
</body>

</html>
", "Frontoffice/hotel/scriptRatings.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\hotel\\scriptRatings.html.twig");
    }
}
