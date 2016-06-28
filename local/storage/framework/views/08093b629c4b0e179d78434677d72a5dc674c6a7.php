<div class="box-body">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group <?php if($errors->has('invoice_date')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('invoice_date', 'Invoice Date *', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <div class="input-group date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <?php echo Form::text('invoice_date', null, array('class' => 'form-control', 'id'=>'invoice_date')); ?>

                    </div>
                    <?php if($errors->has('invoice_date')): ?>
                        <?php echo $errors->first('invoice_date', '<label class="control-label"
                                                          for="inputError">:message</label>'); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group <?php if($errors->has('installment_no')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('installment_no', 'Installment Number', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <?php echo Form::text('installment_no', null, array('class' => 'form-control', 'id'=>'installment_no')); ?>

                    <?php if($errors->has('installment_no')): ?>
                        <?php echo $errors->first('installment_no', '<label class="control-label"
                                                                for="inputError">:message</label>'); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<<<<<<< Updated upstream

=======
    
    
>>>>>>> Stashed changes
    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title">Commission on Tuition Fee</span>
            <a href="#" class="btn btn-warning btn-collapse btn-flat btn-xs pull-right"><i class="fa fa-minus-circle"></i> Remove</a>
        </div>
        <div class="panel-body">
            <div class="col-sm-6">

                <div class="form-group <?php if($errors->has('invoice_amount')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('tuition_fee', 'Tuition Fee *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('tuition_fee', null, array('class' => 'form-control', 'id'=>'tuition_fee')); ?>

                        </div>
                        <?php if($errors->has('tuition_fee')): ?>
                            <?php echo $errors->first('tuition_fee', '<label class="control-label"
                                                                   for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('enrollment_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('enrollment_fee', 'Enrollment Fee *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('enrollment_fee', 0, array('class' => 'form-control', 'id'=>'enrollment_fee',)); ?>

                        </div>
                        <?php if($errors->has('enrollment_fee')): ?>
                            <?php echo $errors->first('enrollment_fee', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('material_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('material_fee', 'Material Fee *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('material_fee', 0, array('class' => 'form-control', 'id'=>'material_fee')); ?>

                        </div>
                        <?php if($errors->has('material_fee')): ?>
                            <?php echo $errors->first('material_fee', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('coe_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('coe_fee', 'COE Fee *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('coe_fee', 0, array('class' => 'form-control', 'id'=>'coe_fee')); ?>

                        </div>
                        <?php if($errors->has('coe_fee')): ?>
                            <?php echo $errors->first('coe_fee', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('other_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('other_fee', 'Other Fee*', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('other_fee', 0, array('class' => 'form-control', 'id'=>'other_fee')); ?>

                        </div>
                        <?php if($errors->has('other_fee')): ?>
                            <?php echo $errors->first('other_fee', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('sub_total')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('sub_total', 'Sub Total *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('sub_total', null, array('class' => 'form-control', 'id'=>'sub_total','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('sub_total')): ?>
                            <?php echo $errors->first('sub_total', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">

                <div class="form-group <?php if($errors->has('description')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('description', 'Description *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <?php echo Form::text('description', null, array('class' => 'form-control', 'id'=>'description')); ?>

                        <?php if($errors->has('description')): ?>
                            <?php echo $errors->first('description', '<label class="control-label"
                                                                    for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('commission_percent')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('commission_percent', 'Commission Percent *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('commission_percent', null, array('class' => 'form-control', 'id'=>'commission_percent')); ?>

                        </div>
                        <?php if($errors->has('commission_percent')): ?>
                            <?php echo $errors->first('commission_percent', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('commission_amount')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('commission_amount', 'Commission Amount *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('commission_amount', null, array('class' => 'form-control', 'id'=>'commission_amount','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('commission_amount')): ?>
                            <?php echo $errors->first('commission_amount', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group <?php if($errors->has('gst')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('gst', 'Commission GST *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('gst', null, array('class' => 'form-control', 'id'=>'gst','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('gst')): ?>
                            <?php echo $errors->first('gst', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="panel-title">Other Commission</span>
            <a href="#" class="btn btn-warning btn-collapse btn-flat btn-xs pull-right"><i class="fa fa-minus-circle"></i> Remove</a>
        </div>
        <div class="panel-body">
            <div class="col-sm-6">

                <div class="form-group <?php if($errors->has('incentive')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('incentive', 'Amount *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('incentive', null, array('class' => 'form-control', 'id'=>'incentive')); ?>

                        </div>
                        <?php if($errors->has('incentive')): ?>
                            <?php echo $errors->first('incentive', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('gst')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('gst', 'Incentive GST *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('gst', null, array('class' => 'form-control', 'id'=>'gst','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('gst')): ?>
                            <?php echo $errors->first('gst', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group <?php if($errors->has('description')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('description', 'Description *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <?php echo Form::text('description', null, array('class' => 'form-control', 'id'=>'description')); ?>

                        <?php if($errors->has('description')): ?>
                            <?php echo $errors->first('description', '<label class="control-label"
                                                                    for="inputError">:message</label>'); ?>

                        <?php endif; ?>
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
                <div class="form-group <?php if($errors->has('total_commission')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('total_commission', 'Total Amount *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('total_commission', null, array('class' => 'form-control', 'id'=>'total_commission','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('total_commission')): ?>
                            <?php echo $errors->first('total_commission', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-group <?php if($errors->has('total_gst')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('total_gst', 'Total GST *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('total_gst', null, array('class' => 'form-control', 'id'=>'total_gst','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('total_gst')): ?>
                            <?php echo $errors->first('total_gst', '<label class="control-label"
                                                                     for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group <?php if($errors->has('payable_to_college')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                    <?php echo Form::label('payable_to_college', 'Payable To College *', array('class' => 'col-sm-4 control-label')); ?>

                    <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <?php echo Form::text('payable_to_college', null, array('class' => 'form-control', 'id'=>'payable_to_college','placeholder'=>'click to calculate')); ?>

                        </div>
                        <?php if($errors->has('payable_to_college')): ?>
                            <?php echo $errors->first('payable_to_college', '<label class="control-label"
                                                              for="inputError">:message</label>'); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function () {
        $("#invoice_date").datepicker({
            autoclose: true
        });

        $("#due_date").datepicker({
            autoclose: true
        });

        $(".btn-collapse").click(function(e) {
            e.preventDefault();
            var $this = $(this);
            var parentHead = $this.parent();
            parentHead.parent().find(".panel-body").slideToggle( "slow", function() {
                parentHead.toggleClass('collapsed');
                if(!parentHead.hasClass('collapsed'))
                    $this.html('<i class="fa fa-minus-circle"></i> Remove');
                else
                    $this.html('<i class="fa fa-plus-circle"></i> Add');
            });
        });

        $('#tuition_fee, #enrollment_fee, #material_fee, #coe_fee, #other_fee').change(function() {
            var tuitionFee = parseFloat($('#tuition_fee').val());
            var enrollmentFee = parseFloat($('#enrollment_fee').val());
            var materialFee = parseFloat($('#material_fee').val());
            var coeFee = parseFloat($('#coe_fee').val());
            var otherFee = parseFloat($('#other_fee').val());
            var subTotal = parseFloat(tuitionFee + enrollmentFee + materialFee + coeFee + otherFee);
            $('#sub_total').val(subTotal);
        });

        $('#commission_percent, #subTotal').change(function() {
            var commissionPercent = parseFloat($('#commission_percent').val());
            var subTotal = parseFloat($('#sub_total').val());
            var commissionAmount = parseFloat(commissionPercent / 100 * subTotal).toFixed(2);
            $('#commission_amount').val(commissionAmount);
        });

        $('#commission_amount').change(function() {
            var commissionAmount = parseFloat($(this).val());
            var gst = commissionAmount * 0.1; //10% of commission amount
            $('#gst').val(gst.toFixed(2));
        });
    });
</script>



