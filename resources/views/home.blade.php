@extends('layouts.app')

@section('content')
    <section class="banner">
        <div class="container-banner">
            <div class="content">
                <div class="content-title-1 content-item">learn anytime, anywhere</div>
                <div class="content-title-2"><span>at HapoLearning</span>
                    <img src="{{ asset('images/hapo.png') }}" alt="icon-hapo">                    !
                </div>
                <div class="content-description ">interactive lessons, "on-the-go" practice, peer support</div>
                <div class="content-btn"><a href="#" class="btn-start">start learning now!</a></div>
            </div>
        </div>
        <div class="effect-banner"></div>
    </section>

@endsection
