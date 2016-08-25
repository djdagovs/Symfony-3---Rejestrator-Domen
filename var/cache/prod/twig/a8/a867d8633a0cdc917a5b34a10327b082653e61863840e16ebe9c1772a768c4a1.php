<?php

/* main/dodaj/serwer.twig */
class __TwigTemplate_9bd6d6eb4453237e6706df5a5510233e3c3596f9ab50bcde28eba10578a46709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/dodaj/serwer.twig", 1);
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
<h2>Dodaj serwer   <a href=\"/serwery\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>
<p> Powiąż relacją serwer i domenę</p>


";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_serwer"]) ? $context["form_dodaj_serwer"] : null), 'form_start');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_serwer"]) ? $context["form_dodaj_serwer"] : null), 'widget');
        echo "
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_serwer"]) ? $context["form_dodaj_serwer"] : null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "main/dodaj/serwer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h2>Dodaj serwer   <a href="/serwery"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* <p> Powiąż relacją serwer i domenę</p>*/
/* */
/* */
/* {{form_start(form_dodaj_serwer)}}*/
/* {{form_widget(form_dodaj_serwer)}}*/
/* {{form_end(form_dodaj_serwer)}}*/
/* */
/* */
/* {% endblock %}*/
