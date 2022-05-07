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

/* Frontoffice/rent/mail.html.twig */
class __TwigTemplate_ce4cc4f9c6c5564fe01eb0d1c1f91c23f1080e3aa37ef2b3511d8a1498187e20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/mail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/rent/mail.html.twig"));

        // line 1
        echo "Dear Miss/Mr ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 1, $this->source); })()), "html", null, true);
        echo ",
<br>
Thank you for choosing our services , ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 3, $this->source); })()), "html", null, true);
        echo " wishes you a pleasant use of our services.
<br>
the car ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["car"]) || array_key_exists("car", $context) ? $context["car"] : (function () { throw new RuntimeError('Variable "car" does not exist.', 5, $this->source); })()), "html", null, true);
        echo " is available for you from ";
        (((isset($context["startdate"]) || array_key_exists("startdate", $context) ? $context["startdate"] : (function () { throw new RuntimeError('Variable "startdate" does not exist.', 5, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["startdate"]) || array_key_exists("startdate", $context) ? $context["startdate"] : (function () { throw new RuntimeError('Variable "startdate" does not exist.', 5, $this->source); })()), "Y-m-d , h:m"), "html", null, true))) : (print ("")));
        echo " to ";
        (((isset($context["enddate"]) || array_key_exists("enddate", $context) ? $context["enddate"] : (function () { throw new RuntimeError('Variable "enddate" does not exist.', 5, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["enddate"]) || array_key_exists("enddate", $context) ? $context["enddate"] : (function () { throw new RuntimeError('Variable "enddate" does not exist.', 5, $this->source); })()), "Y-m-d , h:m"), "html", null, true))) : (print ("")));
        echo "
<br>
you can contact us at ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 7, $this->source); })()), "html", null, true);
        echo " if you have any questions or concerns.
<br>
best regards, from ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["agency"]) || array_key_exists("agency", $context) ? $context["agency"] : (function () { throw new RuntimeError('Variable "agency" does not exist.', 9, $this->source); })()), "html", null, true);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/rent/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 9,  63 => 7,  54 => 5,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Dear Miss/Mr {{ name }},
<br>
Thank you for choosing our services , {{agency}} wishes you a pleasant use of our services.
<br>
the car {{car}} is available for you from {{startdate ? startdate|date('Y-m-d , h:m') : '' }} to {{enddate ? enddate|date('Y-m-d , h:m') : '' }}
<br>
you can contact us at {{phone}} if you have any questions or concerns.
<br>
best regards, from {{agency}}", "Frontoffice/rent/mail.html.twig", "C:\\Users\\aymen\\allintravel\\templates\\Frontoffice\\rent\\mail.html.twig");
    }
}
