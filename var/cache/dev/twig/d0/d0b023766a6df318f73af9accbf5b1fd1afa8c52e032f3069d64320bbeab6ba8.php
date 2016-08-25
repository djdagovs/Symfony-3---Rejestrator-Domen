<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_498019102595d8b67c13b9c988e1aa67a32a95811bfa468be5f7864899212708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74e7d63fa813c150efe90ed424990604bae39d7942bc11f60958feff6a264401 = $this->env->getExtension("native_profiler");
        $__internal_74e7d63fa813c150efe90ed424990604bae39d7942bc11f60958feff6a264401->enter($__internal_74e7d63fa813c150efe90ed424990604bae39d7942bc11f60958feff6a264401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_74e7d63fa813c150efe90ed424990604bae39d7942bc11f60958feff6a264401->leave($__internal_74e7d63fa813c150efe90ed424990604bae39d7942bc11f60958feff6a264401_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa484a071d04ba90fe8f893d7590d64881ee446c1823e9738dc110d953197ce2 = $this->env->getExtension("native_profiler");
        $__internal_fa484a071d04ba90fe8f893d7590d64881ee446c1823e9738dc110d953197ce2->enter($__internal_fa484a071d04ba90fe8f893d7590d64881ee446c1823e9738dc110d953197ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fa484a071d04ba90fe8f893d7590d64881ee446c1823e9738dc110d953197ce2->leave($__internal_fa484a071d04ba90fe8f893d7590d64881ee446c1823e9738dc110d953197ce2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
