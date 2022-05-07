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

/* Frontoffice/subject/show.html.twig */
class __TwigTemplate_a118eed43106e0c093331e48fce9b7fbabc3bd209cf8a0c59aaa9179e5f669d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'ahbat' => [$this, 'block_ahbat'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/subject/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/subject/show.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/baseFrontFinal.html.twig", "Frontoffice/subject/show.html.twig", 1);
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

    // line 51
    public function block_ahbat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahbat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahbat"));

        // line 52
        echo "    <br>
    </br>
    <br>
    </br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "
<section class=\"blog_area section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <div class=\"blog_left_sidebar\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 66, $this->source); })()));
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
            // line 67
            echo "                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["subject"]), "html", null, true);
            echo "\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>";
            // line 71
            ((twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 71)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 71), "d"), "html", null, true))) : (print ("")));
            echo "</h3>
                                    <p>";
            // line 72
            ((twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 72)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDate", [], "any", false, false, false, 72), "M"), "html", null, true))) : (print ("")));
            echo "</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_show", ["IdSubject" => twig_get_attribute($this->env, $this->source, $context["subject"], "subjectId", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\">
                                    <h2>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectTitle", [], "any", false, false, false, 78), "html", null, true);
            echo "</h2>
                                </a>
                                <p>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectDescription", [], "any", false, false, false, 80), "html", null, true);
            echo ".</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"fa fa-user\"></i>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subject"], "user", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            echo "</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Comments : ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "subjectNumComments", [], "any", false, false, false, 83), "html", null, true);
            echo "</a></li>
                                    <li>";
            // line 84
            echo twig_include($this->env, $context, "FrontOffice/subject/_delete_form.html.twig");
            echo "</li>
                                </ul>
                                <br></br>
                                <div class=\"bradcam_overlay\"><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_edit", ["subjectId" => twig_get_attribute($this->env, $this->source, $context["subject"], "subjectId", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\">
                                        <i class=\"fa fa-edit\">  Click here to Update your subject</i>
                                    </a></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
                    ";
        // line 114
        echo "                </div>
            </div>
            <div class=\"col-lg-6\">
                ";
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget add_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <h4 class=\"widget_title\">Add a new Subject here :  </h4>
                                <div class=\"input-group mb-3\">
                                     ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "subjectTitle", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Subject Title"]]);
        echo "
                                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "subjectTitle", [], "any", false, false, false, 125), 'errors');
        echo "
                                </div>
                                <div class=\"input-group mb-3\">
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "subjectDescription", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control w-100", "placeholder" => "Subject Description"]]);
        echo "
                                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "subjectDescription", [], "any", false, false, false, 129), 'errors');
        echo "
                                </div>
                                <div class=\"input-group mb-3\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "imageFile", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "imageFile", [], "any", false, false, false, 133), 'errors');
        echo "
                                </div>
                            </div>

                            <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">";
        // line 137
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 137, $this->source); })()), "Add")) : ("Add")), "html", null, true);
        echo "</button>
                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'rest');
        echo "
                        </form>
                    </aside>
                    <aside class=\"single_sidebar_widget search_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                           onfocus=\"this.placeholder = ''\"
                                           onblur=\"this.placeholder = 'Search Keyword'\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                    type=\"submit\">Search</button>
                        </form>
                    </aside>

                    <aside class=\"single_sidebar_widget post_category_widget\">
                        <h4 class=\"widget_title\">Category</h4>
                        <ul class=\"list cat-list\">
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <aside class=\"single_sidebar_widget popular_post_widget\">
                        <h3 class=\"widget_title\">Recent Post</h3>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_1.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_2.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_3.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_4.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                    <aside class=\"single_sidebar_widget tag_cloud_widget\">
                        <h4 class=\"widget_title\">Tag Clouds</h4>
                        <ul class=\"list\">
                            <li>
                                <a href=\"#\">project</a>
                            </li>
                            <li>
                                <a href=\"#\">love</a>
                            </li>
                            <li>
                                <a href=\"#\">technology</a>
                            </li>
                            <li>
                                <a href=\"#\">travel</a>
                            </li>
                            <li>
                                <a href=\"#\">restaurant</a>
                            </li>
                            <li>
                                <a href=\"#\">life style</a>
                            </li>
                            <li>
                                <a href=\"#\">design</a>
                            </li>
                            <li>
                                <a href=\"#\">illustration</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
     ";
        // line 273
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/subject/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 273,  261 => 138,  257 => 137,  250 => 133,  246 => 132,  240 => 129,  236 => 128,  230 => 125,  226 => 124,  216 => 117,  211 => 114,  208 => 93,  188 => 87,  182 => 84,  178 => 83,  174 => 82,  169 => 80,  164 => 78,  160 => 77,  152 => 72,  148 => 71,  143 => 69,  139 => 67,  122 => 66,  114 => 60,  104 => 59,  89 => 52,  79 => 51,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontOffice/baseFrontFinal.html.twig' %}

