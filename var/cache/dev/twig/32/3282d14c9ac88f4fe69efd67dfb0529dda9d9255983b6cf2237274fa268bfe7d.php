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

/* Backoffice/subject/show.html.twig */
class __TwigTemplate_9697cf080710480c9558508ea86fe5157424cf46534ef151d91ab28cb2913048 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'bodyn' => [$this, 'block_bodyn'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/subject/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/subject/show.html.twig"));

        $this->parent = $this->loadTemplate("BackOffice/baseBackSubject.html.twig", "Backoffice/subject/show.html.twig", 1);
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

        echo "Subject";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_bodyn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyn"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyn"));

        // line 6
        echo "    <h1>Subject</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>SubjectId</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 12, $this->source); })()), "subjectId", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>SubjectTitle</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 16, $this->source); })()), "subjectTitle", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>SubjectDescription</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 20, $this->source); })()), "subjectDescription", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>SubjectNumComments</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 24, $this->source); })()), "subjectNumComments", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>SubjectDate</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 28, $this->source); })()), "subjectDate", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 28, $this->source); })()), "subjectDate", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>SubjectImage</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 32, $this->source); })()), "subjectImage", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Acceptsubject</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 36, $this->source); })()), "acceptsubject", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Hidesubject</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 40, $this->source); })()), "hidesubject", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_edit", ["subjectId" => twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 47, $this->source); })()), "subjectId", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "subject/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">

            <h6 class=\"m-0 font-weight-bold text-primary\">Subjects  </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead style=\"background-color: #73fbaf\">
                    <tr>
                        <th>Poster Name</th>
                        <th>Subject Title</th>
                        <th>Subject Description</th>
                        <th>Num of Comments</th>
                        <th>Post Date </th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tfoot style=\"background-color: #AA3333\">
                    <tr>
                        <th>Poster Name</th>
                        <th>Subject Title</th>
                        <th>Subject Description</th>
                        <th>Num of Comments</th>
                        <th>Post Date </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>

                        <tbody>
                        ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjectsBack"]) || array_key_exists("subjectsBack", $context) ? $context["subjectsBack"] : (function () { throw new RuntimeError('Variable "subjectsBack" does not exist.', 83, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 84
            echo "                        <tr>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subject"], "user", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
            echo " </td>
                            <td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_index", ["IdSubject" => twig_get_attribute($this->env, $this->source, $context["subject"], "subjectId", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectTitle", [], "any", false, false, false, 86), "html", null, true);
            echo " </a></td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDescription", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectNumComments", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            ((twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 89)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 89), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>
                                ";
            // line 91
            echo twig_include($this->env, $context, "BackOffice/subject/_delete_form.html.twig");
            echo "
                            </td>
                        </tr>

                        </tr>

                        </tbody>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/subject/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 99,  262 => 91,  257 => 89,  253 => 88,  249 => 87,  243 => 86,  239 => 85,  236 => 84,  219 => 83,  186 => 52,  176 => 51,  164 => 49,  159 => 47,  154 => 45,  146 => 40,  139 => 36,  132 => 32,  125 => 28,  118 => 24,  111 => 20,  104 => 16,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BackOffice/baseBackSubject.html.twig' %}

{% block title %}Subject{% endblock %}

{% block bodyn %}
    <h1>Subject</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>SubjectId</th>
                <td>{{ subject.subjectId }}</td>
            </tr>
            <tr>
                <th>SubjectTitle</th>
                <td>{{ subject.subjectTitle }}</td>
            </tr>
            <tr>
                <th>SubjectDescription</th>
                <td>{{ subject.subjectDescription }}</td>
            </tr>
            <tr>
                <th>SubjectNumComments</th>
                <td>{{ subject.subjectNumComments }}</td>
            </tr>
            <tr>
                <th>SubjectDate</th>
                <td>{{ subject.subjectDate ? subject.subjectDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>SubjectImage</th>
                <td>{{ subject.subjectImage }}</td>
            </tr>
            <tr>
                <th>Acceptsubject</th>
                <td>{{ subject.acceptsubject }}</td>
            </tr>
            <tr>
                <th>Hidesubject</th>
                <td>{{ subject.hidesubject }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_subject_index') }}\">back to list</a>

    <a href=\"{{ path('app_subject_edit', {'subjectId': subject.subjectId}) }}\">edit</a>

    {{ include('subject/_delete_form.html.twig') }}
{% endblock %}
{% block body %}
    <div class=\"card shadow mb-4\">
        <div class=\"card-header py-3\">

            <h6 class=\"m-0 font-weight-bold text-primary\">Subjects  </h6>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                    <thead style=\"background-color: #73fbaf\">
                    <tr>
                        <th>Poster Name</th>
                        <th>Subject Title</th>
                        <th>Subject Description</th>
                        <th>Num of Comments</th>
                        <th>Post Date </th>
                        <th>Action</th>

                    </tr>
                    </thead>
                    <tfoot style=\"background-color: #AA3333\">
                    <tr>
                        <th>Poster Name</th>
                        <th>Subject Title</th>
                        <th>Subject Description</th>
                        <th>Num of Comments</th>
                        <th>Post Date </th>
                        <th>Action</th>
                    </tr>
                    </tfoot>

                        <tbody>
                        {% for subject in subjectsBack %}
                        <tr>
                            <td>{{ subject.user.name }} </td>
                            <td><a href=\"{{ path('app_comment_index',{'IdSubject': subject.subjectId}) }}\">{{ subject.subjectTitle }} </a></td>
                            <td>{{ subject.subjectDescription }}</td>
                            <td>{{ subject.subjectNumComments }}</td>
                            <td>{{ subject.subjectDate ? subject.subjectDate|date('Y-m-d') : '' }}</td>
                            <td>
                                {{ include('BackOffice/subject/_delete_form.html.twig') }}
                            </td>
                        </tr>

                        </tr>

                        </tbody>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
{% endblock %}", "Backoffice/subject/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\subject\\show.html.twig");
    }
}
