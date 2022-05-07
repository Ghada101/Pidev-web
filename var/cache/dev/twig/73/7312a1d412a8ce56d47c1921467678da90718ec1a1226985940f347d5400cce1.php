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

/* Backoffice/car/edit.html.twig */
class __TwigTemplate_40dd8ffdad6c21e23af5ea4dc38c97eb162d9fb18eee611bed85fa5fb7fac8df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/car/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/car/edit.html.twig"));

        $this->parent = $this->loadTemplate("Backoffice/baseback.html.twig", "Backoffice/car/edit.html.twig", 1);
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

        echo "Edit Car";
        
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
        echo "    <h1>Edit Car</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <div class=\"form-group\">
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">

                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 12, $this->source); })()), "namecar", [], "any", false, false, false, 12), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Car Name"]]);
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 13, $this->source); })()), "namecar", [], "any", false, false, false, 13), 'errors');
        echo "
            </div>
            <div class=\"col-md-4 mb-3\">

                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 17, $this->source); })()), "carnumber", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Car Number"]]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 18, $this->source); })()), "carnumber", [], "any", false, false, false, 18), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Description"]]);
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 25, $this->source); })()), "description", [], "any", false, false, false, 25), 'errors');
        echo "
            </div>
            <div class=\"col-md-4 mb-3\">

                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 29, $this->source); })()), "carcolor", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Color"]]);
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 30, $this->source); })()), "carcolor", [], "any", false, false, false, 30), 'errors');
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">

                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 36, $this->source); })()), "carbrand", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Brand"]]);
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 37, $this->source); })()), "carbrand", [], "any", false, false, false, 37), 'errors');
        echo "
            </div>
            <div class=\"vich-image\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 40, $this->source); })()), "imageFile", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 41, $this->source); })()), "imageFile", [], "any", false, false, false, 41), 'errors');
        echo "
            </div>
            <div class=\"col-md-4 mb-3\">
                <div class=\"form-row\">
                    <option data-display=\"Agency\">Agency</option>
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 46, $this->source); })()), "fkAgency", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 47, $this->source); })()), "fkAgency", [], "any", false, false, false, 47), 'errors');
        echo "
                </div>
            </div>
        </div>
        <button class=\"btn btn-primary mb-2\">";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 51, $this->source); })()), "Update")) : ("Update")), "html", null, true);
        echo "</button>
    </div>
    ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/car/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 53,  180 => 51,  173 => 47,  169 => 46,  161 => 41,  157 => 40,  151 => 37,  147 => 36,  138 => 30,  134 => 29,  127 => 25,  123 => 24,  114 => 18,  110 => 17,  103 => 13,  99 => 12,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backoffice/baseback.html.twig' %}

{% block title %}Edit Car{% endblock %}

{% block body %}
    <h1>Edit Car</h1>
    {{ form_start(formC,{'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(formC.namecar,{\"attr\":{'class' : 'form-control', \"placeholder\":\" Car Name\"}}) }}
                {{ form_errors(formC.namecar) }}
            </div>
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(formC.carnumber,{\"attr\":{'class' : 'form-control', \"placeholder\":\" Car Number\"}}) }}
                {{ form_errors(formC.carnumber) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(formC.description,{\"attr\":{'class' : 'form-control', \"placeholder\":\"  Description\"}}) }}
                {{ form_errors(formC.description) }}
            </div>
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(formC.carcolor,{\"attr\":{'class' : 'form-control', \"placeholder\":\"  Color\"}}) }}
                {{ form_errors(formC.carcolor) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-md-4 mb-3\">

                {{ form_widget(formC.carbrand,{\"attr\":{'class' : 'form-control', \"placeholder\":\"  Brand\"}}) }}
                {{ form_errors(formC.carbrand) }}
            </div>
            <div class=\"vich-image\">
                {{ form_widget(formC.imageFile,{'attr':{'class' : 'form-control'}}) }}
                {{ form_errors(formC.imageFile) }}
            </div>
            <div class=\"col-md-4 mb-3\">
                <div class=\"form-row\">
                    <option data-display=\"Agency\">Agency</option>
                    {{ form_widget(formC.fkAgency,{\"attr\":{'class' : 'form-control'}}) }}
                    {{ form_errors(formC.fkAgency) }}
                </div>
            </div>
        </div>
        <button class=\"btn btn-primary mb-2\">{{ button_label|default('Update') }}</button>
    </div>
    {{ form_end(formC) }}
{% endblock %}
", "Backoffice/car/edit.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\car\\edit.html.twig");
    }
}
