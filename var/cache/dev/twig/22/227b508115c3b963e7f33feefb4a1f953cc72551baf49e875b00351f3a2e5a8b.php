<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_5e33f16ea114a4d748b5c1eae79548fd0be47dd38dbb7cdd05d51737ec9463ed extends Twig_Template
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
        $__internal_15e163a1d2874a196cea432e9115915487486db392c1b33f9ae0e7e30e31af35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15e163a1d2874a196cea432e9115915487486db392c1b33f9ae0e7e30e31af35->enter($__internal_15e163a1d2874a196cea432e9115915487486db392c1b33f9ae0e7e30e31af35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_088c27f336887c46ccbb19c30d5e8674d7cc2591f7fe99747722d8b0cd1b14f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088c27f336887c46ccbb19c30d5e8674d7cc2591f7fe99747722d8b0cd1b14f3->enter($__internal_088c27f336887c46ccbb19c30d5e8674d7cc2591f7fe99747722d8b0cd1b14f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_15e163a1d2874a196cea432e9115915487486db392c1b33f9ae0e7e30e31af35->leave($__internal_15e163a1d2874a196cea432e9115915487486db392c1b33f9ae0e7e30e31af35_prof);

        
        $__internal_088c27f336887c46ccbb19c30d5e8674d7cc2591f7fe99747722d8b0cd1b14f3->leave($__internal_088c27f336887c46ccbb19c30d5e8674d7cc2591f7fe99747722d8b0cd1b14f3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
