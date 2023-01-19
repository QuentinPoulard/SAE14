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

/* autrespages/cv.html.twig */
class __TwigTemplate_addfd62478f31ece0d897b5869cf9532 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autrespages/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "autrespages/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "autrespages/cv.html.twig", 1);
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
<h1 class=\"popo\">  Poste : Technicien Fibre Optique (H/F) chez <br> Orange - France </h1>
</div>


<br>
<br>

<div class=\"contcomp\">

  <h3><u>  Compétences :</u> </h3>

      <p > <u> Connaissance informatique </u> <p/>
   
      <p ><u> Système d'exploitation :</u> &ensp; &ensp;  &ensp;  &ensp; Windows 10 : base &ensp; &ensp;  &ensp;  &ensp;  Ubuntu : base </p>
     
     
      <p > <u>Réseau :</u> &ensp; &ensp;  &ensp;  &ensp;  Cisco Packet tracer  &ensp; &ensp;  &ensp;  &ensp; Wireshark</p>
      
      
      <p> <u>Programmation :</u> &ensp; &ensp;  &ensp;  Language C &ensp; &ensp;  &ensp;   Language C++ &ensp; &ensp;  &ensp; Language Python </p>
     
      <p> <u> Langues </u> <p/>
     
      <p \"> Anglais : niveau intermédiaire - séjours à l'étranger </p>
      <p > Espagnol : niveau intermédiaire  </p>
      
    
     
      <p > <u> Qualités </u> <p/>
     
      <p> Rigoureux </p>
      <p  >  Pugnace </p>
        <p >  Bienveillant </p>
      <div class=\"clear\"> </div>

</div>

<br><br>

<section class=\"contform\">

          <div class=\"formation\">
            <h3> <u> Formations : </u> </h3>
          </div>

          <br><br>


          <h5 class=\"bac\"> 2022 | BAC Sciences et Technologie de l'Industrie et du Développement Durable spécialité Système d'Information Numérique </h5> 
          <p class=\"bacc\"> - Lycée de La Plaine de l'Ain - AMBERIEU EN BUGEY  </p>
          <div class=\"clear\"> </div>

        
          <h5 class=\"bac\">2022 - 2025 | DUT Réseau & Télécommunication  </h5> 
          <p class=\"bacc\"> - IUT Jean Monnet - ROANNE  </p>
        <div class=\"clear\"> </div>

</section>

<br> <br>

<section class=\"contexp\">

            <div class=\"exppro\">
            <h3><u>  Expériences professionnelles / Projet :</u> </h3>
            </div>

          <br><br>


          <h5 class=\"entretien\"> Juillet 2022 | Entretien espace vert : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Bilan Personel : </u> loojaizhfzakecbqsdjvbrhdbcgbfgfhhdhhdhdhdh </p>
          <br>
          <br><br>

          <h5 class=\"entretien\"> Juillet 2021 | Entretien espace vert : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Bilan Personel : </u> Bonne première expérience dans le monde du travail et donc sous l'autorité d'une personne . Ma permis de me faire un avis sur le fait de travailler en extérieur et manuellement </p>

          <br> <br> <br>



          <h5 class=\"entretien\"> Décembre 2019 | Stage 3éme :  </h5>
          <p class=\"zza\"> CNPE du Bugey, service conduite </p>
          <p> <u> Bilan Personel : </u> J'ai û voir ce que c'est de travailler dans une grande entreprise , de travailler dans des bureaux .

          <br> <br><br> <br>

          <h5 class=\"entretien\"> Projet terminal 2022 |Serre autonome connectée :  </h5>
          <p class=\"zza\"> CNPE du Bugey, service conduite </p>
          <p> <u> Bilan Personel : </u> Ma permis de travailler en équipe et en autonomie, d'être sur un même projet pendant une longue période . <br>J'ai pu apprendre les différentes étapes pour réaliser un projet . j'ai pu utiliser mes connaissance en programmation , en dévellopement d'application et de Communication entre différents élements informatiques (capteurs ...)

</section>


<div class=\"clear\"> </div>

<br>
<br>
<div class=\"contourformu\">

<form action=\"media/CvSae.pdf\" method=\"get\" target=_blank  >
  <div>
    <label for=\"uname\"> Votre Prénom: </label> <br />
    <input
      required
      
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>


  <div>
    <label for=\"uname\"> Votre Nom: </label> <br />
    <input
      required   
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>



  <div class=\"emailBox\">
    <label for=\"emailAddress\"> Adresse Mail </label><br />
    <input
      id=\"emailAddress\"
      type=\"email\"
      size=\"45\"
      maxlength=\"64\"
      required
      placeholder=\"username@beststartupever.com\"
      pattern=\".+@.+\\..+\"
      title=\"Please provide only a Best Startup Ever corporate email address\" />
       <span class=\"lolvalidity\"></span>
  </div>

<br>
  <input type=\"submit\" href=\"media/CvSae.pdf\" download=\"CV\" value=\"Telecharger Cv\" >
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
      <p>©Copyright 2050 by Poulard. All rights reserved.</p>
    </footer>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "autrespages/cv.html.twig";
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
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Cv!{% endblock %}

{% block body %}

