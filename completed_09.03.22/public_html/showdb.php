<?php
    session_start(); 
    include 'dbconn.php';
    $f = mysqli_query($conn,"SELECT * FROM alluser");
    //$q = mysqli_query($conn,"SELECT * FROM alluser WHERE ");
    /*if(isset($_POST['submit'])){
        echo $_POST['name'];
    }*/
    if($_SESSION['status']!=true){
    header("Location: index.html");
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
    <link rel="stylesheet" href="css/adminPortal.css" />
    <title>Database</title>
  </head>
  <body>
    <h1 class="h1 text-light mb-5">User Database</h1>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Department</th>
          <th scope="col">Year</th>
          <th scope="col">Password</th>
          <th scope="col" colspan=2>Approval</th>
        </tr>
      </thead>
      <tbody>
        <!-- Row1 -->
        <?php
                while($res=mysqli_fetch_array($f))
                {
            ?>
        <tr>
                <th scope="row"><?php echo $res['id'];?></th>
                 <td><?php echo $res['nam'];?></td>
                 <td><?php echo $res['emailid'];?></td>
                 <td><?php echo $res['dept'];?></td>
                 <td><?php echo $res['yr'];?></td>
                 <td><?php echo $res['pswrd'];?></td>
                 
                
                
                
                
                    <td>
            <div
              class="btn-group"
              role="group"
              aria-label="Basic mixed styles example"
            >
              <button
                type="button"
                class="btn btn-outline-warning"
                onclick="editEntry(this)"
                data-bs-toggle="modal"
                data-bs-target="#editModal"
              >
                <i class="fas fa-edit"></i>
              </button>

              <!-- <button type="button" class="btn btn-outline-danger">   
                <i class="fas fa-trash-alt"></i>
              </button> 
              <input type=button onClick="parent.location='delvdb.php?emailid='" value='click here'> -->
            </div>
          </td>  
          <td><a href='delvdb.php?emailid="<?php echo $res['emailid']; ?>"' class='btn btn-outline-danger'><i class="fas fa-trash-alt"></i></a></td>  
          
        </tr>
        <?php
                }
        ?>
      </tbody>
    </table>
    <!-- Modal -->
    <div
      class="modal fade"
      id="editModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="edit.php" method="post">
              <div class="mb-3 text-start">
                <label
                  class="text-light"
                  for="exampleInputId1"
                  class="form-label"
                  >ID</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="id"
                  id="exampleInputId1"
                  readonly
                />
              </div>
              <div class="mb-3 text-start">
                <label
                  class="text-light"
                  for="exampleInputName1"
                  class="form-label"
                  >Name</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  id="exampleInputName1"
                  required
                />
              </div>
              <div class="mb-3 text-start">
                <label
                  class="text-light"
                  for="exampleInputEmail1"
                  class="form-label"
                  >Email address</label
                >
                <input
                  type="email"
                  class="form-control"
                  name="email"
                  id="exampleInputEmail1"
                  aria-describedby="emailHelp"
                  required
                />
              </div>
              <div class="mb-3 text-start">
                <label
                  class="text-light"
                  for="exampleInputDept1"
                  class="form-label"
                  >Department</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="dept"
                  id="exampleInputDept1"
                  required
                />
              </div>
              <div class="mb-3 text-start">
                <label
                  class="text-light"
                  for="exampleInputYear1"
                  class="form-label"
                  >Year</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="year"
                  id="exampleInputYear1"
                  required
                />
              </div>
              <div class="mb-3 text-start">
                <label
                  class="text-light"
                  for="exampleInputPassword1"
                  class="form-label"
                  >Password</label
                >
                <input
                  type="text"
                  class="form-control"
                  name="password"
                  id="exampleInputPassword1"
                  required
                />
              </div>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="./js/adminPortal.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
