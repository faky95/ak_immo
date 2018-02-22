<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_034c295dba72d29fd39526a9b29134648cc88835e6246464bfbfcb2641afeb33 extends Twig_Template
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
        $__internal_3284935d1e084ecd1a14054b2c0b7cd19ba59389b78b1ad106886c6abee75916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3284935d1e084ecd1a14054b2c0b7cd19ba59389b78b1ad106886c6abee75916->enter($__internal_3284935d1e084ecd1a14054b2c0b7cd19ba59389b78b1ad106886c6abee75916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_9de802c1b10507eaf5bcca411ae375fd3681604849af9fe3e2f270ab76e7acb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de802c1b10507eaf5bcca411ae375fd3681604849af9fe3e2f270ab76e7acb5->enter($__internal_9de802c1b10507eaf5bcca411ae375fd3681604849af9fe3e2f270ab76e7acb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

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
        
        $__internal_3284935d1e084ecd1a14054b2c0b7cd19ba59389b78b1ad106886c6abee75916->leave($__internal_3284935d1e084ecd1a14054b2c0b7cd19ba59389b78b1ad106886c6abee75916_prof);

        
        $__internal_9de802c1b10507eaf5bcca411ae375fd3681604849af9fe3e2f270ab76e7acb5->leave($__internal_9de802c1b10507eaf5bcca411ae375fd3681604849af9fe3e2f270ab76e7acb5_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_08637c84c5428904ce16d6f8ac0b8ab20585afed642f7db42e656454deff9140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08637c84c5428904ce16d6f8ac0b8ab20585afed642f7db42e656454deff9140->enter($__internal_08637c84c5428904ce16d6f8ac0b8ab20585afed642f7db42e656454deff9140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_48d095172f9b76ba2033e8fb2f4008c2c6c60063f5c4bcc3cd55606df32190db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d095172f9b76ba2033e8fb2f4008c2c6c60063f5c4bcc3cd55606df32190db->enter($__internal_48d095172f9b76ba2033e8fb2f4008c2c6c60063f5c4bcc3cd55606df32190db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_48d095172f9b76ba2033e8fb2f4008c2c6c60063f5c4bcc3cd55606df32190db->leave($__internal_48d095172f9b76ba2033e8fb2f4008c2c6c60063f5c4bcc3cd55606df32190db_prof);

        
        $__internal_08637c84c5428904ce16d6f8ac0b8ab20585afed642f7db42e656454deff9140->leave($__internal_08637c84c5428904ce16d6f8ac0b8ab20585afed642f7db42e656454deff9140_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_3a155af640e4b9497278da14b15b1f4a06b70270971c30c38c1b24cb941bf3ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a155af640e4b9497278da14b15b1f4a06b70270971c30c38c1b24cb941bf3ff->enter($__internal_3a155af640e4b9497278da14b15b1f4a06b70270971c30c38c1b24cb941bf3ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_78667ca27b43fed56d6d98deb4406e0ff047bf22742223f04d9877dafd340ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78667ca27b43fed56d6d98deb4406e0ff047bf22742223f04d9877dafd340ba5->enter($__internal_78667ca27b43fed56d6d98deb4406e0ff047bf22742223f04d9877dafd340ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_78667ca27b43fed56d6d98deb4406e0ff047bf22742223f04d9877dafd340ba5->leave($__internal_78667ca27b43fed56d6d98deb4406e0ff047bf22742223f04d9877dafd340ba5_prof);

        
        $__internal_3a155af640e4b9497278da14b15b1f4a06b70270971c30c38c1b24cb941bf3ff->leave($__internal_3a155af640e4b9497278da14b15b1f4a06b70270971c30c38c1b24cb941bf3ff_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fcb46f824d9f5f0a04e2b40a3411a266b9c1d0593de51ec7fb665a23d62829a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb46f824d9f5f0a04e2b40a3411a266b9c1d0593de51ec7fb665a23d62829a1->enter($__internal_fcb46f824d9f5f0a04e2b40a3411a266b9c1d0593de51ec7fb665a23d62829a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8744ac23ee11413ad2d18dcded241f9ae3c04862186a699546f0f3d0ad6576c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8744ac23ee11413ad2d18dcded241f9ae3c04862186a699546f0f3d0ad6576c4->enter($__internal_8744ac23ee11413ad2d18dcded241f9ae3c04862186a699546f0f3d0ad6576c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8744ac23ee11413ad2d18dcded241f9ae3c04862186a699546f0f3d0ad6576c4->leave($__internal_8744ac23ee11413ad2d18dcded241f9ae3c04862186a699546f0f3d0ad6576c4_prof);

        
        $__internal_fcb46f824d9f5f0a04e2b40a3411a266b9c1d0593de51ec7fb665a23d62829a1->leave($__internal_fcb46f824d9f5f0a04e2b40a3411a266b9c1d0593de51ec7fb665a23d62829a1_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b827f634c78145725ebac1f19a8c565b049bddb7d689708937dc74836ab83376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b827f634c78145725ebac1f19a8c565b049bddb7d689708937dc74836ab83376->enter($__internal_b827f634c78145725ebac1f19a8c565b049bddb7d689708937dc74836ab83376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_63994ba7dff2fb53e4b0c2b34bb63ea60ef43ea414a08c6f53d6f5e98aaa03d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63994ba7dff2fb53e4b0c2b34bb63ea60ef43ea414a08c6f53d6f5e98aaa03d6->enter($__internal_63994ba7dff2fb53e4b0c2b34bb63ea60ef43ea414a08c6f53d6f5e98aaa03d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_7986d04686a64a2f751048bb7a031e215ef000adf74b1922a09b2022d1d14392 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ec80b20a11ecbf73de9b2a390cc6a52096b4cd68dcedb649177ecdbd79d3b048 = "{{") && ('' === $__internal_ec80b20a11ecbf73de9b2a390cc6a52096b4cd68dcedb649177ecdbd79d3b048 || 0 === strpos($__internal_7986d04686a64a2f751048bb7a031e215ef000adf74b1922a09b2022d1d14392, $__internal_ec80b20a11ecbf73de9b2a390cc6a52096b4cd68dcedb649177ecdbd79d3b048)));
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
        
        $__internal_63994ba7dff2fb53e4b0c2b34bb63ea60ef43ea414a08c6f53d6f5e98aaa03d6->leave($__internal_63994ba7dff2fb53e4b0c2b34bb63ea60ef43ea414a08c6f53d6f5e98aaa03d6_prof);

        
        $__internal_b827f634c78145725ebac1f19a8c565b049bddb7d689708937dc74836ab83376->leave($__internal_b827f634c78145725ebac1f19a8c565b049bddb7d689708937dc74836ab83376_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_5bb31d9cb46a3d4700ea183ba32f36cff5fb0d9caf62fcc8a2926dfa736675a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb31d9cb46a3d4700ea183ba32f36cff5fb0d9caf62fcc8a2926dfa736675a3->enter($__internal_5bb31d9cb46a3d4700ea183ba32f36cff5fb0d9caf62fcc8a2926dfa736675a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_f07eba1ba2ead1529df2ad4862c906018b304509da68d384a3972d265960155c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07eba1ba2ead1529df2ad4862c906018b304509da68d384a3972d265960155c->enter($__internal_f07eba1ba2ead1529df2ad4862c906018b304509da68d384a3972d265960155c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_f07eba1ba2ead1529df2ad4862c906018b304509da68d384a3972d265960155c->leave($__internal_f07eba1ba2ead1529df2ad4862c906018b304509da68d384a3972d265960155c_prof);

        
        $__internal_5bb31d9cb46a3d4700ea183ba32f36cff5fb0d9caf62fcc8a2926dfa736675a3->leave($__internal_5bb31d9cb46a3d4700ea183ba32f36cff5fb0d9caf62fcc8a2926dfa736675a3_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_5fa9ba65d2547fe9e005a8a34fad9344c75c6296d07f7a562052ab317c59b4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa9ba65d2547fe9e005a8a34fad9344c75c6296d07f7a562052ab317c59b4d6->enter($__internal_5fa9ba65d2547fe9e005a8a34fad9344c75c6296d07f7a562052ab317c59b4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_a827d81a6b096fb7d441d7f32cc825a65e4460c7383b37e6c8c951496f62e66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a827d81a6b096fb7d441d7f32cc825a65e4460c7383b37e6c8c951496f62e66b->enter($__internal_a827d81a6b096fb7d441d7f32cc825a65e4460c7383b37e6c8c951496f62e66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_a827d81a6b096fb7d441d7f32cc825a65e4460c7383b37e6c8c951496f62e66b->leave($__internal_a827d81a6b096fb7d441d7f32cc825a65e4460c7383b37e6c8c951496f62e66b_prof);

        
        $__internal_5fa9ba65d2547fe9e005a8a34fad9344c75c6296d07f7a562052ab317c59b4d6->leave($__internal_5fa9ba65d2547fe9e005a8a34fad9344c75c6296d07f7a562052ab317c59b4d6_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_e408897fd8e528f258b51f9dcf32966ee92a9dea9c9178488371c247fd11f2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e408897fd8e528f258b51f9dcf32966ee92a9dea9c9178488371c247fd11f2d6->enter($__internal_e408897fd8e528f258b51f9dcf32966ee92a9dea9c9178488371c247fd11f2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ad054ea5d9580f50153fa5c5dafd18acc21d5421398b75740df9308ef88122d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad054ea5d9580f50153fa5c5dafd18acc21d5421398b75740df9308ef88122d0->enter($__internal_ad054ea5d9580f50153fa5c5dafd18acc21d5421398b75740df9308ef88122d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_ad054ea5d9580f50153fa5c5dafd18acc21d5421398b75740df9308ef88122d0->leave($__internal_ad054ea5d9580f50153fa5c5dafd18acc21d5421398b75740df9308ef88122d0_prof);

        
        $__internal_e408897fd8e528f258b51f9dcf32966ee92a9dea9c9178488371c247fd11f2d6->leave($__internal_e408897fd8e528f258b51f9dcf32966ee92a9dea9c9178488371c247fd11f2d6_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f3d4b6bee7af5f09ed24a821a35b9557df799b8c4ad7c6ac7ad1baacddbe5e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d4b6bee7af5f09ed24a821a35b9557df799b8c4ad7c6ac7ad1baacddbe5e32->enter($__internal_f3d4b6bee7af5f09ed24a821a35b9557df799b8c4ad7c6ac7ad1baacddbe5e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_88b15155698b56d125650aad49568d5f8de24ad6572571048a5d115926138b3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b15155698b56d125650aad49568d5f8de24ad6572571048a5d115926138b3b->enter($__internal_88b15155698b56d125650aad49568d5f8de24ad6572571048a5d115926138b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_88b15155698b56d125650aad49568d5f8de24ad6572571048a5d115926138b3b->leave($__internal_88b15155698b56d125650aad49568d5f8de24ad6572571048a5d115926138b3b_prof);

        
        $__internal_f3d4b6bee7af5f09ed24a821a35b9557df799b8c4ad7c6ac7ad1baacddbe5e32->leave($__internal_f3d4b6bee7af5f09ed24a821a35b9557df799b8c4ad7c6ac7ad1baacddbe5e32_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_03df5771f2af5ac2fbac5740ac07ffba59b98651a6c42ff027b68b7ea4ffe3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03df5771f2af5ac2fbac5740ac07ffba59b98651a6c42ff027b68b7ea4ffe3d4->enter($__internal_03df5771f2af5ac2fbac5740ac07ffba59b98651a6c42ff027b68b7ea4ffe3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_ac1e1881bd56152e2c867f771e75080b3d62338df81726300cc0e57c04de2e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1e1881bd56152e2c867f771e75080b3d62338df81726300cc0e57c04de2e44->enter($__internal_ac1e1881bd56152e2c867f771e75080b3d62338df81726300cc0e57c04de2e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_ac1e1881bd56152e2c867f771e75080b3d62338df81726300cc0e57c04de2e44->leave($__internal_ac1e1881bd56152e2c867f771e75080b3d62338df81726300cc0e57c04de2e44_prof);

        
        $__internal_03df5771f2af5ac2fbac5740ac07ffba59b98651a6c42ff027b68b7ea4ffe3d4->leave($__internal_03df5771f2af5ac2fbac5740ac07ffba59b98651a6c42ff027b68b7ea4ffe3d4_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fb59527affa2c54579cb2c945d977c94534f5e1f245a387d7f611fefeba9bb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb59527affa2c54579cb2c945d977c94534f5e1f245a387d7f611fefeba9bb74->enter($__internal_fb59527affa2c54579cb2c945d977c94534f5e1f245a387d7f611fefeba9bb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_68a4032cb5083e4e01056a62b0d114843722ffbf3a2a9f509e77af23cf190740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68a4032cb5083e4e01056a62b0d114843722ffbf3a2a9f509e77af23cf190740->enter($__internal_68a4032cb5083e4e01056a62b0d114843722ffbf3a2a9f509e77af23cf190740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_68a4032cb5083e4e01056a62b0d114843722ffbf3a2a9f509e77af23cf190740->leave($__internal_68a4032cb5083e4e01056a62b0d114843722ffbf3a2a9f509e77af23cf190740_prof);

        
        $__internal_fb59527affa2c54579cb2c945d977c94534f5e1f245a387d7f611fefeba9bb74->leave($__internal_fb59527affa2c54579cb2c945d977c94534f5e1f245a387d7f611fefeba9bb74_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_bc8158c3aed8e6fb12bcbd1b47eccb8c7b7ddbbae66d09df64070a235025394e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8158c3aed8e6fb12bcbd1b47eccb8c7b7ddbbae66d09df64070a235025394e->enter($__internal_bc8158c3aed8e6fb12bcbd1b47eccb8c7b7ddbbae66d09df64070a235025394e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_c80efecdb942ed056c8b698d96058bef41c20288bf2c93350c79c6e7f6cea8e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80efecdb942ed056c8b698d96058bef41c20288bf2c93350c79c6e7f6cea8e1->enter($__internal_c80efecdb942ed056c8b698d96058bef41c20288bf2c93350c79c6e7f6cea8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_c80efecdb942ed056c8b698d96058bef41c20288bf2c93350c79c6e7f6cea8e1->leave($__internal_c80efecdb942ed056c8b698d96058bef41c20288bf2c93350c79c6e7f6cea8e1_prof);

        
        $__internal_bc8158c3aed8e6fb12bcbd1b47eccb8c7b7ddbbae66d09df64070a235025394e->leave($__internal_bc8158c3aed8e6fb12bcbd1b47eccb8c7b7ddbbae66d09df64070a235025394e_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_2b4d1ea2b7401e182121fded292fd871e35596a0b60768374a9f3ce2ecc23c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4d1ea2b7401e182121fded292fd871e35596a0b60768374a9f3ce2ecc23c99->enter($__internal_2b4d1ea2b7401e182121fded292fd871e35596a0b60768374a9f3ce2ecc23c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_94fd9df991a3bd10624617770be88867601ed24ec0b768e20dd90cc4d2b37637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94fd9df991a3bd10624617770be88867601ed24ec0b768e20dd90cc4d2b37637->enter($__internal_94fd9df991a3bd10624617770be88867601ed24ec0b768e20dd90cc4d2b37637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_94fd9df991a3bd10624617770be88867601ed24ec0b768e20dd90cc4d2b37637->leave($__internal_94fd9df991a3bd10624617770be88867601ed24ec0b768e20dd90cc4d2b37637_prof);

        
        $__internal_2b4d1ea2b7401e182121fded292fd871e35596a0b60768374a9f3ce2ecc23c99->leave($__internal_2b4d1ea2b7401e182121fded292fd871e35596a0b60768374a9f3ce2ecc23c99_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_8671de71fcd4acb54fc9e8f49bdbac2f4cdc7d0628b6f1efa63e4820dd101075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8671de71fcd4acb54fc9e8f49bdbac2f4cdc7d0628b6f1efa63e4820dd101075->enter($__internal_8671de71fcd4acb54fc9e8f49bdbac2f4cdc7d0628b6f1efa63e4820dd101075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_699ab38e3b166c636c7b6134578668788627908f225388171c57e72466a62dab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699ab38e3b166c636c7b6134578668788627908f225388171c57e72466a62dab->enter($__internal_699ab38e3b166c636c7b6134578668788627908f225388171c57e72466a62dab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_699ab38e3b166c636c7b6134578668788627908f225388171c57e72466a62dab->leave($__internal_699ab38e3b166c636c7b6134578668788627908f225388171c57e72466a62dab_prof);

        
        $__internal_8671de71fcd4acb54fc9e8f49bdbac2f4cdc7d0628b6f1efa63e4820dd101075->leave($__internal_8671de71fcd4acb54fc9e8f49bdbac2f4cdc7d0628b6f1efa63e4820dd101075_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_427dd9e8d041688661e4c41d9dc4d21beabe2fd044a803213cf94389fea7e97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_427dd9e8d041688661e4c41d9dc4d21beabe2fd044a803213cf94389fea7e97a->enter($__internal_427dd9e8d041688661e4c41d9dc4d21beabe2fd044a803213cf94389fea7e97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_f3a8f1976870cd42225798dc5270a60377bdbc14fbd3345dd97b0b099909ab7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a8f1976870cd42225798dc5270a60377bdbc14fbd3345dd97b0b099909ab7b->enter($__internal_f3a8f1976870cd42225798dc5270a60377bdbc14fbd3345dd97b0b099909ab7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_f3a8f1976870cd42225798dc5270a60377bdbc14fbd3345dd97b0b099909ab7b->leave($__internal_f3a8f1976870cd42225798dc5270a60377bdbc14fbd3345dd97b0b099909ab7b_prof);

        
        $__internal_427dd9e8d041688661e4c41d9dc4d21beabe2fd044a803213cf94389fea7e97a->leave($__internal_427dd9e8d041688661e4c41d9dc4d21beabe2fd044a803213cf94389fea7e97a_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_6b6d737e4f35e3fccbf84dd1c0c093f65a0487f496f64b13eae4999f3a0d8f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b6d737e4f35e3fccbf84dd1c0c093f65a0487f496f64b13eae4999f3a0d8f60->enter($__internal_6b6d737e4f35e3fccbf84dd1c0c093f65a0487f496f64b13eae4999f3a0d8f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_84eb463d066717ef3d3414417b5e100c17a32ae9aa884359ae3536c771b8c47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84eb463d066717ef3d3414417b5e100c17a32ae9aa884359ae3536c771b8c47d->enter($__internal_84eb463d066717ef3d3414417b5e100c17a32ae9aa884359ae3536c771b8c47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_84eb463d066717ef3d3414417b5e100c17a32ae9aa884359ae3536c771b8c47d->leave($__internal_84eb463d066717ef3d3414417b5e100c17a32ae9aa884359ae3536c771b8c47d_prof);

        
        $__internal_6b6d737e4f35e3fccbf84dd1c0c093f65a0487f496f64b13eae4999f3a0d8f60->leave($__internal_6b6d737e4f35e3fccbf84dd1c0c093f65a0487f496f64b13eae4999f3a0d8f60_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_8bb465977955211202862d87a6928157badc1f72a3e1ea6ecc9fc83a0081372b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb465977955211202862d87a6928157badc1f72a3e1ea6ecc9fc83a0081372b->enter($__internal_8bb465977955211202862d87a6928157badc1f72a3e1ea6ecc9fc83a0081372b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_453eeaad5cc129764eb34f7b5db7aa857aaf879cb9b226184c2e2372ccb4af21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453eeaad5cc129764eb34f7b5db7aa857aaf879cb9b226184c2e2372ccb4af21->enter($__internal_453eeaad5cc129764eb34f7b5db7aa857aaf879cb9b226184c2e2372ccb4af21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_453eeaad5cc129764eb34f7b5db7aa857aaf879cb9b226184c2e2372ccb4af21->leave($__internal_453eeaad5cc129764eb34f7b5db7aa857aaf879cb9b226184c2e2372ccb4af21_prof);

        
        $__internal_8bb465977955211202862d87a6928157badc1f72a3e1ea6ecc9fc83a0081372b->leave($__internal_8bb465977955211202862d87a6928157badc1f72a3e1ea6ecc9fc83a0081372b_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_a57c6291f78b64680bcd40e1d0e56111f407b921e4673c04e06c9da14a44e66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a57c6291f78b64680bcd40e1d0e56111f407b921e4673c04e06c9da14a44e66a->enter($__internal_a57c6291f78b64680bcd40e1d0e56111f407b921e4673c04e06c9da14a44e66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_69d96742e4cd182788dd4f88218e34c8de21f0cc8aae846872eb79ec35dfbe24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d96742e4cd182788dd4f88218e34c8de21f0cc8aae846872eb79ec35dfbe24->enter($__internal_69d96742e4cd182788dd4f88218e34c8de21f0cc8aae846872eb79ec35dfbe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_69d96742e4cd182788dd4f88218e34c8de21f0cc8aae846872eb79ec35dfbe24->leave($__internal_69d96742e4cd182788dd4f88218e34c8de21f0cc8aae846872eb79ec35dfbe24_prof);

        
        $__internal_a57c6291f78b64680bcd40e1d0e56111f407b921e4673c04e06c9da14a44e66a->leave($__internal_a57c6291f78b64680bcd40e1d0e56111f407b921e4673c04e06c9da14a44e66a_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0f510b9ecc21c77eef84ecaa43f6405e22cc97ca19f1c1b93b60017d5b58f1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f510b9ecc21c77eef84ecaa43f6405e22cc97ca19f1c1b93b60017d5b58f1ac->enter($__internal_0f510b9ecc21c77eef84ecaa43f6405e22cc97ca19f1c1b93b60017d5b58f1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_d7a0ede256f330ad9ea59bd9d1190a79da2ef245b0ec0e9d19d69f0a43010dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a0ede256f330ad9ea59bd9d1190a79da2ef245b0ec0e9d19d69f0a43010dac->enter($__internal_d7a0ede256f330ad9ea59bd9d1190a79da2ef245b0ec0e9d19d69f0a43010dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_d7a0ede256f330ad9ea59bd9d1190a79da2ef245b0ec0e9d19d69f0a43010dac->leave($__internal_d7a0ede256f330ad9ea59bd9d1190a79da2ef245b0ec0e9d19d69f0a43010dac_prof);

        
        $__internal_0f510b9ecc21c77eef84ecaa43f6405e22cc97ca19f1c1b93b60017d5b58f1ac->leave($__internal_0f510b9ecc21c77eef84ecaa43f6405e22cc97ca19f1c1b93b60017d5b58f1ac_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8ee7bb66c9f7159e42c8378ffc5ac1a666f0fa5bf518e9e53b741fa2969d5d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ee7bb66c9f7159e42c8378ffc5ac1a666f0fa5bf518e9e53b741fa2969d5d8c->enter($__internal_8ee7bb66c9f7159e42c8378ffc5ac1a666f0fa5bf518e9e53b741fa2969d5d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_97765cba8d9f26447b24834d03c4f9118bb2aaecfb017588389f88cf9cb2c266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97765cba8d9f26447b24834d03c4f9118bb2aaecfb017588389f88cf9cb2c266->enter($__internal_97765cba8d9f26447b24834d03c4f9118bb2aaecfb017588389f88cf9cb2c266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_97765cba8d9f26447b24834d03c4f9118bb2aaecfb017588389f88cf9cb2c266->leave($__internal_97765cba8d9f26447b24834d03c4f9118bb2aaecfb017588389f88cf9cb2c266_prof);

        
        $__internal_8ee7bb66c9f7159e42c8378ffc5ac1a666f0fa5bf518e9e53b741fa2969d5d8c->leave($__internal_8ee7bb66c9f7159e42c8378ffc5ac1a666f0fa5bf518e9e53b741fa2969d5d8c_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_41f71996552d6ab35900088172a0c03e824d5577416abb02a1d0893aa2ce8cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f71996552d6ab35900088172a0c03e824d5577416abb02a1d0893aa2ce8cc4->enter($__internal_41f71996552d6ab35900088172a0c03e824d5577416abb02a1d0893aa2ce8cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_c5bcb61b2e6667c193643f366e0170488887b660ec27155cc7a0c548873be5b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bcb61b2e6667c193643f366e0170488887b660ec27155cc7a0c548873be5b8->enter($__internal_c5bcb61b2e6667c193643f366e0170488887b660ec27155cc7a0c548873be5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_c5bcb61b2e6667c193643f366e0170488887b660ec27155cc7a0c548873be5b8->leave($__internal_c5bcb61b2e6667c193643f366e0170488887b660ec27155cc7a0c548873be5b8_prof);

        
        $__internal_41f71996552d6ab35900088172a0c03e824d5577416abb02a1d0893aa2ce8cc4->leave($__internal_41f71996552d6ab35900088172a0c03e824d5577416abb02a1d0893aa2ce8cc4_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_ee0fbd6fbae63f0f49daa4ac45dd56d2af9d191485159408295cb341a7f95ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0fbd6fbae63f0f49daa4ac45dd56d2af9d191485159408295cb341a7f95ad5->enter($__internal_ee0fbd6fbae63f0f49daa4ac45dd56d2af9d191485159408295cb341a7f95ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6053b83d57af449ac3be5e7e01240c59ed192524eb31f3554d81bdd42e1cf135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6053b83d57af449ac3be5e7e01240c59ed192524eb31f3554d81bdd42e1cf135->enter($__internal_6053b83d57af449ac3be5e7e01240c59ed192524eb31f3554d81bdd42e1cf135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6053b83d57af449ac3be5e7e01240c59ed192524eb31f3554d81bdd42e1cf135->leave($__internal_6053b83d57af449ac3be5e7e01240c59ed192524eb31f3554d81bdd42e1cf135_prof);

        
        $__internal_ee0fbd6fbae63f0f49daa4ac45dd56d2af9d191485159408295cb341a7f95ad5->leave($__internal_ee0fbd6fbae63f0f49daa4ac45dd56d2af9d191485159408295cb341a7f95ad5_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_495d452653b61b8a365c7c1056a0ccf194747894ff1b6b2dae874e9dd29d5285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495d452653b61b8a365c7c1056a0ccf194747894ff1b6b2dae874e9dd29d5285->enter($__internal_495d452653b61b8a365c7c1056a0ccf194747894ff1b6b2dae874e9dd29d5285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_82392f110fe6a623d62aa2a6f103957dcc4bd8355c7e6485c3982d5bd5d64adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82392f110fe6a623d62aa2a6f103957dcc4bd8355c7e6485c3982d5bd5d64adf->enter($__internal_82392f110fe6a623d62aa2a6f103957dcc4bd8355c7e6485c3982d5bd5d64adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_82392f110fe6a623d62aa2a6f103957dcc4bd8355c7e6485c3982d5bd5d64adf->leave($__internal_82392f110fe6a623d62aa2a6f103957dcc4bd8355c7e6485c3982d5bd5d64adf_prof);

        
        $__internal_495d452653b61b8a365c7c1056a0ccf194747894ff1b6b2dae874e9dd29d5285->leave($__internal_495d452653b61b8a365c7c1056a0ccf194747894ff1b6b2dae874e9dd29d5285_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_2602a9b72152803bb19e8485fd8b91767100c7f9488803d4b0c683514c5cd0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2602a9b72152803bb19e8485fd8b91767100c7f9488803d4b0c683514c5cd0b6->enter($__internal_2602a9b72152803bb19e8485fd8b91767100c7f9488803d4b0c683514c5cd0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_eecf8c108e9c3755c863c7d66534a32d5fb97a6bfeec7a36893fad4c638bf4ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecf8c108e9c3755c863c7d66534a32d5fb97a6bfeec7a36893fad4c638bf4ec->enter($__internal_eecf8c108e9c3755c863c7d66534a32d5fb97a6bfeec7a36893fad4c638bf4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_eecf8c108e9c3755c863c7d66534a32d5fb97a6bfeec7a36893fad4c638bf4ec->leave($__internal_eecf8c108e9c3755c863c7d66534a32d5fb97a6bfeec7a36893fad4c638bf4ec_prof);

        
        $__internal_2602a9b72152803bb19e8485fd8b91767100c7f9488803d4b0c683514c5cd0b6->leave($__internal_2602a9b72152803bb19e8485fd8b91767100c7f9488803d4b0c683514c5cd0b6_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_a49e43d0c14b0b062919eab756124ce350a6255599ce23b4e7c20d76a54b7d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a49e43d0c14b0b062919eab756124ce350a6255599ce23b4e7c20d76a54b7d43->enter($__internal_a49e43d0c14b0b062919eab756124ce350a6255599ce23b4e7c20d76a54b7d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5f98b6ce7350d4830823ae3549d5b1dae1eff7898c1c20b590031e5295509406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f98b6ce7350d4830823ae3549d5b1dae1eff7898c1c20b590031e5295509406->enter($__internal_5f98b6ce7350d4830823ae3549d5b1dae1eff7898c1c20b590031e5295509406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5f98b6ce7350d4830823ae3549d5b1dae1eff7898c1c20b590031e5295509406->leave($__internal_5f98b6ce7350d4830823ae3549d5b1dae1eff7898c1c20b590031e5295509406_prof);

        
        $__internal_a49e43d0c14b0b062919eab756124ce350a6255599ce23b4e7c20d76a54b7d43->leave($__internal_a49e43d0c14b0b062919eab756124ce350a6255599ce23b4e7c20d76a54b7d43_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4097c065940e899afd47c19b19d09bd5e0b716aee6f91ee530f912592314baf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4097c065940e899afd47c19b19d09bd5e0b716aee6f91ee530f912592314baf8->enter($__internal_4097c065940e899afd47c19b19d09bd5e0b716aee6f91ee530f912592314baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0c75d514383bde7bcda3fd136d4b661b4633106dde1bf5076d4963af2fcb51da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c75d514383bde7bcda3fd136d4b661b4633106dde1bf5076d4963af2fcb51da->enter($__internal_0c75d514383bde7bcda3fd136d4b661b4633106dde1bf5076d4963af2fcb51da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_0c75d514383bde7bcda3fd136d4b661b4633106dde1bf5076d4963af2fcb51da->leave($__internal_0c75d514383bde7bcda3fd136d4b661b4633106dde1bf5076d4963af2fcb51da_prof);

        
        $__internal_4097c065940e899afd47c19b19d09bd5e0b716aee6f91ee530f912592314baf8->leave($__internal_4097c065940e899afd47c19b19d09bd5e0b716aee6f91ee530f912592314baf8_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f243d2588f1fa66507cef30b5a37f8168276de1bf565178836a269d4daa3dbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f243d2588f1fa66507cef30b5a37f8168276de1bf565178836a269d4daa3dbb2->enter($__internal_f243d2588f1fa66507cef30b5a37f8168276de1bf565178836a269d4daa3dbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_6e72f792d90025871a37ad578ceb2274077a389202ffe4bda9de8acf37f7eccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e72f792d90025871a37ad578ceb2274077a389202ffe4bda9de8acf37f7eccf->enter($__internal_6e72f792d90025871a37ad578ceb2274077a389202ffe4bda9de8acf37f7eccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_6e72f792d90025871a37ad578ceb2274077a389202ffe4bda9de8acf37f7eccf->leave($__internal_6e72f792d90025871a37ad578ceb2274077a389202ffe4bda9de8acf37f7eccf_prof);

        
        $__internal_f243d2588f1fa66507cef30b5a37f8168276de1bf565178836a269d4daa3dbb2->leave($__internal_f243d2588f1fa66507cef30b5a37f8168276de1bf565178836a269d4daa3dbb2_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_535e30702a5142b33b21094a03d3ae46695751a03c387c14af8ea71582ddf481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535e30702a5142b33b21094a03d3ae46695751a03c387c14af8ea71582ddf481->enter($__internal_535e30702a5142b33b21094a03d3ae46695751a03c387c14af8ea71582ddf481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9461e9a4a6cc5be8c0d9eb077af47907bcc988f9c20d30a360bd29e5c1f02828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9461e9a4a6cc5be8c0d9eb077af47907bcc988f9c20d30a360bd29e5c1f02828->enter($__internal_9461e9a4a6cc5be8c0d9eb077af47907bcc988f9c20d30a360bd29e5c1f02828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_9461e9a4a6cc5be8c0d9eb077af47907bcc988f9c20d30a360bd29e5c1f02828->leave($__internal_9461e9a4a6cc5be8c0d9eb077af47907bcc988f9c20d30a360bd29e5c1f02828_prof);

        
        $__internal_535e30702a5142b33b21094a03d3ae46695751a03c387c14af8ea71582ddf481->leave($__internal_535e30702a5142b33b21094a03d3ae46695751a03c387c14af8ea71582ddf481_prof);

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