<br>
<div id=\"popo\">
<h1 class=\"popo\">  Poste : Technicien Fibre Optique (H/F) chez <br> Orange - France </h1>
</div>


<br>
<br>

<div class=\"contcomp\">

  <h3><u>  Compétences :</u> </h3>

      <p > <u> Connaissance informatique </u> <p/>
   
      <p ><u> Système d'exploitation :</u> &ensp; &ensp;  &ensp;  &ensp; Windows 10 : base &ensp; &ensp;  &ensp;  &ensp;  Ubuntu : base </p>
     
     
      <p > <u>Réseau :</u> &ensp; &ensp;  &ensp;  &ensp;  Cisco Packet tracer  &ensp; &ensp;  &ensp;  &ensp; Wireshark</p>
      
      
      <p> <u>Programmation :</u> &ensp; &ensp;  &ensp;  Language C &ensp; &ensp;  &ensp;   Language C++ &ensp; &ensp;  &ensp; Language Python </p>
     
      <p> <u> Langues </u> <p/>
     
      <p \"> Anglais : niveau intermédiaire - séjours à l'étranger </p>
      <p > Espagnol : niveau intermédiaire  </p>
      
    
     
      <p > <u> Qualités </u> <p/>
     
      <p> Rigoureux </p>
      <p  >  Pugnace </p>
        <p >  Bienveillant </p>
      <div class=\"clear\"> </div>

</div>

<br><br>

<section class=\"contform\">

          <div class=\"formation\">
            <h3> <u> Formations : </u> </h3>
          </div>

          <br><br>


          <h5 class=\"bac\"> 2022 | BAC Sciences et Technologie de l'Industrie et du Développement Durable spécialité Système d'Information Numérique </h5> 
          <p class=\"bacc\"> - Lycée de La Plaine de l'Ain - AMBERIEU EN BUGEY  </p>
          <div class=\"clear\"> </div>

        
          <h5 class=\"bac\">2022 - 2025 | DUT Réseau & Télécommunication  </h5> 
          <p class=\"bacc\"> - IUT Jean Monnet - ROANNE  </p>
        <div class=\"clear\"> </div>

</section>

<br> <br>

<section class=\"contexp\">

            <div class=\"exppro\">
            <h3><u>  Expériences professionnelles / Projet :</u> </h3>
            </div>

          <br><br>


          <h5 class=\"entretien\"> Juillet 2022 | Entretien espace vert : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Bilan Personel : </u> loojaizhfzakecbqsdjvbrhdbcgbfgfhhdhhdhdhdh </p>
          <br>
          <br><br>

          <h5 class=\"entretien\"> Juillet 2021 | Entretien espace vert : </h5>
          <p class=\"zza\"> Mairie de CHARNOZ sur AIN </p>
          <p> <u> Bilan Personel : </u> Bonne première expérience dans le monde du travail et donc sous l'autorité d'une personne . Ma permis de me faire un avis sur le fait de travailler en extérieur et manuellement </p>

          <br> <br> <br>



          <h5 class=\"entretien\"> Décembre 2019 | Stage 3éme :  </h5>
          <p class=\"zza\"> CNPE du Bugey, service conduite </p>
          <p> <u> Bilan Personel : </u> J'ai û voir ce que c'est de travailler dans une grande entreprise , de travailler dans des bureaux .

          <br> <br><br> <br>

          <h5 class=\"entretien\"> Projet terminal 2022 |Serre autonome connectée :  </h5>
          <p class=\"zza\"> CNPE du Bugey, service conduite </p>
          <p> <u> Bilan Personel : </u> Ma permis de travailler en équipe et en autonomie, d'être sur un même projet pendant une longue période . <br>J'ai pu apprendre les différentes étapes pour réaliser un projet . j'ai pu utiliser mes connaissance en programmation , en dévellopement d'application et de Communication entre différents élements informatiques (capteurs ...)

</section>


<div class=\"clear\"> </div>

<br>
<br>
<div class=\"contourformu\">

<form action=\"media/CvSae.pdf\" method=\"get\" target=_blank  >
  <div>
    <label for=\"uname\"> Votre Prénom: </label> <br />
    <input
      required
      
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>


  <div>
    <label for=\"uname\"> Votre Nom: </label> <br />
    <input
      required   
      pattern=\"[a-z]{3,12}\" />
    <span class=\"validity\"></span>
  </div>



  <div class=\"emailBox\">
    <label for=\"emailAddress\"> Adresse Mail </label><br />
    <input
      id=\"emailAddress\"
      type=\"email\"
      size=\"45\"
      maxlength=\"64\"
      required
      placeholder=\"username@beststartupever.com\"
      pattern=\".+@.+\\..+\"
      title=\"Please provide only a Best Startup Ever corporate email address\" />
       <span class=\"lolvalidity\"></span>
  </div>

<br>
  <input type=\"submit\" href=\"media/CvSae.pdf\" download=\"CV\" value=\"Telecharger Cv\" >
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
      <p>©Copyright 2050 by Poulard. All rights reserved.</p>
    </footer>



{% endblock %}", "autrespages/cv.html.twig", "C:\\Users\\quent\\Symfony\\SAE104\\sae14\\templates\\autrespages\\cv.html.twig");
    }
}
