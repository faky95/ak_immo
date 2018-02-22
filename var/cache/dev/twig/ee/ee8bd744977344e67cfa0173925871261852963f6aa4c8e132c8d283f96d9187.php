<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_ea79235d4f3f18e5547440fc76151da5f16e426784c1f629a3a086b7aa3b6dda extends Twig_Template
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
        $__internal_445135995f4af349ee5e8d4cf653e1807e9974dd0c840eadd78549ca747d626b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445135995f4af349ee5e8d4cf653e1807e9974dd0c840eadd78549ca747d626b->enter($__internal_445135995f4af349ee5e8d4cf653e1807e9974dd0c840eadd78549ca747d626b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_84197d1c9f6041cb308154185da81f12dfb31b1995f8552e11189bc0bbe630fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84197d1c9f6041cb308154185da81f12dfb31b1995f8552e11189bc0bbe630fc->enter($__internal_84197d1c9f6041cb308154185da81f12dfb31b1995f8552e11189bc0bbe630fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_445135995f4af349ee5e8d4cf653e1807e9974dd0c840eadd78549ca747d626b->leave($__internal_445135995f4af349ee5e8d4cf653e1807e9974dd0c840eadd78549ca747d626b_prof);

        
        $__internal_84197d1c9f6041cb308154185da81f12dfb31b1995f8552e11189bc0bbe630fc->leave($__internal_84197d1c9f6041cb308154185da81f12dfb31b1995f8552e11189bc0bbe630fc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/var/www/html/ak_immo/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}
