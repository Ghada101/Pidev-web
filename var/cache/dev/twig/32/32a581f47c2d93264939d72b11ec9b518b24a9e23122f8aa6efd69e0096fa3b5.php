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

/* Frontoffice/book/liste.html.twig */
class __TwigTemplate_1a79227fd7da7ae2f55be3815cf715263b3d7b77d21b3cd98b11987f20f84252 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/book/liste.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Frontoffice/book/liste.html.twig"));

        // line 1
        echo "
<html>
<head>
<style>
\t#customers {
\t\tfont-family: Arial, Helvetica, sans-serif;
\t\tborder-collapse: collapse;
\t\twidth: 100%;
\t}

\t#customers td,
\t#customers th {
\t\tborder: 1px solid #ddd;
\t\tpadding: 8px;
\t}

\t#customers tr:nth-child(even) {
\t\tbackground-color: #f2f2f2;
\t}

\t#customers tr:hover {
\t\tbackground-color: #ddd;
\t}

\t#customers th {
\t\tpadding-top: 12px;
\t\tpadding-bottom: 12px;
\t\ttext-align: left;
\t\tbackground-color: #04AA6D;
\t\tcolor: white;
\t}
        h4
    {
        color: red;
    }
    body{
        font:normal 12px/20PX \"Liberation sans\", Arial, Helvetica, sans-serif;
        color:#585858;
    }
    img{
        width:150px;
        margin:10px;
        position: center;

    }
</style>
</head>
<body>

<img src='data:image;base64,<?= ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["img64"]) || array_key_exists("img64", $context) ? $context["img64"] : (function () { throw new RuntimeError('Variable "img64" does not exist.', 50, $this->source); })()), "html", null, true);
        echo ";?>' />

<table width=\"100%\" style=\"font-family: sans-serif;\" cellpadding=\"10\">
    <tr>
<td width=\"49%\" style=\"border: 0.1mm solid #eee;\">
<strong>All In Travel</strong><br>El Ghazela<br>Ariana<br>2083<br>Tunisia</td>

</td>

        <td width=\"2%\">&nbsp;</td>
        <td width=\"49%\" style=\"border: 0.1mm solid #eee; text-align: right;\"><strong>All In Travel</strong><br>00-00 ABC Aare<br>Tunisia<br>123 456<br><br><strong>Telephone:</strong> +216 71 159 753<br><a href=\"#\" target=\"_blank\" style=\"color: #000; text-decoration: none;\">allInTravel@gmail.com</a><br></td>
    </tr>
</table>
<br>
<table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
    <tr>
        <td>
            <table width=\"60%\" align=\"left\" style=\"font-family: sans-serif; font-size: 14px;\" >
                <tr>
                    <td style=\"padding: 0px; line-height: 20px;\">&nbsp;</td>
                </tr>
            </table>

        </td>
    </tr>
</table>
<br>
";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 152
        echo "<br><br>
<table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
    <br>
    <tr>
        <td>

            <table width=\"50%\" align=\"left\" style=\"font-family: sans-serif; font-size: 13px; text-align: center;\" >
                <tr>
                    <td style=\"padding: 0px; line-height: 20px;\">
                        <strong>AllInTravel</strong>
                        <br>
                        ABC AREA
                        <br>
                        Tel: +216 98 652 258 | Email: allintravel@gmail.com
                        <br>
                        Company Registered in Tunisia. Company Reg. 12121212.
                        <br>
                        VAT Registration No. 021021021 | ATOL No. 1234
                    </td>
                </tr>
<img src='data:image;base64,<?= ";
        // line 172
        echo twig_escape_filter($this->env, (isset($context["img643"]) || array_key_exists("img643", $context) ? $context["img643"] : (function () { throw new RuntimeError('Variable "img643" does not exist.', 172, $this->source); })()), "html", null, true);
        echo ";?>'/>

            </table>

        </td>
    </tr>
    <br>
