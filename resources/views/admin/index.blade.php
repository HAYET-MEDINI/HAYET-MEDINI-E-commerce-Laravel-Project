@extends('layouts.admin')
@section('content')
<div class="main-content-inner">
    <div class="main-content-wrap">
        <div class="tf-section-2 mb-30">
            <div class="flex gap20 flex-wrap-mobile">
                <div class="w-half">
                    <div class="wg-chart-default mb-20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Total Orders</div>
                                    <h4>{{$dashboardDatas[0]->Total}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wg-chart-default mb-20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-dollar-sign"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Total Amount</div>
                                    <h4>{{$dashboardDatas[0]->TotalAmount}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wg-chart-default mb-20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Pending Orders</div>
                                    <h4>{{$dashboardDatas[0]->TotalOrdered}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wg-chart-default">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-dollar-sign"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Pending Orders Amount</div>
                                    <h4>{{$dashboardDatas[0]->TotalOrderedAmount}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-half">
                    <div class="wg-chart-default mb-20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Delivered Orders</div>
                                    <h4>{{$dashboardDatas[0]->TotalDelivered}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wg-chart-default mb-20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-dollar-sign"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Delivered Orders Amount</div>
                                    <h4>{{$dashboardDatas[0]->TotalDeliveredAmount}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wg-chart-default mb-20">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-shopping-bag"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Canceled Orders</div>
                                    <h4>{{$dashboardDatas[0]->TotalCanceled}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="wg-chart-default">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap14">
                                <div class="image ic-bg">
                                    <i class="icon-dollar-sign"></i>
                                </div>
                                <div>
                                    <div class="body-text mb-2">Canceled Orders Amount</div>
                                    <h4>{{$dashboardDatas[0]->TotalCanceledAmount}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wg-box">
                <div class="flex items-center justify-between">
                    <h5>Monthly Revenue</h5>
                </div>
                <div class="flex flex-wrap gap40">
                    <div>
                        <div class="mb-2">
                            <div class="block-legend">
                                <div class="dot t1"></div>
                                <div class="text-tiny">Total</div>
                            </div>
                        </div>
                        <div class="flex items-center gap10">
                            <h4>{{$TotalAmount}} DT</h4>
                        </div>
                    </div>
                    <div>
                        <div class="mb-2">
                            <div class="block-legend">
                                <div class="dot t2"></div>
                                <div class="text-tiny">Pending</div>
                            </div>
                        </div>
                        <div class="flex items-center gap10">
                            <h4>{{$TotalOrderedAmount}} DT</h4>
                        </div>
                    </div>
                    <div>
                        <div class="mb-2">
                            <div class="block-legend">
                                <div class="dot t2"></div>
                                <div class="text-tiny">Delivered</div>
                            </div>
                        </div>
                        <div class="flex items-center gap10">
                            <h4>{{$TotalDeliveredAmount}} DT</h4>
                        </div>
                    </div>
                    <div>
                        <div class="mb-2">
                            <div class="block-legend">
                                <div class="dot t2"></div>
                                <div class="text-tiny">Canceled</div>
                            </div>
                        </div>
                        <div class="flex items-center gap10">
                            <h4>{{$TotalCanceledAmount}} DT</h4>
                        </div>
                    </div>
                </div>
                <div id="line-chart-8"></div>
            </div>

            <!-- Nouvelle section pour le rapport des ventes -->
<div class="wg-box mt-30">
    <div class="flex items-center justify-between mb-20">
        <h5>Sales Report</h5>
        <a href="{{ route('admin.exportPDF') }}" class="btn btn-primary">
            <i class="icon-download mr-2"></i> Download PDF
        </a>
    </div>
    <div class="table-responsive">
        <table class="table  table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th class="text-center">Sales (Units)</th>
                    <th class="text-center">Predicted Sales (Units)</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sales as $sale)
                <tr>
                    <td>{{ $sale->product_name }}</td>
                    <td class="text-center">
                        <span class="badge bg-primary">{{ $sale->total_sales }}</span>
                    </td>
                    <td class="text-center">
                        <span class="badge bg-success">{{ $sale->predicted_sales }}</span>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No sales data available.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<style>
    .table-responsive {
        overflow-x: auto;
    }
    .table {
        width: 100%;
        margin-bottom: 0;
    }
    .table th, .table td {
        padding: 12px;
        vertical-align: middle;
    }
    .table th {
        background-color: #f8f9fa;
        font-weight: 600;
        color: #333;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f5f9;
    }
    .badge {
        padding: 6px 12px;
        border-radius: 12px;
        font-size: 14px;
    }
    .bg-primary {
        background-color: #668738 !important;
        color: #fff;
    }
    .bg-success {
        background-color: #668738 !important;
        color: #fff;
    }
    .icon-download {
        margin-right: 8px;
    }
</style>
        </div>
    </div>
</div> 
@endsection

@push('scripts')
<script>
    (function ($) {
        var tfLineChart = (function () {
            var chartBar = function () {
                var options = {
                    series: [{
                        name: 'Total',
                        data: [{{$AmountM}}]
                    }, {
                        name: 'Pending',
                        data: [{{$OrderedAmountM}}]
                    }, {
                        name: 'Delivered',
                        data: [{{$DeliveredAmountM}}]
                    }, {
                        name: 'Canceled',
                        data: [{{$CanceledAmountM}}]
                    }],
                    chart: {
                        type: 'bar',
                        height: 325,
                        toolbar: {
                            show: false,
                        },
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '10px',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    legend: {
                        show: false,
                    },
                    colors: ['#2377FC', '#FFA500', '#078407', '#FF0000'],
                    stroke: {
                        show: false,
                    },
                    xaxis: {
                        labels: {
                            style: {
                                colors: '#212529',
                            },
                        },
                        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    },
                    yaxis: {
                        show: false,
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val + " " + "DT"
                            }
                        }
                    }
                };

                chart = new ApexCharts(
                    document.querySelector("#line-chart-8"),
                    options
                );
                if ($("#line-chart-8").length > 0) {
                    chart.render();
                }
            };

            return {
                init: function () {},
                load: function () {
                    chartBar();
                },
                resize: function () {},
            };
        })();

        jQuery(document).ready(function () {});
        jQuery(window).on("load", function () {
            tfLineChart.load();
        });
        jQuery(window).on("resize", function () {});
    })(jQuery);
</script>
@endpush