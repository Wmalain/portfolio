<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <meta name="description" content="Portfolio Alain WEHBE">
    <meta name="keywords" content="HTML, CSS, JS, PHP">
    <meta name="author" content="Alain Wehbe">
    <meta property="og:title" content="Alain Wehbe" />
    <meta property="og:type" content="Portfolio" />
    <meta property="og:description" content="Portfolio Alain WEHBE" />
    <meta property="og:image" content="http://alainwehbe.com/assets/img/og.jpg"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="www.alainwehbe.com">

    <title> Portfolio Alain WEHBE</title>
    <link rel="icon" href="assets/img/favicon.png"/>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsiv.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Indie+Flower&family=Lato&family=Redressed&family=Roboto+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>


<header>

  <div class="div1header">

    <h1 class="headerh1">Alain <strong class="name">WEHBE</strong></h1>
    <h2 class="headerh2"></h2>

  </div>

  <ul class="nav nav-tabs div2header" id="myTab" role="tablist">

    <li class="nav-item" role="presentation">
      <button class="nav-link active butnav" id="Presentation-tab" data-bs-toggle="tab" data-bs-target="#Presentation" type="button" role="tab" aria-controls="Presentation" aria-selected="true">Presentation</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link butnav" id="projets-tab" data-bs-toggle="tab" data-bs-target="#projets" type="button" role="tab" aria-controls="projets" aria-selected="false">Projets</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link butnav" id="connaissance-tab" data-bs-toggle="tab" data-bs-target="#connaissance" type="button" role="tab" aria-controls="connaissance" aria-selected="false">Connaissances</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link butnav" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
    </li>
    
  </ul>

</header>


<!-- Presentation -->
<div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="Presentation" role="tabpanel" aria-labelledby="Presentation-tab">
    <div class="presdiv">
        <p class="presep"data-text="Moi c’est Alain Wehbe, passionné de nouvelle technologie depuis mon plus jeune âge, Adolescent je découvre INTERNET, les sites de l’époque étaient bien différents de ce qu’ils sont aujourd’hui. Je vous propose de mettre cette passion au service de VOS besoins, pour faire le site de VOS rêves !"></p>
        <!-- <p class="presep">Moi c’est Alain Wehbe, passionné de nouvelle technologie depuis mon plus jeune âge, Adolescent je découvre INTERNET, les sites de l’époque étaient bien différents de ce qu’ils sont aujourd’hui. Je vous propose de mettre cette passion au service de VOS besoins, pour faire le site de VOS rêves !</p> -->
        <img class="presimg" src="assets/img/moi.png" alt="dessin de moi">
    </div>

  </div>
<!-- Presentation FIN -->

<!-- Projets -->
  <div class="tab-pane fade" id="projets" role="tabpanel" aria-labelledby="projets-tab">
   
    <div class="container pressit">
        <div class="col-sm-12 text-center test">
          <img class="imgsite" src="assets/img/GOM.png" alt="">
          <div class="textpres">
            <h2 class="hsit">Good Old Movies</h2>
            <p class="psit">Site crée pour la fin de ma formation de developpeur web.<br> un site qui vous conseil de bon vieux films à partir d'une base de donnée entré à la main.<br> 
            <p class="strongp">HTML, SASS, JS, PHP, SQL</p>
            <a class="asit" href="https://www.goodoldmovies.fr/" target="_blank">Lien</a>
          </div>
      </div>

      <div class="col-sm-12 text-center test">
          <img class="imgsite" src="assets/img/mycave.png" alt="">
          <div class="textpres">
            <h2 class="hsit">Mycave</h2>
            <p class="psit">Site d'une cave Fictive réalisé pour l'examen Back-end lors de ma formation.</p>
            <p class="strongp">HTML, SASS, JS, PHP, SQL</p>
          </div>
      </div>

      <div class="col-sm-12 text-center test">
          <img class="imgsite" src="assets/img/1.jpg" alt="">
          <div class="textpres">
            <h2 class="hsit">Gaming Campus</h2>
            <p class="psit">Intégration faite à partir d'une maquette PDF lors de ma formation</p>
            <p class="strongp">HTML, CSS</p>
          </div>
      </div>

      <div class="col-sm-12 text-center test">
          <img class="imgsite" src="assets/img/2.jpg" alt="">
          <div class="textpres">
            <h2 class="hsit">The resto</h2>
            <p class="psit">Intégration faite à partir d'une maquette PDF lors de ma formation, prise en main du Website Builder ELEMENTOR</p>
            <p class="strongp">HTML, CSS, ELEMENTOR</p>
          </div>
      </div>

      <div class="col-sm-12 text-center test">
          <img class="imgsite" src="assets/img/3.jpg" alt="">
          <div class="textpres">
            <h2 class="hsit">Futur Architecture</h2>
            <p class="psit">Intégration faite à partir d'une maquette PDF lors de ma formation</p>
            <p class="strongp">HTML, CSS</p>
          </div>
      </div>
    </div>

  </div>