</table>
</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 78
        echo "<table id=\"customers\" width=\"100%\" style=\"font-size: 14px; border-collapse: collapse;\" cellpadding=\"8\">

        <thead>
            <tr class=\"table-dark\">
                <th width=\"15%\" style=\"text-align: left;\"><strong>Room number</strong</th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Start Date</strong</th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>End Date</strong</th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Type</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Capacity</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Price</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Name</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Hotel Name</strong></th>
                ";
        // line 95
        echo " </tr>
        </thead>
        <tbody>
        
            <tr>
            <td style=\"padding: 0px 7px; line-height: 20px;\" >";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 100, $this->source); })()), "idRoom", [], "any", false, false, false, 100), "nbrroom", [], "any", false, false, false, 100), "html", null, true);
        echo "</td>
                <td style=\"padding: 0px 7px; line-height: 20px;\" >";
        // line 101
        ((twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 101, $this->source); })()), "startdate", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 101, $this->source); })()), "startdate", [], "any", false, false, false, 101), "Y-m-d , h:m"), "html", null, true))) : (print ("")));
        echo "</td>
                <td style=\"padding: 0px 7px; line-height: 20px;\" > ";
        // line 102
        ((twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 102, $this->source); })()), "enddate", [], "any", false, false, false, 102)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 102, $this->source); })()), "enddate", [], "any", false, false, false, 102), "Y-m-d , h:m"), "html", null, true))) : (print ("")));
        echo "</td>
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 104, $this->source); })()), "idRoom", [], "any", false, false, false, 104), "roomType", [], "any", false, false, false, 104), "html", null, true);
        echo "<br> <br>
                </td>
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    ";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 107, $this->source); })()), "idRoom", [], "any", false, false, false, 107), "roomCapacity", [], "any", false, false, false, 107), "html", null, true);
        echo "<br> <br>
                </td>
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 110, $this->source); })()), "idRoom", [], "any", false, false, false, 110), "price", [], "any", false, false, false, 110), "html", null, true);
        echo " TND <br> <br>
                   
                </td> 
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 114, $this->source); })()), "idUser", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "  <br> <br>
                   
                </td> 
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    Laicoo <br> <br>
                   
                </td> 
            </tr>
        </tbody>
    </table>
    <br>
<h4 style=\"font-family: helvetica, arial, sans-serif\">NB : You pay once you get to the hotel</h4>




<table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
    <tr>
        <td>
            <table width=\"60%\" align=\"left\" style=\"font-family: sans-serif; font-size: 14px;\" >
                <tr>
                    <td style=\"padding: 0px; line-height: 20px;\">&nbsp;</td>
                </tr>
            </table>
            <table width=\"40%\" align=\"right\" style=\"font-family: sans-serif; font-size: 14px;\" >
                <tr>
                    <td style=\"border: 1px #eee solid; padding: 0px 8px; line-height: 20px;\"><strong>Total Amount</strong></td>
                   
                    <td style=\"border: 1px #eee solid; padding: 0px 8px; line-height: 20px;\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["book"]) || array_key_exists("book", $context) ? $context["book"] : (function () { throw new RuntimeError('Variable "book" does not exist.', 142, $this->source); })()), "idRoom", [], "any", false, false, false, 142), "price", [], "any", false, false, false, 142), "html", null, true);
        echo ".00 TND</td>
                </tr>

            </table>
        </td>
    </tr>
</table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Frontoffice/book/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 142,  233 => 114,  226 => 110,  220 => 107,  214 => 104,  209 => 102,  205 => 101,  201 => 100,  194 => 95,  180 => 78,  170 => 77,  149 => 172,  127 => 152,  125 => 77,  95 => 50,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
<head>
<style>
\t#customers {
\t\tfont-family: Arial, Helvetica, sans-serif;
\t\tborder-collapse: collapse;
\t\twidth: 100%;
\t}

\t#customers td,
\t#customers th {
\t\tborder: 1px solid #ddd;
\t\tpadding: 8px;
\t}

\t#customers tr:nth-child(even) {
\t\tbackground-color: #f2f2f2;
\t}

\t#customers tr:hover {
\t\tbackground-color: #ddd;
\t}

\t#customers th {
\t\tpadding-top: 12px;
\t\tpadding-bottom: 12px;
\t\ttext-align: left;
\t\tbackground-color: #04AA6D;
\t\tcolor: white;
\t}
        h4
    {
        color: red;
    }
    body{
        font:normal 12px/20PX \"Liberation sans\", Arial, Helvetica, sans-serif;
        color:#585858;
    }
    img{
        width:150px;
        margin:10px;
        position: center;

    }
</style>
</head>
<body>

<img src='data:image;base64,<?= {{ img64 }};?>' />

<table width=\"100%\" style=\"font-family: sans-serif;\" cellpadding=\"10\">
    <tr>
<td width=\"49%\" style=\"border: 0.1mm solid #eee;\">
<strong>All In Travel</strong><br>El Ghazela<br>Ariana<br>2083<br>Tunisia</td>

