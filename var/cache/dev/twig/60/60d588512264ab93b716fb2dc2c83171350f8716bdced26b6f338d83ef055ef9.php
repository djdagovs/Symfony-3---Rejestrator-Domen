<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c78356ab5cf74b26b22d1c63e99eb81ed7d60ba07fe03df4974189249eeef020 extends Twig_Template
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
        $__internal_b9fa1dc4f59d2e97620be4ebd00395897a733fcaa81edf0548b25d889b24611f = $this->env->getExtension("native_profiler");
        $__internal_b9fa1dc4f59d2e97620be4ebd00395897a733fcaa81edf0548b25d889b24611f->enter($__internal_b9fa1dc4f59d2e97620be4ebd00395897a733fcaa81edf0548b25d889b24611f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b9fa1dc4f59d2e97620be4ebd00395897a733fcaa81edf0548b25d889b24611f->leave($__internal_b9fa1dc4f59d2e97620be4ebd00395897a733fcaa81edf0548b25d889b24611f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
