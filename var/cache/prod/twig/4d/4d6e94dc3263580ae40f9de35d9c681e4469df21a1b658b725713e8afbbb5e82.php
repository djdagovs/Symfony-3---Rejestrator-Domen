<?php

/* main/firma_info.twig */
class __TwigTemplate_6418cf88173258d508505b4dc7934af6cb6f1c7d53b9d7601615a3b45e4ac0a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/firma_info.twig", 1);
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
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "added")) {
                // line 7
                echo "    <div class=\"alert alert-success\">Dodano poprawnie</div>
  ";
            }
            // line 9
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "edited")) {
                // line 10
                echo "    <div class=\"alert alert-success\">Dane zostały zmienione</div>
  ";
            }
            // line 12
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "error")) {
                // line 13
                echo "  <div class=\"alert alert-danger\">Wystapił bład</div>
  ";
            }
        }
        // line 16
        echo "

";
        // line 18
        if (array_key_exists("lista_firm", $context)) {
            // line 19
            echo "<h2>Szczegółowe informacje o firme <a href=\"/firmy\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>
  <p>Poniżej znajduje się dane dotyczace firmy/p>
  <div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <tbody>

    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_firm"]) ? $context["lista_firm"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["firma"]) {
                // line 26
                echo "

      <tr>
        <td>Id firmy w bazie</td>
        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "id", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Nazwa firmy</td>
        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "nazwa", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Adres firmy</td>
        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "adres", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Nip</td>
        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "nip", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Regon</td>
        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "regon", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "email", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Numer Telefonu</td>
        <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "tel", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Fax</td>
        <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "fax", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Inne</td>
        <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["firma"], "inne", array()), "html", null, true);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['firma'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 66
        echo "
    </tbody>
  </table>





";
    }

    public function getTemplateName()
    {
        return "main/firma_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 66,  138 => 62,  131 => 58,  124 => 54,  117 => 50,  110 => 46,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  76 => 26,  72 => 25,  64 => 19,  62 => 18,  58 => 16,  53 => 13,  50 => 12,  46 => 10,  43 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/* */
/* {% if lista_firm is defined %}*/
/* <h2>Szczegółowe informacje o firme <a href="/firmy"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/*   <p>Poniżej znajduje się dane dotyczace firmy/p>*/
/*   <div class="table-responsive">*/
/*   <table class="table table-hover">*/
/*     <tbody>*/
/* */
/*     {% for firma in lista_firm %}*/
/* */
/* */
/*       <tr>*/
/*         <td>Id firmy w bazie</td>*/
/*         <td>{{firma.id}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Nazwa firmy</td>*/
/*         <td>{{firma.nazwa}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Adres firmy</td>*/
/*         <td>{{firma.adres}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Nip</td>*/
/*         <td>{{firma.nip}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Regon</td>*/
/*         <td>{{firma.regon}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Email</td>*/
/*         <td>{{firma.email}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Numer Telefonu</td>*/
/*         <td>{{firma.tel}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Fax</td>*/
/*         <td>{{firma.fax}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Inne</td>*/
/*         <td>{{firma.inne}}</td>*/
/*       </tr>*/
/*       {% endfor %}*/
/* {% endif %}*/
/* */
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
