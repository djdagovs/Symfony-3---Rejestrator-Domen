<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_972d020009b27d44a95bb41d2809fa5cb4f0040b1a5565930f80a880e6a4fd7f extends Twig_Template
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
        $__internal_f4537b870334d2b698b7a93a480c4148a02a83dbf27ca24a644681ca8e8eebc8 = $this->env->getExtension("native_profiler");
        $__internal_f4537b870334d2b698b7a93a480c4148a02a83dbf27ca24a644681ca8e8eebc8->enter($__internal_f4537b870334d2b698b7a93a480c4148a02a83dbf27ca24a644681ca8e8eebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4537b870334d2b698b7a93a480c4148a02a83dbf27ca24a644681ca8e8eebc8->leave($__internal_f4537b870334d2b698b7a93a480c4148a02a83dbf27ca24a644681ca8e8eebc8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bd82205d9ad456b056efc878db3aa947201eb21dc951cf50a56762f36fc3ba9 = $this->env->getExtension("native_profiler");
        $__internal_6bd82205d9ad456b056efc878db3aa947201eb21dc951cf50a56762f36fc3ba9->enter($__internal_6bd82205d9ad456b056efc878db3aa947201eb21dc951cf50a56762f36fc3ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        <input type=\"text\" name=\"_username\" placeholder=\"Nazwa użytkownika\" required=\"required\" class=\"input-txt\" />
          <input type=\"password\" name=\"_password\" placeholder=\"Hasło\" required=\"required\" class=\"input-txt\" />

            <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn--right\">Zaloguj się</button>

      </form>




";
        
        $__internal_6bd82205d9ad456b056efc878db3aa947201eb21dc951cf50a56762f36fc3ba9->leave($__internal_6bd82205d9ad456b056efc878db3aa947201eb21dc951cf50a56762f36fc3ba9_prof);

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
        return array (  63 => 17,  59 => 16,  51 => 10,  45 => 8,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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
