<?php

/* main/domena_info.twig */
class __TwigTemplate_9c5b1fc5ce3d61094488d7a1e7a563335f4101bb88b47a4cd2013e5b2ed49ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/domena_info.twig", 1);
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
        $__internal_e7d6423425d088f4060203bce111f41e1c1fb9870648ac29f9ec28a275b53b8b = $this->env->getExtension("native_profiler");
        $__internal_e7d6423425d088f4060203bce111f41e1c1fb9870648ac29f9ec28a275b53b8b->enter($__internal_e7d6423425d088f4060203bce111f41e1c1fb9870648ac29f9ec28a275b53b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/domena_info.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d6423425d088f4060203bce111f41e1c1fb9870648ac29f9ec28a275b53b8b->leave($__internal_e7d6423425d088f4060203bce111f41e1c1fb9870648ac29f9ec28a275b53b8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56b8c66fe243bdc3344a529365952691800386096dd7416d5361023312919951 = $this->env->getExtension("native_profiler");
        $__internal_56b8c66fe243bdc3344a529365952691800386096dd7416d5361023312919951->enter($__internal_56b8c66fe243bdc3344a529365952691800386096dd7416d5361023312919951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        if (array_key_exists("komunikat", $context)) {
            // line 6
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "added")) {
                // line 7
                echo "    <div class=\"alert alert-success\">Dodano poprawnie</div>
  ";
            }
            // line 9
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "edited")) {
                // line 10
                echo "    <div class=\"alert alert-success\">Dane zostały zmienione</div>
  ";
            }
            // line 12
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "error")) {
                // line 13
                echo "  <div class=\"alert alert-danger\">Wystapił bład</div>
  ";
            }
        }
        // line 16
        echo "
<h2>Szczegółowe informacje  <a href=\"/domeny\"><button class=\"btn btn-success add-button\">Wróć</button></a><a href=\"/domeny\"><button class=\"btn btn-primary add-button\">Aktualizuj informacje</button></a></h2>
  <p>Poniżej znajduja się szczegołowe informacje domeny z wykorzystaniem API WhoIs. Dane sa aktualizowane okresowo.</p>
  <p>Przycisk 'Aktualizuj informacje' zaktualizuje pola 'Domena aktywna' , 'Data wygaśnięcia' a także pole 'Zebrane dane'</p>
  <table class=\"table table-hover\">


    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lista_domen"]) ? $context["lista_domen"] : $this->getContext($context, "lista_domen")));
        foreach ($context['_seq'] as $context["_key"] => $context["domena"]) {
            // line 24
            echo "      <tr>
        <td>Id domeny w bazie</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "id", array()), "html", null, true);
            echo "</td>
      </tr>
      <tr>
        <td>Nazwa domeny</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "nazwa", array()), "html", null, true);
            echo "</td>
      </tr><tr>
        <td>Krótki opis</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "opis", array()), "html", null, true);
            echo "</td>
      </tr><tr>
        <td>Nazwa firmy do której domena została przypisana</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "FirmaNazwa", array()), "html", null, true);
            echo "</td>
      </tr><tr>
        <td>Nazwa serwera</td>
        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "SerwerNazwa", array()), "html", null, true);
            echo "</td>
      </tr><tr>
        <td>Data wygaśnięcia domeny</td>
        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["domena"], "dataWyg", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
      </tr><tr>
        <td>Domena aktywna</td>
        <td>
          ";
            // line 46
            if (($this->getAttribute($context["domena"], "aktywna", array()) == 1)) {
                // line 47
                echo "            TAK
          ";
            }
            // line 49
            echo "        </td>
      </tr>
      <tr>
        <td>Zebrane dane</td>
        <td>
          ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["domena"], "inne", array()), "html", null, true);
            echo "
        </td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domena'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
    </tbody>
  </table>





";
        
        $__internal_56b8c66fe243bdc3344a529365952691800386096dd7416d5361023312919951->leave($__internal_56b8c66fe243bdc3344a529365952691800386096dd7416d5361023312919951_prof);

    }

    public function getTemplateName()
    {
        return "main/domena_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  135 => 54,  128 => 49,  124 => 47,  122 => 46,  115 => 42,  109 => 39,  103 => 36,  97 => 33,  91 => 30,  84 => 26,  80 => 24,  76 => 23,  67 => 16,  62 => 13,  59 => 12,  55 => 10,  52 => 9,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% if komunikat is defined %}*/
/*   {% if komunikat == "added" %}*/
/*     <div class="alert alert-success">Dodano poprawnie</div>*/
/*   {% endif %}*/
/*   {% if komunikat == "edited" %}*/
/*     <div class="alert alert-success">Dane zostały zmienione</div>*/
/*   {% endif %}*/
/*   {% if komunikat == "error" %}*/
/*   <div class="alert alert-danger">Wystapił bład</div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* <h2>Szczegółowe informacje  <a href="/domeny"><button class="btn btn-success add-button">Wróć</button></a><a href="/domeny"><button class="btn btn-primary add-button">Aktualizuj informacje</button></a></h2>*/
/*   <p>Poniżej znajduja się szczegołowe informacje domeny z wykorzystaniem API WhoIs. Dane sa aktualizowane okresowo.</p>*/
/*   <p>Przycisk 'Aktualizuj informacje' zaktualizuje pola 'Domena aktywna' , 'Data wygaśnięcia' a także pole 'Zebrane dane'</p>*/
/*   <table class="table table-hover">*/
/* */
/* */
/*     {% for domena in lista_domen %}*/
/*       <tr>*/
/*         <td>Id domeny w bazie</td>*/
/*         <td>{{domena.id}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Nazwa domeny</td>*/
/*         <td>{{domena.nazwa}}</td>*/
/*       </tr><tr>*/
/*         <td>Krótki opis</td>*/
/*         <td>{{domena.opis}}</td>*/
/*       </tr><tr>*/
/*         <td>Nazwa firmy do której domena została przypisana</td>*/
/*         <td>{{domena.FirmaNazwa}}</td>*/
/*       </tr><tr>*/
/*         <td>Nazwa serwera</td>*/
/*         <td>{{domena.SerwerNazwa}}</td>*/
/*       </tr><tr>*/
/*         <td>Data wygaśnięcia domeny</td>*/
/*         <td>{{domena.dataWyg|date('F j, Y, g:i a')}}</td>*/
/*       </tr><tr>*/
/*         <td>Domena aktywna</td>*/
/*         <td>*/
/*           {% if domena.aktywna == 1 %}*/
/*             TAK*/
/*           {% endif %}*/
/*         </td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Zebrane dane</td>*/
/*         <td>*/
/*           {{domena.inne}}*/
/*         </td>*/
/*       </tr>*/
/*       {% endfor %}*/
/* */
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
