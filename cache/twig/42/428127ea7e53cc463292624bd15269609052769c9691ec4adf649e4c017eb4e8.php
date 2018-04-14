<?php

/* translate.html.twig */
class __TwigTemplate_4e408e063e72fd88c699751e5e03f41c2cf34fc5bebadfc049d0b3418083f67e extends Twig_Template
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
        <div id=\"google_translate_element\"></div>
        <script type=\"text/javascript\">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      }
      </script>
      <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "translate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
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
        <div id=\"google_translate_element\"></div>
        <script type=\"text/javascript\">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
      }
      </script>
      <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
  </div>
</div>
", "translate.html.twig", "/var/www/itsreallynot.com/user/themes/soraarticle/templates/translate.html.twig");
    }
}
