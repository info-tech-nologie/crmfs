<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-header">
                    Welcome <?php echo e(Auth::user()->name); ?>

                </div>
                <div class="card-body">
                    <h5><?php echo e(Auth::user()->name); ?></h5>
                    <h5><?php echo e(Auth::user()->email); ?></h5>
                    <h5><?php echo e(Auth::user()->role); ?></h5>
                </div>
            </div>
            
            <div class="card mt-5">
                <div class="card-header">
                    Assigned Leads
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $assigned_leads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <h3><?php echo e($lead->name); ?></h3>
                        <div class="row">
                            <div class="col-6">
                                <h5><?php echo e($lead->phone); ?></h5>
                                <h5><?php echo e($lead->email); ?></h5>
                            </div>
                            <div class="col-6">
                                <h5><?php echo e($lead->address); ?></h5>
                                <h5><?php echo e($lead->city . ', ' . $lead->province_state); ?></h5>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/crmfsi/resources/views/user/index.blade.php ENDPATH**/ ?>