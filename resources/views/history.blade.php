@extends('layouts.home')

@section('content')
    <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
        <div class="ps-md-3 ps-lg-0 mt-md-2 py-md-4">
            <div class="row">
                <div class="col-xl-7 col-lg-8">
                    @if(session()->has('INVESTMENT_SUCCESS'))
                        <div class="alert alert-success">{{ session('INVESTMENT_SUCCESS') }}</div>
                    @endif
                    <h5>Transaction history</h5>
                    <!-- Deposit History       -->
                    <div class="col-xl-12 col-lg-12 mt-5 mb-5">
                        <h6 class="text-center">Deposit History</h6>
                    </div>
                    <div class="col-md-12 mt-3"><div>
                        <table class="table" style="overflow-x:auto;">
                            <thead class="thead-light">
                                <tr align="center">
                                    <th style="color:#347DB9">Amount</th>
                                    <th style="color:#347DB9">Transaction Date</th>
                                    <th style="color:#347DB9">Deposit Status</th>
                                    <th style="color:#347DB9">Payment Currency</th>
                                    <th style="color:#347DB9">Wallet Address</th>
                                    <th style="color:#347DB9">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($depositTransactions))
                                    @foreach ($depositTransactions as $tx)
                                        <tr>
                                            <td> ${{ $tx->amountUsd }} </td>
                                            <td>{{ $tx->updated_at }}</td>
                                            <td>{{ $tx->status }}</td>
                                            <td>{{ $tx->currency }}</td>
                                            <td>{{ $tx->address }}</td>
                                            <td> <a href="/dashboard/pay/{{ $tx->tx_hash }}" class="btn btn-info btn-sm">{{ $tx->status === "pending" ? "Complete" : "view" }}</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td>No Deposits yet</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>

                    <div class="col-xl-12 col-lg-12 mt-5 mb-5">
                        <h6 class="text-center">Investment History</h6>
                    </div>
                    <!-- Investment History -->
                    <div class="col-md-12 mt-3"><div>
                    <table class="table" style="overflow-x:auto;">
                        <thead class="thead-light">
                            <tr align="center">
                                <th style="color:#347DB9">Amount</th>
                                <th style="color:#347DB9">Date Of Activation</th>
                                <th style="color:#347DB9">Investment Plan</th>
                                <th style="color:#347DB9">Transaction Status</th>
                                <!-- <th style="color:#347DB9">Help</th> -->
                                {{-- <th style="color:#347DB9">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($investmentTransactions))
                                @foreach ($investmentTransactions as $tx)
                                    <tr>
                                        <td> ${{ $tx->amountUsd }} </td>
                                        <td>{{ $tx->updated_at }}</td>
                                        <td>{{ $tx->plan->name }}</td>
                                        <td>{{ $tx->status }}</td>
                                        {{-- <td> <form method="POST" action="backend/actions/deletedepo.php"><input type="hidden" name="depositid" value="6581270339cbd"> <button type="submit" name="delete" class="btn" style="background-color:red;color:white"><i class="fas fa-trash-alt"></i> Delete</button></form></td> --}}
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td>No Investments yet</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Withdrwal History       -->
            <div class="col-xl-12 col-lg-12 mt-5 mb-5">
                <h6 class="text-center">Withdrawal History</h6>
            </div>
            <div class="col-md-12 mt-3"><div>
                <table class="table" style="overflow-x:auto;">
                    <thead class="thead-light">
                        <tr align="center">
                            <th style="color:#347DB9">Amount</th>
                            <th style="color:#347DB9">Date of request</th>
                            <th style="color:#347DB9">Withdrawl Status</th>
                            <th style="color:#347DB9">Payment Mode</th>
                            <th style="color:#347DB9">Wallet Address</th>
                            <th style="color:#347DB9">Help</th>
                            <th style="color:#347DB9">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($withdrawalTransactions))
                            @foreach ($withdrawalTransactions as $tx)
                                <tr>
                                    <td> ${{ $tx->amountUsd }} </td>
                                    <td>{{ $tx->updated_at }}</td>
                                    <td>{{ $tx->status }}</td>
                                    <td>{{ $tx->currency }}</td>
                                    <td>{{ $tx->address }}</td>
                                    <td>{{ "Use the chat below" }}</td>
                                    <td> <form method="POST" action="backend/actions/deletedepo.php"><input type="hidden" name="depositid" value="6581270339cbd"> <button type="submit" name="delete" class="btn" style="background-color:red;color:white"><i class="fas fa-trash-alt"></i> Delete</button></form></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>No Withdrawal yet</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
