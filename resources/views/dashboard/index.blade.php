@extends('layouts.app')
@section('content')

<div class="dashboard">
        <div>
            <h2>Welcome Back 👋</h2>
            <p>Here's what's happening with your business today.</p>
        </div>

        <button class="btn btn-primary">
            View Reports
        </button>

    <div class="row g-4 mt-1">

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <i class="bi bi-people"></i>

                <div>
                    <h5>Total Users</h5>
                    <h2>12,540</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <i class="bi bi-cart"></i>

                <div>
                    <h5>Orders</h5>
                    <h2>2,430</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <i class="bi bi-currency-dollar"></i>

                <div>
                    <h5>Revenue</h5>
                    <h2>$42,650</h2>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <i class="bi bi-box"></i>

                <div>
                    <h5>Products</h5>
                    <h2>850</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">

        <div class="col-lg-8">

            <div class="chart-card">

                <div class="card-header-custom">

                    <h5>Sales Analytics</h5>

                    <select class="form-select w-auto">
                        <option>This Year</option>
                        <option>This Month</option>
                        <option>This Week</option>
                    </select>

                </div>

                <canvas id="salesChart"></canvas>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="chart-card">

                <h5 class="mb-4">
                    Revenue
                </h5>

                <canvas id="pieChart"></canvas>

            </div>

        </div>

    </div>

</div>


@endsection