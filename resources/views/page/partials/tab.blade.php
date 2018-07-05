<div id="app" v-cloak>
    <!--设置value便于父组件与子组件通信-->
    <div id="left">
    <button-counter></button-counter>
        <tabs v-model='value'>
            <pane label="基础组件" name='1'>
            </pane>
            <pane label="业务组件" name='2'>
                标签二的内容111
            </pane>
        </tabs>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="{{asset('js/vue/tab/style.css')}}" />
<script src="{{asset('js/vue/tab/pane.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('js/vue/tab/tabs.js')}}" type="text/javascript" charset="utf-8"></script>

<script type="text/template" id="button">
    <button v-on:click="count += 1">You clicked me @{{ count }} times.</button>
</script>
<script type="text/template" id="container">
    <div class="container"><div class="topBar">这个地方在渲染后不会被占用</div><slot></slot></div>
</script>
<script>
    Vue.component('button-counter', {
    data: function () {
        return {
        count: 0
        }
    },
    template: '#button'
    });
    Vue.component('app',{
        template:'#container'
    });
</script>
<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            //初始显示第几个
            value: '1'
        }
    });
</script>
<style>
#left{
    display:table-cell;
}
</style>