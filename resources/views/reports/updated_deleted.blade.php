@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">OVERALL REPORT</h3>
            <div class="d-flex flex-row-reverse">
            <a href="{{ route('download.report')}}" class="btn btn-primary p-2" role="button">Download Report</a>
            </div>
            {{-- Updates Reports --}}
            <div class="">
                <table class="table table-secondary">
                        <thead class="thead-light">
                            <tr class="text-center"> 
                              <b>
                                  UPDATED PARTICULARS
                              </b>  
                            </tr>
                            <tr>
                                <th scope="col">Particulars</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Type</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Updated at</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($updated_ledgers as $updated_ledger)
                            <tr>
                                <td>{{ $updated_ledger->previous_particular}}</td>
                                <td>{{ number_format($updated_ledger->previous_amount, 2, ".", ",")}}</td>
                                <td>{{ $updated_ledger->previous_type}}</td>
                                <td>{{ $updated_ledger->created_at}}</td>
                                <td>{{ $updated_ledger->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
                      
                    {{-- Deletes Reports --}}
                    &nbsp;
                    <div class="">
                        <table class="table table-secondary">
                            <thead class="thead-light">
                                <tr class="text-center table-danger"> 
                                    <b>
                                        DLELETED PARTICULARS
                                    </b>  
                                </tr>
                                <tr>
                                        <th scope="col">Particulars</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Deleted at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach($deleted_ledgers as $deleted_ledger)
                                    <tr>
                                        <td>{{ $deleted_ledger->particular}}</td>
                                        <td>{{ number_format($deleted_ledger->amount, 2, ".", ",")}}</td>
                                        <td>{{ $deleted_ledger->type}}</td>
                                        <td>{{ $deleted_ledger->created_at}}</td>
                                        <td>{{ $deleted_ledger->deleted_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection