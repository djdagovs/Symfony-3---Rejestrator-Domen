<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_75d8466ded098f3de2c748b51a8d7ea8f1b6be7f9614d2d914ce865ba1d9b7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "


  <div class=\"login\">
  \t<h1 class=\"login-heading\">
      <strong>Witam.</strong>Proszę się zalogować.</h1>
        <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
        <input type=\"text\" name=\"_username\" placeholder=\"Nazwa użytkownika\" required=\"required\" class=\"input-txt\" />
          <input type=\"password\" name=\"_password\" placeholder=\"Hasło\" required=\"required\" class=\"input-txt\" />

            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn--right\">Zaloguj się</button>

      </form>




";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  50 => 16,  42 => 10,  36 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* */
/* {% if error %}*/
/*     <div class="alert alert-danger">{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* */
/* */
/*   <div class="login">*/
/*   	<h1 class="login-heading">*/
/*       <strong>Witam.</strong>Proszę się zalogować.</h1>*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         <input type="text" name="_username" placeholder="Nazwa użytkownika" required="required" class="input-txt" />*/
/*           <input type="password" name="_password" placeholder="Hasło" required="required" class="input-txt" />*/
/* */
/*             <button type="submit" id="_submit" name="_submit" class="btn btn--right">Zaloguj się</button>*/
/* */
/*       </form>*/
/* */
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
