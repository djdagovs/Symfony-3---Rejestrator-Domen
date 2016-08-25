<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_01ab4b9864ab7723292c81f37eb3c3236840244e3238e5431c6c8c0f3469bd99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_cea9a5cb2837cc650a1ac6d4bdffd76a46f7dd3a3014723b55b0ae3e6be5563b = $this->env->getExtension("native_profiler");
        $__internal_cea9a5cb2837cc650a1ac6d4bdffd76a46f7dd3a3014723b55b0ae3e6be5563b->enter($__internal_cea9a5cb2837cc650a1ac6d4bdffd76a46f7dd3a3014723b55b0ae3e6be5563b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cea9a5cb2837cc650a1ac6d4bdffd76a46f7dd3a3014723b55b0ae3e6be5563b->leave($__internal_cea9a5cb2837cc650a1ac6d4bdffd76a46f7dd3a3014723b55b0ae3e6be5563b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b672ef48e5151a3b21d873cb2fd63ee99783d7ec4d5e5b278b1dbaa2eabdac4 = $this->env->getExtension("native_profiler");
        $__internal_6b672ef48e5151a3b21d873cb2fd63ee99783d7ec4d5e5b278b1dbaa2eabdac4->enter($__internal_6b672ef48e5151a3b21d873cb2fd63ee99783d7ec4d5e5b278b1dbaa2eabdac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6b672ef48e5151a3b21d873cb2fd63ee99783d7ec4d5e5b278b1dbaa2eabdac4->leave($__internal_6b672ef48e5151a3b21d873cb2fd63ee99783d7ec4d5e5b278b1dbaa2eabdac4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
