<?php

        // $servername = "localhost";
        // $username = "root";
        // $password = "password";
        // $dbname = "signup";

        // // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        // }
        include 'dbconn.php';
        if($_SESSION['status']!=true){
    header("Location: index.html");
}
        $qu1 = "SELECT * FROM input";
        $res1 = mysqli_query($conn,$qu1); 
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
    <link rel="stylesheet" href="css/adminPortal.css" />

    <title>Pending Requests</title>
  </head>
  <body>

    <h1 class="h1 text-light mb-5">Pending Requests</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Department</th>
          <th scope="col">Year</th>
          <th scope="col">Password</th>
          <th scope="col">Time</th>
          <th scope="col" colspan=2>Approval</th>
        </tr>
      </thead>
      <tbody>
          <?php
                while($res=mysqli_fetch_array($res1))
                {
            ?>
        <tr>
        <th scope="row"><?php echo $res['id'];?></th>
                 <td><?php echo $res['nam'];?></td>
                 <td><?php echo $res['emailid'];?></td>
                 <td><?php echo $res['dept'];?></td>
                 <td><?php echo $res['yr'];?></td>
                 <td><?php echo $res['pswrd'];?></td>
                 <td><?php echo $res['dt'];?></td>
                 <td><a href='accept.php?emailid="<?php echo $res['emailid']; ?>"' class='btn btn-outline-success'><i class="fas fa-check"></i></a></td>
                 <td><a href='reject.php?emailid="<?php echo $res['emailid']; ?>"' class='btn btn-outline-danger'><i class="fas fa-times"></i></a></td>
                 <!--
          <td>
            <div
              class="btn-group"
              role="group"
              aria-label="Basic mixed styles example"
            >
              <button
                type="button"
                class="btn btn-outline-success"
              >
                <i class="fas fa-check"></i>
              </button>
              <button
                type="button"
                class="btn btn-outline-danger"
              >
                <i class="fas fa-times"></i>
              </button>
            </div>
          </td> -->
        </tr>
        <?php
                }
        ?>
      </tbody>
    </table>
    <script src="./js/adminPortal.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
