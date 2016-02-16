<?php 
session_start();

?>
<script>
	
  $(document).ready(function() {   
	
    $('#login').click(function(){
		var username=$('#username').val();
		var password=$('#password').val();
	
		$.post('/login.php',{pusername:username,ppassword:password},function(data){
			
			data=JSON.parse(data);
			//alert(data['error']);
			if(data['error']==''){
			$('#user_name').html('');
			$('#user_password').html('');
			$('#login').remove();
			$('#user_name').append('用户名:'+data['username']+' <button type="button" class="btn btn-primary" id="logout">退出</button>'); 
			location.reload();
			}else{
			alert(data['error']);
			}
			
			
		});
		
	});
	
	$('#logout').click(function(){
		
		$.post('/logout.php',{},function(data){
			
			location.reload();
			
		});
		
	});
   
	});
  
   
  </script>

 <h3 class="text-muted">留美党</h3>
		<div>
		
		
			<?php if($_SESSION['login']=='login'){?>
			<div id="user_name" class="">
				用户名:<?php echo $_SESSION['username'];?>
				<button type="button" class="btn btn-primary" id="logout">退出</button>
			</div>
			<div id="user_password" class="">
				
			</div>
				
			<?}else{?>
			<div id="user_name" class="">
				用户名:
				<input id="username" class="form-control" style="width:150px;"name="username" type="text">
			</div>
			<div id="user_password" class="">
				密码:<input id="password" class="form-control" style="width:150px;" name="password" type="password">
					<button type="button" class="btn btn-primary" id="login" >登录</button>
			</div>
			
			
			<?}?>
		
		
		
			
			
			
		
		</div>
		
        