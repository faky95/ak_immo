<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c82b341b94754b4afab48f4e0a1854ca642e5d23448e76cb152e474bab9d6e24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_540d7a41e7e0a9797403911fd15bad9ed1b4686862e8c4d02982ec092c54d19d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540d7a41e7e0a9797403911fd15bad9ed1b4686862e8c4d02982ec092c54d19d->enter($__internal_540d7a41e7e0a9797403911fd15bad9ed1b4686862e8c4d02982ec092c54d19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_3b143ac26a125afcdce5fc6a0f5cb8403d6ece4c60220b615ca9572d8115cc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b143ac26a125afcdce5fc6a0f5cb8403d6ece4c60220b615ca9572d8115cc2d->enter($__internal_3b143ac26a125afcdce5fc6a0f5cb8403d6ece4c60220b615ca9572d8115cc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_540d7a41e7e0a9797403911fd15bad9ed1b4686862e8c4d02982ec092c54d19d->leave($__internal_540d7a41e7e0a9797403911fd15bad9ed1b4686862e8c4d02982ec092c54d19d_prof);

        
        $__internal_3b143ac26a125afcdce5fc6a0f5cb8403d6ece4c60220b615ca9572d8115cc2d->leave($__internal_3b143ac26a125afcdce5fc6a0f5cb8403d6ece4c60220b615ca9572d8115cc2d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3f14d7baecef5aea771d55332cecf82b2e64512f89ea49c3bf72818b10980855 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f14d7baecef5aea771d55332cecf82b2e64512f89ea49c3bf72818b10980855->enter($__internal_3f14d7baecef5aea771d55332cecf82b2e64512f89ea49c3bf72818b10980855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5a6611ad89ef7d284f07927b782d2a87eb40f29eb57108bac6afb8d919fa844c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6611ad89ef7d284f07927b782d2a87eb40f29eb57108bac6afb8d919fa844c->enter($__internal_5a6611ad89ef7d284f07927b782d2a87eb40f29eb57108bac6afb8d919fa844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5a6611ad89ef7d284f07927b782d2a87eb40f29eb57108bac6afb8d919fa844c->leave($__internal_5a6611ad89ef7d284f07927b782d2a87eb40f29eb57108bac6afb8d919fa844c_prof);

        
        $__internal_3f14d7baecef5aea771d55332cecf82b2e64512f89ea49c3bf72818b10980855->leave($__internal_3f14d7baecef5aea771d55332cecf82b2e64512f89ea49c3bf72818b10980855_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8797488a0720cdee6ebf4bdeac2da3d3791b7b2052016ee9e71caa07efeeb4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8797488a0720cdee6ebf4bdeac2da3d3791b7b2052016ee9e71caa07efeeb4d8->enter($__internal_8797488a0720cdee6ebf4bdeac2da3d3791b7b2052016ee9e71caa07efeeb4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_5c743497a29108803cb299bfa6a7034e4871140ffd996b1ff6bc112e7cf6b955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c743497a29108803cb299bfa6a7034e4871140ffd996b1ff6bc112e7cf6b955->enter($__internal_5c743497a29108803cb299bfa6a7034e4871140ffd996b1ff6bc112e7cf6b955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5c743497a29108803cb299bfa6a7034e4871140ffd996b1ff6bc112e7cf6b955->leave($__internal_5c743497a29108803cb299bfa6a7034e4871140ffd996b1ff6bc112e7cf6b955_prof);

        
        $__internal_8797488a0720cdee6ebf4bdeac2da3d3791b7b2052016ee9e71caa07efeeb4d8->leave($__internal_8797488a0720cdee6ebf4bdeac2da3d3791b7b2052016ee9e71caa07efeeb4d8_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_810c45d1392ea06df5cbf6c776638c0fda5b3ca50e298a97786d0ef2f387007a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810c45d1392ea06df5cbf6c776638c0fda5b3ca50e298a97786d0ef2f387007a->enter($__internal_810c45d1392ea06df5cbf6c776638c0fda5b3ca50e298a97786d0ef2f387007a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_872ef83eda668c675e5a152ebd4a1c22a50b71457a89b6810e6e2db93810bfe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872ef83eda668c675e5a152ebd4a1c22a50b71457a89b6810e6e2db93810bfe6->enter($__internal_872ef83eda668c675e5a152ebd4a1c22a50b71457a89b6810e6e2db93810bfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_872ef83eda668c675e5a152ebd4a1c22a50b71457a89b6810e6e2db93810bfe6->leave($__internal_872ef83eda668c675e5a152ebd4a1c22a50b71457a89b6810e6e2db93810bfe6_prof);

        
        $__internal_810c45d1392ea06df5cbf6c776638c0fda5b3ca50e298a97786d0ef2f387007a->leave($__internal_810c45d1392ea06df5cbf6c776638c0fda5b3ca50e298a97786d0ef2f387007a_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_f7d31c3c111ccd7dfdca97513dddb144915efba462e8e66c3de405223d44472d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d31c3c111ccd7dfdca97513dddb144915efba462e8e66c3de405223d44472d->enter($__internal_f7d31c3c111ccd7dfdca97513dddb144915efba462e8e66c3de405223d44472d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c8977d0cb4ad05bb73b19aaa9363ee10ec39874c002dbca5646d6616de027949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8977d0cb4ad05bb73b19aaa9363ee10ec39874c002dbca5646d6616de027949->enter($__internal_c8977d0cb4ad05bb73b19aaa9363ee10ec39874c002dbca5646d6616de027949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_c8977d0cb4ad05bb73b19aaa9363ee10ec39874c002dbca5646d6616de027949->leave($__internal_c8977d0cb4ad05bb73b19aaa9363ee10ec39874c002dbca5646d6616de027949_prof);

        
        $__internal_f7d31c3c111ccd7dfdca97513dddb144915efba462e8e66c3de405223d44472d->leave($__internal_f7d31c3c111ccd7dfdca97513dddb144915efba462e8e66c3de405223d44472d_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_678c87a265dc4afaa12eeb3a1c267201c2076c4a3728833967768907240c5916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_678c87a265dc4afaa12eeb3a1c267201c2076c4a3728833967768907240c5916->enter($__internal_678c87a265dc4afaa12eeb3a1c267201c2076c4a3728833967768907240c5916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_66dcdc4ab5a38438aeb631a2ccb2fd188d0823a772a7ac36e63711162a622db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66dcdc4ab5a38438aeb631a2ccb2fd188d0823a772a7ac36e63711162a622db8->enter($__internal_66dcdc4ab5a38438aeb631a2ccb2fd188d0823a772a7ac36e63711162a622db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_66dcdc4ab5a38438aeb631a2ccb2fd188d0823a772a7ac36e63711162a622db8->leave($__internal_66dcdc4ab5a38438aeb631a2ccb2fd188d0823a772a7ac36e63711162a622db8_prof);

        
        $__internal_678c87a265dc4afaa12eeb3a1c267201c2076c4a3728833967768907240c5916->leave($__internal_678c87a265dc4afaa12eeb3a1c267201c2076c4a3728833967768907240c5916_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_034b4ecbd368fedc8856be024420bb359817ec851b93310a1d03fb1ab927a78d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034b4ecbd368fedc8856be024420bb359817ec851b93310a1d03fb1ab927a78d->enter($__internal_034b4ecbd368fedc8856be024420bb359817ec851b93310a1d03fb1ab927a78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d75979dbc2f9c1cb1ab6d8cbe6148c6056b68bf580c04dbd1db7c3947e8670cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d75979dbc2f9c1cb1ab6d8cbe6148c6056b68bf580c04dbd1db7c3947e8670cd->enter($__internal_d75979dbc2f9c1cb1ab6d8cbe6148c6056b68bf580c04dbd1db7c3947e8670cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_d75979dbc2f9c1cb1ab6d8cbe6148c6056b68bf580c04dbd1db7c3947e8670cd->leave($__internal_d75979dbc2f9c1cb1ab6d8cbe6148c6056b68bf580c04dbd1db7c3947e8670cd_prof);

        
        $__internal_034b4ecbd368fedc8856be024420bb359817ec851b93310a1d03fb1ab927a78d->leave($__internal_034b4ecbd368fedc8856be024420bb359817ec851b93310a1d03fb1ab927a78d_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_d6275ced1d7522dcce500a9a87e29b38a3a951707d1204a1abed4265d0be1518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6275ced1d7522dcce500a9a87e29b38a3a951707d1204a1abed4265d0be1518->enter($__internal_d6275ced1d7522dcce500a9a87e29b38a3a951707d1204a1abed4265d0be1518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_9b96529e85d11fcae872ea7d8b6ebfda028c694fd33a4d3e918cbd24b713f873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b96529e85d11fcae872ea7d8b6ebfda028c694fd33a4d3e918cbd24b713f873->enter($__internal_9b96529e85d11fcae872ea7d8b6ebfda028c694fd33a4d3e918cbd24b713f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9b96529e85d11fcae872ea7d8b6ebfda028c694fd33a4d3e918cbd24b713f873->leave($__internal_9b96529e85d11fcae872ea7d8b6ebfda028c694fd33a4d3e918cbd24b713f873_prof);

        
        $__internal_d6275ced1d7522dcce500a9a87e29b38a3a951707d1204a1abed4265d0be1518->leave($__internal_d6275ced1d7522dcce500a9a87e29b38a3a951707d1204a1abed4265d0be1518_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_255c7e87cea826b3776af1eff5c1d68b11ffb0b122101ecdefe252e1f3795ba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255c7e87cea826b3776af1eff5c1d68b11ffb0b122101ecdefe252e1f3795ba6->enter($__internal_255c7e87cea826b3776af1eff5c1d68b11ffb0b122101ecdefe252e1f3795ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9079b7df640a6062c777e106bb3b9f59bd0932c0ca3a02765fb519008e42cd31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9079b7df640a6062c777e106bb3b9f59bd0932c0ca3a02765fb519008e42cd31->enter($__internal_9079b7df640a6062c777e106bb3b9f59bd0932c0ca3a02765fb519008e42cd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9079b7df640a6062c777e106bb3b9f59bd0932c0ca3a02765fb519008e42cd31->leave($__internal_9079b7df640a6062c777e106bb3b9f59bd0932c0ca3a02765fb519008e42cd31_prof);

        
        $__internal_255c7e87cea826b3776af1eff5c1d68b11ffb0b122101ecdefe252e1f3795ba6->leave($__internal_255c7e87cea826b3776af1eff5c1d68b11ffb0b122101ecdefe252e1f3795ba6_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7c432605e006d22353182f12c325380dc7e2cf4aa626957a06c8caf96c3b7243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c432605e006d22353182f12c325380dc7e2cf4aa626957a06c8caf96c3b7243->enter($__internal_7c432605e006d22353182f12c325380dc7e2cf4aa626957a06c8caf96c3b7243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_80160db391a8da75335483b7c9022cf761389ad4bb73c2e8991665ca6fc33003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80160db391a8da75335483b7c9022cf761389ad4bb73c2e8991665ca6fc33003->enter($__internal_80160db391a8da75335483b7c9022cf761389ad4bb73c2e8991665ca6fc33003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_80160db391a8da75335483b7c9022cf761389ad4bb73c2e8991665ca6fc33003->leave($__internal_80160db391a8da75335483b7c9022cf761389ad4bb73c2e8991665ca6fc33003_prof);

        
        $__internal_7c432605e006d22353182f12c325380dc7e2cf4aa626957a06c8caf96c3b7243->leave($__internal_7c432605e006d22353182f12c325380dc7e2cf4aa626957a06c8caf96c3b7243_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_3af8b28f04004df6d27a434e86bcb39281d05eaa8783d47f09e0944bc36f569d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af8b28f04004df6d27a434e86bcb39281d05eaa8783d47f09e0944bc36f569d->enter($__internal_3af8b28f04004df6d27a434e86bcb39281d05eaa8783d47f09e0944bc36f569d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_03627274b08619f13684522871dc956782302d1def802a08abc694cd991e364d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03627274b08619f13684522871dc956782302d1def802a08abc694cd991e364d->enter($__internal_03627274b08619f13684522871dc956782302d1def802a08abc694cd991e364d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_03627274b08619f13684522871dc956782302d1def802a08abc694cd991e364d->leave($__internal_03627274b08619f13684522871dc956782302d1def802a08abc694cd991e364d_prof);

        
        $__internal_3af8b28f04004df6d27a434e86bcb39281d05eaa8783d47f09e0944bc36f569d->leave($__internal_3af8b28f04004df6d27a434e86bcb39281d05eaa8783d47f09e0944bc36f569d_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/var/www/html/ak_immo/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
