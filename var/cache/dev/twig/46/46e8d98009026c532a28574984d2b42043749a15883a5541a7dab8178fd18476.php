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

/* Frontoffice/basefront.html.twig */
class __TwigTemplate_ff62b938e380fe1b94d41b8bde780548f50c1bf694970d2ab237f08938b4bb00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/basefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/basefront.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Travelo</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/gijgo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/gijgo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slick.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">


    <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
</head>

<body>

<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid\">
                <div class=\"header_bottom_border\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-2 col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-6\">
                            <div class=\"main-menu  d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        <li><a class=\"active\" href=\"index.html\">home</a></li>
                                        <li><a class=\"\" href=\"travel_destination.html\">Restaurant<i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Restaurant details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Hotel <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Hotel details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"\" href=\"travel_destination.html\">Car<i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Car details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"\" href=\"travel_destination.html\">Event<i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Event details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>

                                        <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">blog</a></li>
                                                <li><a href=\"single-blog.html\">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                        <li><a class=\"active\" href=\"about.html\">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-4 d-none d-lg-block\">
                            <div class=\"social_wrap d-flex align-items-center justify-content-end\">
                                <div class=\"number\">
                                    <p> <i class=\"fa fa-phone\"></i> 10(256)-928 256</p>
                                </div>
                                <div class=\"social_links d-none d-xl-block\">
                                    <ul>
                                        <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        <li><a href=\"#\"> <i class=\"fa fa-linkedin\"></i> </a></li>
                                        <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                        <li><a href=\"#\"> <i class=\"fa fa-google-plus\"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"seach_icon\">
                            <a data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\">
                                <i class=\"fa fa-search\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- slider_area_start -->
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Indonesia</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Australia</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_3 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Switzerland</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- slider_area_end -->

<!-- where_togo_area_start  -->
<div class=\"where_togo_area\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-3\">
                <div class=\"form_area\">
                    <h3>Where you want to go?</h3>
                </div>
            </div>
            <div class=\"col-lg-9\">
                <div class=\"search_wrap\">
                    <form class=\"search_form\" action=\"#\">
                        <div class=\"input_field\">
                            <input type=\"text\" placeholder=\"Where to go?\" id =\"seachBarAgency\">
                        </div>
                        <div class=\"input_field\">
                            <input id=\"datepicker\" placeholder=\"Date\">
                        </div>
                        <div class=\"input_field\">
                            <select>
                                <option data-display=\"Travel type\">Travel type</option>
                                <option value=\"1\">Some option</option>
                                <option value=\"2\">Another option</option>
                            </select>
                        </div>
                        <div class=\"search_btn\">
                            <button class=\"boxed-btn4 \" type=\"submit\" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 222
        $this->displayBlock('body', $context, $blocks);
        // line 224
        echo "<!-- where_togo_area_end  -->

<footer class=\"footer\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-6 col-lg-4 \">
                    <div class=\"footer_widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\">
                                <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/footer_logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                            <a href=\"#\">+10 367 826 2567</a> <br>
                            <a href=\"#\">contact@carpenter.com</a>
                        </p>
                        <div class=\"socail_links\">
                            <ul>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-instagram\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-pinterest\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-youtube-play\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-2 col-md-6 col-lg-2\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Company
                        </h3>
                        <ul class=\"links\">
                            <li><a href=\"#\">Pricing</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\"> Gallery</a></li>
                            <li><a href=\"#\"> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Popular destination
                        </h3>
                        <ul class=\"links double_links\">
                            <li><a href=\"#\">Indonesia</a></li>
                            <li><a href=\"#\">America</a></li>
                            <li><a href=\"#\">India</a></li>
                            <li><a href=\"#\">Switzerland</a></li>
                            <li><a href=\"#\">Italy</a></li>
                            <li><a href=\"#\">Canada</a></li>
                            <li><a href=\"#\">Franch</a></li>
                            <li><a href=\"#\">England</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Instagram
                        </h3>
                        <div class=\"instagram_feed\">
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/3.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/4.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/5.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/6.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy-right_text\">
        <div class=\"container\">
            <div class=\"footer_border\"></div>
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <p class=\"copy_right text-center\">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;Esprit  All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Esprit</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class=\"modal fade custom_search_pop\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"serch_form\">
                <input type=\"text\" placeholder=\"Search\" >
                <button type=\"submit\">search</button>
            </div>
        </div>
    </div>
