<?php

/* partials/footer.html.twig */
class __TwigTemplate_7b6ccecc0429b8d486a3a9f95f8ffd06debfaf3c3b0b5c45e95dcb61e64da0d3 extends Twig_Template
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
        echo "<footer class=\"footer-wrapper\">
    <div class=\"footer-container container\">
        <div class=\"footer-column four columns section\" id=\"footer-widget-1\">
            <div class=\"widget FollowByEmail\" id=\"FollowByEmail1\">
                <h2 class=\"title\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", array()), "title", array());
        echo "</h2>
                <div class=\"content\">
                    ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", array()), "text", array());
        echo "
                    <div class=\"follow-by-email-inner\">
                        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" onsubmit=\"window.open(&quot;https://feedburner.google.com/fb/a/mailverify?uri=";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", array()), "id", array());
        echo "&quot;, &quot;popupwindow&quot;, &quot;scrollbars=yes,width=550,height=520&quot;); return true\" target=\"popupwindow\">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class=\"follow-by-email-address\" name=\"email\" placeholder=\"Email address...\" type=\"text\">
                                        </td>
                                        <td>
                                            <input class=\"follow-by-email-submit\" type=\"submit\" value=\"Submit\">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input name=\"uri\" type=\"hidden\" value=\"";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", array()), "id", array());
        echo "\">
                            <input name=\"loc\" type=\"hidden\" value=\"en_US\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-2\">
            <div class=\"widget Label\" id=\"Label2\">
                <h2>";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "labels", array()), "title", array());
        echo "</h2>
                <div class=\"widget-content list-label-widget-content\">
                    <ul>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "labels", array()), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <li>
                                <a dir=\"ltr\" href=\"";
            // line 36
            echo $this->getAttribute($context["item"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "label", array());
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-3\">
            <div class=\"widget HTML\" id=\"HTML4\">
                <h2 class=\"title\">";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "title", array());
        echo "</h2>
                <div class=\"widget-content\">
                    ";
        // line 48
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", array()), "content", array());
        echo "
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"copyright-wrapper\">
        <div class=\"copyright-container container\">
            <div class=\"copyright-left\">
                ";
        // line 58
        if ($this->getAttribute(($context["site"] ?? null), "copyright", array())) {
            // line 59
            echo "                    ";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "text1", array());
            echo " © ";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "year", array());
            echo " <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "text2", array());
            echo "</a>
                ";
        }
        // line 61
        echo "                ";
        if ($this->getAttribute(($context["site"] ?? null), "copyright2", array())) {
            // line 62
            echo "                    ";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright2", array()), "text1", array());
            echo " <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright2", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright2", array()), "text2", array());
            echo "</a>
                ";
        }
        // line 64
        echo "            </div>
            <div class=\"copyright-right\">
                <span id=\"mycontent\">
                    Designed By <a href=\"http://www.soratemplates.com/\" target=\"_blank\" title=\"Blogger Templates\">Sora Templates</a> and <a href=\"http://mybloggerthemes.com/\" target=\"_blank\" title=\"Free Blogger Templates\">My Blogger Themes</a>
                </span>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 64,  131 => 62,  128 => 61,  116 => 59,  114 => 58,  101 => 48,  96 => 46,  87 => 39,  76 => 36,  73 => 35,  69 => 34,  63 => 31,  51 => 22,  35 => 9,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"footer-wrapper\">
    <div class=\"footer-container container\">
        <div class=\"footer-column four columns section\" id=\"footer-widget-1\">
            <div class=\"widget FollowByEmail\" id=\"FollowByEmail1\">
                <h2 class=\"title\">{{ site.feedburner.title }}</h2>
                <div class=\"content\">
                    {{ site.feedburner.text }}
                    <div class=\"follow-by-email-inner\">
                        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" onsubmit=\"window.open(&quot;https://feedburner.google.com/fb/a/mailverify?uri={{ site.feedburner.id }}&quot;, &quot;popupwindow&quot;, &quot;scrollbars=yes,width=550,height=520&quot;); return true\" target=\"popupwindow\">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class=\"follow-by-email-address\" name=\"email\" placeholder=\"Email address...\" type=\"text\">
                                        </td>
                                        <td>
                                            <input class=\"follow-by-email-submit\" type=\"submit\" value=\"Submit\">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input name=\"uri\" type=\"hidden\" value=\"{{ site.feedburner.id }}\">
                            <input name=\"loc\" type=\"hidden\" value=\"en_US\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-2\">
            <div class=\"widget Label\" id=\"Label2\">
                <h2>{{ site.labels.title }}</h2>
                <div class=\"widget-content list-label-widget-content\">
                    <ul>
                        {% for item in site.labels.items %}
                            <li>
                                <a dir=\"ltr\" href=\"{{ item.url }}\">{{ item.label }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-3\">
            <div class=\"widget HTML\" id=\"HTML4\">
                <h2 class=\"title\">{{ site.footer.title }}</h2>
                <div class=\"widget-content\">
                    {{ site.footer.content }}
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"copyright-wrapper\">
        <div class=\"copyright-container container\">
            <div class=\"copyright-left\">
                {% if site.copyright %}
                    {{ site.copyright.text1 }} © {{ site.copyright.year }} <a href=\"{{ site.copyright.url }}\">{{ site.copyright.text2}}</a>
                {% endif %}
                {% if site.copyright2 %}
                    {{ site.copyright2.text1 }} <a href=\"{{ site.copyright2.url }}\">{{ site.copyright2.text2}}</a>
                {% endif %}
            </div>
            <div class=\"copyright-right\">
                <span id=\"mycontent\">
                    Designed By <a href=\"http://www.soratemplates.com/\" target=\"_blank\" title=\"Blogger Templates\">Sora Templates</a> and <a href=\"http://mybloggerthemes.com/\" target=\"_blank\" title=\"Free Blogger Templates\">My Blogger Themes</a>
                </span>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</footer>", "partials/footer.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/partials/footer.html.twig");
    }
}
