<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_4c3e8642ab5ae9a5b5c0f10b3e6124f641500e8a5d1573f8b69791079eb98091 extends Twig_Template
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
        $__internal_41342efb7a50bd2161303cc69289fd44e165e0e13d00c0e2038586bc562a8f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41342efb7a50bd2161303cc69289fd44e165e0e13d00c0e2038586bc562a8f88->enter($__internal_41342efb7a50bd2161303cc69289fd44e165e0e13d00c0e2038586bc562a8f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_8c6231160d9f29401b9919fad660145185e75f0b547167ddb86eee9b66a126da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6231160d9f29401b9919fad660145185e75f0b547167ddb86eee9b66a126da->enter($__internal_8c6231160d9f29401b9919fad660145185e75f0b547167ddb86eee9b66a126da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_41342efb7a50bd2161303cc69289fd44e165e0e13d00c0e2038586bc562a8f88->leave($__internal_41342efb7a50bd2161303cc69289fd44e165e0e13d00c0e2038586bc562a8f88_prof);

        
        $__internal_8c6231160d9f29401b9919fad660145185e75f0b547167ddb86eee9b66a126da->leave($__internal_8c6231160d9f29401b9919fad660145185e75f0b547167ddb86eee9b66a126da_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_d316156151583529cc28316149ec3676cc551730ddaa75a752e7b9034a5362d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d316156151583529cc28316149ec3676cc551730ddaa75a752e7b9034a5362d3->enter($__internal_d316156151583529cc28316149ec3676cc551730ddaa75a752e7b9034a5362d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f43b8257a3dadacf4debbf15a3c0d2260c96d83f785e760574bfd8105595c9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43b8257a3dadacf4debbf15a3c0d2260c96d83f785e760574bfd8105595c9c4->enter($__internal_f43b8257a3dadacf4debbf15a3c0d2260c96d83f785e760574bfd8105595c9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f43b8257a3dadacf4debbf15a3c0d2260c96d83f785e760574bfd8105595c9c4->leave($__internal_f43b8257a3dadacf4debbf15a3c0d2260c96d83f785e760574bfd8105595c9c4_prof);

        
        $__internal_d316156151583529cc28316149ec3676cc551730ddaa75a752e7b9034a5362d3->leave($__internal_d316156151583529cc28316149ec3676cc551730ddaa75a752e7b9034a5362d3_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3a8cc4d5567ce76a3700fbe1f042c5a05f829aec0c14920d2808705625cd982a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8cc4d5567ce76a3700fbe1f042c5a05f829aec0c14920d2808705625cd982a->enter($__internal_3a8cc4d5567ce76a3700fbe1f042c5a05f829aec0c14920d2808705625cd982a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_fe5fe232a067a9b61633012487d4df5a928b8f9cbcd0795c16451ea07815eb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5fe232a067a9b61633012487d4df5a928b8f9cbcd0795c16451ea07815eb60->enter($__internal_fe5fe232a067a9b61633012487d4df5a928b8f9cbcd0795c16451ea07815eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_fe5fe232a067a9b61633012487d4df5a928b8f9cbcd0795c16451ea07815eb60->leave($__internal_fe5fe232a067a9b61633012487d4df5a928b8f9cbcd0795c16451ea07815eb60_prof);

        
        $__internal_3a8cc4d5567ce76a3700fbe1f042c5a05f829aec0c14920d2808705625cd982a->leave($__internal_3a8cc4d5567ce76a3700fbe1f042c5a05f829aec0c14920d2808705625cd982a_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ef462ed9ab06dc2d6c9d04fe6ce4bcc7d563342ad6d341c84190f7cbfd686f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef462ed9ab06dc2d6c9d04fe6ce4bcc7d563342ad6d341c84190f7cbfd686f44->enter($__internal_ef462ed9ab06dc2d6c9d04fe6ce4bcc7d563342ad6d341c84190f7cbfd686f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_3d7c840ed6b7a03cb33f0b0913233846f4d2946f904fcb5d7c18d9e3198740f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7c840ed6b7a03cb33f0b0913233846f4d2946f904fcb5d7c18d9e3198740f7->enter($__internal_3d7c840ed6b7a03cb33f0b0913233846f4d2946f904fcb5d7c18d9e3198740f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_3d7c840ed6b7a03cb33f0b0913233846f4d2946f904fcb5d7c18d9e3198740f7->leave($__internal_3d7c840ed6b7a03cb33f0b0913233846f4d2946f904fcb5d7c18d9e3198740f7_prof);

        
        $__internal_ef462ed9ab06dc2d6c9d04fe6ce4bcc7d563342ad6d341c84190f7cbfd686f44->leave($__internal_ef462ed9ab06dc2d6c9d04fe6ce4bcc7d563342ad6d341c84190f7cbfd686f44_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_81870bc4a8c1684f119914c76f667f54c00b6fb3f0abe37923c61acef2142ea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81870bc4a8c1684f119914c76f667f54c00b6fb3f0abe37923c61acef2142ea9->enter($__internal_81870bc4a8c1684f119914c76f667f54c00b6fb3f0abe37923c61acef2142ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b7fb96cf397d89e292e58f628b98aa51fea930c3cc25b380b59e4d247ba5b8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7fb96cf397d89e292e58f628b98aa51fea930c3cc25b380b59e4d247ba5b8fe->enter($__internal_b7fb96cf397d89e292e58f628b98aa51fea930c3cc25b380b59e4d247ba5b8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_4a20868a1f0d208223451b4e5c836965192f56f024ddf13e97bdfff3d4156dfd = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1d1603fa2e357d547bc8d9e614ceba0ae40663c1083141e6ed2aa5dd6c7cca38 = "{{") && ('' === $__internal_1d1603fa2e357d547bc8d9e614ceba0ae40663c1083141e6ed2aa5dd6c7cca38 || 0 === strpos($__internal_4a20868a1f0d208223451b4e5c836965192f56f024ddf13e97bdfff3d4156dfd, $__internal_1d1603fa2e357d547bc8d9e614ceba0ae40663c1083141e6ed2aa5dd6c7cca38)));
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
        
        $__internal_b7fb96cf397d89e292e58f628b98aa51fea930c3cc25b380b59e4d247ba5b8fe->leave($__internal_b7fb96cf397d89e292e58f628b98aa51fea930c3cc25b380b59e4d247ba5b8fe_prof);

        
        $__internal_81870bc4a8c1684f119914c76f667f54c00b6fb3f0abe37923c61acef2142ea9->leave($__internal_81870bc4a8c1684f119914c76f667f54c00b6fb3f0abe37923c61acef2142ea9_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7436212b8d0671fc7e8701589a701979baaa5d73fe502016d9159082f0a0373b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7436212b8d0671fc7e8701589a701979baaa5d73fe502016d9159082f0a0373b->enter($__internal_7436212b8d0671fc7e8701589a701979baaa5d73fe502016d9159082f0a0373b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ab67455ec72e2dcfe4a2de863f2de21d313b373b0203df566e5105f1eb37c58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab67455ec72e2dcfe4a2de863f2de21d313b373b0203df566e5105f1eb37c58d->enter($__internal_ab67455ec72e2dcfe4a2de863f2de21d313b373b0203df566e5105f1eb37c58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ab67455ec72e2dcfe4a2de863f2de21d313b373b0203df566e5105f1eb37c58d->leave($__internal_ab67455ec72e2dcfe4a2de863f2de21d313b373b0203df566e5105f1eb37c58d_prof);

        
        $__internal_7436212b8d0671fc7e8701589a701979baaa5d73fe502016d9159082f0a0373b->leave($__internal_7436212b8d0671fc7e8701589a701979baaa5d73fe502016d9159082f0a0373b_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_e0f4ae0550be0a9d8f0b28b39925bbf0850692cf638d028f1de9381a5f6cb056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f4ae0550be0a9d8f0b28b39925bbf0850692cf638d028f1de9381a5f6cb056->enter($__internal_e0f4ae0550be0a9d8f0b28b39925bbf0850692cf638d028f1de9381a5f6cb056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3a35da7bc57ca4874acac6dbf24ac35b2d9584def5dbcea51c08348d913804c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a35da7bc57ca4874acac6dbf24ac35b2d9584def5dbcea51c08348d913804c9->enter($__internal_3a35da7bc57ca4874acac6dbf24ac35b2d9584def5dbcea51c08348d913804c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_3a35da7bc57ca4874acac6dbf24ac35b2d9584def5dbcea51c08348d913804c9->leave($__internal_3a35da7bc57ca4874acac6dbf24ac35b2d9584def5dbcea51c08348d913804c9_prof);

        
        $__internal_e0f4ae0550be0a9d8f0b28b39925bbf0850692cf638d028f1de9381a5f6cb056->leave($__internal_e0f4ae0550be0a9d8f0b28b39925bbf0850692cf638d028f1de9381a5f6cb056_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f127c831eb31e3ce3a0332375e4d63588e3cff4e57de6487d7e28f5295a68675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f127c831eb31e3ce3a0332375e4d63588e3cff4e57de6487d7e28f5295a68675->enter($__internal_f127c831eb31e3ce3a0332375e4d63588e3cff4e57de6487d7e28f5295a68675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_c8feb1db480b9682b144afe13cfc8af53f8de34564edaa338b8299b599c51d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8feb1db480b9682b144afe13cfc8af53f8de34564edaa338b8299b599c51d77->enter($__internal_c8feb1db480b9682b144afe13cfc8af53f8de34564edaa338b8299b599c51d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_c8feb1db480b9682b144afe13cfc8af53f8de34564edaa338b8299b599c51d77->leave($__internal_c8feb1db480b9682b144afe13cfc8af53f8de34564edaa338b8299b599c51d77_prof);

        
        $__internal_f127c831eb31e3ce3a0332375e4d63588e3cff4e57de6487d7e28f5295a68675->leave($__internal_f127c831eb31e3ce3a0332375e4d63588e3cff4e57de6487d7e28f5295a68675_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_b625b2c6c6c958db0a46f20a2b6db170791c2affb15b244fcbc14a3592585ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b625b2c6c6c958db0a46f20a2b6db170791c2affb15b244fcbc14a3592585ec2->enter($__internal_b625b2c6c6c958db0a46f20a2b6db170791c2affb15b244fcbc14a3592585ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_136820b9ef98e18e3baf6ec342e44984896563e24abc5b0da0f4bf55f5041050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136820b9ef98e18e3baf6ec342e44984896563e24abc5b0da0f4bf55f5041050->enter($__internal_136820b9ef98e18e3baf6ec342e44984896563e24abc5b0da0f4bf55f5041050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_136820b9ef98e18e3baf6ec342e44984896563e24abc5b0da0f4bf55f5041050->leave($__internal_136820b9ef98e18e3baf6ec342e44984896563e24abc5b0da0f4bf55f5041050_prof);

        
        $__internal_b625b2c6c6c958db0a46f20a2b6db170791c2affb15b244fcbc14a3592585ec2->leave($__internal_b625b2c6c6c958db0a46f20a2b6db170791c2affb15b244fcbc14a3592585ec2_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9c7ac3125749dd2698301bf709ed601d957da79aed2f80ee37856781ecb9ddd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7ac3125749dd2698301bf709ed601d957da79aed2f80ee37856781ecb9ddd7->enter($__internal_9c7ac3125749dd2698301bf709ed601d957da79aed2f80ee37856781ecb9ddd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_ae68a6f8523a2868b01a31945d8f00ca078a5a36a9beaa4c1b905e2b7bd033b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae68a6f8523a2868b01a31945d8f00ca078a5a36a9beaa4c1b905e2b7bd033b1->enter($__internal_ae68a6f8523a2868b01a31945d8f00ca078a5a36a9beaa4c1b905e2b7bd033b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_ae68a6f8523a2868b01a31945d8f00ca078a5a36a9beaa4c1b905e2b7bd033b1->leave($__internal_ae68a6f8523a2868b01a31945d8f00ca078a5a36a9beaa4c1b905e2b7bd033b1_prof);

        
        $__internal_9c7ac3125749dd2698301bf709ed601d957da79aed2f80ee37856781ecb9ddd7->leave($__internal_9c7ac3125749dd2698301bf709ed601d957da79aed2f80ee37856781ecb9ddd7_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a6b6d5432ce107422ccfbc775eb59f8aa220f4bde1ce0efd0da1b89173bb032a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b6d5432ce107422ccfbc775eb59f8aa220f4bde1ce0efd0da1b89173bb032a->enter($__internal_a6b6d5432ce107422ccfbc775eb59f8aa220f4bde1ce0efd0da1b89173bb032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5d1830a7a25e4714995579caac62dfe71ac8fd7a062c3dc1111e41b5d85a3b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1830a7a25e4714995579caac62dfe71ac8fd7a062c3dc1111e41b5d85a3b7e->enter($__internal_5d1830a7a25e4714995579caac62dfe71ac8fd7a062c3dc1111e41b5d85a3b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5d1830a7a25e4714995579caac62dfe71ac8fd7a062c3dc1111e41b5d85a3b7e->leave($__internal_5d1830a7a25e4714995579caac62dfe71ac8fd7a062c3dc1111e41b5d85a3b7e_prof);

        
        $__internal_a6b6d5432ce107422ccfbc775eb59f8aa220f4bde1ce0efd0da1b89173bb032a->leave($__internal_a6b6d5432ce107422ccfbc775eb59f8aa220f4bde1ce0efd0da1b89173bb032a_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_688ecfeed2493570f8d0ada44a64769a1b46582701685ea870a98e7826d50883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688ecfeed2493570f8d0ada44a64769a1b46582701685ea870a98e7826d50883->enter($__internal_688ecfeed2493570f8d0ada44a64769a1b46582701685ea870a98e7826d50883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_07d6a73f10783e54fbaa68066631d83ac6b4974cbf3c1c4dc57fb30da797ec43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d6a73f10783e54fbaa68066631d83ac6b4974cbf3c1c4dc57fb30da797ec43->enter($__internal_07d6a73f10783e54fbaa68066631d83ac6b4974cbf3c1c4dc57fb30da797ec43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_07d6a73f10783e54fbaa68066631d83ac6b4974cbf3c1c4dc57fb30da797ec43->leave($__internal_07d6a73f10783e54fbaa68066631d83ac6b4974cbf3c1c4dc57fb30da797ec43_prof);

        
        $__internal_688ecfeed2493570f8d0ada44a64769a1b46582701685ea870a98e7826d50883->leave($__internal_688ecfeed2493570f8d0ada44a64769a1b46582701685ea870a98e7826d50883_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_36ca4375d0ffe5bb057b80450a6c1004e0ca441ad1a20b5a637d6b89661d129a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36ca4375d0ffe5bb057b80450a6c1004e0ca441ad1a20b5a637d6b89661d129a->enter($__internal_36ca4375d0ffe5bb057b80450a6c1004e0ca441ad1a20b5a637d6b89661d129a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e9480cb82c435ed85704b8cfa4641743bf0d897ce79c2fecd040c0d5b2bd2c02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9480cb82c435ed85704b8cfa4641743bf0d897ce79c2fecd040c0d5b2bd2c02->enter($__internal_e9480cb82c435ed85704b8cfa4641743bf0d897ce79c2fecd040c0d5b2bd2c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_e9480cb82c435ed85704b8cfa4641743bf0d897ce79c2fecd040c0d5b2bd2c02->leave($__internal_e9480cb82c435ed85704b8cfa4641743bf0d897ce79c2fecd040c0d5b2bd2c02_prof);

        
        $__internal_36ca4375d0ffe5bb057b80450a6c1004e0ca441ad1a20b5a637d6b89661d129a->leave($__internal_36ca4375d0ffe5bb057b80450a6c1004e0ca441ad1a20b5a637d6b89661d129a_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_37db2216fcce6e5b472219669fd4bc295f7b8997fbf7dd6ed97a8f9e52bc4d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37db2216fcce6e5b472219669fd4bc295f7b8997fbf7dd6ed97a8f9e52bc4d74->enter($__internal_37db2216fcce6e5b472219669fd4bc295f7b8997fbf7dd6ed97a8f9e52bc4d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0d251514f6170ba9897a90a9d84426d85386e72341bb9bebb27cea58d8bae691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d251514f6170ba9897a90a9d84426d85386e72341bb9bebb27cea58d8bae691->enter($__internal_0d251514f6170ba9897a90a9d84426d85386e72341bb9bebb27cea58d8bae691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_0d251514f6170ba9897a90a9d84426d85386e72341bb9bebb27cea58d8bae691->leave($__internal_0d251514f6170ba9897a90a9d84426d85386e72341bb9bebb27cea58d8bae691_prof);

        
        $__internal_37db2216fcce6e5b472219669fd4bc295f7b8997fbf7dd6ed97a8f9e52bc4d74->leave($__internal_37db2216fcce6e5b472219669fd4bc295f7b8997fbf7dd6ed97a8f9e52bc4d74_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_481e2174907a5375be810dd47a0c4b2012f5dc8f95e566fcba7ae0872c81eb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_481e2174907a5375be810dd47a0c4b2012f5dc8f95e566fcba7ae0872c81eb9f->enter($__internal_481e2174907a5375be810dd47a0c4b2012f5dc8f95e566fcba7ae0872c81eb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c6378aab65812f976f416fe4fe65d1303636634d7843c5d37363cd33c9ace77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6378aab65812f976f416fe4fe65d1303636634d7843c5d37363cd33c9ace77d->enter($__internal_c6378aab65812f976f416fe4fe65d1303636634d7843c5d37363cd33c9ace77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c6378aab65812f976f416fe4fe65d1303636634d7843c5d37363cd33c9ace77d->leave($__internal_c6378aab65812f976f416fe4fe65d1303636634d7843c5d37363cd33c9ace77d_prof);

        
        $__internal_481e2174907a5375be810dd47a0c4b2012f5dc8f95e566fcba7ae0872c81eb9f->leave($__internal_481e2174907a5375be810dd47a0c4b2012f5dc8f95e566fcba7ae0872c81eb9f_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_86fe4997b5c6869a8c553188e2dbfd1c6c0f42d279ac90e889fcc35b719fad2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fe4997b5c6869a8c553188e2dbfd1c6c0f42d279ac90e889fcc35b719fad2d->enter($__internal_86fe4997b5c6869a8c553188e2dbfd1c6c0f42d279ac90e889fcc35b719fad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_444c06dc341bcf00b19081377e0620e4d1ead6b18334e4429ec6f72485756111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444c06dc341bcf00b19081377e0620e4d1ead6b18334e4429ec6f72485756111->enter($__internal_444c06dc341bcf00b19081377e0620e4d1ead6b18334e4429ec6f72485756111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_444c06dc341bcf00b19081377e0620e4d1ead6b18334e4429ec6f72485756111->leave($__internal_444c06dc341bcf00b19081377e0620e4d1ead6b18334e4429ec6f72485756111_prof);

        
        $__internal_86fe4997b5c6869a8c553188e2dbfd1c6c0f42d279ac90e889fcc35b719fad2d->leave($__internal_86fe4997b5c6869a8c553188e2dbfd1c6c0f42d279ac90e889fcc35b719fad2d_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_03ce8a15c998db8a3412b8cf73b76a72921b6d9efe1f95727409079f949befd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ce8a15c998db8a3412b8cf73b76a72921b6d9efe1f95727409079f949befd9->enter($__internal_03ce8a15c998db8a3412b8cf73b76a72921b6d9efe1f95727409079f949befd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_ffb2dac2703b05d949bdeec7fd442bfb9ef18dec8ff0b4156f62c77e76ba6969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb2dac2703b05d949bdeec7fd442bfb9ef18dec8ff0b4156f62c77e76ba6969->enter($__internal_ffb2dac2703b05d949bdeec7fd442bfb9ef18dec8ff0b4156f62c77e76ba6969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_ffb2dac2703b05d949bdeec7fd442bfb9ef18dec8ff0b4156f62c77e76ba6969->leave($__internal_ffb2dac2703b05d949bdeec7fd442bfb9ef18dec8ff0b4156f62c77e76ba6969_prof);

        
        $__internal_03ce8a15c998db8a3412b8cf73b76a72921b6d9efe1f95727409079f949befd9->leave($__internal_03ce8a15c998db8a3412b8cf73b76a72921b6d9efe1f95727409079f949befd9_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_1df1ce610f11b30f030d39fccdfc1cd2bdbca98274ab5ea533daaae40e267266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df1ce610f11b30f030d39fccdfc1cd2bdbca98274ab5ea533daaae40e267266->enter($__internal_1df1ce610f11b30f030d39fccdfc1cd2bdbca98274ab5ea533daaae40e267266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5b376434cb702b0863e850da394f512caff024771cf9852f7b58128f7ea4f195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b376434cb702b0863e850da394f512caff024771cf9852f7b58128f7ea4f195->enter($__internal_5b376434cb702b0863e850da394f512caff024771cf9852f7b58128f7ea4f195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5b376434cb702b0863e850da394f512caff024771cf9852f7b58128f7ea4f195->leave($__internal_5b376434cb702b0863e850da394f512caff024771cf9852f7b58128f7ea4f195_prof);

        
        $__internal_1df1ce610f11b30f030d39fccdfc1cd2bdbca98274ab5ea533daaae40e267266->leave($__internal_1df1ce610f11b30f030d39fccdfc1cd2bdbca98274ab5ea533daaae40e267266_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_4250a4cba963a9cce8a8b395b1c71924eb7f662e36ff45c9ea7bbc66a39f462a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4250a4cba963a9cce8a8b395b1c71924eb7f662e36ff45c9ea7bbc66a39f462a->enter($__internal_4250a4cba963a9cce8a8b395b1c71924eb7f662e36ff45c9ea7bbc66a39f462a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_26e6365a04121dcb9037e990dc311c227076e91a30c8fc256664296531c6943d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e6365a04121dcb9037e990dc311c227076e91a30c8fc256664296531c6943d->enter($__internal_26e6365a04121dcb9037e990dc311c227076e91a30c8fc256664296531c6943d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_26e6365a04121dcb9037e990dc311c227076e91a30c8fc256664296531c6943d->leave($__internal_26e6365a04121dcb9037e990dc311c227076e91a30c8fc256664296531c6943d_prof);

        
        $__internal_4250a4cba963a9cce8a8b395b1c71924eb7f662e36ff45c9ea7bbc66a39f462a->leave($__internal_4250a4cba963a9cce8a8b395b1c71924eb7f662e36ff45c9ea7bbc66a39f462a_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1787afa8680b9090ecc506685ec297fb2a98c8f277151b050d0299b4e7eaa09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1787afa8680b9090ecc506685ec297fb2a98c8f277151b050d0299b4e7eaa09a->enter($__internal_1787afa8680b9090ecc506685ec297fb2a98c8f277151b050d0299b4e7eaa09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_132477a6711bedfbe89ae8b2d19e4da94dbece9c62541f2d2c6953f4c24434b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132477a6711bedfbe89ae8b2d19e4da94dbece9c62541f2d2c6953f4c24434b7->enter($__internal_132477a6711bedfbe89ae8b2d19e4da94dbece9c62541f2d2c6953f4c24434b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_132477a6711bedfbe89ae8b2d19e4da94dbece9c62541f2d2c6953f4c24434b7->leave($__internal_132477a6711bedfbe89ae8b2d19e4da94dbece9c62541f2d2c6953f4c24434b7_prof);

        
        $__internal_1787afa8680b9090ecc506685ec297fb2a98c8f277151b050d0299b4e7eaa09a->leave($__internal_1787afa8680b9090ecc506685ec297fb2a98c8f277151b050d0299b4e7eaa09a_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9543b217765953514b231ff602b21221a2d90c4f97d6aac0bf38782d20072cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9543b217765953514b231ff602b21221a2d90c4f97d6aac0bf38782d20072cb0->enter($__internal_9543b217765953514b231ff602b21221a2d90c4f97d6aac0bf38782d20072cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f60c6cef1c9116bac18f004dac34e8ab6d0c044d1d1eef266d4b9261d50d8322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60c6cef1c9116bac18f004dac34e8ab6d0c044d1d1eef266d4b9261d50d8322->enter($__internal_f60c6cef1c9116bac18f004dac34e8ab6d0c044d1d1eef266d4b9261d50d8322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_f60c6cef1c9116bac18f004dac34e8ab6d0c044d1d1eef266d4b9261d50d8322->leave($__internal_f60c6cef1c9116bac18f004dac34e8ab6d0c044d1d1eef266d4b9261d50d8322_prof);

        
        $__internal_9543b217765953514b231ff602b21221a2d90c4f97d6aac0bf38782d20072cb0->leave($__internal_9543b217765953514b231ff602b21221a2d90c4f97d6aac0bf38782d20072cb0_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_b1f7400b7f0e6fd5383b79198d0ed91087bc2b2bbd662dfacfbcba93a0b09e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f7400b7f0e6fd5383b79198d0ed91087bc2b2bbd662dfacfbcba93a0b09e88->enter($__internal_b1f7400b7f0e6fd5383b79198d0ed91087bc2b2bbd662dfacfbcba93a0b09e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_152578050b3a47c244323b1e282bdf0c4b9f32bc560c350d96e0b83e6273fe1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_152578050b3a47c244323b1e282bdf0c4b9f32bc560c350d96e0b83e6273fe1c->enter($__internal_152578050b3a47c244323b1e282bdf0c4b9f32bc560c350d96e0b83e6273fe1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_152578050b3a47c244323b1e282bdf0c4b9f32bc560c350d96e0b83e6273fe1c->leave($__internal_152578050b3a47c244323b1e282bdf0c4b9f32bc560c350d96e0b83e6273fe1c_prof);

        
        $__internal_b1f7400b7f0e6fd5383b79198d0ed91087bc2b2bbd662dfacfbcba93a0b09e88->leave($__internal_b1f7400b7f0e6fd5383b79198d0ed91087bc2b2bbd662dfacfbcba93a0b09e88_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4fa975e4b227bb5bb125e7c7bc4270db132af36968d7a7eb6a6d0f45755b3fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa975e4b227bb5bb125e7c7bc4270db132af36968d7a7eb6a6d0f45755b3fbd->enter($__internal_4fa975e4b227bb5bb125e7c7bc4270db132af36968d7a7eb6a6d0f45755b3fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_4bce3a9bc4f04b27e395e167bb5ff6fb1e028bfdeb33f982e85287ea1cb0b993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bce3a9bc4f04b27e395e167bb5ff6fb1e028bfdeb33f982e85287ea1cb0b993->enter($__internal_4bce3a9bc4f04b27e395e167bb5ff6fb1e028bfdeb33f982e85287ea1cb0b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4bce3a9bc4f04b27e395e167bb5ff6fb1e028bfdeb33f982e85287ea1cb0b993->leave($__internal_4bce3a9bc4f04b27e395e167bb5ff6fb1e028bfdeb33f982e85287ea1cb0b993_prof);

        
        $__internal_4fa975e4b227bb5bb125e7c7bc4270db132af36968d7a7eb6a6d0f45755b3fbd->leave($__internal_4fa975e4b227bb5bb125e7c7bc4270db132af36968d7a7eb6a6d0f45755b3fbd_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b7e07a32a70975c99b5d7323c20dd7a055553293ea7f0a544fe66e7485ed72b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e07a32a70975c99b5d7323c20dd7a055553293ea7f0a544fe66e7485ed72b9->enter($__internal_b7e07a32a70975c99b5d7323c20dd7a055553293ea7f0a544fe66e7485ed72b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_59254f7927d7c14a330b0ff4dedb6596b0584ad91227b2c797aa46e07e131216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59254f7927d7c14a330b0ff4dedb6596b0584ad91227b2c797aa46e07e131216->enter($__internal_59254f7927d7c14a330b0ff4dedb6596b0584ad91227b2c797aa46e07e131216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_59254f7927d7c14a330b0ff4dedb6596b0584ad91227b2c797aa46e07e131216->leave($__internal_59254f7927d7c14a330b0ff4dedb6596b0584ad91227b2c797aa46e07e131216_prof);

        
        $__internal_b7e07a32a70975c99b5d7323c20dd7a055553293ea7f0a544fe66e7485ed72b9->leave($__internal_b7e07a32a70975c99b5d7323c20dd7a055553293ea7f0a544fe66e7485ed72b9_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2ecdb10d43235bb7e07eed2b4066504e472c16cea894910503638e5ca7f640b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ecdb10d43235bb7e07eed2b4066504e472c16cea894910503638e5ca7f640b5->enter($__internal_2ecdb10d43235bb7e07eed2b4066504e472c16cea894910503638e5ca7f640b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_dfbbfdef01d38cdc15b4ecae010b7e2fddc3effd883c31c2a9727705c251fe6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbbfdef01d38cdc15b4ecae010b7e2fddc3effd883c31c2a9727705c251fe6b->enter($__internal_dfbbfdef01d38cdc15b4ecae010b7e2fddc3effd883c31c2a9727705c251fe6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_dfbbfdef01d38cdc15b4ecae010b7e2fddc3effd883c31c2a9727705c251fe6b->leave($__internal_dfbbfdef01d38cdc15b4ecae010b7e2fddc3effd883c31c2a9727705c251fe6b_prof);

        
        $__internal_2ecdb10d43235bb7e07eed2b4066504e472c16cea894910503638e5ca7f640b5->leave($__internal_2ecdb10d43235bb7e07eed2b4066504e472c16cea894910503638e5ca7f640b5_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_e38eec0ff515566d3a6ca24be0cb837994dc0992d9e335c5f6667ef5b7b4174e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38eec0ff515566d3a6ca24be0cb837994dc0992d9e335c5f6667ef5b7b4174e->enter($__internal_e38eec0ff515566d3a6ca24be0cb837994dc0992d9e335c5f6667ef5b7b4174e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_5873e3dd1d87011a4b10f866b64ca18ed0eca52e6d4b706eea922e3b3edd8630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5873e3dd1d87011a4b10f866b64ca18ed0eca52e6d4b706eea922e3b3edd8630->enter($__internal_5873e3dd1d87011a4b10f866b64ca18ed0eca52e6d4b706eea922e3b3edd8630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_5873e3dd1d87011a4b10f866b64ca18ed0eca52e6d4b706eea922e3b3edd8630->leave($__internal_5873e3dd1d87011a4b10f866b64ca18ed0eca52e6d4b706eea922e3b3edd8630_prof);

        
        $__internal_e38eec0ff515566d3a6ca24be0cb837994dc0992d9e335c5f6667ef5b7b4174e->leave($__internal_e38eec0ff515566d3a6ca24be0cb837994dc0992d9e335c5f6667ef5b7b4174e_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_3353f18551e0b59256a1abe3d65f688effd14c38600f043249120b3f2529bfb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3353f18551e0b59256a1abe3d65f688effd14c38600f043249120b3f2529bfb7->enter($__internal_3353f18551e0b59256a1abe3d65f688effd14c38600f043249120b3f2529bfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_8055faee700a871d2948f692d959c277cc03d0c626873739e95282905eaf885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8055faee700a871d2948f692d959c277cc03d0c626873739e95282905eaf885a->enter($__internal_8055faee700a871d2948f692d959c277cc03d0c626873739e95282905eaf885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_8055faee700a871d2948f692d959c277cc03d0c626873739e95282905eaf885a->leave($__internal_8055faee700a871d2948f692d959c277cc03d0c626873739e95282905eaf885a_prof);

        
        $__internal_3353f18551e0b59256a1abe3d65f688effd14c38600f043249120b3f2529bfb7->leave($__internal_3353f18551e0b59256a1abe3d65f688effd14c38600f043249120b3f2529bfb7_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_978374c3557af41006799fccca6c499eeafcd2ea7b6d875efb399c3c4a9f97d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978374c3557af41006799fccca6c499eeafcd2ea7b6d875efb399c3c4a9f97d3->enter($__internal_978374c3557af41006799fccca6c499eeafcd2ea7b6d875efb399c3c4a9f97d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2fad75ec8d073a1b1ebecd2d8c2c2ba87f4ea0c3e781fec8412fe8ef4b616569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fad75ec8d073a1b1ebecd2d8c2c2ba87f4ea0c3e781fec8412fe8ef4b616569->enter($__internal_2fad75ec8d073a1b1ebecd2d8c2c2ba87f4ea0c3e781fec8412fe8ef4b616569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_2fad75ec8d073a1b1ebecd2d8c2c2ba87f4ea0c3e781fec8412fe8ef4b616569->leave($__internal_2fad75ec8d073a1b1ebecd2d8c2c2ba87f4ea0c3e781fec8412fe8ef4b616569_prof);

        
        $__internal_978374c3557af41006799fccca6c499eeafcd2ea7b6d875efb399c3c4a9f97d3->leave($__internal_978374c3557af41006799fccca6c499eeafcd2ea7b6d875efb399c3c4a9f97d3_prof);

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
