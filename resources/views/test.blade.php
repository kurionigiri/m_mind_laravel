<header class="position-fixed bg-primary w-100 mb-5" style="z-index: 10; height: 70px;">
<h3 class="text-center my-4 text-white">1=完全に反対　　2=反対　　3=少し反対　　4=少し賛成　　5=賛成　　6=完全に賛成
<a href="/home" class="btn btn-secondary ml-5">やめる</a>
</h3>
</header>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center position-relative">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h4 class="text-center">以下の質問に対し、どのくらい賛成できるか、お答えください。</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/store" method="post">
                    @csrf
                        <ul class="list-group">
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">1.　他の人が自分よりも貧しいときは、私はより多くのお金を持つわけにはいかない</h5>
                            <input type="radio" name="q1" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q1" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q1" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q1" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q1" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q1" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">2.　金持ちは欲深い　　　　　　　　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q2" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q2" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q2" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q2" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q2" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q2" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">3.　人は他人を利用して金持ちになるものだ　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q3" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q3" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q3" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q3" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q3" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q3" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">4.　私はお金を稼ぐに値しない人間だ　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q4" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q4" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q4" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q4" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q4" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q4" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">5.　善良な人はお金のことを気にしてはいけない　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q5" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q5" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q5" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q5" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q5" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q5" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">6.　お金持ちであると同時に善人でいるのは難しい　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q6" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q6" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q6" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q6" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q6" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q6" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">7.　お金が少ないほど、人生は良いものになる　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q7" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q7" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q7" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q7" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q7" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q7" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">8.　お金は人を堕落させる　　　　　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q8" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q8" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q8" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q8" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q8" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q8" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">9.　金持ちになるということは、昔からの友人や家族と疎遠になるということだ　　</h5>
                            <input type="radio" name="q9" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q9" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q9" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q9" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q9" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q9" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">10.　もっとお金があれば、物事は良くなるだろう　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q10" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q10" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q10" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q10" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q10" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q10" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">11.　お金が多ければ幸せになれる　　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q11" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q11" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q11" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q11" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q11" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q11" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">12.　貧しいまま幸せになるのは難しい　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q12" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q12" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q12" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q12" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q12" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q12" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">13.　お金はいくらあっても足りない　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q13" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q13" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q13" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q13" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q13" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q13" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">14.　お金は力だ　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q14" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q14" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q14" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q14" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q14" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q14" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">15.　お金は私の問題を全て解決してくれる　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q15" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q15" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q15" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q15" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q15" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q15" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">16.　お金は自由を買うことができる　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q16" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q16" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q16" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q16" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q16" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q16" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">17.　ほとんどの貧乏人はお金を持つ資格がない　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q17" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q17" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q17" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q17" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q17" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q17" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">18.　愛とお金を同時に得ることはできない　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q18" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q18" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q18" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q18" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q18" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q18" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">19.　何かを買うときは新品しか買わない　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q19" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q19" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q19" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q19" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q19" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q19" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">20.　貧しい人は怠け者だ　　　　　　　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q20" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q20" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q20" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q20" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q20" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q20" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">21.　お金は人生に意味を与えるものだ　　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q21" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q21" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q21" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q21" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q21" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q21" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">22.　私の自己価値は、私の純資産に等しい　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q22" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q22" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q22" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q22" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q22" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q22" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">23.　「最高」と判断できないものは、買う価値がない　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q23" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q23" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q23" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q23" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q23" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q23" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">24.　人間の成功は、稼いだお金の量で決まる　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q24" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q24" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q24" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q24" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q24" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q24" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">25.　自分がどれだけのお金を持っているか、どれだけ稼いでいるかを他人に教えてはいけない</h5>
                            <input type="radio" name="q25" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q25" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q25" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q25" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q25" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q25" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">26.　他人にどれだけお金を持っているか、あるいはどれぐらい稼いでいるかを尋ねるのは間違っている</h5>
                            <input type="radio" name="q26" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q26" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q26" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q26" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q26" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q26" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">27.　お金は使うのではなく、貯めるべきだ　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q27" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q27" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q27" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q27" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q27" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q27" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">28.　将来トラブルが起きた時のために貯金をすることは重要だ　　　　　　　　　　</h5>
                            <input type="radio" name="q28" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q28" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q28" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q28" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q28" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q28" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">29.　人間はお金のために働くべきであり、他人から経済的に保護されるべきではない</h5>
                            <input type="radio" name="q29" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q29" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q29" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q29" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q29" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q29" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">30.　もしもの時のためにお金が貯まっていなかったら、神経質になってしまう　　　</h5>
                            <input type="radio" name="q30" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q30" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q30" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q30" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q30" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q30" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">31.　たとえ時間がかかっても、何かを買う前には常に最良のものを探すべきだ　　　</h5>
                            <input type="radio" name="q31" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q31" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q31" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q31" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q31" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q31" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                            <li class="list-group-item d-flex flex-row">
                            <h5 class="pr-5">32.　自分のためにお金を使うのは贅沢だ　　　　　　　　　　　　　　　　　　　　</h5>
                            <input type="radio" name="q32" id="l1" value="1" style="transform:scale(2.0);"><label for="l1" class="px-3"> 1</label>
                            <input type="radio" name="q32" id="l2" value="2" style="transform:scale(2.0);"><label for="l2" class="px-3"> 2</label>
                            <input type="radio" name="q32" id="l3" value="3" style="transform:scale(2.0);"><label for="l3" class="px-3"> 3</label>
                            <input type="radio" name="q32" id="l4" value="4" style="transform:scale(2.0);"><label for="l4" class="px-3"> 4</label>
                            <input type="radio" name="q32" id="l5" value="5" style="transform:scale(2.0);"><label for="l5" class="px-3"> 5</label>
                            <input type="radio" name="q32" id="l6" value="6" style="transform:scale(2.0);"><label for="l6" class="px-3"> 6</label>
                            </li>
                        </ul>
                        <div class="text-center flex-column">
                        <input type="hidden" name="user_id" value="{{ $user['id'] }}">
                        <button type="submit" class="btn btn-primary rounded-pill w-25 font-weight-bold my-5">
                            <h1 class="my-3">記録</h1>
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
