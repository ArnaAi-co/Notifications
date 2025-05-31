@php
    $panelNotifications = \App\Models\PanelNotification::where('status',1)->orderBy('order')->get();
    $types = \App\Models\PanelNotification::TYPES;


@endphp

<div class="col-12 mt-5">

    @foreach($panelNotifications as $panelNotification)
        @php
            $bgColor='';
            $textColor='';
            $icon = '';
                    switch ($panelNotification->type){

                            case 'primary':
                                $bgColor='#cce5ff';
                                $textColor='#007BFF';
                                $icon = 'fa fa-info-circle';
                            break;

                            case 'secondary':
                                $bgColor='#e2e3e5';
                                $textColor='#fa057a';
                            break;

                            case 'success':
                                $bgColor='#c3e6cb';
                                $textColor='#1b6644';
                                $icon = 'fa fa-check-circle';
                            break;

                            case 'danger':
                                $bgColor='#f8d7da';
                                $textColor='#ef4b4b';
                                $icon = 'fa fa-exclamation-triangle';
                            break;

                            case 'warning':
                                $bgColor='#fff3cd';
                                $textColor='#ffab00';
                                    $icon = 'fa fa-exclamation-circle';
                            break;

                            case 'info':
                                $bgColor='#d1ecf1';
                                $textColor='#0dcaf0';
                                $icon = 'fa fa-info-circle';
                            break;

                            case 'light':
                                $bgColor='#fefefe';
                                $textColor='#1e1e2d';
                                $icon = 'fa fa-exclamation-circle';
                            break;

                            case 'dark':
                                $bgColor='#d6d8d9';
                                $textColor='#1e1e2d';
                                $icon = 'fa fa-check-circle';
                            break;

                    }
        @endphp
        <div style="background-color:{{$bgColor}};border-radius: 9px">
            <p style="border:1px solid {{$textColor}};border-radius: 9px;color:{{$textColor}}"
               class="p-3 "><i style="color:{{$textColor}}" class="{{$icon}}"></i> {{$panelNotification->description}}</p>
        </div>
    @endforeach
</div>
