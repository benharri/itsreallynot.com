<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_0ec4dcb28c72d8d9b51aacb9a3d0723714819d76bafff6a92fdfec74208feccb extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.category" => "sidebar"), "order" => array("by" => "default", "dir" => "asc"))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["module"], "template", array())) {
                // line 3
                echo "        ";
                $this->loadTemplate(($this->getAttribute($context["module"], "template", array()) . ".html.twig"), "partials/sidebar.html.twig", 3)->display($context);
                // line 4
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 8
            echo "    <div class=\"widget HTML\">
        <h2 class=\"title\">SimpleSearch</h2>
        <div class=\"widget-content simplesearch\">
            ";
            // line 11
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 11)->display($context);
            // line 12
            echo "        </div>
    </div>
";
        }
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 16
            echo "    <div class=\"widget HTML\">
       <h2 class=\"title\">Random Article</h2>
       <div class=\"widget-content\">
           <a class=\"button\" href=\"";
            // line 19
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
       </div>
   </div>
";
        }
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 24
            echo "    <div class=\"widget HTML\">
        <h2 class=\"title\">Archives</h2>
        <div class=\"widget-content\">
            ";
            // line 27
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 27)->display($context);
            // line 28
            echo "        </div>
    </div>
";
        }
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 32
            echo "    <div class=\"widget HTML syndicate\">
        <h2 class=\"title\">Syndicate</h2>
        <div class=\"widget-content\">
            <a class=\"button\" href=\"";
            // line 35
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"button\" href=\"";
            // line 36
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  109 => 35,  104 => 32,  102 => 31,  97 => 28,  95 => 27,  90 => 24,  88 => 23,  81 => 19,  76 => 16,  74 => 15,  69 => 12,  67 => 11,  62 => 8,  60 => 7,  57 => 6,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
    {% if module.template %}
        {% include module.template ~ '.html.twig' %}
    {% endif %}
{% endfor %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"widget HTML\">
        <h2 class=\"title\">SimpleSearch</h2>
        <div class=\"widget-content simplesearch\">
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        </div>
    </div>
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"widget HTML\">
       <h2 class=\"title\">Random Article</h2>
       <div class=\"widget-content\">
           <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
       </div>
   </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"widget HTML\">
        <h2 class=\"title\">Archives</h2>
        <div class=\"widget-content\">
            {% include 'partials/archives.html.twig' %}
        </div>
    </div>
{% endif %}
{% if config.plugins.feed.enabled %}
    <div class=\"widget HTML syndicate\">
        <h2 class=\"title\">Syndicate</h2>
        <div class=\"widget-content\">
            <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/partials/sidebar.html.twig");
    }
}
