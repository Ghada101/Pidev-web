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

/* Backoffice/subject/index.html.twig */
class __TwigTemplate_09fd8e81d5feb04ac4f0ef36f48ef25c560bad80a0bff9a65d3f43a524f4bcad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'Showa' => [$this, 'block_Showa'],
            'ShowNon' => [$this, 'block_ShowNon'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "BackOffice/baseBackSubject.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/subject/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/subject/index.html.twig"));

        $this->parent = $this->loadTemplate("BackOffice/baseBackSubject.html.twig", "Backoffice/subject/index.html.twig", 1);
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

        echo "Subject index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_Showa($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Showa"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Showa"));

        // line 6
        echo "    <h1>Subject index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>SubjectId</th>
                <th>SubjectTitle</th>
                <th>SubjectDescription</th>
                <th>SubjectNumComments</th>
                <th>SubjectDate</th>
                <th>SubjectImage</th>
                <th>Acceptsubject</th>
                <th>Hidesubject</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 24
            echo "            <tr>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectId", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectTitle", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDescription", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectNumComments", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            ((twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 29)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 29), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectImage", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "acceptsubject", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "hidesubject", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_show", ["subjectId" => twig_get_attribute($this->env, $this->source, $context["subject"], "subjectId", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_edit", ["subjectId" => twig_get_attribute($this->env, $this->source, $context["subject"], "subjectId", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 39
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_ShowNon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ShowNon"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ShowNon"));

        // line 49
        echo "<section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
               ";
        // line 53
        echo "
                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjectsBck"]) || array_key_exists("subjectsBck", $context) ? $context["subjectsBck"] : (function () { throw new RuntimeError('Variable "subjectsBck" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 55
            echo "                    <div class=\"col-lg-4\">
                        <div class=\"blog_left_sidebar\">
                                <article class=\"blog_item\">
                                    <div class=\"blog_item_img\">
                                        <img class=\"card-img rounded-0\" src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/single_blog_1.png"), "html", null, true);
            echo "\" alt=\"\">

                                        <a href=\"#\" class=\"blog_item_date\">
                                            <h3>";
            // line 62
            ((twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 62), "d"), "html", null, true))) : (print ("")));
            echo "</h3>
                                            <p>";
            // line 63
            ((twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 63)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 63), "M"), "html", null, true))) : (print ("")));
            echo "</p>
                                        </a>
                                    </div>

                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"\">
                                            <h2>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectTitle", [], "any", false, false, false, 69), "html", null, true);
            echo "</h2>
                                        </a>
                                        <p>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDescription", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
                                        <ul class=\"blog-info-link\">
                                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Travel, Lifestyle</a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-comments\"></i>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectNumComments", [], "any", false, false, false, 74), "html", null, true);
            echo "</a></li>
                                            <a href=\"#\" class=\"btn btn-danger btn-circle\">
                                                <i class=\"fas fa-trash\"></i>
                                            </a>
                                        </ul>
                                    </div>
                                </article>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>

</section>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/subject/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 84,  246 => 74,  240 => 71,  235 => 69,  226 => 63,  222 => 62,  216 => 59,  210 => 55,  206 => 54,  203 => 53,  198 => 49,  188 => 48,  176 => 46,  171 => 43,  162 => 39,  153 => 35,  149 => 34,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  116 => 25,  113 => 24,  108 => 23,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BackOffice/baseBackSubject.html.twig' %}

{% block title %}Subject index{% endblock %}

{% block Showa %}
    <h1>Subject index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>SubjectId</th>
                <th>SubjectTitle</th>
                <th>SubjectDescription</th>
                <th>SubjectNumComments</th>
                <th>SubjectDate</th>
                <th>SubjectImage</th>
                <th>Acceptsubject</th>
                <th>Hidesubject</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for subject in subjects %}
            <tr>
                <td>{{ subject.subjectId }}</td>
                <td>{{ subject.subjectTitle }}</td>
                <td>{{ subject.subjectDescription }}</td>
                <td>{{ subject.subjectNumComments }}</td>
                <td>{{ subject.subjectDate ? subject.subjectDate|date('Y-m-d') : '' }}</td>
                <td>{{ subject.subjectImage }}</td>
                <td>{{ subject.acceptsubject }}</td>
                <td>{{ subject.hidesubject }}</td>
                <td>
                    <a href=\"{{ path('app_subject_show', {'subjectId': subject.subjectId}) }}\">show</a>
                    <a href=\"{{ path('app_subject_edit', {'subjectId': subject.subjectId}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_subject_new') }}\">Create new</a>
{% endblock %}
{% block ShowNon %}
<section class=\"blog_area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
               {#{{12 is odd? 'impaire': 'paire'}} #}

                {%for subject in subjectsBck%}
                    <div class=\"col-lg-4\">
                        <div class=\"blog_left_sidebar\">
                                <article class=\"blog_item\">
                                    <div class=\"blog_item_img\">
                                        <img class=\"card-img rounded-0\" src=\"{{ asset ('img/blog/single_blog_1.png') }}\" alt=\"\">

                                        <a href=\"#\" class=\"blog_item_date\">
                                            <h3>{{ subject.subjectDate ? subject.subjectDate|date('d') : '' }}</h3>
                                            <p>{{ subject.subjectDate ? subject.subjectDate|date('M') : '' }}</p>
                                        </a>
                                    </div>

                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"\">
                                            <h2>{{ subject.subjectTitle }}</h2>
                                        </a>
                                        <p>{{ subject.subjectDescription }}</p>
                                        <ul class=\"blog-info-link\">
                                            <li><a href=\"#\"><i class=\"fa fa-user\"></i> Travel, Lifestyle</a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-comments\"></i>{{ subject.subjectNumComments }}</a></li>
                                            <a href=\"#\" class=\"btn btn-danger btn-circle\">
                                                <i class=\"fas fa-trash\"></i>
                                            </a>
                                        </ul>
                                    </div>
                                </article>
                        </div>
                    </div>
                {%endfor%}
            </div>
        </div>

</section>


{% endblock %}
", "Backoffice/subject/index.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\subject\\index.html.twig");
    }
}
