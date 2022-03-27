@extends('layouts.base')


@section('pageCss')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection

@section('title', ' | News')

@section('hero_title', 'News')

@section('content')
    <section class="main-contents w-container">
        <div class="side-container">
            <!-- liタグに置き換え -->
            <div class="category-container">
                <h3>CATEGORY</h3>
                <button class="current">すべて</button>
                <button>サービス</button>
                <button>SNS</button>
                <button>新発売</button>
            </div>
            <!-- liタグに置き換え -->
            <div class="archives-container">
                <h3>ARCHIVES</h3>
                <a href="#">2022年03月27日</a>
                <a href="#">2022年02月14日</a>
                <a href="#">2022年01月04日</a>
                <a href="#">2021年12月25日</a>
            </div>
        </div>
        <div class="news-container">
            <table>
                <tbody>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年03月27日</p>
                            <span class="new">新発売</span>
                        </th>
                        <td>
                            <a class="news-title" href="{{ url('news/show') }}">新発売!!シナモンロール！</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2022年02月14日</p>
                            <span class="sns">SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">バレンタインデーのランチお待ちしております！</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2022年02月05日</p>
                            <span>サービス</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">コロナウイルス感染予防対策に関するご協力のお願い</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2022年02月24日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">本日のケーキ　残りあとわずかです！</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2022年02月17日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">今日のおすすめパスタは？</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2022年01月04日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">あけましておめでとうございます！</a>
                        </td>
                    </tr>
                    <tr class="news-item">
                        <th class="news-head">
                            <p>2021年12月25日</p>
                            <span>SNS</span>
                        </th>
                        <td>
                            <a class="news-title" href="news_detail.html">メリークリスマス！素敵な時間をお過ごしください</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="pagination-container w-container">
        <ul class="pagination">
            <li class="pre">
                <a href="#"><span><i class="fas fa-arrow-left"></i></span></a>
            </li>
            <li>
                <a href="#" class="current-page" ><span>1</span></a>
            </li>
            <li>
                <a href="#"><span>2</span></a>
            </li>
            <li>
                <a href="#"><span>3</span></a>
            </li>
            <li>
                <a href="#"><span>4</span></a>
            </li>
            <li>
                <a href="#"><span>5</span></a>
            </li>
            <li>
                <a href="#"><span>6</span></a>
            </li>
            <li class="next">
                <a href="#"><span><i class="fas fa-arrow-right"></i></span></a>
            </li>
        </ul>
    </section>

    <section id="app">
        <transition>
            <div v-show="buttonActive" class="to-top-btn" @click="scrollTop">
                <i class="fas fa-4x fa-chevron-circle-up"></i>
            </div>
        </transition>
    </section>
@endsection

@section('pageScript')
    <script src="{{ asset('js/scrollHandle.js') }}"></script>
@endsection
