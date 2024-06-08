@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->


    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- Content Row -->
    <div class="card shadow">
        <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">{{ __('Mata pelajaran') }}</h1>
                <a href="{{ route('admin.categories.index') }}"
                    class="btn btn-primary btn-sm shadow-sm">{{ __('Go Back') }}</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">{{ __('Nama mata pelajaran') }}</label>
                    <input type="text" class="form-control" id="name" placeholder="{{ __('nama mata pelajaran') }}"
                        name="name" value="{{ old('name') }}" />
                </div>
                <div class="form-group">
                    <label for="kelas_id">{{ __('Kelas') }}</label>
                    <select class="form-control" name="kelas_id" id="kelas_id">
                        @foreach($kelas as $id => $kelas)
                        <option value="{{ $id }}">{{ $kelas }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="user_id">{{ __('Guru Pengampu') }}</label>
                    <select class="form-control" name="user_id" id="user_id">
                        @foreach($users as $id => $user)
                        <option value="{{ $id }}">{{ $user }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_kelas">{{ __('Kode kelas') }}</label>
                    <input type="text" class="form-control" id="kode_kelas" placeholder="{{ __('kode kelas') }}"
                        name="kode_kelas" value="{{ old('kode_kelas') }}" />
                </div>
                <button type="submit" class="btn btn-primary btn-block">{{ __('Save') }}</button>
            </form>
        </div>
    </div>


    <!-- Content Row -->

</div>
@endsection
