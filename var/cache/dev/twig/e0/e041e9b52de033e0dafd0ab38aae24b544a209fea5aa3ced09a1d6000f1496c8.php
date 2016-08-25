<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_455369f51e194326a0e8817b65c269ff2df509f45f326c8547111154b0ca996f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_7e48425f910e261f8d251bf51ebaaa10a290b1b2cd68cc9901340db16e11edc1 = $this->env->getExtension("native_profiler");
        $__internal_7e48425f910e261f8d251bf51ebaaa10a290b1b2cd68cc9901340db16e11edc1->enter($__internal_7e48425f910e261f8d251bf51ebaaa10a290b1b2cd68cc9901340db16e11edc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e48425f910e261f8d251bf51ebaaa10a290b1b2cd68cc9901340db16e11edc1->leave($__internal_7e48425f910e261f8d251bf51ebaaa10a290b1b2cd68cc9901340db16e11edc1_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_56a28b56c9d37e17ca517a009fef77fa652abddae5ec85b6a76c6048579f6b2a = $this->env->getExtension("native_profiler");
        $__internal_56a28b56c9d37e17ca517a009fef77fa652abddae5ec85b6a76c6048579f6b2a->enter($__internal_56a28b56c9d37e17ca517a009fef77fa652abddae5ec85b6a76c6048579f6b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "\t<p style=\"padding:20px;font-size:16px;\"><b style=\"font-size:24px;\">Gratulujemy.</b>Twoje konto zostało utworzone.</p>
\t<div>
";
        
        $__internal_56a28b56c9d37e17ca517a009fef77fa652abddae5ec85b6a76c6048579f6b2a->leave($__internal_56a28b56c9d37e17ca517a009fef77fa652abddae5ec85b6a76c6048579f6b2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block fos_user_content %}*/
/* 	<p style="padding:20px;font-size:16px;"><b style="font-size:24px;">Gratulujemy.</b>Twoje konto zostało utworzone.</p>*/
/* 	<div>*/
/* {% endblock fos_user_content %}*/
/* */
