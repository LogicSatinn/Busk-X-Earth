@extends('layouts.backend')

@section('title')

    DashBoard

@endsection

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Welcome, {{auth()->user()->name}} </h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                    <label for="reportrange" class="sr-only">Date Ranges</label>
                                    <div id="reportrange" class="px-2 py-2 text-muted">
                                        <span class="small"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm"><span
                                            class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                    <button type="button" class="btn btn-sm mr-2"><span
                                            class="fe fe-filter fe-16 text-muted"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow bg-primary text-white border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary-light">
                            <i class="fe fe-16 fe-bold text-white mb-0"></i>
                          </span>
                                        </div>
                                        <div class="col pr-0">
                                            <p class="small text-muted mb-0">Bitcoin</p>
                                            <span class="h3 mb-0 text-white">$51,537.33</span>
                                            <span class="small text-muted">+15.5%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-compass text-white mb-0"></i>
                          </span>
                                        </div>
                                        <div class="col pr-0">
                                            <p class="small text-muted mb-0">Ether</p>
                                            <span class="h3 mb-0">$4,091.20</span>
                                            <span class="small text-success">+0.11%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-check-circle text-white mb-0"></i>
                          </span>
                                        </div>
                                        <div class="col">
                                            <p class="small text-muted mb-0">Confirmed Transactions</p>
                                            <div class="row align-items-center no-gutters">
                                                <div class="col-auto">
                                                    <span class="h3 mr-2 mb-0"> 86.6% </span>
                                                </div>
                                                <div class="col-md-12 col-lg">
                                                    <div class="progress progress-sm mt-2" style="height:3px">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-3 text-center">
                          <span class="circle circle-sm bg-primary">
                            <i class="fe fe-16 fe-dollar-sign text-white mb-0"></i>
                          </span>
                                        </div>
                                        <div class="col">
                                            <p class="small text-muted mb-0">BitcoinCash</p>
                                            <span class="h3 mb-0">$471.55</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end section -->

                    <div class="my-4">
                        <div id="lineChart"></div>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <p class="card-title"><strong>Unconfirmed Transactions</strong></p>

                                        <div class="chart-box mb-3" style="min-height:180px;">
                                            <div id="customAngle"></div>
                                        </div>

                                        <p class="card-text">These are the unconfirmed transactions in the network. They
                                            either had no resources to finish a block or the nodes didn't agree that
                                            these transactions were legit</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn mb-2 btn-outline-primary" data-toggle="modal"
                                                data-target=".modal-full">View
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade modal-full" tabindex="-1" role="dialog"
                                             aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <button aria-label="" type="button" class="close px-2" data-dismiss="modal"
                                                    aria-hidden="true">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <p>{{$unconfirmedTransactions}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- small modal -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <p class="card-title"><strong>Latest Block</strong></p>

                                        <div class="chart-widget">
                                            <div id="gradientRadial"></div>
                                        </div>

                                        <p class="card-text">This is the latest block that has been created in the
                                            network. All blocks are in the network but this method displays the most recent. You should refresh the page to view the next recent block.</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn mb-2 btn-outline-primary" data-toggle="modal"
                                                data-target=".modal-full">View
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade modal-full" tabindex="-1" role="dialog"
                                             aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <button aria-label="" type="button" class="close px-2" data-dismiss="modal"
                                                    aria-hidden="true">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <p>{{$latestBlock}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- small modal -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <p class="card-title"><strong>Stats</strong></p>

                                        <div class="chart-widget mt-3 mb-5">
                                            <div id="columnChartWidget" width="300" height="200"></div>
                                        </div>

                                        <p class="card-text">View the data behind Blockchain's stats. This method can be
                                            used to get and manipulate data behind Blockchain.com's stats..</p>
                                        <button type="button" class="btn mb-2 btn-outline-primary" data-toggle="modal"
                                                data-target=".modal-full">View
                                        </button>
                                        <div class="modal fade modal-full" tabindex="-1" role="dialog"
                                             aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <button aria-label="" type="button" class="close px-2" data-dismiss="modal"
                                                    aria-hidden="true">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <p> {{$stats}} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- small modal -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Simple Query API</h5>
                                <p class="card-text">Simple plain text API for querying blockchain data like hash-rate, difficulty, block height and more.</p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Query</th>
                                        <th>API</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="col">1331</th>
                                        <td>Average Transaction Size (1000 Blocks)</td>
                                        <td>{{$avgtxsize}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1156</th>
                                        <td>Average Transaction Value (1000 Default)</td>
                                        <td>{{$avgtxvalue}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1038</th>
                                        <td>Average Transaction Number (100 Default)</td>
                                        <td>{{$avgtxnumber}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1227</th>
                                        <td>Latest Hash of the latest block</td>
                                        <td>{{$latesthash}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1427</th>
                                        <td>Hashes To Win needed to solve a block</td>
                                        <td>{{$hashestowin}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1027</th>
                                        <td>Block Height | Current Block Height in the longest chain</td>
                                        <td>{{$blockcount}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1229</th>
                                        <td>Current Difficulty target as a decimal number</td>
                                        <td>{{$difficulty}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1289</th>
                                        <td>Interval</td>
                                        <td>{{$interval}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">6227</th>
                                        <td>Total Bitcoins in Circulation</td>
                                        <td>{{$totalbc}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">7827</th>
                                        <td>ETA</td>
                                        <td>{{$eta}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1787</th>
                                        <td>Probability</td>
                                        <td>{{$probability}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="list-group list-group-flush my-n3">
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-box fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Package has uploaded successfull</strong></small>
                                        <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                                        <small class="badge badge-pill badge-light text-muted">1m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-download fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Widgets are updated successfull</strong></small>
                                        <div class="my-0 text-muted small">Just create new layout Index, form, table
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">2m ago</small>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-inbox fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Notifications have been sent</strong></small>
                                        <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                                        <small class="badge badge-pill badge-light text-muted">30m ago</small>
                                    </div>
                                </div> <!-- / .row -->
                            </div>
                            <div class="list-group-item bg-transparent">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <span class="fe fe-link fe-24"></span>
                                    </div>
                                    <div class="col">
                                        <small><strong>Link was attached to menu</strong></small>
                                        <div class="my-0 text-muted small">New layout has been attached to the menu
                                        </div>
                                        <small class="badge badge-pill badge-light text-muted">1h ago</small>
                                    </div>
                                </div>
                            </div> <!-- / .row -->
                        </div> <!-- / .list-group -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog"
             aria-labelledby="defaultModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body px-5">
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-success justify-content-center">
                                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Control area</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Activity</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Droplet</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Upload</p>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Users</p>
                            </div>
                            <div class="col-6 text-center">
                                <div class="squircle bg-primary justify-content-center">
                                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                                </div>
                                <p>Settings</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- main -->
@endsection
