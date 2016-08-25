<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_92a14350421464b888c156f76863507dee5112dfc592f630ce122906d0b17f89 extends Twig_Template
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
        $__internal_a9e76744813c67ee5e71d0c5862fa55a4d93c701159b362b734249a3df434b0e = $this->env->getExtension("native_profiler");
        $__internal_a9e76744813c67ee5e71d0c5862fa55a4d93c701159b362b734249a3df434b0e->enter($__internal_a9e76744813c67ee5e71d0c5862fa55a4d93c701159b362b734249a3df434b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a9e76744813c67ee5e71d0c5862fa55a4d93c701159b362b734249a3df434b0e->leave($__internal_a9e76744813c67ee5e71d0c5862fa55a4d93c701159b362b734249a3df434b0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
