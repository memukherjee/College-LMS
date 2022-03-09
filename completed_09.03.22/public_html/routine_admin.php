<?php
error_reporting(0);
if($_SESSION['status']!=true){
    header("Location: index.html");
}

  $msg = "";
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $yr=$_POST['yr'];
    $dept=$_POST['dept'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "routine/".$filename;
          
        include 'dbconn.php';
        $sql = "SELECT * from routine where yr='$yr' and dept='$dept'";
        
        $re=mysqli_query($conn, $sql); 
        if(mysqli_num_rows($re)>0){
            $sq = "update routine set img_src='$filename' where yr='$yr' and dept='$dept'";
        }
        else{
            $sq = "INSERT INTO routine (img_src, yr, dept) VALUES ('$filename','$yr','$dept')"; 
        }
        mysqli_query($conn,$sq);
        
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
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

    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/templete.css" />
    <link rel="stylesheet" href="css/routine_admin.css" />
    <title>Routine</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <div id="card" class="card">
          <form action="" method="post" enctype="multipart/form-data">
            <h1 id="title" class="h3 mb-3">
              <nobr>Select</nobr> <nobr>Routine:</nobr>
            </h1>
            <div class="row">
              <div class="form-floating col-12">
                <select
                  name="dept"
                  class="form-select dept-input"
                  id="floatingSelect"
                  aria-label="Floating label select example"
                  required
                >
                  <option
                    class="dept-option"
                    selected
                    disabled
                    value=""
                  ></option>
                  <option class="dept-option" value="CSE">CSE</option>
                  <option class="dept-option" value="IT">IT</option>
                  <option class="dept-option" value="ECE">ECE</option>
                  <option class="dept-option" value="ME">ME</option>
                  <option class="dept-option" value="CE">CE</option>
                  <option class="dept-option" value="EE">EE</option>
                  <option class="dept-option" value="AEIE">AEIE</option>
                </select>
                <label
                  id="label-dept"
                  class="text-light label dept-blank"
                  for="floatingSelect"
                  ><i class="fas fa-user-graduate"></i> Department</label
                >
              </div>

              <div class="form-floating col-12">
                <select
                  name="yr"
                  class="form-select year-input"
                  id="floatingSelectYear"
                  aria-label="Floating label select example"
                  required
                >
                  <option
                    id="year 0"
                    class="year-option"
                    name=""
                    selected
                    disabled
                    value=""
                  ></option>
                  <option id="year 1" class="year-option" value="1">1st</option>
                  <option id="year 2" class="year-option" value="2">2nd</option>
                  <option id="year 3" class="year-option" value="3">3rd</option>
                  <option id="year 4" class="year-option" value="4">4th</option>
                  <option id="year NA" class="year-option" value="NA">TEACHER</option>
                </select>
                <label
                  id="label-year"
                  class="text-light label year-blank"
                  for="floatingSelectYear"
                  ><i class="fas fa-graduation-cap"></i> Year</label
                >
              </div>
              <div class="col-12 mt-3">
                <input required class="form-control file-input" type="file" id="formFile" name="uploadfile" />
              </div>
            </div>
            <br />

            <button
              class="w-100 btn btn-lg btn-outline-light btn-login"
              type="submit"
              name="upload"
            >
              Upload
            </button>
          </form>
        </div>

        <!-- to here -->
      </div>
    </main>

    <!-- Footer -->
    <div class="footer-college"></div>

    <script src="js/templete_admin.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
