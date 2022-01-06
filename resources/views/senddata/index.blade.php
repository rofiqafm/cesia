@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css') }}/stylesheet.css">
@endsection
@section('content')
    <section class="content content-cloud">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12">
                    
                    <div class="card card-primary card-outline card-tabs no-radius no-margin">
                        <div class="card-header d-flex p-0">
                            <h3 class="card-title p-3"><b>Send Data</b></h3>
                            <ul class="nav nav-pills ml-auto p-2">
                                <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab"> <i class="fas fa-bars"></i> Form </a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab"> <i class="fas fa-book"></i> Import Excel</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    @include('senddata/form_input')
                                </div>
                                <div class="tab-pane" id="tab_2">
                                @include('senddata/import_excel')
                                </div>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
           
        });
    </script>
@endsection
