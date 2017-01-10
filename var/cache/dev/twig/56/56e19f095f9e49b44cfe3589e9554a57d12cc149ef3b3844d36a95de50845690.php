<?php

/* @SonataAdmin/CRUD/batch_confirmation.html.twig */
class __TwigTemplate_bb9f583ba28fdec6b05e223e9c23187123d70ceb5b88eff03fbfc57d6bf5c64e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/batch_confirmation.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61267aedc08988c0a30a10d77653b469750455adbda8d26d69cb9d113854569d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61267aedc08988c0a30a10d77653b469750455adbda8d26d69cb9d113854569d->enter($__internal_61267aedc08988c0a30a10d77653b469750455adbda8d26d69cb9d113854569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/batch_confirmation.html.twig"));

        $__internal_ffd7b8f930ac28b233995439e7f018d965f777982da17adfda15f13aeb9ca0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd7b8f930ac28b233995439e7f018d965f777982da17adfda15f13aeb9ca0dd->enter($__internal_ffd7b8f930ac28b233995439e7f018d965f777982da17adfda15f13aeb9ca0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/batch_confirmation.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61267aedc08988c0a30a10d77653b469750455adbda8d26d69cb9d113854569d->leave($__internal_61267aedc08988c0a30a10d77653b469750455adbda8d26d69cb9d113854569d_prof);

        
        $__internal_ffd7b8f930ac28b233995439e7f018d965f777982da17adfda15f13aeb9ca0dd->leave($__internal_ffd7b8f930ac28b233995439e7f018d965f777982da17adfda15f13aeb9ca0dd_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_5668909439d13cac7c5294b26140ede0b5faf429d3a4f6a0cf62a8c548691673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5668909439d13cac7c5294b26140ede0b5faf429d3a4f6a0cf62a8c548691673->enter($__internal_5668909439d13cac7c5294b26140ede0b5faf429d3a4f6a0cf62a8c548691673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_3ef0759046689e8a10b7b51e3f664777cd2f491753f8153028ae37fff3aa8159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef0759046689e8a10b7b51e3f664777cd2f491753f8153028ae37fff3aa8159->enter($__internal_3ef0759046689e8a10b7b51e3f664777cd2f491753f8153028ae37fff3aa8159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/batch_confirmation.html.twig", 15)->display($context);
        
        $__internal_3ef0759046689e8a10b7b51e3f664777cd2f491753f8153028ae37fff3aa8159->leave($__internal_3ef0759046689e8a10b7b51e3f664777cd2f491753f8153028ae37fff3aa8159_prof);

        
        $__internal_5668909439d13cac7c5294b26140ede0b5faf429d3a4f6a0cf62a8c548691673->leave($__internal_5668909439d13cac7c5294b26140ede0b5faf429d3a4f6a0cf62a8c548691673_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_6d836c53e7ff73d407a8e80a8726cf36ff52ffdea63a03f2b78e3d2238f3b24c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d836c53e7ff73d407a8e80a8726cf36ff52ffdea63a03f2b78e3d2238f3b24c->enter($__internal_6d836c53e7ff73d407a8e80a8726cf36ff52ffdea63a03f2b78e3d2238f3b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_f5b95adaef10cc9d6a389ac38f8c5fbbcad30f04a9180d2d053cb924e326716a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b95adaef10cc9d6a389ac38f8c5fbbcad30f04a9180d2d053cb924e326716a->enter($__internal_f5b95adaef10cc9d6a389ac38f8c5fbbcad30f04a9180d2d053cb924e326716a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_f5b95adaef10cc9d6a389ac38f8c5fbbcad30f04a9180d2d053cb924e326716a->leave($__internal_f5b95adaef10cc9d6a389ac38f8c5fbbcad30f04a9180d2d053cb924e326716a_prof);

        
        $__internal_6d836c53e7ff73d407a8e80a8726cf36ff52ffdea63a03f2b78e3d2238f3b24c->leave($__internal_6d836c53e7ff73d407a8e80a8726cf36ff52ffdea63a03f2b78e3d2238f3b24c_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_83d9b8256c6382e81568a84877972c8323f22bd983e485a52bf3b498fa1f2f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d9b8256c6382e81568a84877972c8323f22bd983e485a52bf3b498fa1f2f1c->enter($__internal_83d9b8256c6382e81568a84877972c8323f22bd983e485a52bf3b498fa1f2f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d63585577b38fabcdf341b62c7c7b48b6255a01c8145352788c9642c4cb54a26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63585577b38fabcdf341b62c7c7b48b6255a01c8145352788c9642c4cb54a26->enter($__internal_d63585577b38fabcdf341b62c7c7b48b6255a01c8145352788c9642c4cb54a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                ";
        // line 24
        if ( !(($context["batch_translation_domain"] ?? $this->getContext($context, "batch_translation_domain")) === false)) {
            // line 25
            echo "                    ";
            $context["action_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["action_label"] ?? $this->getContext($context, "action_label")), array(), ($context["batch_translation_domain"] ?? $this->getContext($context, "batch_translation_domain")));
            // line 26
            echo "                ";
        }
        // line 27
        echo "                <h4 class=\"box-title\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("title_batch_confirmation", array("%action%" => ($context["action_label"] ?? $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h4>
            </div>
            <div class=\"box-body\">
                ";
        // line 30
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "all_elements", array())) {
            // line 31
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                ";
        } else {
            // line 33
            echo "                    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idx", array())), array("%count%" => twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "idx", array()))), "SonataAdminBundle");
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["data"] ?? $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <div style=\"display: none\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                    ";
        // line 48
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 49
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                        </a>
                    ";
        }
        // line 55
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_d63585577b38fabcdf341b62c7c7b48b6255a01c8145352788c9642c4cb54a26->leave($__internal_d63585577b38fabcdf341b62c7c7b48b6255a01c8145352788c9642c4cb54a26_prof);

        
        $__internal_83d9b8256c6382e81568a84877972c8323f22bd983e485a52bf3b498fa1f2f1c->leave($__internal_83d9b8256c6382e81568a84877972c8323f22bd983e485a52bf3b498fa1f2f1c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 52,  159 => 51,  153 => 49,  151 => 48,  146 => 46,  140 => 43,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  118 => 34,  115 => 33,  109 => 31,  107 => 30,  100 => 27,  97 => 26,  94 => 25,  92 => 24,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">
        <div class=\"box box-danger\">
            <div class=\"box-header\">
                {% if batch_translation_domain is not same as(false) %}
                    {% set action_label = action_label|trans({}, batch_translation_domain) %}
                {% endif %}
                <h4 class=\"box-title\">{% trans with {'%action%': action_label} from 'SonataAdminBundle' %}title_batch_confirmation{% endtrans %}</h4>
            </div>
            <div class=\"box-body\">
                {% if data.all_elements %}
                    {{ 'message_batch_all_confirmation'|trans({}, 'SonataAdminBundle') }}
                {% else %}
                    {% transchoice data.idx|length with {'%count%': data.idx|length} from 'SonataAdminBundle' %}message_batch_confirmation{% endtranschoice %}
                {% endif %}
            </div>
            <div class=\"box-footer clearfix\">
                <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                    <input type=\"hidden\" name=\"data\" value=\"{{ data|json_encode }}\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <div style=\"display: none\">
                        {{ form_rest(form) }}
                    </div>

                    <button type=\"submit\" class=\"btn btn-danger\">{{ 'btn_execute_batch_action'|trans({}, 'SonataAdminBundle') }}</button>

                    {% if admin.hasRoute('list') and admin.isGranted('LIST') %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateUrl('list') }}\">
                            <i class=\"fa fa-th-list\" aria-hidden=\"true\"></i> {{ 'link_action_list'|trans({}, 'SonataAdminBundle') }}
                        </a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/batch_confirmation.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/batch_confirmation.html.twig");
    }
}
