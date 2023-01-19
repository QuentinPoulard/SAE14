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

/* pageanglais/loisiranglais.html.twig */
class __TwigTemplate_00c7fe0c033d20b09a59c07a0936315c extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/loisiranglais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/loisiranglais.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "pageanglais/loisiranglais.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mes Loisirs!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<br>

<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2>Mes loisirs | Passion </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>

<div class=\"amicentre\">
<img class=\"amigos\"  ; src=";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/amigos.png.JPG"), "html", null, true);
        echo ">
</div>
<div class=\"footcentre\">
<img class=\"foot\"  ; src=";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/u15.jpg"), "html", null, true);
        echo ">
</div>
<div class=\"rlcentre\">
<img class=\"rl\"  ; src=";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/amigos.png.JPG"), "html", null, true);
        echo ">
</div>

<div class=\"textloisir\">


<br> 
<p class=\"texttloisir\"> J'ai de nombreux passe temps et de nombreuse passion. Les principals sont d'abord ma famille ainsi que ma famille . Ils me permettent 
<br> J'aime aussi tout se qui touche a l'informatique et au nouvelle technologie . Par exemple en ce moment je passe du temps avec mon père a m'informer sur le web 3.0 et la blockchain ainsi que la crypto monnai qui seront pour moi encore plus présents dans le futur
 </p>
<br>

</div>

 <footer>
      <p>©Copyright 2050 by Poulard. Tous droits reversés.</p>
    </footer>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pageanglais/loisiranglais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  108 => 21,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Mes Loisirs!{% endblock %}

{% block body %}

<br>

<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2>Mes loisirs | Passion </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>

<div class=\"amicentre\">
<img class=\"amigos\"  ; src={{asset('media/amigos.png.JPG')}}>
</div>
<div class=\"footcentre\">
<img class=\"foot\"  ; src={{asset('media/u15.jpg')}}>
</div>
<div class=\"rlcentre\">
<img class=\"rl\"  ; src={{asset('media/amigos.png.JPG')}}>
</div>

<div class=\"textloisir\">


<br> 
<p class=\"texttloisir\"> J'ai de nombreux passe temps et de nombreuse passion. Les principals sont d'abord ma famille ainsi que ma famille . Ils me permettent 
<br> J'aime aussi tout se qui touche a l'informatique et au nouvelle technologie . Par exemple en ce moment je passe du temps avec mon père a m'informer sur le web 3.0 et la blockchain ainsi que la crypto monnai qui seront pour moi encore plus présents dans le futur
 </p>
<br>

</div>

 <footer>
      <p>©Copyright 2050 by Poulard. Tous droits reversés.</p>
    </footer>


{% endblock %}", "pageanglais/loisiranglais.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\PageAnglais\\loisiranglais.html.twig");
    }
}
