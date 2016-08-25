<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_8bcd651e82d12331e7bf794b66f0577a2c8a2bd1cd4aa3dfe7fef22126d18d26 extends Twig_Template
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
        $__internal_bf4c6da6d3983db180492f29fcbb051f9d1c4b740924ddaf9f50983e03bd1a54 = $this->env->getExtension("native_profiler");
        $__internal_bf4c6da6d3983db180492f29fcbb051f9d1c4b740924ddaf9f50983e03bd1a54->enter($__internal_bf4c6da6d3983db180492f29fcbb051f9d1c4b740924ddaf9f50983e03bd1a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_bf4c6da6d3983db180492f29fcbb051f9d1c4b740924ddaf9f50983e03bd1a54->leave($__internal_bf4c6da6d3983db180492f29fcbb051f9d1c4b740924ddaf9f50983e03bd1a54_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3fca407f56e5b93c3f348df477036a917d882b8bbdb7d71a3deb69a01915b1e8 = $this->env->getExtension("native_profiler");
        $__internal_3fca407f56e5b93c3f348df477036a917d882b8bbdb7d71a3deb69a01915b1e8->enter($__internal_3fca407f56e5b93c3f348df477036a917d882b8bbdb7d71a3deb69a01915b1e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_3fca407f56e5b93c3f348df477036a917d882b8bbdb7d71a3deb69a01915b1e8->leave($__internal_3fca407f56e5b93c3f348df477036a917d882b8bbdb7d71a3deb69a01915b1e8_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cac366945500d150758547ebf500586a6ea25cea110ec9a62d1941172ad37f70 = $this->env->getExtension("native_profiler");
        $__internal_cac366945500d150758547ebf500586a6ea25cea110ec9a62d1941172ad37f70->enter($__internal_cac366945500d150758547ebf500586a6ea25cea110ec9a62d1941172ad37f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cac366945500d150758547ebf500586a6ea25cea110ec9a62d1941172ad37f70->leave($__internal_cac366945500d150758547ebf500586a6ea25cea110ec9a62d1941172ad37f70_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d93b1374165d8b0af67e6fa78ec9f4e67e5d2f78de675d7ece13d10210a672c9 = $this->env->getExtension("native_profiler");
        $__internal_d93b1374165d8b0af67e6fa78ec9f4e67e5d2f78de675d7ece13d10210a672c9->enter($__internal_d93b1374165d8b0af67e6fa78ec9f4e67e5d2f78de675d7ece13d10210a672c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d93b1374165d8b0af67e6fa78ec9f4e67e5d2f78de675d7ece13d10210a672c9->leave($__internal_d93b1374165d8b0af67e6fa78ec9f4e67e5d2f78de675d7ece13d10210a672c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
