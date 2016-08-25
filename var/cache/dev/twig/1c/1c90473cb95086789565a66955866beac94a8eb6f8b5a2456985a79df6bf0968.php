<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_da7d88555d83c8ea8312660ea6ae93cdbead8967dd039e9035a96802eb532146 extends Twig_Template
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
        $__internal_76d305371b316fad36a7273dd95501f074075288aa01f43c730c8102ac0ee3c8 = $this->env->getExtension("native_profiler");
        $__internal_76d305371b316fad36a7273dd95501f074075288aa01f43c730c8102ac0ee3c8->enter($__internal_76d305371b316fad36a7273dd95501f074075288aa01f43c730c8102ac0ee3c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

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
        
        $__internal_76d305371b316fad36a7273dd95501f074075288aa01f43c730c8102ac0ee3c8->leave($__internal_76d305371b316fad36a7273dd95501f074075288aa01f43c730c8102ac0ee3c8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
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
