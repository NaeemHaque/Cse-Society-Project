 <?php 
    require_once("header.php");
    require_once("connection.php");
?>



  <!-- Main picture. || Body part-->
  <div id="main-content" class="container">


    <div class="error-pagewrap">
    <div class="error-page-int">
      <div class="text-center custom-login">
        <h3>Register Now</h3>
      </div>

      


      <div class="content-error">
        <div class="hpanel">
                    <div class="panel-body">

                      <div id="register">
                     
                        <form action="" name="form1" method="post">
                            <div class="row">
                               
                                <div class="form-group col-lg-7">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                                </div>
                                <div class="form-group col-lg-7">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="example@example.com">
                                </div>
                                <div class="form-group col-lg-7">
                                    <label>Phone</label>
                                    <input type="text" name="phone" class="form-control" placeholder="017xxxxxxxx">
                                </div>
                                <div class="form-group col-lg-7">
                                <label>Roll</label>
                                <input type="text" name="roll" class="form-control" placeholder="12345">
                            </div>
                                <div class="form-group col-lg-7">
                                    <label>Registration</label>
                                    <input type="text" name="regi" class="form-control" placeholder="123456789">
                                </div>
                                <div class="form-group col-lg-7">
                                    <label>Semester</label>
                                    <input type="text" name="semister" class="form-control" placeholder="4-2">
                                </div>

                                 <div class="form-group col-lg-7">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" placeholder="********">
                            </div>
                             <div class="form-group col-lg-7">
                                <label>Confirm Pasword</label>
                                <input type="password" name="cpass" class="form-control" placeholder="********">
                            </div>
                          </div>

                              

                            <div id="regibtn">
                                <button type="submit" name="submit1" class="btn btn-success loginbtn">Register</button>

                            </div>

                            <div class="alert alert-success col-lg-7" id="success" style="margin-top: 10px; display:none;">
                      <strong>Success!</strong> Registration Successfull.
                      </div>

                      <div class="alert alert-danger col-lg-7" id="failure" style="margin-top: 10px; display: none;">
                          <strong>Wrong!</strong> This username is already exist.
                        </div>

                      </div>

                        </form>

                        </div> <!-- register -->
                        
                    </div>
                    </div>
                </div>    <!-- cntn-error -->

      

    </div>
    </div>   
    

</div>





<?php 

      if (isset($_POST['submit1'])) {
        $count = 0;
        $selectQuery = "SELECT * from member WHERE email = '$_POST[email]'" or die(mysqli_error($dbCon));
        $runQuery = mysqli_query($dbCon, $selectQuery);
        $count = mysqli_num_rows($runQuery);

        if ($count>0) {   
          ?>

            <script>
              document.getElementById('failure').style.display="block";
              document.getElementById('success').style.display="none";
            </script>

          <?php 
          
        }
       
        else {
          mysqli_query($dbCon, " INSERT INTO `member`(`name`, `email`, `phone`, `roll`, `regi`, `semester`, `pass`, `cpass`) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[roll]','$_POST[regi]','$_POST[semister]','$_POST[pass]', '$_POST[cpass]') ") or die(mysqli_error($dbCon));
            ?>
 

              <script>
              document.getElementById('success').style.display="block";
              document.getElementById('failure').style.display="none";
            </script>

            <?php  

            }
      }
  

?>


<?php 
    require_once("footer.php");
?>