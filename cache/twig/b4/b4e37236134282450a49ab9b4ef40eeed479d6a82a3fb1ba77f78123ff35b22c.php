<?php

/* forms/default/field.html.twig */
class __TwigTemplate_c0af5f658609266d5be901ce37c5ed61653cbc8012c352e89c71d59cce355f76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", array())) . "-") . $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 6
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ((((null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))))) : (($context["value"] ?? null)));
        // line 7
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", array()), $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 8
        $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 9
        $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1)));
        // line 10
        echo "
";
        // line 11
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 12
            echo "    ";
            $context["autofocus"] = true;
        }
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"";
        echo ((($context["form_field_outer_classes"] ?? null)) ? (($context["form_field_outer_classes"] ?? null)) : ("form-field"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "outerclasses", array());
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 17
        $this->displayBlock('contents', $context, $blocks);
        // line 103
        echo "    </div>
";
    }

    // line 16
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 17
    public function block_contents($context, array $blocks = array())
    {
        // line 18
        echo "            ";
        if ( !($this->getAttribute(($context["field"] ?? null), "label", array()) === false)) {
            // line 19
            echo "                <div class=\"";
            echo ((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "labelclasses", array());
            echo "\">
                    <label class=\"";
            // line 20
            echo ((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline"));
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
                echo "for=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
                echo "\" ";
            }
            echo " >
                    ";
            // line 21
            $this->displayBlock('label', $context, $blocks);
            // line 38
            echo "                    </label>
                </div>
            ";
        }
        // line 41
        echo "            <div class=\"";
        echo ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "dataclasses", array());
        echo "\"
                ";
        // line 42
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 47
        echo "            >
                ";
        // line 48
        $this->displayBlock('group', $context, $blocks);
        // line 89
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 90
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 92
            if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
                // line 93
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "description", array())), false);
                echo "
                            ";
            } else {
                // line 95
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "description", array()));
                echo "
                            ";
            }
            // line 97
            echo "                        </span>
                    </div>
                ";
        }
        // line 100
        echo "
            </div>
        ";
    }

    // line 21
    public function block_label($context, array $blocks = array())
    {
        // line 22
        echo "                        ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 23
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
                // line 24
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "help", array())), false));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", array()), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()))));
                echo "</span>
                            ";
            } else {
                // line 26
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "help", array())));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
                echo "</span>
                            ";
            }
            // line 28
            echo "                        ";
        } else {
            // line 29
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", array())) {
                // line 30
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate(_twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", array()), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array()))));
                echo "
                            ";
            } else {
                // line 32
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
                echo "
                            ";
            }
            // line 34
            echo "                        ";
        }
        // line 35
        echo "
                        ";
        // line 36
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 42
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 43
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 44
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 48
    public function block_group($context, array $blocks = array())
    {
        // line 49
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 88
        echo "                ";
    }

    // line 49
    public function block_input($context, array $blocks = array())
    {
        // line 50
        echo "                        <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 51
        $this->displayBlock('prepend', $context, $blocks);
        // line 52
        echo "                            <input
                                ";
        // line 54
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
                                value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 57
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 77
        echo "                            />
                            ";
        // line 78
        $this->displayBlock('append', $context, $blocks);
        // line 79
        echo "                            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 80
            echo "                                <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 82
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                </div>
                            ";
        }
        // line 86
        echo "                        </div>
                    ";
    }

    // line 51
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 57
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 58
        echo "                                    class=\"";
        echo ($context["form_field_input_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", array());
        echo "\"
                                    ";
        // line 59
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 60
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 61
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 62
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            echo "\"";
        }
        // line 63
        echo "                                    ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 64
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 65
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 66
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off", 2 => "new-password"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", array());
            echo "\"";
        }
        // line 67
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "attributes", array(), "any", true, true)) {
            // line 68
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 69
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                                    ";
        }
        // line 72
        echo "                                    ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 73
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 74
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 75
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())));
            echo "\" ";
        }
        // line 76
        echo "                                ";
    }

    // line 78
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 78,  426 => 76,  420 => 75,  413 => 74,  406 => 73,  401 => 72,  398 => 71,  387 => 69,  382 => 68,  379 => 67,  372 => 66,  367 => 65,  362 => 64,  357 => 63,  350 => 62,  345 => 61,  338 => 60,  332 => 59,  325 => 58,  322 => 57,  317 => 51,  312 => 86,  308 => 84,  299 => 82,  295 => 81,  290 => 80,  287 => 79,  285 => 78,  282 => 77,  279 => 57,  275 => 55,  270 => 54,  267 => 52,  265 => 51,  256 => 50,  253 => 49,  249 => 88,  246 => 49,  243 => 48,  237 => 45,  233 => 44,  228 => 43,  225 => 42,  219 => 36,  216 => 35,  213 => 34,  207 => 32,  201 => 30,  198 => 29,  195 => 28,  187 => 26,  179 => 24,  176 => 23,  173 => 22,  170 => 21,  164 => 100,  159 => 97,  153 => 95,  147 => 93,  145 => 92,  137 => 90,  134 => 89,  132 => 48,  129 => 47,  127 => 42,  120 => 41,  115 => 38,  113 => 21,  103 => 20,  96 => 19,  93 => 18,  90 => 17,  85 => 16,  80 => 103,  78 => 17,  65 => 16,  59 => 15,  56 => 14,  52 => 12,  50 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set cookie_name = 'forms-' ~ form.name ~ '-' ~ field.name %}
{% set value = (is_object(value) or value is null ? (get_cookie(cookie_name) is null ? field.default : get_cookie(cookie_name)) : value) %}
{% set errors = attribute(form.messages, field.name) %}
{% set required = client_side_validation and field.validate.required in ['on', 'true', 1] %}
{% set autofocus = (inline_errors == false) and field.autofocus in ['on', 'true', 1] %}

