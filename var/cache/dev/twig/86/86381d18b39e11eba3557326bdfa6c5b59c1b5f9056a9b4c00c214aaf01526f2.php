<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig */
class __TwigTemplate_d441e1608f49f546516c637c2e3c5010ee45ccebdd2a9f16fdc9932a6455ae40 extends Twig_Template
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
        $__internal_6b23b2699846cd245794ae8aba4153595410bb4cbc15cdbef3c639370fbc445c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b23b2699846cd245794ae8aba4153595410bb4cbc15cdbef3c639370fbc445c->enter($__internal_6b23b2699846cd245794ae8aba4153595410bb4cbc15cdbef3c639370fbc445c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig"));

        $__internal_af7387e3ac33c9595c797b5335aa3f8d8fa430a0b94846b72a8e4abf003b61d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af7387e3ac33c9595c797b5335aa3f8d8fa430a0b94846b72a8e4abf003b61d0->enter($__internal_af7387e3ac33c9595c797b5335aa3f8d8fa430a0b94846b72a8e4abf003b61d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig"));

        // line 11
        echo "<table class=\"table table-bordered\">
    <thead>
        <tr>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())), "children", array()));
        foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
            // line 15
            echo "                ";
            if (($context["field_name"] == "_delete")) {
                // line 16
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action_delete", array(), "SonataAdminBundle"), "html", null, true);
                echo "</th>
                ";
            } else {
                // line 18
                echo "                    <th
                        ";
                // line 19
                if ($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "required", array(), "array")) {
                    // line 20
                    echo "                            class=\"required\"
                        ";
                }
                // line 22
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "attr", array(), "array"), "hidden", array(), "array"))) {
                    // line 23
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 25
                echo "                    >
                        ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "sonata_admin", array(), "array"), "admin", array()), "trans", array(0 => $this->getAttribute($this->getAttribute(                // line 27
$context["nested_field"], "vars", array()), "label", array()), 1 => array(), 2 => $this->getAttribute($this->getAttribute(                // line 29
$context["nested_field"], "vars", array()), "translation_domain", array())), "method"), "html", null, true);
                // line 30
                echo "
                    </th>
                ";
            }
            // line 33
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["nested_group_field_name"] => $context["nested_group_field"]) {
            // line 38
            echo "            <tr>
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["nested_group_field"], "children", array()));
            foreach ($context['_seq'] as $context["field_name"] => $context["nested_field"]) {
                // line 40
                echo "                    <td class=\"
                        sonata-ba-td-";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "
                        control-group
                        ";
                // line 43
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                    echo " error";
                }
                // line 44
                echo "                        \"
                        ";
                // line 45
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array(), "any", false, true), "attr", array(), "array", false, true), "hidden", array(), "array", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "attr", array(), "array"), "hidden", array(), "array"))) {
                    // line 46
                    echo "                            style=\"display:none;\"
                        ";
                }
                // line 48
                echo "                    >
                        ";
                // line 49
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "associationadmin", array(), "any", false, true), "formfielddescriptions", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 50
                    echo "                            ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                    echo "

                            ";
                    // line 52
                    $context["dummy"] = $this->getAttribute($context["nested_group_field"], "setrendered", array());
                    // line 53
                    echo "                        ";
                } else {
                    // line 54
                    echo "                            ";
                    if (($context["field_name"] == "_delete")) {
                        // line 55
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget', array("label_render" => false));
                        echo "
                            ";
                    } else {
                        // line 57
                        echo "                                ";
                        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'widget');
                        echo "
                            ";
                    }
                    // line 59
                    echo "                        ";
                }
                // line 60
                echo "                        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["nested_field"], "vars", array()), "errors", array())) > 0)) {
                    // line 61
                    echo "                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                ";
                    // line 62
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["nested_field"], 'errors');
                    echo "
                            </div>
                        ";
                }
                // line 65
                echo "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['nested_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nested_group_field_name'], $context['nested_group_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </tbody>
</table>
";
        
        $__internal_6b23b2699846cd245794ae8aba4153595410bb4cbc15cdbef3c639370fbc445c->leave($__internal_6b23b2699846cd245794ae8aba4153595410bb4cbc15cdbef3c639370fbc445c_prof);

        
        $__internal_af7387e3ac33c9595c797b5335aa3f8d8fa430a0b94846b72a8e4abf003b61d0->leave($__internal_af7387e3ac33c9595c797b5335aa3f8d8fa430a0b94846b72a8e4abf003b61d0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 69,  169 => 67,  162 => 65,  156 => 62,  153 => 61,  150 => 60,  147 => 59,  141 => 57,  135 => 55,  132 => 54,  129 => 53,  127 => 52,  121 => 50,  119 => 49,  116 => 48,  112 => 46,  110 => 45,  107 => 44,  103 => 43,  96 => 41,  93 => 40,  89 => 39,  86 => 38,  82 => 37,  77 => 34,  71 => 33,  66 => 30,  64 => 29,  63 => 27,  62 => 26,  59 => 25,  55 => 23,  52 => 22,  48 => 20,  46 => 19,  43 => 18,  37 => 16,  34 => 15,  30 => 14,  25 => 11,);
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
<table class=\"table table-bordered\">
    <thead>
        <tr>
            {% for field_name, nested_field in form.children|first.children %}
                {% if field_name == '_delete' %}
                    <th>{{ 'action_delete'|trans({}, 'SonataAdminBundle') }}</th>
                {% else %}
                    <th
                        {% if nested_field.vars['required'] %}
                            class=\"required\"
                        {% endif %}
                        {% if (nested_field.vars['attr']['hidden'] is defined) and (nested_field.vars['attr']['hidden']) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {{ nested_field.vars['sonata_admin'].admin.trans(
                            nested_field.vars.label,
                            {},
                            nested_field.vars.translation_domain
                        ) }}
                    </th>
                {% endif %}
            {% endfor %}
        </tr>
    </thead>
    <tbody class=\"sonata-ba-tbody\">
        {% for nested_group_field_name, nested_group_field in form.children %}
            <tr>
                {% for field_name, nested_field in nested_group_field.children %}
                    <td class=\"
                        sonata-ba-td-{{ id }}-{{ field_name  }}
                        control-group
                        {% if nested_field.vars.errors|length > 0 %} error{% endif %}
                        \"
                        {% if (nested_field.vars['attr']['hidden'] is defined) and (nested_field.vars['attr']['hidden']) %}
                            style=\"display:none;\"
                        {% endif %}
                    >
                        {% if sonata_admin.field_description.associationadmin.formfielddescriptions[field_name] is defined %}
                            {{ form_widget(nested_field) }}

                            {% set dummy = nested_group_field.setrendered %}
                        {% else %}
                            {% if field_name == '_delete' %}
                                {{ form_widget(nested_field, {'label_render': false}) }}
                            {% else %}
                                {{ form_widget(nested_field) }}
                            {% endif %}
                        {% endif %}
                        {% if nested_field.vars.errors|length > 0 %}
                            <div class=\"help-inline sonata-ba-field-error-messages\">
                                {{ form_errors(nested_field) }}
                            </div>
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>
        {% endfor %}
    </tbody>
</table>
", "@SonataDoctrineORMAdmin/CRUD/edit_orm_one_to_many_inline_table.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_to_many_inline_table.html.twig");
    }
}