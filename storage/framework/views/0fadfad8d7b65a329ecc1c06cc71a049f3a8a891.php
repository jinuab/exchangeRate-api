<?php $__env->startSection('content'); ?>

<div class="container bg-light p-5 rounded">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-10">Welcome to <?php echo e(config('app.name')); ?></h1>
            <p></p>
            <br>
            <form class="col-2 col-lg-auto mb-3 mb-lg-0 me-lg-2">
                <label>Search a student</label>
                <input type="search" class="form-control form-control-dark" placeholder="Search Student..." aria-label="Search">
            </form>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Registered On</th>
                    <th scope="col">Identification No</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e(++$key); ?></td>
                        <td><?php echo e($student->Name); ?> <?php echo e($student->Surname); ?></td>
                        <td><?php echo e($student->RegisteredOn); ?></td>
                        <td><?php echo e($student->IdentificationNo); ?></td>
                        <td>
                            <a href="/student/edit/<?php echo e($student->id); ?>" class="btn btn-outline-primary">Edit</a>
                            <a href="/student/delete/<?php echo e($student->id); ?>" class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td><p class="text-warning">No Data available</p></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/jinugeorge/school-rest-api/resources/views/home.blade.php ENDPATH**/ ?>