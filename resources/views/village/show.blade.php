@extends('layouts.app')
@section('title', 'Village view')
@section('content')


    <div class="content-wrapper ">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        {{-- excel import  --}}
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="m-0">Villages <a href="{{ route('villages.index') }}"
                                        class="btn btn-outline-primary btn-sm "><i class="fa fa-arrow-left"
                                            aria-hidden="true"></i> Leave</a>
                                </h1>
                            </div>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row py-2">
                    <div class="col-12 col-md-12">
                        <div class="card ">
                            <div class="card-body">
                                <div class="row py-3">
                                    <div class="col-md-10 mx-auto">
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">Name :</label>
                                            <div class="col-sm-10 mt-2">
                                                {{ $village->name ? $village->name : '--' }}
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">Noted :</label>
                                            <div class="col-sm-10 mt-2">
                                                {{ $village->noted ? $village->noted : '--' }}
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">Status :</label>
                                            <div class="col-sm-10">
                                                @if ($village->status == 1)
                                                <span class="badge bg-success mt-2">Active</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">Date :</label>
                                            <div class="col-sm-10 mt-2">
                                                {{ $village->created_at->translatedFormat('j-M-Y')}}
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-2 col-form-label">User :</label>
                                            <div class="col-sm-10 mt-2">
                                                {{ $village->user->name}} <i class="fa fa-check-circle" style="color: blue;" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>

@endsection
