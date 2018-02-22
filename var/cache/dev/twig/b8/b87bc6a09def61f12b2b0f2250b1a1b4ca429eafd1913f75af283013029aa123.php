<?php

/* AKImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_74eeee41c42b4471a668ca4a4b59d35c7dbda58c28acf77d4e236bb2c0a4ca55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:search_bien.html.twig", 3);
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
        $__internal_a609836cc9acff903a33e7d5052e6bb990e9c04b002f1be5d35f940f1c67113b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a609836cc9acff903a33e7d5052e6bb990e9c04b002f1be5d35f940f1c67113b->enter($__internal_a609836cc9acff903a33e7d5052e6bb990e9c04b002f1be5d35f940f1c67113b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_d80bf6a0b1103d3debb59072dbdbd958c947fb6adc5610c6418760d18e0d3c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d80bf6a0b1103d3debb59072dbdbd958c947fb6adc5610c6418760d18e0d3c26->enter($__internal_d80bf6a0b1103d3debb59072dbdbd958c947fb6adc5610c6418760d18e0d3c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a609836cc9acff903a33e7d5052e6bb990e9c04b002f1be5d35f940f1c67113b->leave($__internal_a609836cc9acff903a33e7d5052e6bb990e9c04b002f1be5d35f940f1c67113b_prof);

        
        $__internal_d80bf6a0b1103d3debb59072dbdbd958c947fb6adc5610c6418760d18e0d3c26->leave($__internal_d80bf6a0b1103d3debb59072dbdbd958c947fb6adc5610c6418760d18e0d3c26_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_68501c9e54bf1795516a338afa741492ff10d6ebfa6da66e359ff821cec70797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68501c9e54bf1795516a338afa741492ff10d6ebfa6da66e359ff821cec70797->enter($__internal_68501c9e54bf1795516a338afa741492ff10d6ebfa6da66e359ff821cec70797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb7a7c08df43ed90c3ef767ec5e674d9d4ddf8615df1665cc5af4adbee01682d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7a7c08df43ed90c3ef767ec5e674d9d4ddf8615df1665cc5af4adbee01682d->enter($__internal_bb7a7c08df43ed90c3ef767ec5e674d9d4ddf8615df1665cc5af4adbee01682d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb7a7c08df43ed90c3ef767ec5e674d9d4ddf8615df1665cc5af4adbee01682d->leave($__internal_bb7a7c08df43ed90c3ef767ec5e674d9d4ddf8615df1665cc5af4adbee01682d_prof);

        
        $__internal_68501c9e54bf1795516a338afa741492ff10d6ebfa6da66e359ff821cec70797->leave($__internal_68501c9e54bf1795516a338afa741492ff10d6ebfa6da66e359ff821cec70797_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:search_bien.html.twig";
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

", "AKImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
