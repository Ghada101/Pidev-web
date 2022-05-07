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

/* Backoffice/agency/new.html.twig */
class __TwigTemplate_53c4fa5c62df9be7a92c7eee542a0e3c714b4464296fed71d2f61f955c826abb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/agency/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/agency/new.html.twig"));

        $this->parent = $this->loadTemplate("Backoffice/baseback.html.twig", "Backoffice/agency/new.html.twig", 1);
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

        echo "New Agency";
        
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
        echo "    <h1>Create new Agency</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

    <div class=\"form-group\">
        <div class=\"form-row\">

    <div class=\"col-md-4 mb-3\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "nameagency", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Name"]]);
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nameagency", [], "any", false, false, false, 15), 'errors');
        echo "
    </div>
            <div class=\"col-md-4 mb-3\">

                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "agencyphonenumber", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Agency phone number"]]);
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "agencyphonenumber", [], "any", false, false, false, 20), 'errors');
        echo "
            </div>
    </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "agencylocation", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Location"]]);
        echo "
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "agencylocation", [], "any", false, false, false, 26), 'errors');
        echo "
            </div>
            <div class=\"col-md-4 mb-3\">

                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "agencydescription", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Description"]]);
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "agencydescription", [], "any", false, false, false, 31), 'errors');
        echo "
            </div>
    </div>
        <div class=\"form-row\">
            <div class=\"col-md-2 mb-3\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "numberofcars", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Number of cars"]]);
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "numberofcars", [], "any", false, false, false, 37), 'errors');
        echo "
            </div>
            <div class=\"col-md-2 mb-3\">

                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "numberofavailablecars", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Cars available"]]);
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "numberofavailablecars", [], "any", false, false, false, 42), 'errors');
        echo "
            </div>
            <div class=\"vich-image\">
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "imageFile", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "imageFile", [], "any", false, false, false, 46), 'errors');
        echo "
            </div>

    </div>
    <button class=\"btn btn-primary mb-2\">";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 50, $this->source); })()), "Create")) : ("Create")), "html", null, true);
        echo "</button>

    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/agency/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 52,  179 => 50,  172 => 46,  168 => 45,  162 => 42,  158 => 41,  151 => 37,  147 => 36,  139 => 31,  135 => 30,  128 => 26,  124 => 25,  116 => 20,  112 => 19,  105 => 15,  101 => 14,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backoffice/baseback.html.twig' %}

{% block title %}New Agency{% endblock %}

{% block body %}
    <h1>Create new Agency</h1>

    {{form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

    <div class=\"form-group\">
        <div class=\"form-row\">

    <div class=\"col-md-4 mb-3\">
        {{ form_widget(form.nameagency,{'attr' : {'class' : 'form-control' , \"placeholder\":\" Name\" }} ) }}
        {{ form_errors(form.nameagency) }}
    </div>
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(form.agencyphonenumber,{\"attr\":{'class' : 'form-control', \"placeholder\":\" Agency phone number\"}}) }}
                {{ form_errors(form.agencyphonenumber) }}
            </div>
    </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">
                {{ form_widget(form.agencylocation,{'attr' : {'class' : 'form-control' , \"placeholder\":\" Location\" }} ) }}
                {{ form_errors(form.agencylocation) }}
            </div>
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(form.agencydescription,{\"attr\":{'class' : 'form-control', \"placeholder\":\" Description\"}}) }}
                {{ form_errors(form.agencydescription) }}
            </div>
    </div>
        <div class=\"form-row\">
            <div class=\"col-md-2 mb-3\">
                {{ form_widget(form.numberofcars,{'attr' : {'class' : 'form-control'  , \"placeholder\":\" Number of cars\"}} ) }}
                {{ form_errors(form.numberofcars) }}
            </div>
            <div class=\"col-md-2 mb-3\">

                {{ form_widget(form.numberofavailablecars,{'attr':{'class' : 'form-control', \"placeholder\":\" Cars available\"}}) }}
                {{ form_errors(form.numberofavailablecars) }}
            </div>
            <div class=\"vich-image\">
                {{ form_widget(form.imageFile,{'attr':{'class' : 'form-control'}}) }}
                {{ form_errors(form.imageFile) }}
            </div>

    </div>
    <button class=\"btn btn-primary mb-2\">{{ button_label|default('Create') }}</button>

    {{ form_end(form) }}

{% endblock %}", "Backoffice/agency/new.html.twig", "C:\\Users\\aymen\\allintravel\\templates\\Backoffice\\agency\\new.html.twig");
    }
}
