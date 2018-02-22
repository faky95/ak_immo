<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_8e431523e4fefa2d0718a1b0b580c0843f646756b805fd7e55ec52fa0098186e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
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
        $__internal_ec80e48c94e9dbaee763e39c1cc581997de46fef2922acd4bbc77636dbaa3b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec80e48c94e9dbaee763e39c1cc581997de46fef2922acd4bbc77636dbaa3b12->enter($__internal_ec80e48c94e9dbaee763e39c1cc581997de46fef2922acd4bbc77636dbaa3b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d81c3d541a46ab9ba383df80be992f672ea97ff2af9fd13d8c2ec41b8573408b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81c3d541a46ab9ba383df80be992f672ea97ff2af9fd13d8c2ec41b8573408b->enter($__internal_d81c3d541a46ab9ba383df80be992f672ea97ff2af9fd13d8c2ec41b8573408b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

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
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('radio_row', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('submit_row', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('reset_row', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_ec80e48c94e9dbaee763e39c1cc581997de46fef2922acd4bbc77636dbaa3b12->leave($__internal_ec80e48c94e9dbaee763e39c1cc581997de46fef2922acd4bbc77636dbaa3b12_prof);

        
        $__internal_d81c3d541a46ab9ba383df80be992f672ea97ff2af9fd13d8c2ec41b8573408b->leave($__internal_d81c3d541a46ab9ba383df80be992f672ea97ff2af9fd13d8c2ec41b8573408b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_d361ce9120a31efa09c0ed39a0c0ef2b310906ea5feb114a88486123eb70c637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d361ce9120a31efa09c0ed39a0c0ef2b310906ea5feb114a88486123eb70c637->enter($__internal_d361ce9120a31efa09c0ed39a0c0ef2b310906ea5feb114a88486123eb70c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_26135c47a8c9d41e47a3733279c8d07448859f056fe6764398e56630d973a4ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26135c47a8c9d41e47a3733279c8d07448859f056fe6764398e56630d973a4ba->enter($__internal_26135c47a8c9d41e47a3733279c8d07448859f056fe6764398e56630d973a4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_26135c47a8c9d41e47a3733279c8d07448859f056fe6764398e56630d973a4ba->leave($__internal_26135c47a8c9d41e47a3733279c8d07448859f056fe6764398e56630d973a4ba_prof);

        
        $__internal_d361ce9120a31efa09c0ed39a0c0ef2b310906ea5feb114a88486123eb70c637->leave($__internal_d361ce9120a31efa09c0ed39a0c0ef2b310906ea5feb114a88486123eb70c637_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9e26f65738752933dda23c62393ef9cb1ff3e53a974d35e1e9cd81d30845ebc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e26f65738752933dda23c62393ef9cb1ff3e53a974d35e1e9cd81d30845ebc2->enter($__internal_9e26f65738752933dda23c62393ef9cb1ff3e53a974d35e1e9cd81d30845ebc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_a0a64a2a82daa84d31eae278e877c7572f80c2bb0f9a05e13a2445f1b47c83b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a64a2a82daa84d31eae278e877c7572f80c2bb0f9a05e13a2445f1b47c83b8->enter($__internal_a0a64a2a82daa84d31eae278e877c7572f80c2bb0f9a05e13a2445f1b47c83b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_a0a64a2a82daa84d31eae278e877c7572f80c2bb0f9a05e13a2445f1b47c83b8->leave($__internal_a0a64a2a82daa84d31eae278e877c7572f80c2bb0f9a05e13a2445f1b47c83b8_prof);

        
        $__internal_9e26f65738752933dda23c62393ef9cb1ff3e53a974d35e1e9cd81d30845ebc2->leave($__internal_9e26f65738752933dda23c62393ef9cb1ff3e53a974d35e1e9cd81d30845ebc2_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_c08ac773ddde076da759cfe5e6808cc123348bfedbc544e9c06e18d8201d96ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c08ac773ddde076da759cfe5e6808cc123348bfedbc544e9c06e18d8201d96ea->enter($__internal_c08ac773ddde076da759cfe5e6808cc123348bfedbc544e9c06e18d8201d96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_dc8dc763aa2e0325fcf27775af283bf6e58713d220e9db2cbc60d8b56d051941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc8dc763aa2e0325fcf27775af283bf6e58713d220e9db2cbc60d8b56d051941->enter($__internal_dc8dc763aa2e0325fcf27775af283bf6e58713d220e9db2cbc60d8b56d051941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_dc8dc763aa2e0325fcf27775af283bf6e58713d220e9db2cbc60d8b56d051941->leave($__internal_dc8dc763aa2e0325fcf27775af283bf6e58713d220e9db2cbc60d8b56d051941_prof);

        
        $__internal_c08ac773ddde076da759cfe5e6808cc123348bfedbc544e9c06e18d8201d96ea->leave($__internal_c08ac773ddde076da759cfe5e6808cc123348bfedbc544e9c06e18d8201d96ea_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_faed6ef35eca5ae01189490890ca6736c8a523f6b41b505c4824bc14890b0909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faed6ef35eca5ae01189490890ca6736c8a523f6b41b505c4824bc14890b0909->enter($__internal_faed6ef35eca5ae01189490890ca6736c8a523f6b41b505c4824bc14890b0909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1269929f02b5afc5f7d7e575bcc16445a63f8f70f82c6e9197e6947e6264879b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1269929f02b5afc5f7d7e575bcc16445a63f8f70f82c6e9197e6947e6264879b->enter($__internal_1269929f02b5afc5f7d7e575bcc16445a63f8f70f82c6e9197e6947e6264879b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"";
        // line 30
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 33
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 34
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 36
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 44
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 45
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 47
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1269929f02b5afc5f7d7e575bcc16445a63f8f70f82c6e9197e6947e6264879b->leave($__internal_1269929f02b5afc5f7d7e575bcc16445a63f8f70f82c6e9197e6947e6264879b_prof);

        
        $__internal_faed6ef35eca5ae01189490890ca6736c8a523f6b41b505c4824bc14890b0909->leave($__internal_faed6ef35eca5ae01189490890ca6736c8a523f6b41b505c4824bc14890b0909_prof);

    }

    // line 52
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_48cd7a8041fd869c1af88fbc047e5aa359ab3e1d700156a0c32e7c9b45a1ba93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cd7a8041fd869c1af88fbc047e5aa359ab3e1d700156a0c32e7c9b45a1ba93->enter($__internal_48cd7a8041fd869c1af88fbc047e5aa359ab3e1d700156a0c32e7c9b45a1ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_ff1be2e3e5149ee89868380b119c5547a310543532397fa0601196310633d3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1be2e3e5149ee89868380b119c5547a310543532397fa0601196310633d3d7->enter($__internal_ff1be2e3e5149ee89868380b119c5547a310543532397fa0601196310633d3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 53
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_ff1be2e3e5149ee89868380b119c5547a310543532397fa0601196310633d3d7->leave($__internal_ff1be2e3e5149ee89868380b119c5547a310543532397fa0601196310633d3d7_prof);

        
        $__internal_48cd7a8041fd869c1af88fbc047e5aa359ab3e1d700156a0c32e7c9b45a1ba93->leave($__internal_48cd7a8041fd869c1af88fbc047e5aa359ab3e1d700156a0c32e7c9b45a1ba93_prof);

    }

    // line 56
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_2b411c0f840c8ca77f0e644515405d8b74e4470929ccefbe1919cf0c28ef52cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b411c0f840c8ca77f0e644515405d8b74e4470929ccefbe1919cf0c28ef52cd->enter($__internal_2b411c0f840c8ca77f0e644515405d8b74e4470929ccefbe1919cf0c28ef52cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b1843964dffb1286e634d401a16cf95bd65b0824d841b30146a5de1753f9ebed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1843964dffb1286e634d401a16cf95bd65b0824d841b30146a5de1753f9ebed->enter($__internal_b1843964dffb1286e634d401a16cf95bd65b0824d841b30146a5de1753f9ebed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 57
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b1843964dffb1286e634d401a16cf95bd65b0824d841b30146a5de1753f9ebed->leave($__internal_b1843964dffb1286e634d401a16cf95bd65b0824d841b30146a5de1753f9ebed_prof);

        
        $__internal_2b411c0f840c8ca77f0e644515405d8b74e4470929ccefbe1919cf0c28ef52cd->leave($__internal_2b411c0f840c8ca77f0e644515405d8b74e4470929ccefbe1919cf0c28ef52cd_prof);

    }

    // line 60
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_023ee861f4720352d599daf72ec1d1d3436ab7cf4e775a7d4e7957ced4087f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023ee861f4720352d599daf72ec1d1d3436ab7cf4e775a7d4e7957ced4087f60->enter($__internal_023ee861f4720352d599daf72ec1d1d3436ab7cf4e775a7d4e7957ced4087f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_0d40a164f6ce09cf62649e23370d77b905f00943549b843e966b37cf5ee4756d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d40a164f6ce09cf62649e23370d77b905f00943549b843e966b37cf5ee4756d->enter($__internal_0d40a164f6ce09cf62649e23370d77b905f00943549b843e966b37cf5ee4756d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 61
        ob_start();
        // line 62
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 63
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 64
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0d40a164f6ce09cf62649e23370d77b905f00943549b843e966b37cf5ee4756d->leave($__internal_0d40a164f6ce09cf62649e23370d77b905f00943549b843e966b37cf5ee4756d_prof);

        
        $__internal_023ee861f4720352d599daf72ec1d1d3436ab7cf4e775a7d4e7957ced4087f60->leave($__internal_023ee861f4720352d599daf72ec1d1d3436ab7cf4e775a7d4e7957ced4087f60_prof);

    }

    // line 72
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d73791a1702bb5f76e77f71ca2fc3909b29f28d7968bd3f0fa57633af7802f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73791a1702bb5f76e77f71ca2fc3909b29f28d7968bd3f0fa57633af7802f90->enter($__internal_d73791a1702bb5f76e77f71ca2fc3909b29f28d7968bd3f0fa57633af7802f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_db260477e513478cf74f8bdbbf740606cf140661dc9cee2bf065ed0c4ad45407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db260477e513478cf74f8bdbbf740606cf140661dc9cee2bf065ed0c4ad45407->enter($__internal_db260477e513478cf74f8bdbbf740606cf140661dc9cee2bf065ed0c4ad45407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 73
        ob_start();
        // line 74
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 75
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 76
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_db260477e513478cf74f8bdbbf740606cf140661dc9cee2bf065ed0c4ad45407->leave($__internal_db260477e513478cf74f8bdbbf740606cf140661dc9cee2bf065ed0c4ad45407_prof);

        
        $__internal_d73791a1702bb5f76e77f71ca2fc3909b29f28d7968bd3f0fa57633af7802f90->leave($__internal_d73791a1702bb5f76e77f71ca2fc3909b29f28d7968bd3f0fa57633af7802f90_prof);

    }

    // line 83
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_4190a5480ce8594a6ff9d4c9a7828e11c0cd052390bddc67c632d6a4a0e1d719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4190a5480ce8594a6ff9d4c9a7828e11c0cd052390bddc67c632d6a4a0e1d719->enter($__internal_4190a5480ce8594a6ff9d4c9a7828e11c0cd052390bddc67c632d6a4a0e1d719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_bd4cf1d8e18973da9b7909fdafa1f83d06095be3b20522d56bcd826f9cbc9746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd4cf1d8e18973da9b7909fdafa1f83d06095be3b20522d56bcd826f9cbc9746->enter($__internal_bd4cf1d8e18973da9b7909fdafa1f83d06095be3b20522d56bcd826f9cbc9746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 84
        ob_start();
        // line 85
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 86
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 87
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd4cf1d8e18973da9b7909fdafa1f83d06095be3b20522d56bcd826f9cbc9746->leave($__internal_bd4cf1d8e18973da9b7909fdafa1f83d06095be3b20522d56bcd826f9cbc9746_prof);

        
        $__internal_4190a5480ce8594a6ff9d4c9a7828e11c0cd052390bddc67c632d6a4a0e1d719->leave($__internal_4190a5480ce8594a6ff9d4c9a7828e11c0cd052390bddc67c632d6a4a0e1d719_prof);

    }

    // line 94
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_4ca25e48703aaf605a08bbf49ad5391919b48e232b9aa3189cfbac071d824e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca25e48703aaf605a08bbf49ad5391919b48e232b9aa3189cfbac071d824e76->enter($__internal_4ca25e48703aaf605a08bbf49ad5391919b48e232b9aa3189cfbac071d824e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_0a228bfa0ce5aeb0fb15c5e26fbe339339acf0dcd8a066f2ca7373200803866c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a228bfa0ce5aeb0fb15c5e26fbe339339acf0dcd8a066f2ca7373200803866c->enter($__internal_0a228bfa0ce5aeb0fb15c5e26fbe339339acf0dcd8a066f2ca7373200803866c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_0a228bfa0ce5aeb0fb15c5e26fbe339339acf0dcd8a066f2ca7373200803866c->leave($__internal_0a228bfa0ce5aeb0fb15c5e26fbe339339acf0dcd8a066f2ca7373200803866c_prof);

        
        $__internal_4ca25e48703aaf605a08bbf49ad5391919b48e232b9aa3189cfbac071d824e76->leave($__internal_4ca25e48703aaf605a08bbf49ad5391919b48e232b9aa3189cfbac071d824e76_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  430 => 94,  415 => 88,  411 => 87,  407 => 86,  404 => 85,  402 => 84,  393 => 83,  378 => 77,  374 => 76,  370 => 75,  365 => 74,  363 => 73,  354 => 72,  339 => 66,  335 => 65,  331 => 64,  327 => 63,  318 => 62,  316 => 61,  307 => 60,  297 => 57,  288 => 56,  278 => 53,  269 => 52,  256 => 47,  250 => 45,  248 => 44,  243 => 42,  240 => 41,  233 => 37,  227 => 36,  223 => 34,  221 => 33,  216 => 31,  212 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 94,  98 => 93,  96 => 83,  93 => 82,  91 => 72,  88 => 71,  86 => 60,  83 => 59,  81 => 56,  78 => 55,  76 => 52,  73 => 51,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
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

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{ form_label(form) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
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
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
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

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "/var/www/html/ak_immo/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/form/bootstrap_3_horizontal_layout.html.twig");
    }
}
