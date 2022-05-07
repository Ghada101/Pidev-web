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

/* Frontoffice/rent/edit.html.twig */
class __TwigTemplate_413acdb09298c05101c82691eab10d88289c9c69b8fdd004635a13d298d95c9a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/edit.html.twig"));

        // line 1
        echo "<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Rent</title>

    <!-- Google font -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Reservationbootstrap.min.css"), "html", null, true);
        echo "\" />
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <style>
        .section {
            position: relative;
            height: 100vh;
        }

        .section .section-center {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        #booking {
            font-family: 'Montserrat', sans-serif;
            background-image: url('";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/CarbackgroundReservation.jpg"), "html", null, true);
        echo "');
            background-size: cover;
            background-position: center;
        }

        #booking::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background: rgba(250,128,114, 0.3);
        }

        .booking-form {
            background-color: #fff;
            padding: 50px 20px;
            -webkit-box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
            border-radius: 4px;
        }

        .booking-form .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .booking-form .form-control {
            background-color: #ebecee;
            border-radius: 4px;
            border: none;
            height: 40px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #3e485c;
            font-size: 14px;
        }

        .booking-form .form-control::-webkit-input-placeholder {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form .form-control:-ms-input-placeholder {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form .form-control::placeholder {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form input[type=\"date\"].form-control:invalid {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .booking-form select.form-control+.select-arrow {
            position: absolute;
            right: 0px;
            bottom: 4px;
            width: 32px;
            line-height: 32px;
            height: 32px;
            text-align: center;
            pointer-events: none;
            color: rgba(62, 72, 92, 0.3);
            font-size: 14px;
        }

        .booking-form select.form-control+.select-arrow:after {
            content: '\\279C';
            display: block;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .booking-form .form-label {
            display: inline-block;
            color: #3e485c;
            font-weight: 700;
            margin-bottom: 6px;
            margin-left: 7px;
        }

        .booking-form .submit-btn {
            display: inline-block;
            color: #fff;
            background-color: #1e62d8;
            font-weight: 700;
            padding: 14px 30px;
            border-radius: 4px;
            border: none;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .booking-form .submit-btn:hover,
        .booking-form .submit-btn:focus {
            opacity: 0.9;
        }

        .booking-cta {
            margin-top: 80px;
            margin-bottom: 30px;
        }

        .booking-cta h1 {
            font-size: 52px;
            text-transform: uppercase;
            color: #fff;
            font-weight: 700;
        }

        .booking-cta p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
";
        // line 161
        echo "
";
        // line 198
        echo "
";
        // line 201
        echo "<body>
";
        // line 202
        $this->displayBlock('body', $context, $blocks);
        // line 248
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 202
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 203
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div id=\"booking\" class=\"section\">
        <div class=\"section-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-md-push-5\">
                        <div class=\"booking-cta\">
                            <h1>Make your reservation</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
                                ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                                Perspiciatis.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-md-pull-7\">
                        <div class=\"booking-form\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <span class=\"form-label\">Start Date</span>
                                        ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "startdate", [], "any", false, false, false, 223), 'widget', ["attr" => ["type" => "date"]]);
        echo "
                                        ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "startdate", [], "any", false, false, false, 224), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <span class=\"form-label\">End Date</span>
                                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "enddate", [], "any", false, false, false, 230), 'widget', ["attr" => ["type" => "date"]]);
        echo "
                                        ";
        // line 231
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "enddate", [], "any", false, false, false, 231), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-btn\" style=\"padding-left: 75px\" >
                                <button class=\"submit-btn\" style=\"background-color: #fa8072\">
                                    ";
        // line 237
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 237, $this->source); })()), "Confirm Rent")) : ("Confirm Rent")), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 246
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 246, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/rent/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 246,  293 => 237,  284 => 231,  280 => 230,  271 => 224,  267 => 223,  243 => 203,  233 => 202,  222 => 248,  220 => 202,  217 => 201,  214 => 198,  211 => 161,  84 => 36,  59 => 14,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Rent</title>

    <!-- Google font -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\">

    <!-- Bootstrap -->
    <link type=\"text/css\" rel=\"stylesheet\" href=\"{{asset('css/Reservationbootstrap.min.css')}}\" />
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <style>
        .section {
            position: relative;
            height: 100vh;
        }

        .section .section-center {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        #booking {
            font-family: 'Montserrat', sans-serif;
            background-image: url('{{ asset('img/CarbackgroundReservation.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        #booking::before {
            content: '';
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            background: rgba(250,128,114, 0.3);
        }

        .booking-form {
            background-color: #fff;
            padding: 50px 20px;
            -webkit-box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 5px 20px -5px rgba(0, 0, 0, 0.3);
            border-radius: 4px;
        }

        .booking-form .form-group {
            position: relative;
            margin-bottom: 30px;
        }

        .booking-form .form-control {
            background-color: #ebecee;
            border-radius: 4px;
            border: none;
            height: 40px;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: #3e485c;
            font-size: 14px;
        }

        .booking-form .form-control::-webkit-input-placeholder {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form .form-control:-ms-input-placeholder {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form .form-control::placeholder {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form input[type=\"date\"].form-control:invalid {
            color: rgba(62, 72, 92, 0.3);
        }

        .booking-form select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .booking-form select.form-control+.select-arrow {
            position: absolute;
            right: 0px;
            bottom: 4px;
            width: 32px;
            line-height: 32px;
            height: 32px;
            text-align: center;
            pointer-events: none;
            color: rgba(62, 72, 92, 0.3);
            font-size: 14px;
        }

        .booking-form select.form-control+.select-arrow:after {
            content: '\\279C';
            display: block;
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg);
        }

        .booking-form .form-label {
            display: inline-block;
            color: #3e485c;
            font-weight: 700;
            margin-bottom: 6px;
            margin-left: 7px;
        }

        .booking-form .submit-btn {
            display: inline-block;
            color: #fff;
            background-color: #1e62d8;
            font-weight: 700;
            padding: 14px 30px;
            border-radius: 4px;
            border: none;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .booking-form .submit-btn:hover,
        .booking-form .submit-btn:focus {
            opacity: 0.9;
        }

        .booking-cta {
            margin-top: 80px;
            margin-bottom: 30px;
        }

        .booking-cta h1 {
            font-size: 52px;
            text-transform: uppercase;
            color: #fff;
            font-weight: 700;
        }

        .booking-cta p {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
{#{% block body %}#}

{#    {{ form_start(form,{'attr': {'novalidate': 'novalidate' }} ) }}#}
{#    <!-- newletter_area_end  -->#}
{#    <section class=\"contact-section\">#}
{#        <div class=\"container\">#}
{#            <div class=\"row\">#}
{#                <div class=\"col-12\">#}
{#                    <h2 class=\"contact-title\">Please enter your credentials !</h2>#}
{#                </div>#}
{#                <div class=\"col-lg-8\">#}
{#                    <div class=\"row\">#}
{#                        <div class=\"col-12\">#}
{#                            <div class=\"form-group\">#}
{#                                <label for=\"start\">Start date:</label>#}
{#                                <div class=\"input_field\">#}
{#                                    {{ form_widget(form.startdate ,{'attr' : {'type' : 'date'}}  ) }}#}
{#                                    {{ form_errors(form.startdate) }}#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                        <div class=\"col-12\">#}
{#                            <div class=\"form-group\">#}
{#                                <label for=\"start\">End date:</label>#}
{#                                <div class=\"input_field\">#}
{#                                    {{ form_widget(form.enddate , {'attr' : {'type' : 'date'  }}  ) }}#}
{#                                    {{ form_errors(form.enddate) }}#}
{#                                </div>#}
{#                            </div>#}
{#                        </div>#}
{#                    </div>#}
{#                </div>#}
{#            </div>#}
{#            <div class=\"form-group mt-3\">#}
{#                <button class=\"button button-contactForm boxed-btn\">{{ button_label|default('Send') }}</button>#}
{#            </div>#}
{#        </div>#}
{#    </section>#}

{#    {{ form_end(form) }}#}
{#{% endblock %}#}
<body>
{% block body %}
    {{ form_start(form,{'attr': {'novalidate': 'novalidate' }} ) }}
    <div id=\"booking\" class=\"section\">
        <div class=\"section-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-7 col-md-push-5\">
                        <div class=\"booking-cta\">
                            <h1>Make your reservation</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
                                ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
                                Perspiciatis.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-4 col-md-pull-7\">
                        <div class=\"booking-form\">
                            <div class=\"row\">
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <span class=\"form-label\">Start Date</span>
                                        {{ form_widget(form.startdate ,{'attr' : {'type' : 'date'}}  ) }}
                                        {{ form_errors(form.startdate) }}
                                    </div>
                                </div>
                                <div class=\"col-sm-6\">
                                    <div class=\"form-group\">
                                        <span class=\"form-label\">End Date</span>
                                        {{ form_widget(form.enddate ,{'attr' : {'type' : 'date'}}  ) }}
                                        {{ form_errors(form.enddate) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-btn\" style=\"padding-left: 75px\" >
                                <button class=\"submit-btn\" style=\"background-color: #fa8072\">
                                    {{ button_label|default('Confirm Rent') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ form_end(form) }}
{% endblock %}
</body>
</html>", "Frontoffice/rent/edit.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\rent\\edit.html.twig");
    }
}
