@extends('layouts.base')

@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/recruit.css') }}">
@endsection

@section('title', ' | Recruit')

@section('hero_title', 'Recruit')
    
@section('content')
    <section class="main-contents w-container narrow">
        <div class="head-text-container">
            <h2>People</h2>
            <p>テキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入ります</p>
            <p>テキストが入りますテキストが入りますテキストが入ります</p>
        </div>
        <div class="description-container">
            <h2>Job Description</h2>
            <table class="desc-table proper">
                <tbody>
                    <tr>
                        <th>募集職種</th>
                        <td>ホールスタッフ</td>
                    </tr>
                    <tr>
                        <th>仕事内容</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>都内数カ所あり</td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td>シフト勤務</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>¥210,000〜/月　※給与UP制度あり</td>
                    </tr>
                    <tr>
                        <th>諸手当</th>
                        <td>残業手当</td>
                        <td>交通費：全額支給</td>
                    </tr>
                    <tr>
                        <th>待遇</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>休日休暇</th>
                        <td>年末年始・忌引休暇・育児休暇</td>
                    </tr>
                </tbody>
            </table>
            <table class="desc-table parttime">
                <tbody>
                    <tr>
                        <th>募集職種</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>仕事内容</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>勤務地</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>勤務時間</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>給与</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>諸手当</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>待遇</th>
                        <td>テキスト</td>
                    </tr>
                    <tr>
                        <th>休日休暇</th>
                        <td>テキスト</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="entry-info">
            <p>応募される方は履歴書（写真付）をご用意の上、下記までお電話ください。</p>
            <p>TEL.03-1234-5678</p>
            <p>受付時間 10:00〜19:00（採用担当まで）</p>
        </div>
    </section>
@endsection

@section('pageScript')
    <script src="{{ asset('js/recruit.js') }}"></script>
@endsection