<?php

/* AKImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_74eeee41c42b4471a668ca4a4b59d35c7dbda58c28acf77d4e236bb2c0a4ca55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:search_bien.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6028e57df3cd8d91e1dc2b906dc3c9309b5963ae230d05bf09c4233f82dedf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6028e57df3cd8d91e1dc2b906dc3c9309b5963ae230d05bf09c4233f82dedf7->enter($__internal_a6028e57df3cd8d91e1dc2b906dc3c9309b5963ae230d05bf09c4233f82dedf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_dd24ce15ac822c2c548b8a073df938bcdcce387b5244f84f2c5d25bcb6fe091d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd24ce15ac822c2c548b8a073df938bcdcce387b5244f84f2c5d25bcb6fe091d->enter($__internal_dd24ce15ac822c2c548b8a073df938bcdcce387b5244f84f2c5d25bcb6fe091d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6028e57df3cd8d91e1dc2b906dc3c9309b5963ae230d05bf09c4233f82dedf7->leave($__internal_a6028e57df3cd8d91e1dc2b906dc3c9309b5963ae230d05bf09c4233f82dedf7_prof);

        
        $__internal_dd24ce15ac822c2c548b8a073df938bcdcce387b5244f84f2c5d25bcb6fe091d->leave($__internal_dd24ce15ac822c2c548b8a073df938bcdcce387b5244f84f2c5d25bcb6fe091d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b903f029431f73353c292edbb9a78bb532dcbe0fe1f83d14a699de08824b216e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b903f029431f73353c292edbb9a78bb532dcbe0fe1f83d14a699de08824b216e->enter($__internal_b903f029431f73353c292edbb9a78bb532dcbe0fe1f83d14a699de08824b216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5930ffd647754fce43e3568592501823794d7d715986271bfd8685778d454b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5930ffd647754fce43e3568592501823794d7d715986271bfd8685778d454b04->enter($__internal_5930ffd647754fce43e3568592501823794d7d715986271bfd8685778d454b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<div class=\"col-12 \">

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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 22
            echo "<tr>

<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "localite", array()), "html", null, true);
            echo "</td>
<td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "typebien", array()), "html", null, true);
            echo "</td>
 <td>
    
 ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["bien"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 32
                echo " ";
                // line 33
                echo "   <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("assets/img/photo/" . $this->getAttribute($context["image"], "image", array()))), "html", null, true);
                echo "\"class=\"img\">

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
 </td> 
 <td>
 <a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservateBien");
            echo "\">RESERVER</a>
 </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</table>
</div>

</div>
";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
";
        
        $__internal_5930ffd647754fce43e3568592501823794d7d715986271bfd8685778d454b04->leave($__internal_5930ffd647754fce43e3568592501823794d7d715986271bfd8685778d454b04_prof);

        
        $__internal_b903f029431f73353c292edbb9a78bb532dcbe0fe1f83d14a699de08824b216e->leave($__internal_b903f029431f73353c292edbb9a78bb532dcbe0fe1f83d14a699de08824b216e_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f11ab90c7620f7d32da4a97fdcc9f6024bf67deb5fe2cfa6e646505a3e4d42d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11ab90c7620f7d32da4a97fdcc9f6024bf67deb5fe2cfa6e646505a3e4d42d7->enter($__internal_f11ab90c7620f7d32da4a97fdcc9f6024bf67deb5fe2cfa6e646505a3e4d42d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a4f9d90bf5003cfca7b48be360b66442035e0fd5cb03170efe713d27bb411b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f9d90bf5003cfca7b48be360b66442035e0fd5cb03170efe713d27bb411b68->enter($__internal_a4f9d90bf5003cfca7b48be360b66442035e0fd5cb03170efe713d27bb411b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "     <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jsakimo/akimo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a4f9d90bf5003cfca7b48be360b66442035e0fd5cb03170efe713d27bb411b68->leave($__internal_a4f9d90bf5003cfca7b48be360b66442035e0fd5cb03170efe713d27bb411b68_prof);

        
        $__internal_f11ab90c7620f7d32da4a97fdcc9f6024bf67deb5fe2cfa6e646505a3e4d42d7->leave($__internal_f11ab90c7620f7d32da4a97fdcc9f6024bf67deb5fe2cfa6e646505a3e4d42d7_prof);

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
        return array (  166 => 58,  157 => 57,  146 => 60,  144 => 57,  138 => 53,  118 => 39,  113 => 36,  103 => 33,  101 => 32,  97 => 31,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  71 => 22,  67 => 21,  50 => 6,  41 => 5,  11 => 2,);
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
 <td>
 <a href=\"{{path('reservateBien')}}\">RESERVER</a>
 </td>
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
{% block javascripts %}
     <script type=\"text/javascript\" src=\"{{ asset('jsakimo/akimo.js') }}\"></script>
{% endblock %}

{% endblock %}


", "AKImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}
