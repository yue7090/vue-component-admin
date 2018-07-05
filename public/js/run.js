function run()
{
    var html=template_editor.getValue();
    var css = '<style>'+style_editor.getValue()+'</style>';
    var js = javascript_editor.getValue();
    var iframe = document.getElementsByTagName('iframe')[0].contentWindow;

    iframe.document.getElementsByTagName('body')[0].innerHTML=(html+css);
    window.frames['iframe'].eval(js);
}
function formSubmit()
{
    $("#template").val(template_editor.getValue());
    $("#javascript").val(javascript_editor.getValue());
    $("#style").val(style_editor.getValue());
}
function show_component(id)
{
    var urls = url+'/'+id;
    $.get(urls,{},function(data){
        var result = JSON.parse(data);
        if(result.data && result.error == 0)
        {
            var html= result.data.template;
            var css = '<style>'+result.data.style+'</style>';
            var js = result.data.javascript;
            var iframe = document.getElementsByTagName('iframe')[0].contentWindow;
            iframe.document.getElementsByTagName('body')[0].innerHTML=(html+css);
            window.frames['iframe'].eval(js);
        }
    });
}