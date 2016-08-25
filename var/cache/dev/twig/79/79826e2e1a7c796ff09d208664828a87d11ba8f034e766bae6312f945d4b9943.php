<?php

/* main/edytuj/serwer.twig */
class __TwigTemplate_04d8e52e8a5225884b23818fa3598c4d70bd5c95210775e05676a3714f373c5e extends Twig_Template
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
        $__internal_696dd11238a482caa1b258b4ea4acda9c1f23526f9cf234b10d35e547f498f2a = $this->env->getExtension("native_profiler");
        $__internal_696dd11238a482caa1b258b4ea4acda9c1f23526f9cf234b10d35e547f498f2a->enter($__internal_696dd11238a482caa1b258b4ea4acda9c1f23526f9cf234b10d35e547f498f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/edytuj/serwer.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_696dd11238a482caa1b258b4ea4acda9c1f23526f9cf234b10d35e547f498f2a->leave($__internal_696dd11238a482caa1b258b4ea4acda9c1f23526f9cf234b10d35e547f498f2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9da26468fe0da06dc72b6264bde473ee78bd46cd19c5d6e306a334690997743 = $this->env->getExtension("native_profiler");
        $__internal_f9da26468fe0da06dc72b6264bde473ee78bd46cd19c5d6e306a334690997743->enter($__internal_f9da26468fe0da06dc72b6264bde473ee78bd46cd19c5d6e306a334690997743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Edytuj domene   <a href=\"/serwery\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_serwer"]) ? $context["form_edit_serwer"] : $this->getContext($context, "form_edit_serwer")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_edit_serwer"]) ? $context["form_edit_serwer"] : $this->getContext($context, "form_edit_serwer")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_serwer"]) ? $context["form_edit_serwer"] : $this->getContext($context, "form_edit_serwer")), 'form_end');
        echo "


";
        
        $__internal_f9da26468fe0da06dc72b6264bde473ee78bd46cd19c5d6e306a334690997743->leave($__internal_f9da26468fe0da06dc72b6264bde473ee78bd46cd19c5d6e306a334690997743_prof);

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
        return array (  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
