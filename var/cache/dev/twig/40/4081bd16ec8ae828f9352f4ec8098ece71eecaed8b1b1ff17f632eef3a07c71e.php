<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_a3211d891996230e6ac8a89d5367de0789289cad40a0e8511c6721a44f747923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3cd7c976f14b506cb7cb65f3d066a567958d5c391578adac8dbe57681c5f8817 = $this->env->getExtension("native_profiler");
        $__internal_3cd7c976f14b506cb7cb65f3d066a567958d5c391578adac8dbe57681c5f8817->enter($__internal_3cd7c976f14b506cb7cb65f3d066a567958d5c391578adac8dbe57681c5f8817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cd7c976f14b506cb7cb65f3d066a567958d5c391578adac8dbe57681c5f8817->leave($__internal_3cd7c976f14b506cb7cb65f3d066a567958d5c391578adac8dbe57681c5f8817_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6fcc2688b82f01b1498e933eb2d54c61198c9e93cefec6d48bab2f090158f16 = $this->env->getExtension("native_profiler");
        $__internal_f6fcc2688b82f01b1498e933eb2d54c61198c9e93cefec6d48bab2f090158f16->enter($__internal_f6fcc2688b82f01b1498e933eb2d54c61198c9e93cefec6d48bab2f090158f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f6fcc2688b82f01b1498e933eb2d54c61198c9e93cefec6d48bab2f090158f16->leave($__internal_f6fcc2688b82f01b1498e933eb2d54c61198c9e93cefec6d48bab2f090158f16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
