<?php

/* main/widoki/pogrupowaneDomeny.twig */
class __TwigTemplate_ae2d12dfcbe0b42c2ef5034b345a8681546e82d838b49bc641aabefd8c2c1ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/widoki/pogrupowaneDomeny.twig", 1);
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
<p><h2>Lista pogrupowanych domen według serwerów</h2></p>
<p>
<a href=\"/dodaj/domene\"><button class=\"btn btn-success add-button\">Dodaj domene</button></a>
<a href=\"/domeny\"><button class=\"btn btn-primary add-button\">Wróć</button></a>
</p>

 <ul class=\"lista_serwerow\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pogrupowane"]) ? $context["pogrupowane"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["serwer"]) {
            // line 13
            echo "    \t<li>";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</li>
    \t<ul>";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["serwer"]);
            foreach ($context['_seq'] as $context["_key"] => $context["domena"]) {
                echo "<li>";
                echo twig_escape_filter($this->env, $context["domena"], "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domena'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</ul>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['serwer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>

";
    }

    public function getTemplateName()
    {
        return "main/widoki/pogrupowaneDomeny.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  50 => 14,  45 => 13,  41 => 12,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <p><h2>Lista pogrupowanych domen według serwerów</h2></p>*/
/* <p>*/
/* <a href="/dodaj/domene"><button class="btn btn-success add-button">Dodaj domene</button></a>*/
/* <a href="/domeny"><button class="btn btn-primary add-button">Wróć</button></a>*/
/* </p>*/
/* */
/*  <ul class="lista_serwerow">*/
/*     {% for key,serwer in pogrupowane %}*/
/*     	<li>{{key}}</li>*/
/*     	<ul>{% for domena in serwer %}<li>{{domena}}</li>{% endfor %}</ul>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
