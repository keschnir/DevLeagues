<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e5edfdcc25715187e52e84003df981ecde8aed43bc6dcbc94cbb7aa9fc36a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd272b1a3c46d1f5ef35fee1d93565fa9ca2c65ce4fee5bb324dacb5f4cbaab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd272b1a3c46d1f5ef35fee1d93565fa9ca2c65ce4fee5bb324dacb5f4cbaab3->enter($__internal_bd272b1a3c46d1f5ef35fee1d93565fa9ca2c65ce4fee5bb324dacb5f4cbaab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd272b1a3c46d1f5ef35fee1d93565fa9ca2c65ce4fee5bb324dacb5f4cbaab3->leave($__internal_bd272b1a3c46d1f5ef35fee1d93565fa9ca2c65ce4fee5bb324dacb5f4cbaab3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1b9ce120843b85c9e2fefd5c94ebfc2d3a574f3d941f8b435a60dddbf707e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b9ce120843b85c9e2fefd5c94ebfc2d3a574f3d941f8b435a60dddbf707e74->enter($__internal_c1b9ce120843b85c9e2fefd5c94ebfc2d3a574f3d941f8b435a60dddbf707e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1b9ce120843b85c9e2fefd5c94ebfc2d3a574f3d941f8b435a60dddbf707e74->leave($__internal_c1b9ce120843b85c9e2fefd5c94ebfc2d3a574f3d941f8b435a60dddbf707e74_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c399ddd8b661f4235fa7bdbea65b948f6dc530c70a03cb9b0a03a5925df6fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c399ddd8b661f4235fa7bdbea65b948f6dc530c70a03cb9b0a03a5925df6fbb->enter($__internal_8c399ddd8b661f4235fa7bdbea65b948f6dc530c70a03cb9b0a03a5925df6fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c399ddd8b661f4235fa7bdbea65b948f6dc530c70a03cb9b0a03a5925df6fbb->leave($__internal_8c399ddd8b661f4235fa7bdbea65b948f6dc530c70a03cb9b0a03a5925df6fbb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a87b44b7e1f7f8a6b36bcf4b0c05d2e166047c4ed852006993f0074ee736d803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87b44b7e1f7f8a6b36bcf4b0c05d2e166047c4ed852006993f0074ee736d803->enter($__internal_a87b44b7e1f7f8a6b36bcf4b0c05d2e166047c4ed852006993f0074ee736d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a87b44b7e1f7f8a6b36bcf4b0c05d2e166047c4ed852006993f0074ee736d803->leave($__internal_a87b44b7e1f7f8a6b36bcf4b0c05d2e166047c4ed852006993f0074ee736d803_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
