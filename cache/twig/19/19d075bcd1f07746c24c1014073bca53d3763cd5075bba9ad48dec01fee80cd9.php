<?php

/* social.html.twig */
class __TwigTemplate_66427aa74fd25fe7c09778d66e81e03e7be1e5866f12ebcb7f1b46e36894eee2 extends Twig_Template
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
        echo "<div class=\"widget HTML\">
    <h2 class=\"title\">";
        // line 2
        echo $this->getAttribute(($context["module"] ?? null), "title", array());
        echo "</h2>
    <div class=\"widget-content\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <a class=\"social-shortcode\" href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["item"], "icon", array()), array(), "array");
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        ";
        echo $this->getAttribute(($context["module"] ?? null), "content", array());
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "social.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget HTML\">
    <h2 class=\"title\">{{ module.title }}</h2>
    <div class=\"widget-content\">
        {% for item in module.header.social %}
            <a class=\"social-shortcode\" href=\"{{ item.url }}\">{{ module.media.images[item.icon] }}</a>
        {% endfor %}
        {{ module.content }}
    </div>
</div>", "social.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/social.html.twig");
    }
}