</div>
<!-- link that opens popup -->
<!--
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js\"></script>

    <script src=\" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"> </script> -->
<!-- JS here -->
";
        // line 380
        $this->displayBlock('javascripts', $context, $blocks);
        // line 473
        echo "</script>


</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 222
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 380
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 381
        echo "
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src =\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Core plugin JavaScript-->
<script src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>

<!-- Custom scripts for all pages-->
<script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level plugins -->
<script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/vendor/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>

<!-- Page level custom scripts -->
<script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("BackOffice/js/demo/chart-pie-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"> </script>
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/range.js"), "html", null, true);
        echo "\"></script>
<!-- < script src=\"js/gijgo.min.js\"></script> -->
<script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>
<!--contact js-->
<script src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 444
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }
    });
</script>


<!--contact js-->
<script src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }
    });
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/basefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  836 => 464,  830 => 461,  826 => 460,  822 => 459,  818 => 458,  814 => 457,  799 => 445,  795 => 444,  791 => 443,  787 => 442,  783 => 441,  779 => 440,  774 => 438,  769 => 436,  765 => 435,  761 => 434,  757 => 433,  753 => 432,  749 => 431,  745 => 430,  741 => 429,  737 => 428,  733 => 427,  729 => 426,  725 => 425,  721 => 424,  717 => 423,  713 => 422,  709 => 421,  705 => 420,  701 => 419,  697 => 418,  693 => 417,  689 => 416,  685 => 415,  681 => 414,  675 => 411,  669 => 408,  663 => 405,  657 => 402,  653 => 401,  649 => 400,  645 => 399,  641 => 398,  637 => 397,  633 => 396,  629 => 395,  625 => 394,  621 => 393,  617 => 392,  613 => 391,  609 => 390,  605 => 389,  601 => 388,  597 => 387,  593 => 386,  589 => 385,  585 => 384,  581 => 383,  577 => 382,  574 => 381,  564 => 380,  546 => 222,  532 => 473,  530 => 380,  483 => 336,  475 => 331,  467 => 326,  459 => 321,  451 => 316,  443 => 311,  363 => 234,  351 => 224,  349 => 222,  187 => 63,  164 => 43,  158 => 40,  154 => 39,  150 => 38,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  58 => 12,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Travelo</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('img/favicon.png') }}\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/gijgo.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.css') }}\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/gijgo.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slick.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">


    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
</head>

<body>

