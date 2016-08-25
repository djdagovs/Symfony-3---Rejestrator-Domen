<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_5b557f8f667d25d9fe44fe98e0b516c34c24a2af446db28a23f5b46aaa761e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a6ca46c851ff78698656ddd8edc7e5f27d627e699675e63fe212e61b8ed99351 = $this->env->getExtension("native_profiler");
        $__internal_a6ca46c851ff78698656ddd8edc7e5f27d627e699675e63fe212e61b8ed99351->enter($__internal_a6ca46c851ff78698656ddd8edc7e5f27d627e699675e63fe212e61b8ed99351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ca46c851ff78698656ddd8edc7e5f27d627e699675e63fe212e61b8ed99351->leave($__internal_a6ca46c851ff78698656ddd8edc7e5f27d627e699675e63fe212e61b8ed99351_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40548c6a1ba365735ac372938e068532c3b89cafdac9a51e1ac9c2449d5d9564 = $this->env->getExtension("native_profiler");
        $__internal_40548c6a1ba365735ac372938e068532c3b89cafdac9a51e1ac9c2449d5d9564->enter($__internal_40548c6a1ba365735ac372938e068532c3b89cafdac9a51e1ac9c2449d5d9564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_40548c6a1ba365735ac372938e068532c3b89cafdac9a51e1ac9c2449d5d9564->leave($__internal_40548c6a1ba365735ac372938e068532c3b89cafdac9a51e1ac9c2449d5d9564_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
