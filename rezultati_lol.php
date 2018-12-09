<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">

            <meta charset="UTF-8">
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="shortcut icon" type="image/png" href="images/favicon.png">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>LanParty 2019</title>

        <!-- Favicon -->
        <!-- <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png"> -->


        <!-- Main style sheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- responsive style sheet -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css">


        <!-- Fix Internet Explorer ______________________________________-->

        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script src="vendor/html5shiv.js"></script>
            <script src="vendor/respond.js"></script>
        <![endif]-->

    <link rel="stylesheet" href="css/rezultati.css">




<style type="text/css">
    
@keyframes rainbow{
  0%{color: orange;}  
  10%{color: purple;} 
  20%{color: red;}
  40%{color: yellow;}
  60%{color: green;}
  100%{color: orange;}
}

.specjal{
  animation: rainbow 8s infinite !important; 
  text-shadow: -0.5px 0 black, 0 .5px black, .5px 0 black, 0 -.5px gray;
  background-color: #ddd;

}

</style>


  </head>
  <body style="background-image: url('images/wp3.jpg'); background-size:cover;background-repeat:no-repeat; background-color:black; margin-bottom: 10vh;">

            <?php
                include('./header.php');
            ?>

            <div style="padding-top: 100px;">
                

            </div>

<div class="bracketi" style="margin:0 auto; background-color:transparent; width:60%; opacity:0.7; height:auto;">
<main id="tournament">

    <!--
    INSERT THE FIRTS ROUND!
     -->


        <ul class="round round-1">
        <?php
        $team = 0;
            $query = "SELECT * FROM ekipa WHERE game = 1";
            $result = mysqli_query($link, $query);

            foreach ($result as $row) {
                $team++;

                if ($team == 1) {
                  
        ?>
                            
                                <li class="spacer">&nbsp;</li>

                                <li class="game game-top winner"><?php echo $row['ime']; ?> <span>79</span></li>
                                <li class="game game-spacer">&nbsp;</li>
         <?php
                                }elseif ($team == 2) {
                                   ?>

                                <li class="game game-bottom "><?php echo $row['ime']; ?> <span>48</span></li>
         <?php

                                   $team = 0;
                                }   

                    }
                    

        ?><li class="spacer">&nbsp;</li></ul>

    <!--
    INSERT THE SECOND ROUND!
     -->

     
        <ul class="round round-2">
        <?php
        $team = 0;
            $query = "SELECT * FROM ekipa WHERE (id IN(SELECT team_id FROM round_two)) AND game = 1";
            $result = mysqli_query($link, $query);

            foreach ($result as $row) {
                $team++;

                if ($team == 1) {
                  
        ?>
                            
                                <li class="spacer">&nbsp;</li>

                                <li class="game game-top winner"><?php echo $row['ime']; ?> <span>79</span></li>
                                <li class="game game-spacer">&nbsp;</li>
         <?php
                                }elseif ($team == 2) {
                                   ?>

                                <li class="game game-bottom "><?php echo $row['ime']; ?> <span>48</span></li>
         <?php

                                   $team = 0;
                                }   

                    }
                    

        ?><li class="spacer">&nbsp;</li></ul>



    <!--
    INSERT THE THIRD ROUND!
     -->

     
        <ul class="round round-3">
        <?php
        $team = 0;
            $query = "SELECT * FROM ekipa WHERE (id IN(SELECT team_id FROM round_three)) AND game = 1";
            $result = mysqli_query($link, $query);

            foreach ($result as $row) {
                $team++;

                if ($team == 1) {
                  
        ?>
                            
                                <li class="spacer">&nbsp;</li>

                                <li class="game game-top winner"><?php echo $row['ime']; ?> <span>79</span></li>
                                <li class="game game-spacer">&nbsp;</li>
         <?php
                                }elseif ($team == 2) {
                                   ?>

                                <li class="game game-bottom "><?php echo $row['ime']; ?> <span>48</span></li>
         <?php

                                   $team = 0;
                                }   

                    }
                    

        ?><li class="spacer">&nbsp;</li></ul>
    
    
    



     <!--
    INSERT THE WINNER!
     -->

     
        <ul class="round round-3">
        <?php
        $team = 0;
            $query = "SELECT * FROM ekipa WHERE (id IN(SELECT team_id FROM winner)) AND game = 1";
            $result = mysqli_query($link, $query);

            foreach ($result as $row) {
                  
        ?>
                            
                                <li class="spacer">&nbsp;</li>

                                <li class="game game-top winner specjal"><?php echo $row['ime']; ?> <span>79</span></li>
         <?php

                    }
                    

        ?><li class="spacer">&nbsp;</li></ul>
</main>


</div>

  </body>
</html>
