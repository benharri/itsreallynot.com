<?php

/* partials/base.html.twig */
class __TwigTemplate_87c4f92fd484276685827ad82f252f8c4494aeacd0b583dbba683d633e93d864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'masterslider' => array($this, 'block_masterslider'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 37
        echo "</head>
<body id=\"top\" class=\"page page-template-default ";
        // line 38
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\">
    <div class=\"body-wrapper  float-menu gdlr-pattern-background\">
        ";
        // line 40
        $this->displayBlock('header', $context, $blocks);
        // line 67
        echo "
        ";
        // line 68
        $this->displayBlock('navigation', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "
            ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "        </div>

    </body>
    </html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1' id='Merriweather-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Arvo%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=3.9.1' id='Arvo-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 13
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", array());
        echo "\">
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

        ";
        // line 32
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 33
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 35
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/widget_css_2_bundle.css"), "method");
        // line 16
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/style.css"), "method");
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/lightbox.css"), "method");
        // line 18
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 8))) {
            // line 19
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/ie.css"), "method");
            // line 20
            echo "            ";
        }
        // line 21
        echo "        ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/jquery-migrate-1.2.1.min.js"), "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/lightbox.min.js"), "method");
        // line 28
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "theme://js/script.js"), "method");
        // line 29
        echo "        ";
    }

    // line 40
    public function block_header($context, array $blocks = array())
    {
        // line 41
        echo "            <header class='gdlr-header-wrapper'>
                <div class='gdlr-logo-container container'>
                    <div class='gdlr-logo-wrapper'>
                        <div class='gdlr-logo'>
                            <div class='header section' id='header'><div class='widget Header' id='Header1'>
                                <div id='header-inner'>
                                    <a href='";
        // line 47
        echo ($context["base_url_absolute"] ?? null);
        echo "' style='display: block'>
                                        <img id='Header1_headerimg' src='";
        // line 48
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.png' style='display: block' alt='";
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "' />
                                    </a>
                                </div>
                            </div></div>
                            <div class='gdlr-responsive-navigation dl-menuwrapper' id='gdlr-responsive-navigation'><button class='dl-trigger'>Open Menu</button><ul class='dl-menu gdlr-main-mobile-menu' id='menu-main-menu'>
                                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "mainmenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                                    ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["item"], "url", array()), "page:")) {
                // line 55
                echo "                    \t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='";
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["item"], "url", array()), array("page:" => ""));
                echo "'>";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a></li>
                    \t\t\t\t";
            } else {
                // line 57
                echo "                   \t\t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='";
                echo $this->getAttribute($context["item"], "url", array());
                echo "'>";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a>/li>
                \t\t\t\t\t";
            }
            // line 59
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                            </ul></div>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </header>
        ";
    }

    // line 68
    public function block_navigation($context, array $blocks = array())
    {
        // line 69
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "        ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "            <div class='content-wrapper'>
                <div class='gdlr-content'>

                    ";
        // line 76
        $this->displayBlock('masterslider', $context, $blocks);
        // line 79
        echo "
                    ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "                    </div>
                </div>
            ";
    }

    // line 76
    public function block_masterslider($context, array $blocks = array())
    {
        // line 77
        echo "                        ";
        $this->loadTemplate("partials/masterslider.html.twig", "partials/base.html.twig", 77)->display($context);
        // line 78
        echo "                    ";
    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "                ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 86)->display($context);
        // line 87
        echo "            ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 87,  300 => 86,  297 => 85,  292 => 80,  288 => 78,  285 => 77,  282 => 76,  276 => 81,  274 => 80,  271 => 79,  269 => 76,  264 => 73,  261 => 72,  257 => 70,  254 => 69,  251 => 68,  241 => 60,  235 => 59,  227 => 57,  217 => 55,  214 => 54,  210 => 53,  200 => 48,  196 => 47,  188 => 41,  185 => 40,  181 => 29,  178 => 28,  175 => 27,  172 => 26,  169 => 25,  166 => 24,  162 => 21,  159 => 20,  156 => 19,  153 => 18,  150 => 17,  147 => 16,  144 => 15,  141 => 14,  136 => 35,  132 => 33,  130 => 32,  124 => 30,  122 => 24,  116 => 22,  114 => 14,  110 => 13,  103 => 9,  100 => 8,  98 => 7,  90 => 6,  87 => 5,  84 => 4,  76 => 88,  74 => 85,  71 => 84,  69 => 72,  66 => 71,  64 => 68,  61 => 67,  59 => 40,  54 => 38,  51 => 37,  49 => 4,  31 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1' id='Merriweather-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Arvo%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=3.9.1' id='Arvo-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'/>
        <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
        {% block stylesheets %}
            {% do assets.addCss('theme://css/widget_css_2_bundle.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/lightbox.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
                {% do assets.addCss('theme://css/ie.css') %}
            {% endif %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.add('theme://js/jquery-migrate-1.2.1.min.js') %}
            {% do assets.add('theme://js/lightbox.min.js') %}
            {% do assets.add('theme://js/script.js') %}
        {% endblock %}
        {{ assets.js() }}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        {% endif %}

    {% endblock head %}
</head>
<body id=\"top\" class=\"page page-template-default {{ page.header.body_classes }}\">
    <div class=\"body-wrapper  float-menu gdlr-pattern-background\">
        {% block header %}
            <header class='gdlr-header-wrapper'>
                <div class='gdlr-logo-container container'>
                    <div class='gdlr-logo-wrapper'>
                        <div class='gdlr-logo'>
                            <div class='header section' id='header'><div class='widget Header' id='Header1'>
                                <div id='header-inner'>
                                    <a href='{{ base_url_absolute }}' style='display: block'>
                                        <img id='Header1_headerimg' src='{{ theme_url }}/images/logo.png' style='display: block' alt='{{ site.title }}' />
                                    </a>
                                </div>
                            </div></div>
                            <div class='gdlr-responsive-navigation dl-menuwrapper' id='gdlr-responsive-navigation'><button class='dl-trigger'>Open Menu</button><ul class='dl-menu gdlr-main-mobile-menu' id='menu-main-menu'>
                                {% for item in site.mainmenu %}
                                    {% if item.url | contains('page:') %}
                    \t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='{{ base_url_absolute }}/{{ item.url|replace({\"page:\":''}) }}'>{{ item.text }}</a></li>
                    \t\t\t\t{% else %}
                   \t\t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='{{ item.url }}'>{{ item.text }}</a>/li>
                \t\t\t\t\t{% endif %}
                                {% endfor %}
                            </ul></div>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </header>
        {% endblock %}

        {% block navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block body %}
            <div class='content-wrapper'>
                <div class='gdlr-content'>

                    {% block masterslider %}
                        {% include 'partials/masterslider.html.twig' %}
                    {% endblock %}

                    {% block content %}{% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block footer %}
                {% include 'partials/footer.html.twig' %}
            {% endblock %}
        </div>

    </body>
    </html>
", "partials/base.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/partials/base.html.twig");
    }
}
