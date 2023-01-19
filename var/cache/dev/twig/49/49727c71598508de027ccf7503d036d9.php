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

/* pageanglais/indexanglais.html.twig */
class __TwigTemplate_1f8b239bb8d921088bc287c20fd45065 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/indexanglais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/indexanglais.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "pageanglais/indexanglais.html.twig", 1);
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

        echo "Me !";
        
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
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap\" rel=\"stylesheet\">

<br>

<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Poulard Quentin </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>



<img class=\"left\" ; src=";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/moisae14.jpg"), "html", null, true);
        echo ">
<div class=\"droite\"> 
<h4> sssss </h4>
<br> 
<h4> Je suis nananan nanan nomkzndzk et ndaodhzadn bdagdzbain </h4>

</div>

<div class=\"clear\"> </div>
<br> 


<p class=\"prenom\"> <u> Prénom :</u>  Quentin  &ensp; &ensp;  &ensp;  &ensp; &ensp;  &ensp;  &ensp;   
 <u>Nom :</u>  Poulard  &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp; 
 <u>Née le :</u>  16/12/2004 
 </p>


 

<div class=\"nume\">
<p class=\"numero\"> <u>Numéro de téléphone :</u>  07.82.71.44.52   &ensp;  &ensp;  &ensp; &ensp;  &ensp;  &ensp; 
<u>Adresse mail :</u>  quentin01.poulard@gmail.com   </p>
</div>



<button class=\"neon-box-1\"> 
  <a class=\"nav-link\" href=\"/loisir\"> En savoir Plus </a>
</button>

 <footer>
      <p>©Copyright 2050 by Poulard. Tous droits reversés.</p>
    </footer>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pageanglais/indexanglais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Me !{% endblock %}

{% block body %}
 
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
<link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap\" rel=\"stylesheet\">

<br>

<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Poulard Quentin </h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>



<img class=\"left\" ; src={{asset('media/moisae14.jpg')}}>
<div class=\"droite\"> 
<h4> sssss </h4>
<br> 
<h4> Je suis nananan nanan nomkzndzk et ndaodhzadn bdagdzbain </h4>

</div>

<div class=\"clear\"> </div>
<br> 


<p class=\"prenom\"> <u> Prénom :</u>  Quentin  &ensp; &ensp;  &ensp;  &ensp; &ensp;  &ensp;  &ensp;   
 <u>Nom :</u>  Poulard  &ensp; &ensp;  &ensp;  &ensp;  &ensp;  &ensp;  &ensp; 
 <u>Née le :</u>  16/12/2004 
 </p>


 

<div class=\"nume\">
<p class=\"numero\"> <u>Numéro de téléphone :</u>  07.82.71.44.52   &ensp;  &ensp;  &ensp; &ensp;  &ensp;  &ensp; 
<u>Adresse mail :</u>  quentin01.poulard@gmail.com   </p>
</div>



<button class=\"neon-box-1\"> 
  <a class=\"nav-link\" href=\"/loisir\"> En savoir Plus </a>
</button>

 <footer>
      <p>©Copyright 2050 by Poulard. Tous droits reversés.</p>
    </footer>



{% endblock %}
", "pageanglais/indexanglais.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\pageanglais\\indexanglais.html.twig");
    }
}
