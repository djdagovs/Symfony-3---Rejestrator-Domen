<?php

/* main/dodaj/firme.twig */
class __TwigTemplate_10f5a2a736a66f24c6503587d29aae217c4abf6226b0507938f0638f253eb717 extends Twig_Template
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
        $__internal_e3fc2c51e99c7e1af40539059f2e15eb067550f6b999db4e0bb4454cb3fc9e36 = $this->env->getExtension("native_profiler");
        $__internal_e3fc2c51e99c7e1af40539059f2e15eb067550f6b999db4e0bb4454cb3fc9e36->enter($__internal_e3fc2c51e99c7e1af40539059f2e15eb067550f6b999db4e0bb4454cb3fc9e36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/dodaj/firme.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3fc2c51e99c7e1af40539059f2e15eb067550f6b999db4e0bb4454cb3fc9e36->leave($__internal_e3fc2c51e99c7e1af40539059f2e15eb067550f6b999db4e0bb4454cb3fc9e36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25d867dbd5fb1e5bc9091d0c5dce9b2c15549f81ac4c7a611841359741ad1ad4 = $this->env->getExtension("native_profiler");
        $__internal_25d867dbd5fb1e5bc9091d0c5dce9b2c15549f81ac4c7a611841359741ad1ad4->enter($__internal_25d867dbd5fb1e5bc9091d0c5dce9b2c15549f81ac4c7a611841359741ad1ad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Dodaj firmę   <a href=\"/firmy\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>
<p> Dodaną firmę możesz powiązać z domeną </p>


\t\t    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_firma"]) ? $context["form_dodaj_firma"] : $this->getContext($context, "form_dodaj_firma")), 'form_start');
        echo "
\t\t    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_dodaj_firma"]) ? $context["form_dodaj_firma"] : $this->getContext($context, "form_dodaj_firma")), 'widget');
        echo "
\t\t    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_dodaj_firma"]) ? $context["form_dodaj_firma"] : $this->getContext($context, "form_dodaj_firma")), 'form_end');
        echo "



";
        
        $__internal_25d867dbd5fb1e5bc9091d0c5dce9b2c15549f81ac4c7a611841359741ad1ad4->leave($__internal_25d867dbd5fb1e5bc9091d0c5dce9b2c15549f81ac4c7a611841359741ad1ad4_prof);

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
        return array (  55 => 11,  51 => 10,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
