@extends('layouts.layout')

@section('title')
    Create School
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
    </div>
@endsection
