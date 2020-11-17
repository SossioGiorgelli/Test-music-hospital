<?php include 'header.php' ?>
<main>
  <div class="row contact-plot middleContent p-3 mb-5 bg-white">
    <div class="col-12">

      <br>

      <form id="register" class="shadow" action="" method="post">
        <h2>Register</h2>

        <div class="form-row ">
          <div class="form-group col-md-6">
            <label for="inputAfterName">Aftername</label>
            <input type="text" name="afterName" class="form-control" id="inputafterName" placeholder="aftername">
          </div>
          <div class="form-group col-md-4">
            <label for="inputName">Name</label>
            <input type="text" name="name" class="form-control" id="inputName" placeholder="name">
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Age</label>
            <input type="text" name="age" class="form-control" id="inputAge" placeholder="age">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="emailSignin" class="form-control" id="inputEmail4" placeholder="example.example@gmail.com">
          </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Password</label>
            <input type="password" name="passSignin" class="form-control" id="inputPassword1" placeholder="pass">
          </div>
          <div class="form-group col-md-3">
            <label for="inputPassword4">Password</label>
            <input type="password" name="passSignin" class="form-control" id="inputPassword2" placeholder="reply">
          </div>
        </div>

        <fieldset class="form-group">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6">
              <!-- <legend class="col-form-label pt-0">Gender</legend> -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="option1">
                <label class="form-check-label" for="gridRadios1">Male</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">Female</label>
              </div>
              <div class="form-check disabled">
                <input class="form-check-input" type="radio" name="gender" id="gridRadios3" value="option3">
                <label class="form-check-label" for="gridRadios3">Else</label>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6">
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" name="agree" type="checkbox" id="gridCheck1">
                  <label class="form-check-label" for="gridCheck">I agree to the terms of service</label>
                </div>
              </div>

            </div>
          </div>
        </fieldset>

        <fieldset class="form-group">
          <button type="submit" name="signin" class="btn btn-dark" id="submitSignIn" onclick="pageRedirect();"><i class="fas fa-sign-in-alt"></i> Sign in </button>
          <!-- <input type="button" name="signin" value="Sign in" id="submit"> -->
        </fieldset>

      </form>

        <br>

      <form id="login" action="" class="shadow" method="post">
        <h2>Login</h2>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="emailLogin" class="form-control" id="inputEmail" placeholder="e-mail">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" name="passLogin" class="form-control" id="inputPassword3" placeholder="password">
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" name="rememberMe" type="checkbox" id="gridCheck2">
                <label class="form-check-label" for="gridCheck">Remember me</label>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <button type="submit" name="login" value="" class="btn btn-dark" id="submitLogIn" onclick="pageRedirect();"><i class="fas fa-sign-in-alt"></i> Login </button>
                <div id="message"></div>
              </div>
            </div>
          </form>
          </div>

          <div class="col-sm-6">
            <div class="loader"></div>
          </div>

        </div>

      <?php

      //**********************************
      //Function to avoid danger code.
      //**********************************
        function test_input($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

        //**********************************
        //Sign in
        //**********************************
        if (isset($_POST['signin'])) {

          $emailSignin = test_input($_POST['emailSignin']);
          $passSignin = test_input($_POST['passSignin']);
          $afterName = test_input($_POST['afterName']);
          $name = test_input($_POST['name']);
          $age = test_input($_POST['age']);

          if ($emailSignin == "" or
          $passSignin == "" or
          $afterName == "" or
          $name == "" or
          $age == "" or
          is_numeric($age) == false)
          {
            echo "<br><h4>Please input right values in order to register.</h4>";
          }
          else {
            echo "<br><h5>Registration is complete!<h5>";
          }
        }

        //**********************************
        //Login
        //**********************************
        if (isset($_POST['login'])){

          $emailLogin = test_input($_POST['emailLogin']);
          $passLogin = test_input($_POST['passLogin']);

          if ($emailLogin == "m.h.@hotmail.com" AND $passLogin == "musichospital") {
            echo "<br><h5>Welcome!<h5>";
          }
          else {
            echo "<br><h4>Access denied.</h4>";
          }
        }
       ?>

       <!-- <input type="button" name="login" value="Back to homepage" id="submit" onclick="pageRedirect();"> -->
       <button type="submit" name="" value="" class="btn btn-dark" id="submit"
       onclick="pageRedirect();"><i class="fas fa-angle-left"></i>Home</button>

    </div>

  </div>

<div class="contactBottom"></div>

</main>


<?php include 'byline.php' ?>

<?php include 'footer.php' ?>

<script src="main-script.js" type="text/javascript"></script>
