<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2454c41c90c1c2b98fe6489e450f260e6fd874ab1763a7631d0b171e306e1fe6 extends Twig_Template
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
        $__internal_c310f5dd74aca8e7e2d24ce87506a8b79821addd43ffbc576d4bd470eb74a1d1 = $this->env->getExtension("native_profiler");
        $__internal_c310f5dd74aca8e7e2d24ce87506a8b79821addd43ffbc576d4bd470eb74a1d1->enter($__internal_c310f5dd74aca8e7e2d24ce87506a8b79821addd43ffbc576d4bd470eb74a1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c310f5dd74aca8e7e2d24ce87506a8b79821addd43ffbc576d4bd470eb74a1d1->leave($__internal_c310f5dd74aca8e7e2d24ce87506a8b79821addd43ffbc576d4bd470eb74a1d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
