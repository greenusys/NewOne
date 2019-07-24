
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
               
              
                <div class="row" id="AllPlan" >
                    <div class="col-lg-12">
                        <div class="card p-2">
                           <div class="card-body">
                               <table class="table table-hover">
                                   <thead class="thead-light">
                                       <th class="text-center font-weight-bold">#</th>
                                       <th class="text-center font-weight-bold">User Type</th>
                                       <th class="text-center font-weight-bold">Rights</th>
                                     
                                       
                                   </thead>
                                   <tbody id="allPlanData">
                                      <?php
                                       // print_r($complaints);
                                      $i=1;
                                        foreach ($roles as $role ) {
                                            ?>
                                                <tr>
                                                    <td><?=$i?></td>
                                                    <td class="text-center"><?=$role->name?></td>
                                                    <td class="text-center">
                                                        <table width="100%">
                                                        <tr>
                                                        <?php
                                                            foreach ($rights as $right ) {
                                                                echo '<td><input type="checkbox" name="right'.$i.'" value="'.$right->rights_name.'">'.$right->rights_name.'</td>';
                                                            }
                                                        ?>
                                                        </tr>
                                                        </table>
                                                    </td>
                                                   
                                                </tr>
                                            <?php
                                            $i++;
                                        }
                                        
                                      ?>
                                   </tbody>

                               </table>
                               <div align="right">
                                   <input type="submit" value="Save" class="btn btn-info px-4">
                               </div>
                                
                           </div>
                        </div>
                    </div>
                </div>
              
                
               
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
          
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
        <!--     <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://wrappixel.com/">WrapPixel</a>.
            </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
