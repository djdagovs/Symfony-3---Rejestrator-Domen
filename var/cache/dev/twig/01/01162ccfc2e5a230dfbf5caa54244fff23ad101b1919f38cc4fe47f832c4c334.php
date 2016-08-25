<?php

/* main/serwer_info.twig */
class __TwigTemplate_75a57fdca5b51810315ffe3848eca8a4a82c648c6ff6b37348b809fd044ef2ef extends Twig_Template
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
        $__internal_09d8ee1186ec1b26f5db3c5bd604cee137f71e2df666dafa3e1494c97873d306 = $this->env->getExtension("native_profiler");
        $__internal_09d8ee1186ec1b26f5db3c5bd604cee137f71e2df666dafa3e1494c97873d306->enter($__internal_09d8ee1186ec1b26f5db3c5bd604cee137f71e2df666dafa3e1494c97873d306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/serwer_info.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d8ee1186ec1b26f5db3c5bd604cee137f71e2df666dafa3e1494c97873d306->leave($__internal_09d8ee1186ec1b26f5db3c5bd604cee137f71e2df666dafa3e1494c97873d306_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cfab0d9910e5021426394636d4ff9eb55f61eb931b558cf879d6ad5ec091703 = $this->env->getExtension("native_profiler");
        $__internal_4cfab0d9910e5021426394636d4ff9eb55f61eb931b558cf879d6ad5ec091703->enter($__internal_4cfab0d9910e5021426394636d4ff9eb55f61eb931b558cf879d6ad5ec091703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_serwer"]) ? $context["lista_serwer"] : $this->getContext($context, "lista_serwer")));
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
        
        $__internal_4cfab0d9910e5021426394636d4ff9eb55f61eb931b558cf879d6ad5ec091703->leave($__internal_4cfab0d9910e5021426394636d4ff9eb55f61eb931b558cf879d6ad5ec091703_prof);

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
        return array (  136 => 54,  126 => 50,  119 => 46,  112 => 42,  105 => 38,  98 => 34,  91 => 30,  85 => 26,  81 => 25,  73 => 19,  71 => 18,  67 => 16,  62 => 13,  59 => 12,  55 => 10,  52 => 9,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
