<?php
$this->extend('style/index');
$this->section('body');
?>

<?php if(session()->getFlashdata('success')) :?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php endif; ?>
<?php if(session()->getFlashdata('danger')) :?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('danger') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php endif; ?>
<?php if(session()->getFlashdata('up')) :?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('up') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
<?php endif; ?>
    <div class="card animated bounceInDown myForm">
        <div class="card-header p-3">
            <a href="/students/create" class="btn btn-success btn-sm float-right submit_btn text-end"><i class="fas fa-arrow-alt-circle-right"></i> Add Student</a>
            <h5 class="mb-0"><i class="fas fa-tasks me-2"></i> Student List</h5>
        </div>
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Firstname</th>
                        <th scope="col">Lastname</th>
                        <th scope="col">Middle</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col">Course</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $student): ?>
                        <tr>
                            <th scope="row"><?= $student['id']; ?></th>
                            <td><?= $student['firstname']; ?></td>
                            <td><?= $student['lastname']; ?></td>
                            <td><?= $student['middle']; ?></td>
                            <td><?= $student['address']; ?></td>
                            <td><?= $student['email']; ?></td>
                            <td><?= $student['course']; ?></td>
                            <td>
                                <a href="/students/edit/<?= $student['id']; ?>"class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="/students/delete/<?= $student['id']; ?>"class="btn btn-light"><i class="fas fa-trash-alt text-danger" style="color: #ffffff;"></i></a>
                            </td>  
                        </tr>
                     <?php endforeach; ?>
                </tbody>
            </table>    
    </div>
<?php $this->endSection(); ?>