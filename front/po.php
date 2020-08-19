目前位置：首頁 > 分類網誌 > <span id="head"></span><br>
<div class="contain" style="display:flex;justify-content:center">
<fieldset style="width:30%">
    <legend>分類網誌</legend>
    <div><a href='#' id="1" onclick="getList(1)">健康新知</a></div>
    <div><a href='#' id="2" onclick="getList(2)">菸害防制</a></div>
    <div><a href='#' id="3" onclick="getList(3)">癌症防治</a></div>
    <div><a href='#' id="4" onclick="getList(4)">慢性病防治</a></div>
</fieldset>
<fieldset style="width:50%">
    <legend>文章列表</legend>
    <div id="list"></div>
</fieldset>
</div>
<script>
    getList(1);
    function getList(type){
        $("#head").text($("#"+type).text());
        $.post("api/getlist.php",{type},function(res){
            $("#list").html(res);
        })
    }
    function getPost(id){
        $.post("api/getpost.php",{id},function(res){
            $("#list").html(res);
        })
    }


</script>