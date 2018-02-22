<?php

/* AKImmobilierBundle:Front:type.html.twig */
class __TwigTemplate_951b2ec54c5b5d3716a16b727a19975aef51a015d7164b1215bfd5353c45dc03 extends Twig_Template
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
        $__internal_ef933aca098231e8fce61557dacd045de57f1ce3ffa7ae98addaa9c6479a6e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef933aca098231e8fce61557dacd045de57f1ce3ffa7ae98addaa9c6479a6e14->enter($__internal_ef933aca098231e8fce61557dacd045de57f1ce3ffa7ae98addaa9c6479a6e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:type.html.twig"));

        $__internal_b1b2ec5863dd066e769277aef7dfddaf03416e3b3cb85a982e5b8463ef6e31b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b2ec5863dd066e769277aef7dfddaf03416e3b3cb85a982e5b8463ef6e31b2->enter($__internal_b1b2ec5863dd066e769277aef7dfddaf03416e3b3cb85a982e5b8463ef6e31b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:type.html.twig"));

        // line 1
        echo "    <select>
        ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 3
            echo "            <option value=\"\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelle", array()), "html", null, true);
            echo " </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "    </select> 

                     ";
        
        $__internal_ef933aca098231e8fce61557dacd045de57f1ce3ffa7ae98addaa9c6479a6e14->leave($__internal_ef933aca098231e8fce61557dacd045de57f1ce3ffa7ae98addaa9c6479a6e14_prof);

        
        $__internal_b1b2ec5863dd066e769277aef7dfddaf03416e3b3cb85a982e5b8463ef6e31b2->leave($__internal_b1b2ec5863dd066e769277aef7dfddaf03416e3b3cb85a982e5b8463ef6e31b2_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <select>
        {% for type in types %}
            <option value=\"\"> {{type.libelle}} </option>
        {% endfor %}
    </select> 

                     {# {% extends \"::base.html.twig\" %}

{% block title %}Formulaire{% endblock %}

{% block body %}
<h1 style=\"text-align:center;\">Form</h1>
<from>
{{form(form)}}
</form>

{% endblock %} #}", "AKImmobilierBundle:Front:type.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/type.html.twig");
    }
}
