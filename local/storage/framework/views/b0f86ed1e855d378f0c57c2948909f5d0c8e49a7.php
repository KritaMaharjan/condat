<div class="box-body">
    <div class="col-md-6">
        <div class="">
            <div class="form-group <?php if($errors->has('name')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('name', 'Course Name *', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <?php echo Form::text('name', null, array('class' => 'form-control', 'id'=>'name')); ?>

                    <?php if($errors->has('name')): ?>
                        <?php echo $errors->first('name', '<label class="control-label"
                                                           for="inputError">:message</label>'); ?>

                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php if($errors->has('level')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('level', 'Level *', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <?php echo Form::text('level', null, array('class' => 'form-control')); ?>

                </div>
            </div>

            <div class="form-group <?php if($errors->has('total_tuition_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('total_tuition_fee', 'Tuition Fee *', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <?php echo Form::text('total_tuition_fee', null, array('class' => 'form-control',
                        'id'=>'total_tuition_fee')); ?>

                        <span class="input-group-addon">.00</span>
                    </div>
                    <?php if($errors->has('total_tuition_fee')): ?>
                        <?php echo $errors->first('total_tuition_fee', '<label class="control-label"
                                                                        for="inputError">:message</label>'); ?>

                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php if($errors->has('coe_fee')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('coe_fee', 'COE Issue Field*', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <?php echo Form::text('coe_fee', null, array('class' => 'form-control', 'id'=>'coe_fee')); ?>

                        <span class="input-group-addon">.00</span>
                    </div>
                    <?php if($errors->has('coe_fee')): ?>
                        <?php echo $errors->first('coe_fee', '<label class="control-label"
                                                              for="inputError">:message</label>'); ?>

                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php if($errors->has('broad_field')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('broad_field', 'Broad Field*', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <?php echo Form::select('broad_field', $broad_fields, null, array('class' => 'form-control', 'id'=>'broad_field')); ?>

                </div>
            </div>

            <div class="form-group <?php if($errors->has('narrow_field')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('narrow_field', 'Narrow Field*', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <?php echo Form::select('narrow_field', $narrow_fields, null, array('class' => 'form-control', 'id'=>'narrow_field')); ?>

                </div>
            </div>


            <div class="form-group <?php if($errors->has('description')): ?> <?php echo e('has-error'); ?> <?php endif; ?>">
                <?php echo Form::label('description', 'Description', array('class' => 'col-sm-4 control-label')); ?>

                <div class="col-sm-8">
                    <?php echo Form::textarea('description', null, array('class' => 'form-control', 'id'=>'description')); ?>

                    <?php if($errors->has('description')): ?>
                        <?php echo $errors->first('description', '<label class="control-label"
                                                           for="inputError">:message</label>'); ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#broad_field").change(function() {
        var broad_field = $(this).val();
        $.ajax({url: appUrl + "/tenant/narrowfield/" + broad_field,
            success: function(result){
                $("#narrow_field").html("tenant/narrowfield/" + result.data.options);
        }});
    });
</script>