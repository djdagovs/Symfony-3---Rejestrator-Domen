<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9380379794e6b5c9f54e56de4e7fc5a8f4413e5b401e1b4672e25cfb1033d77a extends Twig_Template
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
        $__internal_c5878edc678c487390ee31db894766c3235ce9e0f6821e7334c055a1c7389d1b = $this->env->getExtension("native_profiler");
        $__internal_c5878edc678c487390ee31db894766c3235ce9e0f6821e7334c055a1c7389d1b->enter($__internal_c5878edc678c487390ee31db894766c3235ce9e0f6821e7334c055a1c7389d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c5878edc678c487390ee31db894766c3235ce9e0f6821e7334c055a1c7389d1b->leave($__internal_c5878edc678c487390ee31db894766c3235ce9e0f6821e7334c055a1c7389d1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
