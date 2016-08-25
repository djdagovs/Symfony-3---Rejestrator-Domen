<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_252095c4a4b611c8679f270b40cdddec7c8638b9d30b61b47c835b392704fa47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6d83a008b7dd3e13ccd20acf59f6e016bc92fbe889ab98d0ad74d7f944a0e60 = $this->env->getExtension("native_profiler");
        $__internal_d6d83a008b7dd3e13ccd20acf59f6e016bc92fbe889ab98d0ad74d7f944a0e60->enter($__internal_d6d83a008b7dd3e13ccd20acf59f6e016bc92fbe889ab98d0ad74d7f944a0e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6d83a008b7dd3e13ccd20acf59f6e016bc92fbe889ab98d0ad74d7f944a0e60->leave($__internal_d6d83a008b7dd3e13ccd20acf59f6e016bc92fbe889ab98d0ad74d7f944a0e60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_45c37dfa1c8eac1b8beb921273a7c45e20bc72424f0d5960bf900b2afd516ed9 = $this->env->getExtension("native_profiler");
        $__internal_45c37dfa1c8eac1b8beb921273a7c45e20bc72424f0d5960bf900b2afd516ed9->enter($__internal_45c37dfa1c8eac1b8beb921273a7c45e20bc72424f0d5960bf900b2afd516ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_45c37dfa1c8eac1b8beb921273a7c45e20bc72424f0d5960bf900b2afd516ed9->leave($__internal_45c37dfa1c8eac1b8beb921273a7c45e20bc72424f0d5960bf900b2afd516ed9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
