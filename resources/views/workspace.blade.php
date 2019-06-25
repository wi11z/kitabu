@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center">CASH FLOW ENTITY</h3>
            <div class="d-flex flex-row-reverse">
                <a class="btn btn-primary p-2" href="#" role="button">Add Particular +</a>
            </div>
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
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                                <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                                <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                                <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                            </td>
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
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                                    <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>
                                        <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>
                                        <a class="btn btn-success btn-sm" href="#" role="button">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="#" role="button">Delete</a>
                                </td>
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