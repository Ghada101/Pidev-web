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

/* Frontoffice/baseFront.html.twig */
class __TwigTemplate_b2884f2a309dac3c516ef18eaa4943f0c7876c54e914bdfbfd1c43237b47e654 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/baseFront.html.twig"));

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
        // line 29
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
        // line 48
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
                            <input type=\"text\" placeholder=\"Where to go?\">
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
<!-- where_togo_area_end  -->

<!-- popular_destination_area_start  -->
<div class=\"popular_destination_area\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"section_title text-center mb_70\">
                    <h3>Popular Destination</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/destination/1.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Italy <a href=\"travel_destination.html\">  07 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/destination/2.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Brazil <a href=\"travel_destination.html\">  03 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/destination/3.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">America <a href=\"travel_destination.html\">  10 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/destination/4.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Nepal <a href=\"travel_destination.html\">  02 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/destination/5.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Maldives <a href=\"travel_destination.html\">  02 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/destination/6.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Indonesia <a href=\"travel_destination.html\">  05 Places</a> </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->

<!-- newletter_area_start  -->
<div class=\"newletter_area overlay\">
    <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col-lg-10\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"newsletter_text\">
                            <h4>Subscribe Our Newsletter</h4>
                            <p>Subscribe newsletter to get offers and about
                                new places to discover.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"mail_form\">
                            <div class=\"row no-gutters\">
                                <div class=\"col-lg-9 col-md-8\">
                                    <div class=\"newsletter_field\">
                                        <input type=\"email\" placeholder=\"Your mail\" >
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-4\">
                                    <div class=\"newsletter_btn\">
                                        <button class=\"boxed-btn4 \" type=\"submit\" >Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newletter_area_end  -->

<div class=\"popular_places_area\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"section_title text-center mb_70\">
                    <h3>Popular Places</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/place/1.png"), "html", null, true);
        echo "\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>California</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/place/2.png"), "html", null, true);
        echo "\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>Korola Megna</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/place/3.png"), "html", null, true);
        echo "\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>London</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/place/4.png"), "html", null, true);
        echo "\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>Miami Beach</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/place/5.png"), "html", null, true);
        echo "\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>California</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/place/6.png"), "html", null, true);
        echo "\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>Saintmartine Iceland</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"more_place_btn text-center\">
                    <a class=\"boxed-btn4\" href=\"#\">More Places</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"video_area video_bg overlay\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"video_wrap text-center\">
                    <h3>Enjoy Video</h3>
                    <div class=\"video_icon\">
                        <a class=\"popup-video video_play_button\" href=\"https://www.youtube.com/watch?v=f59dDEk57i0\">
                            <i class=\"fa fa-play\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"travel_variation_area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_travel text-center\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/svg_icon/1.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <h3>Comfortable Journey</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_travel text-center\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/svg_icon/2.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <h3>Luxuries Hotel</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_travel text-center\">
                    <div class=\"icon\">
                        <img src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/svg_icon/3.svg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <h3>Travel Guide</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- testimonial_area  -->
<div class=\"testimonial_area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"testmonial_active owl-carousel\">
                    <div class=\"single_carousel\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"single_testmonial text-center\">
                                    <div class=\"author_thumb\">
                                        <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testmonial/author.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <p>\"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class=\"testmonial_author\">
                                        <h3>- Micky Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_carousel\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"single_testmonial text-center\">
                                    <div class=\"author_thumb\">
                                        <img src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testmonial/author.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <p>\"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class=\"testmonial_author\">
                                        <h3>- Tom Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_carousel\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"single_testmonial text-center\">
                                    <div class=\"author_thumb\">
                                        <img src=\"";
        // line 601
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/testmonial/author.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <p>\"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class=\"testmonial_author\">
                                        <h3>- Jerry Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->


