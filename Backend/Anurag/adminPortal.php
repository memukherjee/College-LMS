<?php
                         
                         $servername = "localhost";
                         $username = "/";
                         $password = "/";
                         $dbname = "/";
                         
                         // Create connection
                         $conn = new mysqli($servername, $username, $password, $dbname);
                         // Check connection
                         if ($conn->connect_error) {
                           die("Connection failed: " . $conn->connect_error);
                         }   // LOOP TILL END OF DATA 
                         $qu1 = "SELECT * FROM student";
                         $qu2 = "SELECT * FROM teacher";
                         
                         $res1 = mysqli_query($conn,$qu1); 
                         $res2 = mysqli_query($conn,$qu1); 

                         $ret1 = mysqli_query($conn,$qu2); 
                         $ret2 = mysqli_query($conn,$qu2);
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
    <title>Admin Portal</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <div class="row">
          <div class="col-md-4 mb-5 d-grid gap-2 mx-auto">
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-modal btn-warning py-3"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
            >
              Show Pending Requests
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-dark btn btn-light" id="exampleModalLabel">
                      Pending Requests
                    </h5>
                    <button
                      type="button"
                      id="modal-close-btn"
                      class="btn"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <i class="fas fa-2x fa-times"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Department</th>
                          <th scope="col">Year</th>
                          <th scope="col">Password</th>
                          <th scope="col">Date/Time</th>

                         <th scope="col">Approval</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        while($res=mysqli_fetch_array($res1) or $res=mysqli_fetch_array($ret1))                 //1st time
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
                          <td>
                            <div
                              class="btn-group"
                              role="group"
                              aria-label="Basic mixed styles example"
                            >
                              <button
                                type="button"
                                class="btn btn-outline-success"
                                onclick="approved(this)"
                              >
                                <i class="fas fa-check"></i>
                              </button>
                              <button
                                type="button"
                                class="btn btn-outline-danger"
                                onclick="removeWork(this)"
                              >
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <?php 
                            }
                            ?>
                            
                        
                      
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>3rd</td>
                          <td>abcd</td>
                          <td>
                            <div
                              class="btn-group"
                              role="group"
                              aria-label="Basic mixed styles example"
                            >
                              <button
                                type="button"
                                class="btn btn-outline-success"
                                onclick="approved(this)"
                              >
                                <i class="fas fa-check"></i>
                              </button>
                              <button
                                type="button"
                                class="btn btn-outline-danger"
                                onclick="removeWork(this)"
                              >
                                <i class="fas fa-times"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-success">
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-8 mb-5 d-grid gap-2 mx-auto">
            <!-- Button trigger modal -->
            <button
              type="button"
              class="btn btn-modal btn-outline-light py-3"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal1"
            >
              Show Database
            </button>

            <!-- Modal -->
            <div
              class="modal fade"
              id="exampleModal1"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
            >
              <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-dark btn btn-light" id="exampleModalLabel">
                      Database
                    </h5>
                    <button
                      type="button"
                      id="modal-close-btn"
                      class="btn"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <i class="fas fa-2x fa-times"></i>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Department</th>
                          <th scope="col">Year</th>
                          <th scope="col">Password</th>
                          <th scope="col">Date-Time</th>

                          <th scope="col">Approval</th>
                        </tr>
                      </thead>
                      <tbody>


                        <!-- Row1 -->
                    <?php
                        while($res=mysqli_fetch_array($res2) or $res=mysqli_fetch_array($ret2))                    //1st time 
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
                                data-bs-toggle="modal" data-bs-target="#editModal1"
                              >
                                <i class="fas fa-edit"></i>
                              </button>


                              <button
                                type="button"
                                class="btn btn-outline-danger"
                                onclick="removeWork(this)"
                              >
                                <i class="fas fa-trash-alt"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                            <?php 
                            }
                            ?>
                       

                        <!-- Row2 -->
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>3rd</td>
                          <td>abcd</td>
                          <td>
                            <div
                              class="btn-group"
                              role="group"
                              aria-label="Basic mixed styles example"
                            >
                              <button
                                type="button"
                                class="btn btn-outline-warning"
                                data-bs-toggle="modal" data-bs-target="#editModal1"
                                onclick="editEntry(this)"
                              >
                                <i class="fas fa-edit"></i>
                              </button>
                              <button
                                type="button"
                                class="btn btn-outline-danger"
                                onclick="removeWork(this)"
                              >
                                <i class="fas fa-trash-alt"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button
                      type="button"
                      class="btn btn-secondary"
                      data-bs-dismiss="modal"
                    >
                      Close
                    </button>
                    <button type="button" class="btn btn-success">
                      Save changes
                    </button>
                  </div>
                </div>
              </div>
            </div>


            <div class="modal fade" id="editModal1" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title text-light" id="exampleModalLabel">Edit details</h5>
                    <button type="button" class="btn-outline-danger" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3 text-start">
                        <label class="text-light" for="exampleInputId1" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id" id="exampleInputId1" disabled>
                      </div>
                      <div class="mb-3 text-start">
                        <label class="text-light" for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputName1" required>
                      </div>
                      <div class="mb-3 text-start">
                        <label class="text-light" for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                      <div class="mb-3 text-start">
                        <label class="text-light" for="exampleInputDept1" class="form-label">Department</label>
                        <input type="text" class="form-control" name="dept" id="exampleInputDept1" required>
                      </div>
                      <div class="mb-3 text-start">
                        <label class="text-light" for="exampleInputYear1" class="form-label">Year</label>
                        <input type="text" class="form-control" name="year" id="exampleInputYear1" required>
                      </div>
                      <div class="mb-3 text-start">
                        <label class="text-light" for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" class="form-control" name="password" id="exampleInputPassword1" required>
                      </div>
                      <button type="submit" class="btn btn-outline-success">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>

        <!-- to here -->
      </div>
    </main>

    <!-- Footer -->
    <div class="footer-college"></div>

    <script src="js/templete_admin.js"></script>
    <script src="js/adminPortal.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>