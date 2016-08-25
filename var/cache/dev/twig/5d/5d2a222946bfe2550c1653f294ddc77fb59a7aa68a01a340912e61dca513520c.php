<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_76b0397a2e5eb8150989bbab9228f7f7c64a78952ab8ee4e15b7f8a91b5aed00 extends Twig_Template
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
        $__internal_05a415496e904045ea16a2ea76d760c1d6952a8bc1c1090e0ebd1f6c3df1ee59 = $this->env->getExtension("native_profiler");
        $__internal_05a415496e904045ea16a2ea76d760c1d6952a8bc1c1090e0ebd1f6c3df1ee59->enter($__internal_05a415496e904045ea16a2ea76d760c1d6952a8bc1c1090e0ebd1f6c3df1ee59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_05a415496e904045ea16a2ea76d760c1d6952a8bc1c1090e0ebd1f6c3df1ee59->leave($__internal_05a415496e904045ea16a2ea76d760c1d6952a8bc1c1090e0ebd1f6c3df1ee59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
