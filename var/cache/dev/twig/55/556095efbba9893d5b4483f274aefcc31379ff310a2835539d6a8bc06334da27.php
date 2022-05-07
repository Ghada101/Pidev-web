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

/* Frontoffice/topic/show.html.twig */
class __TwigTemplate_1f2cd2004f04793bb8f92c0a34f9b11d43d59a57e57ff3b9d3fa71f2833fc146 extends Template
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
            'ahbat' => [$this, 'block_ahbat'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/topic/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/topic/show.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/baseFrontFinal.html.twig", "Frontoffice/topic/show.html.twig", 1);
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

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
<section class=\"blog_area section-padding\">
    <div class=\"container\" >
        <div class=\"row\" >
            <div class=\"col-lg-6 mb-5 mb-lg-0\" id=\"topicShow\" >
                <div  class=\"blog_left_sidebar\"  >

                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topics"]) || array_key_exists("topics", $context) ? $context["topics"] : (function () { throw new RuntimeError('Variable "topics" does not exist.', 55, $this->source); })()));
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
            // line 56
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["topic"], "accepttopic", [], "any", false, false, false, 56), 1))) {
                // line 57
                echo "                    <article class=\"blog_   item\">
                        <div class=\"blog_item_img\">
                            <img class=\"card-img rounded-0\" src=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["topic"]), "html", null, true);
                echo "\" alt=\"\">
                            <a href=\"#\" class=\"blog_item_date\">
                                <h3>";
                // line 61
                ((twig_get_attribute($this->env, $this->source, $context["topic"], "topicDate", [], "any", false, false, false, 61)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicDate", [], "any", false, false, false, 61), "d"), "html", null, true))) : (print ("")));
                echo "</h3>
                                <p>";
                // line 62
                ((twig_get_attribute($this->env, $this->source, $context["topic"], "topicDate", [], "any", false, false, false, 62)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicDate", [], "any", false, false, false, 62), "M"), "html", null, true))) : (print ("")));
                echo "</p>
                            </a>
                        </div>

                        <div class=\"blog_details\">
                            <a class=\"d-inline-block\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subject_index", ["IdTopic" => twig_get_attribute($this->env, $this->source, $context["topic"], "topicId", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\">
                                <h2>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicTitle", [], "any", false, false, false, 68), "html", null, true);
                echo "</h2>
                            </a>
                            <p>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicDescription", [], "any", false, false, false, 70), "html", null, true);
                echo ".</p>
                            <ul class=\"blog-info-link\">

                                <li><a href=\"#\"><i class=\"fa fa-user\"></i>";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["topic"], "user", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
                echo "</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Subjects : ";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["topic"], "topicNumSubjects", [], "any", false, false, false, 74), "html", null, true);
                echo "</a></li>
                               <li>";
                // line 75
                echo twig_include($this->env, $context, "FrontOffice/topic/_delete_form.html.twig");
                echo "</li>

                            </ul>
                            <br></br>
                            <div class=\"bradcam_overlay\"><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topic_edit", ["topicId" => twig_get_attribute($this->env, $this->source, $context["topic"], "topicId", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\">
                                    <i class=\"fa fa-edit\">  Click here to Update your topic</i>
                                </a></div>
                            <div><a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_topic_index_Transl", ["idTopic" => twig_get_attribute($this->env, $this->source, $context["topic"], "topicId", [], "any", false, false, false, 82)]), "html", null, true);
                echo "\">Translate</a></div>
                        </div>

                    </article>
                        ";
            }
            // line 87
            echo "                    ";
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
        // line 88
        echo "


";
        // line 111
        echo "

                </div>
            </div>




            <div class=\"col-lg-6\">
                ";
        // line 120
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget add_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">

                                <h4 class=\"widget_title\">";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add a new Topic here :", [], "messages");
        echo "</h4>
                                <div class=\"input-group mb-3\">

                                    ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "topicTitle", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Topic Title")]]);
        echo "
                                    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "topicTitle", [], "any", false, false, false, 130), 'errors');
        echo "

                                </div>
                                <div class=\"input-group mb-3\">
                                    ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "topicDescription", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control w-100", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Topic Description")]]);
        echo "
                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "topicDescription", [], "any", false, false, false, 135), 'errors');
        echo "
                                </div>
                                <div class=\"input-group mb-3\">
                                    ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "imageFile", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "imageFile", [], "any", false, false, false, 139), 'errors');
        echo "
                                </div>
                            </div>

                            <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">";
        // line 143
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 143, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"))), "html", null, true);
        echo "</button>
                            ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'rest');
        echo "
                        </form>
                    </aside>

                    <aside class=\"single_sidebar_widget search_widget\">
                        <form >
                            <div class=\"form-group\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control\" placeholder='Search Keyword' id=\"searchfield\" >
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
            ";
        // line 275
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 275, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>



