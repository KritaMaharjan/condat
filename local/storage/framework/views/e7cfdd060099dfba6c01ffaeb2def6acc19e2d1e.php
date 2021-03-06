<div class="box-body">
    <div class="col-md-6">
        <div class="form-group <?php if($errors->has('invoice_amount')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
            <?php echo Form::label('invoice_amount', 'Invoice Amount *', array('class' => 'col-sm-4 control-label')); ?>

            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <?php echo Form::text('invoice_amount', null, array('class' => 'form-control', 'id'=>'invoice_amount')); ?>

                </div>
                <?php if($errors->has('invoice_amount')): ?>
                    <?php echo $errors->first('invoice_amount', '<label class="control-label"
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
                    <?php echo Form::text('commission_amount', null, array('class' => 'form-control', 'id'=>'commission_amount')); ?>

                </div>
                <?php if($errors->has('commission_amount')): ?>
                    <?php echo $errors->first('commission_amount', '<label class="control-label"
                                                             for="inputError">:message</label>'); ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="form-group <?php if($errors->has('enrollment_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
            <?php echo Form::label('enrollment_fee', 'Enrollment Fee *', array('class' => 'col-sm-4 control-label')); ?>

            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <?php echo Form::text('enrollment_fee', null, array('class' => 'form-control', 'id'=>'enrollment_fee')); ?>

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
                    <?php echo Form::text('material_fee', null, array('class' => 'form-control', 'id'=>'material_fee')); ?>

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
                    <?php echo Form::text('coe_fee', null, array('class' => 'form-control', 'id'=>'coe_fee')); ?>

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
                    <?php echo Form::text('other_fee', null, array('class' => 'form-control', 'id'=>'other_fee')); ?>

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
                    <?php echo Form::text('sub_total', null, array('class' => 'form-control', 'id'=>'sub_total')); ?>

                </div>
                <?php if($errors->has('sub_total')): ?>
                    <?php echo $errors->first('sub_total', '<label class="control-label"
                                                             for="inputError">:message</label>'); ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="form-group <?php if($errors->has('incentive')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
            <?php echo Form::label('incentive', 'Incentive *', array('class' => 'col-sm-4 control-label')); ?>

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
            <?php echo Form::label('gst', 'GST *', array('class' => 'col-sm-4 control-label')); ?>

            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <?php echo Form::text('gst', null, array('class' => 'form-control', 'id'=>'gst')); ?>

                </div>
                <?php if($errors->has('gst')): ?>
                    <?php echo $errors->first('gst', '<label class="control-label"
                                                             for="inputError">:message</label>'); ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="form-group <?php if($errors->has('total_commission')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
            <?php echo Form::label('total_commission', 'Total Commission *', array('class' => 'col-sm-4 control-label')); ?>

            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <?php echo Form::text('total_commission', null, array('class' => 'form-control', 'id'=>'total_commission')); ?>

                </div>
                <?php if($errors->has('total_commission')): ?>
                    <?php echo $errors->first('total_commission', '<label class="control-label"
                                                             for="inputError">:message</label>'); ?>

                <?php endif; ?>
            </div>
        </div>

        <div class="form-group <?php if($errors->has('payable_to_college')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
            <?php echo Form::label('payable_to_college', 'Payable To College *', array('class' => 'col-sm-4 control-label')); ?>

            <div class="col-sm-8">
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <?php echo Form::text('payable_to_college', null, array('class' => 'form-control', 'id'=>'payable_to_college')); ?>

                </div>
                <?php if($errors->has('payable_to_college')): ?>
                    <?php echo $errors->first('payable_to_college', '<label class="control-label"
                                                      for="inputError">:message</label>'); ?>

                <?php endif; ?>
            </div>
        </div>

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

        <div class="form-group <?php if($errors->has('due_date')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
            <?php echo Form::label('due_date', 'Due Date *', array('class' => 'col-sm-4 control-label')); ?>

            <div class="col-sm-8">
                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <?php echo Form::text('due_date', null, array('class' => 'form-control', 'id'=>'due_date')); ?>

                </div>
                <?php if($errors->has('due_date')): ?>
                    <?php echo $errors->first('due_date', '<label class="control-label"
                                                      for="inputError">:message</label>'); ?>

                <?php endif; ?>
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
    });
</script>