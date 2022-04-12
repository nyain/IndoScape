<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="css/auth.css">
  </head>
  <body>
      <!-- Main Content -->
      <div class="container-fluid">
        <div class="row main-content bg-primary text-center">
          <div class="col-md-4 text-center company__info">
            <h4 class="company_title">IndoScape</h4>
          </div>
          <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
            <div class="container-fluid">
              <div class="row mt-5">
                <h2>Log In</h2>
              </div>
              <div class="row">
                <form control="" class="form-group" action="/api/login" method="POST">
                  <div class="row">
                    <input type="email" name="email" id="email" class="form__input" placeholder="Email">
                  </div>
                  <div class="row">
                    <!-- <span class="fa fa-lock"></span> -->
                    <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                  </div>
                  <div class="row ms-5">
                    <input type="submit" value="Submit" class="btn">
                  </div>
                </form>
              </div>
              <div class="row">
                <p>Don't have an account? <a href="register">Register Here</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>



 