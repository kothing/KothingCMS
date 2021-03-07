<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,noarchive">
   <?php include('header.tpl');?>
</head>
<body>
<header><div class="text-center"><h1>Kothing建站系统安装向导</h1></div></header>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<nav>
				<ol class="cd-breadcrumb triangle custom-icons">
					<li class="current"><a href="?act=step1">环境需求</a></li>
					<li class="current"><em>填写数据信息</em></li>
					<li><em>开始安装</em></li>
					<li><em>安装完成</em></li>
				</ol>
			</nav>
		</div>
		<div class="col-lg-7">
			<div class="progress my-5">
				<div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 50%;">
					<div class="progress-value">50%</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
	    <div class="col-lg-10">
	        <div class="card">
	            <div class="card-body">
					<!--body-->
					<form name="submitForm" action="?act=step3" method="post">
							<table class="table table-striped table-bordered">
								<thead>
									<tr class="table-primary">
										<th  colspan="2">填写网站基本信息<em>(默认系统会自动获取不用修改，如有错请修改.)</em></th>
									</tr>
									
								</thead>
								<tbody>
									<tr>
									  <td>网站网址:</td>
									  <td>http://<?php echo $_SERVER['HTTP_HOST'];?></td>
									</tr>
									
									<tr>
										<td>选择数据库类型:</td>
										<td><span id="dbType">
											<label>
												<input type="radio" name="dbtype"   value="mysql" checked />
												<span>mysql</span>
											</label>
										</td>
									</tr>
								</tbody>
							</table>

							<table class="table table-striped table-bordered">
								<thead>
									<tr class="table-primary">
										<th  colspan="2">填写数据库信息</th>
									</tr>
								</thead>
								<div class="dbType" id="mysql">
								<tbody>
									  <tr>
										<td>数据库服务器:</td>
										<td>
											<input type="text" class="text" id="host" name="host" value="127.0.0.1" placeholder="127.0.0.1"/>
											<label class="normal hostinfo">如果无法连接，改成:localhost</label>
										</td>
									  </tr>
									  <tr>
										<td>数据库端口号:</td>
										<td>
											<input type="text" class="text"  id="port" name="port" value="3306" style="width:80px;"  placeholder="空"/>
											<label class="normal">默认3306一般不需要更改</label>
										</td>
									  </tr>
									  <tr>
										<td>数据库名称:</td>
										<td>
											<input type="text" class="text" id="name" name="name" value="kothing<?php echo mt_rand(1000,9999);?>" placeholder="kothing" />
											<label class="normal nameinfo">本地自动创建，服务器空间需要超级管理员账户，否则需要手动填写</label>
										</td>
									  </tr>
									   <tr>
										<td>数据库表前缀:</td>
										<td>
											<input type="text" class="text" id="prefix" name="prefix" value="k_" placeholder="k_" />
											<label class="normal nameinfo">一般不改</label>
										</td>
									  </tr>
									  <tr>
										<td>数据库帐号:</td>
										<td>
											<input type="text" class="text" id="user" name="user" value=""  placeholder=""/>
											<label class="normal userinfo">请查看服务器上分配的账户</label>
										</td>
									  </tr>
									  <tr>
										<td>数据库密码:</td>
										<td>
											<input type="password" class="text" id="password" name="password" value="" />
											<label class="normal passwordinfo">请查看服务器上分配的登录密码</label>
										</td>
									  </tr>
								</tbody>
								</div>
							</table>
							
							<div class="cuetitle"></div>
							<table class="table table-striped table-bordered">
								<thead>
									<tr class="table-primary">
										<th  colspan="2">填写创始人信息</th>
									</tr>
									<tr>
										<td>管理员:</td>
										<td>
											<input type="text" class="text" name="admin_name" id="adminname" maxlength="20" value="kothing<?php echo mt_rand(1000,9999)?>" />
											<label class="normal">0到20个字符，不含非法字符！</label>
										</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>密码:</td>
										<td>
											<input type="password" class="text" name="admin_pass" id="adminpass" maxlength="20" value="" />
											<label class="normal">6到20个字符</label>
										</td>
									</tr>
									<tr>
										<td>确认密码:</td>
										<td>
											<input type="password" class="text" name="admin_repass" id="repassword" maxlength="20" value="" />
											<label class="normal">和密码保持一致</label>
										</td>
									</tr>
								</tbody>
							</table>
						<input name="go_backup" id="go_backup" type="hidden" value="0" />
							<?php if(count($dblists)>0){?>
							<table class="table table-striped table-bordered">
								<thead>
									<tr class="table-warning">
										
										<th  colspan="2">检测到您存在备份数据库  <span style="color: #f00;">如果是下载的网站源码，建议安装备份数据库，否则网站会报错！</span></th>
									</tr>
									<tr>
										<td>备份数据库列表:</td>
										<td>
											<select name="backup_db" id="backup_db">
											<?php foreach($dblists as $v){
												echo "<option value='".$v."'>".$v."</option>";
											}?>
											</select>
											<label class="normal passwordinfo"><input onclick="godbback()" value="安装备份数据库" type="button" /></label>
										</td>
									</tr>
								</thead>
							</table>

							<?php }?>
						<div class="form-group col-12">
							<div class="row">
								<div class="col-6">
									<input type="button" class="btn btn-secondary rounded btn-block py-2" onclick="location.href='step1.html'" value="上一步" />
								</div>
								<div class="col-6">
									<input type="button" class="btn btn-primary rounded btn-block py-2" id="submitinput" onclick="formSubmit();" value="下一步" />
								</div>
							</div>
						</div>
					</form>
					<!-- end -->
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
		function godbback(){
		
			var host = $("#host").val();
			var port = $("#port").val();
			var name = $("#name").val();
			var prefix = $("#prefix").val();
			var user = $("#user").val();
			var password = $("#password").val();
			var check=true;
			if($.trim(host)==''){
				check=false;layer.alert("请填写数据库服务器!");$("#host").focus();return false;
			}
			if($.trim(port)==''){
				check=false;layer.alert("请填写数据库端口!");$("#port").focus();return false;
			}
			if($.trim(name)==''){
				layer.alert("请填写数据库名字!");$("#name").focus();return false;
			}
			if($.trim(prefix)==''){
				check=false;layer.alert("请填写数据库表前缀!");$("#prefix").focus();return false;
			}
			if($.trim(user)==''){
				check=false;layer.alert("请填写数据库用户名!");$("#user").focus();return false;
			}
			if($.trim(password)==''){
				check=false;layer.alert("请填写数据库密码!");$("#password").focus();return false;
			}
			
			$.ajax({
				url:"?act=testdb",
				type:'POST',
				async:false,
				dataType:'json',
				data:{host:host,port:port,name:name,prefix:prefix,user:user,password:password},
				success:function(res){
					if(res.code!=0){
						alert(res.msg);
						check=false;
					}else{
						
					}

				},
				error:function(){
					alert('网络错误！');
					check=false;
				}

			});
			if(!check){
				return false;
			}
			var db = $("#backup_db").val();
			$("#go_backup").val(1);
		
			$("form[name='submitForm']").submit();
			
		}
		function formSubmit(){

			var check = true;

			var host = $("#host").val();
			var port = $("#port").val();
			var name = $("#name").val();
			var prefix = $("#prefix").val();
			var user = $("#user").val();
			var password = $("#password").val();
			if($.trim(host)==''){
				check=false;layer.alert("请填写数据库服务器!");$("#host").focus();return false;
			}
			if($.trim(port)==''){
				check=false;layer.alert("请填写数据库端口!");$("#port").focus();return false;
			}
			if($.trim(name)==''){
				layer.alert("请填写数据库名字!");$("#name").focus();return false;
			}
			if($.trim(prefix)==''){
				check=false;layer.alert("请填写数据库表前缀!");$("#prefix").focus();return false;
			}
			if($.trim(user)==''){
				check=false;layer.alert("请填写数据库用户名!");$("#user").focus();return false;
			}
			if($.trim(password)==''){
				check=false;layer.alert("请填写数据库密码!");$("#password").focus();return false;
			}
			$.ajax({
				url:"?act=testdb",
				type:'POST',
				async:false,
				dataType:'json',
				data:{host:host,port:port,name:name,prefix:prefix,user:user,password:password},
				success:function(res){
					if(res.code!=0){
						alert(res.msg);
						check=false;
					}else{
						//console.log(res);
					}
				},
				error:function(){
					alert('网络错误！');
					check=false;
				}
			});
			if(!check){
				return false;
			}
			
			if($.trim($("#adminname").val())==""){check=false;layer.alert("请填写用户名!");$("#adminname").focus();return false;}
			if($.trim($("#adminpass").val())==""){check=false;layer.alert("请填写密码!");$("#adminpass").focus();return false;}
			if($.trim($("#repassword").val())==""){check=false;layer.alert("请填写确认密码!");$("#repassword").focus();return false;}
			if($.trim($("#adminpass").val())!=$.trim($("#repassword").val())){check=false;layer.alert("密码和确认密码不符!");$("#repassword").focus();return false;}
				
			if(check){$("form[name='submitForm']").submit();}
		}
</script>
<?php include('footer.tpl');?>
</body>
</html>