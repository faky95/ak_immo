<?php

/* AKImmobilierBundle:Front:reserver.html.twig */
class __TwigTemplate_d7379ccf6659f80de7f900235a428b1e710c5236898ab882e58916625f91c08d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AKImmobilierBundle:Front:reserver.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86e8c2c567751009637ccca9255da998fd2f9ca0ec3af010cdb4540222fb6d3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86e8c2c567751009637ccca9255da998fd2f9ca0ec3af010cdb4540222fb6d3c->enter($__internal_86e8c2c567751009637ccca9255da998fd2f9ca0ec3af010cdb4540222fb6d3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:reserver.html.twig"));

        $__internal_4e609462ee599fdd38d63ec97d2310cb4200a1c3bd705d85a07aabe510e8d101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e609462ee599fdd38d63ec97d2310cb4200a1c3bd705d85a07aabe510e8d101->enter($__internal_4e609462ee599fdd38d63ec97d2310cb4200a1c3bd705d85a07aabe510e8d101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86e8c2c567751009637ccca9255da998fd2f9ca0ec3af010cdb4540222fb6d3c->leave($__internal_86e8c2c567751009637ccca9255da998fd2f9ca0ec3af010cdb4540222fb6d3c_prof);

        
        $__internal_4e609462ee599fdd38d63ec97d2310cb4200a1c3bd705d85a07aabe510e8d101->leave($__internal_4e609462ee599fdd38d63ec97d2310cb4200a1c3bd705d85a07aabe510e8d101_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd4d86487d839e96722f174217ef72d6f5155f750c649ce1d42108ef2aff6aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4d86487d839e96722f174217ef72d6f5155f750c649ce1d42108ef2aff6aad->enter($__internal_dd4d86487d839e96722f174217ef72d6f5155f750c649ce1d42108ef2aff6aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_268c68606db88ab672d63f0cd974d7a40eeea157da4cd93823474e7a5fb9a8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_268c68606db88ab672d63f0cd974d7a40eeea157da4cd93823474e7a5fb9a8b5->enter($__internal_268c68606db88ab672d63f0cd974d7a40eeea157da4cd93823474e7a5fb9a8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo " 
";
        // line 12
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_268c68606db88ab672d63f0cd974d7a40eeea157da4cd93823474e7a5fb9a8b5->leave($__internal_268c68606db88ab672d63f0cd974d7a40eeea157da4cd93823474e7a5fb9a8b5_prof);

        
        $__internal_dd4d86487d839e96722f174217ef72d6f5155f750c649ce1d42108ef2aff6aad->leave($__internal_dd4d86487d839e96722f174217ef72d6f5155f750c649ce1d42108ef2aff6aad_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_98b44e4dd1720421ff5e5416175673f6442621c3c30f00ac224ea780772527a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b44e4dd1720421ff5e5416175673f6442621c3c30f00ac224ea780772527a0->enter($__internal_98b44e4dd1720421ff5e5416175673f6442621c3c30f00ac224ea780772527a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_edf421dd794e04c9f2693194e8b19f98136c3a0ca94203fbdcb2d17233c2d412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf421dd794e04c9f2693194e8b19f98136c3a0ca94203fbdcb2d17233c2d412->enter($__internal_edf421dd794e04c9f2693194e8b19f98136c3a0ca94203fbdcb2d17233c2d412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 34
        echo "                          ";
        echo " 
                        ";
        // line 45
        echo "                        ";
        // line 48
        echo "                          ";
        echo " 
                        ";
        
        $__internal_edf421dd794e04c9f2693194e8b19f98136c3a0ca94203fbdcb2d17233c2d412->leave($__internal_edf421dd794e04c9f2693194e8b19f98136c3a0ca94203fbdcb2d17233c2d412_prof);

        
        $__internal_98b44e4dd1720421ff5e5416175673f6442621c3c30f00ac224ea780772527a0->leave($__internal_98b44e4dd1720421ff5e5416175673f6442621c3c30f00ac224ea780772527a0_prof);

    }

    public function getTemplateName()
    {
        return "AKImmobilierBundle:Front:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 48,  76 => 45,  72 => 34,  54 => 12,  50 => 11,  41 => 10,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{# {% block style %}
     <style>
        h1{
            text-align:center;    
        }
    </style> 
{% endblock %} #}
{% block body %}
{{form(form)}} 
{% block main %}
{#
<div class=\"contact-us container\">
            <div class=\"row\">
                <div class=\"contact-form span6\">
                    <p><h1>INSCRIPTION</h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                     <label for=\"name\" class=\"nameLabel\">Name</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your name...\">
                         <label for=\"numpiece\" class=\"numpieceLabel\">Numero CNI</label>
                          <input id=\"numpiece\" type=\"text\" name=\"numpiece\" placeholder=\"Enter your CNI number...\">
                         <label for=\"tel\" class=\"telLabel\">TEL</label>
                          <input id=\"name\" type=\"text\" name=\"tel\" placeholder=\"Enter your phone ...\">
                        <label for=\"address\" class=\"addressLabel\">Address</label>
                          <input id=\"name\" type=\"text\" name=\"adresse\" placeholder=\"Enter your address...\">
                        <label for=\"email\" class=\"emailLabel\">Email</label>
                          <input id=\"email\" type=\"email\" name=\"email\" placeholder=\"Enter your email...\">
                        <label for=\"login\" class=\"loginLabel\">Login</label>
                          <input id=\"login\" type=\"text\" name=\"login\" placeholder=\"Enter your login...\">
                        <label for=\"password\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         {# <label for=\"message\" class=\"messageLabel\">Message</label> #}
                          {# <textarea id=\"message\" name=\"message\" placeholder=\"Your message...\"></textarea> #} 
                        {# <input type=\"submit\" name=\"envoyer\" value=\"Envoyer\">
                    </form>
                </div>
                <div class=\"contact-form span6\">
                <p><h1>AUTHENTIFICATION<h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Username/Email</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your username/password...\">
                        {# <label for=\"email\" class=\"emailLabel\">Email</label>
                          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"Enter your email...\"> #}
                        {# <label for=\"subject\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         {# <label for=\"message\" class=\"messageLabel\">Message</label> #}
                          {# <textarea id=\"message\" name=\"message\" placeholder=\"Your message...\"></textarea> #} 
                        {# <button type=\"submit\">Send</button>
                    </form>
                </div>
            </div> #}
{# </div>      #}
{% endblock %}
{% endblock %} ", "AKImmobilierBundle:Front:reserver.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/reserver.html.twig");
    }
}
