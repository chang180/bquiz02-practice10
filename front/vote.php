<form action="api/vote.php" method="post">
    <fieldset>
        <?php $row=$Que->find($_GET['id']); 
        $parent=$row['id'];
        ?>
        <legend>目前位置：首頁>問卷調查><?=$row['text'];?></legend>
        <h3><?=$row['text'];?></h3>
        <?php
        $options=$Que->all(['parent'=>$parent]);
    foreach($options as $o){
    ?>
    <input type="radio" name="opt" value="<?=$o['id'];?>"><?=$o['text'];?><br>
    <?php
    }
        ?>
        <input type="hidden" name="id" value="<?=$parent;?>">
        <div class="ct"><button>我要投票</button></div>
    </fieldset>
</form>