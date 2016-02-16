<?php 

include('connect.php');

function array_median($array){
	$length=count($array);
	if($length==0){
		return 'No Median Value';
	}
	$middle_index=floor($length/2);
	sort($array,SORT_NUMERIC);
	$median=$array[$middle_index];
	if($length%2==0){
		$median=($median+$array[$middle_index-1])/2;
		
	}
	
	return $median;

}




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
	<!--
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
		
	
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script src="/Chart.min.js"></script>
   <script src="/Chart.js"></script>
   <script src="/background-blur.min.js"></script>
   <script src="/background-blur.js"></script>
   <script src="/velocity.min.js"></script>
   <script src="/jquery.cookie.js"></script>
   <script src="/var.js"></script>
   <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	 
  th,td {
  text-align: center;
  vertical-align: middle;
}
#table_tf th{
text-align:left;
	
}
#table_sat th{
text-align:left;
	
}
 


  </style>
  </head>

  <body>
  <script>
  function chart_tf(div,text,category,data){
   $('#'+div).highcharts({
        chart: {
			 renderTo: 'container',
			 type: 'column'
        },
        title: {
            text: text
        },
        subtitle: {
           
        },
        xAxis: {
            //categories: cateory, 
            //categories: ['1','2','3'],
            title: {
                text: '分数段'
            },
			/*
			 labels: {
				 
				
                    formatter: function () {
						//if(Math.round(this.value/50)===this.value/50){
							
							return this.value;
							
						//}
						//return 1;
					}
			/*
					formatter: function () {
						if(Math.floor(this.value)==this.value){
							return this.value;
						}
						//return 1;
					}
					
				*/
               
            // }
			 tickmarkPlacement: 'on',
			categories: category,
			startOnTick: true,
			endOnTick: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '人数',
                align: 'high'
            },
            labels: {
					
                overflow: 'justify'
            }
        },
        
        plotOptions: {
            column: {
				grouping: false,
			pointPlacement: 0.5,
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: 15,
            y: 50,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [ {
            name: '人数',
            //data: series
            //data: data
           // data: [[1800,0],[1825,1],[1850,0],[1875,3],[1900,0],[1925,3],[1950,0],[1975,6],[2000,0],[2025,8],[2050,0],[2075,6],[2100,0],[2125,3],[2150,0],[2175,3],[2200,0],[2225,3],[2250,0],[2275,3],[2300,0],[2325,6],[2350,0],[2375,6],[2400,0]]
           // data: [1,2,3,4,5,6,7,8,9,10,null]
            data: data
        }] 
    });
	
  
  
  }
  function chart_combine(combine){
  $('#container_combine').highcharts({
        chart: {
            type: 'scatter',
            zoomType: 'xy'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            title: {
                enabled: true,
                text: 'TOEFL分数'
            },
            startOnTick: true,
            endOnTick: true,
            showLastLabel: true
        },
        yAxis: {
            title: {
                text: 'SAT 分数'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            verticalAlign: 'top',
            x: 100,
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF',
            borderWidth: 1
        },
        plotOptions: {
            scatter: {
                marker: {
                    radius: 5,
                    states: {
                        hover: {
                            enabled: true,
                            lineColor: 'rgb(100,100,100)'
                        }
                    }
                },
                states: {
                    hover: {
                        marker: {
                            enabled: false
                        }
                    }
                },
                tooltip: {
                    headerFormat: '<b>{series.name}</b><br>',
                    pointFormat: '{point.x} , {point.y} '
                }
            }
        },
		 credits: {
            enabled: false
        },  
        series: [{
            name: '学生',
            color: 'rgba(119, 152, 191, .5)',
            data: combine
        }]
    });
  
  
  
  
  
  
  
  }
  function sortNumber(a,b){
	  return a-b;
	  
  }
  function getData(arr,itl){
	var data_min=0;
	var data_max=0;
	var length=0;
	var series=[];
	var category=[];
	var data=[];
	var data_com=[];
 
	if(arr[0]*1%(itl*2)<=(itl-1)){
		data_min=Math.floor(arr[0]*1/(itl*2))*itl*2;
		}else{
		data_min=Math.floor(arr[0]*1/(itl*2))*itl*2+itl;
		}
	if(arr[arr.length-1]*1%(itl*2)<=(itl-1)){
			data_max=Math.floor(arr[arr.length-1]*1/(itl*2))*(itl*2)+itl;
		}else{
			data_max=Math.ceil(arr[arr.length-1]*1/(itl*2))*(itl*2);
		}
	  length=(data_max-data_min)/itl;
	  for(var i=0;i<length;i++){
			series.push(0);
	
		}
	
 
	for(var i=0;i<arr.length;i++){
		 series[parseInt((arr[i]-data_min)/itl)]++;
	 
		}
 
	for(var i=0;i<length;i++){
	
		category.push(data_min*1+i*itl);
		data.push(series[i]);
		
		}

		category.push(data_min*1+length*itl);
		data.push(0);
		data_com.push(category);
		data_com.push(data);
		return data_com;
	  
	  
    }
function BindControls(colleges) {
            $('#xuexiao').autocomplete({
			
				 source: colleges,
                minLength: 0,
                scroll: true
				
			
            }).focus(function() {
                $(this).autocomplete("search", "");
            });
			
}
$(document).ready(function() {
	/*
	if($('#xiangmu option:selected').text()=='本科名校'){
		BindControls(colleges_1);
	}else{
		BindControls(colleges_2);
	}
	*/
	if($('#xiangmu option:selected').text()=='本科名校'){
			BindControls(colleges_benke);
		}else if($('#xiangmu option:selected').text()=='金融硕士'){
			BindControls(colleges_jinrong);
			
		}else if($('#xiangmu option:selected').text()=='金融工程硕士'){
			BindControls(colleges_jinronggongcheng);
			
		}else if($('#xiangmu option:selected').text()=='会计硕士'){
			BindControls(colleges_kuaiji);
			
		}
	$(document).on('change','#xiangmu',function(e){
		$('#xuexiao').val('');
		if($('#xiangmu option:selected').text()=='本科名校'){
			BindControls(colleges_benke);
		}else if($('#xiangmu option:selected').text()=='金融硕士'){
			BindControls(colleges_jinrong);
			
		}else if($('#xiangmu option:selected').text()=='金融工程硕士'){
			BindControls(colleges_jinronggongcheng);
			
		}else if($('#xiangmu option:selected').text()=='会计硕士'){
			BindControls(colleges_kuaiji);
			
		}
		
		
		
	});
	 $('#luqvshujv').click(function(){
		 
		 $('#searchpart').slideToggle('slow');
		 
		 
		 
	 });
	
	var xuexiao=$.cookie('xuexiao');
	var nianfen=$.cookie('nianfen');
	
	if(nianfen!=undefined&&nianfen!=''&&xuexiao!=undefined&&xuexiao!=''){
		
		$('#xuexiao option[value="'+xuexiao+'"]').prop('selected',true);
		$('#nianfen option[value="'+nianfen+'"]').prop('selected',true);
	$('#result').show();
	/*
  $.post('/searesult.php',{pxuexiao:xuexiao,pnianfen:nianfen},function(data){

	var data=JSON.parse(data);

 var arr_tf=[];
 var arr_sat=[];
 var arr_combine=[];
 for(var i=0;i<data.length;i++){
	 $('#table_result').append('<tr><td>'+data[i][0]+'</td><td>'+data[i][1]+'</td><td>'+data[i][2]+'</td><td>'+data[i][3]+'</td><td>'+data[i][4]+'</td><tr>');
	 if(data[i][2]!='' &&data[i][2]!='Waived'){
		 arr_tf.push(data[i][2]);
		 var arr_tem=[];
		 arr_tem.push(parseInt(data[i][2]));
		 arr_tem.push(parseInt(data[i][3]));
		 arr_combine.push(arr_tem);
		 //arr_combine+='['+data[i][2]+','+data[i][3]+'],';
		 //JSON.parse;
		 
	 }
	 arr_sat.push(data[i][3]);
	
 }
 
 arr_tf.sort(sortNumber);
 arr_sat.sort(sortNumber);
 
 var category_tf=[];
 var category_sat=[];
 var series_tf=[];
 var series_sat=[];
 var length_tf=0;
 var length_sat=0;
 
 

 if((arr_tf[arr_tf.length-1]-arr_tf[0])%5>0){
	 length_tf=parseInt((arr_tf[arr_tf.length-1]-arr_tf[0])/5)+1;
	 
 }else{
	  length_tf=parseInt((arr_tf[arr_tf.length-1]-arr_tf[0])/5);
 }
 if((arr_sat[arr_sat.length-1]-arr_sat[0])%50>0){
	 length_sat=parseInt((arr_sat[arr_sat.length-1]-arr_sat[0])/50)+1;
	 
 }else{
	  length_sat=parseInt((arr_sat[arr_sat.length-1]-arr_sat[0])/50);
 }
 for(var i=0;i<length_tf;i++){
	 series_tf.push(0);
	 if(arr_tf[0]*1+(i+1)*5<=120){
		 category_tf.push((arr_tf[0]*1+i*5)+"-"+(arr_tf[0]*1+(i+1)*5));
		 
	 }
	 
 }for(var i=0;i<length_sat;i++){
	 series_sat.push(0);
	 if(arr_sat[0]*1+(i+1)*50<=2400){
		 category_sat.push((arr_sat[0]*1+i*50)+"-"+(arr_sat[0]*1+(i+1)*50));
		 
	 }
	 
 }
 
 
 
 for(var i=0;i<arr_tf.length;i++){
	 if(i!=arr_tf.length-1){
		 series_tf[parseInt((arr_tf[i]-arr_tf[0])/5)]++;
		
		 
	 }else{
		 series_tf[series_tf.length-1]++;
	 }
	 
 }
 for(var i=0;i<arr_sat.length;i++){
	 if(i!=arr_sat.length-1){
		 series_sat[parseInt((arr_sat[i]-arr_sat[0])/50)]++;
		
		 
	 }else{
		 series_sat[series_sat.length-1]++;
	 }
	 
 }
 //alert(arr_combine);
 chart_tf('container_tf','toefl',category_tf,series_tf);
 chart_tf('container_sat','SAT',category_sat,series_sat);
 
chart_combine(arr_combine);
 
 });*/
 
 }else{
 
	$('#result').hide();
 }
 
 
 $(document).on('click','#searchbutton',function(){
 if($('#xuexiao').val()==''){
	$('#xuexiao').css('border','1px solid red');
	$('.text-danger').show();
 }else{
	 $('.text-danger').hide();
 $('#xuexiao').css('border','');
 $('#result').show();
 $('#container_tf').html('');
 $('#container_sat').html('');
 $('#table_result').html('');
 

 var xuexiao=$('#xuexiao').val();
 var nianfen=$('#nianfen option:selected').text();
 var jieguo=$('#jieguo option:selected').text();
 var xiangmu=$('#xiangmu option:selected').text();

 var date=new Date();
 var minutes=10;
 date.setTime(date.getTime()+(minutes*60*1000));
 $.cookie('xuexiao',xuexiao,{expires:date});
 $.cookie('nianfen',nianfen,{expires:date});
 
 $.post('/searesult.php',{pxuexiao:xuexiao,pnianfen:nianfen,pjieguo:jieguo,pxiangmu:xiangmu},function(data){

	var data=JSON.parse(data);
 //alert(data);
 var arr_tf=[];
 var arr_sat=[];
 var arr_combine=[];
 for(var i=0;i<data.length;i++){
	 $('#table_result').append('<tr><td>'+data[i][0]+'</td><td>'+data[i][1]+'</td><td>'+data[i][2]+'</td><td>'+data[i][3]+'</td><td>'+data[i][4]+'</td><tr>');
	 if(data[i][2]!='' &&data[i][2]!='Waived'){
		 arr_tf.push(data[i][2]);
		 var arr_tem=[];
		 arr_tem.push(parseInt(data[i][2]));
		 arr_tem.push(parseInt(data[i][3]));
		 arr_combine.push(arr_tem);
		 
		 
	 }
	 if(data[i][3]!='' &&data[i][3]!='Waived'){
	 arr_sat.push(data[i][3]);
	 }
 }
 
 
 
	arr_tf.sort(sortNumber);
	arr_sat.sort(sortNumber);
 
 
	var data_tf=getData(arr_tf,5);	
	var data_sat=getData(arr_sat,50);	
	chart_tf('container_tf','toefl',data_tf[0],data_tf[1]);
	chart_tf('container_sat','SAT',data_sat[0],data_sat[1]);
	chart_combine(arr_combine);

 
 });
 }
 });
 
 
 
 
 
 });
  
  </script>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
       <?include ('head.php');?>
	   <? if($_SESSION['login']!='login'){?>
		<style>
			#container_tf,#container_sat{
			-webkit-filter: blur(10px);
			pointer-events:none;
		}
			#container_combine{
				-webkit-filter: blur(10px);  
				pointer-events:none;
			
			
			}
			
		
		</style>
	   <?} else{?>
			<style>
			#lock{
			display:none;
		}
			
			</style>
	
	<?}?>
		<nav>
          <ul class="nav nav-justified">
            
            <li><a href="#" id="luqvshujv" data-toggle="modal" data-target="#regModal">录取数据</a></li>
            
          </ul>
        </nav>
      </div>
	 
	  <div class="container" id="searchpart" style="display:none">
		<form role="form" class="form-inline" style="margin-top:10px;">
			<div class="form-group" style="">
					<label for="pwd">申请项目:<span class="error">*</span></label>
					<select name="xiangmu" id="xiangmu" class="form-control condition">
					
					<option value="">本科名校</option>
					<option value="">金融硕士</option>
					<option value="">金融工程硕士</option>
					<option value="">会计硕士</option>
					
					</select>
				</div>		
				<div class="form-group">
					<!--
					<label for="username">选择学校:<span class="error">*</span></label>
					
					
					<select name="schoolsel" id="xuexiao"class="form-control">
					<option></option>
					<option value="Boston College">Boston College</option>
					<option value="George Washington University">George Washington University</option>
					<option value="University of Chicago">University of Chicago</option>
					
					</select>
				-->
					
						<label for="username">学校:<span class="error">*</span></label>
						<input type="text" class="form-control condition" id="xuexiao">
					
				</div>
				<div class="form-group" style="">
					<label for="pwd">年份:<span class="error">*</span></label>
					<select name="yearsel" id="nianfen" class="form-control condition">
					<option value="">全部</option>
					<option value="2010">2010</option>
					<option value="2011">2011</option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option> 
					</select>
				</div>	
				<div class="form-group" style="">
					<label for="pwd">申请结果:<span class="error">*</span></label>
					<select name="jieguosel" id="jieguo" class="form-control condition">
					<option value="">所有录取</option>
					<option value="">有奖录取</option>
					<option value="">无奖录取</option>
					
					<option value="">拒绝</option>
					<option value="">候补</option>
					<option value="">最终入读学校</option>
					</select>
				</div>		
			
			
					
			
			</form>	
			 
