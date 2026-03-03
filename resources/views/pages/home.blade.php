@extends('layouts.app')

@section('title', 'Awash Farm Clone - Home')

@section('content')
<section class="hero">
    <div class="container grid">
        <div>
            <h1>Integrated Platform for Ethiopian Farmers</h1>
            <p>
                Order premium seeds, seedlings, and fertilizers; connect with experts; access research materials;
                and support food security initiatives through direct donations.
            </p>
            <div class="actions">
                <a href="{{ route('products') }}" class="btn">Order Inputs</a>
                <a href="{{ route('consultancy') }}" class="btn btn-outline">Book Consultancy</a>
            </div>
        </div>
        <div class="card">
            <h3>Fast Access</h3>
            <ul>
                <li>Seed & seedling marketplace</li>
                <li>Agronomist-led consultancy</li>
                <li>Downloadable research library</li>
                <li>PayPal + Telebirr payments</li>
            </ul>
        </div>
    </div>
</section>

<section class="container section">
    <h2>Our Core Services</h2>
    <div class="cards-3">
        <article class="card">
            <h3>Agricultural Inputs</h3>
            <p>Browse verified products and place orders for delivery or pick-up with secure checkout.</p>
        </article>
        <article class="card">
            <h3>Expert Consultancy</h3>
            <p>Get practical, crop-specific recommendations from professionals experienced in Ethiopian conditions.</p>
        </article>
        <article class="card">
            <h3>Research & Knowledge</h3>
            <p>Download agronomy guides, market research, and production techniques to improve outcomes.</p>
        </article>
    </div>
</section>
@endsection
