     <div class="main-content">
         <div class="page-content">
             <div class="container-fluid">
                 <!-- start page title -->
                 <div class="row align-items-center">
                     <div class="col-sm-6">
                         <div class="page-title-box">
                             <h4 class="font-size-18">Tests</h4>
                         </div>
                     </div>
                 </div>
                 <!-- end page title -->


                 <!-- end row -->

                 <div class="row">
                     <div class="col-xl-12">
                         <div class="card">
                             <div class="card-body">
                                 <!-- <h4 class="card-title mb-4">Subjects</h4> -->
                                 <div class="table-responsive">
                                     <?php //echo "<pre>";print_r($tests);?>
                                     <table class="table table-hover table-centered table-nowrap mb-0">
                                         <thead>
                                             <tr>
                                                 <th scope="col">(#) Id</th>
                                                 <th scope="col">Course name</th>
                                                 <th scope="col">Test name</th>
                                                 <th scope="col">Test description</th>
                                                 <th scope="col">Created date</th>
                                                 <th scope="col">Updated date</th>
                                                 <th scope="col" colspan="2">Status</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <?php
                                                $i = 1 + (5 * ($currentPage - 1));
                                                foreach ($tests as $test) {
                                                    //echo "<pre>";print_r($course->courseId);
                                                ?>
                                                 <tr>
                                                     <th scope="row">
                                                         <?php
                                                            echo $i;
                                                            //echo $test['courseId']; 
                                                            ?>
                                                     </th>
                                                     <td>
                                                         <?php echo $test['courseName']; ?>
                                                     </td>
                                                     <td>
                                                         <?php echo $test['testName']; ?>
                                                     </td>
                                                     <td>
                                                         <?php
                                                            echo $test['testDescription'];
                                                            ?>
                                                     </td>
                                                     <td>
                                                         <?php
                                                            $createdDate = date('d/m/Y', strtotime($test['createdDate']));
                                                            echo $createdDate;
                                                            ?>
                                                     </td>
                                                     <td>
                                                         <?php
                                                            if ($test['updatedDate'] !== '0000-00-00 00:00:00') {
                                                                $updatedDate = date('d/m/Y', strtotime($test['updatedDate']));
                                                                echo $updatedDate;
                                                            }
                                                            ?>
                                                     </td>
                                                     <td>
                                                         <?php if ($test['status'] == 1) { ?>
                                                             <span class="badge badge-success">
                                                                 <?php echo "Active"; ?>
                                                             </span>
                                                         <?php } else { ?>
                                                             <span class="badge badge-danger">
                                                                 <?php echo "Inactive" ?>
                                                             </span>
                                                         <?php } ?>
                                                     </td>
                                                     <td>
                                                         <div>
                                                             <!-- <a href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Edit</a> -->
                                                             <a href="<?php echo base_url()?>/test/create/<?php echo $test['testId']?>" class="btn btn-primary waves-effect waves-light">Edit</a>

                                                             <a href="<?php echo base_url()?>/test/uploadQuestions/<?php echo $test['courseId']?>/<?php echo $test['testId']?>" class="btn btn-primary waves-effect waves-light">Upload Questions</a>
                                                             <?php if(isset($test['hasQuestions']) && $test['hasQuestions']=='yes'){?>
                                                             <a href="<?php echo base_url()?>/test/allQuestions/<?php echo $test['courseId']?>/<?php echo $test['testId']?>" class="btn btn-primary waves-effect waves-light">See Questions</a>
                                                             <?php } ?>
                                                         </div>
                                                     </td>
                                                 </tr>
                                             <?php $i++;
                                                } ?>
                                         </tbody>
                                     </table>
                                 </div>
                                 <?= $pager->links('courses', 'course_pagination') ?>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- end row -->

             </div> <!-- container-fluid -->
         </div>
         <!-- End Page-content -->