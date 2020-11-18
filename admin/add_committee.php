 <?php 
    require_once("admin_header.php");
    require_once("../connection.php");
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Executive Committee</h1>
                    </div>
                </div>
            </div>
       
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                       <form name="form1" action="" method="post" enctype="multipart/form-data">

   
                  <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header"><strong>Add Member</strong></div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                  <label  class=" form-control-label">Name</label>
                                  <input type="text" name="name"  placeholder="Enter Full Name" class="form-control">
                                </div>

                                 <div class="form-group">
                                  <label  class=" form-control-label">Phone Number</label>
                                  <input type="text" name="phone"  placeholder="017xxxxxxxx" class="form-control"></div>

                                  <div class="alert alert-danger col-lg-12" id="failure" style="margin-top: 10px; display: none;">
                                  <strong>Worning!</strong>Phone Number must be fill.
                                  </div>

                                  <div class="form-group">
                                  <label  class=" form-control-label">Email</label>
                                  <input type="text" name="email"  placeholder="example@example.com" class="form-control">
                                 </div>

                                  <div class="form-group">
                                  <label  class=" form-control-label">Post</label>
                                  <input type="text" name="post"  placeholder="ex: vp" class="form-control">
                                 </div>

                                    <div class="form-group">
                                      <input type="submit" name="submit1" value="Add Member" class="btn btn-success">
                                    </div>

                        </div>
                    
                 </div>   <!-- end of add card -->

                </div>


                     <!-- end of add form -->


                     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header text-center">
                                <strong class="card-title">Executive Committee</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Post</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	<?php 
                                    	    $count = 0;
                                    		$res = mysqli_query($dbCon, "SELECT * FROM committee ");

                                    		while($row = mysqli_fetch_array($res)) {
                                    			$count=$count+1;
                                    			?>

                                    		<tr>
	                                            <th scope="row"><?php echo $count;?></th>
	                                            <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
	                                              <td><?php echo $row['post']; ?></td>
                                              
	                                            <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']?>">Edit</a></td>
	                                            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
	                                        </tr>

                                    			<?php
                                    		}

                                    		
                                    	 ?>
      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  <!-- end of border table -->

              
                </div>

                      </form>

                     </div> <!-- .card -->

                    </div>
                    <!--/.col-->

        </div>
        </div><!-- .animated -->
       </div><!-- .content -->



    <?php 
        if (isset($_POST["submit1"])) {

          if ($_POST['phone']!='') {
           mysqli_query($dbCon, "INSERT INTO `committee`(`name`, `email`,`phone`, `post`)
       VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[post]')") OR die(mysqli_error($dbCon));
          ?>
               <script type="text/javascript">
                alert("Exam Added Successfully.");
                window.location.href=window.location.href;
               </script>
          <?php       
          }

          else {
         ?>
        <script>
              document.getElementById('failure').style.display="block";
              
            </script>
         <?php
        }


      
        }

        
    ?>

<?php 
 require_once("admin_footer.php");
?>