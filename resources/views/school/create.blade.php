@extends('layouts.layout')

@section('title')
    Create School
@endsection

@section('css')
    <link href="{{ asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection

@section('js')
    <!-- Page level plugins -->
    {{-- <script src="sbadmin/vendor/chart.js/Chart.min.js"></script> --}}
    <script src="{{asset('sbadmin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('sbadmin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    {{-- <!-- Page level custom scripts -->
    <script src="sbadmin/js/demo/chart-area-demo.js"></script>
    <script src="sbadmin/js/demo/chart-pie-demo.js"></script> --}}
    <script src="{{asset('sbadmin/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">School</h1>
        </div>
    </div>
@endsection
