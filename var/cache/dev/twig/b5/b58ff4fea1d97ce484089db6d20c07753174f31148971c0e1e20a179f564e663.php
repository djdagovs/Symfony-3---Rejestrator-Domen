<?php

/* main/serwery.twig */
class __TwigTemplate_b4c7a906b045f63aacb95634fa46b76d9b1e0f07e994d75a8a80fe93a33a8ccb extends Twig_Template
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
        $__internal_d2f4beb8fcdc22be16fc44030f2fc63b8173960f56e203159bb9a7fba310b005 = $this->env->getExtension("native_profiler");
        $__internal_d2f4beb8fcdc22be16fc44030f2fc63b8173960f56e203159bb9a7fba310b005->enter($__internal_d2f4beb8fcdc22be16fc44030f2fc63b8173960f56e203159bb9a7fba310b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/serwery.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2f4beb8fcdc22be16fc44030f2fc63b8173960f56e203159bb9a7fba310b005->leave($__internal_d2f4beb8fcdc22be16fc44030f2fc63b8173960f56e203159bb9a7fba310b005_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c51a5d91f755330e1255ee27123b8fb953e9e81169153bd5727ac290842c352d = $this->env->getExtension("native_profiler");
        $__internal_c51a5d91f755330e1255ee27123b8fb953e9e81169153bd5727ac290842c352d->enter($__internal_c51a5d91f755330e1255ee27123b8fb953e9e81169153bd5727ac290842c352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "deleted")) {
                // line 13
                echo "    <div class=\"alert alert-success\">Serwer została usunięty</div>
  ";
            }
            // line 15
            echo "  ";
            if (((isset($context["komunikat"]) ? $context["komunikat"] : $this->getContext($context, "komunikat")) == "error")) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["lista_serwer"]) ? $context["lista_serwer"] : $this->getContext($context, "lista_serwer")));
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
        
        $__internal_c51a5d91f755330e1255ee27123b8fb953e9e81169153bd5727ac290842c352d->leave($__internal_c51a5d91f755330e1255ee27123b8fb953e9e81169153bd5727ac290842c352d_prof);

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
        return array (  144 => 54,  133 => 49,  129 => 48,  125 => 47,  121 => 46,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  100 => 39,  96 => 38,  76 => 20,  74 => 19,  69 => 16,  66 => 15,  62 => 13,  59 => 12,  55 => 10,  52 => 9,  48 => 7,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
