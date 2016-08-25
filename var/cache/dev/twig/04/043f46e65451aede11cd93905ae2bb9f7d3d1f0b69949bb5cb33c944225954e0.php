<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7148734cab9bb4c8a32022bdd1209be2deaa6ace529007ef579d7cb5d8384a9c extends Twig_Template
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
        $__internal_ec5046d32beee4db4914a752c3f6058f640ddaa4e910c0de55584d0a3bf63d7f = $this->env->getExtension("native_profiler");
        $__internal_ec5046d32beee4db4914a752c3f6058f640ddaa4e910c0de55584d0a3bf63d7f->enter($__internal_ec5046d32beee4db4914a752c3f6058f640ddaa4e910c0de55584d0a3bf63d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ec5046d32beee4db4914a752c3f6058f640ddaa4e910c0de55584d0a3bf63d7f->leave($__internal_ec5046d32beee4db4914a752c3f6058f640ddaa4e910c0de55584d0a3bf63d7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
