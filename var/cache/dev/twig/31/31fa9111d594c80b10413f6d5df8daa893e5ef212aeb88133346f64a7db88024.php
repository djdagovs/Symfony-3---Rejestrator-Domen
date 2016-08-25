<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f9ab4beb57e1846c3473a6dccaab32d1a31434b7986cb47ae5ba68d642a84abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3b934c7b7659c14139c81dc2bdee43b0f348554dfb9a8a9f3ba3d353c644e93e = $this->env->getExtension("native_profiler");
        $__internal_3b934c7b7659c14139c81dc2bdee43b0f348554dfb9a8a9f3ba3d353c644e93e->enter($__internal_3b934c7b7659c14139c81dc2bdee43b0f348554dfb9a8a9f3ba3d353c644e93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b934c7b7659c14139c81dc2bdee43b0f348554dfb9a8a9f3ba3d353c644e93e->leave($__internal_3b934c7b7659c14139c81dc2bdee43b0f348554dfb9a8a9f3ba3d353c644e93e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_594c65e7bcfa63f75664a85ead11ebe8442c32ffb7953ecfb87e0e5a3ec9a780 = $this->env->getExtension("native_profiler");
        $__internal_594c65e7bcfa63f75664a85ead11ebe8442c32ffb7953ecfb87e0e5a3ec9a780->enter($__internal_594c65e7bcfa63f75664a85ead11ebe8442c32ffb7953ecfb87e0e5a3ec9a780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_594c65e7bcfa63f75664a85ead11ebe8442c32ffb7953ecfb87e0e5a3ec9a780->leave($__internal_594c65e7bcfa63f75664a85ead11ebe8442c32ffb7953ecfb87e0e5a3ec9a780_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
