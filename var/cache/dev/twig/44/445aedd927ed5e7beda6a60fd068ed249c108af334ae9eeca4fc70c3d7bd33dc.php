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

/* Backoffice/hotel/new.html.twig */
class __TwigTemplate_67ab5b85016fba425e3a73b6c11200ae974d529998668dc53a941153929c431c extends Template
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
        return "backOffice/baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/hotel/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/hotel/new.html.twig"));

        $this->parent = $this->loadTemplate("backOffice/baseBack.html.twig", "Backoffice/hotel/new.html.twig", 1);
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

        echo "New Hotel";
        
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
        echo "    <h1>Create new Hotel</h1>
    
<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotel_index");
        echo "\">
 <span style=\"margin-left: 90%\">Back to the list</span>
  <i class=\"fa fa-angle-right\"></i>
  </a>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

   <div class=\"form-group\">
    <label for=\"name\">Name</label>
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "hotelName", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
         
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "hotelName", [], "any", false, false, false, 18), 'errors');
        echo "
   </div>
  
   <div class=\"form-group\">
    <label for=\"name\">staff</label>


      ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "hotelStaff", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "hotelStaff", [], "any", false, false, false, 27), 'errors');
        echo "
  </div>

   <div class=\"form-group\">
    <label for=\"name\">location</label>


      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "hotelLocation", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "hotelLocation", [], "any", false, false, false, 36), 'errors');
        echo "
  </div>
<div class=\"form-group\">
    <label for=\"name\">phone</label>


      ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "hotelPhone", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "hotelPhone", [], "any", false, false, false, 44), 'errors');
        echo "
  </div>
<div class=\"form-group\">
    <label for=\"name\">description</label>


      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "hotelDescription", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "hotelDescription", [], "any", false, false, false, 52), 'errors');
        echo "
  </div>
<div class=\"form-group\">
    <label for=\"name\">image</label>


      ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "hotelImg", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "hotelImg", [], "any", false, false, false, 60), 'errors');
        echo "
  </div>
  <div class=\"form-group\">
    <label for=\"name\">hotelChain</label>


      ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "fkHotelchain", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "fkHotelchain", [], "any", false, false, false, 68), 'errors');
        echo "
  </div>
      <button class=\"btn btn-primary mb-2\">";
        // line 70
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 70, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

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
        return "Backoffice/hotel/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 72,  202 => 70,  197 => 68,  192 => 66,  183 => 60,  178 => 58,  169 => 52,  164 => 50,  155 => 44,  150 => 42,  141 => 36,  136 => 34,  126 => 27,  121 => 25,  111 => 18,  106 => 16,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'backOffice/baseBack.html.twig' %}

{% block title %}New Hotel{% endblock %}

{% block body %}
    <h1>Create new Hotel</h1>
    
<a href=\"{{ path('app_hotel_index') }}\">
 <span style=\"margin-left: 90%\">Back to the list</span>
  <i class=\"fa fa-angle-right\"></i>
  </a>
{{form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

   <div class=\"form-group\">
    <label for=\"name\">Name</label>
      {{ form_widget(form.hotelName , {'attr' : {'class' : 'form-control'  }}  ) }}
         
        {{ form_errors(form.hotelName) }}
   </div>
  
   <div class=\"form-group\">
    <label for=\"name\">staff</label>


      {{ form_widget(form.hotelStaff , {'attr' : {'class' : 'form-control'  }}  ) }}
                                
        {{ form_errors(form.hotelStaff) }}
  </div>

   <div class=\"form-group\">
    <label for=\"name\">location</label>


      {{ form_widget(form.hotelLocation , {'attr' : {'class' : 'form-control'  }}  ) }}
                                
        {{ form_errors(form.hotelLocation) }}
  </div>
<div class=\"form-group\">
    <label for=\"name\">phone</label>


      {{ form_widget(form.hotelPhone , {'attr' : {'class' : 'form-control'  }}  ) }}
                                
        {{ form_errors(form.hotelPhone) }}
  </div>
<div class=\"form-group\">
    <label for=\"name\">description</label>


      {{ form_widget(form.hotelDescription , {'attr' : {'class' : 'form-control'  }}  ) }}
                                
        {{ form_errors(form.hotelDescription) }}
  </div>
<div class=\"form-group\">
    <label for=\"name\">image</label>


      {{ form_widget(form.hotelImg , {'attr' : {'class' : 'form-control'  }}  ) }}
                                
        {{ form_errors(form.hotelImg) }}
  </div>
  <div class=\"form-group\">
    <label for=\"name\">hotelChain</label>


      {{ form_widget(form.fkHotelchain , {'attr' : {'class' : 'form-control'  }}  ) }}
                                
        {{ form_errors(form.fkHotelchain) }}
  </div>
      <button class=\"btn btn-primary mb-2\">{{ button_label|default('Save') }}</button>

  {{ form_end(form) }} 
{% endblock %}
", "Backoffice/hotel/new.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\hotel\\new.html.twig");
    }
}
