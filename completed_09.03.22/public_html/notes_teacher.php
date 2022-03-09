<?php
error_reporting(0);
if($_SESSION['status']!=true){
    header("Location: index.html");
}

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  
    $yr=$_POST['yr'];
    $dept=$_POST['dept'];
    $topic=$_POST['topic'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
    $folder = "notes/".$filename;
          
    include 'dbconn.php';
    $sql = "INSERT INTO notes (dept, yr, topic, file_src) VALUES ('$dept','$yr','$topic','$filename')";
    mysqli_query($conn, $sql); 
    move_uploaded_file($tempname, $folder);
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
    <link rel="stylesheet" href="css/templete.css">
    <link rel="stylesheet" href="css/teacher-notes.css">
    <title>Notes</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0 mt-5 mb-5">
      <div class="container form-frame">
        <!-- Write from here -->
        <div class="card">
          
        <h2 class="titleHeading mb-3">Upload Notes</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-floating dept mb-4">
                <select onchange="selectOptionBlank()" class="form-select" id="departmentSelect" name="dept" required>
                  <option selected disabled="true"></option>
                  <option value="CSE">CSE</option>
                  <option value="IT">IT</option>
                  <option value="ECE">ECE</option>
                  <option value="ME">ME</option>
                  <option value="CE">CE</option>
                  <option value="EE">EE</option>
                  <option value="AEIE">AEIE</option>
                </select>
                <label class="labelSelect" for="departmentSelect">Department</label>
            </div>

            <div class="form-floating year mb-4">
              <select onchange="selectOptionBlank()" class="form-select " id="semesterSelect" name="yr" required>
                <option selected disabled="true"></option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
              </select>
              <label class="labelSelect" for="semesterSelect">Year</label>
            </div>

            <div class="form-floating mb-4">
              <input type="text" class="form-control" id="textInput" placeholder="Topic Name" name="topic" required>
              <label for="textInput">Topic Name</label>
            </div>

            <div class="mb-3">
              <input class="form-control file-input" type="file" id="formFileMultiple" name="uploadfile" required>
            </div>

            <div class="button-field">
              <input class="btn btn-lg btn-outline-light rounded-pill" type="submit" value="Upload" name="upload" style="margin-top: 25px;">
            </div>

      </form>

    </div>



        <!-- to here -->
      </div>
    </main>

    <!-- Footer -->
    <div class="footer-college"></div>

    <script src="js/templete.js"></script>
    <script src="js/notes_teacher.js"></script>
    <script>
      window.addEventListener( "pageshow", function ( event ) {
        var historyTraversal = event.persisted || 
                              ( typeof window.performance != "undefined" && 
                                    window.performance.navigation.type === 2 );
        if ( historyTraversal ) {
          // Handle page restore.
          window.location.reload();
        }
      })
      selectOptionBlank();
    </script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
