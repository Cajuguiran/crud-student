<?php
$this->extend('style/index');
$this->section('body');
?>

<form action="/students/update/<?= $student['id']; ?>" method="POST">
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
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="firstname" placeholder="Firstname" value="<?= $student['firstname']; ?>">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="lastname" placeholder="Lastname" value="<?= $student['lastname']; ?>">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-users"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="middle" placeholder="Middle" value="<?= $student['middle']; ?>">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-location-dot"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="address" placeholder="Address" value="<?= $student['address']; ?>">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fas fa-at"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?= $student['email']; ?>">
                                    </div>
                                    <div class="input-group mt-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text br-15"><i class="fa-solid fa-graduation-cap"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="course" placeholder="Course" value="<?= $student['course']; ?>">
                                    </div>
                            </form>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-sm float-right submit_btn text-end "><i class="fas fa-arrow-alt-circle-right"></i> Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php $this->endSection(); ?>
