<?php
session_Start();

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
    <link rel="stylesheet" href="css/profile.css" />
    <title>Profile</title>
  </head>
  <body class="text-center" onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <div class="row row-cols-3">
          <div class="col-12 col-md-4 mb-2">
            <div class="card text-center">
              <button
                class="btn btn-edit"
                onclick="modalClear()"
                data-bs-toggle="modal"
                data-bs-target="#editForm"
              >
                <i class="far fa-edit"></i>
              </button>

              <!-- Modal -->
              <div
                class="modal fade"
                id="editForm"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        Edit Your Details
                      </h5>
                      <button
                        type="button"
                        id="btn-close"
                        class="btn"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      >
                        <i class="fas fa-2x fa-times"></i>
                      </button>
                    </div>
                    <form action="profileconn.php" method="post">
                      <div class="modal-body">
                        <div class="form-floating mb-3">
                          <input
                            type="email"
                            name="email"
                            class="form-control"
                            id="floatingInput"
                            placeholder="name@example.com"
                            required
                          />
                          <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input
                            type="password"
                            name="password"
                            class="form-control"
                            id="floatingPassword"
                            onchange="matchPass()"
                            placeholder="Password"
                            required
                          />
                          <label for="floatingPassword">Password</label>
                        </div>

                        <div class="form-floating">
                          <input
                            type="password"
                            name="confirm-password"
                            class="form-control"
                            id="floatingPassword2"
                            placeholder="Password"
                            onchange="matchPass()"
                            required
                          />
                          <label for="floatingPassword2"
                            >Confirm Password</label
                          >
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          id="btn-exit"
                          class="btn"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="submit" id="btn-save" class="btn">
                          Save changes
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
              <img id="avatar" data-bs-toggle="modal" data-bs-target="#imgModal" src="images/avatars/0.svg" alt="Avatar" />
              <div
                id="image-edit"
                data-bs-toggle="modal"
                data-bs-target="#imgModal"
                class="btn"
              >
                <i class="far fa-edit"></i>
            </div>

              <div
                class="modal fade"
                id="imgModal"
                tabindex="-1"
                aria-labelledby="imgModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="imgModalLabel">
                        Choose one image
                      </h5>
                      <button
                        type="button"
                        id="btn-close"
                        class="btn"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      >
                        <i class="fas fa-2x fa-times"></i>
                      </button>
                    </div>
                    <div class="modal-body row">
                      <img
                        class="col-3 img-option"
                        src="images/avatars/0.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/1.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/2.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/3.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/4.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/5.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/6.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/7.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/8.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/9.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/10.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/11.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/12.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/13.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                      <img
                        class="col-3 img-option"
                        src="images/avatars/14.svg"
                        onclick="imgSelect(this)"
                        alt=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              
              <h2 id="name"><?php echo $_SESSION['name'];?></h2>
              <h3 id="dept"><span id="department"><?php echo $_SESSION['dept'];?></span> Department</h3>
              <ul class="nav col-md-12 justify-content-center">
              <li class="nav-item">
                  <a href="#" class="nav-link px-2 text-muted"
                    ><i class="fad fa-circle c"></i></a>
                </li>
                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link px-2 text-muted"
                    ><i class="fad fa-circle c"></i></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link px-2 text-muted"
                    ><i class="fad fa-circle c"></i></a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link px-2 text-muted"
                    ><i class="fad fa-circle c"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-12 col-md-8">
            <div id="details" class="card text-center">
              <table class="table table-borderless text-light">
                <tbody>
                  <tr>
                    <th scope="row">Id</th>
                    <td>#<?php echo $_SESSION['ID'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Role</th>
                    <td><?php error_reporting(0);
                    if($_SESSION['yr']=='NA'){echo 'Teacher';}
                    else{echo "Student";}?></td>
                  </tr>
                  <tr>
                    <th scope="row">Department</th>
                    <td><?php echo $_SESSION['dept'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Year</th>
                    <td><?php echo $_SESSION['yr']?></td>
                  </tr>
                  <tr id="last-tr">
                    <th scope="row">Email id</th>
                    <td><?php echo $_SESSION['em'];?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        <!-- to here -->
      </div>
    </main>

    <!-- Footer -->
    <div class="footer-college"></div>

    <script src="js/templete.js"></script>
    <script src="js/profile.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@multiavatar/multiavatar/multiavatar.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
