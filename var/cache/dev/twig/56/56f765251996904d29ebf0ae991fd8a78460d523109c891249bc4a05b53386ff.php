<?php

/* DevLeaguesBundle:Event:new.html.twig */
class __TwigTemplate_6d5299638a79b2b3548e13cd8b2ca5c3ffaf2f59c1bdaebb3bbfa2a72e83f6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Event:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57af02a4d1f7e203752a16378cbbb61182338027bc64ef815b8e37b721a72e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57af02a4d1f7e203752a16378cbbb61182338027bc64ef815b8e37b721a72e0e->enter($__internal_57af02a4d1f7e203752a16378cbbb61182338027bc64ef815b8e37b721a72e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57af02a4d1f7e203752a16378cbbb61182338027bc64ef815b8e37b721a72e0e->leave($__internal_57af02a4d1f7e203752a16378cbbb61182338027bc64ef815b8e37b721a72e0e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_80a89ab95210bdc18d89b815189bb05df6eb30b3796029b5707ebf6eda28a8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a89ab95210bdc18d89b815189bb05df6eb30b3796029b5707ebf6eda28a8d9->enter($__internal_80a89ab95210bdc18d89b815189bb05df6eb30b3796029b5707ebf6eda28a8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_80a89ab95210bdc18d89b815189bb05df6eb30b3796029b5707ebf6eda28a8d9->leave($__internal_80a89ab95210bdc18d89b815189bb05df6eb30b3796029b5707ebf6eda28a8d9_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "DevLeaguesBundle:Event:new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/new.html.twig");
    }
}
