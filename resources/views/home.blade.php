@extends('layouts.app')

@section('content')

<section class="banner">
    <div class="content">
        <div class="content-title-1 content-item">learn anytime, anywhere</div>
        <div class="content-title-2 content-item">at HapoLearning
            <img src="http://localhost/scaford-hapolearn/resources/assets/images/hapo.png">!
        </div>
        <div class="content-description ">interactive lessons, "on-the-go" practice, peer support</div>
        <div class="content-btn"><a href="#" class="btn-start">start learning now!</a></div>
    </div>
</section>

    @include('layouts.course')
    
@endsection
