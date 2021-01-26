     <div class="main-content">
         <div class="page-content">
             <div class="container-fluid">
                 <!-- start page title -->
                 <div class="row align-items-center">
                     <div class="col-sm-6">
                         <div class="page-title-box">
                             <h4 class="font-size-18">Courses</h4>
                         </div>
                     </div>
                 </div>
                 <!-- end page title -->

                 <div class="row">
                     <div class="col-xl-3 col-md-6">
                         <div class="card mini-stat bg-primary text-white">
                             <div class="card-body">
                                 <div class="mb-4">
                                     <div class="float-left mini-stat-img mr-4">
                                         <img src="assets/images/services-icon/01.png" alt="">
                                     </div>
                                     <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Orders</h5>
                                     <h4 class="font-weight-medium font-size-24">1,685 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                     <div class="mini-stat-label bg-success">
                                         <p class="mb-0">+ 12%</p>
                                     </div>
                                 </div>
                                 <div class="pt-2">
                                     <div class="float-right">
                                         <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                     </div>

                                     <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card mini-stat bg-primary text-white">
                             <div class="card-body">
                                 <div class="mb-4">
                                     <div class="float-left mini-stat-img mr-4">
                                         <img src="assets/images/services-icon/02.png" alt="">
                                     </div>
                                     <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                                     <h4 class="font-weight-medium font-size-24">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                                     <div class="mini-stat-label bg-danger">
                                         <p class="mb-0">- 28%</p>
                                     </div>
                                 </div>
                                 <div class="pt-2">
                                     <div class="float-right">
                                         <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                     </div>

                                     <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card mini-stat bg-primary text-white">
                             <div class="card-body">
                                 <div class="mb-4">
                                     <div class="float-left mini-stat-img mr-4">
                                         <img src="assets/images/services-icon/03.png" alt="">
                                     </div>
                                     <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Average Price</h5>
                                     <h4 class="font-weight-medium font-size-24">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                     <div class="mini-stat-label bg-info">
                                         <p class="mb-0"> 00%</p>
                                     </div>
                                 </div>
                                 <div class="pt-2">
                                     <div class="float-right">
                                         <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                     </div>

                                     <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-md-6">
                         <div class="card mini-stat bg-primary text-white">
                             <div class="card-body">
                                 <div class="mb-4">
                                     <div class="float-left mini-stat-img mr-4">
                                         <img src="assets/images/services-icon/04.png" alt="">
                                     </div>
                                     <h5 class="font-size-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
                                     <h4 class="font-weight-medium font-size-24">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                     <div class="mini-stat-label bg-warning">
                                         <p class="mb-0">+ 84%</p>
                                     </div>
                                 </div>
                                 <div class="pt-2">
                                     <div class="float-right">
                                         <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                     </div>

                                     <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end row -->

                 <div class="row">
                     <div class="col-xl-12">
                         <div class="card">
                             <div class="card-body">
                                 <h4 class="card-title mb-4">Latest Trasaction</h4>
                                 <div class="table-responsive">
                                     <table class="table table-hover table-centered table-nowrap mb-0">
                                         <thead>
                                             <tr>
                                                 <th scope="col">(#) Id</th>
                                                 <th scope="col">Course name</th>
                                                 <th scope="col">Course description</th>
                                                 <th scope="col">Created date</th>
                                                 <th scope="col">Updated date</th>
                                                 <th scope="col" colspan="2">Status</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                             $i = 1 + (5 * ($currentPage -1));
                                                foreach($courses as $course){
                                                    //echo "<pre>";print_r($course->courseId);
                                             ?>
                                             <tr>
                                                 <th scope="row">
                                                     <?php 
                                                     echo $i;
                                                     //echo $course['courseId']; 
                                                     ?>
                                                </th>
                                                 <td>
                                                 <?php echo $course['courseName']; ?>
                                                 </td>
                                                 <td>
                                                     <?php
                                                        echo $course['courseDescription']; 
                                                    ?>
                                                 </td>
                                                 <td>
                                                     <?php 
                                                        $createdDate = date('d/m/Y',strtotime($course['createdDate']));
                                                        echo $createdDate; 
                                                    ?>
                                                 </td>
                                                 <td>
                                                    <?php 
                                                            $updatedDate = date('d/m/Y',strtotime($course['updatedDate']));
                                                            echo $updatedDate; 
                                                    ?>
                                                </td>
                                                 <td>
                                                     <?php if($course['status'] ==1){?>
                                                     <span class="badge badge-success">
                                                         <?php echo "Active"; ?>
                                                     </span>
                                                     <?php }else{ ?>
                                                        <span class="badge badge-danger">
                                                         <?php echo "Inactive" ?>
                                                     </span>
                                                     <?php }?>
                                                    </td>
                                                 <td>
                                                     <div>
                                                         <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                     </div>
                                                 </td>
                                             </tr>
                                                <?php $i++;}?>
                                         </tbody>
                                     </table>
                                 </div>
                                 <?= $pager->links('courses','course_pagination') ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end row -->

             </div> <!-- container-fluid -->
         </div>
         <!-- End Page-content -->