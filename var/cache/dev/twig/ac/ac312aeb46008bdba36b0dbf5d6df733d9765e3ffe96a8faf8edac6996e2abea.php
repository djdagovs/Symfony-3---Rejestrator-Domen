<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_cf350587b0b53830fb6a4723b80b94553494f810072b39dfd3d0b6a78cf686fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_29d8fe563a478b0a2feff0349274f05a8418aa8c71b4a548e474f08c861c6d04 = $this->env->getExtension("native_profiler");
        $__internal_29d8fe563a478b0a2feff0349274f05a8418aa8c71b4a548e474f08c861c6d04->enter($__internal_29d8fe563a478b0a2feff0349274f05a8418aa8c71b4a548e474f08c861c6d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29d8fe563a478b0a2feff0349274f05a8418aa8c71b4a548e474f08c861c6d04->leave($__internal_29d8fe563a478b0a2feff0349274f05a8418aa8c71b4a548e474f08c861c6d04_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5d0f93a2befbe23de9ba1656781cbaa705382cb038b8757ac198b30cfc971a9 = $this->env->getExtension("native_profiler");
        $__internal_b5d0f93a2befbe23de9ba1656781cbaa705382cb038b8757ac198b30cfc971a9->enter($__internal_b5d0f93a2befbe23de9ba1656781cbaa705382cb038b8757ac198b30cfc971a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b5d0f93a2befbe23de9ba1656781cbaa705382cb038b8757ac198b30cfc971a9->leave($__internal_b5d0f93a2befbe23de9ba1656781cbaa705382cb038b8757ac198b30cfc971a9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
