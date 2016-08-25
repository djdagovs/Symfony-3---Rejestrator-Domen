<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_73b1fec71f0304c63f4c9bba4dd8a5517d452123c6f0a775bbfa215fcc17bc73 extends Twig_Template
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
        $__internal_80c0a1bca5ee85a41e6b59e9861af4f983f02fe1d6ab7883399aaff8bcc689d8 = $this->env->getExtension("native_profiler");
        $__internal_80c0a1bca5ee85a41e6b59e9861af4f983f02fe1d6ab7883399aaff8bcc689d8->enter($__internal_80c0a1bca5ee85a41e6b59e9861af4f983f02fe1d6ab7883399aaff8bcc689d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_80c0a1bca5ee85a41e6b59e9861af4f983f02fe1d6ab7883399aaff8bcc689d8->leave($__internal_80c0a1bca5ee85a41e6b59e9861af4f983f02fe1d6ab7883399aaff8bcc689d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
