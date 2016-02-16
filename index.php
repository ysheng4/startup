<?php
//require 'login.php';
//echo $_SERVER[DOCUMENT_ROOT];
//session_start();
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

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
  th{
	text-align:center;
  }
  
  </style>
  
  </head>

  <body>
  <script>
  $(document).ready(function() {   
	//setTimeout( "test()", 1000);
	/*
    $('#login').click(function(){
		var username=$('#username').val();
	var password=$('#password').val();
	//alert(username);
		$.post('/login.php',{pusername:username,ppassword:password},function(data){
			//alert(1);
			data=JSON.parse(data);
			//alert(data['']);
			$('#user_name').html('');
			$('#user_password').html('');
			$('#login').remove();
			$('#user_name').append('用户名:'+data['username']);
			//$('#user_password').append('用户名:'+data['password']);
			
			
			
		});
		
		
	});
       */
     //setInterval( "test()", 1000);
    
	});
  
  
  </script>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
	  <?include ('head.php');?>
	  <!--
        <h3 class="text-muted">留美党</h3>
		<div>
			<form action="" method="post">
			<div id="user_name" class="">
				用户名:<input id="username" class="form-control" style="width:150px;"name="username" type="text">
			</div>
			<div id="user_password" class="">
				密码:<input id="password" class="form-control" style="width:150px;" name="password" type="password">
			</div>
			
			<input type="button" id="login" name="submit" value="登录" />
				
				
			</form>
		</div>
        
		-->
		<nav>
          <ul class="nav nav-justified">
            
            <li><a href="/searchres.php" data-toggle="modal" data-target="" >查询录取数据</a></li>
            <li><a href="#" data-toggle="modal" data-target="#tijiaoModal" >提交录取数据</a></li> 
            
          </ul>
        </nav>
		
		
      </div>
	 
	  <br />
	 
  
	  <div class="modal fade"  role="dialog" id="regModal" data-backdrop="static">
	<form id="myform" role="form" method="post" action="searchres.php">
	<div class="modal-dialog" >
		<div class="modal-content" >
		<div class="modal-header">
		<h1>录取数据</h1>
		</div>
		<div class="modal-body">
				<p>带<span class="error">*</span>为必填项目</p>
			
				<div class="form-group">
					
					<label for="username">选择学校:<span class="error">*</span></label>
					<select name="schoolsel" class="form-control">
					<option>Boston College</option>
					<option>George Washington University</option>
					<option>University of Chicago</option>
					
					</select>
				
				</div>
				<div class="form-group">
					<label for="pwd">选择年份:<span class="error">*</span></label>
					<select name="yearsel" class="form-control">
					<option >2010</option>
					<option >2011</option>
					<option>2012</option>
					</select>
				</div>
				<div style="text-align:center;display:inline">
					<button  id="searchbutton" value="search" name="searchbutton" type="submit" class="btn btn-primary" >开始搜索</button>
				</div>
				<div style="text-align:center;display:inline">
					<button type="button" class="btn btn-primary" data-dismiss="modal">退出</button>
				</div>
				
			
		</div>
		
		
		<div class="modal-footer">
			
			
		</div>
		
		</div>

	</div>
