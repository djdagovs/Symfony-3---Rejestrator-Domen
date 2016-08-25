<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_8edbfa3f8e29d04fd56243657aaaabbdc29a362f6b00738a52c92e16d9c30487 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b6210ba4c206a4cc89e37deb80781e9607d1ec034d37a0b1471a419784e517f = $this->env->getExtension("native_profiler");
        $__internal_5b6210ba4c206a4cc89e37deb80781e9607d1ec034d37a0b1471a419784e517f->enter($__internal_5b6210ba4c206a4cc89e37deb80781e9607d1ec034d37a0b1471a419784e517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5b6210ba4c206a4cc89e37deb80781e9607d1ec034d37a0b1471a419784e517f->leave($__internal_5b6210ba4c206a4cc89e37deb80781e9607d1ec034d37a0b1471a419784e517f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ value|date(field_options.format) }}*/
/* */
