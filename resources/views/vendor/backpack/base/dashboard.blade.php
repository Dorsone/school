@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => 'Xush kelibsiz',
        'content'     => 'Kontent yaratish, tahrirlash yoki oʻchirish uchun chap tomondagi paneldan foydalaning.',
        'button_link' => backpack_url('logout'),
        'button_text' => 'Chiqish',
    ];
@endphp

@section('content')
@endsection
