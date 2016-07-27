<?php include("./header.php");
$food_id = !empty($_GET['food_id'])&&is_numeric($_GET['food_id'])?$_GET['food_id']:0;
$sql = "select content from `food_menu` where food_id={$food_id}";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
?>

<div class="gg_all" id="bj-hot">您当前位置：<a  href="/index.php">美食家</a> >> <a  href="/show.php?f_type=<?php echo $fid[$_GET['f_type']]; ?>"><?php echo $fid[$_GET['f_type']]; ?></a> >> 浏览菜谱</div> 

<div class="youxi_all">
 	<div id="game_con1_left">
 	<?php echo $row['content']; ?>
        <div style="clear:both"></div>
	</div>
</div>


<?php include("./footer.php") ?>