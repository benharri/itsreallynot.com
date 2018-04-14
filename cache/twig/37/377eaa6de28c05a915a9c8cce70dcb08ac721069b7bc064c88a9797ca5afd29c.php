<?php

/* forms/fields/uniqueid/uniqueid.html.twig */
class __TwigTemplate_23c405c2c6bbaf21841074c335b03163779083c14f90fd534e6fe6993cf4d772 extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__unique_form_id__\" value=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(20);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/uniqueid/uniqueid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"hidden\" name=\"__unique_form_id__\" value=\"{{ random_string(20) }}\" />", "forms/fields/uniqueid/uniqueid.html.twig", "/var/www/itsreallynot.com/user/plugins/form/templates/forms/fields/uniqueid/uniqueid.html.twig");
    }
}
