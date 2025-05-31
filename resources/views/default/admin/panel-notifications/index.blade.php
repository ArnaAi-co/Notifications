@extends('layouts.app')

@section('css')

@endsection

@section('page-header')
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0">{{ __('Panel notifications') }}</h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="fa-solid fa-message-question mr-2 fs-12"></i>{{ __('Admin') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="{{url('#')}}"> {{ __('Panel notifications') }}</a></li>
			</ol>
		</div>
        <div class="page-rightheader">
            <a href="{{ route('admin.panel-notifications.create') }}" class="btn btn-primary mt-1">{{ __('Create New Notification') }}</a>
        </div>
	</div>
	<!-- END PAGE HEADER -->
@endsection

@section('content')


	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title">{{ __('Panel notifications') }}</h3>
				</div>
				<div class="card-body pt-2">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">{{__('Title')}}</th>
                            <th scope="col">{{__('Type')}}</th>
                            <th scope="col">{{__('Order')}}</th>
                            <th scope="col">{{__('Status')}}</th>
                            <th scope="col">{{__('Actions')}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($panelNotifications as $panelNotification)
                            <tr>
                                <td>{{$panelNotification->title}}</td>
                                <td><span class="text-{{$panelNotification->type}}">{{$panelNotification->type}} <i class="fa fa-text text-{{$panelNotification->type}}"></i></span></td>
                                <td>{{$panelNotification->order}}</td>
                                <td>{!! $panelNotification->status == 1 ? '<i class="fa fa-circle text-success"></i>' : '<i class="fa fa-circle text-danger"></i>' !!}</td>


                                <td>
                                    <a class="mx-1" href="{{route('admin.panel-notifications.edit',$panelNotification->id)}}"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.panel-notifications.destroy', $panelNotification->id) }}" method="POST" class="delete-form" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash delete-button mx-1 border-0 bg-transparent"></button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.delete-button').click(function(event) {
                event.preventDefault(); // Prevent the default form submission

                // Show a confirmation dialog
                if (confirm('<?php echo __('Are you sure you want to delete this item?')?>')) {
                    // Submit the form if the user confirms
                    $(this).closest('form').submit();
                }
            });
        });
    </script>


@endsection
