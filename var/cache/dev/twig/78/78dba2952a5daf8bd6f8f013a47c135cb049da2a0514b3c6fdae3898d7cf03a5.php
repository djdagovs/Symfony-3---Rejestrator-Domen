<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_3c634afbdf953054d445a98d64763af2c714f22c64bf7e38cb1cd5c96069b721 extends Twig_Template
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
        $__internal_40fa2c35c9c5eff4e531415997293995d54b6a4a0176db7b8e1dc81b7ea43fe0 = $this->env->getExtension("native_profiler");
        $__internal_40fa2c35c9c5eff4e531415997293995d54b6a4a0176db7b8e1dc81b7ea43fe0->enter($__internal_40fa2c35c9c5eff4e531415997293995d54b6a4a0176db7b8e1dc81b7ea43fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_40fa2c35c9c5eff4e531415997293995d54b6a4a0176db7b8e1dc81b7ea43fe0->leave($__internal_40fa2c35c9c5eff4e531415997293995d54b6a4a0176db7b8e1dc81b7ea43fe0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
