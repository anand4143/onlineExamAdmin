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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="card-title-desc">Here you can add courses.</p>
                                        <form action="<?php echo base_url();?>/course/saveCourse" method="POST">
                                        <div class="form-group row">
                                            <label for="courseName" class="col-sm-2 col-form-label">Course name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-lg" type="text" placeholder="Course Name" id="courseName" name="courseName">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="courseDescription" class="col-sm-2 col-form-label">Course description</label>
                                            <div class="col-sm-10">
                                                <input class="form-control form-control-lg" type="text" placeholder="Course description" id="courseDescription" name="courseDescription">
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