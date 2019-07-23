
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
                                       <th class="text-center font-weight-bold">Status</th>
                                       
                                   </thead>
                                   <tbody id="allPlanData">
                                      <?php
                                       // print_r($complaints);
                                      $i=1;
                                        foreach ($rights as $comp ) {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?=$i?></td>
                                                    <td class="text-center"><?=$comp->comp_name?></td>
                                                    <td class="text-center"><?=$comp->comp_area?></td>
                                                    <td class="text-center"><?=$comp->comp_address?></td>
                                                    <td class="text-center"><?=$comp->permissions?></td>
                                                    <td class="text-center"><a href="javascript:void(0)" class="btn btn-info">Acitve</a> <a href="javascript:void(0)" class="btn btn-danger">Deactive</a></td>
                                                </tr>
                                            <?php
                                            $i++;
                                        }
                                        
                                      ?>
                                   </tbody>
                               </table>
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
