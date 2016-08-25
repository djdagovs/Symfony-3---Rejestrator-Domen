<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_5fefee50902501653d2fdab8e43eab1352aa725ea7bf5a35b9c52a7631dae682 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "\t<p style=\"padding:20px;font-size:16px;\"><b style=\"font-size:24px;\">Gratulujemy.</b>Twoje konto zostało utworzone.</p>
\t<div>
";
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
        return array (  31 => 5,  28 => 4,  11 => 1,);
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
