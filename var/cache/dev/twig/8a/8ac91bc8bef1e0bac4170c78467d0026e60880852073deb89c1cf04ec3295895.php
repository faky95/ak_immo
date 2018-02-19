<?php

/* AKImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_b15b76e137b646a1256ac523775b150291e6d3f7741b73e66d434546f8193972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

<<<<<<< HEAD
        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:search_bien.html.twig", 2);
        $this->blocks = array(
=======
        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
>>>>>>> 54fad57818febd2e162c94e798b03fbe272cecff
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_174d046b8db937121db6cf6ef8213f4a7b478c4b679a082493f0fb03095b02b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_174d046b8db937121db6cf6ef8213f4a7b478c4b679a082493f0fb03095b02b7->enter($__internal_174d046b8db937121db6cf6ef8213f4a7b478c4b679a082493f0fb03095b02b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_399546cbfa6f8ac142e9aaf2383f48c4d2491dab76823ae8905854d9365504e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399546cbfa6f8ac142e9aaf2383f48c4d2491dab76823ae8905854d9365504e7->enter($__internal_399546cbfa6f8ac142e9aaf2383f48c4d2491dab76823ae8905854d9365504e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_174d046b8db937121db6cf6ef8213f4a7b478c4b679a082493f0fb03095b02b7->leave($__internal_174d046b8db937121db6cf6ef8213f4a7b478c4b679a082493f0fb03095b02b7_prof);

        
        $__internal_399546cbfa6f8ac142e9aaf2383f48c4d2491dab76823ae8905854d9365504e7->leave($__internal_399546cbfa6f8ac142e9aaf2383f48c4d2491dab76823ae8905854d9365504e7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e37e35071c5bf54797dcb01714523a1f8c5310eab42e279d1ddfd0aecefaa1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e37e35071c5bf54797dcb01714523a1f8c5310eab42e279d1ddfd0aecefaa1d->enter($__internal_3e37e35071c5bf54797dcb01714523a1f8c5310eab42e279d1ddfd0aecefaa1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f66e82654e1b150c2519bf2fb4cc9a6a21f8b0e795e0b1c992b9516d89bb3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f66e82654e1b150c2519bf2fb4cc9a6a21f8b0e795e0b1c992b9516d89bb3ae->enter($__internal_8f66e82654e1b150c2519bf2fb4cc9a6a21f8b0e795e0b1c992b9516d89bb3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<div class=\"col-12 \">

<table border=\"2\" >
<tr>

<th>nom</th>
<th>prix</th>
<th>description</th>
<th>etat</th>

</tr>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 20
            echo "<tr>

<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixlocation", array()), "html", null, true);
            echo "</td>
<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "description", array()), "html", null, true);
            echo "</td>

<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "etat", array()), "html", null, true);
            echo "</td>

</tr>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "</table>
</div>

</div>


";
        
        $__internal_8f66e82654e1b150c2519bf2fb4cc9a6a21f8b0e795e0b1c992b9516d89bb3ae->leave($__internal_8f66e82654e1b150c2519bf2fb4cc9a6a21f8b0e795e0b1c992b9516d89bb3ae_prof);

        
        $__internal_3e37e35071c5bf54797dcb01714523a1f8c5310eab42e279d1ddfd0aecefaa1d->leave($__internal_3e37e35071c5bf54797dcb01714523a1f8c5310eab42e279d1ddfd0aecefaa1d_prof);
=======
        $__internal_a7a5c7d13570cf5f56a9714a153c38d09e92b74a8710145a354dddd48b6b611b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7a5c7d13570cf5f56a9714a153c38d09e92b74a8710145a354dddd48b6b611b->enter($__internal_a7a5c7d13570cf5f56a9714a153c38d09e92b74a8710145a354dddd48b6b611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_98b31daa36b164cc4ca7cd0a72b744e3c808e9f3514f240694e584157202589e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b31daa36b164cc4ca7cd0a72b744e3c808e9f3514f240694e584157202589e->enter($__internal_98b31daa36b164cc4ca7cd0a72b744e3c808e9f3514f240694e584157202589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7a5c7d13570cf5f56a9714a153c38d09e92b74a8710145a354dddd48b6b611b->leave($__internal_a7a5c7d13570cf5f56a9714a153c38d09e92b74a8710145a354dddd48b6b611b_prof);

        
        $__internal_98b31daa36b164cc4ca7cd0a72b744e3c808e9f3514f240694e584157202589e->leave($__internal_98b31daa36b164cc4ca7cd0a72b744e3c808e9f3514f240694e584157202589e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d009f79dabc917412beffe9ed665b8266a5e0e9889fa9664dc119a55e51e8a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d009f79dabc917412beffe9ed665b8266a5e0e9889fa9664dc119a55e51e8a9d->enter($__internal_d009f79dabc917412beffe9ed665b8266a5e0e9889fa9664dc119a55e51e8a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_591c62ce750c05d4776a36af3814857c005f0f504e97f6faa67a4c7be44f9ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591c62ce750c05d4776a36af3814857c005f0f504e97f6faa67a4c7be44f9ee7->enter($__internal_591c62ce750c05d4776a36af3814857c005f0f504e97f6faa67a4c7be44f9ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AKImmobilierBundle:Front:searchBien";
        
        $__internal_591c62ce750c05d4776a36af3814857c005f0f504e97f6faa67a4c7be44f9ee7->leave($__internal_591c62ce750c05d4776a36af3814857c005f0f504e97f6faa67a4c7be44f9ee7_prof);

        
        $__internal_d009f79dabc917412beffe9ed665b8266a5e0e9889fa9664dc119a55e51e8a9d->leave($__internal_d009f79dabc917412beffe9ed665b8266a5e0e9889fa9664dc119a55e51e8a9d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5566d8d4e34b33f2b23d374aab343906d0b0321367465c67042e82c0d24459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5566d8d4e34b33f2b23d374aab343906d0b0321367465c67042e82c0d24459->enter($__internal_6e5566d8d4e34b33f2b23d374aab343906d0b0321367465c67042e82c0d24459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f84f84dc530b42685913f1ebdccac9a0b0b7c3f439fd5d88f0dc8fb9ebc339b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f84f84dc530b42685913f1ebdccac9a0b0b7c3f439fd5d88f0dc8fb9ebc339b->enter($__internal_6f84f84dc530b42685913f1ebdccac9a0b0b7c3f439fd5d88f0dc8fb9ebc339b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Front:searchBien page</h1>
";
        
        $__internal_6f84f84dc530b42685913f1ebdccac9a0b0b7c3f439fd5d88f0dc8fb9ebc339b->leave($__internal_6f84f84dc530b42685913f1ebdccac9a0b0b7c3f439fd5d88f0dc8fb9ebc339b_prof);

        
        $__internal_6e5566d8d4e34b33f2b23d374aab343906d0b0321367465c67042e82c0d24459->leave($__internal_6e5566d8d4e34b33f2b23d374aab343906d0b0321367465c67042e82c0d24459_prof);
>>>>>>> 54fad57818febd2e162c94e798b03fbe272cecff

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
<<<<<<< HEAD
        return array (  97 => 32,  85 => 26,  80 => 24,  76 => 23,  72 => 22,  68 => 20,  64 => 19,  49 => 6,  40 => 5,  11 => 2,);
=======
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
>>>>>>> 54fad57818febd2e162c94e798b03fbe272cecff
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
<<<<<<< HEAD
        return new Twig_Source("
{% extends \"::base.html.twig\" %}


{% block body %}
<div class=\"container\">
<h1 style=\"text-align:center;margin-top:10px;\"> Voici la liste des Biens </h1>
<div class=\"col-12 \">

<table border=\"2\" >
<tr>

<th>nom</th>
<th>prix</th>
<th>description</th>
<th>etat</th>

</tr>
{%for bien in biens %}
<tr>

<td>{{bien.nombien}}</td>
<td>{{bien.prixlocation }}</td>
<td>{{bien.description}}</td>

<td>{{bien.etat}}</td>

</tr>


{%endfor%}
</table>
</div>

</div>


{% endblock %}", "AKImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
=======
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AKImmobilierBundle:Front:searchBien{% endblock %}

{% block body %}
<h1>Welcome to the Front:searchBien page</h1>
{% endblock %}
", "AKImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
>>>>>>> 54fad57818febd2e162c94e798b03fbe272cecff
    }
}
