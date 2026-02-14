@extends('layouts.master')

@section('title', 'Dashboard')

@section('css')
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item active">{{ __('Dashboard') }}</li> --}}
@endsection

@section('content')

    <div class="row g-4">

        <!-- Welcome Card -->
        <div class="col-xl-6">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-7">
                        <div class="card-body text-nowrap">
                            <h5 class="card-title mb-0">Welcome {{ Auth::user()->name }}! </h5>
                            <p class="mb-2">Here what's happening in <br>your account today.</p>
                            {{-- <h4 class="text-primary mb-1">$48.9k</h4> --}}
                            <a href="{{ route('frontend.home') }}" class="btn btn-primary">View Website</a>
                        </div>
                    </div>
                    <div class="col-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('assets/img/illustrations/card-advance-sale.png') }}" height="140"
                                alt="view sales" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="col-xl-6">
            <div class="card border-0 shadow-lg">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted">Monthly Revenue</h6>
                        <h2 class="fw-bold text-success">$12,450</h2>
                        <small class="text-success"><i class="ti ti-trending-up"></i> +18% from last month</small>
                    </div>
                    <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                        <i class="ti ti-currency-dollar fs-2 text-success"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- STATISTICS ROW -->
    <div class="row g-4 mt-1">

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm hover-shadow">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Total Projects</h6>
                        <h3 class="fw-bold">48</h3>
                        <small class="text-success">8 Active</small>
                    </div>
                    <i class="ti ti-briefcase fs-2 text-primary"></i>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Services</h6>
                        <h3 class="fw-bold">12</h3>
                        <small class="text-info">Web, SEO, Marketing</small>
                    </div>
                    <i class="ti ti-settings fs-2 text-info"></i>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Blog Posts</h6>
                        <h3 class="fw-bold">36</h3>
                        <small class="text-success">4 This Month</small>
                    </div>
                    <i class="ti ti-article fs-2 text-success"></i>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6>Contact Leads</h6>
                        <h3 class="fw-bold">21</h3>
                        <small class="text-danger">5 Unread</small>
                    </div>
                    <i class="ti ti-mail fs-2 text-danger"></i>
                </div>
            </div>
        </div>

    </div>


    <!-- CHARTS -->
    <div class="row mt-4">

        <div class="col-xl-6">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="fw-bold"><i class="ti ti-chart-donut me-2"></i>Projects Status Overview</h5>
                </div>
                <div class="card-body">
                    <canvas id="projectsChart" height="200"></canvas>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="fw-bold"><i class="ti ti-chart-bar me-2"></i>Most Requested Services</h5>
                </div>
                <div class="card-body">
                    <canvas id="servicesChart" height="200"></canvas>
                </div>
            </div>
        </div>

    </div>


    <!-- TABLES -->
    <div class="row mt-4">

        <div class="col-xl-6">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="fw-bold"><i class="ti ti-article me-2"></i>Recent Blogs</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Title</th>
                                <th>Comments</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Top Web Design Trends 2026</td>
                                <td><span class="badge bg-primary">12</span></td>
                                <td><span class="badge bg-success">Published</span></td>
                            </tr>
                            <tr>
                                <td>SEO Ranking Guide</td>
                                <td><span class="badge bg-primary">8</span></td>
                                <td><span class="badge bg-success">Published</span></td>
                            </tr>
                            <tr>
                                <td>Laravel Performance Tips</td>
                                <td><span class="badge bg-primary">3</span></td>
                                <td><span class="badge bg-warning text-dark">Draft</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-transparent border-0">
                    <h5 class="fw-bold"><i class="ti ti-mail me-2"></i>Recent Contact Requests</h5>
                </div>
                <div class="card-body table-responsive">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Service</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ali Khan</td>
                                <td><span class="badge bg-info">Web Development</span></td>
                                <td>14 Feb 2026</td>
                            </tr>
                            <tr>
                                <td>Sara Ahmed</td>
                                <td><span class="badge bg-info">SEO Optimization</span></td>
                                <td>13 Feb 2026</td>
                            </tr>
                            <tr>
                                <td>John Smith</td>
                                <td><span class="badge bg-info">UI/UX Design</span></td>
                                <td>12 Feb 2026</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection


@section('script')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        Chart.defaults.font.family = 'Inter';

        new Chart(document.getElementById('projectsChart'), {
            type: 'doughnut',
            data: {
                labels: ['Completed', 'In Progress', 'Pending'],
                datasets: [{
                    data: [30, 10, 8],
                    backgroundColor: [
                        '#22c55e',
                        '#3b82f6',
                        '#f59e0b'
                    ],
                    borderWidth: 0,
                    hoverOffset: 10
                }]
            },
            options: {
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                },
                cutout: '65%'
            }
        });

        new Chart(document.getElementById('servicesChart'), {
            type: 'bar',
            data: {
                labels: ['Web Dev', 'SEO', 'Marketing', 'UI/UX'],
                datasets: [{
                    label: 'Requests',
                    data: [20, 15, 10, 8],
                    backgroundColor: [
                        '#6366f1',
                        '#06b6d4',
                        '#f43f5e',
                        '#10b981'
                    ],
                    borderRadius: 8
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                }
            }
        });
    </script>

@endsection
