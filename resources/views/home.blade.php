@extends('layouts.app')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                <h1 class="text-center">マネースクリプトテスト</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>このテストは、あなたのお金に対しての思い込みを浮き彫りにし、
                        これからのお金の使い方を見直し、より良くしていくために、必要となります。
                    </h3>
                </div>
            </div>
            <div class="text-center flex-column">
            <a href="/test" class="btn btn-primary rounded-pill w-50 font-weight-bold my-5">
            <h1 class="my-3">テスト</h1>
            </a>
            </div>
            <div class="text-center flex-column">
            <a href="/list" class="btn btn-primary rounded-pill w-50 font-weight-bold my-5">
            <h1 class="my-3">記録</h1>
            </a>
            </div>
        </div>
    </div>
</div>
@endsection
