<?php

/* AKImmobilierBundle:Front:image.html.twig */
class __TwigTemplate_9b809c11494b4408e392e279e3c36b46f3e42ec1622717765a0c383e0954da22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:image.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c46ceb72492ddf536e9363aae9d6358b2b00ef02603da003019f85f388462423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c46ceb72492ddf536e9363aae9d6358b2b00ef02603da003019f85f388462423->enter($__internal_c46ceb72492ddf536e9363aae9d6358b2b00ef02603da003019f85f388462423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:image.html.twig"));

        $__internal_73e09300e04fc4bf656b4d04ee123222347ce89f9280f7c985f917577e65793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e09300e04fc4bf656b4d04ee123222347ce89f9280f7c985f917577e65793d->enter($__internal_73e09300e04fc4bf656b4d04ee123222347ce89f9280f7c985f917577e65793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:image.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c46ceb72492ddf536e9363aae9d6358b2b00ef02603da003019f85f388462423->leave($__internal_c46ceb72492ddf536e9363aae9d6358b2b00ef02603da003019f85f388462423_prof);

        
        $__internal_73e09300e04fc4bf656b4d04ee123222347ce89f9280f7c985f917577e65793d->leave($__internal_73e09300e04fc4bf656b4d04ee123222347ce89f9280f7c985f917577e65793d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca4c99fc4533b34c311a4cb970220ac6a7452d059b1daca795cb15eafb5bc5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4c99fc4533b34c311a4cb970220ac6a7452d059b1daca795cb15eafb5bc5b8->enter($__internal_ca4c99fc4533b34c311a4cb970220ac6a7452d059b1daca795cb15eafb5bc5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_752fbac6c5aca78905e89c0bca6eee5deb2a4257c63ed4544c0373ec3b5e49be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752fbac6c5aca78905e89c0bca6eee5deb2a4257c63ed4544c0373ec3b5e49be->enter($__internal_752fbac6c5aca78905e89c0bca6eee5deb2a4257c63ed4544c0373ec3b5e49be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<div class=\"col-12 \">

<table border=\"2\" >
<tr>

<th>id</th>
<th>image</th>
<th>bien</th>

</tr>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            echo "<tr>
";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "image", array()), "html", null, true);
            echo "
<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</td>
<td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
            echo "\" class=\"img\"> </td>
<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "bien", array()), "html", null, true);
            echo "</td>
<style>
.img
{
    width:200px;
}
</style>


</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "</table>
</div>

</div>


";
        
        $__internal_752fbac6c5aca78905e89c0bca6eee5deb2a4257c63ed4544c0373ec3b5e49be->leave($__internal_752fbac6c5aca78905e89c0bca6eee5deb2a4257c63ed4544c0373ec3b5e49be_prof);

        
        $__internal_ca4c99fc4533b34c311a4cb970220ac6a7452d059b1daca795cb15eafb5bc5b8->leave($__internal_ca4c99fc4533b34c311a4cb970220ac6a7452d059b1daca795cb15eafb5bc5b8_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  67 => 20,  63 => 19,  49 => 7,  40 => 6,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"::base.html.twig\" %}


{% block body %}
<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<div class=\"col-12 \">

<table border=\"2\" >
<tr>

<th>id</th>
<th>image</th>
<th>bien</th>

</tr>
{%for image in images %}
<tr>
{{image.image }}
<td>{{image.id}}</td>
<td><img src=\"{{asset('assets/img/photo/'~image.image) }}\" class=\"img\"> </td>
<td>{{image.bien}}</td>
<style>
.img
{
    width:200px;
}
</style>


</tr>


{%endfor%}
</table>
</div>

</div>


{% endblock %}

", "AKImmobilierBundle:Front:image.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/image.html.twig");
    }
}
