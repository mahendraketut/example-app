@extends('layouts.layout')

@section('title')
    School
@endsection

@section('css')
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('js')
    <!-- Page level plugins -->
    {{-- <script src="sbadmin/vendor/chart.js/Chart.min.js"></script> --}}
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    {{-- <!-- Page level custom scripts -->
    <script src="sbadmin/js/demo/chart-area-demo.js"></script>
    <script src="sbadmin/js/demo/chart-pie-demo.js"></script> --}}
    <script src="sbadmin/js/demo/datatables-demo.js"></script>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">School</h1>
        <a href="{{asset('#')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-home fa-sm text-white-50"></i> Create New School</a>
    </div>

    <!-- Content Row -->
    <div class="card shadow mb-4" width=100%>
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">School Data</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tbody>
                        @if(!empty($school))
                            <thead>
                                <tr>
                                    <th>School</th>
                                    <th>Address</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                        @endif

                        {{-- <tfoot>
                        <tr>
                            <th>School</th>
                            <th>Address</th>
                            <th>City</th>
                        </tr>
                        </tfoot> --}}
                        @forelse ($school as $school)
                            <tr>
                                <td>{{ $school->schoolname }}</td>
                                <td>{{ $school->schooladdress }}</td>
                                <td>{{ $school->schoolcity }}</td>
                            </tr>
                        @empty
                            <div class="alert alert-primary d-flex align-items-center" role="alert">
                                <i class="fas fa-exclamation-triangle"> </i> No Schools Data available!
                            </div>
                        @endforelse
                    </tbody>
                </table>


            </div>
        </div>
    </div>

    <!-- Begin Page Content -->


        <!-- Page Heading -->

        <!-- DataTales Example -->



    <!-- /.container-fluid -->
</div>


@endsection
