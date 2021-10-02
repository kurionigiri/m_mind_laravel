<header class="position-fixed bg-primary w-100 mb-5" style="z-index: 10; height: 70px;">
<a href="/home" class="btn btn-secondary ml-5">ホーム</a>
</header>
@extends('layouts.app')

@section('content')
@csrf
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">記録</h3>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="col-2">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col-2" calss="frame-b" style="font-size: 15px;">日付</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dates as $date)
                                    <tr>
                                        <td class="text-center font-weight-bold" style="font-size: 15px;">
                                            {{$date->created_at}}
                                @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col-2" calss="frame-b" style="font-size: 15px;">忌避</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($evas as $eva)
                                    <tr>
                                        <td class="text-center font-weight-bold" style="font-size: 15px; padding:24px 0;">
                                            {{$eva->evas}}
                                @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col-2" calss="frame-b" style="font-size: 15px;">崇拝</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($wors as $wor)
                                    <tr class="mb-5"> 
                                        <td class="text-center font-weight-bold " style="font-size: 15px; padding:24px 0;">
                                            {{$wor->wors}}
                                @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col-2" calss="frame-b" style="font-size: 15px;">地位</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($stas as $sta)
                                    <tr>
                                        <td class="text-center font-weight-bold" style="font-size: 15px; padding:24px 0;">
                                            {{$sta->stas}}
                                @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-2">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th scope="col-2" calss="frame-b" style="font-size: 15px;">警戒</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vigs as $vig)
                                    <tr>
                                        <td class="text-center font-weight-bold" style="font-size: 15px; padding:24px 0;">
                                            {{$vig->vigs}}
                                @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
