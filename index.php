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
<div class="modal fade" id="regModal" role="dialog">
	<form role="form" method="post" action="">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
		<h1>用户注册</h1>
		</div>
		<div class="modal-body">
				<p>带<span class="error">*</span>为必填项目</p>
			
				<div class="form-group">
					
					<label for="username">用户名:<span class="error">*</span></label>
					<input style="width:200px;" type="text" class="form-control " id="username" name="usr">		
				
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
			
			<input type="submit" class="btn btn-default" name="submit" value="注册">
			<button type="button" class="btn btn-default" data-dismiss="modal">退出</button>
			
		</div>
		
		</div>

	</div>
</form>
</div>		
	<?php
	if($_POST['submit']=='注册'){
		$username=isset($_POST["usr"])?$_POST["usr"]:'';
		$password=isset($_POST['password'])?md5($_POST['password']):'';
		$email=isset($_POST['email'])?$_POST['email']:'';
		$regip=$_SERVER['REMOTE_ADDR'];
		//$regtime=NOW();
		//$username="111";
		$sql="INSERT INTO tz_members(usr,pass,email,regIP,dt) VALUES('.$username.','.$password','.$email','.$regip',NOW())";
		mysqli_query($connect,$sql);
		//echo $username;
	}

?>				

			
	
        <nav>
          <ul class="nav nav-justified">
            <li style=""class="active"><a href="#">首页</a></li>
            <li><a href="#">精华文库</a></li>
            <li><a href="#">录取数据</a></li>
            <li><a href="#">就业数据</a></li>
            <li><a href="#">文书资源</a></li>
            <li><a href="#">院校点评</a></li>
			<li><a href="#">面试经验</a></li>
			<li><a href="#">分享社区</a></li>
			<li><a href="#">项目专区</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			
		
		
		</ol>
			
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="admission2.jpg">
			
			</div>
			<div class="item">
				<img src="ebook.jpg">
			
			</div>
			<div class="item">
				<img src="essays.jpg">
			
			</div>
			<div class="item">
				<img src="review.jpg">
			
			</div>
			
		
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		
		</a>
		
	  
	  
	  </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
		<div>
          <p>留美党数据</p>
		  <div>
			<table width="228" height="191" style="border: medium none; border-collapse: collapse;">
			<colgroup><col width="85" /><col width="145" /></colgroup>
			<tbody>
			<tr style="height:95px">
            <td style="border:0px solid #000000;vertical-align:top;padding:0px 5px 7px 7px"><a target="_self" href="#"><img width="83px;" height="83px;" src="https://lh5.googleusercontent.com/RKmvA04XQm9Tn18jn4YPHxjNMxtNRckdFODzhv7tTPEMdeKtLFdxB7w4Q8Dot_4FzJWArkfnp-Hpa1qf_WgBqy20xgHCJGERtR4av_n6PkR4HnLAp1E" alt="" /></a></td>
            <td style="border:0px solid #000000;vertical-align:middle;padding:0px 5px 7px 5px"><a target="_self" href="#"><span style="color: rgb(255, 102, 0);"><span style="font-size: 13px; font-family: SimSun; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;">录取数据</span></span></a><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">考试成绩,平时成绩</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">教育背景,个人经历</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">选校定位,数据说话</span></td>
        </tr>
        <tr style="height:95px">
            <td style="border:0px solid #000000;vertical-align:middle;padding:5px 0px 7px 7px"><a target="_self" href="#"><img width="84px;" height="84px;" src="https://lh3.googleusercontent.com/bd1MJdNQpSxae2omuMaS4qo_djJUWNvLwPo3kNow2TDznjKyAQ24z0kMu0PU2H7RkxIhUDsVu46wrg-25c8BCEIqhgjg9uXHU01iGqTZMTR28G31UJQ" alt="" /></a></td>
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: middle; padding: 0px 5px 7px 5px;"><a target="_self" href="#"><span style="color: rgb(255, 102, 0);"><span style="font-size: 13px; font-family: SimSun; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;">就业数据</span></span></a><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">申请选校,录取决定</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">诸多因素,汇聚一条</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">毕业去向,究竟怎样</span></td>
        </tr>
    </tbody>