</form>
</div>


	  <div class="modal fade"  role="dialog" id="tijiaoModal" data-backdrop="static" >
	<form id="myform" role="form" method="post" action="">
	<div class="modal-dialog"  style="">
		<div class="modal-content" >
		<div class="modal-header">
		<h1>提交录取数据</h1>
		</div>
		<div class="modal-body">
				<table class="table table-bordered table-hover">
					<tbody>
						<tr >
							<th colspan="2 " >个人信息</th>
						</tr>
						<tr>
							<td>Email:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>性别:</td>
							<td>
								<label class="radio-inline"><input type="radio">男</label>
								<label class="radio-inline"><input type="radio">女</label>
							
							</td>
						</tr>
						<tr>
							<td>国籍身份:</td>
							<td>
								<select >
									<option>中国大陆</option>
									<option>台湾</option>
									<option>香港/澳门</option>
								</select>
							</td>
							</tr>
						<tr>
							<td>项目入读年份:</td>
							<td>
								<select >
									<option>2009</option>
									<option>2010</option>
									<option>2011</option>
								</select>
							
							</td>
						</tr>
						<tr >
							<th colspan="4 " >教育背景</th>
						</tr>
						<tr>
							<td>高中学校:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>高中所在国家:</td>
							<td>
								<select >
									<option>中国大陆</option>
									<option>台湾</option>
									<option>香港/澳门</option>
								</select>
							
							</td>
						</tr>
						<tr>
							<td>高中班级类型:</td>
							<td><select >
									<option>大陆传统高中班</option>
									<option>大陆高中国际/出国班</option>
									<option>大陆高中创新/试验班</option>
								</select>
								</td>
								</tr>
						<tr>
							<td>高中毕业年份:</td>
							<td>
								<input class="text" />
							
							</td>
						</tr>
						<tr>
							<td>高中GPA:</td>
							<td>
								<input type="text" style="width:50px;"> out of <input type="text" style="width:50px;" />
							</td>
							</tr>
						<tr>
							<td>高中班级排名:</td>
							<td>
								<input type="text" style="width:50px;"> out of <input type="text" style="width:50px;" />
							
							</td>
						</tr>
						
						<tr>
							<td>本科就读/毕业学校:</td>
							<td><input class="text" />
								</td>
								</tr>
						<tr>
							<td>本科转学/毕业年份:</td>
							<td>
								<input class="text" />
							
							</td>
						</tr>
						<tr>
							<td>本科专业:</td>
							<td><input class="text" />
								</td>
								</tr>
						<tr>
							<td>本科GPA:</td>
							<td>
								<input type="text" style="width:50px;"> out of <input type="text" style="width:50px;" />
							
							</td>
						</tr>
						<!--
						<tr>
							<td>硕士就读/毕业学校:</td>
							<td><input class="text" />
								</td>
								</tr>
						<tr>
							<td>硕士转学/毕业年份:</td>
							<td>
								<input class="text" />
							
							</td>
						</tr>
						<tr>
							<td>硕士专业:</td>
							<td><input class="text" />
								</td>
								</tr>
						<tr>
							<td>硕士GPA:</td>
							<td>
								<input type="text" style="width:50px;"> out of <input type="text" style="width:50px;" />
							
							</td>
						</tr>
						-->
						<tr >
							<th colspan="4" >标准化考试成绩</th>
						</tr>
						<tr>
							<td>托福总分:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>雅思总分:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>SATI总分:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>ACT总分:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>GRE总分:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>GMAT总分:</td>
							<td><input class="text" /></td>
						</tr>
						<tr>
							<td>SATII考了几门:</td>
							<td><select >
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select></td>
						</tr>
						<tr>
							<td>AP考了几门:</td>
							<td><select >
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select></td>
						</tr>
						<tr>
							<td>IB考了几门:</td>
							<td><select >
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select></td>
						</tr>
						<tr>
							<td>A-level考了几门:</td>
							<td><select >
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
								</select></td>
						</tr>
						<tr >
							<th colspan="4" >标准化考试成绩</th>
						</tr>
						<tr>
							<td>荣誉奖项:</td>
							<td>
								<input type="radio" name="rongyu"/>有荣誉奖项
								<input type="radio" name="rongyu"/>无荣誉奖项
							
							</td>
						</tr>
						<tr>
							<td>工作/实习/创业经历:</td>
							<td>
								<input type="radio" name="shixi"/>有工作/实习/创业经历
								<input type="radio" name="shixi"/>无工作/实习/创业经历
							
							</td>
						</tr>
						<tr>
							<td>研究经历:</td>
							<td>
								<input type="radio" name="yanjiu"/>有研究经历
								<input type="radio" name="yaniu"/>无研究经历
							
							</td>
						</tr>
						<!--
						<tr>
							<td>博士就读/毕业学校:</td>
							<td><input class="text" />
								</td>
								</tr>
						<tr>
							<td>博士转学/毕业年份:</td>
							<td>
								<input class="text" />
							
							</td>
						</tr>
						<tr>
							<td>博士专业:</td>
							<td><input class="text" />
								</td>
								</tr>
						<tr>
							<td>博士GPA:</td>
							<td>
								<input type="text" style="width:50px;"> out of <input type="text" style="width:50px;" />
							
							</td>
						</tr>
					-->
					
					</tbody>
				
				
				</table>
				
				
			
		</div>
		
		
		<div class="modal-footer">
		<div style="text-align:center;display:inline">
					<button  id="searchbutton" value="search" name="searchbutton" type="submit" class="btn btn-primary" >提交</button>
				</div>
				<div style="text-align:center;display:inline">
					<button type="button" class="btn btn-primary" data-dismiss="modal">退出</button>
				</div>
			
			
		</div>
		
		</div>

	</div>
</form>
</div>



















      <!-- Jumbotron -->
      <div class="jumbotron">
        
      </div>

      <!-- Example row of columns -->
      <div class="row">
        
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
