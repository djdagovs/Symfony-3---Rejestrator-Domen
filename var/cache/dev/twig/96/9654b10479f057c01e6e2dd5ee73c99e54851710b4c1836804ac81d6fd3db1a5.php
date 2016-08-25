<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_824399aa0a17242b3edf3fa579e1dd3cc339f4ca2a3f1c3a6a513381dbabf957 extends Twig_Template
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
        $__internal_3b1ead85975d485d39e5b749297824f376b9b29dfacbaf48317623a28502d09e = $this->env->getExtension("native_profiler");
        $__internal_3b1ead85975d485d39e5b749297824f376b9b29dfacbaf48317623a28502d09e->enter($__internal_3b1ead85975d485d39e5b749297824f376b9b29dfacbaf48317623a28502d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_3b1ead85975d485d39e5b749297824f376b9b29dfacbaf48317623a28502d09e->leave($__internal_3b1ead85975d485d39e5b749297824f376b9b29dfacbaf48317623a28502d09e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
