@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <!-- <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            Kosong
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="row">
        <div class="col-lg-4">
            Kosong
        </div>
        <div class="col-lg-4">
            Kosong
        </div>
    </div> -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">View Vaccination Appointment
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table tablesorter" id="">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Appointment Data
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th class="text-center">
                                        Remarks
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      (On Progress)
                                    </td>
                                    <td>
                                        (On Progress)
                                    </td>
                                    <td>
                                        (On Progress)
                                    </td>
                                    <td class="text-center">
                                        (On Progress)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
