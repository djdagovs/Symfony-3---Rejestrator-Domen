<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_33c63a1c97529756a3acbdab8f6c7a52555270a09fda252b1ec1bec0e7bd48cf extends Twig_Template
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
        $__internal_0df70cbba3d049fb028ec352c86626ff48d11a2e87ee1de67c82ba2392ac1ab8 = $this->env->getExtension("native_profiler");
        $__internal_0df70cbba3d049fb028ec352c86626ff48d11a2e87ee1de67c82ba2392ac1ab8->enter($__internal_0df70cbba3d049fb028ec352c86626ff48d11a2e87ee1de67c82ba2392ac1ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_0df70cbba3d049fb028ec352c86626ff48d11a2e87ee1de67c82ba2392ac1ab8->leave($__internal_0df70cbba3d049fb028ec352c86626ff48d11a2e87ee1de67c82ba2392ac1ab8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
