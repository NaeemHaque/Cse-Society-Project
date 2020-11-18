 <?php 
    require_once("userheader.php");
    require_once("connection.php");
?>


  <!-- Main picture. || Body part-->
  <div id="main-content" class="container">

     <h3 class="text-center">Executive Committee</h3>
  
       <div class="col-lg-12">
                        <div class="card ">
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">SL</th>
                                            <th scope="col" class="text-center">Name</th>
                                            <th scope="col" class="text-center">Phone</th>
                                            <th scope="col" class="text-center">Email</th>
                                            <th scope="col" class="text-center">Post</th>
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
                                             
                                          </tr>

                                          <?php
                                        }

                                        
                                       ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

  </div>




 <?php 
    require_once("footer.php");
?>