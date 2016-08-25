<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_1068cd93893655374a70a5c23a86067a67af3994f3318a5bef0cba76f0ad1ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_d744cbb1eb268bb65e951069babf2ba46b7019320d525733b13b684591ff7184 = $this->env->getExtension("native_profiler");
        $__internal_d744cbb1eb268bb65e951069babf2ba46b7019320d525733b13b684591ff7184->enter($__internal_d744cbb1eb268bb65e951069babf2ba46b7019320d525733b13b684591ff7184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d744cbb1eb268bb65e951069babf2ba46b7019320d525733b13b684591ff7184->leave($__internal_d744cbb1eb268bb65e951069babf2ba46b7019320d525733b13b684591ff7184_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a8b789e655a0abc50784d1a577aa98a733c2cb0a50d17fcc465be2c70acb14d4 = $this->env->getExtension("native_profiler");
        $__internal_a8b789e655a0abc50784d1a577aa98a733c2cb0a50d17fcc465be2c70acb14d4->enter($__internal_a8b789e655a0abc50784d1a577aa98a733c2cb0a50d17fcc465be2c70acb14d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a8b789e655a0abc50784d1a577aa98a733c2cb0a50d17fcc465be2c70acb14d4->leave($__internal_a8b789e655a0abc50784d1a577aa98a733c2cb0a50d17fcc465be2c70acb14d4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
