<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "signup");

if ($db -> connect_error) {
  		die('Failed to connect to MySQL:'.$conn->connect_error);
	}
else{
    $d = $_SESSION['dept'];
    $y = $_SESSION['yr'];
    $q= "select * from notes where yr=$y and dept='$d'";
    
    }
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
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/templete.css">
    <link rel="stylesheet" href="css/student-notes.css">
    <title>Resources</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <h1 class="heading">Resources  <i class="fas fa-book-reader"></i></h1>
        <div class="tableContainer">
          <table class="table ">
            <thead>
            <?php
                    $re = mysqli_query($db,$q);
                    if(mysqli_num_rows($re)==0){ ?>
                      <h2>No notes to show..</h2>
                      <?php
                      }
                      else{
                      ?>
              <tr>
                <th scope="col">Serial No.</th>
                <th scope="col">Topic Name</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                    <?php  
                    
                    $slno=1;
                    while($slno<=mysqli_num_rows($re)){
                        $ro = mysqli_fetch_array($re);
                        $topic=$ro['topic'];
                        $file=$ro['file_src'];
                ?>
                        
                <th scope="row"><?php echo $slno ?></th>
                <td><?php echo $topic ?></td>
                <td><a href="notes/<?php echo $file ?>" target="_blank"><i class="fas fa-download"></i></a></td>
              </tr>
              <?php
                    $slno=$slno+1;
                    }
                  }
                ?>
            </tbody>
          </table>
        </div>
        <!-- to here -->
      </div>
    </main>

    <!-- Footer -->
    <div class="footer-college"></div>

    <script src="js/templete.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
