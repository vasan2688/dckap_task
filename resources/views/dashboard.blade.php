@extends('layouts.app')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
					<div class="page-header-title mb-3">
						<div class="d-inline">
							<h4>{{ Auth::user()->role }} Dashboard</h4>
						</div>
					</div>
                    <div class="page-body">
                        <div class="row">
							
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">New Customer</p>
                                                <h4 class="m-b-0">852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Income</p>
                                                <h4 class="m-b-0">$5,852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Ticket</p>
                                                <h4 class="m-b-0">42</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Orders</p>
                                                <h4 class="m-b-0">$5,242</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Total Leads</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-5"></i> 18% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>76.12%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>16.40%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>4.56%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="tot-lead" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Total Vendors</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-pink f-w-500"><i class="feather icon-chevrons-down m-r-15"></i> 24% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>68.52%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>28.90%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>13.50%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="tot-vendor" height="150"></canvas>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Invoice Generate</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                <li><i class="fa fa-trash close-card"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <p class="text-c-green f-w-500"><i class="feather icon-chevrons-up m-r-15"></i> 20% High than last month</p>
                                        <div class="row">
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Overall</p>
                                                <h5>68.52%</h5>
                                            </div>
                                            <div class="col-4 b-r-default">
                                                <p class="text-muted m-b-5">Monthly</p>
                                                <h5>28.90%</h5>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-muted m-b-5">Day</p>
                                                <h5>13.50%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="invoice-gen" height="150"></canvas>
                                </div>
                            </div>


                            </div>  
                        </div>
                    </div>
                </div>
                <div id="styleSelector">
                </div>
            </div>
        </div>
    </div>
@endsection