</td>

        <td width=\"2%\">&nbsp;</td>
        <td width=\"49%\" style=\"border: 0.1mm solid #eee; text-align: right;\"><strong>All In Travel</strong><br>00-00 ABC Aare<br>Tunisia<br>123 456<br><br><strong>Telephone:</strong> +216 71 159 753<br><a href=\"#\" target=\"_blank\" style=\"color: #000; text-decoration: none;\">allInTravel@gmail.com</a><br></td>
    </tr>
</table>
<br>
<table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
    <tr>
        <td>
            <table width=\"60%\" align=\"left\" style=\"font-family: sans-serif; font-size: 14px;\" >
                <tr>
                    <td style=\"padding: 0px; line-height: 20px;\">&nbsp;</td>
                </tr>
            </table>

        </td>
    </tr>
</table>
<br>
{% block content %}
<table id=\"customers\" width=\"100%\" style=\"font-size: 14px; border-collapse: collapse;\" cellpadding=\"8\">

        <thead>
            <tr class=\"table-dark\">
                <th width=\"15%\" style=\"text-align: left;\"><strong>Room number</strong</th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Start Date</strong</th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>End Date</strong</th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Type</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Capacity</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Price</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Name</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Hotel Name</strong></th>
                {#  <th width=\"15%\" style=\"text-align: left;\"><strong>Region</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Postal code</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Phone number</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Product</strong></th>
                <th width=\"15%\" style=\"text-align: left;\"><strong>Price</strong></th>
            #} </tr>
        </thead>
        <tbody>
        
            <tr>
            <td style=\"padding: 0px 7px; line-height: 20px;\" >{{ book.idRoom.nbrroom }}</td>
                <td style=\"padding: 0px 7px; line-height: 20px;\" >{{ book.startdate ? book.startdate|date('Y-m-d , h:m') : '' }}</td>
                <td style=\"padding: 0px 7px; line-height: 20px;\" > {{ book.enddate ? book.enddate|date('Y-m-d , h:m') : ''  }}</td>
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    {{ book.idRoom.roomType }}<br> <br>
                </td>
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    {{ book.idRoom.roomCapacity }}<br> <br>
                </td>
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    {{ book.idRoom.price }} TND <br> <br>
                   
                </td> 
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    {{ book.idUser.name }}  <br> <br>
                   
                </td> 
                <td style=\"padding: 0px 7px; line-height: 20px;\">
                    Laicoo <br> <br>
                   
                </td> 
            </tr>
        </tbody>
    </table>
    <br>
<h4 style=\"font-family: helvetica, arial, sans-serif\">NB : You pay once you get to the hotel</h4>




<table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
    <tr>
        <td>
            <table width=\"60%\" align=\"left\" style=\"font-family: sans-serif; font-size: 14px;\" >
                <tr>
                    <td style=\"padding: 0px; line-height: 20px;\">&nbsp;</td>
                </tr>
            </table>
            <table width=\"40%\" align=\"right\" style=\"font-family: sans-serif; font-size: 14px;\" >
                <tr>
                    <td style=\"border: 1px #eee solid; padding: 0px 8px; line-height: 20px;\"><strong>Total Amount</strong></td>
                   
                    <td style=\"border: 1px #eee solid; padding: 0px 8px; line-height: 20px;\">{{ book.idRoom.price}}.00 TND</td>
                </tr>

            </table>
        </td>
    </tr>
</table>


{% endblock %}
<br><br>
<table width=\"100%\" style=\"font-family: sans-serif; font-size: 14px;\" >
    <br>
    <tr>
        <td>

            <table width=\"50%\" align=\"left\" style=\"font-family: sans-serif; font-size: 13px; text-align: center;\" >
                <tr>
                    <td style=\"padding: 0px; line-height: 20px;\">
                        <strong>AllInTravel</strong>
                        <br>
                        ABC AREA
                        <br>
                        Tel: +216 98 652 258 | Email: allintravel@gmail.com
                        <br>
                        Company Registered in Tunisia. Company Reg. 12121212.
                        <br>
                        VAT Registration No. 021021021 | ATOL No. 1234
                    </td>
                </tr>
<img src='data:image;base64,<?= {{ img643 }};?>'/>

            </table>

        </td>
    </tr>
    <br>
</table>
</body>
</html>
", "Frontoffice/book/liste.html.twig", "C:\\laragon\\www\\ALLINTRAVELFINALWEB\\templates\\Frontoffice\\book\\liste.html.twig");
    }
}
