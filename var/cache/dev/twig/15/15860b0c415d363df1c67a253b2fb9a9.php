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

/* pageanglais/portfolioanglais.html.twig */
class __TwigTemplate_3dbcd1cf728aa720ee5f27551ddf5842 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/portfolioanglais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/portfolioanglais.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "pageanglais/portfolioanglais.html.twig", 1);
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
        <p> I have skills in different programming languages such as C, C++ and Python.
         I could write programs for sorting, arrays, loops and writing in text files</p>
       <a class=\"nav-link\" href=\"/programmeC\"> See some examples that I have done </a>
      
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Network </h3>
        <p> I know how to use software such as Cisco packet tracer and wireshark.
        I am able to create an extension of an existing network by configuring Cisco switches, to analyze frames using Wireshark</p>
        <a class=\"nav-link\" href=\"/configueswt\"> See topology, configure realize</a>
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Operating System </h3>
        <p> I know how to use the operating system of windows 10 and 11 as well as the one of linux Ubuntu that I could use during the creation of Virtual Machine and also in multiboot on my personal computer</p>
        <a class=\"nav-link\" href=\"/ubuntu\"> Linux command that I can handle</a>
      </div>
    </div>
  </div>
    <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Cabling | Signals </h3>
        <p> I know how to make wiring to measure voltage and current, I also know how to analyze and change signals using an oscilloscope. I also know the rules of security and law of electricity.</p>
    
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> English | Spanish </h3>
        <p> B2 level in English and very good knowledge of Spanish</p>
        
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
        return "pageanglais/portfolioanglais.html.twig";
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
        return new Source("{% extends 'base2.html.twig' %}

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
        <p> I have skills in different programming languages such as C, C++ and Python.
         I could write programs for sorting, arrays, loops and writing in text files</p>
       <a class=\"nav-link\" href=\"/programmeC\"> See some examples that I have done </a>
      
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Network </h3>
        <p> I know how to use software such as Cisco packet tracer and wireshark.
        I am able to create an extension of an existing network by configuring Cisco switches, to analyze frames using Wireshark</p>
        <a class=\"nav-link\" href=\"/configueswt\"> See topology, configure realize</a>
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Operating System </h3>
        <p> I know how to use the operating system of windows 10 and 11 as well as the one of linux Ubuntu that I could use during the creation of Virtual Machine and also in multiboot on my personal computer</p>
        <a class=\"nav-link\" href=\"/ubuntu\"> Linux command that I can handle</a>
      </div>
    </div>
  </div>
    <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> Cabling | Signals </h3>
        <p> I know how to make wiring to measure voltage and current, I also know how to analyze and change signals using an oscilloscope. I also know the rules of security and law of electricity.</p>
    
      </div>
    </div>
  </div>

  <div class=\"card\">
    <div class=\"box\">
      <div class=\"content\">
        <h2>°</h2>
        <h3> English | Spanish </h3>
        <p> B2 level in English and very good knowledge of Spanish</p>
        
      </div>
    </div>
  </div>
</div>
  <footer>
      <p>©Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>




{% endblock %}", "pageanglais/portfolioanglais.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\PageAnglais\\portfolioanglais.html.twig");
    }
}
