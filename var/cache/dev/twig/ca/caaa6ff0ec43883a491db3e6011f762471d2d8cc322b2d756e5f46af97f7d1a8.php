<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0ae1d8b46aef48b92024581e3aa24e6ace0231aa736004cb2b95ba3428d0a98a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_934154fd863be04c1d949578c0b6480d0c70ff049043fb7c8ee4e5e97a7ff83a = $this->env->getExtension("native_profiler");
        $__internal_934154fd863be04c1d949578c0b6480d0c70ff049043fb7c8ee4e5e97a7ff83a->enter($__internal_934154fd863be04c1d949578c0b6480d0c70ff049043fb7c8ee4e5e97a7ff83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934154fd863be04c1d949578c0b6480d0c70ff049043fb7c8ee4e5e97a7ff83a->leave($__internal_934154fd863be04c1d949578c0b6480d0c70ff049043fb7c8ee4e5e97a7ff83a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d274dbf17ba34c5f82bd41adcc9b486908ffc1799ad5168a8b170694ac4998a6 = $this->env->getExtension("native_profiler");
        $__internal_d274dbf17ba34c5f82bd41adcc9b486908ffc1799ad5168a8b170694ac4998a6->enter($__internal_d274dbf17ba34c5f82bd41adcc9b486908ffc1799ad5168a8b170694ac4998a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d274dbf17ba34c5f82bd41adcc9b486908ffc1799ad5168a8b170694ac4998a6->leave($__internal_d274dbf17ba34c5f82bd41adcc9b486908ffc1799ad5168a8b170694ac4998a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
