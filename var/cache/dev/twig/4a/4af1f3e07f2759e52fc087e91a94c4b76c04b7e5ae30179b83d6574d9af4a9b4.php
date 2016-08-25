<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b2c7d6f3a815c583b16f726434efe541cf780fa446a7ca3eb1af2fa6e72f69b0 extends Twig_Template
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
        $__internal_2675cc9cba5daeed50407074c9b7f5c3c37d9e63507f9c99d834893c341b4e28 = $this->env->getExtension("native_profiler");
        $__internal_2675cc9cba5daeed50407074c9b7f5c3c37d9e63507f9c99d834893c341b4e28->enter($__internal_2675cc9cba5daeed50407074c9b7f5c3c37d9e63507f9c99d834893c341b4e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2675cc9cba5daeed50407074c9b7f5c3c37d9e63507f9c99d834893c341b4e28->leave($__internal_2675cc9cba5daeed50407074c9b7f5c3c37d9e63507f9c99d834893c341b4e28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
