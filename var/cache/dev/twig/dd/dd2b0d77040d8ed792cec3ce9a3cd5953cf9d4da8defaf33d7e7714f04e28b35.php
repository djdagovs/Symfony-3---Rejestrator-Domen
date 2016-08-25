<?php

/* main/edytuj/domene.twig */
class __TwigTemplate_a48cccc4fb61c278203d22cb0b9a9d3ef0cbd24bce1d369efdcd77b395812e22 extends Twig_Template
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
        $__internal_5334fdc0c8ea7735c61693dedeb5036057e77b3f3ee235b0d66a9ba790398dc8 = $this->env->getExtension("native_profiler");
        $__internal_5334fdc0c8ea7735c61693dedeb5036057e77b3f3ee235b0d66a9ba790398dc8->enter($__internal_5334fdc0c8ea7735c61693dedeb5036057e77b3f3ee235b0d66a9ba790398dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/edytuj/domene.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5334fdc0c8ea7735c61693dedeb5036057e77b3f3ee235b0d66a9ba790398dc8->leave($__internal_5334fdc0c8ea7735c61693dedeb5036057e77b3f3ee235b0d66a9ba790398dc8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ab52632f6691877a2ace784e2b6072ee7b5c02542d9df4f58d18b87f6478f6 = $this->env->getExtension("native_profiler");
        $__internal_71ab52632f6691877a2ace784e2b6072ee7b5c02542d9df4f58d18b87f6478f6->enter($__internal_71ab52632f6691877a2ace784e2b6072ee7b5c02542d9df4f58d18b87f6478f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Edytuj domene   <a href=\"/domeny\"><button class=\"btn btn-success add-button\">Wróć</button></a></h2>

";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_domena"]) ? $context["form_edit_domena"] : $this->getContext($context, "form_edit_domena")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form_edit_domena"]) ? $context["form_edit_domena"] : $this->getContext($context, "form_edit_domena")), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form_edit_domena"]) ? $context["form_edit_domena"] : $this->getContext($context, "form_edit_domena")), 'form_end');
        echo "


";
        
        $__internal_71ab52632f6691877a2ace784e2b6072ee7b5c02542d9df4f58d18b87f6478f6->leave($__internal_71ab52632f6691877a2ace784e2b6072ee7b5c02542d9df4f58d18b87f6478f6_prof);

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
        return array (  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
