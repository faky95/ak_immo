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
            'style' => array($this, 'block_style'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdeba7aec1ace2cdcbe39e74a7fcb686c760611e035f801a7dde88b2e568aafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdeba7aec1ace2cdcbe39e74a7fcb686c760611e035f801a7dde88b2e568aafd->enter($__internal_bdeba7aec1ace2cdcbe39e74a7fcb686c760611e035f801a7dde88b2e568aafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:reserver.html.twig"));

        $__internal_c50d15194f2a820da3417027c7715428ce31ba1ed10ada3a9b8c59d43c5d386b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50d15194f2a820da3417027c7715428ce31ba1ed10ada3a9b8c59d43c5d386b->enter($__internal_c50d15194f2a820da3417027c7715428ce31ba1ed10ada3a9b8c59d43c5d386b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKImmobilierBundle:Front:reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdeba7aec1ace2cdcbe39e74a7fcb686c760611e035f801a7dde88b2e568aafd->leave($__internal_bdeba7aec1ace2cdcbe39e74a7fcb686c760611e035f801a7dde88b2e568aafd_prof);

        
        $__internal_c50d15194f2a820da3417027c7715428ce31ba1ed10ada3a9b8c59d43c5d386b->leave($__internal_c50d15194f2a820da3417027c7715428ce31ba1ed10ada3a9b8c59d43c5d386b_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_e2178342405b9137a2b8d4c558662e0f72d634b2217b54c702b1c78479627a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2178342405b9137a2b8d4c558662e0f72d634b2217b54c702b1c78479627a1c->enter($__internal_e2178342405b9137a2b8d4c558662e0f72d634b2217b54c702b1c78479627a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_03d288cea26978199d2b6464674e2a452290751afaf05b6f8785d8afc5e14947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d288cea26978199d2b6464674e2a452290751afaf05b6f8785d8afc5e14947->enter($__internal_03d288cea26978199d2b6464674e2a452290751afaf05b6f8785d8afc5e14947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "     <style>
        h1{
            text-align:center;    
        }
    </style> 
";
        
        $__internal_03d288cea26978199d2b6464674e2a452290751afaf05b6f8785d8afc5e14947->leave($__internal_03d288cea26978199d2b6464674e2a452290751afaf05b6f8785d8afc5e14947_prof);

        
        $__internal_e2178342405b9137a2b8d4c558662e0f72d634b2217b54c702b1c78479627a1c->leave($__internal_e2178342405b9137a2b8d4c558662e0f72d634b2217b54c702b1c78479627a1c_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_df4c5859a783c305a6e1083f77a2de3a98c5ab80914a6155b30cf9a6fc45f281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4c5859a783c305a6e1083f77a2de3a98c5ab80914a6155b30cf9a6fc45f281->enter($__internal_df4c5859a783c305a6e1083f77a2de3a98c5ab80914a6155b30cf9a6fc45f281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7bafced0fba47454047f651392ea6af13909c8a4064affa353bb94198fbea920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bafced0fba47454047f651392ea6af13909c8a4064affa353bb94198fbea920->enter($__internal_7bafced0fba47454047f651392ea6af13909c8a4064affa353bb94198fbea920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "<div class=\"contact-us container\">
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
                         ";
        // line 32
        echo "                          ";
        echo " 
                        <input type=\"submit\" name=\"envoyer\" value=\"Envoyer\">
                    </form>
                </div>
                <div class=\"contact-form span6\">
                <p><h1>AUTHENTIFICATION<h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Username/Email</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your username/password...\">
                        ";
        // line 43
        echo "                        <label for=\"subject\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         ";
        // line 46
        echo "                          ";
        echo " 
                        <button type=\"submit\">Send</button>
                    </form>
                </div>
            </div>
</div>   
";
        
        $__internal_7bafced0fba47454047f651392ea6af13909c8a4064affa353bb94198fbea920->leave($__internal_7bafced0fba47454047f651392ea6af13909c8a4064affa353bb94198fbea920_prof);

        
        $__internal_df4c5859a783c305a6e1083f77a2de3a98c5ab80914a6155b30cf9a6fc45f281->leave($__internal_df4c5859a783c305a6e1083f77a2de3a98c5ab80914a6155b30cf9a6fc45f281_prof);

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
        return array (  111 => 46,  107 => 43,  95 => 32,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
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

{% block style %}
     <style>
        h1{
            text-align:center;    
        }
    </style> 
{% endblock %}

{% block main %}
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
                        <input type=\"submit\" name=\"envoyer\" value=\"Envoyer\">
                    </form>
                </div>
                <div class=\"contact-form span6\">
                <p><h1>AUTHENTIFICATION<h1></p>
                    <form method=\"post\" action=\"assets/sendmail.php\">
                        <label for=\"name\" class=\"nameLabel\">Username/Email</label>
                          <input id=\"name\" type=\"text\" name=\"name\" placeholder=\"Enter your username/password...\">
                        {# <label for=\"email\" class=\"emailLabel\">Email</label>
                          <input id=\"email\" type=\"text\" name=\"email\" placeholder=\"Enter your email...\"> #}
                        <label for=\"subject\">Password</label>
                          <input id=\"password\" type=\"password\" name=\"password\" placeholder=\"Your password...\">
                         {# <label for=\"message\" class=\"messageLabel\">Message</label> #}
                          {# <textarea id=\"message\" name=\"message\" placeholder=\"Your message...\"></textarea> #} 
                        <button type=\"submit\">Send</button>
                    </form>
                </div>
            </div>
</div>   
{% endblock %} ", "AKImmobilierBundle:Front:reserver.html.twig", "/var/www/html/ak_immo/src/AK/ImmobilierBundle/Resources/views/Front/reserver.html.twig");
    }
}
