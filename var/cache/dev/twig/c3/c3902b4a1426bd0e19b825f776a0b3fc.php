<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pageportfolio/programmationC.html.twig */
class __TwigTemplate_911ca7b5d74820eb883e8edac4fbe934 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseportfolio.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageportfolio/programmationC.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageportfolio/programmationC.html.twig"));

        $this->parent = $this->loadTemplate("baseportfolio.html.twig", "pageportfolio/programmationC.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Programmation !";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo " <header class=\"masthead\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/fondindex.jpg/"), "html", null, true);
        echo "')\"> 


<br>
<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Language C </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>








<br>

    <div class=\"zzzzz\">
            <div class=\"progc\">
            <img class=\"proggc\"  ; src=";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/projetC.png"), "html", null, true);
        echo ">
            </div>
            <div class=\"progpy\">
            <img class=\"progpyy\"  ; src=";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/programmeC2.png"), "html", null, true);
        echo ">
            </div>

            <div class=\"progc2\">
            <img class=\"proggc2\"  ; src=";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/projetC.png"), "html", null, true);
        echo ">
            </div>
            <div class=\"progpy2\">
            
            <img class=\"progpyy2\"  ; src=";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/programmeC2.png"), "html", null, true);
        echo ">
            </div>

            <br> 
            <p class=\"textprogc\"> Voici ci-dessus une partie d'un programme que j'ai du réaliser pour un projet qui consistai a trié des nombres aléatoires en fonctions de la demande de l'utilisateur . </p>
    </div>


<br>
<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Python </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>

<br><br>

    <div class=\"zzzzz\">
            <div class=\"progc\">
            <img class=\"proggc\"  ; src=";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/projetC.png"), "html", null, true);
        echo ">
            </div>
            <div class=\"progpy\">
            <img class=\"progpyy\"  ; src=";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/programmeC2.png"), "html", null, true);
        echo ">
            </div>

            <div class=\"progc2\">
            <img class=\"proggc2\"  ; src=";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/projetC.png"), "html", null, true);
        echo ">
            </div>
            <div class=\"progpy2\">
            
            <img class=\"progpyy2\"  ; src=";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/programmeC2.png"), "html", null, true);
        echo ">
            </div>

            <br> 
            <p class=\"textprogc\"> Voici ci-dessus une partie d'un programme que j'ai du réaliser pour un projet qui consistai a trié des nombres aléatoires en fonctions de la demande de l'utilisateur . </p>
    </div>






";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pageportfolio/programmationC.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 71,  172 => 67,  165 => 63,  159 => 60,  135 => 39,  128 => 35,  121 => 31,  115 => 28,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseportfolio.html.twig' %}
{% block title %} Programmation !{% endblock %}

{% block body %}
 <header class=\"masthead\" style=\"background-image: url('{{asset('media/fondindex.jpg/')}}')\"> 


<br>
<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Language C </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>








<br>

    <div class=\"zzzzz\">
            <div class=\"progc\">
            <img class=\"proggc\"  ; src={{asset('media/projetC.png')}}>
            </div>
            <div class=\"progpy\">
            <img class=\"progpyy\"  ; src={{asset('media/programmeC2.png')}}>
            </div>

            <div class=\"progc2\">
            <img class=\"proggc2\"  ; src={{asset('media/projetC.png')}}>
            </div>
            <div class=\"progpy2\">
            
            <img class=\"progpyy2\"  ; src={{asset('media/programmeC2.png')}}>
            </div>

            <br> 
            <p class=\"textprogc\"> Voici ci-dessus une partie d'un programme que j'ai du réaliser pour un projet qui consistai a trié des nombres aléatoires en fonctions de la demande de l'utilisateur . </p>
    </div>


<br>
<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Python </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>

<br><br>

    <div class=\"zzzzz\">
            <div class=\"progc\">
            <img class=\"proggc\"  ; src={{asset('media/projetC.png')}}>
            </div>
            <div class=\"progpy\">
            <img class=\"progpyy\"  ; src={{asset('media/programmeC2.png')}}>
            </div>

            <div class=\"progc2\">
            <img class=\"proggc2\"  ; src={{asset('media/projetC.png')}}>
            </div>
            <div class=\"progpy2\">
            
            <img class=\"progpyy2\"  ; src={{asset('media/programmeC2.png')}}>
            </div>

            <br> 
            <p class=\"textprogc\"> Voici ci-dessus une partie d'un programme que j'ai du réaliser pour un projet qui consistai a trié des nombres aléatoires en fonctions de la demande de l'utilisateur . </p>
    </div>






{% endblock %}", "pageportfolio/programmationC.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\pageportfolio\\programmationC.html.twig");
    }
}
