@extends('layouts.app')

@section('title', 'Services')

@section('content')
<div class="container">
    <h1 class="display-4">Our Services</h1>
    <p>Explore the services we offer related to our amazing cat collection:</p>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn2.thecatapi.com/images/286.jpg" class="card-img-top" alt="Cat Grooming">
                <div class="card-body">
                    <h5 class="card-title">Cat Grooming</h5>
                    <p class="card-text">Professional grooming services to keep your cat looking its best.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn2.thecatapi.com/images/3ql.jpg" class="card-img-top" alt="Cat Boarding">
                <div class="card-body">
                    <h5 class="card-title">Cat Boarding</h5>
                    <p class="card-text">Safe and comfortable boarding for your cat while you're away.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn2.thecatapi.com/images/5ou.jpg" class="card-img-top" alt="Cat Training">
                <div class="card-body">
                    <h5 class="card-title">Cat Training</h5>
                    <p class="card-text">Expert training services to help your cat learn new tricks and behaviors.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn2.thecatapi.com/images/aa2.jpg" class="card-img-top" alt="Cat Adoption">
                <div class="card-body">
                    <h5 class="card-title">Cat Adoption</h5>
                    <p class="card-text">Find your perfect feline friend through our adoption services.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn2.thecatapi.com/images/b8o.jpg" class="card-img-top" alt="Cat Health Check-ups">
                <div class="card-body">
                    <h5 class="card-title">Cat Health Check-ups</h5>
                    <p class="card-text">Regular health check-ups to ensure your cat stays healthy and happy.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="https://cdn2.thecatapi.com/images/bkv.jpg" class="card-img-top" alt="Cat Nutrition Advice">
                <div class="card-body">
                    <h5 class="card-title">Cat Nutrition Advice</h5>
                    <p class="card-text">Expert advice on the best nutrition for your cat's specific needs.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
