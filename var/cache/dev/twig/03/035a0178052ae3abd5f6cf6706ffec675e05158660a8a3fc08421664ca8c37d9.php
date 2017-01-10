<?php

/* @SonataAdmin/Core/add_block.html.twig */
class __TwigTemplate_6f8ac6dbe7931027fb26d361b61ec38783f2298a34edc73e5bada193361c53b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e655f3c48f90cb1b8a412288eed1331dfa1d5d6a6bb631b27a644401142e226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e655f3c48f90cb1b8a412288eed1331dfa1d5d6a6bb631b27a644401142e226->enter($__internal_9e655f3c48f90cb1b8a412288eed1331dfa1d5d6a6bb631b27a644401142e226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        $__internal_61ea4726b10ce9fb03f52d41b24e84be2778d996f43c16e768d7aa5d566b6d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ea4726b10ce9fb03f52d41b24e84be2778d996f43c16e768d7aa5d566b6d30->enter($__internal_61ea4726b10ce9fb03f52d41b24e84be2778d996f43c16e768d7aa5d566b6d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/add_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_9e655f3c48f90cb1b8a412288eed1331dfa1d5d6a6bb631b27a644401142e226->leave($__internal_9e655f3c48f90cb1b8a412288eed1331dfa1d5d6a6bb631b27a644401142e226_prof);

        
        $__internal_61ea4726b10ce9fb03f52d41b24e84be2778d996f43c16e768d7aa5d566b6d30->leave($__internal_61ea4726b10ce9fb03f52d41b24e84be2778d996f43c16e768d7aa5d566b6d30_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_4b536ede6c9c84cd45ff2ae0bfd1fff3c7175cf7dde1a6858c1682e4adafeff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b536ede6c9c84cd45ff2ae0bfd1fff3c7175cf7dde1a6858c1682e4adafeff3->enter($__internal_4b536ede6c9c84cd45ff2ae0bfd1fff3c7175cf7dde1a6858c1682e4adafeff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_c7b7f07f9cc11249fce73f3ce3ce6ad1d1f89a36e1d010bb11d933bf1899e590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b7f07f9cc11249fce73f3ce3ce6ad1d1f89a36e1d010bb11d933bf1899e590->enter($__internal_c7b7f07f9cc11249fce73f3ce3ce6ad1d1f89a36e1d010bb11d933bf1899e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        // line 2
        echo "    ";
        $context["items_per_column"] = $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["groups"] = array();
        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "dashboardgroups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 6
            echo "        ";
            $context["display_group"] = false;
            // line 7
            echo "
        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                if ((($context["display_group"] ?? $this->getContext($context, "display_group")) == false)) {
                    // line 9
                    echo "            ";
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 10
                        echo "                ";
                        $context["display_group"] = true;
                        // line 11
                        echo "                ";
                        $context["groups"] = twig_array_merge(array(0 => $context["group"]), ($context["groups"] ?? $this->getContext($context, "groups")));
                        // line 12
                        echo "            ";
                    }
                    // line 13
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context["column_count"] = twig_round((twig_length_filter($this->env, ($context["groups"] ?? $this->getContext($context, "groups"))) / ($context["items_per_column"] ?? $this->getContext($context, "items_per_column"))), 0, "ceil");
        // line 17
        echo "
    <div class=\"dropdown-menu multi-column dropdown-add\"
        ";
        // line 19
        if ((($context["column_count"] ?? $this->getContext($context, "column_count")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, (($context["column_count"] ?? $this->getContext($context, "column_count")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 20
        echo "            >
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, ($context["groups"] ?? $this->getContext($context, "groups"))));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 22
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SONATA_ADMIN"));
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 24
                    echo "                ";
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                    // line 25
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "
            ";
            // line 27
            if (($context["display"] ?? $this->getContext($context, "display"))) {
                // line 28
                echo "
                ";
                // line 29
                if (($this->getAttribute($context["loop"], "first", array()) || (($this->getAttribute($context["loop"], "index0", array()) % ($context["items_per_column"] ?? $this->getContext($context, "items_per_column"))) == 0))) {
                    // line 30
                    echo "                    ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 31
                        echo "                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    ";
                    } else {
                        // line 34
                        echo "                        </ul>
                    ";
                    }
                    // line 36
                    echo "
                    <ul class=\"dropdown-menu";
                    // line 37
                    if ((($context["column_count"] ?? $this->getContext($context, "column_count")) > 1)) {
                        echo " col-md-";
                        echo twig_escape_filter($this->env, twig_round((12 / ($context["column_count"] ?? $this->getContext($context, "column_count")))), "html", null, true);
                    }
                    echo "\">
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                if ((($this->getAttribute($context["loop"], "index0", array()) % ($context["items_per_column"] ?? $this->getContext($context, "items_per_column"))) != 0)) {
                    // line 41
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 43
                echo "                <li role=\"presentation\" class=\"dropdown-header\">
                    ";
                // line 44
                echo $this->getAttribute($context["group"], "icon", array());
                echo "
                    ";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                echo "
                </li>

                ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 49
                    echo "                    ";
                    if (($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 50
                        echo "                        ";
                        if (twig_test_empty($this->getAttribute($context["admin"], "subClasses", array()))) {
                            // line 51
                            echo "                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                            // line 52
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a>
                            </li>
                        ";
                        } else {
                            // line 55
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($context["admin"], "subclasses", array())));
                            foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                // line 56
                                echo "                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                                // line 57
                                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                                echo "</a>
                                </li>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 60
                            echo "                        ";
                        }
                        // line 61
                        echo "                    ";
                    }
                    // line 62
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "
                ";
                // line 64
                if ($this->getAttribute($context["loop"], "last", array())) {
                    // line 65
                    echo "                            </ul>
                        </div>
                    </div>
                ";
                }
                // line 69
                echo "
            ";
            }
            // line 71
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>
";
        
        $__internal_c7b7f07f9cc11249fce73f3ce3ce6ad1d1f89a36e1d010bb11d933bf1899e590->leave($__internal_c7b7f07f9cc11249fce73f3ce3ce6ad1d1f89a36e1d010bb11d933bf1899e590_prof);

        
        $__internal_4b536ede6c9c84cd45ff2ae0bfd1fff3c7175cf7dde1a6858c1682e4adafeff3->leave($__internal_4b536ede6c9c84cd45ff2ae0bfd1fff3c7175cf7dde1a6858c1682e4adafeff3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  283 => 72,  269 => 71,  265 => 69,  259 => 65,  257 => 64,  254 => 63,  248 => 62,  245 => 61,  242 => 60,  231 => 57,  228 => 56,  223 => 55,  215 => 52,  212 => 51,  209 => 50,  206 => 49,  202 => 48,  196 => 45,  192 => 44,  189 => 43,  185 => 41,  183 => 40,  180 => 39,  172 => 37,  169 => 36,  165 => 34,  160 => 31,  157 => 30,  155 => 29,  152 => 28,  150 => 27,  147 => 26,  140 => 25,  137 => 24,  131 => 23,  128 => 22,  111 => 21,  108 => 20,  102 => 19,  98 => 17,  96 => 16,  93 => 15,  87 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  63 => 8,  60 => 7,  57 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}
    {% set items_per_column = sonata_admin.adminPool.getOption('dropdown_number_groups_per_colums') %}
    {% set groups = [] %}

    {% for group in sonata_admin.adminPool.dashboardgroups %}
        {% set display_group = false %}

        {% for admin in group.items if display_group == false %}
            {% if admin.hasRoute('create') and admin.isGranted('CREATE') %}
                {% set display_group = true %}
                {% set groups = [group]|merge(groups) %}
            {% endif %}
        {% endfor %}
    {% endfor %}

    {% set column_count = (groups|length / items_per_column)|round(0, 'ceil') %}

    <div class=\"dropdown-menu multi-column dropdown-add\"
        {% if column_count > 1 %}style=\"width: {{ column_count*140 }}px;\"{% endif %}
            >
        {% for group in groups|reverse %}
            {% set display = (group.roles is empty or is_granted('ROLE_SONATA_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}

                {% if loop.first or loop.index0 % items_per_column == 0 %}
                    {% if loop.first %}
                        <div class=\"container-fluid\">
                            <div class=\"row\">
                    {% else %}
                        </ul>
                    {% endif %}

                    <ul class=\"dropdown-menu{% if column_count > 1 %} col-md-{{ (12/column_count)|round }}{% endif %}\">
                {% endif %}

                {% if loop.index0 % items_per_column != 0 %}
                    <li role=\"presentation\" class=\"divider\"></li>
                {% endif %}
                <li role=\"presentation\" class=\"dropdown-header\">
                    {{ group.icon|raw }}
                    {{ group.label|trans({}, group.label_catalogue) }}
                </li>

                {% for admin in group.items %}
                    {% if admin.hasRoute('create') and admin.isGranted('CREATE') %}
                        {% if admin.subClasses is empty %}
                            <li role=\"presentation\">
                                <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create')}}\">{{ admin.label|trans({}, admin.translationdomain) }}</a>
                            </li>
                        {% else %}
                            {% for subclass in admin.subclasses|keys %}
                                <li role=\"presentation\">
                                    <a role=\"menuitem\" tabindex=\"-1\" href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">{{ subclass|trans({}, admin.translationdomain) }}</a>
                                </li>
                            {% endfor %}
                        {% endif %}
                    {% endif %}
                {% endfor %}

                {% if loop.last %}
                            </ul>
                        </div>
                    </div>
                {% endif %}

            {% endif %}
        {% endfor %}
    </div>
{% endblock %}
", "@SonataAdmin/Core/add_block.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/add_block.html.twig");
    }
}
