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

/* Frontoffice/subject/_form.html.twig */
class __TwigTemplate_c81d27a698842ea71563d22b623d4f553cd8af881deac10d59b72fc54beac667 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/subject/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/subject/_form.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/baseFrontFinal.html.twig", "Frontoffice/subject/_form.html.twig", 1);
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
        echo "     ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

     <section class=\"blog_area section-padding\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-6 mb-5 mb-lg-0\">
                     <div class=\"blog_left_sidebar\">
                         <div class=\"form-group\">
                             <br></br>
                             <div style=\"text-align: center;\"> <h4 class=\"widget_title\">Update your Subject </h4></div>
                             <div class=\"input-group mb-3\">

                                 ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "subjectTitle", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Subject Title"]]);
        echo "
                                 ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "subjectTitle", [], "any", false, false, false, 16), 'errors');
        echo "
                             </div>
                             <div class=\"input-group mb-3\">
                                 ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "subjectDescription", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control w-100", "placeholder" => "Subject Description"]]);
        echo "
                                 ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "subjectDescription", [], "any", false, false, false, 20), 'errors');
        echo "
                             </div>
                             <div class=\"input-group mb-3\">
                                 ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "imageFile", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                 ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "imageFile", [], "any", false, false, false, 24), 'errors');
        echo "
                             </div>
                         </div>

                         <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 28, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/subject/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  115 => 28,  108 => 24,  104 => 23,  98 => 20,  94 => 19,  88 => 16,  84 => 15,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontOffice/baseFrontFinal.html.twig' %}
 {% block body %}
     {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}

     <section class=\"blog_area section-padding\">
         <div class=\"container\">
             <div class=\"row\">
                 <div class=\"col-lg-6 mb-5 mb-lg-0\">
                     <div class=\"blog_left_sidebar\">
                         <div class=\"form-group\">
                             <br></br>
                             <div style=\"text-align: center;\"> <h4 class=\"widget_title\">Update your Subject </h4></div>
                             <div class=\"input-group mb-3\">

                                 {{ form_widget(form.subjectTitle, {'attr': {'class': 'form-control' , 'placeholder' : 'Subject Title'}}) }}
                                 {{ form_errors(form.subjectTitle) }}
                             </div>
                             <div class=\"input-group mb-3\">
                                 {{ form_widget(form.subjectDescription, {'attr': {'class': 'form-control w-100' , 'placeholder' : 'Subject Description'}}) }}
                                 {{ form_errors(form.subjectDescription) }}
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
 {% endblock %}
", "Frontoffice/subject/_form.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\subject\\_form.html.twig");
    }
}
