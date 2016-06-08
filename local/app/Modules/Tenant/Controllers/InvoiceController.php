<?php namespace App\Modules\Tenant\Controllers;

use App\Http\Requests;
use App\Modules\Tenant\Models\Agent;
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

}
