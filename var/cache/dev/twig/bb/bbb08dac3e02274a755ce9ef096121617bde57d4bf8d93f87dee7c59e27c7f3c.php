<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d3d1bbed5b95d8c1896b6313ca2892e8621d613917c236764def407bd7cdc324 extends Twig_Template
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
        $__internal_eddb6035a132f7c3878e71a7640f3f8f4383803dca41f93f66f459c5820dc69e = $this->env->getExtension("native_profiler");
        $__internal_eddb6035a132f7c3878e71a7640f3f8f4383803dca41f93f66f459c5820dc69e->enter($__internal_eddb6035a132f7c3878e71a7640f3f8f4383803dca41f93f66f459c5820dc69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_eddb6035a132f7c3878e71a7640f3f8f4383803dca41f93f66f459c5820dc69e->leave($__internal_eddb6035a132f7c3878e71a7640f3f8f4383803dca41f93f66f459c5820dc69e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
