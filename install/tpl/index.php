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
	    <div class="col-lg-10">
	        <div class="card">
	            <div class="card-body">
					<!--body-->
					<form class="track_form row was-validated" action="?act=step1" method="post" id="contactForm">
	                <!--textarea class="form-control" rows="15" readonly="readonly"-->
						<div class="border p-3" style="overflow-y:auto;height:300px;">
							<div class="m-3">
								<div class="card-title">
									<h2>前言</h2>
								</div>
								<div class="card-text">
								  <p>欢迎您使用开源内容管理系统KothingCMS！</p>
								  <h2>使用协议</h2>
								  <p>任何获得本软件副本及相关文档文件(下面简称为“软件”)的个人都可以免费获得不受限制处置本软件的权限，包括不受限制地使用、复制、修改、合并、出版、分发、重新许可或者销售本软件的副本，并且在满足下述条件时，允许本软件的受让人获得下述权限：</p>
								  <p>在本软件的所有或者重要部分中包含上述版权公告信息和本权限公告信息。</p>
								  <p>本软件不提供保证，不包含任何类型的保证(无论是明指的还是暗喻的)，包含但不限于关于本软件的适销性、特定用途的适用性和无侵权保证。在任何情况下，无论是否签订了合约、存在侵权行为还是在其他情况下，本软件作者或版权持有人不对由本软件直接或间接产生的或由使用本软件或处置本软件所产生的任何索赔、损坏或者其他责任负责。</p>
								  <p><b style="color:#f00;">有关 KothingCMS 最终用户授权协议、商业授权与技术服务的详细内容，均由 KothingCMS 官方网站独家提供。</b></p>
								  <p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 KothingCMS，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>
								  <blockquote>
								    <div>作者：kothing</div>
								    <div>版权所有 (c) 2020-2099。</div>
								  </blockquote>
								</div>
							</div>
						</div>
						<div class="form-group mt-2 mb-5 col-md-12">
							<div class="creat_account_two custom-control custom-switch">
								<input class="custom-control-input" type="checkbox" id="f-option" name="selector" required>
								<label class="custom-control-label text-justify" for="f-option">我已阅读并且同意用户授权协议。</label>
								<div class="check"></div>
							</div>
						</div>
						<div class="form-group col-12">
							<button type="submit" value="submit" class="btn btn-primary rounded btn-block py-2">继续</button>
						</div>
					</form>
					<!-- end -->
	            </div>
	        </div>
	    </div>
	</div>
<?php include('footer.tpl');?>
</body>
</html>