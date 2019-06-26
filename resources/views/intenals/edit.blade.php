@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header text-center" style="background-color:DodgerBlue; color:aliceblue">
                        Add New Particular
                </div>
                <div class="card-body">
                    <form method="" action="">
                        <div class="form-group">
                            <label for="particular">Particular</label>
                            <input type="text" name="particular" class="form-control" id="particular" placeholder="Particular">
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount">
                        </div>
                        <div class="form-group">
                            <input type="radio" name="type" value="debit"> Debit &nbsp;
                            <input type="radio" name="type" value="credit"> Credit
                        </div> <br> <br>
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