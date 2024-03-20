@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-primary mb-2',
        'value'       => '4',
        'description' => 'Registered users.',
        'progress'    => 4,
        'hint'        => '96 more until next milestone.',
    ];
    $widgets['before_content'][] = [
        'type'        => 'progress',
        'class'       => 'card text-white bg-secondary mb-2',
        'value'       => '10',
        'description' => 'Available products.',
        'progress'    => 30,
    ];
    $widgets['before_content'][] = [
            'type'        => 'jumbotron',
            'heading'     => trans('backpack::base.welcome'),
            'content'     => trans('backpack::base.use_sidebar'),
            'button_link' => backpack_url('logout'),
            'button_text' => trans('backpack::base.logout'),
        ];

        
@endphp

@section('content')
@endsection
