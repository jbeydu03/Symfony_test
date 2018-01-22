<?php

/* base.html.twig */
class __TwigTemplate_9ab8b1b030889b9a293a63a8b8062d1d0312ba8e9f73e390a59a48c73a7c4686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bdbf9d105e77e7d2c03bc1c7957fdd7a30b66cdde17b5142e3a44378c533708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdbf9d105e77e7d2c03bc1c7957fdd7a30b66cdde17b5142e3a44378c533708->enter($__internal_8bdbf9d105e77e7d2c03bc1c7957fdd7a30b66cdde17b5142e3a44378c533708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5d985e2bd5afd42661b3436d340702bff9b83a3655fbad41ba42a344052e1847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d985e2bd5afd42661b3436d340702bff9b83a3655fbad41ba42a344052e1847->enter($__internal_5d985e2bd5afd42661b3436d340702bff9b83a3655fbad41ba42a344052e1847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8bdbf9d105e77e7d2c03bc1c7957fdd7a30b66cdde17b5142e3a44378c533708->leave($__internal_8bdbf9d105e77e7d2c03bc1c7957fdd7a30b66cdde17b5142e3a44378c533708_prof);

        
        $__internal_5d985e2bd5afd42661b3436d340702bff9b83a3655fbad41ba42a344052e1847->leave($__internal_5d985e2bd5afd42661b3436d340702bff9b83a3655fbad41ba42a344052e1847_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_440531d0d94f41122d0ce043af474452b13835412bbd06b019bd9602aef51b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440531d0d94f41122d0ce043af474452b13835412bbd06b019bd9602aef51b9d->enter($__internal_440531d0d94f41122d0ce043af474452b13835412bbd06b019bd9602aef51b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a56e1aa0a740caa01fdec3321782420c6a19d143bfcdacfc46ad06b38d91c976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56e1aa0a740caa01fdec3321782420c6a19d143bfcdacfc46ad06b38d91c976->enter($__internal_a56e1aa0a740caa01fdec3321782420c6a19d143bfcdacfc46ad06b38d91c976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a56e1aa0a740caa01fdec3321782420c6a19d143bfcdacfc46ad06b38d91c976->leave($__internal_a56e1aa0a740caa01fdec3321782420c6a19d143bfcdacfc46ad06b38d91c976_prof);

        
        $__internal_440531d0d94f41122d0ce043af474452b13835412bbd06b019bd9602aef51b9d->leave($__internal_440531d0d94f41122d0ce043af474452b13835412bbd06b019bd9602aef51b9d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41ed30bc4f0e918e581855d2dd10aa238312dbb07da574b8b39f006f8a718a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ed30bc4f0e918e581855d2dd10aa238312dbb07da574b8b39f006f8a718a97->enter($__internal_41ed30bc4f0e918e581855d2dd10aa238312dbb07da574b8b39f006f8a718a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c66d1f739f9ced75af9f1426c713c45711c8f1acb9cce4466b98418cced4490f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c66d1f739f9ced75af9f1426c713c45711c8f1acb9cce4466b98418cced4490f->enter($__internal_c66d1f739f9ced75af9f1426c713c45711c8f1acb9cce4466b98418cced4490f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c66d1f739f9ced75af9f1426c713c45711c8f1acb9cce4466b98418cced4490f->leave($__internal_c66d1f739f9ced75af9f1426c713c45711c8f1acb9cce4466b98418cced4490f_prof);

        
        $__internal_41ed30bc4f0e918e581855d2dd10aa238312dbb07da574b8b39f006f8a718a97->leave($__internal_41ed30bc4f0e918e581855d2dd10aa238312dbb07da574b8b39f006f8a718a97_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50cfc36219b63ec2b5312683ec5a435cd8a2c053bbfd0e9d5162fbbab58fd9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cfc36219b63ec2b5312683ec5a435cd8a2c053bbfd0e9d5162fbbab58fd9bd->enter($__internal_50cfc36219b63ec2b5312683ec5a435cd8a2c053bbfd0e9d5162fbbab58fd9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30edfcd4dd3345d99f4178e9bdab53c8d088289d89e7b9009df75d0dc213d1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30edfcd4dd3345d99f4178e9bdab53c8d088289d89e7b9009df75d0dc213d1b3->enter($__internal_30edfcd4dd3345d99f4178e9bdab53c8d088289d89e7b9009df75d0dc213d1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30edfcd4dd3345d99f4178e9bdab53c8d088289d89e7b9009df75d0dc213d1b3->leave($__internal_30edfcd4dd3345d99f4178e9bdab53c8d088289d89e7b9009df75d0dc213d1b3_prof);

        
        $__internal_50cfc36219b63ec2b5312683ec5a435cd8a2c053bbfd0e9d5162fbbab58fd9bd->leave($__internal_50cfc36219b63ec2b5312683ec5a435cd8a2c053bbfd0e9d5162fbbab58fd9bd_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84f1ec1aaaf2b4afec3f975dd58eae70fac6710d9b3bd04a0fb09061583e2e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f1ec1aaaf2b4afec3f975dd58eae70fac6710d9b3bd04a0fb09061583e2e61->enter($__internal_84f1ec1aaaf2b4afec3f975dd58eae70fac6710d9b3bd04a0fb09061583e2e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_513a674a7cddb925e7af54db5998e9005c9ee125f601adfb8a6da68dea408149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_513a674a7cddb925e7af54db5998e9005c9ee125f601adfb8a6da68dea408149->enter($__internal_513a674a7cddb925e7af54db5998e9005c9ee125f601adfb8a6da68dea408149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_513a674a7cddb925e7af54db5998e9005c9ee125f601adfb8a6da68dea408149->leave($__internal_513a674a7cddb925e7af54db5998e9005c9ee125f601adfb8a6da68dea408149_prof);

        
        $__internal_84f1ec1aaaf2b4afec3f975dd58eae70fac6710d9b3bd04a0fb09061583e2e61->leave($__internal_84f1ec1aaaf2b4afec3f975dd58eae70fac6710d9b3bd04a0fb09061583e2e61_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\Symfony_test\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
