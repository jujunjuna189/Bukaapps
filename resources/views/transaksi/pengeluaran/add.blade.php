@extends('layouts.app_templates')
@section('content')
<div class="media-body">
    <div class="az-content-header">
        <div>
            <h6 class="az-content-title tx-18 mg-b-5">Tambah Pengeluaran</h6>
            <p class="az-content-text tx-13 mg-b-0">Isi Form dengan Benar!</p>
        </div>
    </div><!-- az-content-header -->
    
    <div class="card">
        <div class="card-body">
            <form action="{{route('transaksi.pengeluaran.add.proses')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Nominal</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                Rp
                            </div>
                        </div>
                        <input type="number" class="form-control @error('purchase') is-invalid @enderror" placeholder="Masukan Nominal" name="purchase" id="purchase" value="{{ old('purchase') }}">
                    </div>
                        
                    
                    @error('purchase')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="100" rows="5"></textarea>
                    
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-froup text-right">
                    <button type="submit" class="btn btn-primary"><i class="typcn typcn-folder-add"></i> Simpan</button>
                </div>
                
            </form>
        </div>
    </div>
</div><!-- media-body -->
@endsection