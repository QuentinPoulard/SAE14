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

/* autrespages/portfolio.html.twig */
class __TwigTemplate_af169e676d4aea2a25ba1920af8ef21d extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autrespages/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autrespages/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autrespages/portfolio.html.twig", 1);
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

        echo "Mon portfolio!";
        
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
        <h2> Portfolio</h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>

<div class=\"container\">
  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Programmation</h3>
        <p> J'ai des compétance dans différents language de programmation telle que le language C , C++ et python .
         J'ai pus écrire des programmes pour des tris , des tableaux , des boucles et ecriture dans des fichier textes</p>
       <a class=\"nav-link\" href=\"/programmeC\"> Voir des exemples que j'ai put réaliser </a>
      
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Reseau </h3>
        <p> Je sais utiliser des logiciels telle que Cisco packet tracer et wireshark.
        Je suis capable de crée une extension d'un réseau existent en configurant des switch Cisco , d'analyser des trames a l'aide de Wireshark</p>
        <a class=\"nav-link\" href=\"/configueswt\"> Voir des topologie , config réaliser</a>
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Système d'Exploitation </h3>
        <p> Je sais utiliser les système d'exploitation de windows 10 et 11 ainsi que celui de linux Ubuntu que j'ai pus utiliser lors de la création de Machine Virtuel et aussi en multiboot sur mon ordinateur perso</p>
        <a href=\"/ubuntu\"> Commande Linux que je sais manipuler</a>
      </div>
    </div>
  </div>
    <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Cablage | Signaux </h3>
        <p> Je sais effectuer des cablages pour mesurer tension et courant, je sais aussi analyser et changer des signaux a l'aide d'un oscilloscope . Je connais aussi les régles de securité et loie de l'électricité</p>
    
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Anglais | Espagnol </h3>
        <p> Niveau B2 en anglais et d etrés bonne base en espagnol</p>
        
      </div>
    </div>
  </div>
</div>
 <footer>
      <p>©Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "autrespages/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon portfolio!{% endblock %}

{% block body %}


<br>

<div id=\"fond\"> 
      <div class=\"ruban\">     
        <h2> Portfolio</h2>     
      </div>     
      <div class=\"ruban_gauche\"></div>
      <div class=\"ruban_droit\"></div>
</div>

<div class=\"container\">
  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Programmation</h3>
        <p> J'ai des compétance dans différents language de programmation telle que le language C , C++ et python .
         J'ai pus écrire des programmes pour des tris , des tableaux , des boucles et ecriture dans des fichier textes</p>
       <a class=\"nav-link\" href=\"/programmeC\"> Voir des exemples que j'ai put réaliser </a>
      
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Reseau </h3>
        <p> Je sais utiliser des logiciels telle que Cisco packet tracer et wireshark.
        Je suis capable de crée une extension d'un réseau existent en configurant des switch Cisco , d'analyser des trames a l'aide de Wireshark</p>
        <a class=\"nav-link\" href=\"/configueswt\"> Voir des topologie , config réaliser</a>
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Système d'Exploitation </h3>
        <p> Je sais utiliser les système d'exploitation de windows 10 et 11 ainsi que celui de linux Ubuntu que j'ai pus utiliser lors de la création de Machine Virtuel et aussi en multiboot sur mon ordinateur perso</p>
        <a href=\"/ubuntu\"> Commande Linux que je sais manipuler</a>
      </div>
    </div>
  </div>
    <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Cablage | Signaux </h3>
        <p> Je sais effectuer des cablages pour mesurer tension et courant, je sais aussi analyser et changer des signaux a l'aide d'un oscilloscope . Je connais aussi les régles de securité et loie de l'électricité</p>
    
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Anglais | Espagnol </h3>
        <p> Niveau B2 en anglais et d etrés bonne base en espagnol</p>
        
      </div>
    </div>
  </div>
</div>
 <footer>
      <p>©Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>


{% endblock %}", "autrespages/portfolio.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\autrespages\\portfolio.html.twig");
    }
}
