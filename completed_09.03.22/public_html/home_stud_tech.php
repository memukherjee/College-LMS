<?php 
session_start(); 
if($_SESSION['status']!=true){
    header("Location: index.html");
}

include 'dbconn.php';
$q= "select * from notice";
$re=mysqli_query($conn,$q);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon/favicon-16x16.png"
    />
    <link rel="manifest" href="images/favicon/site.webmanifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&family=Roboto+Mono:wght@100;400;600;700&family=Roboto:wght@100;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/templete.css" />
    <link rel="stylesheet" href="css/home.css" />
    <title>Dashboard</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <div class="row row-cols-4">
          <h1 class="ml11 col-12">
            <span class="text-wrapper">
              <span class="line line1"></span>
              <span class="letters">Hi <?php if(empty($_SESSION['nms'])){
                                                    header('location: index.html');
                                            }
                                            else{
                                                $fullname=explode(' ',$_SESSION['nms']);
                                                echo $fullname[0];
                                            } 
                                            ?></span>
            </span>
          </h1>

          <div class="card col-12 col-md mt-2">
            <div class="btn-group mb-1" role="group" aria-label="Name">
              <button type="button" class="btn field">Name</button>
              <button type="button" class="btn"><?php echo $_SESSION['nms']; ?>
                </button>
            </div>
            <div class="btn-group mb-3" role="group" aria-label="Department">
              <button type="button" class="btn field">Department</button>
              <button type="button" class="btn"><?php echo $_SESSION['depts'];?>
              </button>
            </div>
            <!--<button class="btn btn-outline-light col-12 col-md-mt-2 m-auto" id="btn-logout">-->
            <!--    <a-->
            <!--      class="dropdown-item dropdown_item-2"-->
            <!--      href="./logout.php"-->
            <!--      ><i class="fas fa-sign-out-alt"></i>&nbsp;Log Out</a-->
            <!--    >-->
            <!--    </button>-->
          </div>
          <div class="ghost-box col-md-auto mt-2"></div>
          <div class="todo col-12 col-md-8 mt-2">
            <ul class="list-group list-group-flush">
            <?php  
                    if(mysqli_num_rows($re)==0){
                      ?>
                      <h2 class="text-light mt-5"> Nothing to do :)</h2>
                    <?php  
                    }
                    else{
                    $c=0;
                    while($c<mysqli_num_rows($re)){
                        $ro = mysqli_fetch_array($re);
                        $title=$ro['title'];
                        $body=$ro['body'];
                ?>
              <li class="list-group-item">
                <p>
                  <a class="btn" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-angle-double-right blink"></i> <?php echo $title ?>
                  </a>
                </p>
                <div class="collapse" id="collapseExample1">
                  <div class="card card-body">
                    <?php echo $body ?>
                  </div>
                </div>
              </li>
              <?php
                    $c=$c+1;
                    }
                  }
                ?>
            </ul>
          </div>
        </div>

        <!-- to here -->
      </div>
    </main>
    
    <img id="hi" src="images/hi.gif" alt="" />

    <!-- Footer -->
    <div class="footer-college"></div>
    <script src="js/templete.js"></script>
    <script src="js/home.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script>
      helloAnimation();
    </script>
  </body>
</html>
