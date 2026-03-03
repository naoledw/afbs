@extends('layouts.app')

@section('title', 'Consultancy')

@section('content')
<section class="container section narrow">
    <h1>Expert Farm Consultancy</h1>
    <p>Consult certified agronomists for crop planning, pest control, and nutrient management.</p>
    <form class="card form-grid">
        <label>
            Full Name
            <input type="text" placeholder="Your name">
        </label>
        <label>
            Region
            <input type="text" placeholder="e.g. Oromia">
        </label>
        <label class="full">
            Challenge Description
            <textarea rows="4" placeholder="Describe your farm challenge"></textarea>
        </label>
        <button type="button" class="btn">Request Session</button>
    </form>
</section>
@endsection
