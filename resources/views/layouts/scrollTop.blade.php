@section('scrollTop')
<div id="app">
    <transition>
        <div v-show="buttonActive" class="to-top-btn" @click="scrollTop">
            <i class="fas fa-5x fa-chevron-circle-up"></i>
        </div>
    </transition>
</div>
@endsection