{% if inline_errors and errors %}
    {% set autofocus = true %}
{% endif %}

{% block field %}
    <div class=\"{{ form_field_outer_classes ?: 'form-field' }} {{ field.outerclasses }} {% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            {% if field.label is not same as(false) %}
                <div class=\"{{ form_field_outer_label_classes ?: 'form-label' }} {{ field.labelclasses }}\">
                    <label class=\"{{ form_field_label_classes ?: 'inline' }}\" {% if field.id is defined %}for=\"{{ field.id|e }}\" {% endif %} >
                    {% block label %}
                        {% if field.help %}
                            {% if field.markdown %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|markdown(false)|e }}\">{{ field.label|markdown(false)|default(field.name|capitalize)|t }}</span>
                            {% else %}
                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                            {% endif %}
                        {% else %}
                            {% if field.markdown %}
                                {{ field.label|markdown(false)|default(field.name|capitalize)|t }}
                            {% else %}
                                {{ field.label|default(field.name|capitalize)|t }}
                            {% endif %}
                        {% endif %}

                        {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                    {% endblock %}
                    </label>
                </div>
            {% endif %}
            <div class=\"{{ form_field_outer_data_classes ?: 'form-data' }} {{ field.dataclasses }}\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"{{ form_field_wrapper_classes ?: 'form-input-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    class=\"{{ form_field_input_classes }} {{ field.classes }}\"
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if autofocus %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off', 'new-password'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.attributes is defined %}
                                      {% for attribute in field.attributes %}
                                          {{ attribute.name }}=\"{{ attribute.value|e }}\"
                                      {% endfor %}
                                    {% endif %}
                                    {% if required %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if inline_errors and errors %}
                                <div class=\"{{ form_errors_classes ?: 'form-errors' }}\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">
                            {% if field.markdown %}
                                {{ field.description|t|markdown(false)|raw }}
                            {% else %}
                                {{ field.description|t|raw }}
                            {% endif %}
                        </span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/default/field.html.twig", "/var/www/itsreallynot.com/user/plugins/form/templates/forms/default/field.html.twig");
    }
}
