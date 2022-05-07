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

/* Backoffice/hotelchain/new.html.twig */
class __TwigTemplate_fc54f1971df189be1430c7cfe155ab88d7cf210e36edaa1e09f6e4f2aeb45ff3 extends Template
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
        // line 2
        return "backOffice/baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/hotelchain/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/hotelchain/new.html.twig"));

        $this->parent = $this->loadTemplate("backOffice/baseBack.html.twig", "Backoffice/hotelchain/new.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New HotelChain";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <h1>Create new HotelChain</h1>

";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_hotelchain_index");
        echo "\">
 <span style=\"margin-left: 90%\">Back to the list</span>
  <i class=\"fa fa-angle-right\"></i>
  </a>

   <div class=\"row\">
   <div class=\"col-md-6\">
    <label for=\"name\">Name</label>
      ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "hotelchainName", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter your hotel chain name"]]);
        echo "
         
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "hotelchainName", [], "any", false, false, false, 21), 'errors');
        echo "
  </div>
  <div class=\"col-md-3\">
    <label for=\"name\">Staff</label>
      ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "hotelchainStaff", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter number of staff"]]);
        echo "
                                
      ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "hotelchainStaff", [], "any", false, false, false, 27), 'errors');
        echo "
  </div></div><br>
   <div class=\"row\">
    <div class=\"col-md-3\">
    <label for=\"name\">phone</label>
      ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "phone", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Enter phone"]]);
        echo "
                                
      ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "phone", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "invalid-feedback"]]);
        echo "
  
</div>

  
       <div class=\"col-md-6\">
    <label for=\"name\">description</label>


      ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "hotelchainDescription", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Describe your hotel chain"]]);
        echo "
                                
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "hotelchainDescription", [], "any", false, false, false, 45), 'errors');
        echo "
  </div>
</div>
<br>
      <button class=\"btn btn-primary mb-2\">";
        // line 49
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        echo "</button>

  ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo " 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/hotelchain/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 51,  162 => 49,  155 => 45,  150 => 43,  138 => 34,  133 => 32,  125 => 27,  120 => 25,  113 => 21,  108 => 19,  97 => 11,  92 => 9,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'backOffice/baseBack.html.twig' %}

{% block title %}New HotelChain{% endblock %}

{% block body %}
    <h1>Create new HotelChain</h1>

{{form_start(form,{'attr': {'novalidate': 'novalidate'}} ) }}

<a href=\"{{ path('app_hotelchain_index') }}\">
 <span style=\"margin-left: 90%\">Back to the list</span>
  <i class=\"fa fa-angle-right\"></i>
  </a>

   <div class=\"row\">
   <div class=\"col-md-6\">
    <label for=\"name\">Name</label>
      {{ form_widget(form.hotelchainName , {'attr' : {'class' : 'form-control' , 'placeholder' : 'Enter your hotel chain name' }}  ) }}
         
        {{ form_errors(form.hotelchainName) }}
  </div>
  <div class=\"col-md-3\">
    <label for=\"name\">Staff</label>
      {{ form_widget(form.hotelchainStaff , {'attr' : {'class' : 'form-control' , 'placeholder' : 'Enter number of staff' }}  ) }}
                                
      {{ form_errors(form.hotelchainStaff) }}
  </div></div><br>
   <div class=\"row\">
    <div class=\"col-md-3\">
    <label for=\"name\">phone</label>
      {{ form_widget(form.phone , {'attr' : {'class' : 'form-control' , 'placeholder' : 'Enter phone'  }}  ) }}
                                
      {{ form_errors(form.phone , {'attr' : {'class' : 'invalid-feedback' }} ) }}
  
</div>

  
       <div class=\"col-md-6\">
    <label for=\"name\">description</label>


      {{ form_widget(form.hotelchainDescription , {'attr' : {'class' : 'form-control'  , 'placeholder' : 'Describe your hotel chain'}}  ) }}
                                
        {{ form_errors(form.hotelchainDescription) }}
  </div>
</div>
<br>
      <button class=\"btn btn-primary mb-2\">{{ button_label|default('Save') }}</button>

  {{ form_end(form) }} 

{% endblock %}
", "Backoffice/hotelchain/new.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\hotelchain\\new.html.twig");
    }
}
