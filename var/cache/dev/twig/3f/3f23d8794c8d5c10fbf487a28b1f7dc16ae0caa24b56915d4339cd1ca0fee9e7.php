<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_495942f1e10a7a857dd72fe7fc52fa8a2ad6d0438871808f1a070f645bbc4ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db0a80a88072100feaca3eeb9ed2ac4ebb9b91e00bf70a60a39f72d6cf1b9463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db0a80a88072100feaca3eeb9ed2ac4ebb9b91e00bf70a60a39f72d6cf1b9463->enter($__internal_db0a80a88072100feaca3eeb9ed2ac4ebb9b91e00bf70a60a39f72d6cf1b9463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_2573b0c0fb1ce20542e94aebaa19f51190ced6183ed571599e5bff402ee173e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2573b0c0fb1ce20542e94aebaa19f51190ced6183ed571599e5bff402ee173e6->enter($__internal_2573b0c0fb1ce20542e94aebaa19f51190ced6183ed571599e5bff402ee173e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "    </head>

    ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_db0a80a88072100feaca3eeb9ed2ac4ebb9b91e00bf70a60a39f72d6cf1b9463->leave($__internal_db0a80a88072100feaca3eeb9ed2ac4ebb9b91e00bf70a60a39f72d6cf1b9463_prof);

        
        $__internal_2573b0c0fb1ce20542e94aebaa19f51190ced6183ed571599e5bff402ee173e6->leave($__internal_2573b0c0fb1ce20542e94aebaa19f51190ced6183ed571599e5bff402ee173e6_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b8534500dd7bd8b9334765a553426f122822c3095faea2f3197dd2bcd11e4bf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8534500dd7bd8b9334765a553426f122822c3095faea2f3197dd2bcd11e4bf8->enter($__internal_b8534500dd7bd8b9334765a553426f122822c3095faea2f3197dd2bcd11e4bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_f4f9eecc9dc9b1e349dbd1abefbe4db7fa65684a5bf71d6d300a64b2de179781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f9eecc9dc9b1e349dbd1abefbe4db7fa65684a5bf71d6d300a64b2de179781->enter($__internal_f4f9eecc9dc9b1e349dbd1abefbe4db7fa65684a5bf71d6d300a64b2de179781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_f4f9eecc9dc9b1e349dbd1abefbe4db7fa65684a5bf71d6d300a64b2de179781->leave($__internal_f4f9eecc9dc9b1e349dbd1abefbe4db7fa65684a5bf71d6d300a64b2de179781_prof);

        
        $__internal_b8534500dd7bd8b9334765a553426f122822c3095faea2f3197dd2bcd11e4bf8->leave($__internal_b8534500dd7bd8b9334765a553426f122822c3095faea2f3197dd2bcd11e4bf8_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_02f075115535cfc9cd4929c020a914871d3ff8c25682eac4bd5c9212f743f91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02f075115535cfc9cd4929c020a914871d3ff8c25682eac4bd5c9212f743f91c->enter($__internal_02f075115535cfc9cd4929c020a914871d3ff8c25682eac4bd5c9212f743f91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_d2341b8d26a54edbe58341bf95ad4f0be5b4a20de62ab5e33a2b2a5d45c02737 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2341b8d26a54edbe58341bf95ad4f0be5b4a20de62ab5e33a2b2a5d45c02737->enter($__internal_d2341b8d26a54edbe58341bf95ad4f0be5b4a20de62ab5e33a2b2a5d45c02737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_d2341b8d26a54edbe58341bf95ad4f0be5b4a20de62ab5e33a2b2a5d45c02737->leave($__internal_d2341b8d26a54edbe58341bf95ad4f0be5b4a20de62ab5e33a2b2a5d45c02737_prof);

        
        $__internal_02f075115535cfc9cd4929c020a914871d3ff8c25682eac4bd5c9212f743f91c->leave($__internal_02f075115535cfc9cd4929c020a914871d3ff8c25682eac4bd5c9212f743f91c_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_600991729a3aa2268d9d23e1842736ee375219d39dfc568e7e1779c1bde2b427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600991729a3aa2268d9d23e1842736ee375219d39dfc568e7e1779c1bde2b427->enter($__internal_600991729a3aa2268d9d23e1842736ee375219d39dfc568e7e1779c1bde2b427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_236340d7e2dd1c76281e89c4fb1dc495f1d6b4f569aa9ed8a91975a1a8b60e55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236340d7e2dd1c76281e89c4fb1dc495f1d6b4f569aa9ed8a91975a1a8b60e55->enter($__internal_236340d7e2dd1c76281e89c4fb1dc495f1d6b4f569aa9ed8a91975a1a8b60e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_236340d7e2dd1c76281e89c4fb1dc495f1d6b4f569aa9ed8a91975a1a8b60e55->leave($__internal_236340d7e2dd1c76281e89c4fb1dc495f1d6b4f569aa9ed8a91975a1a8b60e55_prof);

        
        $__internal_600991729a3aa2268d9d23e1842736ee375219d39dfc568e7e1779c1bde2b427->leave($__internal_600991729a3aa2268d9d23e1842736ee375219d39dfc568e7e1779c1bde2b427_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_02dd2d556cdf014ee0ecd7a01c354bd62e6dd87a510731426baaaa18c5362582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dd2d556cdf014ee0ecd7a01c354bd62e6dd87a510731426baaaa18c5362582->enter($__internal_02dd2d556cdf014ee0ecd7a01c354bd62e6dd87a510731426baaaa18c5362582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_892ffc2f9cffdb14a46ef309b8c9014f97156027cfddbe27dcc82d9b2d84c435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892ffc2f9cffdb14a46ef309b8c9014f97156027cfddbe27dcc82d9b2d84c435->enter($__internal_892ffc2f9cffdb14a46ef309b8c9014f97156027cfddbe27dcc82d9b2d84c435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_892ffc2f9cffdb14a46ef309b8c9014f97156027cfddbe27dcc82d9b2d84c435->leave($__internal_892ffc2f9cffdb14a46ef309b8c9014f97156027cfddbe27dcc82d9b2d84c435_prof);

        
        $__internal_02dd2d556cdf014ee0ecd7a01c354bd62e6dd87a510731426baaaa18c5362582->leave($__internal_02dd2d556cdf014ee0ecd7a01c354bd62e6dd87a510731426baaaa18c5362582_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_5d7be79d6a779c8c25af72ac2a75c1f6db439385d52f1ef8a69e9c057f3440cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7be79d6a779c8c25af72ac2a75c1f6db439385d52f1ef8a69e9c057f3440cd->enter($__internal_5d7be79d6a779c8c25af72ac2a75c1f6db439385d52f1ef8a69e9c057f3440cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_f738e2b8aab8123898579ef15e6b7de2e6d36a4ef80cf64f7858e0621db2d398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f738e2b8aab8123898579ef15e6b7de2e6d36a4ef80cf64f7858e0621db2d398->enter($__internal_f738e2b8aab8123898579ef15e6b7de2e6d36a4ef80cf64f7858e0621db2d398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_f738e2b8aab8123898579ef15e6b7de2e6d36a4ef80cf64f7858e0621db2d398->leave($__internal_f738e2b8aab8123898579ef15e6b7de2e6d36a4ef80cf64f7858e0621db2d398_prof);

        
        $__internal_5d7be79d6a779c8c25af72ac2a75c1f6db439385d52f1ef8a69e9c057f3440cd->leave($__internal_5d7be79d6a779c8c25af72ac2a75c1f6db439385d52f1ef8a69e9c057f3440cd_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2feab418ae42f27504b9a20c03b24d7d5dd71aa4617d8ea4090dc58b77d84c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2feab418ae42f27504b9a20c03b24d7d5dd71aa4617d8ea4090dc58b77d84c2->enter($__internal_d2feab418ae42f27504b9a20c03b24d7d5dd71aa4617d8ea4090dc58b77d84c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a748bd15d7b28aa6e6d38467896b9e1747e060cdae559a0d882b341a580c01db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a748bd15d7b28aa6e6d38467896b9e1747e060cdae559a0d882b341a580c01db->enter($__internal_a748bd15d7b28aa6e6d38467896b9e1747e060cdae559a0d882b341a580c01db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_a748bd15d7b28aa6e6d38467896b9e1747e060cdae559a0d882b341a580c01db->leave($__internal_a748bd15d7b28aa6e6d38467896b9e1747e060cdae559a0d882b341a580c01db_prof);

        
        $__internal_d2feab418ae42f27504b9a20c03b24d7d5dd71aa4617d8ea4090dc58b77d84c2->leave($__internal_d2feab418ae42f27504b9a20c03b24d7d5dd71aa4617d8ea4090dc58b77d84c2_prof);

    }

    // line 53
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_dd78e868f42cc0ebbb15a045bd2d0d82c9951f7de6dc9bf90b8bcbe15d091224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd78e868f42cc0ebbb15a045bd2d0d82c9951f7de6dc9bf90b8bcbe15d091224->enter($__internal_dd78e868f42cc0ebbb15a045bd2d0d82c9951f7de6dc9bf90b8bcbe15d091224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_497b860f5dd4b8e523dea35bf45fdf34e38bbe5a7120792ef82daca389698950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497b860f5dd4b8e523dea35bf45fdf34e38bbe5a7120792ef82daca389698950->enter($__internal_497b860f5dd4b8e523dea35bf45fdf34e38bbe5a7120792ef82daca389698950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_497b860f5dd4b8e523dea35bf45fdf34e38bbe5a7120792ef82daca389698950->leave($__internal_497b860f5dd4b8e523dea35bf45fdf34e38bbe5a7120792ef82daca389698950_prof);

        
        $__internal_dd78e868f42cc0ebbb15a045bd2d0d82c9951f7de6dc9bf90b8bcbe15d091224->leave($__internal_dd78e868f42cc0ebbb15a045bd2d0d82c9951f7de6dc9bf90b8bcbe15d091224_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_0990ad20e2df02650b9fe90f4990045e7c249c7bcf173ae665760bc85cd0c0a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0990ad20e2df02650b9fe90f4990045e7c249c7bcf173ae665760bc85cd0c0a7->enter($__internal_0990ad20e2df02650b9fe90f4990045e7c249c7bcf173ae665760bc85cd0c0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_58e97483ba07ce8be0ad37eadfc0386d157ddbfbbd4faad8eb9c8f8d242243d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e97483ba07ce8be0ad37eadfc0386d157ddbfbbd4faad8eb9c8f8d242243d4->enter($__internal_58e97483ba07ce8be0ad37eadfc0386d157ddbfbbd4faad8eb9c8f8d242243d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_58e97483ba07ce8be0ad37eadfc0386d157ddbfbbd4faad8eb9c8f8d242243d4->leave($__internal_58e97483ba07ce8be0ad37eadfc0386d157ddbfbbd4faad8eb9c8f8d242243d4_prof);

        
        $__internal_0990ad20e2df02650b9fe90f4990045e7c249c7bcf173ae665760bc85cd0c0a7->leave($__internal_0990ad20e2df02650b9fe90f4990045e7c249c7bcf173ae665760bc85cd0c0a7_prof);

    }

    // line 55
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_b5911d92946f95a534694f6ed654dd71371c352b186f71e83a17062be7480fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5911d92946f95a534694f6ed654dd71371c352b186f71e83a17062be7480fad->enter($__internal_b5911d92946f95a534694f6ed654dd71371c352b186f71e83a17062be7480fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_1ff412547fdc6c63dca7a516b6ceb42176466784e34ed6ae8f42fbfa6ef7b403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff412547fdc6c63dca7a516b6ceb42176466784e34ed6ae8f42fbfa6ef7b403->enter($__internal_1ff412547fdc6c63dca7a516b6ceb42176466784e34ed6ae8f42fbfa6ef7b403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 56
        echo "            <header class=\"main-header\">
            ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_1ff412547fdc6c63dca7a516b6ceb42176466784e34ed6ae8f42fbfa6ef7b403->leave($__internal_1ff412547fdc6c63dca7a516b6ceb42176466784e34ed6ae8f42fbfa6ef7b403_prof);

        
        $__internal_b5911d92946f95a534694f6ed654dd71371c352b186f71e83a17062be7480fad->leave($__internal_b5911d92946f95a534694f6ed654dd71371c352b186f71e83a17062be7480fad_prof);

    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        $__internal_afba8dd995618e3abd050839274394ae2112de3bf35d2296e27293585e078fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afba8dd995618e3abd050839274394ae2112de3bf35d2296e27293585e078fcf->enter($__internal_afba8dd995618e3abd050839274394ae2112de3bf35d2296e27293585e078fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_de5f6d67d994e0539f0308065bfb23842d132f97b9043399f7ce20be8876c9d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5f6d67d994e0539f0308065bfb23842d132f97b9043399f7ce20be8876c9d9->enter($__internal_de5f6d67d994e0539f0308065bfb23842d132f97b9043399f7ce20be8876c9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 58
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 64
        $this->displayBlock('header_logo', $context, $blocks);
        // line 69
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 72
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_de5f6d67d994e0539f0308065bfb23842d132f97b9043399f7ce20be8876c9d9->leave($__internal_de5f6d67d994e0539f0308065bfb23842d132f97b9043399f7ce20be8876c9d9_prof);

        
        $__internal_afba8dd995618e3abd050839274394ae2112de3bf35d2296e27293585e078fcf->leave($__internal_afba8dd995618e3abd050839274394ae2112de3bf35d2296e27293585e078fcf_prof);

    }

    // line 64
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_a160b3f66180187af134618c2b984bcddcea28c8d79e4f936481056fc6a492fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a160b3f66180187af134618c2b984bcddcea28c8d79e4f936481056fc6a492fa->enter($__internal_a160b3f66180187af134618c2b984bcddcea28c8d79e4f936481056fc6a492fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_914d424942103ff25d994171f5af1cd557fc7fe7693feac4c4975c47c3920213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914d424942103ff25d994171f5af1cd557fc7fe7693feac4c4975c47c3920213->enter($__internal_914d424942103ff25d994171f5af1cd557fc7fe7693feac4c4975c47c3920213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 65
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 66
        echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_914d424942103ff25d994171f5af1cd557fc7fe7693feac4c4975c47c3920213->leave($__internal_914d424942103ff25d994171f5af1cd557fc7fe7693feac4c4975c47c3920213_prof);

        
        $__internal_a160b3f66180187af134618c2b984bcddcea28c8d79e4f936481056fc6a492fa->leave($__internal_a160b3f66180187af134618c2b984bcddcea28c8d79e4f936481056fc6a492fa_prof);

    }

    // line 72
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_3e9e6760903a25edf6c7f733a14b2978f23c305a9a92d1052ffd5c66425b444f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9e6760903a25edf6c7f733a14b2978f23c305a9a92d1052ffd5c66425b444f->enter($__internal_3e9e6760903a25edf6c7f733a14b2978f23c305a9a92d1052ffd5c66425b444f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_6aaa5825958650e58b23e14b769903b841f2e71a13d2be2385810ff7f71e9504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aaa5825958650e58b23e14b769903b841f2e71a13d2be2385810ff7f71e9504->enter($__internal_6aaa5825958650e58b23e14b769903b841f2e71a13d2be2385810ff7f71e9504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 73
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 74
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 76
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_6aaa5825958650e58b23e14b769903b841f2e71a13d2be2385810ff7f71e9504->leave($__internal_6aaa5825958650e58b23e14b769903b841f2e71a13d2be2385810ff7f71e9504_prof);

        
        $__internal_3e9e6760903a25edf6c7f733a14b2978f23c305a9a92d1052ffd5c66425b444f->leave($__internal_3e9e6760903a25edf6c7f733a14b2978f23c305a9a92d1052ffd5c66425b444f_prof);

    }

    // line 76
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_23c75211ce3068352a820809f6c348cd6b82e227037037e2b98d1ff779aee800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c75211ce3068352a820809f6c348cd6b82e227037037e2b98d1ff779aee800->enter($__internal_23c75211ce3068352a820809f6c348cd6b82e227037037e2b98d1ff779aee800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_8eef70ec56364aa72662ef6f437385c90d0ada2bfe9503692b00b7e08519b211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eef70ec56364aa72662ef6f437385c90d0ada2bfe9503692b00b7e08519b211->enter($__internal_8eef70ec56364aa72662ef6f437385c90d0ada2bfe9503692b00b7e08519b211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 77
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 79
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 80
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 82
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 83
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 84
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 86
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 95
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_8eef70ec56364aa72662ef6f437385c90d0ada2bfe9503692b00b7e08519b211->leave($__internal_8eef70ec56364aa72662ef6f437385c90d0ada2bfe9503692b00b7e08519b211_prof);

        
        $__internal_23c75211ce3068352a820809f6c348cd6b82e227037037e2b98d1ff779aee800->leave($__internal_23c75211ce3068352a820809f6c348cd6b82e227037037e2b98d1ff779aee800_prof);

    }

    // line 95
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_f731179dad0a877e77bed033157513da57ff9a024fe66db27e80dc8fc0442e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f731179dad0a877e77bed033157513da57ff9a024fe66db27e80dc8fc0442e69->enter($__internal_f731179dad0a877e77bed033157513da57ff9a024fe66db27e80dc8fc0442e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_57b06c060fed1ff94cf4904735f7aef47bf5862bbfced3e2fe9a629fa50d02ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b06c060fed1ff94cf4904735f7aef47bf5862bbfced3e2fe9a629fa50d02ba->enter($__internal_57b06c060fed1ff94cf4904735f7aef47bf5862bbfced3e2fe9a629fa50d02ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 96
        echo "                                                <li>
                                                    <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PREVIOUS_ADMIN")) {
            // line 100
            echo "                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> ";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.exit_impersonation", array(), "EasyAdminBundle"), "html", null, true);
            echo "</a>
                                                    </li>
                                                ";
        }
        // line 104
        echo "                                                ";
        
        $__internal_57b06c060fed1ff94cf4904735f7aef47bf5862bbfced3e2fe9a629fa50d02ba->leave($__internal_57b06c060fed1ff94cf4904735f7aef47bf5862bbfced3e2fe9a629fa50d02ba_prof);

        
        $__internal_f731179dad0a877e77bed033157513da57ff9a024fe66db27e80dc8fc0442e69->leave($__internal_f731179dad0a877e77bed033157513da57ff9a024fe66db27e80dc8fc0442e69_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_19616d5b4265a27f3c08a7f218298f93656d5de78a48fd8f393e3d7da3202e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19616d5b4265a27f3c08a7f218298f93656d5de78a48fd8f393e3d7da3202e80->enter($__internal_19616d5b4265a27f3c08a7f218298f93656d5de78a48fd8f393e3d7da3202e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_05d7bd39417c53a96af4604559f8d17d9547e54d105ea97fe66fed802922f4fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d7bd39417c53a96af4604559f8d17d9547e54d105ea97fe66fed802922f4fd->enter($__internal_05d7bd39417c53a96af4604559f8d17d9547e54d105ea97fe66fed802922f4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_05d7bd39417c53a96af4604559f8d17d9547e54d105ea97fe66fed802922f4fd->leave($__internal_05d7bd39417c53a96af4604559f8d17d9547e54d105ea97fe66fed802922f4fd_prof);

        
        $__internal_19616d5b4265a27f3c08a7f218298f93656d5de78a48fd8f393e3d7da3202e80->leave($__internal_19616d5b4265a27f3c08a7f218298f93656d5de78a48fd8f393e3d7da3202e80_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_4adbcfb9f5d32906c552546003e0a07912a9672daa630adbfc206da140f0e21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adbcfb9f5d32906c552546003e0a07912a9672daa630adbfc206da140f0e21d->enter($__internal_4adbcfb9f5d32906c552546003e0a07912a9672daa630adbfc206da140f0e21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_b5e744b247231dd4def25067a74306708fd497a7c7497fe7ee8c8474b0743bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e744b247231dd4def25067a74306708fd497a7c7497fe7ee8c8474b0743bc0->enter($__internal_b5e744b247231dd4def25067a74306708fd497a7c7497fe7ee8c8474b0743bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_b5e744b247231dd4def25067a74306708fd497a7c7497fe7ee8c8474b0743bc0->leave($__internal_b5e744b247231dd4def25067a74306708fd497a7c7497fe7ee8c8474b0743bc0_prof);

        
        $__internal_4adbcfb9f5d32906c552546003e0a07912a9672daa630adbfc206da140f0e21d->leave($__internal_4adbcfb9f5d32906c552546003e0a07912a9672daa630adbfc206da140f0e21d_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_1dea6e46a82e95b8d68797cd3d0f20614650e4e8a8aad7c66fade6d8798846ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dea6e46a82e95b8d68797cd3d0f20614650e4e8a8aad7c66fade6d8798846ae->enter($__internal_1dea6e46a82e95b8d68797cd3d0f20614650e4e8a8aad7c66fade6d8798846ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_343228575379b8f82d5fd9b8f6d372152da8243464a8c662faa9b0fbe5e40326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343228575379b8f82d5fd9b8f6d372152da8243464a8c662faa9b0fbe5e40326->enter($__internal_343228575379b8f82d5fd9b8f6d372152da8243464a8c662faa9b0fbe5e40326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_343228575379b8f82d5fd9b8f6d372152da8243464a8c662faa9b0fbe5e40326->leave($__internal_343228575379b8f82d5fd9b8f6d372152da8243464a8c662faa9b0fbe5e40326_prof);

        
        $__internal_1dea6e46a82e95b8d68797cd3d0f20614650e4e8a8aad7c66fade6d8798846ae->leave($__internal_1dea6e46a82e95b8d68797cd3d0f20614650e4e8a8aad7c66fade6d8798846ae_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_57689038bb204bdde24b8a57a09bd6b573388e4886c7688b12396558973153c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57689038bb204bdde24b8a57a09bd6b573388e4886c7688b12396558973153c6->enter($__internal_57689038bb204bdde24b8a57a09bd6b573388e4886c7688b12396558973153c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_f85a33116283b714a6533b98ad979a5679d3ca4ce5874a073a73cb82bceebcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85a33116283b714a6533b98ad979a5679d3ca4ce5874a073a73cb82bceebcbc->enter($__internal_f85a33116283b714a6533b98ad979a5679d3ca4ce5874a073a73cb82bceebcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_f85a33116283b714a6533b98ad979a5679d3ca4ce5874a073a73cb82bceebcbc->leave($__internal_f85a33116283b714a6533b98ad979a5679d3ca4ce5874a073a73cb82bceebcbc_prof);

        
        $__internal_57689038bb204bdde24b8a57a09bd6b573388e4886c7688b12396558973153c6->leave($__internal_57689038bb204bdde24b8a57a09bd6b573388e4886c7688b12396558973153c6_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_a429e7db3eaaa454caf50443ba92f91a0fc1d06e61a3b20ed2e2918911aa37cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a429e7db3eaaa454caf50443ba92f91a0fc1d06e61a3b20ed2e2918911aa37cc->enter($__internal_a429e7db3eaaa454caf50443ba92f91a0fc1d06e61a3b20ed2e2918911aa37cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_5be8c76d65c4670c75afe7efd3b87fa1f66e61fafefabb8c477081a40401b35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be8c76d65c4670c75afe7efd3b87fa1f66e61fafefabb8c477081a40401b35d->enter($__internal_5be8c76d65c4670c75afe7efd3b87fa1f66e61fafefabb8c477081a40401b35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_5be8c76d65c4670c75afe7efd3b87fa1f66e61fafefabb8c477081a40401b35d->leave($__internal_5be8c76d65c4670c75afe7efd3b87fa1f66e61fafefabb8c477081a40401b35d_prof);

        
        $__internal_a429e7db3eaaa454caf50443ba92f91a0fc1d06e61a3b20ed2e2918911aa37cc->leave($__internal_a429e7db3eaaa454caf50443ba92f91a0fc1d06e61a3b20ed2e2918911aa37cc_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4a63e9b99446ab83dbdfbbdb6d5a362593bfdbad8718ba294d18ed69153ddbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a63e9b99446ab83dbdfbbdb6d5a362593bfdbad8718ba294d18ed69153ddbbc->enter($__internal_4a63e9b99446ab83dbdfbbdb6d5a362593bfdbad8718ba294d18ed69153ddbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_e1b6d67e6df717b531b8db46a13e7dab79b5806dc1c86309c829706be820f7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1b6d67e6df717b531b8db46a13e7dab79b5806dc1c86309c829706be820f7a6->enter($__internal_e1b6d67e6df717b531b8db46a13e7dab79b5806dc1c86309c829706be820f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_e1b6d67e6df717b531b8db46a13e7dab79b5806dc1c86309c829706be820f7a6->leave($__internal_e1b6d67e6df717b531b8db46a13e7dab79b5806dc1c86309c829706be820f7a6_prof);

        
        $__internal_4a63e9b99446ab83dbdfbbdb6d5a362593bfdbad8718ba294d18ed69153ddbbc->leave($__internal_4a63e9b99446ab83dbdfbbdb6d5a362593bfdbad8718ba294d18ed69153ddbbc_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_9455f5420618215e5dca743ce5700ff6bafc9ac5ba01e86e5f621bc7cb36e37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9455f5420618215e5dca743ce5700ff6bafc9ac5ba01e86e5f621bc7cb36e37f->enter($__internal_9455f5420618215e5dca743ce5700ff6bafc9ac5ba01e86e5f621bc7cb36e37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_d99af075a657ae34dd00e41346004775146facd6cd87ff45dfa0e91a061b553a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99af075a657ae34dd00e41346004775146facd6cd87ff45dfa0e91a061b553a->enter($__internal_d99af075a657ae34dd00e41346004775146facd6cd87ff45dfa0e91a061b553a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_d99af075a657ae34dd00e41346004775146facd6cd87ff45dfa0e91a061b553a->leave($__internal_d99af075a657ae34dd00e41346004775146facd6cd87ff45dfa0e91a061b553a_prof);

        
        $__internal_9455f5420618215e5dca743ce5700ff6bafc9ac5ba01e86e5f621bc7cb36e37f->leave($__internal_9455f5420618215e5dca743ce5700ff6bafc9ac5ba01e86e5f621bc7cb36e37f_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_43cc660f872c1f92bc033aa36c932b93d54e09d513659b1427f2b1a5a490454a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cc660f872c1f92bc033aa36c932b93d54e09d513659b1427f2b1a5a490454a->enter($__internal_43cc660f872c1f92bc033aa36c932b93d54e09d513659b1427f2b1a5a490454a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8176beeceb5e1b0d997a31c20d4aaa7e401d601fee2c8846fbd3b116a5f5c8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8176beeceb5e1b0d997a31c20d4aaa7e401d601fee2c8846fbd3b116a5f5c8a1->enter($__internal_8176beeceb5e1b0d997a31c20d4aaa7e401d601fee2c8846fbd3b116a5f5c8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_8176beeceb5e1b0d997a31c20d4aaa7e401d601fee2c8846fbd3b116a5f5c8a1->leave($__internal_8176beeceb5e1b0d997a31c20d4aaa7e401d601fee2c8846fbd3b116a5f5c8a1_prof);

        
        $__internal_43cc660f872c1f92bc033aa36c932b93d54e09d513659b1427f2b1a5a490454a->leave($__internal_43cc660f872c1f92bc033aa36c932b93d54e09d513659b1427f2b1a5a490454a_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_47ba3a0860d8d0688509c139143485bcaee148005207629bc4606dc4023f4caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47ba3a0860d8d0688509c139143485bcaee148005207629bc4606dc4023f4caf->enter($__internal_47ba3a0860d8d0688509c139143485bcaee148005207629bc4606dc4023f4caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_a03360e0d70a2a6e03496bc86cb4dd16395228f99be23b43c1ea0f8c3a3173c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03360e0d70a2a6e03496bc86cb4dd16395228f99be23b43c1ea0f8c3a3173c9->enter($__internal_a03360e0d70a2a6e03496bc86cb4dd16395228f99be23b43c1ea0f8c3a3173c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_a03360e0d70a2a6e03496bc86cb4dd16395228f99be23b43c1ea0f8c3a3173c9->leave($__internal_a03360e0d70a2a6e03496bc86cb4dd16395228f99be23b43c1ea0f8c3a3173c9_prof);

        
        $__internal_47ba3a0860d8d0688509c139143485bcaee148005207629bc4606dc4023f4caf->leave($__internal_47ba3a0860d8d0688509c139143485bcaee148005207629bc4606dc4023f4caf_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 160,  771 => 153,  761 => 149,  754 => 145,  750 => 143,  747 => 142,  738 => 141,  709 => 139,  700 => 138,  687 => 134,  678 => 133,  667 => 154,  665 => 153,  660 => 150,  657 => 141,  655 => 138,  651 => 136,  648 => 133,  639 => 132,  628 => 125,  626 => 122,  624 => 121,  615 => 120,  604 => 127,  602 => 120,  599 => 119,  590 => 118,  580 => 104,  574 => 101,  571 => 100,  569 => 99,  562 => 97,  559 => 96,  550 => 95,  540 => 108,  535 => 105,  533 => 95,  524 => 89,  519 => 86,  514 => 84,  511 => 83,  509 => 82,  505 => 81,  502 => 80,  500 => 79,  494 => 77,  485 => 76,  473 => 109,  471 => 76,  467 => 74,  464 => 73,  455 => 72,  442 => 66,  433 => 65,  424 => 64,  412 => 112,  410 => 72,  405 => 69,  403 => 64,  396 => 60,  392 => 58,  383 => 57,  372 => 156,  370 => 132,  365 => 129,  363 => 118,  358 => 115,  356 => 57,  353 => 56,  344 => 55,  311 => 53,  300 => 165,  291 => 163,  287 => 162,  284 => 161,  282 => 160,  278 => 158,  276 => 55,  266 => 53,  257 => 52,  236 => 30,  227 => 29,  215 => 43,  212 => 42,  209 => 29,  200 => 28,  185 => 25,  182 => 24,  173 => 23,  160 => 15,  154 => 13,  145 => 12,  127 => 10,  116 => 167,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                                                    <li>
                                                        <a href=\"?_switch_user=_exit\"><i class=\"fa fa-sign-out\"></i> {{ 'user.exit_impersonation'|trans(domain = 'EasyAdminBundle') }}</a>
                                                    </li>
                                                {% endif %}
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "/var/www/html/ak_immo/vendor/javiereguiluz/easyadmin-bundle/src/Resources/views/default/layout.html.twig");
    }
}
