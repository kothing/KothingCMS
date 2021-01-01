<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,noarchive">
	<?php include("header.tpl");?>
</head>
<body>
<header><div class="text-center"><h1>Kothing建站系统安装向导</h1></div></header>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8">
		
			<nav>
				<ol class="cd-breadcrumb triangle custom-icons">
					<li class="current"><a href="?act=step1">环境需求</a></li>
					<li class="current"><a href="?act=step2">填写数据信息</a></li>
					<li class="current"><a href="?act=step3">开始安装</a></li>
					<li class="current"><em>安装完成</em></li>
				</ol>
			</nav>
		</div>
		<div class="col-lg-7">
			<div class="progress my-5">
				<div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 100%;">
					<div class="progress-value">100%</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
	    <div class="col-lg-10">
	        <div class="card">
	            <div class="card-body">
					<!--body-->					
					<div class="card-title my-5 py-5">
						<h3 class="pb10">恭喜您，KothingCMS的安装已经完成，网站上线要删除install文件夹</h3>
					</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6">
									<input class="btn btn-primary rounded btn-block py-2" type="button" onclick="location.href='<?php echo $admin_url;?>'" class="button" value="进入后台">
								</div>
								<div class="col-6">
									<input class="btn btn-success rounded btn-block py-2" type="button" onclick="location.href='/'" value="打开首页">
								</div>
							</div>
						</div>
					<!-- end -->
	            </div>
	        </div>
	    </div>
	</div>
<?php include('footer.tpl');?>
</body>
</html>