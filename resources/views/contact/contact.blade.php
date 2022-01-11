@extends('layouts.base')


@section('pageCss')
    <link rel="stylesheet" href="{{ url('css/contact.css', []) }}">
@endsection

@section('title', ' | Contact')

@section('hero_title', 'Contact')
    
@section('content')
<section class="contact-form-wrapper w-container">
    <h2>Contact Form</h2>
    <form method="post" action="thanks.html">
        <table class="contact-form-table">
            <tbody>
                <tr>
                    <th>
                        お名前
                        <span class="required-icon">必須</span>
                    </th>
                    <td>
                        <input type="text" name="your-name" id="" placeholder="珈琲太郎" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        メールアドレス
                        <span class="required-icon">必須</span>
                    </th>
                    <td>
                        <input type="email" name="your-email" id="" placeholder="xxxxxx@xxx" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        電話番号
                        <span class="required-icon">必須</span>
                    </th>
                    <td>
                        <input type="tel" name="your-phone-number" id="" placeholder="090-0000-0000" required>
                    </td>
                </tr>
                <tr>
                    <th>
                        カテゴリ
                        <span class="required-icon">必須</span>
                    </th>
                    <td>
                        <select name="contact-cate" id="contact-cate" required>
                            <option value="0" selected>選択してください</option>
                            <option value="1" >プルダウン１</option>
                            <option value="2" >プルダウン２</option>
                            <option value="2" >とりあえずプルダウン３</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th class="contact-head">
                        内容
                        <span class="optional-icon">任意</span>
                    </th>
                    <td>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="btn-wrapper">
            <button class="btn-lg confirm" type="submit" value="confirm" >内容を確認</button>
        </div>
    </form>
</section>
@endsection