@extends('layouts.app') @section('title', 'Tambah Rencana Penerimaan') @section('content')

<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ @url('rencana-penerimaan') }}">Rencana Penerimaan</a></li>
        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>

    <hr class="mg-y-30">

    <h4 id="section1" class="mg-b-10">Menu @yield('title')</h4>
    <p class="mg-b-30">Input data untuk terkait kebutuhan data user sesuai dengan yang dibutuhkan didalam form berikut ini.</p>

    <form action="{{ url('rencana-penerimaan/store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
            <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="income_date" value="{{ $rencanaPenerimaan->income_date }}" class="form-control {{ $errors->has('income_date') ? 'is-invalid':'' }}" required>
                    <p class="text-danger">{{ $errors->first('income_date') }}</p>
                </div>
            </div>   
            <div class="col-md-4">
            <div class="form-group">
                <label for="">Rencana Penerimaan</label>
                    <select name="id_income_type" value="{{ $rencanaPenerimaan->IncomeType->income_name }}" class="form-control {{ $errors->has('id_income_type') ? 'is-invalid':'' }}" required>
                        <option value="">Pilih Jenis Rencana Penerimaan</option>
                        @foreach ($incomeTypes as $row)
                        <option value="{{ $row->id }}">{{ $row->income_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>  
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Saldo Awal</label>
                    <input type="number" name="income_cash" value="{{ $rencanaPenerimaan->income_cash }}" class="form-control {{ $errors->has('income_cash') ? 'is-invalid':'' }}"  placeholder="Masukkan Saldo" required>
                    <p class="text-danger">{{ $errors->first('income_cash') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Rencana Minggu 1</label>
                    <input type="number" name="income_plan1" value="{{ $rencanaPenerimaan->income_plan1 }}" class="form-control {{ $errors->has('income_plan1') ? 'is-invalid':'' }}"  placeholder="Masukkan Rencana Minggu 1" required>
                    <p class="text-danger">{{ $errors->first('income_plan1') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Realisasi Minggu 1</label>
                    <input type="number" name="income_real1" value="{{ $rencanaPenerimaan->income_real1 }}" class="form-control {{ $errors->has('income_real1') ? 'is-invalid':'' }}" placeholder="Masukkan Realisasi Minggu 1" required>
                    <p class="text-danger">{{ $errors->first('income_real1') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Rencana Minggu 2</label>
                    <input type="number" name="income_plan2" value="{{ $rencanaPenerimaan->income_plan2 }}" class="form-control {{ $errors->has('income_plan2') ? 'is-invalid':'' }}"  placeholder="Masukkan Rencana Minggu 2" required>
                    <p class="text-danger">{{ $errors->first('income_plan2') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Realisasi Minggu 2</label>
                    <input type="number" name="income_real2" value="{{ $rencanaPenerimaan->income_real2 }}" class="form-control {{ $errors->has('income_real2') ? 'is-invalid':'' }}" placeholder="Masukkan Realisasi Minggu 2" required>
                    <p class="text-danger">{{ $errors->first('income_real2') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Rencana Minggu 3</label>
                    <input type="number" name="income_plan3" value="{{ $rencanaPenerimaan->income_plan3 }}" class="form-control {{ $errors->has('income_plan3') ? 'is-invalid':'' }}"  placeholder="Masukkan Rencana Minggu 3" required>
                    <p class="text-danger">{{ $errors->first('income_plan3') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Realisasi Minggu 3</label>
                    <input type="number" name="income_real3" value="{{ $rencanaPenerimaan->income_real3 }}" class="form-control {{ $errors->has('income_real3') ? 'is-invalid':'' }}" placeholder="Masukkan Realisasi Minggu 3" required>
                    <p class="text-danger">{{ $errors->first('income_real3') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Rencana Minggu 4</label>
                    <input type="number" name="income_plan4" value="{{ $rencanaPenerimaan->income_plan4 }}" class="form-control {{ $errors->has('income_plan4') ? 'is-invalid':'' }}"  placeholder="Masukkan Rencana Minggu 4" required>
                    <p class="text-danger">{{ $errors->first('income_plan4') }}</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Realisasi Minggu 4</label>
                    <input type="number" name="income_real4" value="{{ $rencanaPenerimaan->income_real4 }}" class="form-control {{ $errors->has('income_real4') ? 'is-invalid':'' }}" placeholder="Masukkan Realisasi Minggu 4" required>
                    <p class="text-danger">{{ $errors->first('income_real4') }}</p>
                </div>
            </div>
        </div>

        <div class="form-group">
            <a href="{{ url('rencana-penerimaan') }}" class="btn btn-outline-dark btn-sm"><i data-feather="arrow-left"></i> Kembali</a>
            <button class="btn btn-primary btn-sm"><i data-feather="save"></i> Simpan</button>
        </div>
    </form>

</div>  

@endsection