</table>
		  
		  </div>
          
          
		</div>
		<div>
		<p>精华文库</p>
          
        <ul>
		<li><a href="#">ACT考试分数和录取大致标准</a></li>
		<li><a href="#">ACT考试报名</a></li>
		<li><a href="#">ACT考试概况</a></li>
		<li><a href="#">托福考试报名</a></li>
		<li><a href="#">托福考试成绩</a></li>
		<li><a href="#">托福考试简介</a></li>
		</ul>

		</div>
		<p>文书资源</p>
         
         <ul>
		<li><a href="#">布朗范文：Exploring life's int</a></li>
		<li><a href="#">Wake Forest范文：How to spend </a></li>
		<li><a href="#">斯坦福范文：Rosencrantz and Gu</a></li>
		<li><a href="#">塔夫茨范文：AOL Instant Messen</a></li>
		<li><a href="#">布朗范文：Healing Beyond Borde</a></li>

		</ul>
		
		</div>
        <div class="col-lg-4">
		<div>
          <p>院校点评</p>
          
          <table width="350" height="273" style="border: medium none; border-collapse: collapse;">
    <tbody>
        <tr style="height:0px">
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><img width="50" height="50" src="https://lh6.googleusercontent.com/hEEvWtZu-Q7vgqFxwnMITjQwlGEcn_Mz-eLjZEJxW--4VG1ysh8mEH_HHlzreP9T8KJACBodK5MWUpRx_XDOzI5YtdzRCxBkK8tcETbVYU4Nbk5nfAerA8UpxQ" alt="" /></td>
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: middle; padding: 7px; text-align: left;"><a href="#">本科名校</a> &gt; <a href="#">University of Pennsylvania</a> &gt; <a href="#">学术学习</a><br />
            很多人都想要wharton的学位，找工作什么的的确有优势。要跟沃顿扯上关系，也就四种途径：直接申/external transfer，进来之后internal transfer...[ <a href="#">更多+</a> ]</td>
        </tr>
        <tr style="height:0px">
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><img width="51" height="54" src="https://lh6.googleusercontent.com/5yKOPYALYeyVf3-6_MobE80PnBtc_Qzx7duMTPZkuGUgT67-QJY7rpoLaMjWfDATd1X3mHyadsfXHNuQGplQl614ZbNL_wmiI2yW3rISosBeAPO6w5c30oBY4g" alt="" /></td>
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a href="#">本科名校</a> &gt; <a href="#">Duke University</a> &gt; <a href="#">校园生活</a><br />
            学校非常Diverse，从profile就可以看出来。中国学生这届是42个（包括海外高中的孩只）。不算多不算少，所以想要reach out的时候可以和各个state各个国家的人...[ <a href="#">更多+</a> ]</td>
        </tr>
        <tr style="height:0px">
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><img width="52" height="52" src="https://lh5.googleusercontent.com/mZcycxiX7WE-PiitLGFVxErhic7AQy-lZbBCZcxGtCrBu_-hJrl4vDYmUiibqCWV87BnIZXZLLLLhgqfjPR4UuanOHrvj102PJRorbUF0XDjOVE3ZuFcFpX4cA" alt="" /></td>
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a href="#">本科名校</a> &gt; <a href="#">University of Notre Dame</a> &gt; <a href="#">校园生活</a><br />
            social方面虽然是Catholic school但是不保守的地方很多, 比如party大家可以自行想象, 每年上下学期每个寝室都会有一个formal舞会。人方面我真的感觉全是白人...[<a href="#"> 更多+</a> ]</td>
        </tr>
    </tbody>
