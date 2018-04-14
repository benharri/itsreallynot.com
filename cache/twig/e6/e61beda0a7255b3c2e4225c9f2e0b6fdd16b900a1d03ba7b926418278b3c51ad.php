<?php

/* form.html.twig */
class __TwigTemplate_ebfe1fc2174b004115b965ede0ec8698da9c58ac5f25a8ddc93398edaf4347fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'masterslider' => array($this, 'block_masterslider'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 5
        echo "     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
     </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

     ";
        // line 8
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "form.html.twig", 8)->display($context);
        // line 9
        echo "     <div class=\"post-outer\">
      <div class=\"gdlr-item gdlr-blog-full \">
        <div class=\"gdlr-ux gdlr-blog-full-ux\">
            <div class=\"blog-content-inner-wrapper contact\">
               <h3 class=\"gdlr-blog-title\">";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h3>
               ";
        // line 14
        echo ($context["content"] ?? null);
        echo "
               ";
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "enabled", array())) {
            // line 16
            echo "                  ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 16)->display($context);
            // line 17
            echo "               ";
        }
        // line 18
        echo "                <br />
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>

";
        // line 25
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "form.html.twig", 25)->display($context);
    }

    // line 4
    public function block_masterslider($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 4,  73 => 25,  64 => 18,  61 => 17,  58 => 16,  56 => 15,  52 => 14,  48 => 13,  42 => 9,  40 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {% block masterslider %}{% endblock %}
     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
     </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

     {% include 'partials/blog_sidebar_header.html.twig' %}
     <div class=\"post-outer\">
      <div class=\"gdlr-item gdlr-blog-full \">
        <div class=\"gdlr-ux gdlr-blog-full-ux\">
            <div class=\"blog-content-inner-wrapper contact\">
               <h3 class=\"gdlr-blog-title\">{{ page.header.title }}</h3>
               {{ content }}
               {% if config.plugins.form.enabled %}
                  {% include \"forms/form.html.twig\" %}
               {% endif  %}
                <br />
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>

{% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "form.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/form.html.twig");
    }
}
