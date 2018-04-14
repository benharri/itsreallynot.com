<?php

/* gallery.html.twig */
class __TwigTemplate_fc3b72676fd8a0d764d71e77deb8cd31a127785ab06029b480b151c2a5acd642 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "gallery", array())) {
            // line 5
            echo "        <div class=\"gdlr-instagram-item-head gdlr-nav-container\">
            <i class=\"icon-angle-left gdlr-flex-prev\"></i>
            <a href=\"";
            // line 7
            echo ($context["base_url_absolute"] ?? null);
            echo "\" target=\"_blank\">
                <i class=\"icon-instagram\"></i>
            </a>
            <i class=\"icon-angle-right gdlr-flex-next\"></i>
        </div>
        <div class=\"gdlr-instagram-item-wrapper\">
            <div class=\"flexslider\" data-type=\"carousel\" data-nav-container=\"gdlr-instagram-item-wrapper\">
                <div class=\"flex-viewport\" >
                    <ul class=\"slides\">
                        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "gallery", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                // line 17
                echo "                            <li>
                                <a href=\"";
                // line 18
                if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "image_as_link", array())) {
                    echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["images"], "image", array()), array(), "array"), "url", array());
                } else {
                    echo $this->getAttribute($context["images"], "url", array());
                }
                echo "\" target=\"_blank\" data-lightbox=\"gallery\" data-title=\"images.image\">
                                    ";
                // line 19
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? null), "media", array()), "images", array()), $this->getAttribute($context["images"], "image", array()), array(), "array");
                echo "
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["module"] ?? null), "content", array());
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  70 => 23,  60 => 19,  52 => 18,  49 => 17,  45 => 16,  33 => 7,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
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
     {% if module.header.gallery %}
        <div class=\"gdlr-instagram-item-head gdlr-nav-container\">
            <i class=\"icon-angle-left gdlr-flex-prev\"></i>
            <a href=\"{{ base_url_absolute }}\" target=\"_blank\">
                <i class=\"icon-instagram\"></i>
            </a>
            <i class=\"icon-angle-right gdlr-flex-next\"></i>
        </div>
        <div class=\"gdlr-instagram-item-wrapper\">
            <div class=\"flexslider\" data-type=\"carousel\" data-nav-container=\"gdlr-instagram-item-wrapper\">
                <div class=\"flex-viewport\" >
                    <ul class=\"slides\">
                        {% for images in module.header.gallery %}
                            <li>
                                <a href=\"{% if module.header.image_as_link %}{{ module.media.images[images.image].url }}{% else %}{{ images.url }}{% endif %}\" target=\"_blank\" data-lightbox=\"gallery\" data-title=\"images.image\">
                                    {{ module.media.images[images.image] }}
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}
    {{ module.content }}
</div>
</div>", "gallery.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/gallery.html.twig");
    }
}
