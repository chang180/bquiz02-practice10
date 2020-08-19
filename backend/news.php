<fieldset>
    <legend>最新文章管理</legend>
    <form action="api/edit_news.php" method="post">
        <table>
            <tr>
                <td width="20%">編號</td>
                <td width="50%">標題</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
                <td></td>
            </tr>
            <?php
            $total = $News->count(['sh' => 1]);
            $div = 5;
            $pages = ceil($total / $div);
            $now = $_GET['p'] ?? "1";
            $start = ($now - 1) * $div;
            $prev = (($now - 1) > 0) ? ($now - 1) : 1;
            $next = (($now + 1) <= $pages) ? ($now + 1) : $pages;
            $rows = $News->all([], " LIMIT $start,$div");
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td><?= ($start + 1); ?>.</td>
                    <td>
                        <?= $row['title']; ?>
                    </td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? "checked" : ""; ?>></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                    <td><input type="hidden" name="id[]" value="<?= $row['id']; ?>"></td>
                </tr>
            <?php
                $start++;
            } ?>
        </table>
        <?php
        echo "<a href='?do=news&p=$prev'> < </a>";
        for ($i = 1; $i <= $pages; $i++) {
            $font = ($now == $i) ? "32px" : "20px";
            echo "<a href='?do=news&p=$i' style='font-size:$font'>$i</a>";
        }
        echo "<a href='?do=news&p=$next'> > </a>";
        ?>
        <div class="ct"><button>確定修改</button></div>
    </form>
</fieldset>