@extends('layouts.tenant')
@section('title', 'Client Notes')
@section('breadcrumb')
    @parent
    <li><a href="{{url('tenant/clients')}}" title="All Clients"><i class="fa fa-users"></i> Clients</a></li>
    <li>Notes</li>
@stop
@section('content')

<div class="container">
    <div class="row">
    @include('Tenant::Client/client_header')
    </div>
   

    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Notes:</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">

                <form action='' method="POST">
                    <div class="form-group">
                        <textarea name="filter" class="form-control" id="filter"></textarea>
                    </div>
                    <div class="checkbox form-group">
                        <label><input type="checkbox" id="remind"> Add to Reminder</label>
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
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>


            </div>
        </div>
        <!-- /.box -->
    </div>

    <div class="col-xs-9">
        <div class="box box-primary">
            <div class="box-header with-border">

                <b>

                    <div class="col-md-6">Notes</div>
                    <div class="col-md-2">Remind Me</div>
                    <div class="col-md-2">Added By</div>
                    <div class="col-md-2">Processing</div>

                </b>
            </div>

            <div class="box-body">
                <!-- data -->

                <div class="row">
                    <div class="col-md-6">Request offer letter from CQU</div>
                    <div class="col-md-2"><i class="glyphicon glyphicon-ok"></i> (20/09/2015)</div>
                    <div class="col-md-2">Krita Maharjan</div>
                    <div class="col-md-2">
                        <div>
                            <a href="#" title="Edit" class="btn"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="#" title="Delete" class="btn"><i class="glyphicon glyphicon-trash"></i>
                                Delete</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">Create Payment invoice of Amount $1000</div>
                    <div class="col-md-2"><i class="glyphicon glyphicon-remove"></i></div>
                    <div class="col-md-2">Krita Maharjan</div>
                    <div class="col-md-2">
                        <div>
                            <a href="#" title="Edit" class="btn"><i class="glyphicon glyphicon-pencil"></i>Edit</a>
                            <a href="#" title="Delete" class="btn"><i class="glyphicon glyphicon-trash"></i>Delete</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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

@stop
