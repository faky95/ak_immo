<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_02b9245c90d19e77280ed002a768e4b5b59f9c90623c95f9b75ce48dec1697b2 extends Twig_Template
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
        $__internal_987908b22e0e939c5756fff32518939aecc7548de28db408be12a7913a1ee755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_987908b22e0e939c5756fff32518939aecc7548de28db408be12a7913a1ee755->enter($__internal_987908b22e0e939c5756fff32518939aecc7548de28db408be12a7913a1ee755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0ebf0473125fd27d62eb8752a351620612d0498fdb8568f345862b0368ca369b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebf0473125fd27d62eb8752a351620612d0498fdb8568f345862b0368ca369b->enter($__internal_0ebf0473125fd27d62eb8752a351620612d0498fdb8568f345862b0368ca369b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_987908b22e0e939c5756fff32518939aecc7548de28db408be12a7913a1ee755->leave($__internal_987908b22e0e939c5756fff32518939aecc7548de28db408be12a7913a1ee755_prof);

        
        $__internal_0ebf0473125fd27d62eb8752a351620612d0498fdb8568f345862b0368ca369b->leave($__internal_0ebf0473125fd27d62eb8752a351620612d0498fdb8568f345862b0368ca369b_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_0faad75abdeb11f6b3f0bfe62615888c46f913f74d6ed2f5f4a4a8d6eae4e30a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0faad75abdeb11f6b3f0bfe62615888c46f913f74d6ed2f5f4a4a8d6eae4e30a->enter($__internal_0faad75abdeb11f6b3f0bfe62615888c46f913f74d6ed2f5f4a4a8d6eae4e30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_fdd7dd8656030b199f96ec410250abe11dc7c44472f2efe75591c1c037552cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd7dd8656030b199f96ec410250abe11dc7c44472f2efe75591c1c037552cf0->enter($__internal_fdd7dd8656030b199f96ec410250abe11dc7c44472f2efe75591c1c037552cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_fdd7dd8656030b199f96ec410250abe11dc7c44472f2efe75591c1c037552cf0->leave($__internal_fdd7dd8656030b199f96ec410250abe11dc7c44472f2efe75591c1c037552cf0_prof);

        
        $__internal_0faad75abdeb11f6b3f0bfe62615888c46f913f74d6ed2f5f4a4a8d6eae4e30a->leave($__internal_0faad75abdeb11f6b3f0bfe62615888c46f913f74d6ed2f5f4a4a8d6eae4e30a_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_23b10d6d1fa8e0f03d4a031c51e93c36d19200efac524b6790f8953e4efc8b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b10d6d1fa8e0f03d4a031c51e93c36d19200efac524b6790f8953e4efc8b7c->enter($__internal_23b10d6d1fa8e0f03d4a031c51e93c36d19200efac524b6790f8953e4efc8b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ab8a7c2ba4dc19d80c693536437b8b59b0914a30f5c35a45ac1841c279128999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8a7c2ba4dc19d80c693536437b8b59b0914a30f5c35a45ac1841c279128999->enter($__internal_ab8a7c2ba4dc19d80c693536437b8b59b0914a30f5c35a45ac1841c279128999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ab8a7c2ba4dc19d80c693536437b8b59b0914a30f5c35a45ac1841c279128999->leave($__internal_ab8a7c2ba4dc19d80c693536437b8b59b0914a30f5c35a45ac1841c279128999_prof);

        
        $__internal_23b10d6d1fa8e0f03d4a031c51e93c36d19200efac524b6790f8953e4efc8b7c->leave($__internal_23b10d6d1fa8e0f03d4a031c51e93c36d19200efac524b6790f8953e4efc8b7c_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_0b85e7cb059e006a22438a0963f0c549b0d1bba5976687ce9a7000dac71cb8be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b85e7cb059e006a22438a0963f0c549b0d1bba5976687ce9a7000dac71cb8be->enter($__internal_0b85e7cb059e006a22438a0963f0c549b0d1bba5976687ce9a7000dac71cb8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_52ced4de7e373ff285f2937ba049d2b0cce2c4203b29b261b1f7148f93e71a3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ced4de7e373ff285f2937ba049d2b0cce2c4203b29b261b1f7148f93e71a3d->enter($__internal_52ced4de7e373ff285f2937ba049d2b0cce2c4203b29b261b1f7148f93e71a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_52ced4de7e373ff285f2937ba049d2b0cce2c4203b29b261b1f7148f93e71a3d->leave($__internal_52ced4de7e373ff285f2937ba049d2b0cce2c4203b29b261b1f7148f93e71a3d_prof);

        
        $__internal_0b85e7cb059e006a22438a0963f0c549b0d1bba5976687ce9a7000dac71cb8be->leave($__internal_0b85e7cb059e006a22438a0963f0c549b0d1bba5976687ce9a7000dac71cb8be_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_07303c3a9d90e32d03a85f2af0b95dad95226976e2c4ac0f199492bc3ae49325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07303c3a9d90e32d03a85f2af0b95dad95226976e2c4ac0f199492bc3ae49325->enter($__internal_07303c3a9d90e32d03a85f2af0b95dad95226976e2c4ac0f199492bc3ae49325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4a5fda096a174f9ed7ef08c34e4eb9f794935fd49324debb507edb14257a8c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a5fda096a174f9ed7ef08c34e4eb9f794935fd49324debb507edb14257a8c79->enter($__internal_4a5fda096a174f9ed7ef08c34e4eb9f794935fd49324debb507edb14257a8c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_4a5fda096a174f9ed7ef08c34e4eb9f794935fd49324debb507edb14257a8c79->leave($__internal_4a5fda096a174f9ed7ef08c34e4eb9f794935fd49324debb507edb14257a8c79_prof);

        
        $__internal_07303c3a9d90e32d03a85f2af0b95dad95226976e2c4ac0f199492bc3ae49325->leave($__internal_07303c3a9d90e32d03a85f2af0b95dad95226976e2c4ac0f199492bc3ae49325_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b0fa44c6a0c72061107be51c70f9e4c74a2965fac423ce8c209032195b2b995a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0fa44c6a0c72061107be51c70f9e4c74a2965fac423ce8c209032195b2b995a->enter($__internal_b0fa44c6a0c72061107be51c70f9e4c74a2965fac423ce8c209032195b2b995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c574cc0819aeb2619712c6c4bbb4b72c11541ac6ba16383ed0ef128638c5f724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c574cc0819aeb2619712c6c4bbb4b72c11541ac6ba16383ed0ef128638c5f724->enter($__internal_c574cc0819aeb2619712c6c4bbb4b72c11541ac6ba16383ed0ef128638c5f724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_c574cc0819aeb2619712c6c4bbb4b72c11541ac6ba16383ed0ef128638c5f724->leave($__internal_c574cc0819aeb2619712c6c4bbb4b72c11541ac6ba16383ed0ef128638c5f724_prof);

        
        $__internal_b0fa44c6a0c72061107be51c70f9e4c74a2965fac423ce8c209032195b2b995a->leave($__internal_b0fa44c6a0c72061107be51c70f9e4c74a2965fac423ce8c209032195b2b995a_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_319afa97d82d7a4b44fb0c1654e2c320ea4867f1aabb2f6f7839286e5107c9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319afa97d82d7a4b44fb0c1654e2c320ea4867f1aabb2f6f7839286e5107c9bd->enter($__internal_319afa97d82d7a4b44fb0c1654e2c320ea4867f1aabb2f6f7839286e5107c9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_992b6ac56495c1b139d10b3260d19b39e0fbd2331418eafbb65bbbb206c51384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992b6ac56495c1b139d10b3260d19b39e0fbd2331418eafbb65bbbb206c51384->enter($__internal_992b6ac56495c1b139d10b3260d19b39e0fbd2331418eafbb65bbbb206c51384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_992b6ac56495c1b139d10b3260d19b39e0fbd2331418eafbb65bbbb206c51384->leave($__internal_992b6ac56495c1b139d10b3260d19b39e0fbd2331418eafbb65bbbb206c51384_prof);

        
        $__internal_319afa97d82d7a4b44fb0c1654e2c320ea4867f1aabb2f6f7839286e5107c9bd->leave($__internal_319afa97d82d7a4b44fb0c1654e2c320ea4867f1aabb2f6f7839286e5107c9bd_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_3482eed50da790900d21a4af6bad2abd78c1ea098585f158a7b147a0fed07178 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3482eed50da790900d21a4af6bad2abd78c1ea098585f158a7b147a0fed07178->enter($__internal_3482eed50da790900d21a4af6bad2abd78c1ea098585f158a7b147a0fed07178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_fc67deeb2a019af954a62fded194fc97dc8146af6dddabc93bb40035d5e8ee73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc67deeb2a019af954a62fded194fc97dc8146af6dddabc93bb40035d5e8ee73->enter($__internal_fc67deeb2a019af954a62fded194fc97dc8146af6dddabc93bb40035d5e8ee73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_fc67deeb2a019af954a62fded194fc97dc8146af6dddabc93bb40035d5e8ee73->leave($__internal_fc67deeb2a019af954a62fded194fc97dc8146af6dddabc93bb40035d5e8ee73_prof);

        
        $__internal_3482eed50da790900d21a4af6bad2abd78c1ea098585f158a7b147a0fed07178->leave($__internal_3482eed50da790900d21a4af6bad2abd78c1ea098585f158a7b147a0fed07178_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_47d67e3373abb8f0625ac0e233715676e83c0a3c8505e7f923aa086033a95985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47d67e3373abb8f0625ac0e233715676e83c0a3c8505e7f923aa086033a95985->enter($__internal_47d67e3373abb8f0625ac0e233715676e83c0a3c8505e7f923aa086033a95985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_3fcb7f69af65b16464d46e1b38e86966055f01908cb687147ed7119032cb1887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcb7f69af65b16464d46e1b38e86966055f01908cb687147ed7119032cb1887->enter($__internal_3fcb7f69af65b16464d46e1b38e86966055f01908cb687147ed7119032cb1887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_3fcb7f69af65b16464d46e1b38e86966055f01908cb687147ed7119032cb1887->leave($__internal_3fcb7f69af65b16464d46e1b38e86966055f01908cb687147ed7119032cb1887_prof);

        
        $__internal_47d67e3373abb8f0625ac0e233715676e83c0a3c8505e7f923aa086033a95985->leave($__internal_47d67e3373abb8f0625ac0e233715676e83c0a3c8505e7f923aa086033a95985_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_8eb0291a2f6f41792f257c09f092fe67f14d43286462a8e67378734265fe4e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb0291a2f6f41792f257c09f092fe67f14d43286462a8e67378734265fe4e63->enter($__internal_8eb0291a2f6f41792f257c09f092fe67f14d43286462a8e67378734265fe4e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6969ef251d3a6c70b5c2c0772d47ce9d9efb863c8b95a211d10d6a397a6e1495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6969ef251d3a6c70b5c2c0772d47ce9d9efb863c8b95a211d10d6a397a6e1495->enter($__internal_6969ef251d3a6c70b5c2c0772d47ce9d9efb863c8b95a211d10d6a397a6e1495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_6969ef251d3a6c70b5c2c0772d47ce9d9efb863c8b95a211d10d6a397a6e1495->leave($__internal_6969ef251d3a6c70b5c2c0772d47ce9d9efb863c8b95a211d10d6a397a6e1495_prof);

        
        $__internal_8eb0291a2f6f41792f257c09f092fe67f14d43286462a8e67378734265fe4e63->leave($__internal_8eb0291a2f6f41792f257c09f092fe67f14d43286462a8e67378734265fe4e63_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_b1b42d993a61d12ecc484932b4bae49df08e84d080e65407b4dbd9c48df95772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b42d993a61d12ecc484932b4bae49df08e84d080e65407b4dbd9c48df95772->enter($__internal_b1b42d993a61d12ecc484932b4bae49df08e84d080e65407b4dbd9c48df95772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_abb465be47b752c1105250e3df52b4bce9f06c3d81f2da2eccc95bd450eb37a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb465be47b752c1105250e3df52b4bce9f06c3d81f2da2eccc95bd450eb37a0->enter($__internal_abb465be47b752c1105250e3df52b4bce9f06c3d81f2da2eccc95bd450eb37a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_abb465be47b752c1105250e3df52b4bce9f06c3d81f2da2eccc95bd450eb37a0->leave($__internal_abb465be47b752c1105250e3df52b4bce9f06c3d81f2da2eccc95bd450eb37a0_prof);

        
        $__internal_b1b42d993a61d12ecc484932b4bae49df08e84d080e65407b4dbd9c48df95772->leave($__internal_b1b42d993a61d12ecc484932b4bae49df08e84d080e65407b4dbd9c48df95772_prof);

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
