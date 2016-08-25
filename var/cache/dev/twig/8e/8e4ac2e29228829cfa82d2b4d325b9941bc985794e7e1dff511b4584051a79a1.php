<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_26874c2f7a0f70d3c401e172dc807bb6c54fc7e46143fdea0420f76943f041f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 2);
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
        $__internal_ec485022ce4fba2dcfc6df5e8a7c18e772ca7ca60bb7684112027e76b785e382 = $this->env->getExtension("native_profiler");
        $__internal_ec485022ce4fba2dcfc6df5e8a7c18e772ca7ca60bb7684112027e76b785e382->enter($__internal_ec485022ce4fba2dcfc6df5e8a7c18e772ca7ca60bb7684112027e76b785e382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec485022ce4fba2dcfc6df5e8a7c18e772ca7ca60bb7684112027e76b785e382->leave($__internal_ec485022ce4fba2dcfc6df5e8a7c18e772ca7ca60bb7684112027e76b785e382_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff725dccf8127e6cf950dcda3d71458e12cb1050bc066a5859d80248ec3e94e8 = $this->env->getExtension("native_profiler");
        $__internal_ff725dccf8127e6cf950dcda3d71458e12cb1050bc066a5859d80248ec3e94e8->enter($__internal_ff725dccf8127e6cf950dcda3d71458e12cb1050bc066a5859d80248ec3e94e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Page not found</h1>

    ";
        // line 7
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "        ";
            // line 9
            echo "    ";
        }
        // line 10
        echo "
    <p>
        The requested page couldn't be located. Checkout for any URL
        misspelling or <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">return to the homepage</a>.
    </p>
";
        
        $__internal_ff725dccf8127e6cf950dcda3d71458e12cb1050bc066a5859d80248ec3e94e8->leave($__internal_ff725dccf8127e6cf950dcda3d71458e12cb1050bc066a5859d80248ec3e94e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  51 => 10,  48 => 9,  46 => 8,  44 => 7,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/TwigBundle/views/Exception/error404.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Page not found</h1>*/
/* */
/*     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*         {# ... #}*/
/*     {% endif %}*/
/* */
/*     <p>*/
/*         The requested page couldn't be located. Checkout for any URL*/
/*         misspelling or <a href="{{ path('homepage') }}">return to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
