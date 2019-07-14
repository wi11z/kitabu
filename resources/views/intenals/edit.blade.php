@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header text-center" style="background-color:DodgerBlue; color:aliceblue">
                        Edit Particular
                </div>
                <div class="card-body">
                <form method="POST" action="/edit_particular/{{$ledger->id}}">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">
                        <div class="form-group">
                            <label for="particular">Particular</label>
                        <input type="text" name="particular" class="form-control" id="particular" value="{{ $ledger->particular}}">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" id="amount" value="{{ $ledger->amount}}">
                        </div>
                        @if($ledger->type == "debit")
                            <div class="form-group">
                                <input type="radio" name="type" value="debit" checked="checked"> Debit &nbsp;
                                <input type="radio" name="type" value="credit"> Credit  
                            </div>
                        @else
                            <div class="form-group">
                                <input type="radio" name="type" value="debit"> Debit &nbsp;
                                <input type="radio" name="type" value="credit" checked="checked"> Credit  
                            </div>
                        @endif
                             <br> <br>
                        <div class="d-flex flex-row-reverse">
                            <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection