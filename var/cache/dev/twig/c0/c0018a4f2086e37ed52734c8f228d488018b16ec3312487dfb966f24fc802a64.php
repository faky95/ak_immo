<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3e8aa2a8526e3f074d9a1dcef3cf2ff715b05e24568d1503a5d1d06f41a5edc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10d9c68291937eca26bbb9d867355e43419cac9e4b0d26dee5ba945de061f5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d9c68291937eca26bbb9d867355e43419cac9e4b0d26dee5ba945de061f5db->enter($__internal_10d9c68291937eca26bbb9d867355e43419cac9e4b0d26dee5ba945de061f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_f69eb359dcb6b9b9f624d59b1954f76cc0aac753a61bebfb7e5c58e1bae44ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69eb359dcb6b9b9f624d59b1954f76cc0aac753a61bebfb7e5c58e1bae44ad7->enter($__internal_f69eb359dcb6b9b9f624d59b1954f76cc0aac753a61bebfb7e5c58e1bae44ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_10d9c68291937eca26bbb9d867355e43419cac9e4b0d26dee5ba945de061f5db->leave($__internal_10d9c68291937eca26bbb9d867355e43419cac9e4b0d26dee5ba945de061f5db_prof);

        
        $__internal_f69eb359dcb6b9b9f624d59b1954f76cc0aac753a61bebfb7e5c58e1bae44ad7->leave($__internal_f69eb359dcb6b9b9f624d59b1954f76cc0aac753a61bebfb7e5c58e1bae44ad7_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c2d2f1e09766d2c995a17e9018c967328e7ce1266353dd3d5c1ecc8358646e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d2f1e09766d2c995a17e9018c967328e7ce1266353dd3d5c1ecc8358646e84->enter($__internal_c2d2f1e09766d2c995a17e9018c967328e7ce1266353dd3d5c1ecc8358646e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_8e497903f2aceceb26a0210404fb68c605a10df4d2b603592b444a6e7cdf7036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e497903f2aceceb26a0210404fb68c605a10df4d2b603592b444a6e7cdf7036->enter($__internal_8e497903f2aceceb26a0210404fb68c605a10df4d2b603592b444a6e7cdf7036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8e497903f2aceceb26a0210404fb68c605a10df4d2b603592b444a6e7cdf7036->leave($__internal_8e497903f2aceceb26a0210404fb68c605a10df4d2b603592b444a6e7cdf7036_prof);

        
        $__internal_c2d2f1e09766d2c995a17e9018c967328e7ce1266353dd3d5c1ecc8358646e84->leave($__internal_c2d2f1e09766d2c995a17e9018c967328e7ce1266353dd3d5c1ecc8358646e84_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b50524c6269a532a57dc839826c198c9185d9a72c66b91862295b206c75ce6f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50524c6269a532a57dc839826c198c9185d9a72c66b91862295b206c75ce6f6->enter($__internal_b50524c6269a532a57dc839826c198c9185d9a72c66b91862295b206c75ce6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_3045404c6f53dc2fbc7b3fd58b1bd4938da3574376812041369ffca35417c073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3045404c6f53dc2fbc7b3fd58b1bd4938da3574376812041369ffca35417c073->enter($__internal_3045404c6f53dc2fbc7b3fd58b1bd4938da3574376812041369ffca35417c073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_3045404c6f53dc2fbc7b3fd58b1bd4938da3574376812041369ffca35417c073->leave($__internal_3045404c6f53dc2fbc7b3fd58b1bd4938da3574376812041369ffca35417c073_prof);

        
        $__internal_b50524c6269a532a57dc839826c198c9185d9a72c66b91862295b206c75ce6f6->leave($__internal_b50524c6269a532a57dc839826c198c9185d9a72c66b91862295b206c75ce6f6_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c7db351dfa2e5b78f5a75e8d6848e65aa7d29a9953cd31ba0310d3e65f8eecfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7db351dfa2e5b78f5a75e8d6848e65aa7d29a9953cd31ba0310d3e65f8eecfd->enter($__internal_c7db351dfa2e5b78f5a75e8d6848e65aa7d29a9953cd31ba0310d3e65f8eecfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1c846c0e1b5295f6d9af4d8a664b70327cabbe3137f5ca11b0326007855ddbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c846c0e1b5295f6d9af4d8a664b70327cabbe3137f5ca11b0326007855ddbda->enter($__internal_1c846c0e1b5295f6d9af4d8a664b70327cabbe3137f5ca11b0326007855ddbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1c846c0e1b5295f6d9af4d8a664b70327cabbe3137f5ca11b0326007855ddbda->leave($__internal_1c846c0e1b5295f6d9af4d8a664b70327cabbe3137f5ca11b0326007855ddbda_prof);

        
        $__internal_c7db351dfa2e5b78f5a75e8d6848e65aa7d29a9953cd31ba0310d3e65f8eecfd->leave($__internal_c7db351dfa2e5b78f5a75e8d6848e65aa7d29a9953cd31ba0310d3e65f8eecfd_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3ba52338e286c97dd2fbb4f8477393a67bc442da30ec92ed0f767d54487c8bf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba52338e286c97dd2fbb4f8477393a67bc442da30ec92ed0f767d54487c8bf3->enter($__internal_3ba52338e286c97dd2fbb4f8477393a67bc442da30ec92ed0f767d54487c8bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_57987f119a3f0d4310888be91b5f52959ea1ff1c55ec1812a600f75f8ad3a84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57987f119a3f0d4310888be91b5f52959ea1ff1c55ec1812a600f75f8ad3a84a->enter($__internal_57987f119a3f0d4310888be91b5f52959ea1ff1c55ec1812a600f75f8ad3a84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_f8b1918f5bc817176f9dea57044ad724aadec593a6fcc7e2e92bd9359a7686cc = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_90d78fdd56ad4f6af066495e1ac9f26ff4bf45d075b208c87a2b9c21829640b4 = "{{") && ('' === $__internal_90d78fdd56ad4f6af066495e1ac9f26ff4bf45d075b208c87a2b9c21829640b4 || 0 === strpos($__internal_f8b1918f5bc817176f9dea57044ad724aadec593a6fcc7e2e92bd9359a7686cc, $__internal_90d78fdd56ad4f6af066495e1ac9f26ff4bf45d075b208c87a2b9c21829640b4)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_57987f119a3f0d4310888be91b5f52959ea1ff1c55ec1812a600f75f8ad3a84a->leave($__internal_57987f119a3f0d4310888be91b5f52959ea1ff1c55ec1812a600f75f8ad3a84a_prof);

        
        $__internal_3ba52338e286c97dd2fbb4f8477393a67bc442da30ec92ed0f767d54487c8bf3->leave($__internal_3ba52338e286c97dd2fbb4f8477393a67bc442da30ec92ed0f767d54487c8bf3_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_6e9a2175cb88ddddb6465cd39dfaea84488a4124c6b62024532fc5e296a48b31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e9a2175cb88ddddb6465cd39dfaea84488a4124c6b62024532fc5e296a48b31->enter($__internal_6e9a2175cb88ddddb6465cd39dfaea84488a4124c6b62024532fc5e296a48b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_b22bd37527837b4fa1445584a737dcf12e1d60ff10e8ede07ada1d587be5a9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b22bd37527837b4fa1445584a737dcf12e1d60ff10e8ede07ada1d587be5a9a1->enter($__internal_b22bd37527837b4fa1445584a737dcf12e1d60ff10e8ede07ada1d587be5a9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_b22bd37527837b4fa1445584a737dcf12e1d60ff10e8ede07ada1d587be5a9a1->leave($__internal_b22bd37527837b4fa1445584a737dcf12e1d60ff10e8ede07ada1d587be5a9a1_prof);

        
        $__internal_6e9a2175cb88ddddb6465cd39dfaea84488a4124c6b62024532fc5e296a48b31->leave($__internal_6e9a2175cb88ddddb6465cd39dfaea84488a4124c6b62024532fc5e296a48b31_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_3949b17e8fda8c20c8d65bd55e19370bf11439d553b31ab97600df7d91904551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3949b17e8fda8c20c8d65bd55e19370bf11439d553b31ab97600df7d91904551->enter($__internal_3949b17e8fda8c20c8d65bd55e19370bf11439d553b31ab97600df7d91904551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_e7652b67e6bc8d21f739cd5bf7e3d1e332bc5419e693dfd2646a72280a308842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7652b67e6bc8d21f739cd5bf7e3d1e332bc5419e693dfd2646a72280a308842->enter($__internal_e7652b67e6bc8d21f739cd5bf7e3d1e332bc5419e693dfd2646a72280a308842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_e7652b67e6bc8d21f739cd5bf7e3d1e332bc5419e693dfd2646a72280a308842->leave($__internal_e7652b67e6bc8d21f739cd5bf7e3d1e332bc5419e693dfd2646a72280a308842_prof);

        
        $__internal_3949b17e8fda8c20c8d65bd55e19370bf11439d553b31ab97600df7d91904551->leave($__internal_3949b17e8fda8c20c8d65bd55e19370bf11439d553b31ab97600df7d91904551_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3921e3c7241a9ec701262f240f06cee4015f91b5151052937c06952910634d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3921e3c7241a9ec701262f240f06cee4015f91b5151052937c06952910634d8a->enter($__internal_3921e3c7241a9ec701262f240f06cee4015f91b5151052937c06952910634d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_aaa2c890d301a52e8a6f84441309c9f0fec5562599840b650bae1c0061273a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa2c890d301a52e8a6f84441309c9f0fec5562599840b650bae1c0061273a45->enter($__internal_aaa2c890d301a52e8a6f84441309c9f0fec5562599840b650bae1c0061273a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_aaa2c890d301a52e8a6f84441309c9f0fec5562599840b650bae1c0061273a45->leave($__internal_aaa2c890d301a52e8a6f84441309c9f0fec5562599840b650bae1c0061273a45_prof);

        
        $__internal_3921e3c7241a9ec701262f240f06cee4015f91b5151052937c06952910634d8a->leave($__internal_3921e3c7241a9ec701262f240f06cee4015f91b5151052937c06952910634d8a_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d699155191976cf87c01f2f7f5a5dcd7dd8bb70ffb57eca6ae743753ebddadd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d699155191976cf87c01f2f7f5a5dcd7dd8bb70ffb57eca6ae743753ebddadd8->enter($__internal_d699155191976cf87c01f2f7f5a5dcd7dd8bb70ffb57eca6ae743753ebddadd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_1440a2595409ee168f60cd558edf960da24b3ca3897f650e0b9b1bb0109e71f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1440a2595409ee168f60cd558edf960da24b3ca3897f650e0b9b1bb0109e71f6->enter($__internal_1440a2595409ee168f60cd558edf960da24b3ca3897f650e0b9b1bb0109e71f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_1440a2595409ee168f60cd558edf960da24b3ca3897f650e0b9b1bb0109e71f6->leave($__internal_1440a2595409ee168f60cd558edf960da24b3ca3897f650e0b9b1bb0109e71f6_prof);

        
        $__internal_d699155191976cf87c01f2f7f5a5dcd7dd8bb70ffb57eca6ae743753ebddadd8->leave($__internal_d699155191976cf87c01f2f7f5a5dcd7dd8bb70ffb57eca6ae743753ebddadd8_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_4f0b918c2e326a4b5ff8c28e63084cfbe394cc61d97efe3a66ae4989b1a2f92c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0b918c2e326a4b5ff8c28e63084cfbe394cc61d97efe3a66ae4989b1a2f92c->enter($__internal_4f0b918c2e326a4b5ff8c28e63084cfbe394cc61d97efe3a66ae4989b1a2f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_8e98c734a3f4413ead343ff6bf835634abc207e1b6997d54bfa917414e838d62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e98c734a3f4413ead343ff6bf835634abc207e1b6997d54bfa917414e838d62->enter($__internal_8e98c734a3f4413ead343ff6bf835634abc207e1b6997d54bfa917414e838d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_8e98c734a3f4413ead343ff6bf835634abc207e1b6997d54bfa917414e838d62->leave($__internal_8e98c734a3f4413ead343ff6bf835634abc207e1b6997d54bfa917414e838d62_prof);

        
        $__internal_4f0b918c2e326a4b5ff8c28e63084cfbe394cc61d97efe3a66ae4989b1a2f92c->leave($__internal_4f0b918c2e326a4b5ff8c28e63084cfbe394cc61d97efe3a66ae4989b1a2f92c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b7259f84610406a4f3fd83593b29e3fe6c49203d9913db2f379512cd3c39e8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7259f84610406a4f3fd83593b29e3fe6c49203d9913db2f379512cd3c39e8ac->enter($__internal_b7259f84610406a4f3fd83593b29e3fe6c49203d9913db2f379512cd3c39e8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2e630b07a8ecdc61fa690face9ebffd67c228f34532855296387047de20d4f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e630b07a8ecdc61fa690face9ebffd67c228f34532855296387047de20d4f50->enter($__internal_2e630b07a8ecdc61fa690face9ebffd67c228f34532855296387047de20d4f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_2e630b07a8ecdc61fa690face9ebffd67c228f34532855296387047de20d4f50->leave($__internal_2e630b07a8ecdc61fa690face9ebffd67c228f34532855296387047de20d4f50_prof);

        
        $__internal_b7259f84610406a4f3fd83593b29e3fe6c49203d9913db2f379512cd3c39e8ac->leave($__internal_b7259f84610406a4f3fd83593b29e3fe6c49203d9913db2f379512cd3c39e8ac_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f9dccfec3c2b85055dd1493eaf77a2c223f8cda14277c612b76d326d48fe2a37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9dccfec3c2b85055dd1493eaf77a2c223f8cda14277c612b76d326d48fe2a37->enter($__internal_f9dccfec3c2b85055dd1493eaf77a2c223f8cda14277c612b76d326d48fe2a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b779dcaf0ec22befc6bc4cfed70fca624e0c09ee230656456980e03dbe7f3a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b779dcaf0ec22befc6bc4cfed70fca624e0c09ee230656456980e03dbe7f3a38->enter($__internal_b779dcaf0ec22befc6bc4cfed70fca624e0c09ee230656456980e03dbe7f3a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_b779dcaf0ec22befc6bc4cfed70fca624e0c09ee230656456980e03dbe7f3a38->leave($__internal_b779dcaf0ec22befc6bc4cfed70fca624e0c09ee230656456980e03dbe7f3a38_prof);

        
        $__internal_f9dccfec3c2b85055dd1493eaf77a2c223f8cda14277c612b76d326d48fe2a37->leave($__internal_f9dccfec3c2b85055dd1493eaf77a2c223f8cda14277c612b76d326d48fe2a37_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a90c4883697d9f83a6461ea4e7bd701c61124c66a7dbf443eb2bd589da7b6142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90c4883697d9f83a6461ea4e7bd701c61124c66a7dbf443eb2bd589da7b6142->enter($__internal_a90c4883697d9f83a6461ea4e7bd701c61124c66a7dbf443eb2bd589da7b6142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ab9c61a9ed90a52f7291eb643ecf5d528fbae0763c5fd94952697b41475e0bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9c61a9ed90a52f7291eb643ecf5d528fbae0763c5fd94952697b41475e0bfb->enter($__internal_ab9c61a9ed90a52f7291eb643ecf5d528fbae0763c5fd94952697b41475e0bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_ab9c61a9ed90a52f7291eb643ecf5d528fbae0763c5fd94952697b41475e0bfb->leave($__internal_ab9c61a9ed90a52f7291eb643ecf5d528fbae0763c5fd94952697b41475e0bfb_prof);

        
        $__internal_a90c4883697d9f83a6461ea4e7bd701c61124c66a7dbf443eb2bd589da7b6142->leave($__internal_a90c4883697d9f83a6461ea4e7bd701c61124c66a7dbf443eb2bd589da7b6142_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_16f062540377b9c04aa5c87c933d5b971073a394228f0bbcb742a38f6b8a0f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f062540377b9c04aa5c87c933d5b971073a394228f0bbcb742a38f6b8a0f1e->enter($__internal_16f062540377b9c04aa5c87c933d5b971073a394228f0bbcb742a38f6b8a0f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_60e7fac6ce9950df25a88e27969c3eda1f3f122f7787d3113a1c6a7ca56c4a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e7fac6ce9950df25a88e27969c3eda1f3f122f7787d3113a1c6a7ca56c4a17->enter($__internal_60e7fac6ce9950df25a88e27969c3eda1f3f122f7787d3113a1c6a7ca56c4a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_60e7fac6ce9950df25a88e27969c3eda1f3f122f7787d3113a1c6a7ca56c4a17->leave($__internal_60e7fac6ce9950df25a88e27969c3eda1f3f122f7787d3113a1c6a7ca56c4a17_prof);

        
        $__internal_16f062540377b9c04aa5c87c933d5b971073a394228f0bbcb742a38f6b8a0f1e->leave($__internal_16f062540377b9c04aa5c87c933d5b971073a394228f0bbcb742a38f6b8a0f1e_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_360c82308bd14ff3f549916d198845657f40d8956fa7ed43411de4774551265c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360c82308bd14ff3f549916d198845657f40d8956fa7ed43411de4774551265c->enter($__internal_360c82308bd14ff3f549916d198845657f40d8956fa7ed43411de4774551265c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6041f632259f3b0db8d0961a1f8229568e7ee21778a017d27086e8796f3683d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6041f632259f3b0db8d0961a1f8229568e7ee21778a017d27086e8796f3683d7->enter($__internal_6041f632259f3b0db8d0961a1f8229568e7ee21778a017d27086e8796f3683d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6041f632259f3b0db8d0961a1f8229568e7ee21778a017d27086e8796f3683d7->leave($__internal_6041f632259f3b0db8d0961a1f8229568e7ee21778a017d27086e8796f3683d7_prof);

        
        $__internal_360c82308bd14ff3f549916d198845657f40d8956fa7ed43411de4774551265c->leave($__internal_360c82308bd14ff3f549916d198845657f40d8956fa7ed43411de4774551265c_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_2b0b6e404091d59af7ef0d3ca266a1682b4e52d566f2968e8942bd0cd3f19d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0b6e404091d59af7ef0d3ca266a1682b4e52d566f2968e8942bd0cd3f19d36->enter($__internal_2b0b6e404091d59af7ef0d3ca266a1682b4e52d566f2968e8942bd0cd3f19d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_80c8d638de2c2fe77ed7ebaf4cb9f3948a1b17fd1c1979aeda1463da1bc1f943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c8d638de2c2fe77ed7ebaf4cb9f3948a1b17fd1c1979aeda1463da1bc1f943->enter($__internal_80c8d638de2c2fe77ed7ebaf4cb9f3948a1b17fd1c1979aeda1463da1bc1f943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_80c8d638de2c2fe77ed7ebaf4cb9f3948a1b17fd1c1979aeda1463da1bc1f943->leave($__internal_80c8d638de2c2fe77ed7ebaf4cb9f3948a1b17fd1c1979aeda1463da1bc1f943_prof);

        
        $__internal_2b0b6e404091d59af7ef0d3ca266a1682b4e52d566f2968e8942bd0cd3f19d36->leave($__internal_2b0b6e404091d59af7ef0d3ca266a1682b4e52d566f2968e8942bd0cd3f19d36_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_02831bb83c7c3b3ba110a4c0e5c9a8effa2fa3d1746c6d939488318b174d31d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02831bb83c7c3b3ba110a4c0e5c9a8effa2fa3d1746c6d939488318b174d31d4->enter($__internal_02831bb83c7c3b3ba110a4c0e5c9a8effa2fa3d1746c6d939488318b174d31d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c804469a6ff0f1491b8e959b730a05984d81c7f6b5b0278597a3726e39b9b934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c804469a6ff0f1491b8e959b730a05984d81c7f6b5b0278597a3726e39b9b934->enter($__internal_c804469a6ff0f1491b8e959b730a05984d81c7f6b5b0278597a3726e39b9b934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c804469a6ff0f1491b8e959b730a05984d81c7f6b5b0278597a3726e39b9b934->leave($__internal_c804469a6ff0f1491b8e959b730a05984d81c7f6b5b0278597a3726e39b9b934_prof);

        
        $__internal_02831bb83c7c3b3ba110a4c0e5c9a8effa2fa3d1746c6d939488318b174d31d4->leave($__internal_02831bb83c7c3b3ba110a4c0e5c9a8effa2fa3d1746c6d939488318b174d31d4_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_05b399a3a164601085d011a02dcbdfbfd60c552a04fe21787f51bdd66f35d4a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b399a3a164601085d011a02dcbdfbfd60c552a04fe21787f51bdd66f35d4a1->enter($__internal_05b399a3a164601085d011a02dcbdfbfd60c552a04fe21787f51bdd66f35d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_cbfe53f356448e50d4db60e9b56e53333f95755fb39cbe244532bba9bc57f2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfe53f356448e50d4db60e9b56e53333f95755fb39cbe244532bba9bc57f2a2->enter($__internal_cbfe53f356448e50d4db60e9b56e53333f95755fb39cbe244532bba9bc57f2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_cbfe53f356448e50d4db60e9b56e53333f95755fb39cbe244532bba9bc57f2a2->leave($__internal_cbfe53f356448e50d4db60e9b56e53333f95755fb39cbe244532bba9bc57f2a2_prof);

        
        $__internal_05b399a3a164601085d011a02dcbdfbfd60c552a04fe21787f51bdd66f35d4a1->leave($__internal_05b399a3a164601085d011a02dcbdfbfd60c552a04fe21787f51bdd66f35d4a1_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_c3cfddff2e253ee85b56048d03de6431fdc0442ac3af92885dd766c23ff01f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cfddff2e253ee85b56048d03de6431fdc0442ac3af92885dd766c23ff01f23->enter($__internal_c3cfddff2e253ee85b56048d03de6431fdc0442ac3af92885dd766c23ff01f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_33e01564b6e2b21ff73a7b28d9aafd80a9dae9d3e2c079fff6a73060586a54bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e01564b6e2b21ff73a7b28d9aafd80a9dae9d3e2c079fff6a73060586a54bd->enter($__internal_33e01564b6e2b21ff73a7b28d9aafd80a9dae9d3e2c079fff6a73060586a54bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 209
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_33e01564b6e2b21ff73a7b28d9aafd80a9dae9d3e2c079fff6a73060586a54bd->leave($__internal_33e01564b6e2b21ff73a7b28d9aafd80a9dae9d3e2c079fff6a73060586a54bd_prof);

        
        $__internal_c3cfddff2e253ee85b56048d03de6431fdc0442ac3af92885dd766c23ff01f23->leave($__internal_c3cfddff2e253ee85b56048d03de6431fdc0442ac3af92885dd766c23ff01f23_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_fb7aeb20c95cbe9b6f06dede7ae293c5b63260435794cb618f33cf67d5e24316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb7aeb20c95cbe9b6f06dede7ae293c5b63260435794cb618f33cf67d5e24316->enter($__internal_fb7aeb20c95cbe9b6f06dede7ae293c5b63260435794cb618f33cf67d5e24316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_97bb59903ea818a0cf325ce764ccb77b575c3ef8b266153866a50eb125e227ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97bb59903ea818a0cf325ce764ccb77b575c3ef8b266153866a50eb125e227ce->enter($__internal_97bb59903ea818a0cf325ce764ccb77b575c3ef8b266153866a50eb125e227ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_97bb59903ea818a0cf325ce764ccb77b575c3ef8b266153866a50eb125e227ce->leave($__internal_97bb59903ea818a0cf325ce764ccb77b575c3ef8b266153866a50eb125e227ce_prof);

        
        $__internal_fb7aeb20c95cbe9b6f06dede7ae293c5b63260435794cb618f33cf67d5e24316->leave($__internal_fb7aeb20c95cbe9b6f06dede7ae293c5b63260435794cb618f33cf67d5e24316_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3b60a00c70c0594ca120d0f1b2aad5382cd63cea4bb7f126c3682546d9294e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b60a00c70c0594ca120d0f1b2aad5382cd63cea4bb7f126c3682546d9294e41->enter($__internal_3b60a00c70c0594ca120d0f1b2aad5382cd63cea4bb7f126c3682546d9294e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_cfcbf13b2bd4d60256096c6284fb6c84dffd9f45f12916c04ab13e4fd4fa7171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfcbf13b2bd4d60256096c6284fb6c84dffd9f45f12916c04ab13e4fd4fa7171->enter($__internal_cfcbf13b2bd4d60256096c6284fb6c84dffd9f45f12916c04ab13e4fd4fa7171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_cfcbf13b2bd4d60256096c6284fb6c84dffd9f45f12916c04ab13e4fd4fa7171->leave($__internal_cfcbf13b2bd4d60256096c6284fb6c84dffd9f45f12916c04ab13e4fd4fa7171_prof);

        
        $__internal_3b60a00c70c0594ca120d0f1b2aad5382cd63cea4bb7f126c3682546d9294e41->leave($__internal_3b60a00c70c0594ca120d0f1b2aad5382cd63cea4bb7f126c3682546d9294e41_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_71f36317a1b6824570cba91c02b7d94fbbe62845be1e8556ef4dd3aee8690c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f36317a1b6824570cba91c02b7d94fbbe62845be1e8556ef4dd3aee8690c97->enter($__internal_71f36317a1b6824570cba91c02b7d94fbbe62845be1e8556ef4dd3aee8690c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_bdb6046ed9bf36cde1229794db993d9c6b02c89d4083e531918522a79a56c1f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb6046ed9bf36cde1229794db993d9c6b02c89d4083e531918522a79a56c1f8->enter($__internal_bdb6046ed9bf36cde1229794db993d9c6b02c89d4083e531918522a79a56c1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bdb6046ed9bf36cde1229794db993d9c6b02c89d4083e531918522a79a56c1f8->leave($__internal_bdb6046ed9bf36cde1229794db993d9c6b02c89d4083e531918522a79a56c1f8_prof);

        
        $__internal_71f36317a1b6824570cba91c02b7d94fbbe62845be1e8556ef4dd3aee8690c97->leave($__internal_71f36317a1b6824570cba91c02b7d94fbbe62845be1e8556ef4dd3aee8690c97_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_96341bab6bdee83c11ba86e1917c90cc96d2f106a98f797aebe3cbb6605eee07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96341bab6bdee83c11ba86e1917c90cc96d2f106a98f797aebe3cbb6605eee07->enter($__internal_96341bab6bdee83c11ba86e1917c90cc96d2f106a98f797aebe3cbb6605eee07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_d42e7ad7cd930ce85186180739b17b0710c5afaa2f631e1a65749eb36bf3d6f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42e7ad7cd930ce85186180739b17b0710c5afaa2f631e1a65749eb36bf3d6f4->enter($__internal_d42e7ad7cd930ce85186180739b17b0710c5afaa2f631e1a65749eb36bf3d6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d42e7ad7cd930ce85186180739b17b0710c5afaa2f631e1a65749eb36bf3d6f4->leave($__internal_d42e7ad7cd930ce85186180739b17b0710c5afaa2f631e1a65749eb36bf3d6f4_prof);

        
        $__internal_96341bab6bdee83c11ba86e1917c90cc96d2f106a98f797aebe3cbb6605eee07->leave($__internal_96341bab6bdee83c11ba86e1917c90cc96d2f106a98f797aebe3cbb6605eee07_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b63733b024f7b5051de9a2b7c7334c6db450972718ffcf5c0c7f2000c5a2e2bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63733b024f7b5051de9a2b7c7334c6db450972718ffcf5c0c7f2000c5a2e2bd->enter($__internal_b63733b024f7b5051de9a2b7c7334c6db450972718ffcf5c0c7f2000c5a2e2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1ade639f9c1c1ff65cff5a3db0a63110b91284dca756bb0ea250147ed72d6183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ade639f9c1c1ff65cff5a3db0a63110b91284dca756bb0ea250147ed72d6183->enter($__internal_1ade639f9c1c1ff65cff5a3db0a63110b91284dca756bb0ea250147ed72d6183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1ade639f9c1c1ff65cff5a3db0a63110b91284dca756bb0ea250147ed72d6183->leave($__internal_1ade639f9c1c1ff65cff5a3db0a63110b91284dca756bb0ea250147ed72d6183_prof);

        
        $__internal_b63733b024f7b5051de9a2b7c7334c6db450972718ffcf5c0c7f2000c5a2e2bd->leave($__internal_b63733b024f7b5051de9a2b7c7334c6db450972718ffcf5c0c7f2000c5a2e2bd_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_959677543bfb71ee6a1948f0f31501753a4471295c9445d144a5ce8d542a6e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_959677543bfb71ee6a1948f0f31501753a4471295c9445d144a5ce8d542a6e9f->enter($__internal_959677543bfb71ee6a1948f0f31501753a4471295c9445d144a5ce8d542a6e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_93ad742df2c7ddeedf21514a554d43efe856cf6a861709620c260962df96fadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ad742df2c7ddeedf21514a554d43efe856cf6a861709620c260962df96fadc->enter($__internal_93ad742df2c7ddeedf21514a554d43efe856cf6a861709620c260962df96fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_93ad742df2c7ddeedf21514a554d43efe856cf6a861709620c260962df96fadc->leave($__internal_93ad742df2c7ddeedf21514a554d43efe856cf6a861709620c260962df96fadc_prof);

        
        $__internal_959677543bfb71ee6a1948f0f31501753a4471295c9445d144a5ce8d542a6e9f->leave($__internal_959677543bfb71ee6a1948f0f31501753a4471295c9445d144a5ce8d542a6e9f_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_73b0475340ab3a7bb4b63f8b78028e755084cbd4b8ef5249c508cd8dccc360ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73b0475340ab3a7bb4b63f8b78028e755084cbd4b8ef5249c508cd8dccc360ee->enter($__internal_73b0475340ab3a7bb4b63f8b78028e755084cbd4b8ef5249c508cd8dccc360ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_65f4597065bbdae3c3a0ded8e38ac7bfbbb03d9ed1ada3815c95c38071c2277c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f4597065bbdae3c3a0ded8e38ac7bfbbb03d9ed1ada3815c95c38071c2277c->enter($__internal_65f4597065bbdae3c3a0ded8e38ac7bfbbb03d9ed1ada3815c95c38071c2277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_65f4597065bbdae3c3a0ded8e38ac7bfbbb03d9ed1ada3815c95c38071c2277c->leave($__internal_65f4597065bbdae3c3a0ded8e38ac7bfbbb03d9ed1ada3815c95c38071c2277c_prof);

        
        $__internal_73b0475340ab3a7bb4b63f8b78028e755084cbd4b8ef5249c508cd8dccc360ee->leave($__internal_73b0475340ab3a7bb4b63f8b78028e755084cbd4b8ef5249c508cd8dccc360ee_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_a0b1ff4d9fba2360ef8f031aaa1924b041c341ffc22ef98496fa63c0fb08ee85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b1ff4d9fba2360ef8f031aaa1924b041c341ffc22ef98496fa63c0fb08ee85->enter($__internal_a0b1ff4d9fba2360ef8f031aaa1924b041c341ffc22ef98496fa63c0fb08ee85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_815419bec543dbee16230799aa967112f30d4f77acfe788d9d61d08c5370d4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815419bec543dbee16230799aa967112f30d4f77acfe788d9d61d08c5370d4a0->enter($__internal_815419bec543dbee16230799aa967112f30d4f77acfe788d9d61d08c5370d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_815419bec543dbee16230799aa967112f30d4f77acfe788d9d61d08c5370d4a0->leave($__internal_815419bec543dbee16230799aa967112f30d4f77acfe788d9d61d08c5370d4a0_prof);

        
        $__internal_a0b1ff4d9fba2360ef8f031aaa1924b041c341ffc22ef98496fa63c0fb08ee85->leave($__internal_a0b1ff4d9fba2360ef8f031aaa1924b041c341ffc22ef98496fa63c0fb08ee85_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0d8e1a4f4deb88ca10e84af96de326c60f6e5c0e1cff7691dc6eae0a64cb8cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8e1a4f4deb88ca10e84af96de326c60f6e5c0e1cff7691dc6eae0a64cb8cf9->enter($__internal_0d8e1a4f4deb88ca10e84af96de326c60f6e5c0e1cff7691dc6eae0a64cb8cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ec9dca95781c3096a0ab1ca4c011faa7312b059d764149dfe888fefda43173b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9dca95781c3096a0ab1ca4c011faa7312b059d764149dfe888fefda43173b6->enter($__internal_ec9dca95781c3096a0ab1ca4c011faa7312b059d764149dfe888fefda43173b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ec9dca95781c3096a0ab1ca4c011faa7312b059d764149dfe888fefda43173b6->leave($__internal_ec9dca95781c3096a0ab1ca4c011faa7312b059d764149dfe888fefda43173b6_prof);

        
        $__internal_0d8e1a4f4deb88ca10e84af96de326c60f6e5c0e1cff7691dc6eae0a64cb8cf9->leave($__internal_0d8e1a4f4deb88ca10e84af96de326c60f6e5c0e1cff7691dc6eae0a64cb8cf9_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
