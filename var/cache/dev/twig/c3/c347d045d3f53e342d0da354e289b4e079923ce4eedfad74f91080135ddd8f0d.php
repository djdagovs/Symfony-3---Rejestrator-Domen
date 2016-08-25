<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_c603fc0dc417760d2864c2bee83b74a653bf75ca7cd8e0aa1cd5852b0e966f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_371e24d344a97c6befcb0476ccac109c679d0512a142d7647f39da089b39f3fb = $this->env->getExtension("native_profiler");
        $__internal_371e24d344a97c6befcb0476ccac109c679d0512a142d7647f39da089b39f3fb->enter($__internal_371e24d344a97c6befcb0476ccac109c679d0512a142d7647f39da089b39f3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_371e24d344a97c6befcb0476ccac109c679d0512a142d7647f39da089b39f3fb->leave($__internal_371e24d344a97c6befcb0476ccac109c679d0512a142d7647f39da089b39f3fb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1b7789008c3cbe8bb6725e89a2f4e3aeeee02879e64ed02642ab399c6271f8d4 = $this->env->getExtension("native_profiler");
        $__internal_1b7789008c3cbe8bb6725e89a2f4e3aeeee02879e64ed02642ab399c6271f8d4->enter($__internal_1b7789008c3cbe8bb6725e89a2f4e3aeeee02879e64ed02642ab399c6271f8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_1b7789008c3cbe8bb6725e89a2f4e3aeeee02879e64ed02642ab399c6271f8d4->leave($__internal_1b7789008c3cbe8bb6725e89a2f4e3aeeee02879e64ed02642ab399c6271f8d4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_acfd53f97c9852c05bf96fec35dd0b7302bd5e4ca57e53e76fecb8a18c02d0df = $this->env->getExtension("native_profiler");
        $__internal_acfd53f97c9852c05bf96fec35dd0b7302bd5e4ca57e53e76fecb8a18c02d0df->enter($__internal_acfd53f97c9852c05bf96fec35dd0b7302bd5e4ca57e53e76fecb8a18c02d0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_acfd53f97c9852c05bf96fec35dd0b7302bd5e4ca57e53e76fecb8a18c02d0df->leave($__internal_acfd53f97c9852c05bf96fec35dd0b7302bd5e4ca57e53e76fecb8a18c02d0df_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ad6a0b711fd43bfddfd34d7685371a6a555ec94c3bdb599bdd74b82762e3f4b8 = $this->env->getExtension("native_profiler");
        $__internal_ad6a0b711fd43bfddfd34d7685371a6a555ec94c3bdb599bdd74b82762e3f4b8->enter($__internal_ad6a0b711fd43bfddfd34d7685371a6a555ec94c3bdb599bdd74b82762e3f4b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad6a0b711fd43bfddfd34d7685371a6a555ec94c3bdb599bdd74b82762e3f4b8->leave($__internal_ad6a0b711fd43bfddfd34d7685371a6a555ec94c3bdb599bdd74b82762e3f4b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
