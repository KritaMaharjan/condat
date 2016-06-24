<?php namespace App\Modules\Tenant\Controllers;

use App\Http\Requests;
use App\Modules\Tenant\Models\Institute\Institute;
use Flash;
use DB;

use Illuminate\Http\Request;

class AddressController extends BaseController
{

    protected $request;

    function __construct(Request $request)
    {
        $this->request = $request;
        parent::__construct();
    }

    /**
     * Get all the contacts through ajax request.
     *
     * @return JSON response
     */
    function getData($institute_id)
    {
        $institutes = Institute::join('institute_addresses', 'institutes.institution_id', '=', 'institute_addresses.institute_id')
            ->leftJoin('addresses', 'addresses.address_id', '=', 'institute_addresses.address_id')
            ->leftJoin('institute_phones', 'addresses.address_id', '=', 'institute_phones.address_id')
            ->leftJoin('phones', 'phones.phone_id', '=', 'institute_phones.phone_id')
            ->select(['institute_addresses.institute_address_id as address_id', 'addresses.state', 'institute_addresses.email', 'phones.number', DB::raw('CONCAT(addresses.street, ", ", addresses.suburb) AS address')])
            ->where('institutes.institution_id', $institute_id);

        $datatable = \Datatables::of($institutes)
            ->addColumn('action', function ($data) {
                  return '<button type="button" class="btn btn-primary">Action</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a data-toggle="modal" data-target="#condat-modal" data-url="'.route('tenant.address.edit', $data->address_id).'"><i class="glyphicon glyphicon-plus-sign"></i> Edit</a></li>
                    <li><a href="{{ route( \'tenant.address.destroy\', $address_id) }}">Delete</a></li>
                  </ul>
                </div>';
                });
        return $datatable->make(true);
    }

    /**
     * Assign payment to invoice
     */
    function assignInvoice($payment_id, $application_id)
    {
        $data['invoice_array'] = $this->invoice->getList($application_id);
        $data['payment_id'] = $payment_id;
        return view("Tenant::Address/form", $data);
    }
}
