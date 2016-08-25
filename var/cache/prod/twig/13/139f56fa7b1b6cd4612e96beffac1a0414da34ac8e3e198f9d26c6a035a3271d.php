<?php

/* main/serwer_info.twig */
class __TwigTemplate_f31b9be41378da47d379170cb1719cc7c2baac166078155a1b945dcbf9459cec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/serwer_info.twig", 1);
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
        if (array_key_exists("lista_serwer", $context)) {
            // line 19
            echo "<h2>Szczegółowe informacje o serwerze <a href=\"/serwery\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>
  <p>Poniżej znajduje się dane dotyczace wybranego serwera</p>
  <div class=\"table-responsive\">
  <table class=\"table table-hover\">
    <tbody>

    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_serwer"]) ? $context["lista_serwer"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["serwer"]) {
                // line 26
                echo "

      <tr>
        <td>Id serwera w bazie</td>
        <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "id", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Nazwa serwera</td>
        <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "nazwa", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Opis serwera</td>
        <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "opis", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Ścieżka url serwera</td>
        <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "url", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Api Login</td>
        <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "apiLogin", array()), "html", null, true);
                echo "</td>
      </tr>
      <tr>
        <td>Api Pass</td>
        <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["serwer"], "apiPass", array()), "html", null, true);
                echo "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serwer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 54
        echo "
    </tbody>
  </table>





";
    }

    public function getTemplateName()
    {
        return "main/serwer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 54,  117 => 50,  110 => 46,  103 => 42,  96 => 38,  89 => 34,  82 => 30,  76 => 26,  72 => 25,  64 => 19,  62 => 18,  58 => 16,  53 => 13,  50 => 12,  46 => 10,  43 => 9,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
/* {% if lista_serwer is defined %}*/
/* <h2>Szczegółowe informacje o serwerze <a href="/serwery"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/*   <p>Poniżej znajduje się dane dotyczace wybranego serwera</p>*/
/*   <div class="table-responsive">*/
/*   <table class="table table-hover">*/
/*     <tbody>*/
/* */
/*     {% for serwer in lista_serwer %}*/
/* */
/* */
/*       <tr>*/
/*         <td>Id serwera w bazie</td>*/
/*         <td>{{serwer.id}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Nazwa serwera</td>*/
/*         <td>{{serwer.nazwa}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Opis serwera</td>*/
/*         <td>{{serwer.opis}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Ścieżka url serwera</td>*/
/*         <td>{{serwer.url}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Api Login</td>*/
/*         <td>{{serwer.apiLogin}}</td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>Api Pass</td>*/
/*         <td>{{serwer.apiPass}}</td>*/
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
