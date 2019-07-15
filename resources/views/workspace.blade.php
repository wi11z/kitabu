@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">CASH FLOW ENTITY</h3>
            <div class="d-flex flex-row-reverse">
            <a href="/add_particular" class="btn btn-primary p-2" role="button">Add Particular +</a>
            </div>
            {{-- Debit Amount --}}
            <div class="">
                <table class="table table-secondary">
                        <thead class="thead-light">
                            <tr class="text-center"> 
                              <b>
                                  DEBIT
                              </b>  
                            </tr>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Particulars</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($debit_ledgers as $debit_ledger)
                            <tr>
                                @if($debit_ledger->updated_at == NULL)
                                    <th scope="row">{{ $debit_ledger->created_at}}</th>
                                @else
                                    <th scope="row">{{ $debit_ledger->updated_at}}</th>
                                @endif
                                <td>{{ $debit_ledger->particular}}</td>
                                <td>{{ number_format($debit_ledger->amount, 2, ".", ",")}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm">
                                            <a class="btn btn-success btn-sm" href="/edit_particular/{{$debit_ledger->id}}" role="button">Edit</a> 
                                        </div>
                                        <div class="col-sm">
                                            <form action="/delete_particular/{{$debit_ledger->id}}" method="POST">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                        
                                    </div>     
                                </td>
                            </tr>
                            @endforeach
                          <tr>
                            <th scope="row"></th>
                            <td >
                                <b>
                                    Total
                                </b> 
                            </td>
                            <td>{{ number_format($debit_total, 2, ".", ",")}}</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                      
                    {{-- Credit Amount --}}
                    &nbsp;
                    <div class="">
                        <table class="table table-secondary">
                            <thead class="thead-light">
                                <tr class="text-center"> 
                                    <b>
                                        CREDIT
                                    </b>  
                                </tr>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Particulars</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                           @foreach($credit_ledgers as $credit_ledger)     
                                <tr>
                                    @if($credit_ledger->updated_at == NULL)
                                        <th scope="row">{{$credit_ledger->created_at}}</th>
                                    @else
                                        <th scope="row">{{$credit_ledger->updated_at}}</th>
                                    @endif
                                    <td>{{$credit_ledger->particular}}</td>
                                    <td>{{number_format($credit_ledger->amount, 2, ".", ",")}}</td>
                                    <td>
                                        <div class="row">
                                                <div class="col-sm">
                                                    <a class="btn btn-success btn-sm" href="/edit_particular/{{$credit_ledger->id}}" role="button">Edit</a> 
                                                </div>
                                                <div class="col-sm">
                                                    <form action="/delete_particular/{{$credit_ledger->id}}" method="POST">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </div>
                                                
                                            </div> 
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                    <th scope="row"></th>
                                    <td><b>Total</b> </td>
                                    <td>{{number_format($credit_total, 2, ".", ",")}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    {{-- Total amount view --}}
                    &nbsp;
                    <div class="table-responsive">
                        <table class="table table-secondary">
                            <thead class="thead-light">
                                <tr class="text-center"> 
                                    <b>
                                        TOTAL AMOUNT
                                    </b>  
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">Debit total</th>
                                <td></td>
                                <td class="d-flex flex-row-reverse">{{number_format($debit_total, 2, ".", ",")}}</td>
                                </tr>
                                <tr>
                                <th scope="row">Credit total</th>
                                <td></td>
                                <td class="d-flex flex-row-reverse">{{number_format($credit_total, 2, ".", ",")}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Net total</th>
                                    <td></td>
                                    <td class="d-flex flex-row-reverse">{{$net_total}}</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection