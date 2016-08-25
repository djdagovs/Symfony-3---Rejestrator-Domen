<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8554c38a9cfca256174fa7f73c061f58b9c8bf1e3cdf25ce815bd2ad0290e59b extends Twig_Template
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
        $__internal_766529b23b34e1fb6c1fd42a2e7f8fa04a2eebd31c8aaa0f4af2b622fa7676c7 = $this->env->getExtension("native_profiler");
        $__internal_766529b23b34e1fb6c1fd42a2e7f8fa04a2eebd31c8aaa0f4af2b622fa7676c7->enter($__internal_766529b23b34e1fb6c1fd42a2e7f8fa04a2eebd31c8aaa0f4af2b622fa7676c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_766529b23b34e1fb6c1fd42a2e7f8fa04a2eebd31c8aaa0f4af2b622fa7676c7->leave($__internal_766529b23b34e1fb6c1fd42a2e7f8fa04a2eebd31c8aaa0f4af2b622fa7676c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
