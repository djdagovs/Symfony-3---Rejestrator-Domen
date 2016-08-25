<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e26bff135639fe4a9e735769d867395de6cb4f7fdbfd5e5b08adb4bbb663b561 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"login\">
  \t<h1 class=\"login-heading\">
      <strong>Zarejestruj się.</strong>Wpisz dane poniżej.</h1>
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "

        <input type=\"submit\" id=\"register-btn\" value=\"Zarejestruj\" class=\"btn btn--right\" />

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
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
        return array (  47 => 13,  40 => 9,  36 => 8,  31 => 5,  28 => 4,  11 => 2,);
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
