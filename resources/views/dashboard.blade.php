@extends('backend.layout')
@section('title','Admin Dashboard')

@section('container')
<!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Monitor</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Admin</h4>
                            </div>
                            <div class="card-body">
                                 {{ $user }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-external-link-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Fo Link</h4>
                            </div>
                            <div class="card-body">
                               {{ $fo }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-broadcast-tower"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Radio</h4>
                            </div>
                            <div class="card-body">
                                {{$radio}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Server</h4>
                            </div>
                            <div class="card-body">
                                {{$server}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
    </div>
        
@endsection