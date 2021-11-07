@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div>
                    {{ __('Dashboard') }}
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ようこそ、アトゥルリエへ。') }} <br>
                    {{ __('이 페이지는 로그인 하고 사진 여러개 보여주는 곳으로 활용하고작 함.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
