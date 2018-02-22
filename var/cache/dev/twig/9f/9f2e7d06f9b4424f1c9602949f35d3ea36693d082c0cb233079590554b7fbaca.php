<?php

/* AKImmobilierBundle:Front:details.html.twig */
class __TwigTemplate_2938bb1250d41da4a2038a0c0970669fcdd93d7a8241725b700cbe5aec2fce7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:details.html.twig", 3);
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
        $__internal_a9697ebd7844e3daf6fe1b66c3888ea1963a331526680774a1d88227b40653fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9697ebd7844e3daf6fe1b66c3888ea1963a331526680774a1d88227b40653fc->enter($__internal_a9697ebd7844e3daf6fe1b66c3888ea1963a331526680774a1d88227b40653fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:details.html.twig"));

        $__internal_5dccacf4e68df8a545ec557605bea81885f3d1d74fb1746b72c1d42d920b300e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dccacf4e68df8a545ec557605bea81885f3d1d74fb1746b72c1d42d920b300e->enter($__internal_5dccacf4e68df8a545ec557605bea81885f3d1d74fb1746b72c1d42d920b300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9697ebd7844e3daf6fe1b66c3888ea1963a331526680774a1d88227b40653fc->leave($__internal_a9697ebd7844e3daf6fe1b66c3888ea1963a331526680774a1d88227b40653fc_prof);

        
        $__internal_5dccacf4e68df8a545ec557605bea81885f3d1d74fb1746b72c1d42d920b300e->leave($__internal_5dccacf4e68df8a545ec557605bea81885f3d1d74fb1746b72c1d42d920b300e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2cba2d095e80791d8d39b4de3caecd77f09b818e2652afe3a1d35d1e1e0fc0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2cba2d095e80791d8d39b4de3caecd77f09b818e2652afe3a1d35d1e1e0fc0c->enter($__internal_a2cba2d095e80791d8d39b4de3caecd77f09b818e2652afe3a1d35d1e1e0fc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fb92ae3347e3108533f3fb9b58d0929603e7e040d7b0b59fe3e0fd7aa365295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fb92ae3347e3108533f3fb9b58d0929603e7e040d7b0b59fe3e0fd7aa365295->enter($__internal_9fb92ae3347e3108533f3fb9b58d0929603e7e040d7b0b59fe3e0fd7aa365295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " 
 <h1> welcome </h1>

<table id=\"table\" >
<tr>

<th>nom</th>
<th>prix</th>
<th>description</th>
<th>localite</th>
<th>type</th>
<th>Image</th>

</tr>
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 21
            echo "<tr>

<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
            echo "</td>
<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
 <td>
    
 ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 31
                echo " ";
                // line 32
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
 </td>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
 

";
        
        $__internal_9fb92ae3347e3108533f3fb9b58d0929603e7e040d7b0b59fe3e0fd7aa365295->leave($__internal_9fb92ae3347e3108533f3fb9b58d0929603e7e040d7b0b59fe3e0fd7aa365295_prof);

        
        $__internal_a2cba2d095e80791d8d39b4de3caecd77f09b818e2652afe3a1d35d1e1e0fc0c->leave($__internal_a2cba2d095e80791d8d39b4de3caecd77f09b818e2652afe3a1d35d1e1e0fc0c_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 38,  110 => 35,  100 => 32,  98 => 31,  94 => 30,  88 => 27,  84 => 26,  80 => 25,  76 => 24,  72 => 23,  68 => 21,  64 => 20,  40 => 6,  11 => 3,);
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
 <h1> welcome </h1>

<table id=\"table\" >
<tr>

<th>nom</th>
<th>prix</th>
<th>description</th>
<th>localite</th>
<th>type</th>
<th>Image</th>

</tr>
{%for bien in biens %}
<tr>

<td>{{bien.nombien}}</td>
<td>{{bien.prixlocation }}</td>
<td>{{bien.description}}</td>
<td>{{bien.localite}}</td>
<td>{{bien.typebien}}</td>
 <td>
    
 {% for image in bien.images %}
 {# {{image.image}} #}
   <img src=\"{{asset('assets/img/photo/'~image.image)}}\"class=\"img\">

{% endfor %}

 </td>
 {% endfor %}
 
 

{% endblock %}

", "AKImmobilierBundle:Front:details.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/details.html.twig");
    }
}
