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

  </head>
  <body style="background-image: url('images/wp3.jpg'); background-size:cover;background-repeat:no-repeat; background-color:black; margin-bottom: 10vh;">

            <?php
                include('./header.php');
            ?>

            <div style="padding-top: 100px;">
                

            </div>

<div class="bracketi" style="margin:0 auto; background-color:transparent; width:60%; opacity:0.7; height:auto;">
<main id="tournament">
        <ul class="round round-1">
        <?php
        $team = 0;
            $query = "SELECT * FROM ekipa";
            $result = mysqli_query($link, $query);

            foreach ($result as $row) {
        ?>
                            
                                <li class="spacer">&nbsp;</li>

                                <li class="game game-top winner"><?php echo $row['ime']; ?> <span>79</span></li>
                                <li class="game game-spacer">&nbsp;</li>
                                <li class="game game-bottom "><?php echo $row['ime']."2"; ?> <span>48</span></li>
                            
        <?php
                            
                    }
                    

        ?></ul>
    
    <ul class="round round-2">
        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner">Lousville <span>82</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Colo St <span>56</span></li>
>
    </ul>
    <ul class="round round-3">
        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner">Lousville <span>77</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Oregon <span>69</span></li>

        <li class="spacer">&nbsp;</li>

        <li class="game game-top ">Mich St <span>61</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom winner">Duke <span>71</span></li>

        <li class="spacer">&nbsp;</li>
    </ul>
    <ul class="round round-4">
        <li class="spacer">&nbsp;</li>

        <li class="game game-top winner">Lousville <span>85</span></li>
        <li class="game game-spacer">&nbsp;</li>
        <li class="game game-bottom ">Duke <span>63</span></li>

        <li class="spacer">&nbsp;</li>
    </ul>
</main>


</div>

  </body>
</html>
