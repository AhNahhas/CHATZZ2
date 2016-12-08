
<!-- ==========================================================================
index.php file :
  main file for ZZChat website

AUTHORS : Amin, Simon
DATE    : 2016.

============================================================================ -->

<!DOCTYPE html>
<html lang="fr-FR">



<!-- ==========================================================================
head marker :
  - define page name
  - refers to needed stylesheets

To avoid loading issues, js files are included at the end of the document
(so that it will be loaded at the end).

============================================================================ -->

<head>
  <title> ZZChat </title>
  <link rel="stylesheet" href="static/css/bootstrap.css">
  <link rel="stylesheet" href="static/css/stylesheet.css">
  <meta charset="UTF-8" >

</head>



<!-- ==========================================================================
body marker :
 We use php to include sign-in or sign-up pages.

============================================================================ -->

<body >

  <div class="main">

    <!-- Navigation bar -->
    <!-- to be improved : get 'a' tags into a list -->
    <!-- beware of css modifications -->


    </br>
    </br>
    </br>
    </br>

    <?php session_start();?>
    <img id="frenchimg" src="static/imgs/frlang.png" alt="frenchlang" onclick="frlang()" /> 
    <img id="englishimg" src="static/imgs/englang.png" alt="englang" onclick="englang()" /> 
    
    <nav class="navbar navbar-fixed-top">
      <a  id="navbar-brand1" class="navbar-brand" href="index.php?id=register">  </a>
      <a id="navbar-brand2" class="navbar-brand" href="index.php?id=signin">  </a>

    </nav>



    
    <!-- PHP inclusion script -->

    <?php

      include('src/functions.php');

      $signin = 'src/sign-in.php';
      $register = 'src/register.php';
      $id = '0';
      if(isset($_GET['id'])){
        $id = $_GET['id'];

      }      

      switch($id){
        case 'register':
          include($register);
          break;

        case 'signin':
          include($signin);
          break;

        default:
          include($signin);
          break;

      }

    ?>


  </div>
  <script type="text/javascript">

    
     function englang(){
      <?php $_SESSION['langage'] = "english" ;?>
      var reg1 = document.getElementById("navbar-brand1");
      var rep1 = document.createTextNode("Register");
      var reg2 = document.getElementById("navbar-brand2");
      var rep2 = document.createTextNode("Sign-in");
      var reg3 = document.getElementById("submit");
      reg1.appendChild(rep1);
      reg2.appendChild(rep2);
      reg3.value = "Sign-in";
      


    }

    function frlang(){
      <?php $_SESSION['langage'] = "french" ;?>
      var img2 = document.getElementById('englishimg');
      var reg1 = document.getElementById("navbar-brand1");
      var reg2 = document.getElementById("navbar-brand2");
      var reg3 = document.getElementById("submit");
      reg1.innerHTML = "S'enregistrer";
      reg2.innerHTML = "Se connecter";
      reg3.value = "Se connecter";
      

    }



  </script>


</body>


</html>
