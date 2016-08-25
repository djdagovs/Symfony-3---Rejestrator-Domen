<?php

/* main/widoki/pogrupowaneDomeny.twig */
class __TwigTemplate_7f8e946bc19f7163fafeea80643a9f5dbbec622c9cdd114a6dcb9e861a76babc extends Twig_Template
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
        $__internal_9e01589c141c7186e5a0425c535f83791e3af212e806a5651f906f9cc9b52d62 = $this->env->getExtension("native_profiler");
        $__internal_9e01589c141c7186e5a0425c535f83791e3af212e806a5651f906f9cc9b52d62->enter($__internal_9e01589c141c7186e5a0425c535f83791e3af212e806a5651f906f9cc9b52d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/widoki/pogrupowaneDomeny.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e01589c141c7186e5a0425c535f83791e3af212e806a5651f906f9cc9b52d62->leave($__internal_9e01589c141c7186e5a0425c535f83791e3af212e806a5651f906f9cc9b52d62_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_53d0435f74a23e5708bf09e50d37b2e220682685ca1e8cd84b609f357cf4b02b = $this->env->getExtension("native_profiler");
        $__internal_53d0435f74a23e5708bf09e50d37b2e220682685ca1e8cd84b609f357cf4b02b->enter($__internal_53d0435f74a23e5708bf09e50d37b2e220682685ca1e8cd84b609f357cf4b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["pogrupowane"]) ? $context["pogrupowane"] : $this->getContext($context, "pogrupowane")));
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
        
        $__internal_53d0435f74a23e5708bf09e50d37b2e220682685ca1e8cd84b609f357cf4b02b->leave($__internal_53d0435f74a23e5708bf09e50d37b2e220682685ca1e8cd84b609f357cf4b02b_prof);

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
        return array (  76 => 16,  59 => 14,  54 => 13,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
