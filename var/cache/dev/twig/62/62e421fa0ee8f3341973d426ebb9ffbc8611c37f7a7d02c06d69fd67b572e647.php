<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2d6c47c160b8f500a496a2ae09748dc3f98a7c0339b0d496f00be8d1e8b8d96e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0e9e3e9f795e3b0f1ce6236bae9c7aad0a85d78d6ee0babe48eb2a6445637d3e = $this->env->getExtension("native_profiler");
        $__internal_0e9e3e9f795e3b0f1ce6236bae9c7aad0a85d78d6ee0babe48eb2a6445637d3e->enter($__internal_0e9e3e9f795e3b0f1ce6236bae9c7aad0a85d78d6ee0babe48eb2a6445637d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e9e3e9f795e3b0f1ce6236bae9c7aad0a85d78d6ee0babe48eb2a6445637d3e->leave($__internal_0e9e3e9f795e3b0f1ce6236bae9c7aad0a85d78d6ee0babe48eb2a6445637d3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f64e79aea27333f85d11fca10311479f470f6a1f6f020201d5390bf480512c5 = $this->env->getExtension("native_profiler");
        $__internal_8f64e79aea27333f85d11fca10311479f470f6a1f6f020201d5390bf480512c5->enter($__internal_8f64e79aea27333f85d11fca10311479f470f6a1f6f020201d5390bf480512c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8f64e79aea27333f85d11fca10311479f470f6a1f6f020201d5390bf480512c5->leave($__internal_8f64e79aea27333f85d11fca10311479f470f6a1f6f020201d5390bf480512c5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
