<?php

/* main/edytuj/serwer.twig */
class __TwigTemplate_77ccf34b1680a03df5c77a46b7519741427b1baf2cda58f3e384a63dd2083f2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/edytuj/serwer.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<h2>Edytuj domene   <a href=\"/serwery\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_serwer"]) ? $context["form_edit_serwer"] : null), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_edit_serwer"]) ? $context["form_edit_serwer"] : null), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_serwer"]) ? $context["form_edit_serwer"] : null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "main/edytuj/serwer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h2>Edytuj domene   <a href="/serwery"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* */
/* {{form_start(form_edit_serwer)}}*/
/* {{form_widget(form_edit_serwer)}}*/
/* {{form_end(form_edit_serwer)}}*/
/* */
/* */
/* {% endblock %}*/
