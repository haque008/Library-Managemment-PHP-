<?php
include "header.php";
include "connection.php";
?>
        <!-- /top navigation -->

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Plain Page </h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                $st=mysqli_query($db,"select * from librarymanagement");
                                
                                      echo "<table class='table table-bordered' >";
                                       echo "<tr>";
                                                echo "<th>";echo "First Name"; echo "</th>";
                                                 echo "<th>";echo "Last Name"; echo "</th>";
                                                  echo "<th>";echo "User Name"; echo "</th>";
                                                   echo "<th>";echo "Email"; echo "</th>";
                                                    echo "<th>";echo "Contact"; echo "</th>";
                                                     echo "<th>";echo "Sem"; echo "</th>";
                                                      echo "<th>";echo "Enrolement"; echo "</th>";
                                                       echo "<th>";echo "status"; echo "</th>";
                                                    

                                               
                                            echo "</tr>";

                                           while($row=mysqli_fetch_array($st)){
                                            echo "<tr>";
                                                echo "<td>";echo $row["firstname"]; echo "</td>";
                                                 echo "<td>";echo $row["lastname"]; echo "</td>";
                                                  echo "<td>";echo $row["username"]; echo "</td>";
                                                   echo "<td>";echo $row["email"]; echo "</td>";
                                                    echo "<td>";echo $row["contact"]; echo "</td>";
                                                     echo "<td>";echo $row["sem"]; echo "</td>";
                                                      echo "<td>";echo $row["enrollmentno"]; echo "</td>";
                                                       echo "<td>";echo $row["status"]; echo "</td>";
                                                   
                                               
                                               
                                            echo "</tr>";

                                       }
                        
                                         
                                    echo "</table>";
                                   ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <!-- footer content -->
        <?php
include "footer.php";
?>
       
