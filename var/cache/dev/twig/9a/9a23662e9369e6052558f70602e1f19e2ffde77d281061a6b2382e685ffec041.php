<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_c8107f1ce8894e3d696159b1fc03bbd1d17da1c9273b08d271bf9841cffc299d extends Twig_Template
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
        $__internal_60c088fb9127e54bfde2ab1acacfe7ec20f1d61b7f0c5f3b034a0ab83a80a7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c088fb9127e54bfde2ab1acacfe7ec20f1d61b7f0c5f3b034a0ab83a80a7c9->enter($__internal_60c088fb9127e54bfde2ab1acacfe7ec20f1d61b7f0c5f3b034a0ab83a80a7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_60c088fb9127e54bfde2ab1acacfe7ec20f1d61b7f0c5f3b034a0ab83a80a7c9->leave($__internal_60c088fb9127e54bfde2ab1acacfe7ec20f1d61b7f0c5f3b034a0ab83a80a7c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
