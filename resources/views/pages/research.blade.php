@extends('layouts.app')

@section('title', 'Research Library')

@section('content')
<section class="container section">
    <h1>Downloadable Research Materials</h1>
    <p>Practical resources for extension workers, cooperatives, and individual farmers.</p>
    <div class="card">
        <ul class="download-list">
            <li><span>Climate-smart maize production guide</span><button type="button">Download PDF</button></li>
            <li><span>Irrigation scheduling for smallholders</span><button type="button">Download PDF</button></li>
            <li><span>Soil fertility baseline & recommendations</span><button type="button">Download PDF</button></li>
        </ul>
    </div>
</section>
@endsection
