<?php

/* @WebProfiler/Profiler/toolbar.html.twig */
class __TwigTemplate_290d0c1e0a117b2e52c556dbfd9f4d15e32ddb2ee7d62788001fdf833290369f extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/b3/b35361324396e5ded4e5a6b9984e66920c9c8e58422bdeff19f7d05d79138ee7.php
        $__internal_e7f40141b22c646007b091ff906b7c7ee094ea8e2e8d8562ad3f891c01440f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7f40141b22c646007b091ff906b7c7ee094ea8e2e8d8562ad3f891c01440f3e->enter($__internal_e7f40141b22c646007b091ff906b7c7ee094ea8e2e8d8562ad3f891c01440f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_24655ded9d2fbfe7f1be99a33b521b8031b332485c44dc0b181473057917397b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24655ded9d2fbfe7f1be99a33b521b8031b332485c44dc0b181473057917397b->enter($__internal_24655ded9d2fbfe7f1be99a33b521b8031b332485c44dc0b181473057917397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
=======
        $__internal_cefa8a4c5a37dc2c4b540d48c10ce5ffed01260632c68ae9a30c8786a0bda972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cefa8a4c5a37dc2c4b540d48c10ce5ffed01260632c68ae9a30c8786a0bda972->enter($__internal_cefa8a4c5a37dc2c4b540d48c10ce5ffed01260632c68ae9a30c8786a0bda972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));

        $__internal_955924a5f1e8e7bf8904dfebcd566f04a86a58e224835fd7ce2cccec96a7c246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955924a5f1e8e7bf8904dfebcd566f04a86a58e224835fd7ce2cccec96a7c246->enter($__internal_955924a5f1e8e7bf8904dfebcd566f04a86a58e224835fd7ce2cccec96a7c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar.html.twig"));
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/66/668adb587002d18a4065e45187f10961b20fd8557a8d0cc01c67ef50922ef236.php

        // line 1
        echo "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-";
        // line 2
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-";
        // line 3
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" accesskey=\"D\">
        ";
        // line 4
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo "
    </a>
</div>
<div id=\"sfToolbarClearer-";
        // line 7
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-";
        // line 9
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["name"] => $context["template"]) {
            // line 11
            echo "        ";
            if (            $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 11)->hasBlock("toolbar", $context)) {
                // line 12
                echo "            ";
<<<<<<< HEAD:var/cache/dev/twig/b3/b35361324396e5ded4e5a6b9984e66920c9c8e58422bdeff19f7d05d79138ee7.php
                $__internal_43d23482e340b3fd43dd3bd490e6097973e471d14997af8533327c2e535b3dd1 = array("collector" => $this->getAttribute(                // line 13
=======
                $__internal_e6799ad6436ae35f3b15dd997ce4dd95f3d6a69cec02f1e05e6a0287af7c8156 = array("collector" => $this->getAttribute(                // line 13
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/66/668adb587002d18a4065e45187f10961b20fd8557a8d0cc01c67ef50922ef236.php
($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => $context["name"]), "method"), "profiler_url" =>                 // line 14
($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "token" => $this->getAttribute(                // line 15
($context["profile"] ?? $this->getContext($context, "profile")), "token", array()), "name" =>                 // line 16
$context["name"], "profiler_markup_version" =>                 // line 17
($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), "csp_script_nonce" =>                 // line 18
($context["csp_script_nonce"] ?? $this->getContext($context, "csp_script_nonce")), "csp_style_nonce" =>                 // line 19
($context["csp_style_nonce"] ?? $this->getContext($context, "csp_style_nonce")));
<<<<<<< HEAD:var/cache/dev/twig/b3/b35361324396e5ded4e5a6b9984e66920c9c8e58422bdeff19f7d05d79138ee7.php
                if (!is_array($__internal_43d23482e340b3fd43dd3bd490e6097973e471d14997af8533327c2e535b3dd1)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_43d23482e340b3fd43dd3bd490e6097973e471d14997af8533327c2e535b3dd1);
=======
                if (!is_array($__internal_e6799ad6436ae35f3b15dd997ce4dd95f3d6a69cec02f1e05e6a0287af7c8156)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_e6799ad6436ae35f3b15dd997ce4dd95f3d6a69cec02f1e05e6a0287af7c8156);
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/66/668adb587002d18a4065e45187f10961b20fd8557a8d0cc01c67ef50922ef236.php
                // line 21
                echo "                ";
                $this->loadTemplate($context["template"], "@WebProfiler/Profiler/toolbar.html.twig", 21)->displayBlock("toolbar", $context);
                echo "
            ";
                $context = $context['_parent'];
                // line 23
                echo "        ";
            }
            // line 24
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <a class=\"hide-button\" id=\"sfToolbarHideButton-";
        // line 26
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@WebProfiler/Icon/close.svg");
        echo "
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
";
        
<<<<<<< HEAD:var/cache/dev/twig/b3/b35361324396e5ded4e5a6b9984e66920c9c8e58422bdeff19f7d05d79138ee7.php
        $__internal_e7f40141b22c646007b091ff906b7c7ee094ea8e2e8d8562ad3f891c01440f3e->leave($__internal_e7f40141b22c646007b091ff906b7c7ee094ea8e2e8d8562ad3f891c01440f3e_prof);

        
        $__internal_24655ded9d2fbfe7f1be99a33b521b8031b332485c44dc0b181473057917397b->leave($__internal_24655ded9d2fbfe7f1be99a33b521b8031b332485c44dc0b181473057917397b_prof);
=======
        $__internal_cefa8a4c5a37dc2c4b540d48c10ce5ffed01260632c68ae9a30c8786a0bda972->leave($__internal_cefa8a4c5a37dc2c4b540d48c10ce5ffed01260632c68ae9a30c8786a0bda972_prof);

        
        $__internal_955924a5f1e8e7bf8904dfebcd566f04a86a58e224835fd7ce2cccec96a7c246->leave($__internal_955924a5f1e8e7bf8904dfebcd566f04a86a58e224835fd7ce2cccec96a7c246_prof);
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/66/668adb587002d18a4065e45187f10961b20fd8557a8d0cc01c67ef50922ef236.php

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  112 => 26,  109 => 25,  95 => 24,  92 => 23,  86 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  75 => 15,  74 => 14,  73 => 13,  71 => 12,  68 => 11,  51 => 10,  47 => 9,  42 => 7,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfMiniToolbar-{{ token }}\" class=\"sf-minitoolbar\" data-no-turbolink>
    <a href=\"#\" title=\"Show Symfony toolbar\" tabindex=\"-1\" id=\"sfToolbarMiniToggler-{{ token }}\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/symfony.svg') }}
    </a>
</div>
<div id=\"sfToolbarClearer-{{ token }}\" class=\"sf-toolbar-clearer\"></div>

<div id=\"sfToolbarMainContent-{{ token }}\" class=\"sf-toolbarreset clear-fix\" data-no-turbolink>
    {% for name, template in templates %}
        {% if block('toolbar', template) is defined %}
            {% with {
                collector: profile.getcollector(name),
                profiler_url: profiler_url,
                token: profile.token,
                name: name,
                profiler_markup_version: profiler_markup_version,
                csp_script_nonce: csp_script_nonce,
                csp_style_nonce: csp_style_nonce
              } %}
                {{ block('toolbar', template) }}
            {% endwith %}
        {% endif %}
    {% endfor %}

    <a class=\"hide-button\" id=\"sfToolbarHideButton-{{ token }}\" title=\"Close Toolbar\" tabindex=\"-1\" accesskey=\"D\">
        {{ include('@WebProfiler/Icon/close.svg') }}
    </a>
</div>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar.html.twig");
    }
}
