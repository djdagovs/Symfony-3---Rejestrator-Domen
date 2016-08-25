<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_5c2b497dae6972809031360241ec061c87e363b5595a8939def5eeff5a9c6da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f9d2d6a8dc50219ed827aba48f7b0309f92d9a613789d548515d7ad712374ed1 = $this->env->getExtension("native_profiler");
        $__internal_f9d2d6a8dc50219ed827aba48f7b0309f92d9a613789d548515d7ad712374ed1->enter($__internal_f9d2d6a8dc50219ed827aba48f7b0309f92d9a613789d548515d7ad712374ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d2d6a8dc50219ed827aba48f7b0309f92d9a613789d548515d7ad712374ed1->leave($__internal_f9d2d6a8dc50219ed827aba48f7b0309f92d9a613789d548515d7ad712374ed1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b8f831e8479ab74db6901d020be6232ef39019590e6cb07beb2165d88383968 = $this->env->getExtension("native_profiler");
        $__internal_6b8f831e8479ab74db6901d020be6232ef39019590e6cb07beb2165d88383968->enter($__internal_6b8f831e8479ab74db6901d020be6232ef39019590e6cb07beb2165d88383968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_6b8f831e8479ab74db6901d020be6232ef39019590e6cb07beb2165d88383968->leave($__internal_6b8f831e8479ab74db6901d020be6232ef39019590e6cb07beb2165d88383968_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