<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid\">
                <div class=\"header_bottom_border\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-xl-2 col-lg-2\">
                            <div class=\"logo\">
                                <a href=\"index.html\">
                                    <img src=\"{{ asset('img/logo.png') }}\" alt=\"\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-xl-6 col-lg-6\">
                            <div class=\"main-menu  d-none d-lg-block\">
                                <nav>
                                    <ul id=\"navigation\">
                                        <li><a class=\"active\" href=\"index.html\">home</a></li>
                                        <li><a class=\"\" href=\"travel_destination.html\">Restaurant<i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Restaurant details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"#\">Hotel <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Hotel details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"\" href=\"travel_destination.html\">Car<i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Car details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a class=\"\" href=\"travel_destination.html\">Event<i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"destination_details.html\">Event details</a></li>
                                                <li><a href=\"elements.html\">elements</a></li>
                                            </ul>
                                        </li>

                                        <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                            <ul class=\"submenu\">
                                                <li><a href=\"blog.html\">blog</a></li>
                                                <li><a href=\"single-blog.html\">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href=\"contact.html\">Contact</a></li>
                                        <li><a class=\"active\" href=\"about.html\">About</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class=\"col-xl-4 col-lg-4 d-none d-lg-block\">
                            <div class=\"social_wrap d-flex align-items-center justify-content-end\">
                                <div class=\"number\">
                                    <p> <i class=\"fa fa-phone\"></i> 10(256)-928 256</p>
                                </div>
                                <div class=\"social_links d-none d-xl-block\">
                                    <ul>
                                        <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        <li><a href=\"#\"> <i class=\"fa fa-linkedin\"></i> </a></li>
                                        <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                        <li><a href=\"#\"> <i class=\"fa fa-google-plus\"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"seach_icon\">
                            <a data-toggle=\"modal\" data-target=\"#exampleModalCenter\" href=\"#\">
                                <i class=\"fa fa-search\"></i>
                            </a>
                        </div>
                        <div class=\"col-12\">
                            <div class=\"mobile_menu d-block d-lg-none\"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- slider_area_start -->
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Indonesia</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Australia</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center slider_bg_3 overlay\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-12 col-md-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Switzerland</h3>
                            <p>Pixel perfect design with awesome contents</p>
                            <a href=\"#\" class=\"boxed-btn3\">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- slider_area_end -->

<!-- where_togo_area_start  -->
<div class=\"where_togo_area\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-lg-3\">
                <div class=\"form_area\">
                    <h3>Where you want to go?</h3>
                </div>
            </div>
            <div class=\"col-lg-9\">
                <div class=\"search_wrap\">
                    <form class=\"search_form\" action=\"#\">
                        <div class=\"input_field\">
                            <input type=\"text\" placeholder=\"Where to go?\" id =\"seachBarAgency\">
                        </div>
                        <div class=\"input_field\">
                            <input id=\"datepicker\" placeholder=\"Date\">
                        </div>
                        <div class=\"input_field\">
                            <select>
                                <option data-display=\"Travel type\">Travel type</option>
                                <option value=\"1\">Some option</option>
                                <option value=\"2\">Another option</option>
                            </select>
                        </div>
                        <div class=\"search_btn\">
                            <button class=\"boxed-btn4 \" type=\"submit\" >Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{% block body %}
{% endblock %}
<!-- where_togo_area_end  -->

<footer class=\"footer\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-6 col-lg-4 \">
                    <div class=\"footer_widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\">
                                <img src=\"{{ asset('img/footer_logo.png') }}\" alt=\"\">
                            </a>
                        </div>
                        <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                            <a href=\"#\">+10 367 826 2567</a> <br>
                            <a href=\"#\">contact@carpenter.com</a>
                        </p>
                        <div class=\"socail_links\">
                            <ul>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"ti-twitter-alt\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-instagram\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-pinterest\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-youtube-play\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class=\"col-xl-2 col-md-6 col-lg-2\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Company
                        </h3>
                        <ul class=\"links\">
                            <li><a href=\"#\">Pricing</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\"> Gallery</a></li>
                            <li><a href=\"#\"> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Popular destination
                        </h3>
                        <ul class=\"links double_links\">
                            <li><a href=\"#\">Indonesia</a></li>
                            <li><a href=\"#\">America</a></li>
                            <li><a href=\"#\">India</a></li>
                            <li><a href=\"#\">Switzerland</a></li>
                            <li><a href=\"#\">Italy</a></li>
                            <li><a href=\"#\">Canada</a></li>
                            <li><a href=\"#\">Franch</a></li>
                            <li><a href=\"#\">England</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Instagram
                        </h3>
                        <div class=\"instagram_feed\">
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/instagram/1.png') }}\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/instagram/2.png') }}\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/instagram/3.png') }}\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/instagram/4.png') }}\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/instagram/5.png') }}\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('img/instagram/6.png') }}\" alt=\"\">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy-right_text\">
        <div class=\"container\">
            <div class=\"footer_border\"></div>
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <p class=\"copy_right text-center\">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;Esprit  All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Esprit</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class=\"modal fade custom_search_pop\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"serch_form\">
                <input type=\"text\" placeholder=\"Search\" >
                <button type=\"submit\">search</button>
            </div>
        </div>
    </div>
