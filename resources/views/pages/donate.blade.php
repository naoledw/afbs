@extends('layouts.app')

@section('title', 'Donate')

@section('content')
<section class="container section narrow">
    <h1>Support Food Security Projects</h1>
    <p>Your donation helps deliver high-quality farm inputs and training to underserved communities.</p>
    <form class="card form-grid">
        <label>
            Amount (ETB)
            <input type="number" placeholder="1000">
        </label>
        <label>
            Payment Method
            <select>
                <option>Telebirr</option>
                <option>PayPal</option>
            </select>
        </label>
        <button type="button" class="btn">Proceed to Donate</button>
    </form>
</section>
@endsection
