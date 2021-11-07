@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('이미지 업로드') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" />
                        <button type="submit">upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

