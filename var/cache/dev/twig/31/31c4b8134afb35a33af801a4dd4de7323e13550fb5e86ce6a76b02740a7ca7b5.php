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

/* Backoffice/topic/show.html.twig */
class __TwigTemplate_0ad3120d04fb2240a3a9accd3773c1b31052c33ff8fe5613d347f4aab7fa3fa3 extends Template
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
        return "BackOffice/baseBackSubject.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/topic/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Backoffice/topic/show.html.twig"));

        $this->parent = $this->loadTemplate("BackOffice/baseBackSubject.html.twig", "Backoffice/topic/show.html.twig", 1);
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

        echo "Topic";
        
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
        echo "<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">All Topics </h6>
        <input id=\"search\" type=\"text\" placeholder=\"Search..\">
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"t\" >
                <thead style=\"background-color: #00d363\">
                <tr>
                    <th>Poster Name</th>
                    <th>Topic Title</th>
                    <th>Topic Description</th>
                    <th>Num of Subjects</th>
                    <th>Post Date </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot style=\"background-color: #1cc88a\">
                <tr>
                    <th >Poster Name</th>
                    <th>Topic Title</th>
                    <th>Topic Description</th>
                    <th>Num of Subjects</th>
                    <th>Post Date </th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody id=\"all\">
                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 36, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["topic"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "user", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo " </td>
                    <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_indexBack", ["IdTopic" => twig_get_attribute($this->env, $this->source, $context["topic"], "topicId", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicTitle", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicDescription", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicNumSubjects", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["topic"], "topicDate", [], "any", false, false, false, 42), null, "en");
            echo "</td>
                    <td>
                      <li> ";
            // line 44
            echo twig_include($this->env, $context, "BackOffice/topic/_delete_form.html.twig");
            echo "</li>
                        ";
            // line 45
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["topic"], "accepttopic", [], "any", false, false, false, 45), 0))) {
                // line 46
                echo "                        <li> <a class=\"fa fa-check-square\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topic_Accept", ["idTopic" => twig_get_attribute($this->env, $this->source, $context["topic"], "topicId", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" >Accept</a></li>
                        ";
            }
            // line 48
            echo "                    </td>
                </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </tbody>

            </table>
        </div>
    </div>
</div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

";
        // line 69
        echo "    <script>
        \$(document).ready(function(){
            \$(\"#search\").on(\"keyup\", function() {
                var value = \$(this).val();
                \$.ajax({
                    url: '";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apptopicsearch");
        echo "',
                    type: 'get',
                    data: {'searchValue': value},
                    success: function (retour) {
                        if (retour) {
                            \$.each(JSON.parse(retour), function (index, obj) {

                                \$(\"#all tr\").filter(function() {
                                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                                });


                            });
                        }
                    },
                });
                return false;
                    });
                    });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Backoffice/topic/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 74,  201 => 69,  191 => 51,  175 => 48,  169 => 46,  167 => 45,  163 => 44,  158 => 42,  154 => 41,  150 => 40,  144 => 39,  140 => 38,  137 => 37,  120 => 36,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'BackOffice/baseBackSubject.html.twig' %}

{% block title %}Topic{% endblock %}

{% block body %}
<div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">All Topics </h6>
        <input id=\"search\" type=\"text\" placeholder=\"Search..\">
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"t\" >
                <thead style=\"background-color: #00d363\">
                <tr>
                    <th>Poster Name</th>
                    <th>Topic Title</th>
                    <th>Topic Description</th>
                    <th>Num of Subjects</th>
                    <th>Post Date </th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot style=\"background-color: #1cc88a\">
                <tr>
                    <th >Poster Name</th>
                    <th>Topic Title</th>
                    <th>Topic Description</th>
                    <th>Num of Subjects</th>
                    <th>Post Date </th>
                    <th>Action</th>
                </tr>
                </tfoot>

                <tbody id=\"all\">
                {% for topic in topics %}
                <tr>
                    <td>{{ topic.user.name }} </td>
                    <td><a href=\"{{ path('app_subject_indexBack',{'IdTopic':topic.topicId}) }}\">{{ topic.topicTitle }}</a></td>
                    <td>{{ topic.topicDescription }}</td>
                    <td>{{ topic.topicNumSubjects }}</td>
                    <td>{{ topic.topicDate | ago (locale='en')}}</td>
                    <td>
                      <li> {{ include('BackOffice/topic/_delete_form.html.twig') }}</li>
                        {% if topic.accepttopic==0%}
                        <li> <a class=\"fa fa-check-square\" href=\"{{ path('app_topic_Accept',{'idTopic':topic.topicId}) }}\" >Accept</a></li>
                        {% endif %}
                    </td>
                </tr>
                {% endfor %}
                </tbody>

            </table>
        </div>
    </div>
</div>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>

{#    <script>#}
{#        \$(document).ready(function(){#}
{#            \$(\"#search_input\").on(\"keyup\", function() {#}
{#                var value = \$(this).val().toLowerCase();#}
{#                \$(\"#myTable tr\").filter(function() {#}
{#                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)#}
{#                });#}
{#            });#}
{#        });#}
{#    </script>#}
    <script>
        \$(document).ready(function(){
            \$(\"#search\").on(\"keyup\", function() {
                var value = \$(this).val();
                \$.ajax({
                    url: '{{ path('apptopicsearch') }}',
                    type: 'get',
                    data: {'searchValue': value},
                    success: function (retour) {
                        if (retour) {
                            \$.each(JSON.parse(retour), function (index, obj) {

                                \$(\"#all tr\").filter(function() {
                                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                                });


                            });
                        }
                    },
                });
                return false;
                    });
                    });
    </script>


{% endblock %}

", "Backoffice/topic/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Backoffice\\topic\\show.html.twig");
    }
}