</section>
<!--================Blog Area =================-->
";
        // line 286
        echo "
";
        // line 288
        echo "
";
        // line 307
        echo "
";
        // line 314
        echo "
";
        // line 317
        echo "
";
        // line 324
        echo "
";
        // line 326
        echo "
";
        // line 328
        echo "

";
        // line 331
        echo "
";
        // line 336
        echo "

";
        // line 339
        echo "

   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 342
    public function block_ahbat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahbat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahbat"));

        // line 343
        echo "    <br>   </br>
    <br>   </br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/topic/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 343,  453 => 342,  441 => 339,  437 => 336,  434 => 331,  430 => 328,  427 => 326,  424 => 324,  421 => 317,  418 => 314,  415 => 307,  412 => 288,  409 => 286,  398 => 275,  264 => 144,  260 => 143,  253 => 139,  249 => 138,  243 => 135,  239 => 134,  232 => 130,  228 => 129,  222 => 126,  213 => 120,  202 => 111,  197 => 88,  183 => 87,  175 => 82,  169 => 79,  162 => 75,  158 => 74,  154 => 73,  148 => 70,  143 => 68,  139 => 67,  131 => 62,  127 => 61,  122 => 59,  118 => 57,  115 => 56,  98 => 55,  89 => 48,  79 => 47,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'FrontOffice/baseFrontFinal.html.twig' %}

{% block title %}Topic{% endblock %}

