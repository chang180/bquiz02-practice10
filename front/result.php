    <fieldset>
        <?php $row=$Que->find($_GET['id']); 
        $total=($row['count']==0)?1:$row['count'];
        $parent=$row['id'];
        ?>
        <legend>目前位置：首頁>問卷調查><?=$row['text'];?></legend>
        <h3><?=$row['text'];?></h3>
        <?php
        $options=$Que->all(['parent'=>$parent]);
    foreach($options as $o){
        $rate=$o['count']/$total;
    ?>
    <div style="display:flex">
<div style="width:30%"><?=$o['text'];?></div>
<div style="width:<?=round(50*$rate)?>%;background:#ccc;height:20px"></div>
<div style="width:20%"><?=$o['count'];?>票(<?=round(100*$rate);?>%)</div>
</div>
    <?php
    }
        ?>
        <input type="hidden" name="id" value="<?=$parent;?>">
        <div class="ct"><button onclick="location.href='?do=que'">返回</button></div>
    </fieldset>