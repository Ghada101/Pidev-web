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

/* Frontoffice/topic/_form.html.twig */
class __TwigTemplate_8aeb03970432c5c91b029a47ddb1f1e79a37848497e64e64ac6725ac9066bee0 extends Template
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
        // line 7
        return "FrontOffice/baseFrontFinal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/topic/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/topic/_form.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/baseFrontFinal.html.twig", "Frontoffice/topic/_form.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

     <section class=\"blog_area section-padding\">
     <div class=\"container\">
     <div class=\"row\">
     <div class=\"col-lg-6 mb-5 mb-lg-0\">
     <div class=\"blog_left_sidebar\">
<div class=\"form-group\">
    <br></br>
   <div style=\"text-align: center;\"> <h4 class=\"widget_title\">Update your Topic </h4></div>
    <div class=\"input-group mb-3\">

        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "topicTitle", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Topic Title"]]);
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "topicTitle", [], "any", false, false, false, 22), 'errors');
        echo "
    </div>
    <div class=\"input-group mb-3\">
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "topicDescription", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control w-100", "placeholder" => "Topic Description"]]);
        echo "
        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "topicDescription", [], "any", false, false, false, 26), 'errors');
        echo "
    </div>
    <div class=\"input-group mb-3\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "imageFile", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "imageFile", [], "any", false, false, false, 30), 'errors');
        echo "
    </div>
</div>

<button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 34, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
     </div>
     </div>
     </div>
     </div>
     </section>
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/topic/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  114 => 34,  107 => 30,  103 => 29,  97 => 26,  93 => 25,  87 => 22,  83 => 21,  68 => 9,  58 => 8,  35 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{ form_start(form) }}
    {{ form_widget(form) }}
    <button class=\"button button-contactForm btn_1 boxed-btn\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}

 ********************* #}
{% extends 'FrontOffice/baseFrontFinal.html.twig' %}
 {% block body %}
{{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

     <section class=\"blog_area section-padding\">
     <div class=\"container\">
     <div class=\"row\">
     <div class=\"col-lg-6 mb-5 mb-lg-0\">
     <div class=\"blog_left_sidebar\">
<div class=\"form-group\">
    <br></br>
   <div style=\"text-align: center;\"> <h4 class=\"widget_title\">Update your Topic </h4></div>
    <div class=\"input-group mb-3\">

        {{ form_widget(form.topicTitle, {'attr': {'class': 'form-control' , 'placeholder' : 'Topic Title'}}) }}
        {{ form_errors(form.topicTitle) }}
    </div>
    <div class=\"input-group mb-3\">
        {{ form_widget(form.topicDescription, {'attr': {'class': 'form-control w-100' , 'placeholder' : 'Topic Description'}}) }}
        {{ form_errors(form.topicDescription) }}
    </div>
    <div class=\"input-group mb-3\">
        {{ form_widget(form.imageFile, {'attr': {'class': 'form-control'}}) }}
        {{ form_errors(form.imageFile) }}
    </div>
</div>

<button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">{{ button_label|default('Save') }}</button>
     </div>
     </div>
     </div>
     </div>
     </section>
{{ form_end(form) }}
{% endblock %}", "Frontoffice/topic/_form.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\topic\\_form.html.twig");
    }
}
