<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_dec42215d8997345960908c87fdfc829cf553f0ec147a92c8de2fee2e98dd8de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_c0aace41749e8be4aae35fc0871418d8f9e15bfbda294a1b524288f073ad1cba = $this->env->getExtension("native_profiler");
        $__internal_c0aace41749e8be4aae35fc0871418d8f9e15bfbda294a1b524288f073ad1cba->enter($__internal_c0aace41749e8be4aae35fc0871418d8f9e15bfbda294a1b524288f073ad1cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0aace41749e8be4aae35fc0871418d8f9e15bfbda294a1b524288f073ad1cba->leave($__internal_c0aace41749e8be4aae35fc0871418d8f9e15bfbda294a1b524288f073ad1cba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95eda17c2cf8402d3fab86f1c82b7a775e62eb58da5b1c3be5480d67d2b582ce = $this->env->getExtension("native_profiler");
        $__internal_95eda17c2cf8402d3fab86f1c82b7a775e62eb58da5b1c3be5480d67d2b582ce->enter($__internal_95eda17c2cf8402d3fab86f1c82b7a775e62eb58da5b1c3be5480d67d2b582ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_95eda17c2cf8402d3fab86f1c82b7a775e62eb58da5b1c3be5480d67d2b582ce->leave($__internal_95eda17c2cf8402d3fab86f1c82b7a775e62eb58da5b1c3be5480d67d2b582ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