<div class=\"recent_trip_area\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"section_title text-center mb_70\">
                    <h3>Recent Trips</h3>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_trip\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trip/1.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"info\">
                        <div class=\"date\">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href=\"#\">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_trip\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trip/2.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"info\">
                        <div class=\"date\">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href=\"#\">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_trip\">
                    <div class=\"thumb\">
                        <img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/trip/3.png"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"info\">
                        <div class=\"date\">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href=\"#\">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class=\"footer\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-4 col-md-6 col-lg-4 \">
                    <div class=\"footer_widget\">
                        <div class=\"footer_logo\">
                            <a href=\"#\">
                                <img src=\"";
        // line 691
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
        // line 768
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 773
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 778
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/3.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 783
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/4.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/5.png"), "html", null, true);
        echo "\" alt=\"\">
                                </a>
                            </div>
                            <div class=\"single_insta\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 793
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
<script src=\"";
        // line 837
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 838
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 839
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 840
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 841
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 842
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src =\"";
        // line 843
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 844
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 845
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 846
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 847
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 848
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 849
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 850
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 852
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 853
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 854
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 855
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick.min.js"), "html", null, true);
        echo "\"></script>


<!--contact js-->
<script src=\"";
        // line 859
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 860
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 861
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 862
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mail-script.js"), "html", null, true);
        echo "\"></script>


<script src=\"";
        // line 866
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
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1108 => 866,  1102 => 863,  1098 => 862,  1094 => 861,  1090 => 860,  1086 => 859,  1079 => 855,  1075 => 854,  1071 => 853,  1067 => 852,  1063 => 851,  1059 => 850,  1055 => 849,  1051 => 848,  1047 => 847,  1043 => 846,  1039 => 845,  1035 => 844,  1031 => 843,  1027 => 842,  1023 => 841,  1019 => 840,  1015 => 839,  1011 => 838,  1007 => 837,  960 => 793,  952 => 788,  944 => 783,  936 => 778,  928 => 773,  920 => 768,  840 => 691,  810 => 664,  791 => 648,  772 => 632,  738 => 601,  720 => 586,  702 => 571,  677 => 549,  665 => 540,  653 => 531,  591 => 472,  562 => 446,  533 => 420,  504 => 394,  475 => 368,  446 => 342,  380 => 279,  366 => 268,  352 => 257,  338 => 246,  324 => 235,  310 => 224,  131 => 48,  109 => 29,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  56 => 12,  43 => 1,);
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
                            <input type=\"text\" placeholder=\"Where to go?\">
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
<!-- where_togo_area_end  -->

<!-- popular_destination_area_start  -->
<div class=\"popular_destination_area\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"section_title text-center mb_70\">
                    <h3>Popular Destination</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/destination/1.png') }}\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Italy <a href=\"travel_destination.html\">  07 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/destination/2.png') }}\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Brazil <a href=\"travel_destination.html\">  03 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/destination/3.png') }}\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">America <a href=\"travel_destination.html\">  10 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/destination/4.png') }}\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Nepal <a href=\"travel_destination.html\">  02 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/destination/5.png') }}\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Maldives <a href=\"travel_destination.html\">  02 Places</a> </p>

                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_destination\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/destination/6.png') }}\" alt=\"\">
                    </div>
                    <div class=\"content\">
                        <p class=\"d-flex align-items-center\">Indonesia <a href=\"travel_destination.html\">  05 Places</a> </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popular_destination_area_end  -->

<!-- newletter_area_start  -->
<div class=\"newletter_area overlay\">
    <div class=\"container\">
        <div class=\"row justify-content-center align-items-center\">
            <div class=\"col-lg-10\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-5\">
                        <div class=\"newsletter_text\">
                            <h4>Subscribe Our Newsletter</h4>
                            <p>Subscribe newsletter to get offers and about
                                new places to discover.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <div class=\"mail_form\">
                            <div class=\"row no-gutters\">
                                <div class=\"col-lg-9 col-md-8\">
                                    <div class=\"newsletter_field\">
                                        <input type=\"email\" placeholder=\"Your mail\" >
                                    </div>
                                </div>
                                <div class=\"col-lg-3 col-md-4\">
                                    <div class=\"newsletter_btn\">
                                        <button class=\"boxed-btn4 \" type=\"submit\" >Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newletter_area_end  -->

