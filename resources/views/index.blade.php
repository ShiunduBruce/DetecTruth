@extends('layout')
@section('content')
        
    <h2 class="body_title" data-text="DetecTruth..."></h2>
<!--Navbar is done!-->

    <header>
        <div class="container header_container">
        <div class="header_left">
            <h1>Where we can protect <br> each other.</h1>
        
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
            Id temporibus modi, fugiat quae sequi autem omnis impedit
            dolores maxime fuga laudantium deserunt laboriosam odio 
            labore, itaque animi expedita, molestias error. 
        </p>
        <p>
            <br> 
        </p>
        <a href="{{route('crime.create')}}" class="btn btn-primary">Report crime!</a>
        </div>
        <div class="header_right">
            <div class="header-right-image">
                <img src="{{asset('img/secure-shield.png')}}">
            </div>
        </div>
        </div>
    </header>
    <!--Header is done!-->
    <!--<div id="logo"></div>-->

    <section class="categories">
        <div class="container categories_container">
            <div class="categories_left">
                <h1>What Is Our Purpose?</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum explicabo, reprehenderit eveniet maxime magni rem quod repellat sit ea odit provident atque, numquam quasi praesentium consequatur dolor cupiditate vel quis!
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>
            
            <div class="categories_right">
                <article class="category">
                <span class="category_icon"></span>
                <h5>TRANSPARENCY</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, cumque?</p>
                </article>


            <article class="category">
                    <span class="category_icon"></span>
                    <h5>STATISTICS</h5>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, cumque?</p>
                    </article>


            <article class="category">
                <span class="category_icon"></span>
                <h5>EMERGENCY</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, cumque?</p>
                </article>
            
            </div>
        </div>

    </section>

   
 @endsection


<!--https://travelblogeurope.com/all-emergency-numbers-in-europe/-->