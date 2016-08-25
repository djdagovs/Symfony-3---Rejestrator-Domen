<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_a957b2ccd5df9764c352336a3988d074a0ec9d4a89b932773fdc1b3505487f2a extends Twig_Template
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
        $__internal_b9107f65833d15b0866dac958322b928438ce5b5444149558c3d69973e336b7c = $this->env->getExtension("native_profiler");
        $__internal_b9107f65833d15b0866dac958322b928438ce5b5444149558c3d69973e336b7c->enter($__internal_b9107f65833d15b0866dac958322b928438ce5b5444149558c3d69973e336b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_b9107f65833d15b0866dac958322b928438ce5b5444149558c3d69973e336b7c->leave($__internal_b9107f65833d15b0866dac958322b928438ce5b5444149558c3d69973e336b7c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */
