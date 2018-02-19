<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_49f84892d8715f9a136e873d30d87159d38ab6280b346cd1a61d014f3972f530 extends Twig_Template
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
<<<<<<< HEAD:var/cache/dev/twig/3d/3df76a4e32f67e3320dbdc5d8133451c97c1d3fb7d7c6803f0fb9a12c68072ef.php
        $__internal_2adc089150fc30d983ff828d260e9293c1b73cdc56ea5f5f5b930527b5daaefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adc089150fc30d983ff828d260e9293c1b73cdc56ea5f5f5b930527b5daaefd->enter($__internal_2adc089150fc30d983ff828d260e9293c1b73cdc56ea5f5f5b930527b5daaefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_22f61c85c5f870a2ae2beb100cdad092f3d796bdd9231e481da8c09bab591dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f61c85c5f870a2ae2beb100cdad092f3d796bdd9231e481da8c09bab591dfd->enter($__internal_22f61c85c5f870a2ae2beb100cdad092f3d796bdd9231e481da8c09bab591dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_49714233fe34e0291adce2dd135b5274fd5c484e34bae493103b0298a28eca95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49714233fe34e0291adce2dd135b5274fd5c484e34bae493103b0298a28eca95->enter($__internal_49714233fe34e0291adce2dd135b5274fd5c484e34bae493103b0298a28eca95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_cead5dc6f700f113a36053ddea1307b0c14fc1340494e1ff338509a894935255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cead5dc6f700f113a36053ddea1307b0c14fc1340494e1ff338509a894935255->enter($__internal_cead5dc6f700f113a36053ddea1307b0c14fc1340494e1ff338509a894935255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/f0/f0ce5fff1650a3f5f3053c1a87321c0ceaea7b98456c1e9d552bf39c37742f3a.php

        // line 1
        $context["channel_is_defined"] = $this->getAttribute(twig_first($this->env, ($context["logs"] ?? $this->getContext($context, "logs"))), "channel", array(), "any", true, true);
        // line 2
        echo "
<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            ";
        // line 7
        if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
            echo "<th>Channel</th>";
        }
        // line 8
        echo "            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 14
            echo "        <tr class=\"status-";
            echo ((($this->getAttribute($context["log"], "priority", array()) >= 400)) ? ("error") : (((($this->getAttribute($context["log"], "priority", array()) >= 300)) ? ("warning") : ("normal"))));
            echo "\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo "</span>
                <span class=\"text-muted newline\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "timestamp", array()), "H:i:s"), "html", null, true);
            echo "</span>
            </td>
            ";
            // line 19
            if (($context["channel_is_defined"] ?? $this->getContext($context, "channel_is_defined"))) {
                // line 20
                echo "                <td class=\"text-small text-bold nowrap\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "channel", array()), "html", null, true);
                echo "
                </td>
            ";
            }
            // line 24
            echo "            <td>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </tbody>
</table>
";
        
<<<<<<< HEAD:var/cache/dev/twig/3d/3df76a4e32f67e3320dbdc5d8133451c97c1d3fb7d7c6803f0fb9a12c68072ef.php
        $__internal_2adc089150fc30d983ff828d260e9293c1b73cdc56ea5f5f5b930527b5daaefd->leave($__internal_2adc089150fc30d983ff828d260e9293c1b73cdc56ea5f5f5b930527b5daaefd_prof);

        
        $__internal_22f61c85c5f870a2ae2beb100cdad092f3d796bdd9231e481da8c09bab591dfd->leave($__internal_22f61c85c5f870a2ae2beb100cdad092f3d796bdd9231e481da8c09bab591dfd_prof);
=======
        $__internal_49714233fe34e0291adce2dd135b5274fd5c484e34bae493103b0298a28eca95->leave($__internal_49714233fe34e0291adce2dd135b5274fd5c484e34bae493103b0298a28eca95_prof);

        
        $__internal_cead5dc6f700f113a36053ddea1307b0c14fc1340494e1ff338509a894935255->leave($__internal_cead5dc6f700f113a36053ddea1307b0c14fc1340494e1ff338509a894935255_prof);
>>>>>>> d9dbb9b9dad4dd10ffbe585d9081064e20999eda:var/cache/dev/twig/f0/f0ce5fff1650a3f5f3053c1a87321c0ceaea7b98456c1e9d552bf39c37742f3a.php

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 27,  75 => 24,  69 => 21,  66 => 20,  64 => 19,  59 => 17,  55 => 16,  49 => 14,  45 => 13,  38 => 8,  34 => 7,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set channel_is_defined = (logs|first).channel is defined %}

<table class=\"logs\">
    <thead>
        <tr>
            <th>Level</th>
            {% if channel_is_defined %}<th>Channel</th>{% endif %}
            <th class=\"full-width\">Message</th>
        </tr>
    </thead>

    <tbody>
    {% for log in logs %}
        <tr class=\"status-{{ log.priority >= 400 ? 'error' : log.priority >= 300 ? 'warning' : 'normal' }}\">
            <td class=\"text-small\" nowrap>
                <span class=\"colored text-bold\">{{ log.priorityName }}</span>
                <span class=\"text-muted newline\">{{ log.timestamp|date('H:i:s') }}</span>
            </td>
            {% if channel_is_defined %}
                <td class=\"text-small text-bold nowrap\">
                    {{ log.channel }}
                </td>
            {% endif %}
            <td>{{ log.message|format_log_message(log.context) }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "@Twig/Exception/logs.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
