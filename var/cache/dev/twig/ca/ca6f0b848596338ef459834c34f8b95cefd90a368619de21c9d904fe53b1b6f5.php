<?php

/* main/directAdmin.twig */
class __TwigTemplate_cdceaa6d30cd91e65b9f8a7cc65bbef9e2cf1c294f97cb326324097e59aec030 extends Twig_Template
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
        $__internal_42a8b5a76ad5b07b5cf014ae3a38077ec94eef40e859725987543f797cfdaf59 = $this->env->getExtension("native_profiler");
        $__internal_42a8b5a76ad5b07b5cf014ae3a38077ec94eef40e859725987543f797cfdaf59->enter($__internal_42a8b5a76ad5b07b5cf014ae3a38077ec94eef40e859725987543f797cfdaf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/directAdmin.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42a8b5a76ad5b07b5cf014ae3a38077ec94eef40e859725987543f797cfdaf59->leave($__internal_42a8b5a76ad5b07b5cf014ae3a38077ec94eef40e859725987543f797cfdaf59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d470cbfe8ec92b27d1e3135fbf9a874f8aa1675b686701597ae9939c6163557 = $this->env->getExtension("native_profiler");
        $__internal_8d470cbfe8ec92b27d1e3135fbf9a874f8aa1675b686701597ae9939c6163557->enter($__internal_8d470cbfe8ec92b27d1e3135fbf9a874f8aa1675b686701597ae9939c6163557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Lista wykrytych domen przypisanych do serwera <a href=\"/serwery\"><button class=\"btn btn-default add-button\">Wstecz</button></a></h2>


 <ul class=\"lista_domen\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dane"]) ? $context["dane"] : $this->getContext($context, "dane")));
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
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domeny"]) ? $context["form_dodaj_domeny"] : $this->getContext($context, "form_dodaj_domeny")), 'form_start');
            echo "
";
            // line 21
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_domeny"]) ? $context["form_dodaj_domeny"] : $this->getContext($context, "form_dodaj_domeny")), 'widget');
            echo "
";
            // line 22
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_domeny"]) ? $context["form_dodaj_domeny"] : $this->getContext($context, "form_dodaj_domeny")), 'form_end');
            echo "
";
        }
        
        $__internal_8d470cbfe8ec92b27d1e3135fbf9a874f8aa1675b686701597ae9939c6163557->leave($__internal_8d470cbfe8ec92b27d1e3135fbf9a874f8aa1675b686701597ae9939c6163557_prof);

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
        return array (  92 => 22,  88 => 21,  84 => 20,  80 => 18,  76 => 16,  74 => 15,  71 => 14,  65 => 13,  56 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
