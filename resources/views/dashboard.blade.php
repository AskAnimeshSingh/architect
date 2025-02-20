@extends('architectpanel.layouts.master')
<style>
    .chart-container {
        width: 100%;
        max-width: 350px;
        / ✅ Adjust width /
        height: 260px;
        / ✅ Ensure proper height /
        margin: auto;
    }

    canvas {
        width: 100% !important;
        height: 100% !important;
    }
</style>
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <!-- Total Builders Card -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                    <div class="card" style="width: 100%; height: 180px;">
                        <div class="card-statistic-4 d-flex align-items-center h-100">
                            <div class="row w-100 h-100">
                                <div class="col-6 pr-0 d-flex align-items-center">
                                    <div class="card-content">
                                        <h5 class="mb-0">Total Builder</h5>
                                        {{-- <p class="mb-0">12</p> --}}
                                        <h6 class="mb-0">12</h6>
                                    </div>
                                </div>
                                <div class="col-6 pl-0 d-flex align-items-center justify-content-end">
                                    <div class="banner-img h-100">
                                        <img src="{{ asset('assets/img/Build.PNG') }}" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Total Projects Card -->
                <div class="col-lg-6 col-md-6 col-sm-12 mb-1">
                    <div class="card" style="width: 100%; height: 180px;">
                        <div class="card-statistic-4 d-flex align-items-center h-100">
                            <div class="row w-100 h-100">
                                <div class="col-6 pr-0 d-flex align-items-center">
                                    <div class="card-content">
                                        <h5 class="mb-0">Total Project</h5>
                                        {{-- <p class="mb-0">66</p> --}}
                                        <h6 class="mb-0">66</h6>
                                    </div>
                                </div>
                                <div class="col-6 pl-0 d-flex align-items-center justify-content-end">
                                    <div class="banner-img h-100">
                                        <img src="{{asset('assets/img/prj.PNG')}}" class="img-fluid h-100" alt="Projects" style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            {{-- Chart Starts Here --}}
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
                                        <th>Assign Date</th>
                                        <th>Due Date</th>
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

            {{-- Charts End Here --}}
            {{-- Circle Charts Start --}}
            <div class="row">
                <!-- Compliance Status Chart -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="container mt-5">
                        <div class="card shadow-sm" style="height: 400px;">
                            <div class="card-header text-center">
                                <h5>Compliance Status</h5>
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <div class="chart-container" style="width: 90%; max-width: 300px; height: auto;">
                                    <canvas id="projectStatusChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Bar Chart -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="container mt-5">
                        <div class="card shadow-sm" style="height: 400px;">
                            <div class="card-header">
                                <h4>Progress Report</h4>
                            </div>
                            <div class="card-body d-flex justify-content-center align-items-center">
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
        var ctx = document.getElementById('projectStatusChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'In Progress', 'Pending'],
                datasets: [{
                    data: [45, 30, 25], // ✅ Data values
                    backgroundColor: ['#28a745', '#f39c12', '#e74c3c'],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '60%' // ✅ Donut Effect
            }
        });
    </script>
@endpush
