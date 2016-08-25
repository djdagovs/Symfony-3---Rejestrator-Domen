<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_54b70a3f669050f165b79b5db9038b33f3ecfbbc7bd43f06b8f388967e01c282 extends Twig_Template
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
        $__internal_49f98b60a6146046e7f5d64b7e5c7169b04ab14694c7e6e87c988d346e80767d = $this->env->getExtension("native_profiler");
        $__internal_49f98b60a6146046e7f5d64b7e5c7169b04ab14694c7e6e87c988d346e80767d->enter($__internal_49f98b60a6146046e7f5d64b7e5c7169b04ab14694c7e6e87c988d346e80767d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_49f98b60a6146046e7f5d64b7e5c7169b04ab14694c7e6e87c988d346e80767d->leave($__internal_49f98b60a6146046e7f5d64b7e5c7169b04ab14694c7e6e87c988d346e80767d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
