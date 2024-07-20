@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container">
    <h1 class="display-4">About Us</h1>
    
    <p>Welcome to our Cat Collection! We are dedicated to providing the best services and products for cat enthusiasts everywhere. Our mission is to celebrate and support the bond between humans and their feline companions.</p>

    <h2 class="mt-4">Our Mission</h2>
    <p>Our mission is to enrich the lives of cats and their owners by offering top-quality products, exceptional services, and valuable information. We strive to create a community where cat lovers can connect, share, and learn from each other.</p>

    <h2 class="mt-4">Our History</h2>
    <p>Founded in [Year], our company started with a small team of cat lovers who wanted to make a difference in the lives of cats. Over the years, we have grown into a well-respected name in the cat community, known for our dedication to quality and customer satisfaction.</p>

    <h2 class="mt-4">Meet Our Team</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://cdn2.thecatapi.com/images/286.jpg" class="card-img-top" alt="Team member 1">
                <div class="card-body">
                    <h5 class="card-title">Jane Doe</h5>
                    <p class="card-text">Founder & CEO</p>
                    <p>Jane has always had a passion for cats and founded the company to share her love and knowledge with others.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://cdn2.thecatapi.com/images/3ql.jpg" class="card-img-top" alt="Team member 2">
                <div class="card-body">
                    <h5 class="card-title">John Smith</h5>
                    <p class="card-text">Head of Product Development</p>
                    <p>John leads our product development team, ensuring that we offer the best and most innovative products for cats.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://cdn2.thecatapi.com/images/5ou.jpg" class="card-img-top" alt="Team member 3">
                <div class="card-body">
                    <h5 class="card-title">Emily Johnson</h5>
                    <p class="card-text">Marketing Director</p>
                    <p>Emily is responsible for spreading the word about our company and connecting with our wonderful community of cat lovers.</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Our Values</h2>
    <ul>
        <li><strong>Quality:</strong> We are committed to providing the highest quality products and services for cats and their owners.</li>
        <li><strong>Community:</strong> We believe in fostering a supportive and engaging community for cat enthusiasts.</li>
        <li><strong>Compassion:</strong> We care deeply about the well-being of cats and strive to make a positive impact on their lives.</li>
        <li><strong>Innovation:</strong> We are always looking for new and better ways to serve our customers and their feline friends.</li>
    </ul>

    <h2 class="mt-4">Contact Us</h2>
    <p>If you have any questions or would like to learn more about our services, please feel free to <a href="{{ route('contact') }}">contact us</a>. We would love to hear from you!</p>
</div>
@endsection
