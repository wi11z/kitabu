<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ledger;
use App\UpdatedLedger;

class LedgerController extends Controller
{
    // show a create ledger form
    public function create_form(){
        return view();
    }

    // create ledger item
    public function create_ledger(Request $request){

        $this->validate($request, [
            'particular' => 'required',
            'amount' => 'required|number',
            'type' => 'required',
        ]);

        $ledger = new Ledger;
        $ledger->particular = $request->input('particular');
        $ledger->amount = $request->input('amount');
        $ledger->type = $request->input('type');
        $ledger->save();
    }

    // show all available ledger items
    public function all_ledgers(){

        $ledgers = Ledger::all();
        return view('', [ 'ledgers' => $ledgers]);
    }

    // show one ledger item
    public function view_ledger($id){

        $ledger = Ledger::find($id);
        return view('', [ 'ledger' => $ledger]);
    }

    //show update ledger table
    public function edit_ledger($id){

        $ledger = Ledger::find($id);
        return view('', [ 'ledger' => $ledger]);
    }

    // update ledger item
    public function update_ledger(Request $request, $id){

        $ledger = Ledger::find('id');

        $this->validate($request, [
            'particular' => 'required',
            'amount' => 'required|number',
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
    }

    // delete ledger item
    public function delete_ledger($id){
        $ledger = Ledger::find($id);
        $ledger->delete();
    }
}