</table>
		</div>
		<p>面试经验</p>
		<div style="height:300px;width:200px;">
         <table width="350" height="273" style="border: medium none; border-collapse: collapse;">
		<tbody>
        <tr style="height: 0px;">
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: top; padding: 7px;">&nbsp;<img width="47" height="48" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQHDwkIBwgUCgkLDRYPDRQMDRsUFRweIB0qIiAdJx8kKDQsHSYxJx8fLT0rJTUsNC46ISszODwsNygtLisBCgoKDgwNGxAQGy4kHyQ3NzcsNyw3LCwsLCwzNy0sKzcsKystLCs1ODQsLDcsLDgsLDcrLCssNywsLCw1LCwsK//AABEIADAAMAMBEQACEQEDEQH/xAAaAAADAQEBAQAAAAAAAAAAAAAABQcCCAYE/8QALxAAAAUCAwQJBQAAAAAAAAAAAQIDBAUAEQYSIQcVIrITMTU2QWFydcIUUXGB0f/EABoBAAIDAQEAAAAAAAAAAAAAAAAEAQUGAgP/xAAoEQABAwQBAgUFAAAAAAAAAAAAAQIDBBESITQzgQUTMmGhFEJxgsH/2gAMAwEAAhEDEQA/ALhQAUAF6ACgAoAKAIns1xW8lJZuykJRRdsYqoiQ9raFG3hSsb3K6yl3W00UcCuam9Gdn+K3kjMN2L6UUWamOsAkOIW0Ka3h5BUse5X2Iq6aJlPk1N6M4axW8dTiMc4lVFGYvlUxIa1rBmsHV5BQ17lfYmemiSlVyJuyDJi5lhmSpr/V7o3iYBzJj0XR5htrbqtapRX5+x5PbTfTXS2VvkRTcjNEdPytDvvpwcqAlkROJcuYbW06rWrlyvuozDHS+W3LG9vY+VGSnBMTMd/lzBe6J/5UIsh2sdHb7fgNkfbbb0Lco1EPrDxDjL2M7L+3mvrX5TVMfUCt4q9jOEe8aHuK3yqGdQmfhr+EPXM59yeaKyPJKC13iZPIJ+HLmHS32pwzgqjMUPFJ8scpKqmZ70Ol0Ym4coGELfilUe7zLXLt9PGlJnjuyFwpopDnrZH2229C3KNJxes0XiHGXsM9nmG3bCZbPHkSsg2A61zqJCBdSmtr+67YxyPueNXURPpsUdvQowj3jQ9xW+VcM6h7z8Psg8Y9vl90PzDThnBJE95i+8Kc40m3qGhk4X6nRFOGeIns0wq8jJZB5IRaiDYpVQE5wC2pRt40rGxyOupd1lTFJArWrvRax0poo7EQw1hV41nEZBxFKJswfKqCoIBlsOaw9fmFLNY5H3LyaqidTYo7dk/g2aYfdEmivjRygNd4mUziXhy5h1/FMlIJ43DDxPEBZBSKVKz3odXpBJw5RMPFf7UsjHZ3sXb6iJaTBHbsXKmSkCgAoAKACgAoAKAP/9k=" alt="Image result for mit logo" /></td>
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: middle; padding: 7px;"><a href="#">本科名校</a>&nbsp;&gt;&nbsp;<a href="#">Massachusetts Institute of Technology</a><br />
            <span style="color: rgb(68, 68, 68); font-family: Tahoma, 'Microsoft Yahei', Simsun; line-height: 21px;">面试官先做了自我介绍。北京本地人，MIT master in real estate，现在北京工作。然后让我做简单自我介绍。我就blabla自己家庭背景啦,经历啦</span>...[&nbsp;<a href="#">更多+</a>&nbsp;]</td>
        </tr>
        <tr style="height: 0px;">
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: top; padding: 7px;"><img width="55" height="60" src="data:image/jpeg;base64,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" alt="Image result for university of chicago logo" /></td>
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: middle; padding: 7px;">
            <p><a href="#">本科名校</a>&nbsp;&gt;&nbsp;<a href="#">University of Chicago</a><font class="jammer" style="padding: 0px; margin: 0px; font-family: Tahoma, 'Microsoft Yahei', Simsun; word-wrap: break-word; font-size: 10px; color: rgb(255, 255, 255);">8&nbsp;</font><br style="padding: 0px; margin: 0px; font-family: Tahoma, 'Microsoft Yahei', Simsun; word-wrap: break-word; color: rgb(68, 68, 68); line-height: 21px;" />
            <span style="padding: 0px; margin: 0px; font-family: Tahoma, 'Microsoft Yahei', Simsun; color: rgb(68, 68, 68); line-height: 21px;">问题：1）Tell me sth. about yourself. 2）</span><span style="color: rgb(68, 68, 68); font-family: Tahoma, 'Microsoft Yahei', Simsun; line-height: 21px;">你怎么看</span><span style="font-family: Tahoma, 'Microsoft Yahei', Simsun; line-height: 21px; color: rgb(68, 68, 68);">芝大的核心课程？3）</span><span style="padding: 0px; margin: 0px; font-family: Tahoma, 'Microsoft Yahei', Simsun; color: rgb(68, 68, 68); line-height: 21px;">What attracts you to the U?..</span>[&nbsp;<a href="#">更多+</a>&nbsp;]</p>
            </td>
        </tr>
        <tr style="height: 0px;">
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: top; padding: 7px;">&nbsp;<img width="53" height="57" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgWFgkLDRYPDQwYDScgIBAWIB0iIiAdHyokKDQsJCYxJx8fJD03MTUyOjY6LSs5PTMsQz85PjQBCgoKDQwNGg8PGjclHyU3NzcrNzc3Kzc3NzcrNzcrNzA3LDc4KzQyNzQ3Nzc1Nyw1LCwrNys1OC8wKysrOCsrLv/AABEIADIAMgMBIgACEQEDEQH/xAAcAAADAAMAAwAAAAAAAAAAAAAABggDBAcBAgX/xAA4EAABAgQCBgcFCQEAAAAAAAABAgMABAURBiEHEhMxUbIUIjU2YXN0QmJxobEyM0FSU1SBovAj/8QAGQEAAgMBAAAAAAAAAAAAAAAAAgMBBAUA/8QAIBEAAgIBBAMBAAAAAAAAAAAAAAECETEEEiEyAxNxgf/aAAwDAQACEQMRAD8A7BiLsCpekd5TE1xSmIuwKl6R3lMTXGloMSGQCM87JzEi6GptopcKEr1SPZUAR8jHSNH+HqU7RZSenmgtS3HJhRPshrIJ/sVeNhDBialydSpNQmZtISbJVMTX5Q2b7NHE70k8Sd+4Nlqkp7aC3cnEIoPR73MpflHmMT5FB6Pe5lL8o8xgdf0RE8DFBBBGUKPnYi7AqXpHeUxNcUpiLsCpekd5TE1xpaDEhkBgwfUplqpS1O2yuizLwQWw5YBSuqFA2Nt+dhmMo2scVidM89RRMq6FKK2ey2lwpQ3kkAE/zC7TnxK1CVmCfunkLv8AAgxkrU0mdrE9NJPVemFrSeIKiRFv1r2XQdcmnFB6Pe5lL8o8xifIoPR73MpflHmMV9f0QM8DFBBBGUKNWopYXT5lM2bS5aUHTwTY3+UI8vgvBU1TF1KXWpUmhKlKdD5sAnf45Q44g7BqXpXeUxyOSTPYewkJ1q66XV5Vxp9H6LvWSlXwNv8AZRZ8Cbi6lQURnRhPAq3JJtLqtadTrS13VDajwjK9grBbNRTT3Crpamy4Gtsq+rnmeG4x5TR0VXRnT1BWrNSksJiXeG9Ck3PztGbAUi5OUibxDOr16jUkrGtb7KBdISOGY+kG5SSb3Pjgm2YZXBOC5umKqUsVKk0pUou7ZVgE3ueOVjDbh1untUWVRSF3kQj/AIqucxfxhGwvUpJjRfOMPTSQ821MNqbKswo61hbxuIa8AIU3g6lpWmx2N7eBJI+sB5t1O3fJDsYYIIIrAmjXBeiz9/2znKYWaW02vRkW1tgo6I71SnLeTBBDvH1/UEsG/REgYBZSBl0FWVvdMe+AEhOEaeEiwsvK3vmCCOliX05nOsUSksNI6GhLp2a3EFaNQWUTvuPxjsbaUoQhKRZIFgAN2UEEO1PWHwmWDJBBBFMA/9k=" alt="Image result for new york university logo" /></td>
            <td style="border: 0px solid rgb(0, 0, 0); vertical-align: middle; padding: 7px;"><a href="#">本科名校</a>&nbsp;&gt;&nbsp;<a href="#">New York University</a><br />
            <span style="color: rgb(51, 51, 51); font-family: 'Microsoft YaHei', Tahoma, Verdana, STHeiTi, simsun, sans-serif;">面试从7点14分开始，大概有25分钟（我废话太多）。。面试的是一个CAS小哥, 来说问题吧,第一个..</span>.[<a href="#">更多+</a>&nbsp;]</td>
        </tr>
    </tbody>
	</table>
	</div>
	 </div>
        <div class="col-lg-4">
		<div>
          <p>项目专区</p>
          
          <table>
    <tbody>
        <tr style="height:0px">
            <td style="border:0px solid #000000;vertical-align:top;padding:7px 7px 7px 7px"><a href="#" target="_self"><img width="90px;" height="91px;" alt="" src="https://lh3.googleusercontent.com/toCjBBCAm2yF79OBeZsa3T7NJNrRtfwditq6QpBtl5GDwwqeJ4sIu7AfWH43VfJxDrlduhjwvZyISzICbirxX48mIvjwp70I0RZ6hnTqhTFvBJEDSv0" /></a></td>
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a href="#" target="_self"><span style="color: rgb(255, 102, 0);"><span style="font-size: 13px; font-family: SimSun; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;">名校本科</span></span></a><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">综合大学前</span><span style="font-size:13px;font-family:Arial;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">50</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">文理学院前</span><span style="font-size:13px;font-family:'Times New Roman';color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">30</span></td>
        </tr>
        <tr style="height:0px">
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a target="_self" href="#"><img width="86px;" height="86px;" alt="" src="https://lh3.googleusercontent.com/Mj3xrpalXituTCsVWftg7BJvNVJ7wKbyjKxmNE4LMvJ-k6-WIB58WEku5zYjshKJeG8c7nfOjiK1XBV-VXbNpW8sybbwuURpVkUZLs7C2BumMdwClPc" /></a></td>
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a target="_self" href="#"><span style="color: rgb(255, 102, 0);"><span style="font-size: 13px; font-family: SimSun; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;">热门硕士</span></span></a><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">会计学、经济学</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">金融学、金融工程</span></td>
        </tr>
        <tr style="height:0px">
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a target="_self" href="#"><img width="80px;" height="86px;" alt="" src="https://lh5.googleusercontent.com/sirXWPS0xZfhvGWgXUnTI-b5HWIgElj_KDxd7UyqEh2rcLKzX7k_7t5uIv01nzUCIWLHk0xSSBj3vu_deDX70E7UIwAWYnrE5PMJO8s8IQAXp5tsAIM" /></a></td>
            <td style="border:0px solid #000000;vertical-align:middle;padding:7px 7px 7px 7px"><a target="_self" href="#"><span style="color: rgb(255, 102, 0);"><span style="font-size: 13px; font-family: SimSun; background-color: transparent; font-weight: bold; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline;">热门博士</span></span></a><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">金融学、会计学</span><br />
            <span style="font-size:13px;font-family:SimSun;color:#293d43;background-color:transparent;font-weight:normal;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;">经济学、市场营销</span></td>
        </tr>
    </tbody>
</table>
        </div>
		<p>分享社区</p>
          
          <ul>
<li><a href="#">造假大潮下如何让自己的申请更可信</a></li>
<li><a href="#">普林斯顿校友做面试官的经历</a></li>
<li><a href="#">美本面试准备及注意事项</a></li>
<li><a href="#">美国学校家长为什么重视体育</a></li>
<li><a href="#">美国留学春秋两季在入学上有哪些差异</a></li>
<li><a href="#">大型留学中介就一定靠谱吗？</a></li>
<li><a href="#">学校在鸟不拉屎的地方？</a></li>
<li><a href="#">在哈佛读MBA的经历怎样改变了我</a></li>

</ul>
		</div>
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
