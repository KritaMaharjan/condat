<?php namespace App\Modules\Tenant\Controllers;

use App\Http\Requests;
use App\Modules\Tenant\Models\Agent;
use App\Modules\Tenant\Models\Client\ClientPayment;
use App\Modules\Tenant\Models\Invoice\Invoice;
use App\Modules\Tenant\Models\PaymentInvoiceBreakdown;
use Flash;
use DB;

use Illuminate\Http\Request;

class InvoiceController extends BaseController
{

    protected $request;/* Validation rules for user create and edit */
    protected $rules = [
        'short_name' => 'required|min:2|max:55',
        'phone' => 'required',
        'abn' => 'required',
        'acn' => 'required',
    ];

    function __construct(Invoice $invoice, Request $request, PaymentInvoiceBreakdown $payment_invoice)
    {
        $this->invoice = $invoice;
        $this->request = $request;
        $this->payment_invoice = $payment_invoice;
        parent::__construct();
    }

    /**
     * Assign payment to invoice
     */
    function postAssign($payment_id)
    {
        $assigned = $this->payment_invoice->assign($this->request->all(), $payment_id);
        if ($assigned) {
            \Flash::success('Payment assigned to invoice successfully!');
            return redirect()->back();
        }
    }

    function payments($invoice_id)
    {
        $data['invoice_id'] = $invoice_id;
        return view("Tenant::Invoice/payments", $data);
    }


    /**
     * Get all the payments through ajax request.
     *
     * @return JSON response
     */
    function getPaymentsData($invoice_id)
    {
        $payments = ClientPayment::where('client_id', $client_id)->select(['*']);

        $datatable = \Datatables::of($payments)
            ->addColumn('action', '<div class="btn-group">
                  <button class="btn btn-primary" type="button">Action</button>
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul role="menu" class="dropdown-menu">
                    <li><a href="http://localhost/condat/tenant/contact/2">Add payment</a></li>
                    <li><a href="http://localhost/condat/tenant/contact/2">View</a></li>
                    <li><a href="http://localhost/condat/tenant/contact/2">Edit</a></li>
                    <li><a href="http://localhost/condat/tenant/contact/2">Delete</a></li>
                  </ul>
                </div>')
            ->addColumn('invoice_id', 'Uninvoiced <button class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus-sign"></i> Assign to Invoice</button>')
            ->editColumn('date_paid', function ($data) {
                return format_date($data->date_paid);
            })
            ->editColumn('client_payment_id', function ($data) {
                return format_id($data->client_payment_id, 'P');
            });
        return $datatable->make(true);
    }

}
