<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_4b9e830c95d80b6b1ddacf32df41bd30e9924f02aa2d4dcd3e9514a5f2bf9eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715c68e0f6212fcd93d7047d079a4cf6105e66aa3aad05472f6e47c8982b7fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_715c68e0f6212fcd93d7047d079a4cf6105e66aa3aad05472f6e47c8982b7fcc->enter($__internal_715c68e0f6212fcd93d7047d079a4cf6105e66aa3aad05472f6e47c8982b7fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        $__internal_3c4aad655a47705a177e1b0a980093316ce7056e02aebb8c85f5778dcdeb77f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4aad655a47705a177e1b0a980093316ce7056e02aebb8c85f5778dcdeb77f1->enter($__internal_3c4aad655a47705a177e1b0a980093316ce7056e02aebb8c85f5778dcdeb77f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_715c68e0f6212fcd93d7047d079a4cf6105e66aa3aad05472f6e47c8982b7fcc->leave($__internal_715c68e0f6212fcd93d7047d079a4cf6105e66aa3aad05472f6e47c8982b7fcc_prof);

        
        $__internal_3c4aad655a47705a177e1b0a980093316ce7056e02aebb8c85f5778dcdeb77f1->leave($__internal_3c4aad655a47705a177e1b0a980093316ce7056e02aebb8c85f5778dcdeb77f1_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_04afc04718a4dd25831e257dd6cb75dd8426d343444140175fca19d0d075d14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04afc04718a4dd25831e257dd6cb75dd8426d343444140175fca19d0d075d14d->enter($__internal_04afc04718a4dd25831e257dd6cb75dd8426d343444140175fca19d0d075d14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_405980cf6b58ab2dd8d5b5c8d95c88055d15cb422e0b92218f243d729383d4f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405980cf6b58ab2dd8d5b5c8d95c88055d15cb422e0b92218f243d729383d4f0->enter($__internal_405980cf6b58ab2dd8d5b5c8d95c88055d15cb422e0b92218f243d729383d4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_405980cf6b58ab2dd8d5b5c8d95c88055d15cb422e0b92218f243d729383d4f0->leave($__internal_405980cf6b58ab2dd8d5b5c8d95c88055d15cb422e0b92218f243d729383d4f0_prof);

        
        $__internal_04afc04718a4dd25831e257dd6cb75dd8426d343444140175fca19d0d075d14d->leave($__internal_04afc04718a4dd25831e257dd6cb75dd8426d343444140175fca19d0d075d14d_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_a4899cea64045130b3b92400ade3e4ffc5fc905021cac3c8008ff72f75e85c88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4899cea64045130b3b92400ade3e4ffc5fc905021cac3c8008ff72f75e85c88->enter($__internal_a4899cea64045130b3b92400ade3e4ffc5fc905021cac3c8008ff72f75e85c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_177de03ea2e884736bd4e0b5f48ee9140dba4b23d276a032f14eac3f7384d0be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177de03ea2e884736bd4e0b5f48ee9140dba4b23d276a032f14eac3f7384d0be->enter($__internal_177de03ea2e884736bd4e0b5f48ee9140dba4b23d276a032f14eac3f7384d0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_177de03ea2e884736bd4e0b5f48ee9140dba4b23d276a032f14eac3f7384d0be->leave($__internal_177de03ea2e884736bd4e0b5f48ee9140dba4b23d276a032f14eac3f7384d0be_prof);

        
        $__internal_a4899cea64045130b3b92400ade3e4ffc5fc905021cac3c8008ff72f75e85c88->leave($__internal_a4899cea64045130b3b92400ade3e4ffc5fc905021cac3c8008ff72f75e85c88_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_ae015abb371def5e074fbd26aa9924851181620780dcd6f9464ab1c117f5b87d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae015abb371def5e074fbd26aa9924851181620780dcd6f9464ab1c117f5b87d->enter($__internal_ae015abb371def5e074fbd26aa9924851181620780dcd6f9464ab1c117f5b87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        $__internal_9bdbb3cc8c1bdb04dda123de2dc7fadf55c83b14be926c0cdd5e5d19df285397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdbb3cc8c1bdb04dda123de2dc7fadf55c83b14be926c0cdd5e5d19df285397->enter($__internal_9bdbb3cc8c1bdb04dda123de2dc7fadf55c83b14be926c0cdd5e5d19df285397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_9bdbb3cc8c1bdb04dda123de2dc7fadf55c83b14be926c0cdd5e5d19df285397->leave($__internal_9bdbb3cc8c1bdb04dda123de2dc7fadf55c83b14be926c0cdd5e5d19df285397_prof);

        
        $__internal_ae015abb371def5e074fbd26aa9924851181620780dcd6f9464ab1c117f5b87d->leave($__internal_ae015abb371def5e074fbd26aa9924851181620780dcd6f9464ab1c117f5b87d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  140 => 30,  133 => 28,  131 => 27,  123 => 26,  119 => 25,  115 => 24,  108 => 23,  99 => 22,  88 => 19,  85 => 18,  76 => 17,  60 => 13,  51 => 12,  41 => 22,  38 => 21,  36 => 17,  33 => 16,  31 => 12,  28 => 11,);
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

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
