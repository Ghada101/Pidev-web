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

/* Frontoffice/comment/_form.html.twig */
class __TwigTemplate_e0b0ab98d94113bda8f63417686c2b8b3b8d240c9400492c2a054dabacd0a3f3 extends Template
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
        return "FrontOffice/baseFrontFinal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/comment/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/comment/_form.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/baseFrontFinal.html.twig", "Frontoffice/comment/_form.html.twig", 1);
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
        echo "
     ";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
    <center>
        <section class=\"blog_area section-padding\">
         <div class=\"container\">
                 <div class=\"col-lg-6 mb-5 mb-lg-0\">
                     <div class=\"blog_left_sidebar\">
                         <div class=\"form-group\">
                             <br></br>
                             <div style=\"text-align: center;\"> <h4 class=\"widget_title\">Update your Comment </h4></div>
                             <div class=\"input-group mb-3\">

                                 ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "commentDescription", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Comment Description"]]);
        echo "
                                 ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "commentDescription", [], "any", false, false, false, 16), 'errors');
        echo "
                             </div>

                         </div>

                         <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 21, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                     </div>
                 </div>

         </div>
     </section>
    </center>
     ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/comment/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 28,  97 => 21,  89 => 16,  85 => 15,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontOffice/baseFrontFinal.html.twig' %}
 {% block body %}

     {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
    <center>
        <section class=\"blog_area section-padding\">
         <div class=\"container\">
                 <div class=\"col-lg-6 mb-5 mb-lg-0\">
                     <div class=\"blog_left_sidebar\">
                         <div class=\"form-group\">
                             <br></br>
                             <div style=\"text-align: center;\"> <h4 class=\"widget_title\">Update your Comment </h4></div>
                             <div class=\"input-group mb-3\">

                                 {{ form_widget(form.commentDescription, {'attr': {'class': 'form-control' , 'placeholder' : 'Comment Description'}}) }}
                                 {{ form_errors(form.commentDescription) }}
                             </div>

                         </div>

                         <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">{{ button_label|default('Save') }}</button>
                     </div>
                 </div>

         </div>
     </section>
    </center>
     {{ form_end(form) }}
 {% endblock %}
", "Frontoffice/comment/_form.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\comment\\_form.html.twig");
    }
}
