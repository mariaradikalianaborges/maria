 @csrf
<div class="form-group row">
        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-4">
            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
            @error('nama')

           <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>
<div>
            <input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id"value="{{ Auth::id() }}" required autocomplete="users_id" autofocus>
            
            </div>

   

<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <button>
                                <a href="{!! route('kategori_galeri.index') !!}"class="btn btn-danger">
                                    {{ __('Batal') }}
                                </button>
                            </div>
                        </div>

                               
