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
									<h2>前面的话</h2>
								</div>
								<div class="card-text">
								  <p>欢迎您使用KothingCMS, 希望我们的建站系统能够让您在使用的时候感到快乐~</p>
								  <p>郑重承诺KothingCMS程序无后门，无限制，全开源，不收授权费，长期运营至死方休。</p>
								  <h2>安装须知</h2>
								  <p>KothingCMS受到法律和国际公约保护。使用者：无论个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，在理解、同意、并遵守本协议的全部条款后，方可开始使用 KothingCMS 软件。</p>
								  <h3>I. 权利</h3>
								  <ol>
									<li>您可以在完全遵守本最终用户授权协议的基础上使用本软件。</li>
									<li>您可以在协议规定的约束和限制范围内修改 KothingCMS 源代码或界面风格以适应您的网站要求。</li>
									<li>您拥有使用本软件构建的网站中全部会员资料、文章、商品及相关信息的所有权，并独立承担与之相关的法律义务。</li>
								  </ol>
								  <h3>II. 义务</h3>
								  <ol>
									<li>本软件为开源软件，您可以在遵循本授权协议的基础上使用此版本软件。</li>
									<li>不得对本软件或与之关联的商业授权进行出租、出售、抵押。</li>
									<li>不得利用本软件参与重大国际、国家等重点项目，发生一切安全、产权、事故等纠纷均由使用者承担。</li>
									<li>禁止在 KothingCMS 的整体或任何部分基础上以发展任何衍生版本、修改版本或第三方版本用于重新分发。</li>
									<li><b style="color:#f00;">禁止使用者在未经官方允许的情况下发布 KothingCMS 相关安全漏洞信息，取得官方授权并在官方修复漏洞后，可发布相关漏洞信息。</b></li>
								  </ol>
								  <h3>III. 有限担保和免责声明</h3>
								  <ol>
									<li>本软件及所附带的文件是不提供任何明确的或隐含的赔偿或担保的形式提供的。</li>
									<li>用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未购买产品技术服务之前，我们不承诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任。</li>
									<li>KothingCMS官方不对使用本软件构建的网站中的文章、商品和其他信息承担责任。</li>
								  </ol>
								  <p><b style="color:#f00;">有关 KothingCMS 最终用户授权协议、商业授权与技术服务的详细内容，均由 KothingCMS 官方网站独家提供。</b></p>
								  <p>电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和等同的法律效力。您一旦开始安装 KothingCMS，即被视为完全理解并接受本协议的各项条款，在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。</p>
								  <blockquote>
								  <p>
								  作者：kothing<br>
								  版权所有 (c) 2020-2099。
								  </p>
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