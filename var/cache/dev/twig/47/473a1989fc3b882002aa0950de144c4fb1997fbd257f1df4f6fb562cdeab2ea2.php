<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_a001761f09692ee70e7c629e040235d98b3502fdcaf3cc5f7840c85d14a4059d extends Twig_Template
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
        $__internal_94230d29ab1b516a75290166b07e426721f04713ec89670b3de6dd9f78287b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94230d29ab1b516a75290166b07e426721f04713ec89670b3de6dd9f78287b80->enter($__internal_94230d29ab1b516a75290166b07e426721f04713ec89670b3de6dd9f78287b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_9682f262f4d0ebcf3b306463d380296a674f5a6a564de3aadae8bb2b2c291be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9682f262f4d0ebcf3b306463d380296a674f5a6a564de3aadae8bb2b2c291be7->enter($__internal_9682f262f4d0ebcf3b306463d380296a674f5a6a564de3aadae8bb2b2c291be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_94230d29ab1b516a75290166b07e426721f04713ec89670b3de6dd9f78287b80->leave($__internal_94230d29ab1b516a75290166b07e426721f04713ec89670b3de6dd9f78287b80_prof);

        
        $__internal_9682f262f4d0ebcf3b306463d380296a674f5a6a564de3aadae8bb2b2c291be7->leave($__internal_9682f262f4d0ebcf3b306463d380296a674f5a6a564de3aadae8bb2b2c291be7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}