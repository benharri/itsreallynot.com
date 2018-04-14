<?php

/* forms/default/form.html.twig */
class __TwigTemplate_2043cd2119e0b3004cb5b0ea57dfc141e43e00ea36b8a69f8cdeb33215cd18f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 10
        $context["client_side_validation"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "client_side_validation", array()))) ? ($this->getAttribute(($context["form"] ?? null), "client_side_validation", array())) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array(), "any", false, true), "form", array(), "any", false, true), "client_side_validation", array()), true)) : (true))));
        // line 11
        $context["inline_errors"] = (( !(null === $this->getAttribute(($context["form"] ?? null), "inline_errors", array()))) ? ($this->getAttribute(($context["form"] ?? null), "inline_errors", array())) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "inline_errors", array(0 => false), "method")));
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 14
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 15
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 16
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
";
        // line 19
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())) . $this->getAttribute(($context["uri"] ?? null), "params", array()))));
        // line 20
        echo "
";
        // line 21
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 22
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 24
        echo "
<form name=\"";
        // line 25
        echo $this->getAttribute(($context["form"] ?? null), "name", array());
        echo "\"
      action=\"";
        // line 26
        echo twig_trim_filter(($context["action"] ?? null), "/", "right");
        echo "\"
      method=\"";
        // line 27
        echo ($context["method"] ?? null);
        echo "\"";
        echo ($context["multipart"] ?? null);
        echo "
      ";
        // line 28
        if ($this->getAttribute(($context["form"] ?? null), "id", array())) {
            echo "id=\"";
            echo $this->getAttribute(($context["form"] ?? null), "id", array());
            echo "\"";
        }
        // line 29
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 32
        echo "      ";
        if ($this->getAttribute(($context["form"] ?? null), "novalidate", array())) {
            echo "novalidate";
        }
        // line 33
        echo ">

  ";
        // line 35
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 36
        echo "
  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 38
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 39
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 40
                echo "    ";
            }
            // line 41
            echo "    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 42
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 42)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 43
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
  ";
        // line 45
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 45)->display($context);
        // line 46
        echo "
  ";
        // line 47
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 48
        echo "
  ";
        // line 49
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 52
        echo "
  ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 54
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\" ";
                echo $this->getAttribute($context["button"], "outerclasses", array());
                echo "\">";
            }
            // line 55
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 56
                echo "              <a href=\"";
                echo (((is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "http") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array()))));
                echo "\">
          ";
            }
            // line 58
            echo "          <button
                ";
            // line 59
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo $this->getAttribute($context["button"], "id", array());
                echo "\"";
            }
            // line 60
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 63
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 64
            echo "
                type=\"";
            // line 65
            echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
            echo "\"

                ";
            // line 67
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 68
                echo "                    name=\"task\" value=\"";
                echo $this->getAttribute($context["button"], "task", array());
                echo "\"
                ";
            }
            // line 70
            echo "            >
                ";
            // line 71
            echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
            echo "
          </button>
          ";
            // line 73
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 74
                echo "              </a>
          ";
            }
            // line 76
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 77
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "
  ";
        // line 79
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 82
        echo "
  ";
        // line 83
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 83)->display($context);
        // line 84
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 29
    public function block_form_classes($context, array $blocks = array())
    {
        // line 30
        echo "      class=\"";
        echo ($context["form_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["form"] ?? null), "classes", array());
        echo "\"
      ";
    }

    // line 35
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 47
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 49
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 50
        echo "  <div class=\"";
        echo ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons"));
        echo "\">
  ";
    }

    // line 60
    public function block_button_classes($context, array $blocks = array())
    {
        // line 61
        echo "                class=\"";
        echo ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button"));
        echo " ";
        echo $this->getAttribute(($context["button"] ?? null), "classes", array());
        echo "\"
                ";
    }

    // line 79
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 80
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 80,  353 => 79,  344 => 61,  341 => 60,  334 => 50,  331 => 49,  326 => 47,  321 => 35,  312 => 30,  309 => 29,  301 => 84,  299 => 83,  296 => 82,  294 => 79,  291 => 78,  277 => 77,  272 => 76,  268 => 74,  266 => 73,  261 => 71,  258 => 70,  252 => 68,  250 => 67,  245 => 65,  242 => 64,  237 => 63,  234 => 60,  228 => 59,  225 => 58,  219 => 56,  216 => 55,  209 => 54,  192 => 53,  189 => 52,  187 => 49,  184 => 48,  182 => 47,  179 => 46,  177 => 45,  174 => 44,  160 => 43,  152 => 42,  149 => 41,  146 => 40,  143 => 39,  140 => 38,  123 => 37,  120 => 36,  118 => 35,  114 => 33,  109 => 32,  106 => 29,  100 => 28,  94 => 27,  90 => 26,  86 => 25,  83 => 24,  79 => 22,  77 => 21,  74 => 20,  72 => 19,  69 => 18,  62 => 16,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  47 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}
{% set client_side_validation = form.client_side_validation is not null ? form.client_side_validation : config.plugins.form.client_side_validation|default(true) %}
{% set inline_errors = form.inline_errors is not null ? form.inline_errors : config.plugins.form.inline_errors(false) %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action | trim('/', 'right') }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      class=\"{{ form_outer_classes }} {{ form.classes }}\"
      {% endblock %}
      {% if form.novalidate %}novalidate{% endif %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\" {{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
                {{ button.value|t|default('Submit') }}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "forms/default/form.html.twig", "/var/www/itsreallynot.com/user/plugins/form/templates/forms/default/form.html.twig");
    }
}