<!-- Projets FIN -->

  <!-- Skill -->
  <div class="tab-pane fade" id="connaissance" role="tabpanel" aria-labelledby="connaissance-tab">
    <center class="skills">

      <h2 class="hcomp">Front</h2>

            <div class="SkillBar">
                <div id="Skill-HTML"> 
                  <span class="Skill-Area ">HTML</span>
                  <span class="PercentText ">100%</span>
                </div>
            </div>
      
        <div class="SkillBar">
            <div id="Skill-CSS">
              <span class="Skill-Area ">CSS/SASS</span>
              <span class="PercentText ">90%</span>
            </div>
        </div>

        <div class="SkillBar">
          <div id="Skill-GULP">
            <span class="Skill-Area ">GULP</span>
            <span class="PercentText ">50%</span>
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
            <div id="Skill-AJAX">
              <span class="Skill-Area ">AJAX</span>
              <span class="PercentText ">50%</span>
            </div>
        </div>

      <h2 class="hcomp">Back</h2>

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

      <h2 class="hcomp">Framework</h2>
      
      <div class="SkillBar">
        <div id="Skill-BOOTS">
          <span class="Skill-Area ">BOOTSTRAP </span>
          <span class="PercentText ">70%</span>
        </div>
      </div>
    
      <div class="SkillBar">
        <div id="Skill-SYNF">
          <span class="Skill-Area ">SYNFONY</span>
          <span class="PercentText ">50%</span>
        </div>
      </div>
  
    </center>      
  </div>

<!-- contact -->
    <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">

        <div class="container form">
          <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-6 ">
              <div class="well well-sm">
                <form action="form.php" class="form-horizontal " action="" method="post">

                <fieldset>
                <legend class="text-center cont">Contactez moi !</legend>
      
              <!-- Name input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="name">Nom</label>
                  <div class="">
                    <input id="name" name="name" type="text" class="form-control" required>
                  </div>
                </div>
      
              <!-- Email input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="email">E-mail</label>
                  <div class="">
                    <input id="email" name="email" type="email" class="form-control" required>
                  </div>
                </div>

              <!-- object input-->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="subject">Objet</label>
                  <div class="">
                    <input id="subject" name="subject" type="text" class="form-control" required>
                  </div>
                </div>
      
              <!-- Message body -->
                <div class="form-group">
                  <label class="col-md-3 control-label" for="message">message</label>
                  <div class="">
                    <textarea class="form-control" id="message" name="message"  rows="5" required></textarea>
                  </div>
                </div>
      
              <!-- Form actions -->
                <div class="form-group ">
                  <div class="col-md-12 btncont1">
                    <input type="submit"  type="submit" class="btn btn-lg btncont "></input>
                  </div>
                </div>

              </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
<!-- contact FIN -->



<!-- FOOTER -->
<footer>
  <div class="foott1"> "Je voudrais voir le monde dans un grain de sable, Et le paradis dans une fleure sauvage. Tenir l'infini dans la paume de ma main Et l'éternité dans une heure." William Blake</div>

  <div class ="foott2">"N'est pas mort ce qui à jamais dort" H.P Lovecraft</div>
  
  <div class="foot2">
    <p class="footp">© Alain Wehbe 2021 </p>
    <a href="https://www.linkedin.com/in/alain-wehbe/" target="_blank"><img src="" alt=""><i class="fab fa-linkedin logo"></i></a>
    <a href="https://github.com/Wmalain" target="_blank"><i class="fab fa-github logo"></i></a>
  </div>
</footer>
<!-- Footer fin -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>



<body>
    
</body>
</html>