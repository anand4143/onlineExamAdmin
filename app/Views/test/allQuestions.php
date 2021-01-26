<div class="main-content">
         <div class="page-content">
             <div class="container-fluid">
                 <div class="row align-items-center">
                     <div class="col-sm-6">
                         <div class="page-title-box">
                             <h4 class="font-size-18">Tests All questions</h4>
                         </div>
                     </div>
                 </div>
                 <!-- end page title -->
                 <!-- end row -->
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="card">
                             <div class="card-body">
                                 <div class="">
                                 <?php
                                    $i = 1 + (5 * ($currentPage - 1));
                                    // echo '<pre>';print_r($allQuestions);
                                    foreach ($allQuestions as $q) {
                                ?>
                                <div class="row" style="margin-bottom: 18px;">
                                    <div class="col-xl-11 font-weight-bold" style="font-size: 18px;">
                                       <?php echo "<span style='color:red;'>Question ".$i.'</span>';?>. <?php echo $q['question']?>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;">
                                    <div class="col-xl-6 font-weight-bold" style="font-size: 15px;">
                                    <span style='color:blue;'>Option A.</span> <?php echo $q['option1'];?>
                                    </div>
                                    <div class="col-xl-6 font-weight-bold" style="font-size: 15px;">
                                    <span style='color:blue;'>Option B.</span> <?php echo $q['option2'];?>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;" >
                                    <div class="col-xl-6 font-weight-bold" style="font-size: 15px;">
                                    <span style='color:blue;'>Option C.</span> <?php echo $q['option3'];?>
                                    </div>
                                    <div class="col-xl-6 font-weight-bold" style="font-size: 15px;">
                                    <span style='color:blue;'>Option D.</span> <?php echo $q['option4'];?>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 15px;font-size: 18px;">
                                    <div class="col-xl-12 font-weight-bold">
                                    <span style='color:green;'>Correct Answers:</span> <?php echo $q['answer'];?>
                                    </div>
                                </div>
                                    <?php $i++;}?>

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