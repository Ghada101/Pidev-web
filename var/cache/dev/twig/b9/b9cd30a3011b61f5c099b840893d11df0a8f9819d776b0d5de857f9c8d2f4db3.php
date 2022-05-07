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
class __TwigTemplate_1656510fa70a3b80e2c5e3b8247981ad106fe77b2574306e67abd2d1b3a4b7a5 extends Template
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
        echo "<!-- slider_area_start -->
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Agencies</h3>
                            <p>We are delighted to provide you the best services !</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Agencies</h3>
                            <p>We are delighted to provide you the best services !</p>
                           <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_3 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Agencies</h3>
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

<!-- where_togo_area_start  -->
<div class=\"where_togo_area\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-3\">
                <div class=\"form_area\">
      
                </div>
            </div>
            <div class=\"col-lg-9\">
                <div class=\"search_wrap\">
                    <form class=\"search_form\" action=\"#\">
                        <div class=\"input_field\">
                            <input type=\"text\" placeholder=\"Agency name?\" id =\"seachBarAgency\">
                        </div>
                        <div class=\"input_field\">
                            <input id=\"datepicker\" placeholder=\"Date\">
                        </div>
                        <div class=\"input_field\">
                            <select>
                                <option data-display=\"Travel type\">Travel type</option>
                                <option value=\"1\">Some option</option>
                                <option value=\"2\">Another option</option>
                            </select>
                        </div>
                        <div class=\"search_btn\">
                            <button class=\"boxed-btn4 \" type=\"submit\" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"popular_places_area\" style=\"margin-left: 50px\">
        <div class=\"row\">
            <div class=\"col-lg-8\" style=\"margin-left: 5%\">
                <div class=\"row\" id=\"agencyHolder\">

                </div>
            </div>

        </div>
        <div class=\"navigation\">
            <nav class=\"blog-pagination justify-content-center d-flex\">
                <ul class=\"pagination\" id=\"navigationPaginated\">
                </ul>
            </nav>
        </div>
    </div>
    </div>

    <script>
        var pageNumber = 1;
        const agencyHolder = document.getElementById('agencyHolder');
        const searchField = document.getElementById('seachBarAgency');
        const paginated = document.getElementById('navigationPaginated');

        console.log(searchField.value);

        function getAgencies(e, pageNumber = 1) {
            const name = searchField.value
            const PATH = name ? \"/agency/search/\" + name + \"/\" + pageNumber : \"/agency/SearchAll/\" + pageNumber;
            fetch(PATH, {
                method: 'GET',
            }).then(res => res.json()).then((data) => {
                agencyHolder.innerHTML = \"\";
                data.forEach(agency => {
                    if (typeof (agency) !== \"object\") {
                        paginated.innerHTML = \"\";
                        for (let i = 1; i <= agency; i++) {
                            paginated.innerHTML += `<li class=\"page-item\"><a class=\"page-link\" href=\"#\" onclick=\"getAgencies(null,\${i})\">\${i}</a></li>`;
                        }
                    } else {
                        agencyHolder.innerHTML += `<div class=\"col-lg-5\" style=\"margin: auto;  padding: 10px;\">
                    <div class=\"col-lg-20\">
                        <div class=\"single_place\">
                            <div class=\"thumb\">
                                <img src=\"/upload/images/\${agency.imageagency}\" alt=\"\" />
                                <a href=\"#\" class=\"prise\">\${agency.numberofavailablecars}</a>
                            </div>
                            <div class=\"place_info\">
                                <a href=\"/car/front/\${agency.idAgency}\">
                                    <h3>\${agency.nameagency}</h3>
                                </a>
                                <p>\${agency.agencyphonenumber}</p>
                                <p>\${agency.agencylocation}</p>
                                <div class=\"rating_days d-flex justify-content-between\" style=\"padding-left: 290px\">
                                    <div class=\"form-row\">
                                        <p>\${agency.nbrlike}</p>
                                        <a href=\"/agencylove/new/\${agency.idAgency}\">
                                        <img src=\"/img/Heart/heartLike.png\" style=\"height: 30px\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>`
                    }
                })
            }).catch((err) => console.log(err))
        }

        getAgencies(null)
        searchField.addEventListener('change', getAgencies)
    </script>
    <script>
        var botmanWidget = {
            frameEndpoint: '";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chatframe");
        echo "',
            chatServer: '";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("msg");
        echo "',
            introMessage: 'Well, hello customer\\n i am AllInTravel assistant , What can I do for you?',
            title: 'My Chatbot',
            mainColor: '#DC143C',
            bubbleBackground: '#DC143C',
            aboutText: ''
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

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
        return array (  251 => 162,  247 => 161,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Frontoffice/basefront.html.twig' %}
{% block title %}Agency{% endblock %}
{% block body %}
<!-- slider_area_start -->
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Agencies</h3>
                            <p>We are delighted to provide you the best services !</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Agencies</h3>
                            <p>We are delighted to provide you the best services !</p>
                           <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_3 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Agencies</h3>
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

<!-- where_togo_area_start  -->
<div class=\"where_togo_area\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-3\">
                <div class=\"form_area\">
      
                </div>
            </div>
            <div class=\"col-lg-9\">
                <div class=\"search_wrap\">
                    <form class=\"search_form\" action=\"#\">
                        <div class=\"input_field\">
                            <input type=\"text\" placeholder=\"Agency name?\" id =\"seachBarAgency\">
                        </div>
                        <div class=\"input_field\">
                            <input id=\"datepicker\" placeholder=\"Date\">
                        </div>
                        <div class=\"input_field\">
                            <select>
                                <option data-display=\"Travel type\">Travel type</option>
                                <option value=\"1\">Some option</option>
                                <option value=\"2\">Another option</option>
                            </select>
                        </div>
                        <div class=\"search_btn\">
                            <button class=\"boxed-btn4 \" type=\"submit\" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class=\"popular_places_area\" style=\"margin-left: 50px\">
        <div class=\"row\">
            <div class=\"col-lg-8\" style=\"margin-left: 5%\">
                <div class=\"row\" id=\"agencyHolder\">

                </div>
            </div>

        </div>
        <div class=\"navigation\">
            <nav class=\"blog-pagination justify-content-center d-flex\">
                <ul class=\"pagination\" id=\"navigationPaginated\">
                </ul>
            </nav>
        </div>
    </div>
    </div>

    <script>
        var pageNumber = 1;
        const agencyHolder = document.getElementById('agencyHolder');
        const searchField = document.getElementById('seachBarAgency');
        const paginated = document.getElementById('navigationPaginated');

        console.log(searchField.value);

        function getAgencies(e, pageNumber = 1) {
            const name = searchField.value
            const PATH = name ? \"/agency/search/\" + name + \"/\" + pageNumber : \"/agency/SearchAll/\" + pageNumber;
            fetch(PATH, {
                method: 'GET',
            }).then(res => res.json()).then((data) => {
                agencyHolder.innerHTML = \"\";
                data.forEach(agency => {
                    if (typeof (agency) !== \"object\") {
                        paginated.innerHTML = \"\";
                        for (let i = 1; i <= agency; i++) {
                            paginated.innerHTML += `<li class=\"page-item\"><a class=\"page-link\" href=\"#\" onclick=\"getAgencies(null,\${i})\">\${i}</a></li>`;
                        }
                    } else {
                        agencyHolder.innerHTML += `<div class=\"col-lg-5\" style=\"margin: auto;  padding: 10px;\">
                    <div class=\"col-lg-20\">
                        <div class=\"single_place\">
                            <div class=\"thumb\">
                                <img src=\"/upload/images/\${agency.imageagency}\" alt=\"\" />
                                <a href=\"#\" class=\"prise\">\${agency.numberofavailablecars}</a>
                            </div>
                            <div class=\"place_info\">
                                <a href=\"/car/front/\${agency.idAgency}\">
                                    <h3>\${agency.nameagency}</h3>
                                </a>
                                <p>\${agency.agencyphonenumber}</p>
                                <p>\${agency.agencylocation}</p>
                                <div class=\"rating_days d-flex justify-content-between\" style=\"padding-left: 290px\">
                                    <div class=\"form-row\">
                                        <p>\${agency.nbrlike}</p>
                                        <a href=\"/agencylove/new/\${agency.idAgency}\">
                                        <img src=\"/img/Heart/heartLike.png\" style=\"height: 30px\">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>`
                    }
                })
            }).catch((err) => console.log(err))
        }

        getAgencies(null)
        searchField.addEventListener('change', getAgencies)
    </script>
    <script>
        var botmanWidget = {
            frameEndpoint: '{{ path(\"chatframe\") }}',
            chatServer: '{{ path(\"msg\") }}',
            introMessage: 'Well, hello customer\\n i am AllInTravel assistant , What can I do for you?',
            title: 'My Chatbot',
            mainColor: '#DC143C',
            bubbleBackground: '#DC143C',
            aboutText: ''
        };
    </script>
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

{% endblock %}
", "Frontoffice/agency/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\agency\\show.html.twig");
    }
}
