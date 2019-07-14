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
        $debit_ledgers = DB::table('ledgers')->where('type', 'debit')->orderBy('created_at', 'desc')->get();
        $debit_total = DB::table('ledgers')->where('type', 'debit')->sum('amount');

        // credit mechanism
        $credit_ledgers = DB::table('ledgers')->where('type', 'credit')->orderBy('created_at', 'desc')->get();
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
        return view('intenals.edit', [ 'ledger' => $ledger]);
    }

    // update ledger item
    public function update_ledger(Request $request, $id)
    {

        $ledger = DB::table('ledgers')->where('id', $id)->first();

        $this->validate($request, [
            'particular' => 'required',
            'amount' => 'required|numeric',
            'type' => 'required',
        ]);

        // store the previous ledger item
        DB::table('updated_ledgers')->insert([
            'ledger_id' => $ledger->id,
            'previous_particular' => $ledger->particular,
            'previous_amount' => $ledger->amount,
            'previous_type' => $ledger->type,
            'created_at' =>  $ledger->created_at,
            'updated_at' => \Carbon\Carbon::now()
        ]);

        // store the updates
        DB::table('ledgers')->where('id', $ledger->id)->update([
            'particular' => $request->input('particular'),
            'amount' => $request->input('amount'),
            'type' => $request->input('type'),
            'updated_at' =>  \Carbon\Carbon::now()
        ]);


        return redirect('/')->with('success', 'ledger item was successfully updated');
    }

    // delete ledger item
    public function delete_ledger($id)
    {
        $ledger = DB::table('ledgers')->where('id', $id)->delete();
        // $ledger->delete();

        return redirect('/')->with('success', 'ledger item was successfully deleted');
    }
}
