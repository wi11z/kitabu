<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ledger;
use App\UpdatedLedger;

class LedgerController extends Controller
{


    public function setTime()
    {
        $time = \Carbon\Carbon::now();
        // $time->timezone = new DateTimeZone('Africa/Nairobi');
        return $time->now();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    // create ledger item
    public function create_ledger(Request $request)
    {

        $this->validate($request, [
            'particular' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required',
        ]);

        DB::table('ledgers')->insert([
            'particular' => $request->input('particular'),
            'amount' => $request->input('amount'),
            'type' => $request->input('type'),
            'created_at' =>  \Carbon\Carbon::now()
        ]);

        return redirect('/');
    }

    // show all available ledger items
    public function all_ledgers()
    {
        // debit mechanism
        $debit_ledgers = DB::table('ledgers')->where('type', 'debit')->get();
        $debit_total = DB::table('ledgers')->where('type', 'debit')->sum('amount');

        // credit mechanism
        $credit_ledgers = DB::table('ledgers')->where('type', 'credit')->get();
        $credit_total = DB::table('ledgers')->where('type', 'credit')->sum('amount');

        // Net total calculation
        $net_total = number_format(($debit_total - $credit_total), 2, ".", ",");

        return view('workspace', [
            'debit_ledgers' => $debit_ledgers,
            'credit_ledgers' => $credit_ledgers,
            'debit_total' => $debit_total,
            'credit_total' => $credit_total,
            'net_total' => $net_total,
            ]);
    }

    // show one ledger item
    public function view_ledger($id)
    {
        $ledger = Ledger::find($id);
        return view('', [ 'ledger' => $ledger]);
    }

    //show update ledger table
    public function edit_ledger($id)
    {

        $ledger = Ledger::find($id);
        return view('', [ 'ledger' => $ledger]);
    }

    // update ledger item
    public function update_ledger(Request $request, $id)
    {

        $ledger = Ledger::find('id');

        $this->validate($request, [
            'particular' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required',
        ]);

        // store the previous ledger item
        $updated_ledger = new UpdatedLedger;
        $updated_ledger->ledger_id = $ledger->id;
        $updated_ledger->previous_particular = $ledger->particular;
        $updated_ledger->previous_amount = $ledger->amount;
        $updated_ledger->previous_type = $ledger->type;
        $updated_ledger->save();

        // store the updates
        $ledger->particular = $request->input('particular');
        $ledger->amount = $request->input('amount');
        $ledger->type = $request->input('type');
        $ledger->save();

        return view('')->with('success', 'ledger item was successfully created');
    }

    // delete ledger item
    public function delete_ledger($id)
    {
        $ledger = Ledger::find($id);
        $ledger->delete();

        return view('')->with('success', 'ledger item was successfully created');
    }
}
