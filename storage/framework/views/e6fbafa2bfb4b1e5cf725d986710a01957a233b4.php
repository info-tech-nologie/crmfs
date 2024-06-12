<?php $__env->startSection('content'); ?>

<div class="row">
    
    <div class="col-sm-12">
        
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Active Employees</div>
                    <div class="card-body">
                        <h4 class="text-center">4</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Current Sales Leader</div>
                    <div class="card-body">
                        <h4 class="text-center">John Leader</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Sales For Month</div>
                    <div class="card-body">
                        <h4 class="text-center">5</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">Total Sales Value</div>
                    <div class="card-body">
                        <h4 class="text-center">$42,089.23</h4>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
        
        <div class="row mt-4">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Unassigned Prospects</div>
                    <ul class="list-group list-group-flush">
                        <?php for($i = 0; $i < 6; $i++): ?>
                            <li class="list-group-item">
                                Mr. Prospect <span class="float-right btn btn-sm btn-success">Assign</span>
                            </li>
                        <?php endfor; ?>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View All Unassigned Leads</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Recent Estimates</div>
                    <ul class="list-group list-group-flush">
                        <?php for($i = 0; $i < 6; $i++): ?>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-4">
                                    Mr. Prospect
                                </div>
                                <div class="col-sm-4">
                                    June 5th, 2018
                                </div>
                                <div class="col-sm-4">
                                    Value: $54,789.90
                                    <span class="float-right btn btn-sm btn-success">Details</span>
                                </div>
                            </div>
                        </li>
                        <?php endfor; ?>
                        <li class="list-group-item">
                            <a href="#" class="btn btn-block btn-md btn-primary">View All Recent Estimates</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.col-sm-12 -->
</div><!-- /.row -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /root/crmfsi/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>