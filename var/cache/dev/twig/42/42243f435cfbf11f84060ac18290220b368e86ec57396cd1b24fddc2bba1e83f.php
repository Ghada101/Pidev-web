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

/* Frontoffice/topic/search.ajax.twig */
class __TwigTemplate_97643123dbd07cd0ac5745efae46b3271878e85f580509388675a4d3d7ddc707 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/topic/search.ajax.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/topic/search.ajax.twig"));

        // line 1
        if (((array_key_exists("results", $context) && twig_test_iterable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 1, $this->source); })()))) && (0 <= twig_compare(twig_length_filter($this->env, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 1, $this->source); })())), 1)))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 2, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 3
                echo "
            <article class=\"blog_item\">
                <div class=\"blog_item_img\">
                    <img class=\"card-img rounded-0\" src=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["topic"]) || array_key_exists("topic", $context) ? $context["topic"] : (function () { throw new RuntimeError('Variable "topic" does not exist.', 6, $this->source); })())), "html", null, true);
                echo "\" alt=\"\">
                    <a href=\"#\" class=\"blog_item_date\">
                        <h3>";
                // line 8
                ((twig_get_attribute($this->env, $this->source, $context["result"], "topicDate", [], "any", false, false, false, 8)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "topicDate", [], "any", false, false, false, 8), "d"), "html", null, true))) : (print ("")));
                echo "</h3>
                        <p>";
                // line 9
                ((twig_get_attribute($this->env, $this->source, $context["result"], "topicDate", [], "any", false, false, false, 9)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "topicDate", [], "any", false, false, false, 9), "M"), "html", null, true))) : (print ("")));
                echo "</p>
                    </a>
                </div>

                <div class=\"blog_details\">
                    <a class=\"d-inline-block\" href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_index", ["IdTopic" => twig_get_attribute($this->env, $this->source, $context["result"], "topicId", [], "any", false, false, false, 14)]), "html", null, true);
                echo "\">
                        <h2>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "topicTitle", [], "any", false, false, false, 15), "html", null, true);
                echo "</h2>
                    </a>
                    <p>";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "topicDescription", [], "any", false, false, false, 17), "html", null, true);
                echo ".</p>
                    <ul class=\"blog-info-link\">

                        <li><a href=\"#\"><i class=\"fa fa-user\"></i>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["result"], "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Subjects : ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["result"], "topicNumSubjects", [], "any", false, false, false, 21), "html", null, true);
                echo "</a></li>
                        <li>";
                // line 22
                echo twig_include($this->env, $context, "FrontOffice/topic/_delete_form.html.twig");
                echo "</li>

                    </ul>
                    <br></br>
                    <div class=\"bradcam_overlay\"><a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topic_edit", ["topicId" => twig_get_attribute($this->env, $this->source, $context["result"], "topicId", [], "any", false, false, false, 26)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-edit\">  Click here to Update your topic</i>
                    </a></div>
                    <div><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topic_index_Transl", ["idTopic" => twig_get_attribute($this->env, $this->source, $context["result"], "topicId", [], "any", false, false, false, 29)]), "html", null, true);
                echo "\">Translate</a></div>
                </div>

            </article>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/topic/search.ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 29,  114 => 26,  107 => 22,  103 => 21,  99 => 20,  93 => 17,  88 => 15,  84 => 14,  76 => 9,  72 => 8,  67 => 6,  62 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if results is defined and results is iterable and results|length >= 1 %}
{% for result in results %}

            <article class=\"blog_item\">
                <div class=\"blog_item_img\">
                    <img class=\"card-img rounded-0\" src=\"{{ vich_uploader_asset(topic) }}\" alt=\"\">
                    <a href=\"#\" class=\"blog_item_date\">
                        <h3>{{ result.topicDate ? result.topicDate|date('d') : '' }}</h3>
                        <p>{{ result.topicDate ? result.topicDate|date('M') : '' }}</p>
                    </a>
                </div>

                <div class=\"blog_details\">
                    <a class=\"d-inline-block\" href=\"{{ path('app_subject_index',{'IdTopic':result.topicId}) }}\">
                        <h2>{{ result.topicTitle }}</h2>
                    </a>
                    <p>{{ result.topicDescription  }}.</p>
                    <ul class=\"blog-info-link\">

                        <li><a href=\"#\"><i class=\"fa fa-user\"></i>{{ result.user.name  }}</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Subjects : {{ result.topicNumSubjects}}</a></li>
                        <li>{{ include('FrontOffice/topic/_delete_form.html.twig') }}</li>

                    </ul>
                    <br></br>
                    <div class=\"bradcam_overlay\"><a href=\"{{ path('app_topic_edit', {'topicId': result.topicId}) }}\">
                        <i class=\"fa fa-edit\">  Click here to Update your topic</i>
                    </a></div>
                    <div><a href=\"{{ path('app_topic_index_Transl', {'idTopic': result.topicId}) }}\">Translate</a></div>
                </div>

            </article>
{% endfor %}
{% endif %}", "Frontoffice/topic/search.ajax.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\topic\\search.ajax.twig");
    }
}
