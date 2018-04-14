<?php

/* blog.html.twig */
class __TwigTemplate_6f2569abda20aa098934ae1462f849f824c88c78add2b3046fa2d78cc83ddf67 extends Twig_Template
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
        // line 1
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "1499750603")->display($context);
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 32,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {{ page.content }}
        {% include 'partials/blog_sidebar_header.html.twig' %}

        {% for child in collection %}
        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'pagination':collection.params.pagination} %}
        {% endif %}

        {% include 'partials/blog_sidebar_footer.html.twig' %}
    {% endblock %}

{% endembed %}


", "blog.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_6f2569abda20aa098934ae1462f849f824c88c78add2b3046fa2d78cc83ddf67_1499750603 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "
    ";
        // line 17
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
        ";
        // line 18
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "blog.html.twig", 18)->display($context);
        // line 19
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 21
            echo "        ";
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 21)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 22
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 25
            echo "        ";
            $this->loadTemplate("pagination.html.twig", "blog.html.twig", 25)->display(array_merge($context, array("pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        ";
        // line 28
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "blog.html.twig", 28)->display($context);
        // line 29
        echo "    ";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 29,  194 => 28,  191 => 27,  188 => 26,  185 => 25,  183 => 24,  180 => 23,  166 => 22,  163 => 21,  146 => 20,  143 => 19,  141 => 18,  137 => 17,  134 => 16,  131 => 15,  127 => 1,  124 => 12,  122 => 11,  119 => 8,  117 => 7,  115 => 5,  113 => 4,  111 => 3,  97 => 1,  21 => 32,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

    {% set collection = page.collection() %}
    {% set base_url = page.url %}
    {% set feed_url = base_url %}

    {% if base_url == '/' %}
    {% set base_url = '' %}
    {% endif %}

    {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
    {% endif  %}

    {% block content %}

    {{ page.content }}
        {% include 'partials/blog_sidebar_header.html.twig' %}

        {% for child in collection %}
        {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'pagination.html.twig' with {'pagination':collection.params.pagination} %}
        {% endif %}

        {% include 'partials/blog_sidebar_footer.html.twig' %}
    {% endblock %}

{% endembed %}


", "blog.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/blog.html.twig");
    }
}
