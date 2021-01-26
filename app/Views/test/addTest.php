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

                 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title-desc">Here you can add test.</p>
                                        <form action="<?php echo base_url();?>/subject/saveSubject" method="POST">
                                        <div class="form-group row">
                                        <div class="col-sm-12">
                                        <?php
                                                if(isset($validation)){
                                            ?>
                                            <div class="text-danger"><?php echo $validation->listErrors(); ?></div>
                                            <?php
                                                }
                                            ?>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Courses</label>
                                            
                                            <div class="col-sm-10">
                                            <?php
                                                if(isset($testData)){
                                            ?>
                                                <input type="hidden" name="testIdForEdit" value="<?php echo $testData['testId'];?>">
                                            <?php
                                                }
                                            ?>
                                                <select class="form-control form-control-lg" name="courseId" id="courseId">
                                                    <option>Select Course</option>
                                                    <?php
                                                        foreach($courseList as $course){
                                                    ?>
                                                        <option <?php  if( $testData['courseId'] == $course->courseId ){ ?>selected <?php }?>value="<?php echo $course->courseId;?>">
                                                            <?php echo $course->courseName;?>
                                                        </option>
                                                        
                                                    <?php
                                                       
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="subjectName" class="col-sm-2 col-form-label">Test name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-lg" type="text" placeholder="Subject Name" id="subjectName" name="subjectName" value="<?php if(isset($testData['subjectId'])){ echo $testData['subjectName']; } ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="testDescription" class="col-sm-2 col-form-label">Test description</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-lg" type="text" placeholder="Test description" id="testDescription" name="testDescription" value="<?php if(isset($testData['testDescription'])){ echo $testData['testDescription']; } ?>">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-secondary waves-effect">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                 <!-- end row -->

             </div> <!-- container-fluid -->
         </div>
         <!-- End Page-content -->