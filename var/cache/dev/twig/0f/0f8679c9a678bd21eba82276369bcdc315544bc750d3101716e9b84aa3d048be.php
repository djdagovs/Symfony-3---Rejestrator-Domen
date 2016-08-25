<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e0ee335d3370f39ed8fef3d8e21adc8ac95b0865d7abd02a361e68104e8e565d extends Twig_Template
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
        $__internal_74ce11e1a5a799efcea36d299ed53675276d4b6c4fb39a033d24623c8ce9f047 = $this->env->getExtension("native_profiler");
        $__internal_74ce11e1a5a799efcea36d299ed53675276d4b6c4fb39a033d24623c8ce9f047->enter($__internal_74ce11e1a5a799efcea36d299ed53675276d4b6c4fb39a033d24623c8ce9f047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_74ce11e1a5a799efcea36d299ed53675276d4b6c4fb39a033d24623c8ce9f047->leave($__internal_74ce11e1a5a799efcea36d299ed53675276d4b6c4fb39a033d24623c8ce9f047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
