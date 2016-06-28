<?php $__env->startSection('title', 'Add Invoice'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    @parent
    <li><a href="<?php echo e(url('tenant/clients')); ?>" title="All Clients"><i class="fa fa-users"></i> Clients</a></li>
    <li>Add</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Invoice Details</h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="col-md-4"><strong>Invoice Date</strong></div>
                        <div class="col-sm-8">
                            <?php echo e(format_date($invoice->invoice_date)); ?>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-4"><strong>Installment Number</strong></div>
                        <div class="col-sm-8">
                            <?php echo e($invoice->installment_no); ?>

                        </div>
                    </div>
                </div>
                <br/>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title">Commission on Tuition Fee</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-md-4"><strong>Tuition Fee</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->tuition_fee); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Enrollment Fee</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->enrollment_fee); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Material Fee</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->material_fee); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>COE Fee</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->coe_fee); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Other Fee</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->other_fee); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Sub Total</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->sub_total); ?>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="form-group">
                                <div class="col-md-4"><strong>Description</strong></div>
                                <div class="col-sm-8">
                                    <?php echo e($invoice->description); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Commission Percent</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->commission_percent); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Commission Amount</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->commission_amount); ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-4"><strong>Commission GST</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->commission_gst); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title">Other Commission</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-6">

                            <div class="form-group">
                                <div class="col-md-4"><strong>Amount</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->amount); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Incentive GST</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->gst); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-md-4"><strong>Description</strong></div>
                                <div class="col-sm-8">
                                    <?php echo e($invoice->other_description); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="panel-title">Total Commission</span>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-md-4"><strong>Total Amount</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->total_commission); ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4"><strong>Total GST</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->total_gst); ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="col-md-4"><strong>Payable To College</strong></div>
                                <div class="col-sm-8">
                                    $<?php echo e($invoice->payable_to_college); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.tenant', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>