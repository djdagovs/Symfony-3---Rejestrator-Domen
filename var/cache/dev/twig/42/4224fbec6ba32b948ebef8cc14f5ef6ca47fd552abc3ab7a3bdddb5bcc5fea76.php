<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_66be56d63907fbd6c07740b1237d5dc599511dc87793fb00906af10d62b324f0 extends Twig_Template
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
        $__internal_815f1f9108a13db850f745184b53791aff12b9d2dab4a32b65bb6a9efde4fa1a = $this->env->getExtension("native_profiler");
        $__internal_815f1f9108a13db850f745184b53791aff12b9d2dab4a32b65bb6a9efde4fa1a->enter($__internal_815f1f9108a13db850f745184b53791aff12b9d2dab4a32b65bb6a9efde4fa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_815f1f9108a13db850f745184b53791aff12b9d2dab4a32b65bb6a9efde4fa1a->leave($__internal_815f1f9108a13db850f745184b53791aff12b9d2dab4a32b65bb6a9efde4fa1a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
