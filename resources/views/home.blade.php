@extends('layouts.app')

@section('title','Creating memories, one experience at a time')

@section('content')
<h4 class="intro">Creating memories, one experience at a time</h4>               
            <p>
                Nadia’s Garden Restaurant isn’t just about dining. We’re about creating memorable experiences that our guest will cherish! 
                Our family friendly restaurant has indoor, outdoor, and intimate dining options for any occasion. 
                Our outdoor garden area is perfect for a stroll before or after your meal. We invite you to come dine with us!
            </p>
            <img src="{{ asset('/images/patio.jpg') }}" class="home">
            <div class="menu-categories">
                <article>
                    <a href="#"><img src="{{ asset('/images/mushrooms.jpg') }}"></a>
                    <h2><a href="#">Starters</a></h2>
                </article>                
                <article>
                    <a href="#"><img src="{{ asset('/images/salad.jpg') }}"></a>
                    <h2><a href="#">Salads</a></h2>
                </article>                
                <article>
                    <a href="#"><img src="{{ asset('/images/burger.jpg') }}"></a>
                    <h2><a href="#">Entrees</a></h2>
                </article>                
                <article>
                    <a href="#"><img src="{{ asset('/images/brownie.jpg') }}"></a>
                    <h2><a href="#">Desserts</a></h2>
                </article>                
            </div>
            <div class="social">
                <div>
                    <h4>What our customers say</h4>
                    <p>
                        This place has, without a doubt, some of the best pizza I have ever had! 
                        The owners are hands on and made sure we had everything we needed.
                        They are an eclectic eatery, with a large variety of meals to choose from, 
                        but everything I’ve tried from their menu has been great. 
                        It’s definitely a place you have to give a few tries to get a feel for everything they have to offer. 
                        Oh, and their crème brulee is amazing!<br>
                        <br>
                        Shad Cayden
                    </p>
                </div>    
                <div class="networks">
                    <a href="#"><img src="{{ asset('/images/twitter.png') }}"></a>
                    <a href="#"><img src="{{ asset('/images/fb.png') }}"></a>
                    <a href="#"><img src="{{ asset('/images/ig.png') }}"></a>    
                </div>
            </div>
@endsection
