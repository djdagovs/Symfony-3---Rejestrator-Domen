<?php

/* main/domeny.twig */
class __TwigTemplate_d0533363753f3c79929aa88a155f302e113ccf449037c9267ca330d36f4526fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/domeny.twig", 1);
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
        $__internal_88e16d715abb2a885998c658d48282b11823e6f0bff1dd17d7e83f8eab75b414 = $this->env->getExtension("native_profiler");
        $__internal_88e16d715abb2a885998c658d48282b11823e6f0bff1dd17d7e83f8eab75b414->enter($__internal_88e16d715abb2a885998c658d48282b11823e6f0bff1dd17d7e83f8eab75b414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/domeny.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88e16d715abb2a885998c658d48282b11823e6f0bff1dd17d7e83f8eab75b414->leave($__internal_88e16d715abb2a885998c658d48282b11823e6f0bff1dd17d7e83f8eab75b414_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cb6392bf724f14fdca48b00c844a3e5d017beaba1c5a95db445e04b5424e50a = $this->env->getExtension("native_profiler");
        $__internal_9cb6392bf724f14fdca48b00c844a3e5d017beaba1c5a95db445e04b5424e50a->enter($__internal_9cb6392bf724f14fdca48b00c844a3e5d017beaba1c5a95db445e04b5424e50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if (array_key_exists("komunikat", $context)) {
            // line 6
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "added")) {
                // line 7
                echo "\t\t<div class=\"alert alert-success\">Dodano poprawnie</div>
\t";
            }
            // line 9
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "edited")) {
                // line 10
                echo "\t\t<div class=\"alert alert-success\">Dane zostały zmienione</div>
\t";
            }
            // line 12
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "deleted")) {
                // line 13
                echo "\t\t<div class=\"alert alert-success\">Domena została usunięta</div>
\t";
            }
            // line 15
            echo "\t";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "error")) {
                // line 16
                echo "\t<div class=\"alert alert-danger\">Wystapił bład</div>
\t";
            }
        }
        // line 19
        if (array_key_exists("lista_domen", $context)) {
            // line 20
            echo "<h2>Lista domen \t<a href=\"/dodaj/domene\"><button class=\"btn btn-success add-button\">Dodaj domene</button></a><a href=\"/widoki/pogrupowane-domeny\"><button class=\"btn btn-primary add-button\">Pogrupowane domeny</button></a></h2>
  <p>Poniżej znajduje się lista dodanych przez Państwa domen.</p>
  <div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>id</th>
        <th>Nazwa</th>
        <th>Opis</th>
        <th>Firma</th>
        <th>Serwer</th>
        <th>Konto</th>
        <th>Data </th>
        <th>Status</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>

    ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_domen"]) ? $context["lista_domen"] : $this->getContext($context, "lista_domen")));
            foreach ($context['_seq'] as $context["_key"] => $context["domena"]) {
                // line 40
                echo "      <tr>
      \t<td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "id", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "nazwa", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "opis", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "FirmaNazwa", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "SerwerNazwa", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "KontoNazwa", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["domena"], "dataWyg", array()), "F j, Y, g:i a"), "html", null, true);
                echo "</td>
        <td>
        ";
                // line 49
                if (($this->getAttribute($context["domena"], "aktywna", array()) == 1)) {
                    // line 50
                    echo "          Aktywna
        ";
                } else {
                    // line 52
                    echo "          Nie aktywna
        ";
                }
                // line 54
                echo "        </td>
        <td>
        \t<a href=\"/domeny/info/";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-info opc-btn\">Info</button></a>
        \t<a href=\"/domeny/edit/";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-success opc-btn\">Edytuj</button></a>
        \t<a href=\"/domeny/delete/";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-danger opc-btn\">Usuń</button></a>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domena'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 63
        echo "    </tbody>
  </table>





";
        
        $__internal_9cb6392bf724f14fdca48b00c844a3e5d017beaba1c5a95db445e04b5424e50a->leave($__internal_9cb6392bf724f14fdca48b00c844a3e5d017beaba1c5a95db445e04b5424e50a_prof);

    }

    public function getTemplateName()
    {
        return "main/domeny.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 63,  155 => 58,  151 => 57,  147 => 56,  143 => 54,  139 => 52,  135 => 50,  133 => 49,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  108 => 42,  104 => 41,  101 => 40,  97 => 39,  76 => 20,  74 => 19,  69 => 16,  66 => 15,  62 => 13,  59 => 12,  55 => 10,  52 => 9,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
/* 		<div class="alert alert-success">Domena została usunięta</div>*/
/* 	{% endif %}*/
/* 	{% if komunikat == "error" %}*/
/* 	<div class="alert alert-danger">Wystapił bład</div>*/
/* 	{% endif %}*/
/* {% endif %}*/
/* {% if lista_domen is defined %}*/
/* <h2>Lista domen 	<a href="/dodaj/domene"><button class="btn btn-success add-button">Dodaj domene</button></a><a href="/widoki/pogrupowane-domeny"><button class="btn btn-primary add-button">Pogrupowane domeny</button></a></h2>*/
/*   <p>Poniżej znajduje się lista dodanych przez Państwa domen.</p>*/
/*   <div class="table-responsive">*/
/*   <table class="table table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>id</th>*/
/*         <th>Nazwa</th>*/
/*         <th>Opis</th>*/
/*         <th>Firma</th>*/
/*         <th>Serwer</th>*/
/*         <th>Konto</th>*/
/*         <th>Data </th>*/
/*         <th>Status</th>*/
/*         <th>Opcje</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*     {% for domena in lista_domen %}*/
/*       <tr>*/
/*       	<td>{{domena.id}}</td>*/
/*         <td>{{domena.nazwa}}</td>*/
/*         <td>{{domena.opis}}</td>*/
/*         <td>{{domena.FirmaNazwa}}</td>*/
/*         <td>{{domena.SerwerNazwa}}</td>*/
/*         <td>{{domena.KontoNazwa}}</td>*/
/*         <td>{{domena.dataWyg|date('F j, Y, g:i a')}}</td>*/
/*         <td>*/
/*         {% if domena.aktywna == 1 %}*/
/*           Aktywna*/
/*         {% else %}*/
/*           Nie aktywna*/
/*         {% endif %}*/
/*         </td>*/
/*         <td>*/
/*         	<a href="/domeny/info/{{domena.id}}"><button type="button" class="btn btn-info opc-btn">Info</button></a>*/
/*         	<a href="/domeny/edit/{{domena.id}}"><button type="button" class="btn btn-success opc-btn">Edytuj</button></a>*/
/*         	<a href="/domeny/delete/{{domena.id}}"><button type="button" class="btn btn-danger opc-btn">Usuń</button></a>*/
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
