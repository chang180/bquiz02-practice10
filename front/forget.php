請輸入信箱以查詢密碼<br>
<input type="text" name="email" id="email"><br>
<div id="info"></div><br>
<button id="find">尋找</button>
<script>
    $("#find").on("click", function() {
        $.post("api/chkemail.php", {
            "email": $("#email").val()
        }, function(res) {
            $("#info").text(res);
        })
    })
</script>