</div>
<!-- link that opens popup -->
<!--
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js\"></script>

    <script src=\" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"> </script> -->
<!-- JS here -->
{% block javascripts %}

<script src=\"{{ asset('js/vendor/modernizr-3.5.0.min.js') }}\"></script>
<script src=\"{{ asset('js/vendor/jquery-1.12.4.min.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/isotope.pkgd.min.js') }}\"></script>
<script src =\"{{ asset('js/ajax-form.js') }}\"></script>
<script src=\"{{ asset('js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('js/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('js/scrollIt.js') }}\"></script>
<script src=\"{{ asset('js/jquery.scrollUp.min.js') }}\"></script>
<script src=\"{{ asset('js/wow.min.js') }}\"></script>
<script src=\"{{ asset('js/nice-select.min.js')  }}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins.js') }}\"></script>
<script src=\"{{ asset('js/gijgo.min.js') }}\"></script>
<script src=\"{{ asset('js/slick.min.js') }}\"></script>
<script src=\"{{ asset('BackOffice/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('BackOffice/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Core plugin JavaScript-->
<script src=\"{{ asset('BackOffice/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>

<!-- Custom scripts for all pages-->
<script src=\"{{ asset('BackOffice/js/sb-admin-2.min.js') }}\"></script>

<!-- Page level plugins -->
<script src=\"{{ asset('BackOffice/vendor/chart.js/Chart.min.js') }}\"></script>

<!-- Page level custom scripts -->
<script src=\"{{ asset('BackOffice/js/demo/chart-area-demo.js') }}\"></script>
<script src=\"{{ asset('BackOffice/js/demo/chart-pie-demo.js') }}\"></script>
<script src=\"{{ asset('BackOffice/js/demo/chart-area-demo.js') }}\"></script>
<script src=\"{{ asset('BackOffice/js/demo/chart-pie-demo.js') }}\"></script>
<script src=\"{{ asset('js/vendor/modernizr-3.5.0.min.js') }}\"></script>
<script src=\"{{ asset('js/vendor/jquery-1.12.4.min.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('js/ajax-form.js') }}\"></script>
<script src=\"{{ asset('js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('js/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('js/scrollIt.js') }}\"></script>
<script src=\"{{ asset('js/jquery.scrollUp.min.js') }}\"></script>
<script src=\"{{ asset('js/wow.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-ui.min.js') }}\"> </script>
<script src=\"{{ asset('js/nice-select.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins.js') }}\"></script>
<script src=\"{{ asset('js/range.js') }}\"></script>
<!-- < script src=\"js/gijgo.min.js\"></script> -->
<script src=\"{{ asset('js/slick.min.js') }}\"></script>
<!--contact js-->
<script src=\"{{ asset('js/contact.js') }}\"></script>
<script src=\"{{ asset('js/jquery.ajaxchimp.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.form.js') }}\"></script>
<script src=\"{{ asset('js/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('js/mail-script.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>
<script>
    \$('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }
    });
</script>


<!--contact js-->
<script src=\"{{ asset('js/contact.js') }}\"></script>
<script src=\"{{ asset('js/jquery.ajaxchimp.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.form.js') }}\"></script>
<script src=\"{{ asset('js/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('js/mail-script.js') }}\"></script>


<script src=\"{{ asset('js/main.js') }}\"></script>
<script>
    \$('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }
    });
    {% endblock %}
</script>


</body>
</html>", "Frontoffice/basefront.html.twig", "C:\\Users\\aymen\\allintravel\\templates\\Frontoffice\\basefront.html.twig");
    }
}
