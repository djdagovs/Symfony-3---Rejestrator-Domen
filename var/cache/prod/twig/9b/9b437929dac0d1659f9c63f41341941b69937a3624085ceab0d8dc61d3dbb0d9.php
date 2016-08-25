<?php

/* main/edytuj/domene.twig */
class __TwigTemplate_63a3e06546818452459fa16028d3b19bb2d04c7c5a661878a77cb301fa817582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/edytuj/domene.twig", 1);
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
<h2>Edytuj domene   <a href=\"/domeny\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_domena"]) ? $context["form_edit_domena"] : null), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_edit_domena"]) ? $context["form_edit_domena"] : null), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_domena"]) ? $context["form_edit_domena"] : null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "main/edytuj/domene.twig";
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
/* <h2>Edytuj domene   <a href="/domeny"><button class="btn btn-success add-button">Wróć</button></a></h2>*/
/* */
/* {{form_start(form_edit_domena)}}*/
/* {{form_widget(form_edit_domena)}}*/
/* {{form_end(form_edit_domena)}}*/
/* */
/* */
/* {% endblock %}*/
