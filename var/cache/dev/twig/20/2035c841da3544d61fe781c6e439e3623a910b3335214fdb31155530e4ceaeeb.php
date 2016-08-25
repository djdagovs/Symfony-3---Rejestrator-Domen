<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b4af0ecc7b6915462c490eec938b1155eaf310084a3761e38c72c919b0ab809d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f53c907cbdd8664ecf619765b65853e83bb6d3b22ee3fc3be53073862acdf10 = $this->env->getExtension("native_profiler");
        $__internal_0f53c907cbdd8664ecf619765b65853e83bb6d3b22ee3fc3be53073862acdf10->enter($__internal_0f53c907cbdd8664ecf619765b65853e83bb6d3b22ee3fc3be53073862acdf10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f53c907cbdd8664ecf619765b65853e83bb6d3b22ee3fc3be53073862acdf10->leave($__internal_0f53c907cbdd8664ecf619765b65853e83bb6d3b22ee3fc3be53073862acdf10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_54b682d9ffa69e8ee9e7a14f5d011ec641ef73d134759f7787208ec2365c47a1 = $this->env->getExtension("native_profiler");
        $__internal_54b682d9ffa69e8ee9e7a14f5d011ec641ef73d134759f7787208ec2365c47a1->enter($__internal_54b682d9ffa69e8ee9e7a14f5d011ec641ef73d134759f7787208ec2365c47a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_54b682d9ffa69e8ee9e7a14f5d011ec641ef73d134759f7787208ec2365c47a1->leave($__internal_54b682d9ffa69e8ee9e7a14f5d011ec641ef73d134759f7787208ec2365c47a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bee139b0e823adfdf77dc0d3e5c5163cac85501c28afd6d0b7465132f19b82a1 = $this->env->getExtension("native_profiler");
        $__internal_bee139b0e823adfdf77dc0d3e5c5163cac85501c28afd6d0b7465132f19b82a1->enter($__internal_bee139b0e823adfdf77dc0d3e5c5163cac85501c28afd6d0b7465132f19b82a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bee139b0e823adfdf77dc0d3e5c5163cac85501c28afd6d0b7465132f19b82a1->leave($__internal_bee139b0e823adfdf77dc0d3e5c5163cac85501c28afd6d0b7465132f19b82a1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab3496fc9a6e9027ab500b4bfeafe9989497e11ff783e6d9dfa069064e879eba = $this->env->getExtension("native_profiler");
        $__internal_ab3496fc9a6e9027ab500b4bfeafe9989497e11ff783e6d9dfa069064e879eba->enter($__internal_ab3496fc9a6e9027ab500b4bfeafe9989497e11ff783e6d9dfa069064e879eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ab3496fc9a6e9027ab500b4bfeafe9989497e11ff783e6d9dfa069064e879eba->leave($__internal_ab3496fc9a6e9027ab500b4bfeafe9989497e11ff783e6d9dfa069064e879eba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
