<div class="main-content">
         <div class="page-content">
             <div class="container-fluid">
                 <!-- start page title -->
                 <div class="row align-items-center">
                     <div class="col-sm-6">
                         <div class="page-title-box">
                             <h4 class="font-size-18">Upload Test Questions</h4>
                         </div>
                     </div>
                 </div>
                 <!-- end page title -->

                 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title-desc">Here you can upload your test paper questions and answers.</p>
                                        <form action="<?php echo base_url();?>/test/saveQuestions" method="POST" enctype="multipart/form-data">
                                        <div class="form-group row">
                                        <div class="col-sm-12">
                                        <?php
                                        $session = \config\Services::session();
                                        if($session->getFlashdata('extError')){                                              
                                                if(!empty($session->getFlashdata('extError'))){ 
                                        ?>
                                            <div class="alert alert-danger"><?php echo $session->getFlashdata('extError'); ?></div>
                                            <?php
                                                }
                                            }
                                            if($session->getFlashdata('Uploaded')){
                                                echo "<div class='alert alert-success'>";
                                                echo $session->getFlashdata('Uploaded');
                                                echo "</div>";
                                            }
                                            ?>
                                        </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="fileimport" class="col-sm-2 col-form-label">Import excelsheet</label>
                                            <div class="col-sm-10">
                                                <?php //echo "<pre>"; print_r($testtData);?>
                                                <input type="hidden" value="<?php  echo $testtData['testId']?>" name="testId">
                                                <input type="hidden" value="<?php  echo $testtData['courseId']?>" name="courseId">
                                                <input class="form-control form-control-lg" type="file" placeholder="Import excelsheet" id="fileimport" name="fileimport">
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                        Upload Questions
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