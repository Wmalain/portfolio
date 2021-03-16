<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Portfolio Alain WEHBE</title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Indie+Flower&family=Lato&family=Redressed&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>



</head>

<header>
 <div class="div1header">
<h1 class="headerh1">Alain <strong>WEHBE</strong></h1>
<h2 class="headerh2"></h2>
</div>


<ul class="nav nav-tabs div2header" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active butnav" id="Presentation-tab" data-bs-toggle="tab" data-bs-target="#Presentation" type="button" role="tab" aria-controls="Presentation" aria-selected="true">Presentation</button>
  </li>
  <li class="nav-item butnav" role="presentation">
    <button class="nav-link" id="projets-tab" data-bs-toggle="tab" data-bs-target="#projets" type="button" role="tab" aria-controls="projets" aria-selected="false">Projets</button>
  </li>
  <li class="nav-item butnav" role="presentation">
    <button class="nav-link" id="connaissance-tab" data-bs-toggle="tab" data-bs-target="#connaissance" type="button" role="tab" aria-controls="connaissance" aria-selected="false">Connaissances</button>
  </li>
  <li class="nav-item butnav" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
</header>




<div class="tab-content" id="myTabContent">



  <div class="tab-pane fade show active" id="Presentation" role="tabpanel" aria-labelledby="Presentation-tab">
    <h2 class="presh2">Présentation</h2>
    <div class="presdiv">
        <p class="presep">Moi c’est Alain Wehbe, passionné de nouvelle technologie depuis mon plus jeune âge, Adolescent je découvre INTERNET, les sites de l’époque étaient bien différents de ce qu’ils sont aujourd’hui. Je vous propose de mettre cette passion au service de VOS besoins, pour faire le site de VOS rêves !</p>
        <img class="presimg" src="assets/img/pro.jpg" alt="">
    </div>

  </div>



  <div class="tab-pane fade" id="projets" role="tabpanel" aria-labelledby="projets-tab">
    
    
    




  </div>


  <div class="tab-pane fade" id="connaissance" role="tabpanel" aria-labelledby="connaissance-tab">
  <center class="skills">
        <div class="SkillBar">
            <div id="Skill-HTML"> 
      <span class="Skill-Area ">HTML</span>
      <span class="PercentText ">100%</span>
            </div>
        </div>
  
    <div class="SkillBar">
        <div id="Skill-CSS">
        <span class="Skill-Area ">CSS/CSS3</span>
        <span class="PercentText ">90%</span>
        </div>
    </div>

    <div class="SkillBar">
        <div id="Skill-jQuery">
            <span class="Skill-Area ">jQuery</span>
            <span class="PercentText ">60%</span>
        </div>
    </div>
  
    <div class="SkillBar">
        <div id="Skill-JS">
            <span class="Skill-Area ">Javascript</span>
            <span class="PercentText ">60%</span>
        </div>
    </div>
  

  
    <div class="SkillBar">
        <div id="Skill-PHP">
            <span class="Skill-Area ">PHP </span>
            <span class="PercentText ">80%</span>
        </div>
    </div>
  
    <div class="SkillBar">
        <div id="Skill-SQL">
            <span class="Skill-Area ">SQL </span>
            <span class="PercentText ">80%</span>
        </div>
    </div>

    <div class="SkillBar">
        <div id="Skill-BOOTS">
            <span class="Skill-Area ">BOOTSTRAP </span>
            <span class="PercentText ">70%</span>
        </div>
    </div>
    </center>      

  </div>


  <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">

  <div class="container">
	<div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contactez moi!</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Nom</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="votre nom" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="votre mail" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="votre message" rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>

  </div>



</div>
  







<!-- contact -->

<div>

  <div class="foot1"> Voir un monde dans un grain de sable Et un Ciel dans une Fleur sauvage Tenir l'Infini dans la paume de la main Et l'éternité dans une heure.</div>
  
  <div class="foot2">
    <p class="footp">© Alain Wehbe 2021</p>
    <a href="https://www.linkedin.com/in/alain-wehbe/" target="_blank"><img src="" alt=""><i class="fab fa-linkedin logo"></i></a>
    <a href="https://github.com/Wmalain" target="_blank"><i class="fab fa-github logo"></i></a>
  </div>
</div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<body>
    
</body>
</html>