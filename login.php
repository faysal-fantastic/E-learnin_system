<?php include_once "library/conn.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login | Gentelella Alela</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <?php include "library/head.php";
  ?>

  <!-- Extra Custom CSS to fix login box -->
  <style>
    body.login {
      background: #f7f7f7;
    }

    .login_wrapper {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login_content h1 {
      font-size: 26px;
      margin-bottom: 20px;
    }

    .login_content .btn {
      width: 100%;
    }

    .separator {
      margin-top: 30px;
      text-align: center;
    }

    .change_link {
      font-size: 14px;
    }
  </style>
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <!-- Login Form -->
      <div class="animate form login_form">
        <section class="login_content">
          <form action="#" method="post">
            <h1>Login Form</h1>
            <div>
              <input type="text" class="form-control" name="username" placeholder="Username" required />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" required />
            </div>
            <div class="mt-3">
              <button class="btn btn-primary submit" type="submit">Log in</button>
              <a class="reset_pass" href="#">Lost your password?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">New to site?
                <a href="#signup" class="to_register"> Create Account </a>
              </p>

              <div>

                <p>©2016 All Rights Reserved. Gentelella Alela is a Bootstrap 4 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <!-- Register Form -->
      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form method="post" action="register_process.php">
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" name="username" placeholder="Username" required />
            </div>
            <div>
              <input type="email" class="form-control" name="email" placeholder="Email" required />
            </div>
            <div>
              <input type="password" class="form-control" name="password" placeholder="Password" required />
            </div>
            <div class="mt-3">
              <button class="btn btn-success submit" type="submit">Submit</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela is a Bootstrap 4 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>

</html>