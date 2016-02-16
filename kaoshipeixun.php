<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <title>Justified Nav Template for Bootstrap</title>
	

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		.error{color:#FF0000;}
	
	</style>
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="masthead">
		
			
		<div>
		<h1 style="display:inline;" class="text-muted">留美党</h1>
		<p style="display:inline;position:relative;left:800px;"><button type="button" class="btn btn-info btn-sm">用户登录</button><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#regModal">注册用户</button></p>
		
		</div>
<!-- Register form -->
<div class="modal fade"  role="dialog" id="regModal" data-backdrop="static">
	<form id="myform" role="form" method="post" action="">
	<div class="modal-dialog" >
		<div class="modal-content" >
		<div class="modal-header">
		<h1>用户注册</h1>
		</div>
		<div class="modal-body">
				<p>带<span class="error">*</span>为必填项目</p>
			
				<div class="form-group">
					
					<label for="username">用户名:<span class="error">*</span></label>
					<input style="width:200px;" type="text" class="form-control " id="username" name="usr"><span><?php if(isset($nameerror)){echo $nameerror;}?></span>	
				
				</div>
				<div class="form-group">
					<label for="pwd">密码:<span class="error">*</span></label>
					<input style="width:200px;" type="password" class="form-control" id="pwd" name="password">
				</div>
				<div class="form-group">
					<label for="pwdconfirm">确认密码:</label>
					<input style="width:200px" type="password" class="form-control" id="pwdconform" name="passwordconfirm">
				
				</div>
				<div class="form-group">
					<label for="email">Email:<span class="error">*</span></label>
					<input style="width:300px;" type="email" class="form-control" id="email" name="email">
				</div>
				<div class="form-group">
					<label for="status">目前状态：</label>
					<select style="width:300px;"class="form-control" name="status">
						<option>本人准备或正在申请</option>
						<option>我的孩子在准备申请</option>
						<option>正在美国留学</option>
						<option>留在美国已毕业工作</option>
						<option>高中老师</option>
						<option>留学中介顾问</option>
						<option>没别的目的就是看看</option>
					</select>
				</div>
				<div class="form-group">
					<label>感兴趣项目：</label>
					<select style="width:300px;" class="form-control" name="intprogram">
						<option>本科名校</option>
						<option>金融工程</option>
						<option>金融工程硕士</option>
					
					</select>
				
				</div>
			
		</div>
		
		<div class="modal-footer">
			
			<button type="submit"  class="btn btn-default" name="submit" value="register" id="registerbutton">注册</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
			
		</div>
		
		</div>

	</div>
</form>
</div>
<script type="text/javascript">
	//var val="<?php echo $nameerror?>";
	//alert(val);
</script>


			
	
        <nav>
          <ul class="nav nav-justified">
            <li style=""class="active"><a href="index.php">首页</a></li>
            <li><a href="#">精华文库</a></li>
            <li><a href="#">录取数据</a></li>
            <li><a href="#">就业数据</a></li>
            <li><a href="#">文书资源</a></li>
			<li><a href="kaoshipeixun.php">考试培训</a></li>
            <li><a href="#">院校点评</a></li>
			<li><a href="#">面试经验</a></li>
			<li><a href="#">分享社区</a></li>
			<li><a href="#">项目专区</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
<div class="row">
		<div style="left:100px;" class="col-lg-12">
		<form method="post">
		<table>
			<tr>
				<td>
					选择培训项目:</td>
				<td>
					<p>
					<input type="checkbox" name="peixunxiangmubuxian">不限
					<input type="checkbox" value="雅思"name="peixunxiangmu[]" >雅思
					<input type="checkbox" name="peixunxiangmu[]" onclick="">GRE
					<input type="checkbox" name="peixunxiangmu[]" onclick="">GMAT
				</p>
				</td>
			</tr>
			<tr>
				<td>
					<p>
					选择考试分项:</td>
					</p>
				<td>
				<p>
					<input type="checkbox" value="" name="kaoshifenxiangbuxian" class="kaoshifenxiang">不限
					<input type="checkbox" value="阅读" name="kaoshifenxiang[]" class="kaoshifenxiang">阅读
					<input type="checkbox" value="听力" name="kaoshifenxiang[]">听力
				</p>
				</td>
			
			</tr>
			<tr>
				<td>
					<p>
					选择开始时间:
					</p>
				</td>
				<td>
					<p>
						<input type="checkbox" name="kaishishijian" /> <input  type="date" placeholder="MM/DD/YYYY" name="starttime" /> &nbsp;<input type="date" name="endtime" placeholder="MM/DD/YYYY">
					</p>				
				</td>
			
			</tr>
			<tr>
				<td>
					<p>
					选择培训地点:
					</p>
					</td>
				<td>
					<p>
						<input type="checkbox" name="peixundidianbuxian" />不限
						<input type="checkbox" name="peixundidian[]" value="北京" />北京
						<input type="checkbox" name="peixundidian[]" value="上海" />上海
						
					</p>
					
				</td>
			
			</tr>
			<tr>
				<td align="right">
				<p>
					培训阶段:
				</p>
				</td>
				<td>
					<p>
						<input type="checkbox" name="peixunjieduan[]" value="预备" />预备
						<input type="checkbox" name="peixunjieduan[]" value="基础" />基础
					</p>
				
				</td>
			</tr>
			<tr>
				<td align="right">
					<p>
					走读/住宿:
					</p>
				</td>
				<td>
					<p>
					<input type="checkbox" name="zouduzhusu" value="不限" />不限
					<input type="checkbox" name="zouduzhusu[]" value="走读" />走读
					<input type="checkbox" name="zouduzhusu[]" value="住宿" />住宿
					
					</p>
				
				</td>
			
			
			</tr>
			<tr>
				<td align="right">
					<p>
					费用:
					</p>
				</td>
				<td>
					<p>
					<input type="checkbox" name="peixunfeiyong" /> <input  type="text" name="startfeiyong" /> &nbsp;<input type="text" name="endfeiyong">
					
					</p>
				
				</td>
			
			</tr>
			<tr style="border-bottom:solid 1px;">
				<td colspan="3" align="center"><input type="submit" name="submit" value="筛选结果"></td>
			
			</tr>
		
		</table>
		</form>
		</div>
	
	
	</div>
	

      <!-- Example row of columns -->
      <?php
	  if(isset($_POST['submit'])){
		$sql="SELECT pxxm,pxfx,kssj,pxdd,pxjd,fy,pxjg FROM shouji where";
		$sqlextra="";
		
		
		//$pxdd=$_POST['peixundidian'];
		if(isset($_POST['kaoshifenxiang'])){
		$pxfx=$_POST['kaoshifenxiang'];
		$addsqlpxfx="";
		foreach($pxfx as $v){
			if(!empty($addsqlpxfx)){
				$addsqlpxfx.=" or pxfx='".$v."'";
			}else{
				$addsqlpxfx.=" pxfx='".$v."'";
			
			}
		}
		$sqlextra.= "(".$addsqlpxfx.")";
		}
		if(isset($_POST['peixunxiangmu'])){
		$pxxm=$_POST['peixunxiangmu'];
		$addsql="";
		foreach($pxxm as $v){
			if(!empty($addsql)){
				$addsql.=" or pxxm='".$v."'";
			
			}else{
				$addsql.="pxxm='".$v."'";
			}
		
		}
		if(empty($sqlextra)){
			$sqlextra.=" ( ".$addsql." ) ";
		}else{
			$sqlextra.=" and ( ".$addsql." ) ";
		}
		}
		
		if(isset($_POST['kaishishijian'])){
		$starttime=$_POST['starttime'];
		$endtime=$_POST['endtime'];
		$addsql="";
		
		if(!empty($addsql)){
				$addsql.=" or kssj >='".$starttime."'"." and kssj<='".$endtime."'";
			
			}else{
				$addsql.=" kssj >='".$starttime."'"." and kssj <='".$endtime."'";
			}
		
		
		if(empty($sqlextra)){
			$sqlextra.=" ( ".$addsql." ) ";
		}else{
			$sqlextra.=" and ( ".$addsql." ) ";
		}
		}
		
		
		
		
		$sql.=$sqlextra;
		/*
		$addsqldidian='';
		foreach($pxdd as $v){
			if(!empty($addsql)){
				$addsqldidian.=" or pxdd='".$v."'";
			
			}else{
				$addsqldidian.="pxdd='".$v."'";
			}
		
		}
		$sql.="and (".$addsqldidian." ) ";
		*/
		
		//echo $sql;
		
		
		$connect->query("SET CHARACTER SET utf8");
		$sqlresult=mysqli_query($connect,$sql);
	   echo '<div class="row">';
		echo '<div style="left:100px;"class="col-lg-8">';
		echo 	'<table>';
			 while($row=mysqli_fetch_assoc($sqlresult)){;
				
					echo '<tr>';
					echo '<td>'."<img src='新东方.jpg' />".$row['pxjg'].'</td>';
					
					echo '<td>'.$row['pxxm'].'<br />'.$row['pxfx'].'</td>';
					
					echo '<td>'.$row['kssj'].'<br />'.$row['pxdd'].'<br />'.$row['pxjd'].'</td>';
					echo '<td>'.'费用:'.$row['fy'].'</td>';
					echo '</tr>';
			}
			echo '</table>';
		echo '</div>';
	  echo '</div>';
	  }
	 ?> 

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
