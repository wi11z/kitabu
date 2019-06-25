@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">Cashflow Entity</h3>

            {{-- Debit Amount --}}
            <div class="table-responsive">
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
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td>
                                <b>
                                    Total
                                </b> 
                                </td>
                            <td>5000000</td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                      
                    {{-- Credit Amount --}}
                    &nbsp;
                    <div class="table-responsive">
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
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                            </tr>
                            <tr>
                                    <th scope="row"></th>
                                    <td>
                                        <b>
                                            Total
                                        </b> 
                                        </td>
                                    <td>500000</td>
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
                                <td>5000000</td>
                                </tr>
                                <tr>
                                <th scope="row">Credit total</th>
                                <td></td>
                                <td>500000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Net total</th>
                                    <td></td>
                                    <td>4500000</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection