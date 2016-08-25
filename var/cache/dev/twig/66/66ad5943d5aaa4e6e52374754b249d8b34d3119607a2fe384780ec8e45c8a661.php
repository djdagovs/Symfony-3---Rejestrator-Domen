<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c80d0a2ddc6e6a2bd74d55ad3d9cd27b52f0d97de80642d9e9ae7e7ffb85db13 extends Twig_Template
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
        $__internal_bb27e46a60c78ee52765911c91f0a3297f6aa8a1eb500eaa9ea05f55ee0ddc98 = $this->env->getExtension("native_profiler");
        $__internal_bb27e46a60c78ee52765911c91f0a3297f6aa8a1eb500eaa9ea05f55ee0ddc98->enter($__internal_bb27e46a60c78ee52765911c91f0a3297f6aa8a1eb500eaa9ea05f55ee0ddc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_bb27e46a60c78ee52765911c91f0a3297f6aa8a1eb500eaa9ea05f55ee0ddc98->leave($__internal_bb27e46a60c78ee52765911c91f0a3297f6aa8a1eb500eaa9ea05f55ee0ddc98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
