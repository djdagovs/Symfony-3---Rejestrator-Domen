<?php

/* main/directAdmin.twig */
class __TwigTemplate_94d02837d642ace00faf8c31e67465ac06804e4af58f16f953cdb126fd46b07f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/directAdmin.twig", 1);
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
<h2>Lista wykrytych domen przypisanych do serwera <a href=\"/serwery\"><button class=\"btn btn-default add-button\">Wstecz</button></a></h2>


 <ul class=\"lista_domen\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dane"]) ? $context["dane"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["domena"]) {
            // line 10
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["domena"]);
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 11
                echo "        <li>";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domena'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>
";
        // line 15
        if ($this->getAttribute((isset($context["dane"]) ? $context["dane"] : null), "brak", array(), "any", true, true)) {
            // line 16
            echo "  <h2>BRAK NOWYCH DOMEN DLA TEGO SERWERA</h2>
";
        } else {
            // line 18
            echo "<h2>Dodać domeny do systemu ? </h2>
<p>Wybierz firmę z jaką zostaną powiązane domeny</p>
";
            // line 20
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domeny"]) ? $context["form_dodaj_domeny"] : null), 'form_start');
            echo "
";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_domeny"]) ? $context["form_dodaj_domeny"] : null), 'widget');
            echo "
";
            // line 22
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domeny"]) ? $context["form_dodaj_domeny"] : null), 'form_end');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "main/directAdmin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  79 => 21,  75 => 20,  71 => 18,  67 => 16,  65 => 15,  62 => 14,  56 => 13,  47 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h2>Lista wykrytych domen przypisanych do serwera <a href="/serwery"><button class="btn btn-default add-button">Wstecz</button></a></h2>*/
/* */
/* */
/*  <ul class="lista_domen">*/
/*     {% for domena in dane %}*/
/*       {% for v in domena %}*/
/*         <li>{{ v }}</li>*/
/*       {% endfor %}*/
/*     {% endfor %}*/
/* </ul>*/
/* {% if dane.brak is defined %}*/
/*   <h2>BRAK NOWYCH DOMEN DLA TEGO SERWERA</h2>*/
/* {% else %}*/
/* <h2>Dodać domeny do systemu ? </h2>*/
/* <p>Wybierz firmę z jaką zostaną powiązane domeny</p>*/
/* {{form_start(form_dodaj_domeny)}}*/
/* {{form_widget(form_dodaj_domeny)}}*/
/* {{form_end(form_dodaj_domeny)}}*/
/* {% endif %}*/
/* {% endblock %}*/
