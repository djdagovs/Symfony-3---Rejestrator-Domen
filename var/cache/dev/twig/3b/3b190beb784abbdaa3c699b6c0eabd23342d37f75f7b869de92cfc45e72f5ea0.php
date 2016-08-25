<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b56317ea7bb3e0ac86a1746a8c649ba3df43c249528c4be490505ef8f21e596d extends Twig_Template
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
        $__internal_012abdb365816a6d9d28a3a7b1efb9a1855a7cfbb1c2fe45e32556a49de39f13 = $this->env->getExtension("native_profiler");
        $__internal_012abdb365816a6d9d28a3a7b1efb9a1855a7cfbb1c2fe45e32556a49de39f13->enter($__internal_012abdb365816a6d9d28a3a7b1efb9a1855a7cfbb1c2fe45e32556a49de39f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_012abdb365816a6d9d28a3a7b1efb9a1855a7cfbb1c2fe45e32556a49de39f13->leave($__internal_012abdb365816a6d9d28a3a7b1efb9a1855a7cfbb1c2fe45e32556a49de39f13_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
