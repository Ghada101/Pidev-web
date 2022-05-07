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

/* Backoffice/car/new.html.twig */
class __TwigTemplate_1a3c4b082e0a19d0f7a2adf7674ff8a9a8f7f6767fd4475843c256d5fc64a216 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/car/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/car/new.html.twig"));

        $this->parent = $this->loadTemplate("Backoffice/baseback.html.twig", "Backoffice/car/new.html.twig", 1);
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

        echo "New Car";
        
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
        echo "    <h1>Create new Car</h1>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 6, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
<div class=\"form-group\">
    <div class=\"form-row\">
    <div class=\"col-md-4 mb-3\">

        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 11, $this->source); })()), "namecar", [], "any", false, false, false, 11), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Car Name"]]);
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 12, $this->source); })()), "namecar", [], "any", false, false, false, 12), 'errors');
        echo "
    </div>
    <div class=\"col-md-4 mb-3\">

        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 16, $this->source); })()), "carnumber", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control", "placeholder" => " Car Number"]]);
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 17, $this->source); })()), "carnumber", [], "any", false, false, false, 17), 'errors');
        echo "
    </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-md-4 mb-3\">

            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 23, $this->source); })()), "description", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Description"]]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'errors');
        echo "
        </div>
        <div class=\"col-md-4 mb-3\">

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 28, $this->source); })()), "carcolor", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "  Color"]]);
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formC"]) || array_key_exists("formC", $context) ? $context["formC"] : (function () { throw new RuntimeError('Variable "formC" does not exist.', 29, $this->source); })()), "carcolor", [], "any", false, false, false, 29), 'errors');
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
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 51, $this->source); })()), "Create")) : ("Create")), "html", null, true);
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
        return "Backoffice/car/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 53,  181 => 51,  174 => 47,  170 => 46,  162 => 41,  158 => 40,  152 => 37,  148 => 36,  138 => 29,  134 => 28,  127 => 24,  123 => 23,  114 => 17,  110 => 16,  103 => 12,  99 => 11,  91 => 6,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Backoffice/baseback.html.twig' %}

{% block title %}New Car{% endblock %}
{% block body %}
    <h1>Create new Car</h1>
{{form_start(formC,{'attr': {'novalidate': 'novalidate'}} ) }}
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
    <button class=\"btn btn-primary mb-2\">{{ button_label|default('Create') }}</button>
</div>
{{ form_end(formC) }}

{% endblock %}
", "Backoffice/car/new.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\car\\new.html.twig");
    }
}