{#  {% block body %}
    <h1>Topic</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>TopicId</th>
                <td>{{ topic.topicId }}</td>
            </tr>
            <tr>
                <th>TopicTitle</th>
                <td>{{ topic.topicTitle }}</td>
            </tr>
            <tr>
                <th>TopicDescription</th>
                <td>{{ topic.topicDescription }}</td>
            </tr>
            <tr>
                <th>TopicNumSubjects</th>
                <td>{{ topic.topicNumSubjects }}</td>
            </tr>
            <tr>
                <th>TopicDate</th>
                <td>{{ topic.topicDate ? topic.topicDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Accepttopic</th>
                <td>{{ topic.accepttopic }}</td>
            </tr>
            <tr>
                <th>Hidetopic</th>
                <td>{{ topic.hidetopic }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_topic_index') }}\">back to list</a>

    <a href=\"{{ path('app_topic_edit', {'topicId': topic.topicId}) }}\">edit</a>

    {{ include('topic/_delete_form.html.twig') }}
{% endblock %}#}
   {% block body %}

<section class=\"blog_area section-padding\">
    <div class=\"container\" >
        <div class=\"row\" >
            <div class=\"col-lg-6 mb-5 mb-lg-0\" id=\"topicShow\" >
                <div  class=\"blog_left_sidebar\"  >

                    {% for topic in topics %}
                        {% if topic.accepttopic==1%}
                    <article class=\"blog_   item\">
                        <div class=\"blog_item_img\">
                            <img class=\"card-img rounded-0\" src=\"{{ vich_uploader_asset(topic) }}\" alt=\"\">
                            <a href=\"#\" class=\"blog_item_date\">
                                <h3>{{ topic.topicDate ? topic.topicDate|date('d') : '' }}</h3>
                                <p>{{ topic.topicDate ? topic.topicDate|date('M') : '' }}</p>
                            </a>
                        </div>

                        <div class=\"blog_details\">
                            <a class=\"d-inline-block\" href=\"{{ path('app_subject_index',{'IdTopic':topic.topicId}) }}\">
                                <h2>{{ topic.topicTitle }}</h2>
                            </a>
                            <p>{{ topic.topicDescription  }}.</p>
                            <ul class=\"blog-info-link\">

                                <li><a href=\"#\"><i class=\"fa fa-user\"></i>{{ topic.user.name  }}</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Subjects : {{ topic.topicNumSubjects}}</a></li>
                               <li>{{ include('FrontOffice/topic/_delete_form.html.twig') }}</li>

                            </ul>
                            <br></br>
                            <div class=\"bradcam_overlay\"><a href=\"{{ path('app_topic_edit', {'topicId': topic.topicId}) }}\">
                                    <i class=\"fa fa-edit\">  Click here to Update your topic</i>
                                </a></div>
                            <div><a href=\"{{ path('app_topic_index_Transl', {'idTopic': topic.topicId}) }}\">Translate</a></div>
                        </div>

                    </article>
                        {% endif %}
                    {% endfor %}



{#                    <nav class=\"blog-pagination justify-content-center d-flex\">#}
{#                        <ul class=\"pagination\">#}
{#                            <li class=\"page-item\">#}
{#                                <a href=\"#\" class=\"page-link\" aria-label=\"Previous\">#}
{#                                    <i class=\"ti-angle-left\"></i>#}
{#                                </a>#}
{#                            </li>#}
{#                            <li class=\"page-item\">#}
{#                                <a href=\"#\" class=\"page-link\">1</a>#}
{#                            </li>#}
{#                            <li class=\"page-item active\">#}
{#                                <a href=\"#\" class=\"page-link\">2</a>#}
{#                            </li>#}
{#                            <li class=\"page-item\">#}
{#                                <a href=\"#\" class=\"page-link\" aria-label=\"Next\">#}
{#                                    <i class=\"ti-angle-right\"></i>#}
{#                                </a>#}
{#                            </li>#}
{#                        </ul>#}
{#                    </nav>#}


                </div>
            </div>




            <div class=\"col-lg-6\">
                {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                <div class=\"blog_right_sidebar\">
                    <aside class=\"single_sidebar_widget add_widget\">
                        <form action=\"#\">
                            <div class=\"form-group\">

                                <h4 class=\"widget_title\">{% trans %}Add a new Topic here : {% endtrans %}</h4>
                                <div class=\"input-group mb-3\">

                                    {{ form_widget(form.topicTitle, {'attr': {'class': 'form-control' , 'placeholder' :  'Topic Title' | trans }}) }}
                                    {{ form_errors(form.topicTitle) }}

                                </div>
                                <div class=\"input-group mb-3\">
                                    {{ form_widget(form.topicDescription, {'attr': {'class': 'form-control w-100' , 'placeholder' : 'Topic Description' | trans }}) }}
                                    {{ form_errors(form.topicDescription) }}
                                </div>
                                <div class=\"input-group mb-3\">
                                    {{ form_widget(form.imageFile, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.imageFile) }}
                                </div>
                            </div>

                            <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">{{ button_label|default('Add'| trans )  }}</button>
                            {{ form_rest(form) }}
                        </form>
                    </aside>

                    <aside class=\"single_sidebar_widget search_widget\">
                        <form >
                            <div class=\"form-group\">
                                <div class=\"input-group mb-3\">
                                    <input type=\"text\" class=\"form-control\" placeholder='Search Keyword' id=\"searchfield\" >
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
            {{ form_end(form) }}
        </div>
    </div>



</section>
<!--================Blog Area =================-->
{#       <script>#}
{#           const TopicHolder = document.getElementById('topicShow');#}
{#           const searchfield = document.getElementById('searchfield');#}

{#           console.log(searchfield.value);#}

{#           function getTopic(e){#}
{#               const title = searchfield.value;#}
{#               const url = title ? \"/topic/search/ \" + title : \"/topic/topics/allTopics\";#}
{#               fetch(url, {#}
{#                   method: 'GET',#}
{#               }).then(res => res.json()).then((data) =>{#}
{#                   TopicHolder.innerHTML = \"\";#}
{#                   data.forEach(topic => {#}
{#                       TopicHolder.innerHTML += `#}
{#                <div  class=\"blog_left_sidebar\"  >#}
{#                        <article class=\"blog_item\">#}
{#                           <div class=\"blog_item_img\">#}
{#                               <img class=\"card-img rounded-0\" src=\"/images/topics/\${topic.topicImage}\" alt=\"\">#}
{#                                   <a href=\"#\" class=\"blog_item_date\">#}
{#                                       <h3>\${ topic.topicDate ? topic.topicDate|date('d') : '' }</h3>#}
{#                                       <p>\${ topic.topicDate ? topic.topicDate|date('M') : '' }</p>#}
{#                                   </a>#}
{#                           </div>#}

{#                           <div class=\"blog_details\">#}
{#                               <a class=\"d-inline-block\" href=\"/subject/ShowBack/\${topic.topicId}\">#}
{#                                   <h2>\${topic.topicTitle}</h2>#}
{#                               </a>#}
{#                               <p>\${topic.topicDescription}.</p>#}
{#                               <ul class=\"blog-info-link\">#}

{#                                   <li><a href=\"#\"><i class=\"fa fa-user\"></i>\${topic.user.name }</a></li>#}
{#                                   <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Subjects : \${topic.topicNumSubjects}</a></li>#}

{#                               </ul>#}
{#                               <br></br>#}
{#                               <div class=\"bradcam_overlay\"><a href=\"/topic/\${topic.topicId}/edit\">#}
{#                                   <i class=\"fa fa-edit\">  Click here to Update your topic</i>#}
{#                               </a></div>#}
{#                           </div>#}

{#                       </article>#}

{#               </div>`#}


{#                   })#}

{#               }).catch(err => console.log(err))#}
{#           }#}
{#           getTopic(null)#}
{#           searchfield.addEventListener('change', getTopic)#}


{#       </script>#}


   {% endblock %}
{% block ahbat %}
    <br>   </br>
    <br>   </br>
{% endblock %}", "Frontoffice/topic/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\topic\\show.html.twig");
    }
}
