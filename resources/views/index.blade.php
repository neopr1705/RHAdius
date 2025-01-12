@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    @include('sections.welcom')
    @include('sections.materi')
    @include('sections.login')
    @if(session('login_success'))
        <script>
          Swal.fire({
    icon: 'success',
    title: 'Login Berhasil',
    text: '{{ session('login_success') }}',
    showConfirmButton: false,
    timer: 1500 // Popup akan hilang otomatis setelah 1.5 detik
});
        </script>
    @endif
@endsection