{% block title %}Subject{% endblock %}

{#{% block body %}
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
{% endblock %} #}
{% block ahbat %}
    <br>
    </br>
    <br>
    </br>

{% endblock %}

 {% block body %}

<section class=\"blog_area section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 mb-5 mb-lg-0\">
                <div class=\"blog_left_sidebar\">
                    {% for subject in subjects %}
                        <article class=\"blog_item\">
                            <div class=\"blog_item_img\">
                                <img class=\"card-img rounded-0\" src=\"{{ vich_uploader_asset(subject) }}\" alt=\"\">
                                <a href=\"#\" class=\"blog_item_date\">
                                    <h3>{{ subject.subjectDate ? subject.subjectDate|date('d') : '' }}</h3>
                                    <p>{{ subject.subjectDate ? subject.subjectDate|date('M') : '' }}</p>
                                </a>
                            </div>

                            <div class=\"blog_details\">
                                <a class=\"d-inline-block\" href=\"{{ path('app_comment_show', {'IdSubject': subject.subjectId}) }}\">
                                    <h2>{{ subject.subjectTitle }}</h2>
                                </a>
                                <p>{{ subject.subjectDescription }}.</p>
                                <ul class=\"blog-info-link\">
                                    <li><a href=\"#\"><i class=\"fa fa-user\"></i>{{ subject.user.name }}</a></li>
                                    <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Comments : {{ subject.subjectNumComments}}</a></li>
                                    <li>{{ include('FrontOffice/subject/_delete_form.html.twig') }}</li>
                                </ul>
                                <br></br>
                                <div class=\"bradcam_overlay\"><a href=\"{{ path('app_subject_edit', {'subjectId': subject.subjectId}) }}\">
                                        <i class=\"fa fa-edit\">  Click here to Update your subject</i>
                                    </a></div>
                            </div>
                        </article>
                    {% endfor %}

                    {# <nav class=\"blog-pagination justify-content-center d-flex\">
                        <ul class=\"pagination\">
                            <li class=\"page-item\">
                                <a href=\"#\" class=\"page-link\" aria-label=\"Previous\">
                                    <i class=\"ti-angle-left\"></i>
                                </a>
                            </li>
                            <li class=\"page-item\">
                                <a href=\"#\" class=\"page-link\">1</a>
                            </li>
                            <li class=\"page-item active\">
                                <a href=\"#\" class=\"page-link\">2</a>
                            </li>
                            <li class=\"page-item\">
                                <a href=\"#\" class=\"page-link\" aria-label=\"Next\">
                                    <i class=\"ti-angle-right\"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> #}
                </div>
            </div>
            <div class=\"col-lg-6\">
                {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget add_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <h4 class=\"widget_title\">Add a new Subject here :  </h4>
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

                            <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">{{ button_label|default('Add') }}</button>
                            {{ form_rest(form) }}
                        </form>
                    </aside>
                    <aside class=\"single_sidebar_widget search_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                           onfocus=\"this.placeholder = ''\"
                                           onblur=\"this.placeholder = 'Search Keyword'\">
                                    <div class=\"input-group-append\">
                                        <button class=\"btn\" type=\"button\"><i class=\"ti-search\"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                    type=\"submit\">Search</button>
                        </form>
                    </aside>

                    <aside class=\"single_sidebar_widget post_category_widget\">
                        <h4 class=\"widget_title\">Category</h4>
                        <ul class=\"list cat-list\">
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\" class=\"d-flex\">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <aside class=\"single_sidebar_widget popular_post_widget\">
                        <h3 class=\"widget_title\">Recent Post</h3>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_1.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_2.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_3.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class=\"media post_item\">
                            <img src=\"img/post/post_4.png\" alt=\"post\">
                            <div class=\"media-body\">
                                <a href=\"single-blog.html\">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>
                    <aside class=\"single_sidebar_widget tag_cloud_widget\">
                        <h4 class=\"widget_title\">Tag Clouds</h4>
                        <ul class=\"list\">
                            <li>
                                <a href=\"#\">project</a>
                            </li>
                            <li>
                                <a href=\"#\">love</a>
                            </li>
                            <li>
                                <a href=\"#\">technology</a>
                            </li>
                            <li>
                                <a href=\"#\">travel</a>
                            </li>
                            <li>
                                <a href=\"#\">restaurant</a>
                            </li>
                            <li>
                                <a href=\"#\">life style</a>
                            </li>
                            <li>
                                <a href=\"#\">design</a>
                            </li>
                            <li>
                                <a href=\"#\">illustration</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
     {{ form_end(form) }}
{% endblock %}
", "Frontoffice/subject/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\subject\\show.html.twig");
    }
}
