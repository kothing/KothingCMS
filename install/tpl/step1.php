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
					<li><em>填写数据信息</em></li>
					<li><em>开始安装</em></li>
					<li><em>安装完成</em></li>
				</ol>
			</nav>
		</div>
		<div class="col-lg-7">
			<div class="progress my-5">
				<div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 20%;">
					<div class="progress-value">20%</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
	    <div class="col-lg-10">
	        <div class="card">
	            <div class="card-body">
					<!--body-->
					<h2>运行环境需求</h2>
				        <p>1.要求PHP5.6以上，建议使用7.0以上版本，本系统已支持PHP7.2，支持Windows和Linux主机</p>
				        <p>2.安装环境建议Linux服务器，当然Windows也是可以安装的，云服务器建议安装宝塔面板【<a href="http://www.bt.cn/" style="color:green" target="_blank">查看</a>】</p>
				        <p>3.无论是Windows还是Linux建议安装Apache、mysql、phpMyAdmin配件</p>
				        <p>4.本系统目前仅支持mysql数据库，且数据库字符集必须是UTF-8或utf8_general_ci</p>
					<h2>安装环境</h2>
					<table class="table table-striped table-bordered">
				        <tr class="table-primary">
							<th scope="col">环境</th>
							<th scope="col">当前</th>
							<th scope="col">要求</th>
				        </tr>
						<tr>
							<th>PHP</th>
							<td><?php echo check_version();?></td>
							<td>5.6+</td>
						</tr>
				         <tr>
				          <th>路径</th> 
				          <td><?php echo  check_chinese();?></td>
				          <td>无中文字符</td>
				        </tr>
				        <tr>
				          <th>权限</th> 
				          <td><?php echo  check_disable();?></td>
				          <td>opendir</td>
				        </tr>
					</table>
					<h2>目录权限</h2>
					<table class="table table-striped table-bordered">
				        <tr class="table-primary">
				          <th scope="col">目录</th>
				          <th scope="col">当前</th>
				          <th scope="col">所需</th>
				        </tr>
				         <tr>
				          <th>安装目录/install/</th>
				          <td><?php echo new_is_writeable('../install')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
				        <tr>
				          <th>配置文件/Conf/config.php</th>
				          <td><?php echo new_is_writeable('../Conf/config.php')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
						<tr>
				          <th>后台入口文件/admin.php</th>
				          <td><?php echo new_is_writeable('../admin.php')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
				        <tr>
				          <th>缓存文件/cache/</th>
				          <td><?php echo new_is_writeable('../cache')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
				        <tr>
				          <th>上传文件夹/Public/</th>
				          <td><?php echo new_is_writeable('../Public')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
						<tr>
				          <th>资源文件夹/static/</th>
				          <td><?php echo new_is_writeable('../static')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
						<tr>
				          <th>备份文件夹/backup/</th>
				          <td><?php echo new_is_writeable('../backup')?'满足':'不支持';?></td>
				          <td>可写</td>
				        </tr>
					</table>
					<div class="form-group col-12">
						<?php 
							if($errmsg==1) {
							  echo '<button type="button" class="btn btn-warning rounded btn-block py-2" value="" disabled>不符合要求，不能安装！</button>';
							}else{
							  echo '<button type="submit" value="submit"  class="btn btn-primary rounded btn-block py-2" value="" onclick="window.location.href=\'?act=step2\'"/>开始安装</button>';
							}
						?>
						
					</div>
					<!-- end -->
				</div>
			</div>
		</div>
	</div>

<script>
function installfinish() {
    layer.confirm("您确定取消安装吗？这样非常不安全，将使用默认后台地址和密码！", {
        icon: 3,
        title: '警告危险'
    }, function() {
        $.post("?act=finish", function(data) {
            window.location.href = '../'
        });
    })
}
</script>
<?php include('footer.tpl');?>
</body>
</html>