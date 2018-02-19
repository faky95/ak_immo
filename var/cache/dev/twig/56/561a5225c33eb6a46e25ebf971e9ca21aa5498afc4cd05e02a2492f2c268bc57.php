<?php

/* @Twig/Exception/traces_text.html.twig */
class __TwigTemplate_7aee3ca176a3f74b2398d961c5d24abc3c1e00d435e3a50c3d703d294ef02134 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/56/561a5225c33eb6a46e25ebf971e9ca21aa5498afc4cd05e02a2492f2c268bc57.php
        $__internal_dcf086a0d6c433f2f71f7adb44290902c83e1f204d7b1c30fa4182c85d6f04ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf086a0d6c433f2f71f7adb44290902c83e1f204d7b1c30fa4182c85d6f04ca->enter($__internal_dcf086a0d6c433f2f71f7adb44290902c83e1f204d7b1c30fa4182c85d6f04ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_83082d743f2153bd0280d4ed8257aaabf08c51355a6b430a68989e5c72101e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83082d743f2153bd0280d4ed8257aaabf08c51355a6b430a68989e5c72101e33->enter($__internal_83082d743f2153bd0280d4ed8257aaabf08c51355a6b430a68989e5c72101e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
=======
        $__internal_64fc70cfeeaf27c3d4a0523536c602336937101f226f18005e859488b633747c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fc70cfeeaf27c3d4a0523536c602336937101f226f18005e859488b633747c->enter($__internal_64fc70cfeeaf27c3d4a0523536c602336937101f226f18005e859488b633747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));

        $__internal_359be48cf172ee1c0313978f57e40fd38ab2faba7e4317da2baa69a40ba1115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359be48cf172ee1c0313978f57e40fd38ab2faba7e4317da2baa69a40ba1115d->enter($__internal_359be48cf172ee1c0313978f57e40fd38ab2faba7e4317da2baa69a40ba1115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces_text.html.twig"));
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/70/7056e926f185a3e232c35e96687579a71295631bb598e910062b41027d76eb70.php

        // line 1
        echo "<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo (((1 == ($context["index"] ?? $this->getContext($context, "index")))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    ";
        // line 6
        if ((($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")) > 1)) {
            // line 7
            echo "                        <span class=\"text-muted\">[";
            echo twig_escape_filter($this->env, ((($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")) - ($context["index"] ?? $this->getContext($context, "index"))) + 1), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, ($context["num_exceptions"] ?? $this->getContext($context, "num_exceptions")), "html", null, true);
            echo "]</span>
                    ";
        }
        // line 9
        echo "                    ";
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")), "html", null, true);
        echo "
                    <span class=\"icon icon-close\">";
        // line 10
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 11
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-";
        // line 17
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\">
        <tr>
            <td>
                ";
        // line 20
        echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))), false);
        echo "
            </td>
        </tr>
    </tbody>
</table>
";
        
<<<<<<< HEAD:var/cache/dev/twig/56/561a5225c33eb6a46e25ebf971e9ca21aa5498afc4cd05e02a2492f2c268bc57.php
        $__internal_dcf086a0d6c433f2f71f7adb44290902c83e1f204d7b1c30fa4182c85d6f04ca->leave($__internal_dcf086a0d6c433f2f71f7adb44290902c83e1f204d7b1c30fa4182c85d6f04ca_prof);

        
        $__internal_83082d743f2153bd0280d4ed8257aaabf08c51355a6b430a68989e5c72101e33->leave($__internal_83082d743f2153bd0280d4ed8257aaabf08c51355a6b430a68989e5c72101e33_prof);
=======
        $__internal_64fc70cfeeaf27c3d4a0523536c602336937101f226f18005e859488b633747c->leave($__internal_64fc70cfeeaf27c3d4a0523536c602336937101f226f18005e859488b633747c_prof);

        
        $__internal_359be48cf172ee1c0313978f57e40fd38ab2faba7e4317da2baa69a40ba1115d->leave($__internal_359be48cf172ee1c0313978f57e40fd38ab2faba7e4317da2baa69a40ba1115d_prof);
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/70/7056e926f185a3e232c35e96687579a71295631bb598e910062b41027d76eb70.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 17,  56 => 11,  52 => 10,  47 => 9,  39 => 7,  37 => 6,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"trace trace-as-text\">
    <thead class=\"trace-head\">
        <tr>
            <th class=\"sf-toggle\" data-toggle-selector=\"#trace-text-{{ index }}\" data-toggle-initial=\"{{ 1 == index ? 'display' }}\">
                <h3 class=\"trace-class\">
                    {% if num_exceptions > 1 %}
                        <span class=\"text-muted\">[{{ num_exceptions - index + 1 }}/{{ num_exceptions }}]</span>
                    {% endif %}
                    {{ exception.class|split('\\\\')|last }}
                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>
            </th>
        </tr>
    </thead>

    <tbody id=\"trace-text-{{ index }}\">
        <tr>
            <td>
                {{ include('@Twig/Exception/traces.txt.twig', { exception: exception }, with_context = false) }}
            </td>
        </tr>
    </tbody>
</table>
", "@Twig/Exception/traces_text.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces_text.html.twig");
    }
}
