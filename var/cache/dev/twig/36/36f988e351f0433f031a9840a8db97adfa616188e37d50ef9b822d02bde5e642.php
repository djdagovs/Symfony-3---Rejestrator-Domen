<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7a0156bc8e5cc9af7dbefa5eed201e880f9bcd161761a3bc7e54dd5a28c32cad extends Twig_Template
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
        $__internal_3048574379b6ee5363a1589eef1b26f3d5f0616629c424620c859df15f8061be = $this->env->getExtension("native_profiler");
        $__internal_3048574379b6ee5363a1589eef1b26f3d5f0616629c424620c859df15f8061be->enter($__internal_3048574379b6ee5363a1589eef1b26f3d5f0616629c424620c859df15f8061be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3048574379b6ee5363a1589eef1b26f3d5f0616629c424620c859df15f8061be->leave($__internal_3048574379b6ee5363a1589eef1b26f3d5f0616629c424620c859df15f8061be_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