<div class=\"popular_places_area\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"section_title text-center mb_70\">
                    <h3>Popular Places</h3>
                    <p>Suffered alteration in some form, by injected humour or good day randomised booth anim 8-bit hella wolf moon beard words.</p>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/place/1.png') }}\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>California</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/place/2.png') }}\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>Korola Megna</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/place/3.png') }}\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>London</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/place/4.png') }}\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>Miami Beach</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/place/5.png') }}\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>California</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_place\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/place/6.png') }}\" alt=\"\">
                        <a href=\"#\" class=\"prise\">\$500</a>
                    </div>
                    <div class=\"place_info\">
                        <a href=\"destination_details.html\"><h3>Saintmartine Iceland</h3></a>
                        <p>United State of America</p>
                        <div class=\"rating_days d-flex justify-content-between\">
                                <span class=\"d-flex justify-content-center align-items-center\">
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <i class=\"fa fa-star\"></i>
                                     <a href=\"#\">(20 Review)</a>
                                </span>
                            <div class=\"days\">
                                <i class=\"fa fa-clock-o\"></i>
                                <a href=\"#\">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"more_place_btn text-center\">
                    <a class=\"boxed-btn4\" href=\"#\">More Places</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"video_area video_bg overlay\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"video_wrap text-center\">
                    <h3>Enjoy Video</h3>
                    <div class=\"video_icon\">
                        <a class=\"popup-video video_play_button\" href=\"https://www.youtube.com/watch?v=f59dDEk57i0\">
                            <i class=\"fa fa-play\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"travel_variation_area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_travel text-center\">
                    <div class=\"icon\">
                        <img src=\"{{ asset('img/svg_icon/1.svg') }}\" alt=\"\">
                    </div>
                    <h3>Comfortable Journey</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_travel text-center\">
                    <div class=\"icon\">
                        <img src=\"{{ asset('img/svg_icon/2.svg') }}\" alt=\"\">
                    </div>
                    <h3>Luxuries Hotel</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_travel text-center\">
                    <div class=\"icon\">
                        <img src=\"{{ asset('img/svg_icon/3.svg') }}\" alt=\"\">
                    </div>
                    <h3>Travel Guide</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- testimonial_area  -->
<div class=\"testimonial_area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"testmonial_active owl-carousel\">
                    <div class=\"single_carousel\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"single_testmonial text-center\">
                                    <div class=\"author_thumb\">
                                        <img src=\"{{ asset('img/testmonial/author.png') }}\" alt=\"\">
                                    </div>
                                    <p>\"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class=\"testmonial_author\">
                                        <h3>- Micky Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_carousel\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"single_testmonial text-center\">
                                    <div class=\"author_thumb\">
                                        <img src=\"{{ asset('img/testmonial/author.png') }}\" alt=\"\">
                                    </div>
                                    <p>\"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class=\"testmonial_author\">
                                        <h3>- Tom Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"single_carousel\">
                        <div class=\"row justify-content-center\">
                            <div class=\"col-lg-8\">
                                <div class=\"single_testmonial text-center\">
                                    <div class=\"author_thumb\">
                                        <img src=\"{{ asset('img/testmonial/author.png') }}\" alt=\"\">
                                    </div>
                                    <p>\"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                                    <div class=\"testmonial_author\">
                                        <h3>- Jerry Mouse</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->


<div class=\"recent_trip_area\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6\">
                <div class=\"section_title text-center mb_70\">
                    <h3>Recent Trips</h3>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_trip\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/trip/1.png') }}\" alt=\"\">
                    </div>
                    <div class=\"info\">
                        <div class=\"date\">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href=\"#\">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_trip\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/trip/2.png') }}\" alt=\"\">
                    </div>
                    <div class=\"info\">
                        <div class=\"date\">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href=\"#\">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6\">
                <div class=\"single_trip\">
                    <div class=\"thumb\">
                        <img src=\"{{ asset('img/trip/3.png') }}\" alt=\"\">
                    </div>
                    <div class=\"info\">
                        <div class=\"date\">
                            <span>Oct 12, 2019</span>
                        </div>
                        <a href=\"#\">
                            <h3>Journeys Are Best Measured In
                                New Friends</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



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
<script src=\"{{ asset('js/nice-select.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/plugins.js') }}\"></script>
<script src=\"{{ asset('js/gijgo.min.js') }}\"></script>
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
</body>
</html>", "Frontoffice/baseFront.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\baseFront.html.twig");
    }
}
