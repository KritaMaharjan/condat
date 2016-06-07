<?php $__env->startSection('title', 'Client View'); ?>
<?php $__env->startSection('breadcrumb'); ?>
    @parent
    <li><a href="<?php echo e(url('tenant/application')); ?>" title="All Applications"><i class="fa fa-users"></i> Applications</a>
    </li>
    <li>View</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="client-navbar">
                <div class="col-sm-12 col-md-2">
                    <div class="container">
                        <img src="https://scontent-lax3-1.xx.fbcdn.net/v/t1.0-9/1936510_10207216981375364_4596889339024157957_n.jpg?oh=f3031e9add8769ca489e5865a54b6bc4&oe=57B0E02E"
                             class="img-rounded" alt="Cinque Terre" width="150" height="150">
                    </div>
                </div>
                <div class="col-sm-12 col-md-10">
                    <div class="row">

                        <h4><?php echo e($client->first_name); ?> <?php echo e($client->middle_name); ?> <b><?php echo e($client->last_name); ?></b></h4>

                        <p>University of Western Sydney</p>

                        <p>
                            Graduate Diploma of Professional Accounting
                        </p>
                    </div>
                    <div class="row">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href=<?php echo e(url("tenant/clients/$application->client_id")); ?>>Dashboard</a></li>
                                <li><a href=<?php echo e(url("tenant/clients/$application->client_id/personal_details")); ?>>Personal
                                        Details</a></li>
                                <li class="active"><a href=<?php echo e(url("tenant/clients/$application->client_id/applications")); ?>>College
                                        Application</a></li>
                                <li><a href=<?php echo e(url("tenant/clients/$application->client_id/accounts")); ?>>Accounts</a></li>
                                <li><a href=<?php echo e(url("tenant/clients/$application->client_id/document")); ?>>Documents</a></li>
                                <li><a href=<?php echo e(url("tenant/clients/$application->client_id/notes")); ?>>Notes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="menu-opener">
                <span class="menu-opener-inner"></span>
                Toggle Client Menu
            </div>
        </div>
    </div>

    <div class="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="#">AMS</a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Dashboard</a></li>
                        <li><a href="#">Application Details</a></li>
                        <li><a href="<?php echo e(route('tenant.application.college', $application->application_id)); ?>">College Accounts</a></li>
                        <li><a href="#">Students Accounts</a></li>
                        <li><a href="#">Sub Agent Payments</a></li>
                        <li><a href="#">Documents</a></li>
                        <li><a href="#">Notes</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->

            </div>
            <!--/.container-fluid -->
        </nav>

        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title"> &nbsp;Application -
                    <small>View</small>
                </h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Course Information</h3>
                            </div>
                            <div class="panel-body">
                                <a href="#" class="pull-right">Edit</a>

                                <p>Course Enrolled<br/>
                                    <?php echo e($application->course_name); ?><br/>
                                    Institute<br/>
                                    <?php echo e($application->company_name); ?><br/>
                                    From <?php echo e(format_date($application->intake_date)); ?>

                                    to <?php echo e(format_date($application->end_date)); ?><br/>
                                    Student ID: <?php echo e(format_id($application->student_id, 'Std')); ?></p>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Payment to College</h3>
                                <a href="<?php echo e(route('tenant.application.payment', $application->application_id)); ?>" class="btn btn-primary btn-flat pull-right"><i class="glyphicon glyphicon-plus-sign"></i> Add Payment</a>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>Total Fee</td>
                                        <td>25000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Paid</td>
                                        <td>15000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Remaining</td>
                                        <td>10000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Commission Details</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>Commission Payable Amout</td>
                                        <td>25000</td>
                                    </tr>
                                    <tr>
                                        <td>Total Commission Claimed</td>
                                        <td>15000</td>
                                    </tr>
                                    <tr>
                                        <td>Remaining Commission</td>
                                        <td>10000</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Status</h3>
                            </div>
                            <div class="panel-body">
                                <div class="well well-sm">
                                    Enrolled
                                    <a href="#" class="pull-right">modify</a>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Super Agent</h3>
                            </div>
                            <div class="panel-body">
                                <div class="well well-sm">
                                    <?php if($application->super_agent_id != null): ?>
                                        <?php echo e(get_agent_name($application->super_agent_id)); ?>

                                        <a href="#" class="pull-right">view</a>
                                    <?php else: ?>
                                        None
                                        <button class="btn btn-primary btn-xs pull-right" data-toggle="modal"
                                                data-target="#agentModal"><i class="glyphicon glyphicon-plus-sign"></i>
                                            Add
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sub Agent</h3>
                            </div>
                            <div class="panel-body">
                                <div class="well well-sm">
                                    <?php if($application->sub_agent_id != null): ?>
                                        <?php echo e(get_agent_name($application->sub_agent_id)); ?>

                                        <a href="#" class="pull-right">view</a>
                                    <?php else: ?>
                                        None
                                        <button class="btn btn-primary btn-xs pull-right" data-toggle="modal"
                                                data-target="#agentModal"><i class="glyphicon glyphicon-plus-sign"></i>
                                            Add
                                        </button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Student owing Agency</h3>
                            </div>
                            <div class="panel-body">
                                <h3>$500</h3>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Pending Active Commission</h3>
                            </div>
                            <div class="panel-body">
                                <h3>$450</h3>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Uninvoice Amount</h3>
                            </div>
                            <div class="panel-body">
                                <h3>$700</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="agentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Sub Agent</h4>
                </div>
                <?php echo Form::open(['url' => 'tenant/applications/'.$application->application_id.'/subagent', 'id' => 'add-agent', 'class' => 'form-horizontal form-left']); ?>

                <div class="modal-body">

                    <div class="form-group">
                        <?php echo Form::label('agent_id', 'Agent *', array('class' => 'col-sm-4 control-label')); ?>

                        <div class="col-sm-8">
                            <?php echo Form::select('agent_id', $agents, null, array('class' => 'form-control', 'id'=>'agent_id')); ?>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus-circle"></i>
                        Add
                    </button>
                </div>
                <?php echo Form::close(); ?>

            </div>

        </div>
    </div>

    <script class="cssdeck" type="text/javascript">
        $(".menu-opener").click(function () {
            $(".menu-opener").toggleClass("active");
            $(".client-navbar, .menu-opener-inner").slideToggle();
        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.tenant', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>