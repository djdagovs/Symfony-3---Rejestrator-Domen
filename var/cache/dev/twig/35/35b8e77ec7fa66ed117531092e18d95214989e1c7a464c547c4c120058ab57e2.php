<?php

/* main/edytuj/firma.twig */
class __TwigTemplate_6190d73802da4953315bd93b11ee099845e4cd76182e8cd35b3aa758d749604f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/edytuj/firma.twig", 1);
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
        $__internal_6dbf2eaf75bdad55785cdc822c55c01e76fb27af815e58a2fbe3552dcd7654bb = $this->env->getExtension("native_profiler");
        $__internal_6dbf2eaf75bdad55785cdc822c55c01e76fb27af815e58a2fbe3552dcd7654bb->enter($__internal_6dbf2eaf75bdad55785cdc822c55c01e76fb27af815e58a2fbe3552dcd7654bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/edytuj/firma.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dbf2eaf75bdad55785cdc822c55c01e76fb27af815e58a2fbe3552dcd7654bb->leave($__internal_6dbf2eaf75bdad55785cdc822c55c01e76fb27af815e58a2fbe3552dcd7654bb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c649d818664c782da3f8afbf96caee737c67ddf2c978f577d53c6c45ecc6cf9 = $this->env->getExtension("native_profiler");
        $__internal_7c649d818664c782da3f8afbf96caee737c67ddf2c978f577d53c6c45ecc6cf9->enter($__internal_7c649d818664c782da3f8afbf96caee737c67ddf2c978f577d53c6c45ecc6cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Edytuj dane firmy   <a href=\"/firmy\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_firma"]) ? $context["form_edit_firma"] : $this->getContext($context, "form_edit_firma")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_edit_firma"]) ? $context["form_edit_firma"] : $this->getContext($context, "form_edit_firma")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_firma"]) ? $context["form_edit_firma"] : $this->getContext($context, "form_edit_firma")), 'form_end');
        echo "


";
        
        $__internal_7c649d818664c782da3f8afbf96caee737c67ddf2c978f577d53c6c45ecc6cf9->leave($__internal_7c649d818664c782da3f8afbf96caee737c67ddf2c978f577d53c6c45ecc6cf9_prof);

    }

    public function getTemplateName()
    {
        return "main/edytuj/firma.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h2>Edytuj dane firmy   <a href="/firmy"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* */
/* {{form_start(form_edit_firma)}}*/
/* {{form_widget(form_edit_firma)}}*/
/* {{form_end(form_edit_firma)}}*/
/* */
/* */
/* {% endblock %}*/
