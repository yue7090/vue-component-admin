<div id="container">
    <div id="right" class='container'>
    <button-counter></button-counter>
    <button-counter></button-counter>
    <div>There's also the possibility of moving elements around in the same container, changing their position</div>
        <div class="phone"></div>
    </div>
</div>
<script type="text/javascript">
    var app1 = new Vue({
    el:'#right',
    });
</script>
<style type="text/css">
#container{
    position: absolute;
    height: 520px;
    width: 374px;
    top: 50%;
    left: 50%;
    margin-top: -320px;
    margin-left: -187px;
    background: #fff;
}
#right{
    display:table-cell;
}
/* .phone{
    background-image: url("{{ asset('images/phonewhite-7a04c3.svg') }}");
    background-repeat: no-repeat;
    border-radius: 40px;
    border: 0;
    position: absolute;
    left: 24px;
    top: -20px;
    width: 328px;
    height: 560px;
    z-index: 999;
    pointer-events: none;
} */
</style>