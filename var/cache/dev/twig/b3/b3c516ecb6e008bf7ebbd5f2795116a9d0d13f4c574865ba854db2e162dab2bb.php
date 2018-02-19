<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_c24b52a99e076f36143083598375da26bc08a9076ab245b0d3f0411be48be368 extends Twig_Template
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
        $__internal_abf5ee39fdfc88181e4085f5813c6a45d239cc062bdd5f4ea087dd513cf1b3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf5ee39fdfc88181e4085f5813c6a45d239cc062bdd5f4ea087dd513cf1b3a3->enter($__internal_abf5ee39fdfc88181e4085f5813c6a45d239cc062bdd5f4ea087dd513cf1b3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_b9dd8fea7ed55c441533bd0730c346c741e53dcda91c2a9929eb56668b40d9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9dd8fea7ed55c441533bd0730c346c741e53dcda91c2a9929eb56668b40d9f8->enter($__internal_b9dd8fea7ed55c441533bd0730c346c741e53dcda91c2a9929eb56668b40d9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_abf5ee39fdfc88181e4085f5813c6a45d239cc062bdd5f4ea087dd513cf1b3a3->leave($__internal_abf5ee39fdfc88181e4085f5813c6a45d239cc062bdd5f4ea087dd513cf1b3a3_prof);

        
        $__internal_b9dd8fea7ed55c441533bd0730c346c741e53dcda91c2a9929eb56668b40d9f8->leave($__internal_b9dd8fea7ed55c441533bd0730c346c741e53dcda91c2a9929eb56668b40d9f8_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_07a29e79552fd6d7fd494abe9c97907f8ce8754d290be03279d2b3d86b9faecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a29e79552fd6d7fd494abe9c97907f8ce8754d290be03279d2b3d86b9faecb->enter($__internal_07a29e79552fd6d7fd494abe9c97907f8ce8754d290be03279d2b3d86b9faecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_e9addf52ef1a6f0eeb466aded2f7d425c7ebeb9d012765b9c28f6f5e5c728633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9addf52ef1a6f0eeb466aded2f7d425c7ebeb9d012765b9c28f6f5e5c728633->enter($__internal_e9addf52ef1a6f0eeb466aded2f7d425c7ebeb9d012765b9c28f6f5e5c728633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_e9addf52ef1a6f0eeb466aded2f7d425c7ebeb9d012765b9c28f6f5e5c728633->leave($__internal_e9addf52ef1a6f0eeb466aded2f7d425c7ebeb9d012765b9c28f6f5e5c728633_prof);

        
        $__internal_07a29e79552fd6d7fd494abe9c97907f8ce8754d290be03279d2b3d86b9faecb->leave($__internal_07a29e79552fd6d7fd494abe9c97907f8ce8754d290be03279d2b3d86b9faecb_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ac837febc846a33a1b80fd8ad851d4b20febaeb60fe5e31b8996c65faa4e7859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac837febc846a33a1b80fd8ad851d4b20febaeb60fe5e31b8996c65faa4e7859->enter($__internal_ac837febc846a33a1b80fd8ad851d4b20febaeb60fe5e31b8996c65faa4e7859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_80189a8d0db47f1f6c367cdfaccfcda60f107966561bd7ab745319a4c306e918 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80189a8d0db47f1f6c367cdfaccfcda60f107966561bd7ab745319a4c306e918->enter($__internal_80189a8d0db47f1f6c367cdfaccfcda60f107966561bd7ab745319a4c306e918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_80189a8d0db47f1f6c367cdfaccfcda60f107966561bd7ab745319a4c306e918->leave($__internal_80189a8d0db47f1f6c367cdfaccfcda60f107966561bd7ab745319a4c306e918_prof);

        
        $__internal_ac837febc846a33a1b80fd8ad851d4b20febaeb60fe5e31b8996c65faa4e7859->leave($__internal_ac837febc846a33a1b80fd8ad851d4b20febaeb60fe5e31b8996c65faa4e7859_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ee0ec1772f5443446472a543250f01559f68cf86f2190e7e91138d2753b5c784 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0ec1772f5443446472a543250f01559f68cf86f2190e7e91138d2753b5c784->enter($__internal_ee0ec1772f5443446472a543250f01559f68cf86f2190e7e91138d2753b5c784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_13e4f710278f27886324abb84290495483b524705e0f0f709549f0dfbe4a68a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e4f710278f27886324abb84290495483b524705e0f0f709549f0dfbe4a68a0->enter($__internal_13e4f710278f27886324abb84290495483b524705e0f0f709549f0dfbe4a68a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_13e4f710278f27886324abb84290495483b524705e0f0f709549f0dfbe4a68a0->leave($__internal_13e4f710278f27886324abb84290495483b524705e0f0f709549f0dfbe4a68a0_prof);

        
        $__internal_ee0ec1772f5443446472a543250f01559f68cf86f2190e7e91138d2753b5c784->leave($__internal_ee0ec1772f5443446472a543250f01559f68cf86f2190e7e91138d2753b5c784_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_93937577ada5fef844e29935675c47ad65313ae4b7dba8ee87b88a1704e30f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93937577ada5fef844e29935675c47ad65313ae4b7dba8ee87b88a1704e30f1a->enter($__internal_93937577ada5fef844e29935675c47ad65313ae4b7dba8ee87b88a1704e30f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_c6a6b337b9807a064c6d00ee811f9fe9b3645599f0d782ab3cb23afa98cfb95f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a6b337b9807a064c6d00ee811f9fe9b3645599f0d782ab3cb23afa98cfb95f->enter($__internal_c6a6b337b9807a064c6d00ee811f9fe9b3645599f0d782ab3cb23afa98cfb95f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_c6a6b337b9807a064c6d00ee811f9fe9b3645599f0d782ab3cb23afa98cfb95f->leave($__internal_c6a6b337b9807a064c6d00ee811f9fe9b3645599f0d782ab3cb23afa98cfb95f_prof);

        
        $__internal_93937577ada5fef844e29935675c47ad65313ae4b7dba8ee87b88a1704e30f1a->leave($__internal_93937577ada5fef844e29935675c47ad65313ae4b7dba8ee87b88a1704e30f1a_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_03989fc978dd79f871715ede46757b0f702f624ccff446662d862b75ac8cb4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03989fc978dd79f871715ede46757b0f702f624ccff446662d862b75ac8cb4d9->enter($__internal_03989fc978dd79f871715ede46757b0f702f624ccff446662d862b75ac8cb4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a413b4d994ffc4fc95b79b93837e342f4e79c1c897046f72e92eadfe48b16104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a413b4d994ffc4fc95b79b93837e342f4e79c1c897046f72e92eadfe48b16104->enter($__internal_a413b4d994ffc4fc95b79b93837e342f4e79c1c897046f72e92eadfe48b16104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_a413b4d994ffc4fc95b79b93837e342f4e79c1c897046f72e92eadfe48b16104->leave($__internal_a413b4d994ffc4fc95b79b93837e342f4e79c1c897046f72e92eadfe48b16104_prof);

        
        $__internal_03989fc978dd79f871715ede46757b0f702f624ccff446662d862b75ac8cb4d9->leave($__internal_03989fc978dd79f871715ede46757b0f702f624ccff446662d862b75ac8cb4d9_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_1da3e8f5b7c267184c1ec86468810db4371764df807fb67c05615cfe966cdf23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da3e8f5b7c267184c1ec86468810db4371764df807fb67c05615cfe966cdf23->enter($__internal_1da3e8f5b7c267184c1ec86468810db4371764df807fb67c05615cfe966cdf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_e90362fbf45aba5f17fd035e7c82fa19803ea8946402052b16d06dffae846819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90362fbf45aba5f17fd035e7c82fa19803ea8946402052b16d06dffae846819->enter($__internal_e90362fbf45aba5f17fd035e7c82fa19803ea8946402052b16d06dffae846819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_e90362fbf45aba5f17fd035e7c82fa19803ea8946402052b16d06dffae846819->leave($__internal_e90362fbf45aba5f17fd035e7c82fa19803ea8946402052b16d06dffae846819_prof);

        
        $__internal_1da3e8f5b7c267184c1ec86468810db4371764df807fb67c05615cfe966cdf23->leave($__internal_1da3e8f5b7c267184c1ec86468810db4371764df807fb67c05615cfe966cdf23_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_5aac80b65ae1aba2f56fd8ecb94bf289ddd0a35d8f886182d7351755b38d38f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5aac80b65ae1aba2f56fd8ecb94bf289ddd0a35d8f886182d7351755b38d38f6->enter($__internal_5aac80b65ae1aba2f56fd8ecb94bf289ddd0a35d8f886182d7351755b38d38f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_ddc87974de5357b8c3314497445a93cf148110e884f26b1672b38ec188cc5e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddc87974de5357b8c3314497445a93cf148110e884f26b1672b38ec188cc5e2b->enter($__internal_ddc87974de5357b8c3314497445a93cf148110e884f26b1672b38ec188cc5e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

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
        
        $__internal_ddc87974de5357b8c3314497445a93cf148110e884f26b1672b38ec188cc5e2b->leave($__internal_ddc87974de5357b8c3314497445a93cf148110e884f26b1672b38ec188cc5e2b_prof);

        
        $__internal_5aac80b65ae1aba2f56fd8ecb94bf289ddd0a35d8f886182d7351755b38d38f6->leave($__internal_5aac80b65ae1aba2f56fd8ecb94bf289ddd0a35d8f886182d7351755b38d38f6_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_407080e1d9770c275cc81d999326177c22f6efd5e1f32c943a898d5b3f5d7f1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407080e1d9770c275cc81d999326177c22f6efd5e1f32c943a898d5b3f5d7f1c->enter($__internal_407080e1d9770c275cc81d999326177c22f6efd5e1f32c943a898d5b3f5d7f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_87a7812de4506073a8a74119816840a46c8ff6f3e4440e2c199f6d1acc81f7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a7812de4506073a8a74119816840a46c8ff6f3e4440e2c199f6d1acc81f7e5->enter($__internal_87a7812de4506073a8a74119816840a46c8ff6f3e4440e2c199f6d1acc81f7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_87a7812de4506073a8a74119816840a46c8ff6f3e4440e2c199f6d1acc81f7e5->leave($__internal_87a7812de4506073a8a74119816840a46c8ff6f3e4440e2c199f6d1acc81f7e5_prof);

        
        $__internal_407080e1d9770c275cc81d999326177c22f6efd5e1f32c943a898d5b3f5d7f1c->leave($__internal_407080e1d9770c275cc81d999326177c22f6efd5e1f32c943a898d5b3f5d7f1c_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_7427d56ebe8c3f40737b62120aa90ef4a2fb3267a77c780dc30edefe7f4207e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7427d56ebe8c3f40737b62120aa90ef4a2fb3267a77c780dc30edefe7f4207e4->enter($__internal_7427d56ebe8c3f40737b62120aa90ef4a2fb3267a77c780dc30edefe7f4207e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_6f1c7607d4c1e65bce26bbd2f086f6e578eceb89d1fcd2926ce14e74e4b50741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1c7607d4c1e65bce26bbd2f086f6e578eceb89d1fcd2926ce14e74e4b50741->enter($__internal_6f1c7607d4c1e65bce26bbd2f086f6e578eceb89d1fcd2926ce14e74e4b50741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_6f1c7607d4c1e65bce26bbd2f086f6e578eceb89d1fcd2926ce14e74e4b50741->leave($__internal_6f1c7607d4c1e65bce26bbd2f086f6e578eceb89d1fcd2926ce14e74e4b50741_prof);

        
        $__internal_7427d56ebe8c3f40737b62120aa90ef4a2fb3267a77c780dc30edefe7f4207e4->leave($__internal_7427d56ebe8c3f40737b62120aa90ef4a2fb3267a77c780dc30edefe7f4207e4_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_8cc1af305471ee0a113fea16874d552d87d5536558fcfd21cf6ba0e464a0d90b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc1af305471ee0a113fea16874d552d87d5536558fcfd21cf6ba0e464a0d90b->enter($__internal_8cc1af305471ee0a113fea16874d552d87d5536558fcfd21cf6ba0e464a0d90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_85b1e64fa9339ddd0bb8049768bcf84aa70d024d832ecf3c0f4114b001848a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b1e64fa9339ddd0bb8049768bcf84aa70d024d832ecf3c0f4114b001848a94->enter($__internal_85b1e64fa9339ddd0bb8049768bcf84aa70d024d832ecf3c0f4114b001848a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_85b1e64fa9339ddd0bb8049768bcf84aa70d024d832ecf3c0f4114b001848a94->leave($__internal_85b1e64fa9339ddd0bb8049768bcf84aa70d024d832ecf3c0f4114b001848a94_prof);

        
        $__internal_8cc1af305471ee0a113fea16874d552d87d5536558fcfd21cf6ba0e464a0d90b->leave($__internal_8cc1af305471ee0a113fea16874d552d87d5536558fcfd21cf6ba0e464a0d90b_prof);

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
