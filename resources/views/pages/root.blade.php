@extends('layouts.root')

@section('content')

<div class="slider fullscreen">
    <ul class="slides" style="background: #d35400"> 
        <li>
            <img src="#">
            <div class="caption center-align">
                <h1>Fiesta 19</h1>
                <h3>MEPCO Schlenk Engineering College (Autonomous)</h3>
                <p class="flow-text"><i class="fa fa-calendar"></i> 2 Feb 2019</p>
                <p class="flow-text">For queries contact Dr. T. Prabaharan, Sr. Professor, Mechanical Engineering.</p>
                <p class="flow-text">Mail:queriesfiesta19@gmail.com</p>                
            </div>
        </li>
    </ul>
    <div class="center-align slider-fixed-item">  
        {{ link_to_route('auth.register', 'Register', null, ['class' => 'waves-effect waves-light btn green']) }}
    </div> 
</div>
    
@endsection