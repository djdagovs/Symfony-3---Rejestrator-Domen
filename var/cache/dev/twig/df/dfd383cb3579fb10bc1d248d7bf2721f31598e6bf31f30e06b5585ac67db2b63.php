<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ae0ad3eae5816ae7fabb24a119efadf42fb5d29e45f044e411f89b30bccad1e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_716544fbd1b36bb154fa758125a91066b1c86b21f3c62502aeaf973b96e6138f = $this->env->getExtension("native_profiler");
        $__internal_716544fbd1b36bb154fa758125a91066b1c86b21f3c62502aeaf973b96e6138f->enter($__internal_716544fbd1b36bb154fa758125a91066b1c86b21f3c62502aeaf973b96e6138f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_716544fbd1b36bb154fa758125a91066b1c86b21f3c62502aeaf973b96e6138f->leave($__internal_716544fbd1b36bb154fa758125a91066b1c86b21f3c62502aeaf973b96e6138f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6eac4cd56fd3c849eac2cc99e51e5588ffb8e7337167273e2e80bc4a89a6897a = $this->env->getExtension("native_profiler");
        $__internal_6eac4cd56fd3c849eac2cc99e51e5588ffb8e7337167273e2e80bc4a89a6897a->enter($__internal_6eac4cd56fd3c849eac2cc99e51e5588ffb8e7337167273e2e80bc4a89a6897a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6eac4cd56fd3c849eac2cc99e51e5588ffb8e7337167273e2e80bc4a89a6897a->leave($__internal_6eac4cd56fd3c849eac2cc99e51e5588ffb8e7337167273e2e80bc4a89a6897a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
