<?php $__env->startSection('title', 'Client Notes'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    @parent
    <li><a href="<?php echo e(url('tenant/clients')); ?>" title="All Clients"><i class="fa fa-users"></i> Clients</a></li>
    <li>Notes</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="container">
                    <img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/1936510_10207216981375364_4596889339024157957_n.jpg?oh=f3031e9add8769ca489e5865a54b6bc4&oe=57B0E02E"
                         class="img-rounded" alt="Cinque Terre" width="150" height="150">
                </div>
            </div>
            <div class="col-sm-10">
                <div class="row">

                    <h4><?php echo e($client->first_name); ?> <?php echo e($client->middle_name); ?> <b><?php echo e($client->last_name); ?></b></h4>

                    <p>E <?php echo e($client->email); ?> | P <?php echo e($client->number); ?></p>

                    <p>
                        <?php echo e($client->street); ?>

                        <?php echo e($client->suburb); ?>

                        <?php echo e($client->state); ?>

                        <?php echo e($client->postcode); ?>

                        <?php echo e(get_country($client->country_id)); ?>

                    </p>


                </div>
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs" href="#">AMS</a>
                            </div>

                            <?php echo $__env->make('Tenant::Client/navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        </div>
                        <!--/.container-fluid -->
                    </nav>

                </div>


            </div>

        </div>
    </div>

    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Notes:</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

                <form action='' method="POST">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="form-group">
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="checkbox form-group">
                        <label><input type="checkbox" id="remind" name="remind" value="1"> Add to Reminder</label>
                    </div>
                    <div id="reminderDate" style="display: none">
                        <div class="form-group">
                            <label for="reminder_date" class="control-label">Reminder Date</label>

                            <div class="">
                                <div class='input-group date'>
                                    <input type="text" name="reminder_date" class="form-control datepicker"
                                           id="reminder_date" placeholder="yyyy-mm-dd">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" onsubmit="ConfirmDelete()">Submit</button>
                    </div>
                </form>


            </div>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-md-8 col-xs-12">
            <div class="box box-primary">
                <div class="box-body table-responsive">
                     <?php if(count($notes) > 0): ?>                  
                    <hr/>              
                    <table id="table-lead" class="table table-hover">
            
                        <thead>
                        <tr>
                             <th>Added By</th>
                            <th>Notes</th>
                            <th>Remind me</th> 
                             <th>Reminder date</th>                             
                            <th>Processing</th>                            
                        </tr>
                        </thead>
                        <tbody>
                  <?php foreach($notes as $key => $note): ?>
                        
                            <tr>
                                <td><?php echo e(get_tenant_name($note->added_by_user_id)); ?></td>
                                <td><?php echo e($note->description); ?></td>
                                <td><?php echo e(($note->remind == 1) ? 'yes' : 'no'); ?></td>
                                <td><?php echo e(($note->remind == 1) ? format_date($note->reminder_date) : ''); ?></td>
                                <td><a href="" target="_blank"><i class="fa fa-eye"></i> View</a>&nbsp;&nbsp;
                                    <a href="<?php echo e(route('tenant.client.notes.delete', $note->notes_id)); ?>" target="_blank" onClick="return confirm('Are you sure want to delete this record')"><i class="fa fa-trash"></i> Delete</a>
                                </td>
                               
                            </tr>
                             <?php endforeach; ?>
                        </tbody>

                    </table>
                   <?php else: ?>
                        <p class="text-muted well">
                            No note uploaded yet.
                        </p>
                   <?php endif; ?>
                </div>
            </div>
        </div>     </div>
    </div>
    <!-- Bootstrap date picker -->
    <script type="text/javascript">
        $(function () {
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd",
                startDate: '+0d',
                autoclose: true,
                todayHighlight: true
            });

        });

        $(document).ready(function () {
            $('#remind').change(function () {
                if (this.checked)
                    $('#reminderDate').fadeIn('slow');
                else
                    $('#reminderDate').fadeOut('slow');

            });
        });


    </script>
    <script>

</script>
  
  

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tenant', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>