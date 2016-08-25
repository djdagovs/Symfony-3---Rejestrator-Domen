<?php

/* main/dodaj/firme.twig */
class __TwigTemplate_c72d530ff5c38d40cbe2105b059da8c0fdf554fac3bc3a8afe28811d744e9919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/dodaj/firme.twig", 1);
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
<h2>Dodaj firmę   <a href=\"/firmy\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>
<p> Dodaną firmę możesz powiązać z domeną </p>


\t\t    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_firma"]) ? $context["form_dodaj_firma"] : null), 'form_start');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_firma"]) ? $context["form_dodaj_firma"] : null), 'widget');
        echo "
\t\t    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_firma"]) ? $context["form_dodaj_firma"] : null), 'form_end');
        echo "



";
    }

    public function getTemplateName()
    {
        return "main/dodaj/firme.twig";
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
/* <h2>Dodaj firmę   <a href="/firmy"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* <p> Dodaną firmę możesz powiązać z domeną </p>*/
/* */
/* */
/* 		    {{form_start(form_dodaj_firma)}}*/
/* 		    {{form_widget(form_dodaj_firma)}}*/
/* 		    {{form_end(form_dodaj_firma)}}*/
/* */
/* */
/* */
/* {% endblock %}*/
