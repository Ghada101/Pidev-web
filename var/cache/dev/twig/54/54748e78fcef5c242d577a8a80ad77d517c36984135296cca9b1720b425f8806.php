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

/* Frontoffice/comment/show.html.twig */
class __TwigTemplate_8ef42c024560d40874a8176903e08661d1d826c820baa85161f1d4cde6b3ff34 extends Template
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
        // line 43
        return "FrontOffice/baseFrontFinal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/comment/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/comment/show.html.twig"));

        $this->parent = $this->loadTemplate("FrontOffice/baseFrontFinal.html.twig", "Frontoffice/comment/show.html.twig", 43);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Comment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_ahbat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahbat"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ahbat"));

        // line 47
        echo "    <br>
    </br>
    <br>
    </br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <!--================Blog Area =================-->
    <section class=\"blog_area single-post-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 posts-list\">
                    <div class=\"single-post\">
                        <div class=\"feature-img\">
                            <img class=\"img-fluid\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 60, $this->source); })())), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"blog_details\">
                            <h2>
                                ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 64, $this->source); })()), "subjectTitle", [], "any", false, false, false, 64), "html", null, true);
        echo "
                            </h2>
                            <ul class=\"blog-info-link mt-3 mb-4\">
                                <li><a href=\"#\"><i class=\"fa fa-user\"></i> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
        echo "</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Comments : ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 68, $this->source); })()), "subjectNumComments", [], "any", false, false, false, 68), "html", null, true);
        echo "</a></li>
                            </ul>

                            <div class=\"quote-wrapper\">
                                <div class=\"quotes\">
                                    ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 73, $this->source); })()), "subjectDescription", [], "any", false, false, false, 73), "html", null, true);
        echo ".
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"navigation-top\">
                        <div class=\"d-sm-flex justify-content-between text-center\">
                            <p class=\"like-info\"><span class=\"align-middle\"><i class=\"fa fa-heart\"></i></span> Lily and 4
                                people like this</p>
                            <div class=\"col-sm-4 text-center my-2 my-sm-0\">
                                <!-- <p class=\"comment-count\"><span class=\"align-middle\"><i class=\"fa fa-comment\"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"navigation-area\">
                            <div class=\"row\">
                                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjectPreviouss"]) || array_key_exists("subjectPreviouss", $context) ? $context["subjectPreviouss"] : (function () { throw new RuntimeError('Variable "subjectPreviouss" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subjectPrevious"]) {
            // line 96
            echo "                                <div
                                        class=\"col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center\">

                                    <div class=\"thumb\">
                                        <a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_show", ["IdSubject" => twig_get_attribute($this->env, $this->source, $context["subjectPrevious"], "subjectId", [], "any", false, false, false, 100)]), "html", null, true);
            echo "\">
                                            <img class=\"img-fluid\"  style =\"max-width: 200px;max-height: 200px\" src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["subjectPrevious"]), "html", null, true);
            echo "\" alt=\"\">
                                        </a>

                                    </div>
                                    <div class=\"detials\">
                                        <p>Prev Post</p>
                                        <a href=\"#\">
                                            <h4>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subjectPrevious"], "subjectTitle", [], "any", false, false, false, 108), "html", null, true);
            echo "</h4>
                                        </a>
                                    </div>
                                    <div class=\"arrow\">
                                        <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_show", ["IdSubject" => twig_get_attribute($this->env, $this->source, $context["subjectPrevious"], "subjectId", [], "any", false, false, false, 112)]), "html", null, true);
            echo "\">
                                            <span class=\"lnr text-white ti-arrow-left\"></span>
                                        </a>
                                    </div>


                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subjectPrevious'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjectNexts"]) || array_key_exists("subjectNexts", $context) ? $context["subjectNexts"] : (function () { throw new RuntimeError('Variable "subjectNexts" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["subjectNext"]) {
            // line 121
            echo "                                <div
                                        class=\"col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center\">

                                    <div class=\"arrow\">
                                        <a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_show", ["IdSubject" => twig_get_attribute($this->env, $this->source, $context["subjectNext"], "subjectId", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\">
                                            <span class=\"lnr text-white ti-arrow-right\"></span>
                                        </a>
                                    </div>
                                    <div class=\"detials\">
                                        <p>Next Post</p>
                                        <a href=\"#\">
                                            <h4>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subjectNext"], "subjectTitle", [], "any", false, false, false, 132), "html", null, true);
            echo "</h4>
                                        </a>
                                    </div>
                                    <div class=\"thumb\">
                                        <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_show", ["IdSubject" => twig_get_attribute($this->env, $this->source, $context["subjectNext"], "subjectId", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\">
                                            <img class=\"img-fluid\" style =\"max-width: 200px;max-height: 200px\" src=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["subjectNext"]), "html", null, true);
            echo "\" alt=\"\">
                                        </a>
                                    </div>

                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subjectNext'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                            </div>
                        </div>
                    </div>
                    <div class=\"blog-author\">
                        <div class=\"media align-items-center\">
                            <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/author.png"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"media-body\">
                                <a href=\"#\">
                                    <h4>";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
        echo "</h4>
                                </a>
                                <p>";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 153, $this->source); })()), "subjectTitle", [], "any", false, false, false, 153), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"comments-area\">
                        <h4>";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 158, $this->source); })()), "subjectNumComments", [], "any", false, false, false, 158), "html", null, true);
        echo " Comments</h4>
                        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 159, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 160
            echo "                        <div class=\"comment-list\">
                            <div class=\"single-comment justify-content-between d-flex\">
                                <div class=\"user justify-content-between d-flex\">
                                    <div class=\"thumb\">
                                        <img src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/comment/comment_1.png"), "html", null, true);
            echo "\" alt=\"\">
                                    </div>
                                    <div class=\"desc\">
                                        <p class=\"comment\">
                                            ";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "commentDescription", [], "any", false, false, false, 168), "html", null, true);
            echo "
                                        </p>
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"d-flex align-items-center\">
                                                <h5>
                                                    <a href=\"#\">  ";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 173), "name", [], "any", false, false, false, 173), "html", null, true);
            echo "</a>
                                                </h5>
                                                <p class=\"date\">";
            // line 175
            echo ((twig_get_attribute($this->env, $this->source, $context["comment"], "commentDate", [], "any", false, false, false, 175)) ? ($this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["comment"], "commentDate", [], "any", false, false, false, 175), null, "en")) : ("published"));
            echo "  </p>
                                            </div>
                                            <div class=\"reply-btn\">
                                                <a  class=\"btn-reply text-uppercase\"></a>
                                            </div>
                                            <div class=\"reply-btn\">
                                                ";
            // line 181
            echo twig_include($this->env, $context, "FrontOffice/comment/_delete_form.html.twig");
            echo "
                                            </div>
                                            <div class=\"reply-btn\">
                                                <a  class=\"btn-reply text-uppercase\" href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["commentId" => twig_get_attribute($this->env, $this->source, $context["comment"], "commentId", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-edit\"> Update</i>
                                                </a>
                                            </div>
                                            <div class=\"reply-btn\">
                                            <a href=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_like", ["IdSubject" => twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 189, $this->source); })()), "subjectId", [], "any", false, false, false, 189), "idcom" => twig_get_attribute($this->env, $this->source, $context["comment"], "commentId", [], "any", false, false, false, 189)]), "html", null, true);
            echo "\" >
                                                <i style=\"color: #0062cc\" class=\"fa fa-thumbs-up close-icon\" aria-hidden=\"true\"></i>(";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nblike", [], "any", false, false, false, 190), "html", null, true);
            echo ")</a>

                                            <a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_dislike", ["IdSubject" => twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 192, $this->source); })()), "subjectId", [], "any", false, false, false, 192), "idcom" => twig_get_attribute($this->env, $this->source, $context["comment"], "commentId", [], "any", false, false, false, 192)]), "html", null, true);
            echo "\">
                                                <i style=\"color: orangered\" class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>
                                            </a>(";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "nbdislike", [], "any", false, false, false, 194), "html", null, true);
            echo ")
                                                <button id=\"lik\" data-id=\"";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 195, $this->source); })()), "subjectId", [], "any", false, false, false, 195), "html", null, true);
            echo "\" >
                                                    <i style=\"color: #0062cc\" class=\"fa fa-thumbs-up close-icon\" aria-hidden=\"true\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        echo "                    </div>
                    <div class=\"comment-form\">
                        ";
        // line 206
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <h4>Leave a Reply</h4>
                        <form class=\"form-contact comment_form\" action=\"#\" id=\"commentForm\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"form-group\">

                                        ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "commentDescription", [], "any", false, false, false, 213), 'widget', ["attr" => ["class" => "form-control w-100", "placeholder" => "Write Comment"]]);
        echo "
                                    </div>
                                </div>

                            </div>
                            <div class=\"form-group\">
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">";
        // line 219
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 219, $this->source); })()), "Add")) : ("Add")), "html", null, true);
        echo "</button>
                            </div>
                            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), 'rest');
        echo "
                        </form>
                        ";
        // line 223
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
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
                                        <p>(21)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Health Care</p>
                                        <p>(21)</p>
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
                        <aside class=\"single_sidebar_widget instagram_feeds\">
                            <h4 class=\"widget_title\">Instagram Feeds</h4>
                            <ul class=\"instagram_row flex-wrap\">
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_5.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_6.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_7.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_8.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_9.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_10.png\" alt=\"\">
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class=\"single_sidebar_widget newsletter_widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\"
                                           onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                        type=\"submit\">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
        <script>
        \$(document).on('click','#lik', function() {
                var value = \$(this).attr('data-id');
                \$.ajax({
                    url: '";
        // line 409
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentjaime");
        echo "',
                    type: 'POST',
                    data: {
                        'id': value
                    },
                    success: function (retour) {
                            if(retour) {
                                \$('#lik').html('<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>');
                                alert(\"hello\");
                            }
                            else {
                                \$('#lik').html('<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>');
                            }


                    },
                });

            });

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/comment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 409,  431 => 223,  426 => 221,  421 => 219,  412 => 213,  402 => 206,  398 => 204,  375 => 195,  371 => 194,  366 => 192,  361 => 190,  357 => 189,  349 => 184,  343 => 181,  334 => 175,  329 => 173,  321 => 168,  314 => 164,  308 => 160,  291 => 159,  287 => 158,  279 => 153,  274 => 151,  268 => 148,  261 => 143,  249 => 137,  245 => 136,  238 => 132,  228 => 125,  222 => 121,  217 => 120,  203 => 112,  196 => 108,  186 => 101,  182 => 100,  176 => 96,  172 => 95,  147 => 73,  139 => 68,  135 => 67,  129 => 64,  122 => 60,  113 => 53,  103 => 52,  89 => 47,  79 => 46,  60 => 45,  37 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("{#  {% extends 'base.html.twig' %}

{% block title %}Comment{% endblock %}

{% block body %}
    <h1>Comment</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>CommentId</th>
                <td>{{ comment.commentId }}</td>
            </tr>
            <tr>
                <th>CommentDescription</th>
                <td>{{ comment.commentDescription }}</td>
            </tr>
            <tr>
                <th>CommentDate</th>
                <td>{{ comment.commentDate ? comment.commentDate|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Nblike</th>
                <td>{{ comment.nblike }}</td>
            </tr>
            <tr>
                <th>Nbdislike</th>
                <td>{{ comment.nbdislike }}</td>
            </tr>
            <tr>
                <th>CommentImage</th>
                <td>{{ comment.commentImage }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_comment_index') }}\">back to list</a>

    <a href=\"{{ path('app_comment_edit', {'commentId': comment.commentId}) }}\">edit</a>

    {{ include('comment/_delete_form.html.twig') }}
{% endblock %}#}
{% extends 'FrontOffice/baseFrontFinal.html.twig' %}

{% block title %}Comment{% endblock %}
{% block ahbat %}
    <br>
    </br>
    <br>
    </br>
{% endblock %}
{% block body %}
    <!--================Blog Area =================-->
    <section class=\"blog_area single-post-area section-padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 posts-list\">
                    <div class=\"single-post\">
                        <div class=\"feature-img\">
                            <img class=\"img-fluid\" src=\"{{ vich_uploader_asset(subject) }}\" alt=\"\">
                        </div>
                        <div class=\"blog_details\">
                            <h2>
                                {{ subject.subjectTitle}}
                            </h2>
                            <ul class=\"blog-info-link mt-3 mb-4\">
                                <li><a href=\"#\"><i class=\"fa fa-user\"></i> {{ subject.user.name }}</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-comments\"></i>Number of Comments : {{ subject.subjectNumComments}}</a></li>
                            </ul>

                            <div class=\"quote-wrapper\">
                                <div class=\"quotes\">
                                    {{ subject.subjectDescription }}.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class=\"navigation-top\">
                        <div class=\"d-sm-flex justify-content-between text-center\">
                            <p class=\"like-info\"><span class=\"align-middle\"><i class=\"fa fa-heart\"></i></span> Lily and 4
                                people like this</p>
                            <div class=\"col-sm-4 text-center my-2 my-sm-0\">
                                <!-- <p class=\"comment-count\"><span class=\"align-middle\"><i class=\"fa fa-comment\"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class=\"social-icons\">
                                <li><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"navigation-area\">
                            <div class=\"row\">
                                {% for subjectPrevious in subjectPreviouss %}
                                <div
                                        class=\"col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center\">

                                    <div class=\"thumb\">
                                        <a href=\"{{ path('app_comment_show', {'IdSubject': subjectPrevious.subjectId}) }}\">
                                            <img class=\"img-fluid\"  style =\"max-width: 200px;max-height: 200px\" src=\"{{ vich_uploader_asset(subjectPrevious) }}\" alt=\"\">
                                        </a>

                                    </div>
                                    <div class=\"detials\">
                                        <p>Prev Post</p>
                                        <a href=\"#\">
                                            <h4>{{ subjectPrevious.subjectTitle }}</h4>
                                        </a>
                                    </div>
                                    <div class=\"arrow\">
                                        <a href=\"{{ path('app_comment_show', {'IdSubject': subjectPrevious.subjectId}) }}\">
                                            <span class=\"lnr text-white ti-arrow-left\"></span>
                                        </a>
                                    </div>


                                </div>
                                {% endfor %}
                                {% for subjectNext in subjectNexts %}
                                <div
                                        class=\"col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center\">

                                    <div class=\"arrow\">
                                        <a href=\"{{ path('app_comment_show', {'IdSubject': subjectNext.subjectId}) }}\">
                                            <span class=\"lnr text-white ti-arrow-right\"></span>
                                        </a>
                                    </div>
                                    <div class=\"detials\">
                                        <p>Next Post</p>
                                        <a href=\"#\">
                                            <h4>{{ subjectNext.subjectTitle }}</h4>
                                        </a>
                                    </div>
                                    <div class=\"thumb\">
                                        <a href=\"{{ path('app_comment_show', {'IdSubject': subjectNext.subjectId}) }}\">
                                            <img class=\"img-fluid\" style =\"max-width: 200px;max-height: 200px\" src=\"{{ vich_uploader_asset(subjectNext) }}\" alt=\"\">
                                        </a>
                                    </div>

                                </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                    <div class=\"blog-author\">
                        <div class=\"media align-items-center\">
                            <img src=\"{{ asset('img/blog/author.png') }}\" alt=\"\">
                            <div class=\"media-body\">
                                <a href=\"#\">
                                    <h4>{{ subject.user.name }}</h4>
                                </a>
                                <p>{{ subject.subjectTitle }}</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"comments-area\">
                        <h4>{{ subject.subjectNumComments}} Comments</h4>
                        {% for comment in comments  %}
                        <div class=\"comment-list\">
                            <div class=\"single-comment justify-content-between d-flex\">
                                <div class=\"user justify-content-between d-flex\">
                                    <div class=\"thumb\">
                                        <img src=\"{{ asset('img/comment/comment_1.png') }}\" alt=\"\">
                                    </div>
                                    <div class=\"desc\">
                                        <p class=\"comment\">
                                            {{ comment.commentDescription }}
                                        </p>
                                        <div class=\"d-flex justify-content-between\">
                                            <div class=\"d-flex align-items-center\">
                                                <h5>
                                                    <a href=\"#\">  {{ comment.user.name }}</a>
                                                </h5>
                                                <p class=\"date\">{{ comment.commentDate ? comment.commentDate| ago(locale='en') : 'published' }}  </p>
                                            </div>
                                            <div class=\"reply-btn\">
                                                <a  class=\"btn-reply text-uppercase\"></a>
                                            </div>
                                            <div class=\"reply-btn\">
                                                {{ include('FrontOffice/comment/_delete_form.html.twig') }}
                                            </div>
                                            <div class=\"reply-btn\">
                                                <a  class=\"btn-reply text-uppercase\" href=\"{{ path('app_comment_edit', {'commentId': comment.commentId}) }}\">
                                                    <i class=\"fa fa-edit\"> Update</i>
                                                </a>
                                            </div>
                                            <div class=\"reply-btn\">
                                            <a href=\"{{ path('app_comment_like', {'IdSubject':subject.subjectId,'idcom':comment.commentId}) }}\" >
                                                <i style=\"color: #0062cc\" class=\"fa fa-thumbs-up close-icon\" aria-hidden=\"true\"></i>({{ comment.nblike }})</a>

                                            <a href=\"{{ path('app_comment_dislike', {'IdSubject':subject.subjectId,'idcom':comment.commentId}) }}\">
                                                <i style=\"color: orangered\" class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>
                                            </a>({{ comment.nbdislike }})
                                                <button id=\"lik\" data-id=\"{{ subject.subjectId }}\" >
                                                    <i style=\"color: #0062cc\" class=\"fa fa-thumbs-up close-icon\" aria-hidden=\"true\"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    <div class=\"comment-form\">
                        {{ form_start(form,{'attr':{'novalidate':'novalidate'}}) }}
                        <h4>Leave a Reply</h4>
                        <form class=\"form-contact comment_form\" action=\"#\" id=\"commentForm\">
                            <div class=\"row\">
                                <div class=\"col-12\">
                                    <div class=\"form-group\">

                                        {{ form_widget(form.commentDescription, {'attr': {'class': 'form-control w-100' , 'placeholder' : 'Write Comment'}}) }}
                                    </div>
                                </div>

                            </div>
                            <div class=\"form-group\">
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\">{{ button_label|default('Add') }}</button>
                            </div>
                            {{ form_rest(form) }}
                        </form>
                        {{ form_end(form) }}
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"blog_right_sidebar\">
                        <aside class=\"single_sidebar_widget search_widget\">
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" class=\"form-control\" placeholder='Search Keyword'
                                               onfocus=\"this.placeholder = ''\" onblur=\"this.placeholder = 'Search Keyword'\">
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
                                        <p>(21)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"d-flex\">
                                        <p>Health Care</p>
                                        <p>(21)</p>
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
                        <aside class=\"single_sidebar_widget instagram_feeds\">
                            <h4 class=\"widget_title\">Instagram Feeds</h4>
                            <ul class=\"instagram_row flex-wrap\">
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_5.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_6.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_7.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_8.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_9.png\" alt=\"\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <img class=\"img-fluid\" src=\"img/post/post_10.png\" alt=\"\">
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <aside class=\"single_sidebar_widget newsletter_widget\">
                            <h4 class=\"widget_title\">Newsletter</h4>
                            <form action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"email\" class=\"form-control\" onfocus=\"this.placeholder = ''\"
                                           onblur=\"this.placeholder = 'Enter email'\" placeholder='Enter email' required>
                                </div>
                                <button class=\"button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn\"
                                        type=\"submit\">Subscribe</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
        <script>
        \$(document).on('click','#lik', function() {
                var value = \$(this).attr('data-id');
                \$.ajax({
                    url: '{{ path('app_commentjaime') }}',
                    type: 'POST',
                    data: {
                        'id': value
                    },
                    success: function (retour) {
                            if(retour) {
                                \$('#lik').html('<i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>');
                                alert(\"hello\");
                            }
                            else {
                                \$('#lik').html('<i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i>');
                            }


                    },
                });

            });

    </script>

{% endblock %}
", "Frontoffice/comment/show.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\comment\\show.html.twig");
    }
}
