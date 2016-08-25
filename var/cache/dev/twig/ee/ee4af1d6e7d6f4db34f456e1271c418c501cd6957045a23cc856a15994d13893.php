<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_03ea9237b8fa483c3f20f1f03827b562f568b907c147ee62b0d91e16bb9fe3a8 extends Twig_Template
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
        $__internal_d0809b4b4c607e8acabe1b64cca21f08562178a19c8cf94ef7f3757cf8fe9b2c = $this->env->getExtension("native_profiler");
        $__internal_d0809b4b4c607e8acabe1b64cca21f08562178a19c8cf94ef7f3757cf8fe9b2c->enter($__internal_d0809b4b4c607e8acabe1b64cca21f08562178a19c8cf94ef7f3757cf8fe9b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_d0809b4b4c607e8acabe1b64cca21f08562178a19c8cf94ef7f3757cf8fe9b2c->leave($__internal_d0809b4b4c607e8acabe1b64cca21f08562178a19c8cf94ef7f3757cf8fe9b2c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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
