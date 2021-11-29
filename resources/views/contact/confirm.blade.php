@extends('layouts.base')

@section('pageCss')
    <link rel="stylesheet" href="{{ mix('css/contact.css') }}">
    <link rel="stylesheet" href="{{ mix('css/confirm.css') }}">
@endsection

@section('title', ' | Confirm')

@section('hero_title', 'Confirm')
    
@section('content')
<section class="contact-form-wrapper w-container confirmation">
    <h2>Contact Confirmation</h2>
    <form method="post" action="{{ url('/contact/thanks') }}">
        <table class="contact-form-table">
            <tbody>
                <tr>
                    <th>
                        <p>お名前</p>
                    </th>
                    <td>
                        <p>珈琲太郎</p>
                    </td>
                </tr>
                    <tr>
                        <th>
                            <p>メールアドレス</p>
                        </th>
                        <td>
                            <p>xxxxxx@xxx</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>電話番号</p>
                        </th>
                        <td>
                            <p>090-0000-0000</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p>カテゴリ</p>
                        </th>
                        <td>
                            <p>プルダウン１</p>
                        </td>
                    </tr>
                    <tr>
                        <th class="contact-head">
                            <p>内容</p>
                        </th>
                        <td>
                            <p>内容が入ります内容が入ります</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="btn-wrapper">
                <a href="./contact.html">修正する</a>
                <button class="btn-md submit" type="submit" value="submit" >送信する</button>
            </div>
        </form>
    </section>
@endsection