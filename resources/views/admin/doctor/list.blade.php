
@extends('layouts.backend')
@section('Title','Doctors')

@section('pageHead')
    <h1>
        Doctors
        <small>List</small>
    </h1>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>All Doctors</h2>
                <small class="text-muted">Welcome to Swift application</small>
            </div>
            <div class"filter-container">
                <div class="filters row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <div class="form-line">
                                <select class="form-control" onChange="window.location.href=this.value">
                                    <option value="{{ url('doctors')}}">All Specialities</option>
                                    @foreach($specialities as $Speciality)
                                        @php
                                            $filter =  Request::get('Speciality');
                                            $selected= '';
                                            if( $filter == $Speciality->name)
                                                $selected= 'Selected';

                                        @endphp
                                        <option value="{{ url('doctors')}}?Speciality={{$Speciality->name}}" {{$selected}}>{{$Speciality->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">

                {{--Doctors Listing Goes Here--}}

                @foreach($doctors as $doctor)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <div class="member-card verified">
                                    <ul class="header-dropdown">
                                        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="zmdi zmdi-more-vert"></i></a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Edit</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                                <li><a href="javascript:void(0);" class=" waves-effect waves-block">Block</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="thumb-xl member-thumb">
                                        <img src="<?php echo url('/') ?>/assets/admin/images/{{$doctor->avatar}}" class="img-circle" alt="profile-image">
                                        <i class="zmdi zmdi-info" title="verified user"></i>
                                    </div>

                                    <div class="" >
                                        <h4 class="m-b-5">{{$doctor->user->name}}</h4>
                                        <p class="text-muted">{{$doctor->speciality->name}}<span> <a href="#" class="text-pink">{{$doctor->user->email}}</a> </span></p>
                                    </div>

                                    <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                                    <a href="profile.html"  class="btn btn-raised btn-sm">View Profile</a>
                                    <ul class="social-links list-inline m-t-10">
                                        <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a title="twitter" href="#" ><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a title="instagram" href="3.html" ><i class="zmdi zmdi-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row clearfix">
                <div class="col-xs-12 text-center">
                    {{ $doctors->links() }}
                    <a href="#" class="btn btn-raised g-bg-cyan">Add Doctor</a>
                </div>
            </div>
        </div>
    </section>
@endsection