<?php

/* pagination.html.twig */
class __TwigTemplate_d28f6c7f925eb511d49ace2529c7462e60fd5e777c7678be37bc9f69bad3d067 extends Twig_Template
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
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 2
            if ((($context["base_url"] ?? null) == "")) {
                // line 3
                echo "    ";
                $context["base_url"] = "/";
            }
            // line 5
            echo "<div class=\"blog-pager\" id=\"blog-pager\">
    <div class=\"showpageArea\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <span class=\"showpageNum\"><a rel=\"prev\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&laquo;</a></span>
    ";
            }
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 12
                echo "        ";
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 13
                    echo "            <span class=\"showpagePoint\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</span>
        ";
                } elseif ($this->getAttribute(                // line 14
$context["paginate"], "isInDelta", array())) {
                    // line 15
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 16
                    echo "            <span class=\"showpageNum\"><a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></span>
        ";
                } elseif ($this->getAttribute(                // line 17
$context["paginate"], "isDeltaBorder", array())) {
                    // line 18
                    echo "            <span class=\"showpageNum\">&hellip;</span>
        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
                // line 22
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
                // line 23
                echo "        <span class=\"showpageNum\"><a rel=\"next\" href=\"";
                echo ($context["url"] ?? null);
                echo "\">&raquo;</a></span>
    ";
            }
            // line 25
            echo "    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 23,  82 => 22,  79 => 21,  73 => 20,  69 => 18,  67 => 17,  60 => 16,  57 => 15,  55 => 14,  50 => 13,  47 => 12,  42 => 11,  36 => 9,  33 => 8,  31 => 7,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if pagination|length > 1 %}
{% if base_url == '' %}
    {% set base_url = '/' %}
{% endif %}
<div class=\"blog-pager\" id=\"blog-pager\">
    <div class=\"showpageArea\">
    {% if pagination.hasPrev %}
        {% set url = (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <span class=\"showpageNum\"><a rel=\"prev\" href=\"{{ url }}\">&laquo;</a></span>
    {% endif %}
    {% for paginate in pagination %}
        {% if paginate.isCurrent %}
            <span class=\"showpagePoint\">{{ paginate.number }}</span>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <span class=\"showpageNum\"><a href=\"{{ url }}\">{{ paginate.number }}</a></span>
        {% elseif paginate.isDeltaBorder %}
            <span class=\"showpageNum\">&hellip;</span>
        {% endif %}
    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <span class=\"showpageNum\"><a rel=\"next\" href=\"{{ url }}\">&raquo;</a></span>
    {% endif %}
    </div>
</div>
{% endif %}
", "pagination.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/pagination.html.twig");
    }
}
