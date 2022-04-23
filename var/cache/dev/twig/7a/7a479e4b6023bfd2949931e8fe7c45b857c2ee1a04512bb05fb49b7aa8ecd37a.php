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

/* Frontoffice/rent/new.html.twig */
class __TwigTemplate_1baca01902115df5e31ee9deaf774e02662a5a14ce3a22027053281036a108f8 extends Template
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
        return "Frontoffice/baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/new.html.twig"));

        $this->parent = $this->loadTemplate("Frontoffice/baseFront.html.twig", "Frontoffice/rent/new.html.twig", 1);
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

        echo "Rent";
        
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
    <!-- newletter_area_start  -->
    <div class=\"newletter_area overlay\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-10\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"newsletter_text\">
                                <h4>Rent right now the disponibility will be expired soon</h4>
                                <p>Thanks for choosing our services  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <!-- newletter_area_end  -->
    <section class=\"contact-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"contact-title\">Please enter your credentials !</h2>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <label for=\"start\">Start date:</label>
                                <div class=\"input_field\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "startdate", [], "any", false, false, false, 43), 'widget', ["attr" => ["type" => "date"]]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "startdate", [], "any", false, false, false, 44), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <label for=\"start\">End date:</label>
                                <div class=\"input_field\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "enddate", [], "any", false, false, false, 52), 'widget', ["attr" => ["type" => "date"]]);
        echo "
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "enddate", [], "any", false, false, false, 53), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>

                    </div>


                    <div class=\"form-group mt-3\">
                        <button class=\"button button-contactForm boxed-btn\">";
        // line 64
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 64, $this->source); })()), "Send")) : ("Send")), "html", null, true);
        echo "</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    ";
        // line 72
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/rent/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  163 => 64,  149 => 53,  145 => 52,  134 => 44,  130 => 43,  112 => 28,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Frontoffice/baseFront.html.twig' %}

{% block title %}Rent{% endblock %}

{% block body %}

    <!-- newletter_area_start  -->
    <div class=\"newletter_area overlay\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-10\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"newsletter_text\">
                                <h4>Rent right now the disponibility will be expired soon</h4>
                                <p>Thanks for choosing our services  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{form_start(form,{'attr': {'novalidate': 'novalidate' }} ) }}

    <!-- newletter_area_end  -->
    <section class=\"contact-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <h2 class=\"contact-title\">Please enter your credentials !</h2>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <label for=\"start\">Start date:</label>
                                <div class=\"input_field\">
                                {{ form_widget(form.startdate ,{'attr' : {'type' : 'date'}}  ) }}
                                {{ form_errors(form.startdate) }}
                                </div>
                            </div>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"form-group\">
                                <label for=\"start\">End date:</label>
                                <div class=\"input_field\">
                                {{ form_widget(form.enddate , {'attr' : {'type' : 'date'  }}  ) }}
                                {{ form_errors(form.enddate) }}
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>

                    </div>


                    <div class=\"form-group mt-3\">
                        <button class=\"button button-contactForm boxed-btn\">{{ button_label|default('Send') }}</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{ form_end(form) }}
{% endblock %}", "Frontoffice/rent/new.html.twig", "C:\\Users\\aymen\\allintravel\\templates\\Frontoffice\\rent\\new.html.twig");
    }
}
