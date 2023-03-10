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

/* pageanglais/cvanglais.html.twig */
class __TwigTemplate_e6329acb4fde227f4c74b2f5a379c197 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/cvanglais.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pageanglais/cvanglais.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "pageanglais/cvanglais.html.twig", 1);
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

        echo "Mon Cv!";
        
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
<div id=\"popo\">
<h1 class=\"popo\">  Position: Fiber Optic Technician (H/F) at <br> Orange - France </h1>
</div>


<br>
<br>

<div class=\"contcomp\">

  <h3><u>  Skills :</u> </h3>

      <p > <u> Computer knowledge </u> <p/>
   
      <p ><u> Operating system :</u> &ensp; &ensp;  &ensp;  &ensp; Windows 10 : base &ensp; &ensp;  &ensp;  &ensp;  Ubuntu : base </p>
     
     
      <p > <u>Network :</u> &ensp; &ensp;  &ensp;  &ensp;  Cisco Packet tracer  &ensp; &ensp;  &ensp;  &ensp; Wireshark</p>
      
      
      <p> <u>Programming :</u> &ensp; &ensp;  &ensp;  Language C &ensp; &ensp;  &ensp;   Language C++ &ensp; &ensp;  &ensp; Language Python </p>
     
      <p> <u> Languages  </u> <p/>
     
      <p \"> English : intermediate level - stays abroad </p>
      <p > Spanish: intermediate level </p>
      
    
     
      <p > <u> Qualities </u> <p/>
     
      <p> Rigorous </p>
      <p  >  PugnPugnacious ace </p>
        <p >  Benevolent </p>
      <div class=\"clear\"> </div>

</div>

<br><br>

<section class=\"contform\">

          <div class=\"formation\">
            <h3> <u> Formations : </u> </h3>
          </div>

          <br><br>


          <h5 class=\"bac\"> 2022 | BAC Science and Technology of Industry and Sustainable Development, specializing in Digital Information Systems </h5> 
          <p class=\"bacc\"> - High School de La Plaine de l'Ain - AMBERIEU EN BUGEY  </p>
          <div class=\"clear\"> </div>

        
          <h5 class=\"bac\">2022 - 2025 | DUT Network & Telecommunication  </h5> 
          <p class=\"bacc\"> - IUT Jean Monnet - ROANNE  </p>
        <div class=\"clear\"> </div>

</section>

<br> <br>

<section class=\"contexp\">

            <div class=\"exppro\">
            <h3><u>  Professional experience / Project :</u> </h3>
            </div>

          <br><br>


          <h5 class=\"entretien\"> July 2022 | Green space maintenance : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Bilan Personel : </u> Second experience in the world of work and therefore under the authority of a person. Allowed me to make an opinion on the fact of working outside and manually </p>
          <br>
          <br><br>

          <h5 class=\"entretien\"> July 2021 | Green space maintenance : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Personal Balance Sheet : </u>Good first experience in the world of work and therefore under the authority of a person. Allowed me to make an opinion on the fact of working outside and manually </p>

          <br> <br> <br>



          <h5 class=\"entretien\"> December 2019 | Internship 3??me  :  </h5>
          <p class=\"zza\"> CNPE du Bugey, driving service </p>
          <p> <u> Personal Balance Sheet : </u> I got to see what it's like to work in a big company, to work in offices .

          <br> <br><br> <br>

          <h5 class=\"entretien\"> Terminal 2022 project | Connected autonomous greenhouse :  </h5>
          <p class=\"zza\"> High School de La Plaine de l'Ain - AMBERIEU EN BUGEY </p>
          <p> <u> Personal Balance Sheet  : </u> My allowed to work in team and in autonomy, to be on the same project for a long time. <br>I was able to learn the different steps to carry out a project. I was able to use my knowledge of programming, application development and communication between different computer elements (sensors, etc.)

</section>


<div class=\"clear\"> </div>

<br>
<br>
<div class=\"contourformu\">

<form action=\"media/CvSae.pdf\" method=\"get\" target=_blank  >
  <div>
    <label for=\"uname\"> Your first name: </label> <br />
    <input
      required
      
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>


  <div>
    <label for=\"uname\"> Your name: </label> <br />
    <input
      required   
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>



  <div class=\"emailBox\">
    <label for=\"emailAddress\">  Mail address</label><br />
    <input
      id=\"emailAddress\"
      type=\"email\"
      size=\"45\"
      maxlength=\"64\"
      required
      placeholder=\"username@thebest.com\"
      pattern=\".+@.+\\..+\"
      title=\"Please provide only a Best Startup Ever corporate email address\" />
       <span class=\"lolvalidity\"></span>
  </div>

<br>
  <input type=\"submit\" href=\"media/CvSae.pdf\" download=\"CV\" value=\"Download Cv\" >
  <br>
  <a href=\"media/CvSae.pdf\" download=\"CV\">Download</a>

  ";
        // line 153
        echo "  </a>
  </input>
</form>
</div>
<br>
<br>

   <footer>
      <p>??Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pageanglais/cvanglais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 153,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Mon Cv!{% endblock %}

