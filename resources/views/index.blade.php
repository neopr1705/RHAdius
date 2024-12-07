@extends('layouts.app')

@section('title', 'Materi & Login')

@section('content')
<section id="news" class="news-section">
    <div class="container">
        <h2>Materi Terbaru</h2>
        <div class="news-grid">
            <article class="news-card">
                <img src="https://via.placeholder.com/150" alt="News Image">
                <h3>Judul Materi 1</h3>
                <p>Deskripsi singkat tentang Materi ini. Klik untuk membaca selengkapnya.</p>
                <a href="#" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card">
                <img src="https://via.placeholder.com/150" alt="News Image">
                <h3>Judul Materi 2</h3>
                <p>Deskripsi singkat tentang Materi ini. Klik untuk membaca selengkapnya.</p>
                <a href="#" class="read-more">Baca Selengkapnya</a>
            </article>
            <article class="news-card">
                <img src="https://via.placeholder.com/150" alt="News Image">
                <h3>Judul Materi 3</h3>
                <p>Deskripsi singkat tentang Materi ini. Klik untuk membaca selengkapnya.</p>
                <a href="#" class="read-more">Baca Selengkapnya</a>
            </article>
        </div>
    </div>
</section>
@endsection


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
