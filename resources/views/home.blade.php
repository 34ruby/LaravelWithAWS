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
                    {{ __('アトゥルリエはストックイメージサイトで、YJU学生がプログラミング、文書作業など様々な活動に役立つイメージを提供しています。') }}

                    <div style="max-width:908px;margin:auto;padding:0 10px 10px">
                        <div id="demo1" class="flex-images">
                        <div class="item" data-w="200" ><img src="{{URL::asset('/images/image01.png')}}"></div>
                        <div class="item" data-w="200" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>
                        <div class="item" data-w="200" ><img src="{{URL::asset('/images/image03.jpg')}}"></div>
                        <div class="item" data-w="200" ><img src="{{URL::asset('/images/image04.jpg')}}"></div>
                        <div class="item" data-w="200" ><img src="{{URL::asset('/images/image03.jpg')}}"></div>
                        <div class="item" data-w="200" ><img src="{{URL::asset('/images/image02.jpg')}}"></div>

                    </div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    new flexImages({selector: '#demo1', rowHeight: 140});

</script>

@endsection


