@extends('masterlayout')

@section('title', 'UTS Pem Web')

@section('content')
    <div class="alert alert-dismissible fade show uts-alert" role="alert">
        {{ session('success', 'Biodata berhasil diperbarui.') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="uts-grid">
        {{-- Kartu Tambah (+) --}}
        <div class="uts-col">
            <a href="{{ url('/create') }}" class="uts-card-add" aria-label="Tambah Biodata">
                <span class="uts-plus-btn">+</span>
            </a>
        </div>

        {{-- Kartu Anggota 1 --}}
        <div class="uts-col">
            <div class="uts-card-member">
                <img src="{{ asset('images/Komang.jpeg') }}" alt="Komang" class="uts-card-img">
                <div class="uts-card-body">
                    <div class="uts-card-title">I Komang Triwidiantara</div>
                    <p class="uts-card-text">
                        24010110249 merupakan master dari uts ini dengan tugas membuat front-end dan mengirimkannya ke grup
                    </p>
                </div>
                <div class="uts-card-actions">
                    <a href="{{ url('/edit/1') }}" class="btn-uts-edit">Edit</a>
                    <form action="{{ url('/delete/1') }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-uts-delete"
                            onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>

        {{-- Kartu Anggota 2 --}}
        <div class="uts-col">
            <div class="uts-card-member">
                <img src="{{ asset('images/Aryo.jpeg') }}" alt="Aryo" class="uts-card-img">
                <div class="uts-card-body">
                    <div class="uts-card-title">M.Aryo Alifernanda</div>
                    <p class="uts-card-text">
                        dengan NIM 24010110247 merupakan pegawai dan mempunyai tugas mengerjakan back-end pada UTS ini
                    </p>
                </div>
                <div class="uts-card-actions">
                    <a href="{{ url('/edit/2') }}" class="btn-uts-edit">Edit</a>
                    <form action="{{ url('/delete/2') }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-uts-delete"
                            onclick="return confirm('Hapus data ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
