<?php
if (isset($_SESSION['user'])) {
	to("./back.php");
}else{
?>
<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
</marquee>
<div style="height:32px; display:block;"></div>
<!--正中央-->
<p class="t botli">管理員登入區</p>
<p class="cent">帳號 ： <input id="acc" name="acc" type="text"></p>
<p class="cent">密碼 ： <input id="pw" name="pw" type="password"></p>
<p class="cent"><button onclick="login()">送出</button><button onclick="reset()">清除</button></p>
</div>
<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;"></div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
				"top": $(this).offset().top - 50
			})
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function() {
			$("#alt").hide()
		}
	)

	function login() {
		$.post("./api/login.php", {
			acc: $("#acc").val(),
			pw: $("#pw").val()
		}, (res) => {
			if (parseInt(res) > 0) {
				location.href='back.php';
			} else {
				alert("帳號或密碼錯誤");
				$("#acc").val('');
				$("#pw").val('');
			}
		})
	}

	function reset() {
		$("#acc").val('');
		$("#pw").val('');
	}
</script>
<?php
}
?>