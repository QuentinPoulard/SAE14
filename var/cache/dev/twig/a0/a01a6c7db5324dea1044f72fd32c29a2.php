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

/* autrespages/loisir.html.twig */
class __TwigTemplate_0481af1545e1cc698dce0d28f6e7f438 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autrespages/loisir.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autrespages/loisir.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autrespages/loisir.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/loisirrll.png"), "html", null, true);
        echo ">
</div>

<div class=\"textloisir\">


<br> 
<p class=\"texttloisir\"> J'ai de nombreux passe temps et de nombreuse passion. Les principals sont d'abord ma famille ainsi que mes amis car c'est eux qui sont toujours pr??sents .<br> 
    <br> J'ai aussi fait beaucoup de sport en club comme du Judo , du Football et du Tenis . Aujourd'hui je pr??fere en faire de mon coter avec de la musculation et avec les sortie dehors g??n??ral .
    <br><br> Une de mes grandes passion est aussi les Jeux Vid??o . J'aime beeacoup les jeux en ??quipes avec de la communication comme Raimbow Siw Siege et Rocket League 
    <br> J'aime aussi tout se qui touche a l'informatique et au nouvelle technologie . Par exemple en ce moment je passe du temps avec mon p??re a m'informer sur le web 3.0 et la blockchain ainsi que la crypto monnai qui seront pour moi encore plus pr??sents dans le futur
</p>
<br>

</div>

<div class=\"city\">
    <img class=\"cityy\"  ; src=";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("media/city.png"), "html", null, true);
        echo ">
</div>

<p class=\"texttloisir\"> 
  J'ai toujours cette passion du foot et continue a la faire vivre en faisant des match avec mes amis et aussi en regardant les matchs de mes equipes favorites :<br> Manchester City et OL . 
  <br> Manchester City qui est aussi un club qui s'interessent au monde virtuel avec leur projet de recr??e leur stade recr??er l???Etihad Stadium dans le m??tavers.

</p>

<button class=\"neon-box-1\"> 
  <a class=\"nav-link\" href=\"/\"> Revenir a la page d'acceuil </a>
</button>

 <footer>
      <p>??Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "autrespages/loisir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  114 => 24,  108 => 21,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
    <img class=\"rl\"  ; src={{asset('media/loisirrll.png')}}>
</div>

<div class=\"textloisir\">


<br> 
<p class=\"texttloisir\"> J'ai de nombreux passe temps et de nombreuse passion. Les principals sont d'abord ma famille ainsi que mes amis car c'est eux qui sont toujours pr??sents .<br> 
    <br> J'ai aussi fait beaucoup de sport en club comme du Judo , du Football et du Tenis . Aujourd'hui je pr??fere en faire de mon coter avec de la musculation et avec les sortie dehors g??n??ral .
    <br><br> Une de mes grandes passion est aussi les Jeux Vid??o . J'aime beeacoup les jeux en ??quipes avec de la communication comme Raimbow Siw Siege et Rocket League 
    <br> J'aime aussi tout se qui touche a l'informatique et au nouvelle technologie . Par exemple en ce moment je passe du temps avec mon p??re a m'informer sur le web 3.0 et la blockchain ainsi que la crypto monnai qui seront pour moi encore plus pr??sents dans le futur
</p>
<br>

</div>

<div class=\"city\">
    <img class=\"cityy\"  ; src={{asset('media/city.png')}}>
</div>

<p class=\"texttloisir\"> 
  J'ai toujours cette passion du foot et continue a la faire vivre en faisant des match avec mes amis et aussi en regardant les matchs de mes equipes favorites :<br> Manchester City et OL . 
  <br> Manchester City qui est aussi un club qui s'interessent au monde virtuel avec leur projet de recr??e leur stade recr??er l???Etihad Stadium dans le m??tavers.

</p>

<button class=\"neon-box-1\"> 
  <a class=\"nav-link\" href=\"/\"> Revenir a la page d'acceuil </a>
</button>

 <footer>
      <p>??Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>

{% endblock %}", "autrespages/loisir.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\autrespages\\loisir.html.twig");
    }
}
