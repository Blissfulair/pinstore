@extends('include.admindashboard')

@section('body')
 <div class="page-content">
    <div class="container">
 	<div class="gaps-1x mgb-0-5x d-lg-none d-none d-sm-block"></div>


        <div class="card content-area content-area-mh">
            <div class="card-innr">
                <div class="card-head has-aside">
                    <h4 class="card-title">All Transactions</h4>
                    <div class="card-opt">
                        <ul class="btn-grp btn-grp-block guttar-20px">
                            <li>
                                <a href="#" class="btn btn-sm btn-auto btn-primary" data-toggle="modal" data-target="#addTnx">
                                    <em class="fas fa-plus-circle"></em><span>Add <span class="d-none d-sm-inline-block">Tokens</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="page-nav-wrap">
                    <div class="page-nav-bar justify-content-between bg-lighter">
                        <div class="page-nav w-100 w-lg-auto">
                            <ul class="nav">
                                <li class="nav-item"><a class="nav-link" href="http://localhost/tokenlite/admin/transactions/pending">Pending</a></li>
                                <li class="nav-item "><a class="nav-link" href="http://localhost/tokenlite/admin/transactions/approved">Approved</a></li>
                                <li class="nav-item "><a class="nav-link" href="http://localhost/tokenlite/admin/transactions/bonuses">Bonuses</a></li>
                                <li class="nav-item  active"><a class="nav-link" href="http://localhost/tokenlite/admin/transactions">All</a></li>
                            </ul>
                        </div>
                        <div class="search flex-grow-1 pl-lg-4 w-100 w-sm-auto">
                            <form action="http://localhost/tokenlite/admin/transactions" method="GET" autocomplete="off">
                                <div class="input-wrap">
                                    <span class="input-icon input-icon-left"><em class="ti ti-search"></em></span>
                                    <input type="search" class="input-solid input-transparent" placeholder="Tranx ID to quick search" value="" name="s">
                                </div>
                            </form>
                        </div>
                                            </div>

                                    </div>


                <table class="data-table admin-tnx">
                    <thead>
                        <tr class="data-item data-head">
                            <th class="data-col tnx-status dt-tnxno">Tranx ID</th>
                            <th class="data-col dt-token">Tokens</th>
                            <th class="data-col dt-amount">Amount</th>
                            <th class="data-col dt-usd-amount">Base Amount</th>
                            <th class="data-col pm-gateway dt-account">Pay From</th>
                            <th class="data-col dt-type tnx-type">Type</th>
                            <th class="data-col"></th>
                        </tr>
                    </thead>
                    <tbody>
                                                                        <tr class="data-item" id="tnx-item-2">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div id="ds-2" data-toggle="tooltip" data-placement="top" title="Canceled" class="data-state data-state-canceled">
                                        <span class="d-none">Canceled</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX000002</span>
                                        <span class="sub sub-date">07 Jun, 2020 06:33 PM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">+125</span>
                                <span class="sub sub-symbol">TLE</span>
                            </td>
                            <td class="data-col dt-amount">

                                <span class="lead amount-pay">20</span>
                                <span class="sub sub-symbol">BTC <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 TLE = 0.2 BTC"></em></span>
                                                            </td>
                            <td class="data-col dt-usd-amount">

                                <span class="lead amount-receive">20</span>
                                <span class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 TLE = 0.2 USD"></em></span>
                                                            </td>
                            <td class="data-col dt-account">
                                <span class="sub sub-s2 pay-with">
                                                                            Pay with BTC
                                                                                                            </span>
                                                                    <span class="sub sub-email">UD00004 <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="test@test.com"></em></span>
                                                            </td>
                            <td class="data-col data-type">
                                <span class="dt-type-md badge badge-outline badge-md badge-2 badge-success">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-md badge-2 badge-success">P</span>
                            </td>
                            <td class="data-col text-right">

                                <div class="relative d-inline-block">
                                    <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                    <div class="toggle-class dropdown-content dropdown-content-top-left">
                                        <ul id="more-menu-2" class="dropdown-list">
                                            <li><a href="http://localhost/tokenlite/admin/transactions/view/2">
                                                <em class="ti ti-eye"></em> View Details</a></li>
                                                                                                                                                                                                                                                                                                                    </ul>
                                    </div>
                                </div>
                                                            </td>
                        </tr>
                                                                        <tr class="data-item" id="tnx-item-1">
                            <td class="data-col dt-tnxno">
                                <div class="d-flex align-items-center">
                                    <div id="ds-1" data-toggle="tooltip" data-placement="top" title="Approved" class="data-state data-state-approved">
                                        <span class="d-none">Approved</span>
                                    </div>
                                    <div class="fake-class">
                                        <span class="lead tnx-id">TNX000001</span>
                                        <span class="sub sub-date">30 Apr, 2020 08:06 AM</span>
                                    </div>
                                </div>
                            </td>
                            <td class="data-col dt-token">
                                <span class="lead token-amount">+23</span>
                                <span class="sub sub-symbol">TLE</span>
                            </td>
                            <td class="data-col dt-amount">

                                <span class="lead amount-pay">4.6</span>
                                <span class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 TLE = 0.2 USD"></em></span>
                                                            </td>
                            <td class="data-col dt-usd-amount">

                                <span class="lead amount-receive">4.6000000000000005</span>
                                <span class="sub sub-symbol">USD <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="1 TLE = 0.2 USD"></em></span>
                                                            </td>
                            <td class="data-col dt-account">
                                <span class="sub sub-s2 pay-with">
                                                                            Pay via Paypal
                                                                                <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="12344"></em>
                                                                                                            </span>
                                                                    <span class="sub sub-email">UD00004 <em class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="test@test.com"></em></span>
                                                            </td>
                            <td class="data-col data-type">
                                <span class="dt-type-md badge badge-outline badge-md badge-1 badge-success">Purchase</span>
                                <span class="dt-type-sm badge badge-sq badge-outline badge-md badge-1 badge-success">P</span>
                            </td>
                            <td class="data-col text-right">

                                <div class="relative d-inline-block">
                                    <a href="#" class="btn btn-light-alt btn-xs btn-icon toggle-tigger"><em class="ti ti-more-alt"></em></a>
                                    <div class="toggle-class dropdown-content dropdown-content-top-left">
                                        <ul id="more-menu-1" class="dropdown-list">
                                            <li><a href="http://localhost/tokenlite/admin/transactions/view/1">
                                                <em class="ti ti-eye"></em> View Details</a></li>
                                                                                                                                    <li><a href="javascript:void(0)" class="tnx-action" data-type="refund" data-id="1">
                                                <em class="fas fa-reply"></em> Refund</a></li>
                                                                                                                                                                            </ul>
                                    </div>
                                </div>
                                                            </td>
                        </tr>
                                            </tbody>
                </table>

                            </div>
        </div>
    </div>
</div>
@stop


