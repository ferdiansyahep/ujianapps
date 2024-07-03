@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header bg-transparent">
                    <h2>Mata Pelajaran</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if($mapel->isNotEmpty())
                        @foreach ($mapel as $subject)
                        <div class="col-sm-6 col-md-4 col-lg-3 mb-3">
                            <a href="{{ route('client.results', $subject->id) }}"
                                class="btn btn-outline-primary px-5 py-3 text-dark fw-bold">{{ $subject->nama_mapel }}</a>
                        </div>
                        @endforeach
                        @else
                        <p>Tidak ada hasil ujian yang tersedia.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection