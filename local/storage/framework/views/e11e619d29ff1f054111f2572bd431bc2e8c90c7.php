<div class="form-group">
    <?php echo Form::label('street', 'Street', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::text('street', null, array('class' => 'form-control', 'id'=>'street')); ?>

    </div>
</div>
<div class="form-group">
    <?php echo Form::label('suburb', 'Suburb', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::text('suburb', null, array('class' => 'form-control', 'id'=>'suburb')); ?>

    </div>
</div>
<div class="form-group">
    <?php echo Form::label('state', 'State', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::text('state', null, array('class' => 'form-control', 'id'=>'state')); ?>

    </div>
</div>
<div class="form-group">
    <?php echo Form::label('postcode', 'Postcode', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::text('postcode', null, array('class' => 'form-control', 'id'=>'postcode')); ?>

    </div>
</div>

<div class="form-group">
    <?php echo Form::label('country_id', 'Country', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::select('country_id', $countries, null, array('class' =>
        'form-control')); ?>

    </div>
</div>

<div class="form-group">
    <?php echo Form::label('number', 'Phone Number *', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::text('number', null, array('class' => 'form-control phone-input', 'id'=>'number')); ?>

    </div>
</div>

<div class="form-group">
    <?php echo Form::label('email', 'Email Address *', array('class' => 'col-sm-4 control-label')); ?>

    <div class="col-sm-8">
        <?php echo Form::email('email', null, array('class' => 'form-control', 'id'=>'email')); ?>

    </div>
</div>