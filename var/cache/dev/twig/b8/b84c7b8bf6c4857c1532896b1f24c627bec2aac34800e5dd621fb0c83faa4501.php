<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_a699c340dbe5199c952143f0c61b5732647c329551cb16f055399bf964f6c87c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e146655514abc5283c98a81b40fca2425895b9692e8614cd1667e4a71c06ab6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e146655514abc5283c98a81b40fca2425895b9692e8614cd1667e4a71c06ab6c->enter($__internal_e146655514abc5283c98a81b40fca2425895b9692e8614cd1667e4a71c06ab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $__internal_5aedc6e95e77613e6309dd877f5a1bdc98fbbb14a51a27ae162b050d84a96ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aedc6e95e77613e6309dd877f5a1bdc98fbbb14a51a27ae162b050d84a96ea6->enter($__internal_5aedc6e95e77613e6309dd877f5a1bdc98fbbb14a51a27ae162b050d84a96ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e146655514abc5283c98a81b40fca2425895b9692e8614cd1667e4a71c06ab6c->leave($__internal_e146655514abc5283c98a81b40fca2425895b9692e8614cd1667e4a71c06ab6c_prof);

        
        $__internal_5aedc6e95e77613e6309dd877f5a1bdc98fbbb14a51a27ae162b050d84a96ea6->leave($__internal_5aedc6e95e77613e6309dd877f5a1bdc98fbbb14a51a27ae162b050d84a96ea6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
