<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0f3a53d63c124787b9d65d99235ec39a26805cbae9b90371c75a3a434d764084 extends Twig_Template
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
        $__internal_8157e0e2953f7156563833a2e0fa18fe471a960dc535b626434bebcf18f0bd87 = $this->env->getExtension("native_profiler");
        $__internal_8157e0e2953f7156563833a2e0fa18fe471a960dc535b626434bebcf18f0bd87->enter($__internal_8157e0e2953f7156563833a2e0fa18fe471a960dc535b626434bebcf18f0bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8157e0e2953f7156563833a2e0fa18fe471a960dc535b626434bebcf18f0bd87->leave($__internal_8157e0e2953f7156563833a2e0fa18fe471a960dc535b626434bebcf18f0bd87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
