<?php
// if(session_status()==PHP_SESSION_NONE)
// {
//   session_start();
//   if(!isset($_SESSION['username']))
//   {
//     header("Location: index.php");
//     exit;
//   }
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="css/Semantic/semantic.min.css">
  <script src="js/semantic.min.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/home.css">
  <link rel="icon" href="images\dscelogo.png">
  <title>AIML Lab</title>
</head>
<body>
  <h1 class="ui header" style="text-align:center" id = "head">
      <a class="ui circular image" href="http://dsce.edu.in"><img src="images/dscelogo.jpg"></a>
      <a href="titles.php">Virtual Labs</a>
</h1>
<div id="toTop"><i class="chevron up icon"></i></div>
  <div>
  <div class="ui  light grey inverted secondary huge menu">
  <a class="header item" href="index.php">
    Home
  </a>
 <a class="item">
    About Us
  </a>
  <?php
    // if(!isset($_SESSION["username"])) echo "<a class=\"item\" href=\"login.php\">Login</a><a class=\"item\" href=\"register.php\">Register</a>";
    // else
    // {
    //   echo "<a class=\"item\">";
    //   echo $_SESSION['username'];
    //   echo "</a><a class=\"item\" href=\"logoutprocess.php\">Logout</a>";
    // }
    ?>
</div>
</div>
  <div class="ui container" id="cont">
    <h2 class="ui header" style="font-size:35px; margin-left:10px;">
    AIML LAB
    </h2>
    <div class="ui stackable grid">
  <div class="four wide column">
    <div class="ui secondary vertical pointing menu" id="Menus">
      <a class="active item" id="intro">
        Introduction
      </a>
      <a class="item" id="prereq">
        Objective
      </a>
      <a class="item" id="list">
        List of Tutorials
      </a>
      <a class="item" id="faq">
        FAQ's
      </a>
    </div>
  </div>
 <div class="twelve wide stretched column">
    <div class="ui segment">

      <div id="int" align="justify">
      Artificial intelligence and machine learning are the part of computer science that are correlated with each other. These two technologies
      are the most trending technologies which are used for creating intelligent systems.
      Machine learning is a subfield of artificial intelligence, which enables machines to learn from past data or experiences without being explicitly programmed.
      </div>

      <!-- <div id="lis" style="display: none;">
        <div class="ui bulleted list">
          <a class="item" href="networkutilities.php">Network Utilities</a>
        </div>
      </div> -->

      <div id="pre" style="display: none;">The basic objective of AI (also called heuristic programming, machine intelligence, or the simulation of cognitive behavior) is to enable computers to perform such intellectual tasks as decision making, problem solving, perception, understanding human communication (in any language, and translate among them<br></div>

      <div id="faqs" style="display: none;">
        <div class="ui styled accordion">
          <div class="title">
            <i class="dropdown icon"></i>What do you understand by Artificial Intelligence
          </div>
          <div class="content">
            <p class="transition hidden">>Artificial intelligence is computer science technology that emphasizes creating intelligent machine that can mimic human behavior. Here Intelligent machines can be defined as the machine that can behave like a human, think like a human, and also capable of decision making. It is made up of two words, "Artificial" and "Intelligence," which means the "man-made thinking ability.</p>
          </div>

          <div class="title" >
            <i class="dropdown icon"></i>What are the types of Machine Learning? </div>
          <div class="content">
            <p class="transition hidden">Supervised Learning: Supervised learning is a type of Machine learning in which the machine needs external supervision to learn from data. The supervised learning models are trained using the labeled dataset. Regression and Classification are the two main problems that can be solved with Supervised Machine Learning.<br><br>
            Unsupervised Learning: It is a type of machine learning in which the machine does not need any external supervision to learn from the data, hence called unsupervised learning. The unsupervised models can be trained using the unlabelled dataset. These are used to solve the Association and Clustering problems.<br><br>
            Reinforcement Learning: In Reinforcement learning, an agent interacts with its environment by producing actions, and learn with the help of feedback. The feedback is given to the agent in the form of rewards, such as for each good action, he gets a positive reward, and for each bad action, he gets a negative reward. There is no supervision provided to the agent. Q-Learning algorithm is used in reinforcement learning.<br><br></p>
          </div>



    </div>
  </div>
</div>
  </div>
  <script language='javascript'>
             $(document).ready(function(){
                $('.ui.accordion').accordion();
             });
</script>
</body>
</html>
