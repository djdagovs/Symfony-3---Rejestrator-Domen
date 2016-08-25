<?php

/* main/firmy.twig */
class __TwigTemplate_2987d55b9193c35a69e81b7f7378ae2b1717bb954a96a0cec6c272f42ad6e0a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/firmy.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        if (array_key_exists("komunikat", $context)) {
            // line 6
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "added")) {
                // line 7
                echo "\t\t<div class=\"alert alert-success\">Dodano poprawnie</div>
\t";
            }
            // line 9
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "edited")) {
                // line 10
                echo "\t\t<div class=\"alert alert-success\">Dane zostały zmienione</div>
\t";
            }
            // line 12
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "deleted")) {
                // line 13
                echo "\t\t<div class=\"alert alert-success\">Firma została usunięta</div>
\t";
            }
            // line 15
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "error")) {
                // line 16
                echo "\t<div class=\"alert alert-danger\">Wystapił bład</div>
\t";
            }
        }
        // line 19
        if (array_key_exists("lista_firm", $context)) {
            // line 20
            echo "<h2>Lista firm \t<a href=\"/dodaj/firme\"><button class=\"btn btn-success add-button\">Dodaj firmę</button></a></h2>
  <p>Poniżej znajduje się lista dodanych przez Państwa firm.</p>
  <div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>id</th>
        <th>Nazwa</th>
        <th>Telefon</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>

    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_firm"]) ? $context["lista_firm"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["firma"]) {
                // line 35
                echo "      <tr>
      \t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "id", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "nazwa", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "tel", array()), "html", null, true);
                echo "</td>
        <td>
        \t<a href=\"/firma/info/";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-info opc-btn\">Info</button></a>
        \t<a href=\"/firma/edit/";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-success opc-btn\">Edytuj</button></a>
        \t<a href=\"/firma/delete/";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-danger opc-btn\">Usuń</button></a>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['firma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 47
        echo "    </tbody>
  </table>





";
    }

    public function getTemplateName()
    {
        return "main/firmy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  111 => 42,  107 => 41,  103 => 40,  98 => 38,  94 => 37,  90 => 36,  87 => 35,  83 => 34,  67 => 20,  65 => 19,  60 => 16,  57 => 15,  53 => 13,  50 => 12,  46 => 10,  43 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% if komunikat is defined %}*/
/* 	{% if komunikat == "added" %}*/
/* 		<div class="alert alert-success">Dodano poprawnie</div>*/
/* 	{% endif %}*/
/* 	{% if komunikat == "edited" %}*/
/* 		<div class="alert alert-success">Dane zostały zmienione</div>*/
/* 	{% endif %}*/
/* 	{% if komunikat == "deleted" %}*/
/* 		<div class="alert alert-success">Firma została usunięta</div>*/
/* 	{% endif %}*/
/* 	{% if komunikat == "error" %}*/
/* 	<div class="alert alert-danger">Wystapił bład</div>*/
/* 	{% endif %}*/
/* {% endif %}*/
/* {% if lista_firm is defined %}*/
/* <h2>Lista firm 	<a href="/dodaj/firme"><button class="btn btn-success add-button">Dodaj firmę</button></a></h2>*/
/*   <p>Poniżej znajduje się lista dodanych przez Państwa firm.</p>*/
/*   <div class="table-responsive">*/
/*   <table class="table table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>id</th>*/
/*         <th>Nazwa</th>*/
/*         <th>Telefon</th>*/
/*         <th>Opcje</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*     {% for firma in lista_firm %}*/
/*       <tr>*/
/*       	<td>{{firma.id}}</td>*/
/*         <td>{{firma.nazwa}}</td>*/
/*         <td>{{firma.tel}}</td>*/
/*         <td>*/
/*         	<a href="/firma/info/{{firma.id}}"><button type="button" class="btn btn-info opc-btn">Info</button></a>*/
/*         	<a href="/firma/edit/{{firma.id}}"><button type="button" class="btn btn-success opc-btn">Edytuj</button></a>*/
/*         	<a href="/firma/delete/{{firma.id}}"><button type="button" class="btn btn-danger opc-btn">Usuń</button></a>*/
/*         </td>*/
/*       </tr>*/
/*       {% endfor %}*/
/* {% endif %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
