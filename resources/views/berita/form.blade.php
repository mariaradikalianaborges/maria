@csrf
<div class="Form-group row">
        <label for="judul" class="col-md-4 col-Form-label text-md-right">{{ __('Judul') }}</label>

        <div class="col-md-4">
            <input id="judul" type="text" class="Form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" required autofocus>
            
            @error('judul')
           <span class="invalid-feedback" role="alert">
            <strong>{{$message}}</strong>
           </span>
           @enderror
        </div>
</div>

<div class="Form-group row">
    <label for="kategori_berita_id" class="col-md-2 col Form-label text-md-right">{{__('Berita')}}</label>

    <div class="col-md-10">
        {!! Form::select('kategori_berita_id', $kategori_berita, null, ["class"=> "form-control", "required"]) !!}

        @error('kategori_berita_id')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="isi" class="col-md-2 col form-label text-md-right">{{__('isi')}}</label>

    <div class="col-md-10">
        {!! Form::textarea('isi', null,['class'=>'form-control']); !!}
        @error('isi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
<div>
    
<input id="users_id" type="hidden" class="Form-control @error('users_id') is-invalid @enderror" name="users_id"value="{{ Auth::id() }}" required>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Simpan Data') }}
        </button>
        <button>
        <a href="{!! route('berita.index') !!}"class="btn btn-danger">
            {{ __('Batal') }}
        </a>
    </div>
</div>