<?php

/* main/serwery.twig */
class __TwigTemplate_c39cb6caacaa2c844c76b65c9fa13c9174189033689545ddff68e06de2109a22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/serwery.twig", 1);
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
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "deleted")) {
                // line 13
                echo "    <div class=\"alert alert-success\">Serwer została usunięty</div>
  ";
            }
            // line 15
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : null) == "error")) {
                // line 16
                echo "  <div class=\"alert alert-danger\">Wystapił bład</div>
  ";
            }
        }
        // line 19
        if (array_key_exists("lista_serwer", $context)) {
            // line 20
            echo "<h2>Lista serwerów
<a href=\"/dodaj/serwer\"><button class=\"btn btn-success add-button\">Dodaj serwer</button></a>
</h2>
  <p>Poniżej znajduje się lista dodanych przez Państwa serwerów.</p>
  <p>Klikajac przycisk 'Direct Admin' w opcjach wybranego serwera zaktualizuja Państwo domeny tego serwera.</p>
  <div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <thead>
      <tr>
        <th>id</th>
        <th>Nazwa</th>
        <th>Opis</th>
        <th>Url</th>
        <th>Opcje</th>
      </tr>
    </thead>
    <tbody>

    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_serwer"]) ? $context["lista_serwer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["serwer"]) {
                // line 39
                echo "      <tr>
        <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "id", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "nazwa", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "opis", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "url", array()), "html", null, true);
                echo "</td>

        <td>
          <a href=\"/serwer/info/";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-info opc-btn\">Info</button></a>
          <a href=\"/serwer/edit/";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-success opc-btn\">Edytuj</button></a>
          <a href=\"/serwer/delete/";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-danger opc-btn\">Usuń</button></a>
          <a href=\"/serwer/direct-admin/";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "id", array()), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-default opc-btn\">DirectAdmin</button></a>
        </td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serwer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 54
        echo "    </tbody>
  </table>





";
    }

    public function getTemplateName()
    {
        return "main/serwery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  124 => 49,  120 => 48,  116 => 47,  112 => 46,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  91 => 39,  87 => 38,  67 => 20,  65 => 19,  60 => 16,  57 => 15,  53 => 13,  50 => 12,  46 => 10,  43 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/*   {% if komunikat == "deleted" %}*/
/*     <div class="alert alert-success">Serwer została usunięty</div>*/
/*   {% endif %}*/
/*   {% if komunikat == "error" %}*/
/*   <div class="alert alert-danger">Wystapił bład</div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* {% if lista_serwer is defined %}*/
/* <h2>Lista serwerów*/
/* <a href="/dodaj/serwer"><button class="btn btn-success add-button">Dodaj serwer</button></a>*/
/* </h2>*/
/*   <p>Poniżej znajduje się lista dodanych przez Państwa serwerów.</p>*/
/*   <p>Klikajac przycisk 'Direct Admin' w opcjach wybranego serwera zaktualizuja Państwo domeny tego serwera.</p>*/
/*   <div class="table-responsive">*/
/*   <table class="table table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>id</th>*/
/*         <th>Nazwa</th>*/
/*         <th>Opis</th>*/
/*         <th>Url</th>*/
/*         <th>Opcje</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*     {% for serwer in lista_serwer %}*/
/*       <tr>*/
/*         <td>{{serwer.id}}</td>*/
/*         <td>{{serwer.nazwa}}</td>*/
/*         <td>{{serwer.opis}}</td>*/
/*         <td>{{serwer.url}}</td>*/
/* */
/*         <td>*/
/*           <a href="/serwer/info/{{serwer.id}}"><button type="button" class="btn btn-info opc-btn">Info</button></a>*/
/*           <a href="/serwer/edit/{{serwer.id}}"><button type="button" class="btn btn-success opc-btn">Edytuj</button></a>*/
/*           <a href="/serwer/delete/{{serwer.id}}"><button type="button" class="btn btn-danger opc-btn">Usuń</button></a>*/
/*           <a href="/serwer/direct-admin/{{serwer.id}}"><button type="button" class="btn btn-default opc-btn">DirectAdmin</button></a>*/
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