<div style="margin-top:10px;">			
					<button  id="searchbutton"  type="button" class="btn btn-primary" >开始搜索</button>
					<span style="display:none" class="text-danger">请输入学校名称</span>					
</div>	 
	 </div>
	

      <!-- Example row of columns -->
      <div id="result" class="container" >
			<div class="table-responsive">
					<table  id="example1" class="table table-bordered " align="center">
		
					<tr >
						<td colspan="5" align="center" class="">
							
						
							<div>
							
							<div class="box-body">
							<div  id="container_tf" style="min-width: 500px; max-width: 800px; height: 400px; margin: 0 auto">
							
							</div>
							<a id="lock" style="cursor:pointer;"class="glyphicon glyphicon-lock">登陆查看</a>
							</div>
						
							</div>
					
						</td>
					</tr> 
		
					<tr >
						<td colspan="5" align="center"><div class="col-md-12"><div class="box-body">
						<div id="container_sat" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
						</div><!-- /.box-body --><a id="lock" style="cursor:pointer;" class="glyphicon glyphicon-lock">登陆查看</a>
						</div>
						</td>
					</tr>
		
		
					<tr >
						<td colspan="5" align="center"><div class="col-md-12"><div class="box-body">
						<div id="container_combine" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
						</div><!-- /.box-body --><a id="lock" style="cursor:pointer;" class="glyphicon glyphicon-lock">登陆查看</a></div>
					</td>
					</tr>
			
					<tr>
						<th width="">入学年份</th>
						<th width="">GPA</th>
						<th width="">托福总分</th>
						<th width="">SAT总分</th>
						<th width="">GRE总分</th>
					</tr>
				<tbody id="table_result">
			
				</tbody>
			 </table>
		</div>
			
		</div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; Company 2016</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!--
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	-->
  </body>
</html>
