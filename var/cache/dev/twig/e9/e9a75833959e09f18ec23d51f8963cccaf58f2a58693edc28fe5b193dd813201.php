<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4f0c79cbcc729bc7cb7e793a0503db4b8629c21c67d510d6694bfb126184f6fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 2);
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
        $__internal_9b7975c7b4733ecfebbd4f60838b987741b28637268af2965ccd535451c7e581 = $this->env->getExtension("native_profiler");
        $__internal_9b7975c7b4733ecfebbd4f60838b987741b28637268af2965ccd535451c7e581->enter($__internal_9b7975c7b4733ecfebbd4f60838b987741b28637268af2965ccd535451c7e581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b7975c7b4733ecfebbd4f60838b987741b28637268af2965ccd535451c7e581->leave($__internal_9b7975c7b4733ecfebbd4f60838b987741b28637268af2965ccd535451c7e581_prof);

    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fbc589581bf7e921e9126e2da5f79b7f510686ba9152f0188a1a1222a8f2c078 = $this->env->getExtension("native_profiler");
        $__internal_fbc589581bf7e921e9126e2da5f79b7f510686ba9152f0188a1a1222a8f2c078->enter($__internal_fbc589581bf7e921e9126e2da5f79b7f510686ba9152f0188a1a1222a8f2c078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "  <div class=\"login\">
  \t<h1 class=\"login-heading\">
      <strong>Zarejestruj się.</strong>Wpisz dane poniżej.</h1>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <input type=\"submit\" id=\"register-btn\" value=\"Zarejestruj\" class=\"btn btn--right\" />

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_fbc589581bf7e921e9126e2da5f79b7f510686ba9152f0188a1a1222a8f2c078->leave($__internal_fbc589581bf7e921e9126e2da5f79b7f510686ba9152f0188a1a1222a8f2c078_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  49 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*   <div class="login">*/
/*   	<h1 class="login-heading">*/
/*       <strong>Zarejestruj się.</strong>Wpisz dane poniżej.</h1>*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     {{ form_widget(form) }}*/
/* */
/*         <input type="submit" id="register-btn" value="Zarejestruj" class="btn btn--right" />*/
/* */
/* {{ form_end(form) }}*/
/* */
/* {% endblock fos_user_content %}*/
/* */
