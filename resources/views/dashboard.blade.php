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
                                        <img src="{{ asset('assets/img/Builders.jpg') }}" class="img-fluid" alt="">
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
                                        <img src="{{ asset('assets/img/Projects.png') }}" class="img-fluid" alt="">
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
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="John Deo">
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
                <!-- Compliance Status Chart -->
                <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                    <div class="card mt-sm-5 mt-md-0" style="height: 400px;"> <!-- Set fixed height -->
                        <div class="card-header">
                            <h4>Compliance Status</h4>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <div class="text-center flex-grow-1 d-flex align-items-center justify-content-center">
                                <!-- Sparkline chart container with data-values -->
                                <div class="sparkline-pie d-inline" id="visitorChart" style="width: 100%; height: 100%;">
                                </div>
                            </div>
                            <ul class="p-t-30 list-unstyled">
                                <li class="padding-5"><span><i
                                            class="fa fa-circle m-r-5 col-red"></i></span>Non-Compliance<span
                                        class="float-right">33.7%</span></li>
                                <li class="padding-5"><span><i
                                            class="fa fa-circle m-r-5 col-blue"></i></span>Compliance<span
                                        class="float-right">50%</span></li>
                                <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-yellow"></i></span>In
                                    Review<span class="float-right">16.7%</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="col-12 col-md-6 col-lg-6" style="height: 400px;"> <!-- Set fixed height -->
                    <div class="card h-100"> <!-- Ensure card takes full height -->
                        <div class="card-header">
                            <h4>Bar Chart</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart2" style="width: 100%; height: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Data for the bar chart
            const data = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'My First Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            };

            // Configuration options
            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                },
            };

            // Get the canvas element and render the chart
            const ctx = document.getElementById('myChart2').getContext('2d');
            const myChart = new Chart(ctx, config);
        });
    </script>
@endpush
