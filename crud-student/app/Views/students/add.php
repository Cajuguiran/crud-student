<?php
$this->extend('style/index');
$this->section('body');
?>
<form action="/students/store" method="POST">
    <div class="card animated bounceInDown myForm">
        <div class="card-header p-3">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="card col-md-4 animated bounceInDown myForm">
                        <div class="card-header">
                            <h4>Student Form</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                <div id="dynamic_container">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="firstname" placeholder="Firstname" required="required">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="middle" placeholder="Middle">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-location-dot"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="address" placeholder="Address">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-graduation-cap"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="course" placeholder="Course">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-sm float-right submit_btn text-end "><i class="fas fa-arrow-alt-circle-right"></i> Submit</button>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div>
</form>


<?php $this->endSection(); ?>