@extends('architectpanel.layouts.master')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                    <div class="card" style="width: 65%; height: 150px;">
                        <div class="card-statistic-4 d-flex align-items-center">
                            <div class="row w-100">
                                <div class="col-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5>Total Builders: 2</h5>
                                    </div>
                                </div>
                                <div class="col-6 pl-0 text-right">
                                    <div class="banner-img">
                                        <img src="{{asset('assets/img/Builders.jpg')}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 mb-3 d-flex justify-content-center">
                    <div class="card" style="width: 65%; height: 150px;">
                        <div class="card-statistic-4 d-flex align-items-center">
                            <div class="row w-100">
                                <div class="col-6 pr-0 pt-3">
                                    <div class="card-content">
                                        {{-- Content for Builders --}}
                                        <h5>Total Projects: 5</h5>
                                    </div>
                                </div>
                                <div class="col-6 pl-0 text-right">
                                    <div class="banner-img">
                                        <img src="{{asset('assets/img/Projects.png')}}" class="img-fluid" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- chart starts here --}}
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Projects</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Project Name</th>
                                        <th>Members</th>
                                        <th>Task Status</th>
                                        <th>Assigh Date</th>
                                        <th>Due Date</th>
                                        <th>Priority</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-1">
                                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Architect Panel</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list m-b-0 m-b-0">
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-8.png" alt="user"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Animesh Singh"></li>
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-9.png" alt="user"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Satyendra Kumar"></li>

                                                <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-text">10%</div>
                                            <div class="progress" data-height="6">
                                                <div class="progress-bar bg-success" data-width="50%"></div>
                                            </div>
                                        </td>
                                        <td>2025-02-18</td>
                                        <td>2026-03-28</td>
                                        <td>
                                            <div class="badge badge-success">High</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-2">
                                                <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Redesign homepage</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list m-b-0 m-b-0">
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-1.png" alt="user"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Wildan Ahdian"></li>
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-2.png" alt="user"
                                                        data-toggle="tooltip" title="" data-original-title="John Deo">
                                                </li>
                                                <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-text">40%</div>
                                            <div class="progress" data-height="6">
                                                <div class="progress-bar bg-danger" data-width="40%"></div>
                                            </div>
                                        </td>
                                        <td>2017-07-14</td>
                                        <td>2018-07-21</td>
                                        <td>
                                            <div class="badge badge-danger">High</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td class="p-0 text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup"
                                                    class="custom-control-input" id="checkbox-3">
                                                <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td>Backup database</td>
                                        <td class="text-truncate">
                                            <ul class="list-unstyled order-list m-b-0 m-b-0">
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-3.png" alt="user"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Wildan Ahdian"></li>
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-4.png" alt="user"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="John Deo"></li>
                                                <li class="team-member team-member-sm"><img class="rounded-circle"
                                                        src="assets/img/users/user-5.png" alt="user"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Sarah Smith"></li>
                                                <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span>
                                                </li>
                                            </ul>
                                        </td>
                                        <td class="align-middle">
                                            <div class="progress-text">55%</div>
                                            <div class="progress" data-height="6">
                                                <div class="progress-bar bg-purple" data-width="55%"></div>
                                            </div>
                                        </td>
                                        <td>2019-07-25</td>
                                        <td>2019-08-17</td>
                                        <td>
                                            <div class="badge badge-info">Average</div>
                                        </td>
                                        <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              {{-- charts end here --}}
                {{-- circle charts starts --}}
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card mt-sm-5 mt-md-0">
                        <div class="card-header">
                            <h4>Visitors</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="donutChart"></canvas>
                            <ul class="p-t-30 list-unstyled">
                                <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-black"></i></span>Search
                                    Engines<span class="float-right">30%</span></li>
                                <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-green"></i></span>Direct
                                    Click<span class="float-right">50%</span></li>
                                <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-orange"></i></span>Video
                                    Click<span class="float-right">20%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                              {{-- circle charts ends --}}
                              <div class="col-12 col-md-6 col-lg-6">
                                <div class="card">
                                  <div class="card-header">
                                    <h4>Pie Chart</h4>
                                  </div>
                                  <div class="card-body">
                                    <div class="text-center">
                                      <div class="sparkline-pie d-inline"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>




            </div>
    </div>
    </section>
    </div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById("donutChart").getContext("2d");

        // Fetching data dynamically from Blade template
        var data = {
            labels: ["Search Engines", "Direct Click", "Video Click"],
            datasets: [{
                data: [{{ $searchEngines ?? 30 }}, {{ $directClick ?? 50 }}, {{ $videoClick ?? 20 }}],
                backgroundColor: ["#f44336", "#4caf50", "#ff9800"],
            }]
        };

        var donutChart = new Chart(ctx, {
            type: "doughnut",
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                }
            }
        });

        // Update chart dynamically if values change in Blade
        function updateChart(newData) {
            donutChart.data.datasets[0].data = newData;
            donutChart.update();
        }

        // Example of updating chart dynamically
        setInterval(() => {
            fetch("/api/getChartData") // Adjust this URL to your Laravel route
                .then(response => response.json())
                .then(newData => {
                    updateChart([newData.searchEngines, newData.directClick, newData.videoClick]);
                });
        }, 5000); // Refresh data every 5 seconds (Adjust as needed)
    });
</script>
  
@endpush