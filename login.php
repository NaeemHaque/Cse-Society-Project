 <?php 
    require_once("header.php");
    require_once("connection.php");

    session_start();
?>


  <!-- Main picture. || Body part-->
  <div id="main-content" class="container">


    <div class="error-pagewrap">
    <div class="error-page-int">
     <div class="text-center custom-login">
        <h3>Log in</h3>

      </div>
      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">
                       <div id="register">
                     
                        <form action="" name="form1" method="post">
                            <div class="row">

                               <div class="col-lg-7">
                                      <div class="card">
                                          <div class="card-header">
                                                        
                                              </div>
                                                  <div class="card-body card-block">
                                                      <div class="has-success form-group">
                                                         
                                                          <input type="text" id="inputIsValid" class="is-valid form-control-success form-control" placeholder="example@example.com" name="email"></div>

                                                            <div class="has-warning form-group">
                                                             
                                                              <input type="password"  class="is-invalid form-control " placeholder="********" name="password">
                                                            </div>

                                                            <div class="text-center">
                                                            <button type="submit" name="login" class="btn btn-success loginbtn">Login</button>

                                                             <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none;">
                                                             <strong>Wrong!</strong> Invallid email or password!
                                                           </div>

                                                          </div>
                                                     </div>
                                               </div>
                               </div>

                            </div>

                        </form>
                    </div>
                </div>
      </div>

    </div>
    </div>   
    </div>
</div>



<?php 


      if (isset($_POST["login"])) {
        if ($_POST[email]=='admin@gmail.com' && $_POST[password]=='admin' ) {

          $_SESSION["email"] = $_POST["email"];

          ?>
              <script type="text/javascript">
                window.location="admin/dashbord.php";
              </script>

          <?php 
          
        }else {
          $count = 0;
        $res = mysqli_query($dbCon, "SELECT * FROM member WHERE email='$_POST[email]' AND pass='$_POST[password]'");

         $count = mysqli_num_rows($res);

        if ($count == 0) {
          ?>
            <script>
              document.getElementById('failure').style.display="block";
            </script>

          <?php 
          
        }else {

              $_SESSION["email"] = $_POST["email"];

          ?>
              <script type="text/javascript">
                window.location="userindex.php";
              </script>

          <?php 
        }
        }
      }


     ?>



<?php 
    require_once("footer.php");
?>