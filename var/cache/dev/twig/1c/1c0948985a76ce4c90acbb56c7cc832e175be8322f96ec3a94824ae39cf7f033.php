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

/* Frontoffice/book/new.html.twig */
class __TwigTemplate_6b63cc3eb53d74539c7bc41134422f43721121c605d8616df9ebb33315b39f43 extends Template
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
        return "frontOffice/baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/book/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/book/new.html.twig"));

        $this->parent = $this->loadTemplate("frontOffice/baseFront.html.twig", "Frontoffice/book/new.html.twig", 1);
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

        echo "New Book";
        
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
                                <h4>Book now</h4>
                                <p>Thank me later!  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                    
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
 
    <!-- newletter_area_end  -->
<section class=\"contact-section\">
    <div class=\"container\">
       ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "            <div class=\"alert alert-success\">
                ";
            // line 34
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  

        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "flashes", [0 => "info"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            echo "            <div class=\"alert alert-info\">
                ";
            // line 40
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "flashes", [0 => "danger"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 46
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " 
 
    <div class=\"row\">

 <div class=\"col-12\">
            <h2 class=\"contact-title\">Booked dates ! </h2>

            <div class=\"container\">
            <table class=\"table\">

                <thead>
                    <tr>
                        <th>Startdate</th>
                        <th>Enddate</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookList"]) || array_key_exists("bookList", $context) ? $context["bookList"] : (function () { throw new RuntimeError('Variable "bookList" does not exist.', 65, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 66
            echo "                    <tr>
                    <td>";
            // line 67
            ((twig_get_attribute($this->env, $this->source, $context["book"], "startdate", [], "any", false, false, false, 67)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "startdate", [], "any", false, false, false, 67), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 68
            ((twig_get_attribute($this->env, $this->source, $context["book"], "enddate", [], "any", false, false, false, 68)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "enddate", [], "any", false, false, false, 68), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                    <tr>
                        <td colspan=\"4\">no records found</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </tbody>
            </table>
        </div>

        </div>
    </div> 
    


        <div class=\"col-12\">
            <h2 class=\"contact-title\">Please enter your credentials !</h2>
        </div>


        <div class=\"col-lg-8\">
            <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"form-group\">
                <label for=\"start\">Start date:</label>
                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "startdate", [], "any", false, false, false, 94), 'widget', ["attr" => ["type" => "date"]]);
        echo "

                ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "startdate", [], "any", false, false, false, 96), 'errors');
        echo "

                
                </div>
            </div> 
            <div class=\"col-8\">
                <div class=\"form-group\">
                <label for=\"start\">End date:</label>
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "enddate", [], "any", false, false, false, 104), 'widget', ["attr" => ["type" => "date"]]);
        echo "
                ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "enddate", [], "any", false, false, false, 105), 'errors');
        echo "
                </div>
            </div>
            </div>
                
                
            <div class=\"form-group mt-3\">
                <button class=\"button button-contactForm boxed-btn\">";
        // line 112
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 112, $this->source); })()), "Send")) : ("Send")), "html", null, true);
        echo "</button>
            </div>
        </div>
    
    </div>
    

    </section>

        ";
        // line 121
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), 'form_end');
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/book/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 121,  273 => 112,  263 => 105,  259 => 104,  248 => 96,  243 => 94,  222 => 75,  213 => 71,  205 => 68,  201 => 67,  198 => 66,  193 => 65,  174 => 48,  165 => 46,  162 => 45,  158 => 44,  155 => 43,  146 => 40,  143 => 39,  139 => 38,  135 => 36,  126 => 34,  123 => 33,  119 => 32,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'frontOffice/baseFront.html.twig' %}

{% block title %}New Book{% endblock %}

{% block body %}

<!-- newletter_area_start  -->
    <div class=\"newletter_area overlay\">
        <div class=\"container\">
            <div class=\"row justify-content-center align-items-center\">
                <div class=\"col-lg-10\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-lg-5\"> 
                            <div class=\"newsletter_text\">
                                <h4>Book now</h4>
                                <p>Thank me later!  </p>
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
       {% for message in app.flashes('success') %}
            <div class=\"alert alert-success\">
                {{message}}
            </div>
        {% endfor %}  

        {% for message in app.flashes('info') %}
            <div class=\"alert alert-info\">
                {{message}}
            </div>
        {% endfor %}
        
        {% for message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">
                {{message}}
            </div>
        {% endfor %} 
 
    <div class=\"row\">

 <div class=\"col-12\">
            <h2 class=\"contact-title\">Booked dates ! </h2>

            <div class=\"container\">
            <table class=\"table\">

                <thead>
                    <tr>
                        <th>Startdate</th>
                        <th>Enddate</th>
                    </tr>
                </thead>
                <tbody>
                {% for book in bookList %}
                    <tr>
                    <td>{{ book.startdate ? book.startdate|date('Y-m-d') : '' }}</td>
                    <td>{{ book.enddate ? book.enddate|date('Y-m-d') : '' }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\">no records found</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>

        </div>
    </div> 
    


        <div class=\"col-12\">
            <h2 class=\"contact-title\">Please enter your credentials !</h2>
        </div>


        <div class=\"col-lg-8\">
            <div class=\"row\">
            <div class=\"col-8\">
                <div class=\"form-group\">
                <label for=\"start\">Start date:</label>
                {{ form_widget(form.startdate , {'attr' : {'type' : 'date'  }}  ) }}

                {{ form_errors(form.startdate) }}

                
                </div>
            </div> 
            <div class=\"col-8\">
                <div class=\"form-group\">
                <label for=\"start\">End date:</label>
                {{ form_widget(form.enddate , {'attr' : {'type' : 'date'  }}  ) }}
                {{ form_errors(form.enddate) }}
                </div>
            </div>
            </div>
                
                
            <div class=\"form-group mt-3\">
                <button class=\"button button-contactForm boxed-btn\">{{ button_label|default('Send') }}</button>
            </div>
        </div>
    
    </div>
    

    </section>

        {{ form_end(form) }}  
{% endblock %}
", "Frontoffice/book/new.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\book\\new.html.twig");
    }
}
