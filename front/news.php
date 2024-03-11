<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
</marquee>
<div style="height:32px; display:block;"></div>
<!--正中央-->

<h3>更多最新消息區</h3>
<hr>

<?php

?>
<ol class="ssaa" start="<?=$start+1;?>">
    <?php
       $total = $News->count(['sh'=>1]);
       $div = 5;
       $page = ceil($total / $div);
       $now = $_GET['p'] ?? 1;
       $start = ($now - 1) * $div;
       $news = $News->all(['sh'=>1],"limit $start,$div");
       foreach ($news as $new) {
           ?>
            <li class="sswww">
                <?= mb_substr($new['text'], 0, 20); ?>...
                <div class="all" style="display: none;"><?= $new['text']; ?>
                </div>
            </li>
        <?php
        }
        ?>
    </ol>
    <div class="cent">
            <?php
            if ($now - 1 > 0) {
                $prev = $now - 1;
                echo "<a href='?do=$do&p=$prev'> < </a>";
            }
            for ($i = 1; $i <= $page; $i++) {
                $size = ($i == $now) ? 'font-size:24px' : 'font-size:16px';
                echo "<a href='?do=$do&p=$i' style='$size'>$i</a>";
            }
            if ($now + 1 <= $page) {
                $next = $now + 1;
                echo "<a href='?do=$do&p=$next'> > </a>";
            }
            ?>
        </div>
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
</script>