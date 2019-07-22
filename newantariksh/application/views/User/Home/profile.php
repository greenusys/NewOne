
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card" >
                            <div class="card-body">
                                  <div class="panel-group" id="accordion">

                                    <!-- panel1  -->
                                    <div class="panel panel-default" id="panel1">
                                      <div class="panel-heading" data-toggle="collapse" data-target="#collapse1">
                                        <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse1" href="#collapse1"><i class="fa fa-info-circle"></i> General information</a></h4>
                                      </div>
                                      <hr> 
                                      <div id="collapse1" class="panel-collapse collapse fade show">
                                        <div class="panel-body">
                                          <table class="table table-striped table-hover table-bordered  ">
                                        <?php
                                            // print_r($_SESSION);
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td>Username</td>
                                                    
                                                    <td><strong><input type="text" disabled value="<?=$this->session->loggedUser->user_name;?>" class="form-control">
                                                        <input type="hidden" name="user_name" value="<?=$this->session->loggedUser->user_name;?>" class="form-control">
                                                    </strong></td>
                                                    <!-- <td>923</td> -->
                                                </tr>
                                                 <tr>
                                                    <td>Name</td>
                                                    
                                                    <td><strong><input type="text" name="user_name" value="<?=$this->session->loggedUser->first_name.' '.$this->session->loggedUser->last_name;?>" class="form-control"></strong></td>
                                                    <!-- <td>923</td> -->
                                                </tr>
                                                 <tr>
                                                    <td>Email</td>
                                                    
                                                    <td><strong><input type="text" name="user_name" value="<?=$this->session->loggedUser->email;?>" class="form-control"></strong></td>
                                                    <!-- <td>923</td> -->
                                                </tr>
                                                 <tr>
                                                    <td>Mobile</td>
                                                    
                                                    <td><strong><input type="text" name="user_name" value="<?=$this->session->loggedUser->mobile;?>" class="form-control"></strong></td>
                                                    <!-- <td>923</td> -->
                                                </tr>
                                                 <tr>
                                                    <td>Address</td>
                                                    
                                                    <td><strong><input type="text" name="user_name" value="<?=$this->session->loggedUser->address;?>" class="form-control"></strong></td>
                                                    <!-- <td>923</td> -->
                                                </tr>
                                                 <tr>
                                                    <td>Billing Address</td>
                                                    
                                                    <td><strong><input type="text" name="user_name" value="<?=$this->session->loggedUser->billing_address;?>" class="form-control"></strong></td>
                                                    <!-- <td>923</td> -->
                                                </tr>
                                                
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="card" >
                             <div class="card-body">
                               <div class="panel panel-default" id="panel2" >
                                  <div class="panel-heading" >
                                    <h4 class="panel-title"><a data-toggle="collapse" data-target="#collapse2" href="#collapse2" class="collapsed"><i class="fa fa-arrows"></i> Profile Image</a></h4>
                                  </div>
                                  <hr>
                                  <div class=" show">
                                    <div class="panel-body" align="center">
                                        <form action="<?=base_url('index.php/User/updateProfilePic')?>" method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div id="singleImage" class="col-lg-12">
                                                    <img src="<?=base_url('assets/images/avatar.png')?>" width="25%" max-width="320px" class="img-fluid">
                                                </div>
                                                <div id="secondImage" style="display:none">
                                                    <h4>Profile Image To Upload</h4>
                                                    <img src="" id="imgg" width="25%" max-width="320px" class="img-fluid">
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            <hr>
                                            <input type="file" name="Profile_image" id="Profile_image">
                                            <input type="submit" value="Update" class="btn btn-success">    
                                        </form>
                                        
                                    </div>
                                  </div>
                                </div>
                                </div>
                            </div>
                        </div>
                </div>
                
            </div>
            <script type="text/javascript">
                $("#Profile_image").change(function(e) {
                    $('#singleImage').removeClass('col-lg-12');
                    $('#singleImage').addClass('col-md-6');
                    $('#secondImage').show();
                    $('#secondImage').addClass('col-md-6');
                    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
                        
                        var file = e.originalEvent.srcElement.files[i];
                        // console.log(file.name);

                         var img = document.createElement("img");
                        //var img = document.getElementById("#imgg");
                        
                        var reader = new FileReader();
                        reader.onloadend = function() {
                            img.src = reader.result;
                            $("#imgg").attr('src',reader.result);
                        }
                        reader.readAsDataURL(file);
                       
                    }
                });
            </script>
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
    
    
</body>


<!-- Mirrored from www.wrappixel.com/demos/admin-templates/nice-admin/html/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Apr 2019 07:20:53 GMT -->
</html>