{% block body %}

<br>
<div id=\"popo\">
<h1 class=\"popo\">  Position: Fiber Optic Technician (H/F) at <br> Orange - France </h1>
</div>


<br>
<br>

<div class=\"contcomp\">

  <h3><u>  Skills :</u> </h3>

      <p > <u> Computer knowledge </u> <p/>
   
      <p ><u> Operating system :</u> &ensp; &ensp;  &ensp;  &ensp; Windows 10 : base &ensp; &ensp;  &ensp;  &ensp;  Ubuntu : base </p>
     
     
      <p > <u>Network :</u> &ensp; &ensp;  &ensp;  &ensp;  Cisco Packet tracer  &ensp; &ensp;  &ensp;  &ensp; Wireshark</p>
      
      
      <p> <u>Programming :</u> &ensp; &ensp;  &ensp;  Language C &ensp; &ensp;  &ensp;   Language C++ &ensp; &ensp;  &ensp; Language Python </p>
     
      <p> <u> Languages  </u> <p/>
     
      <p \"> English : intermediate level - stays abroad </p>
      <p > Spanish: intermediate level </p>
      
    
     
      <p > <u> Qualities </u> <p/>
     
      <p> Rigorous </p>
      <p  >  PugnPugnacious ace </p>
        <p >  Benevolent </p>
      <div class=\"clear\"> </div>

</div>

<br><br>

<section class=\"contform\">

          <div class=\"formation\">
            <h3> <u> Formations : </u> </h3>
          </div>

          <br><br>


          <h5 class=\"bac\"> 2022 | BAC Science and Technology of Industry and Sustainable Development, specializing in Digital Information Systems </h5> 
          <p class=\"bacc\"> - High School de La Plaine de l'Ain - AMBERIEU EN BUGEY  </p>
          <div class=\"clear\"> </div>

        
          <h5 class=\"bac\">2022 - 2025 | DUT Network & Telecommunication  </h5> 
          <p class=\"bacc\"> - IUT Jean Monnet - ROANNE  </p>
        <div class=\"clear\"> </div>

</section>

<br> <br>

<section class=\"contexp\">

            <div class=\"exppro\">
            <h3><u>  Professional experience / Project :</u> </h3>
            </div>

          <br><br>


          <h5 class=\"entretien\"> July 2022 | Green space maintenance : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Bilan Personel : </u> Second experience in the world of work and therefore under the authority of a person. Allowed me to make an opinion on the fact of working outside and manually </p>
          <br>
          <br><br>

          <h5 class=\"entretien\"> July 2021 | Green space maintenance : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Personal Balance Sheet : </u>Good first experience in the world of work and therefore under the authority of a person. Allowed me to make an opinion on the fact of working outside and manually </p>

          <br> <br> <br>



          <h5 class=\"entretien\"> December 2019 | Internship 3??me  :  </h5>
          <p class=\"zza\"> CNPE du Bugey, driving service </p>
          <p> <u> Personal Balance Sheet : </u> I got to see what it's like to work in a big company, to work in offices .

          <br> <br><br> <br>

          <h5 class=\"entretien\"> Terminal 2022 project | Connected autonomous greenhouse :  </h5>
          <p class=\"zza\"> High School de La Plaine de l'Ain - AMBERIEU EN BUGEY </p>
          <p> <u> Personal Balance Sheet  : </u> My allowed to work in team and in autonomy, to be on the same project for a long time. <br>I was able to learn the different steps to carry out a project. I was able to use my knowledge of programming, application development and communication between different computer elements (sensors, etc.)

</section>


<div class=\"clear\"> </div>

<br>
<br>
<div class=\"contourformu\">

<form action=\"media/CvSae.pdf\" method=\"get\" target=_blank  >
  <div>
    <label for=\"uname\"> Your first name: </label> <br />
    <input
      required
      
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>


  <div>
    <label for=\"uname\"> Your name: </label> <br />
    <input
      required   
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>



  <div class=\"emailBox\">
    <label for=\"emailAddress\">  Mail address</label><br />
    <input
      id=\"emailAddress\"
      type=\"email\"
      size=\"45\"
      maxlength=\"64\"
      required
      placeholder=\"username@thebest.com\"
      pattern=\".+@.+\\..+\"
      title=\"Please provide only a Best Startup Ever corporate email address\" />
       <span class=\"lolvalidity\"></span>
  </div>

<br>
  <input type=\"submit\" href=\"media/CvSae.pdf\" download=\"CV\" value=\"Download Cv\" >
  <br>
  <a href=\"media/CvSae.pdf\" download=\"CV\">Download</a>

  {#<a type=\"submit\" href=\"media/CvSae.pdf\" target=_blank> Telecharger cv >#}
  </a>
  </input>
</form>
</div>
<br>
<br>

   <footer>
      <p>??Copyright 2050 by Poulard Quentin. All rights reserved.</p>
    </footer>



{% endblock %}", "pageanglais/cvanglais.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\PageAnglais\\cvanglais.html.twig");
    }
}
