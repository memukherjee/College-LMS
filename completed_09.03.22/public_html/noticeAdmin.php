
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
    <style>
      fieldset {
        background-color: #b9b9b969;
        border-radius: 15px;
      }

      legend {
        background-color: rgba(46, 46, 46, 0.747);
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        color: white;
        font-family: "Roboto", sans-serif;
        font-weight: 700;
        font-size: 2rem;
        padding: 5px 10px;
      }

      .form-label{
        font-family: "Roboto Mono", monospace;
        font-size: 1.5em;
        font-weight: 400;
        background-color: rgba(27, 27, 27, 0.349);
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        padding: 0 10px;
        margin-bottom: 0;
        width: 70%;
      }


      fieldset .container{
        padding: 5% 15%
      }
      
      @media screen and (max-width: 550px) {
        fieldset .container{
          padding: 5% 0
        }

        .form-label{
          font-size: 1rem;
        }
      }

      .form-control {
        background-color: rgba(216, 216, 216, 0.349);
        color: rgb(0, 0, 0);
        border: none;
        border-radius: 0 0 5px 5px;
        margin: auto;
        width: 70%
      }

      .form-control:focus {
        background-color: rgba(216, 216, 216, 0.349);
        color: rgb(0, 0, 0);
      }
    </style>
    <title>Notice</title>
  </head>
  <body onload="onLoad()">
    <!-- navbar -->
    <div class="navbar-college"></div>

    <!-- Content -->
    <main class="flex-shrink-0">
      <div class="container">
        <!-- Write from here -->
        <form action="noticeconn.php" method="post">
          <fieldset>
            <legend>Update Notice</legend>
            <div class="container">
              <div class="mb-3 p-3 mb-2">
                <label for="notice-title" class="form-label text-light"
                  >Enter title for the Notice
                </label>
                <input
                  type="text"
                  class="form-control"
                  id="notice-title"
                  autocomplete="off"
                  name="title"
                  required
                />
              </div>
              <div class="mb-3 p-3 mb-2">
                <label for="notice-content" class="form-label text-light"
                  >Enter content for the Notice
                </label>
                <textarea
                  class="form-control"
                  id="notice-content"
                  rows="7"
                  name="body"
                  required
                ></textarea>
              </div>
              <div class="button-field">
              <input type="submit" value="Submit" class="btn btn-lg btn-success" style="margin: 5px">
                <input
                  class="btn btn-lg btn-danger"
                  type="reset"
                  value="Reset"
                  style="margin: 20px"
                />
              </div>
            </div>
          </fieldset>
        </form>

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
