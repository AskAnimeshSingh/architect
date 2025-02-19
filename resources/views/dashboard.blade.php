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
                                        {{-- <th>Priority</th> --}}
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td colspan="7" class="text-center">No Data Available</td>
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
                            <h4>Progress Report</h4>
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
                labels: ['Planning', 'Design', 'Review', 'Approval', 'Construction'],
                datasets: [{
                        label: 'Completed',
                        data: [45, 35, 30, 25, 20],
                        backgroundColor: 'rgba(54, 92, 235, 1)', // Dark Blue
                        borderColor: 'rgba(54, 92, 235, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'In Progress',
                        data: [15, 25, 18, 15, 12],
                        backgroundColor: 'rgba(135, 206, 250, 1)', // Light Blue
                        borderColor: 'rgba(135, 206, 250, 1)',
                        borderWidth: 1
                    }
                ]
            };

            // Configuration options
            const config = {
                type: 'bar',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 60
                        }
                    },
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                },
            };

            // Get the canvas element and render the chart
            const ctx = document.getElementById('myChart2').getContext('2d');
            new Chart(ctx, config);
        });
    </script>
@endpush
