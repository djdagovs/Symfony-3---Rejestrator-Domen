<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e4de18563f8584c6c1e412fabcc412162ac43f84091a22f2ec8590f078d3c337 extends Twig_Template
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
        $__internal_c32aa86f3951b1ab241017417ce57a68bf5b09eb4102d947df81be4c187c67d8 = $this->env->getExtension("native_profiler");
        $__internal_c32aa86f3951b1ab241017417ce57a68bf5b09eb4102d947df81be4c187c67d8->enter($__internal_c32aa86f3951b1ab241017417ce57a68bf5b09eb4102d947df81be4c187c67d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c32aa86f3951b1ab241017417ce57a68bf5b09eb4102d947df81be4c187c67d8->leave($__internal_c32aa86f3951b1ab241017417ce57a68bf5b09eb4102d947df81be4c187c67d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
