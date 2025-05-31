@extends('layouts.app')

@section('css')

@endsection

@section('page-header')
    <!-- EDIT PAGE HEADER -->
    <div class="page-header mt-5-7 justify-content-center">
        <div class="page-leftheader text-center">
            <h4 class="page-title mb-0">{{ __('Create New Panel Notification') }}</h4>
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                class="fa-solid fa-user-shield mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
                <li class="breadcrumb-item" aria-current="page"><a
                            href="{{ route('admin.panel-notifications.index') }}"> {{ __('Panel Notification List') }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><a
                            href="{{ route('admin.panel-notifications.create') }}">{{ __('Create New Panel Notification') }}</a>
                </li>

            </ol>
        </div>
    </div>
    <!-- END PAGE HEADER -->
@endsection

@section('content')
    <!-- EDIT USER PROFILE PAGE -->
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-8 col-sm-12">
            <div class="card border-0">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Create New Notification') }}</h3>
                </div>
                <div class="card-body pb-0">
                    <form method="POST" action="{{ route('admin.panel-notifications.store') }}"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-sm-12 col-md-4">

                                <div class="form-group">
                                    <label class="form-label fs-12">{{ __('Type') }} <span class="text-muted">({{ 'Required' }})</span>
                                    </label>
                                    <select name="type" class="form-control" required>
                                        @foreach(\App\Models\PanelNotification::TYPES as $type)
                                            <option class="text-{{$type}}" value="{{$type}}"> {{$type}}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                    <p class="text-danger">{{ $errors->first('type') }}</p>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-sm-12 col-md-4">
                                @include('default.admin.partials.select', ['field' =>'status','options'=> \App\Models\PanelNotification::STATUSES])
                            </div>

                            <div class="col-sm-12 col-md-4">
                                @include('default.admin.partials.select', ['field' =>'order','options'=> \App\Models\PanelNotification::ORDERS])
                            </div>

                            <div class="col-sm-12 col-md-12">
                                @include('default.admin.partials.input', ['field' => 'title'])
                            </div>

                            <div class="col-sm-12 col-md-12">
                                @include('default.admin.partials.textarea', ['field' => 'description'])
                            </div>


                            <div class="card-footer border-0 text-center mb-2 pr-0">
                                <a href="{{ route('admin.panel-notifications.index') }}"
                                   class="btn btn-cancel mr-2 pl-7 pr-7">{{ __('Return') }}</a>
                                <button type="submit" class="btn btn-primary pl-7 pr-7">{{ __('Create') }}</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- EDIT USER PROFILE PAGE -->
@endsection

@section('js')

@endsection
