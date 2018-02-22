<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_8df6f57b3a4a2f7cce7d8b25120a92446cfc72cd6342d2cf8ebf94307e3b2d06 extends Twig_Template
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
        $__internal_81f30c45007e5f490be331a65070048acc64b462e4066c1d41dcb162083b6055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f30c45007e5f490be331a65070048acc64b462e4066c1d41dcb162083b6055->enter($__internal_81f30c45007e5f490be331a65070048acc64b462e4066c1d41dcb162083b6055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_859390eb0ba7c142163b5a3d3d6cbb21747e045782f72428c2d4a1c5c21a36fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_859390eb0ba7c142163b5a3d3d6cbb21747e045782f72428c2d4a1c5c21a36fc->enter($__internal_859390eb0ba7c142163b5a3d3d6cbb21747e045782f72428c2d4a1c5c21a36fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_81f30c45007e5f490be331a65070048acc64b462e4066c1d41dcb162083b6055->leave($__internal_81f30c45007e5f490be331a65070048acc64b462e4066c1d41dcb162083b6055_prof);

        
        $__internal_859390eb0ba7c142163b5a3d3d6cbb21747e045782f72428c2d4a1c5c21a36fc->leave($__internal_859390eb0ba7c142163b5a3d3d6cbb21747e045782f72428c2d4a1c5c21a36fc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/var/www/html/ak_immo/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}
