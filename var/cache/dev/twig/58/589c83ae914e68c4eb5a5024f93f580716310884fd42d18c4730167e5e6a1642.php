<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_63bfa68e871a328860720d6036f764b1d68e1784185b68be30d5de8d842fc0fd extends Twig_Template
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
        $__internal_3e1bb515ce9ddf1d9f6057801ccbc545a20c302a9fc68e0ae4f1860d191c1e7f = $this->env->getExtension("native_profiler");
        $__internal_3e1bb515ce9ddf1d9f6057801ccbc545a20c302a9fc68e0ae4f1860d191c1e7f->enter($__internal_3e1bb515ce9ddf1d9f6057801ccbc545a20c302a9fc68e0ae4f1860d191c1e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3e1bb515ce9ddf1d9f6057801ccbc545a20c302a9fc68e0ae4f1860d191c1e7f->leave($__internal_3e1bb515ce9ddf1d9f6057801ccbc545a20c302a9fc68e0ae4f1860d191c1e7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
