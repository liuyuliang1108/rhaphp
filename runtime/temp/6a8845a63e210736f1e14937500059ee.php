<?php /*a:2:{s:89:"C:\phpStudy\PHPTutorial\WWW\rhaphp\public/../application/extension/view/index\config.html";i:1557761732;s:88:"C:\phpStudy\PHPTutorial\WWW\rhaphp\public/../application/extension/view/public\base.html";i:1557624598;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>RhaPHP系统安装</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="/static/bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="/static/jquery/jquery-1.9.1.min.js"></script>
<style>
body{font-family: "Microsoft Yahei",'新宋体';}
.container{background: #ffffff; margin: 50px auto; padding: 20px 0; width: 1024px;}
.header-title{border-bottom: 1px solid #dedede; margin-bottom: 10px;}
.progress-tool{padding: 10px;}
.progress{height: 30px;}
.progress-bar{line-height: 30px; font-size: 14px;}
.article{padding: 0 20px;}
h1{font-size: 18px; color: #333333; font-weight: bold;}
h2{font-size: 16px; color: #333333; font-weight: bold;}
</style>
</head>

<body style="background:  rgb(230, 234, 234)">
<div class="container">
	<div class="margin">
		<div class="text-center header-title margin-top">
			<h1>RhaPHP系统<?php if(session('update')): ?>升级<?php else: ?>安装<?php endif; ?></h1>
		</div>
		<div class="progress-tool">
			<div class="progress">
				<div class="progress-bar progress-bar-<?php echo htmlentities($status['index']); ?> progress-bar-striped" style="width: 20%">
					<span>系统安装</span>
				</div>
				<div class="progress-bar progress-bar-<?php echo htmlentities($status['check']); ?> progress-bar-striped" style="width: 20%">
					<span>环境检查</span>
				</div>
				<div class="progress-bar progress-bar-<?php echo htmlentities($status['config']); ?> progress-bar-striped" style="width: 20%">
					<span>系统配置</span>
				</div>
				<div class="progress-bar progress-bar-<?php echo htmlentities($status['sql']); ?> progress-bar-striped" style="width: 20%">
					<span>数据库安装</span>
				</div>
				<div class="progress-bar progress-bar-<?php echo htmlentities($status['complete']); ?> progress-bar-striped" style="width: 20%">
					<span>安装完成</span>
				</div>
			</div>
		</div>
		<div class="article margin-top">
			
<h2 class="text-center">
	创建数据库
</h2>
<form method="post" target="_self">
	<div class="create-database">
		<h2>
			数据库类型
		</h2>
		<table class="table-hover table">
			<tr>
				<td>
					<select class="form-control" name="db[]">
						<option>
							mysql
						</option>
						<option>
							Sqlsrv
						</option>
						<option>
							Sqlite
						</option>
						<option>
							Pgsql
						</option>
					</select>
				</td>
				<td>
					系统默认使用mysql数据库，如使用Sqlsrv、Sqlite、Pgsql请自行做相关配置
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="db[]" type="text" value="127.0.0.1">
				</td>
				<td>
					<span>
						数据库服务器IP，127.0.0.1与localhost为服务器本地
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="db[]" type="text" value="<?php echo config('subject_name'); ?>">
				</td>
				<td>
					<span>
						数据库名
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="db[]" type="text" value="root">
				</td>
				<td>
					<span>
						数据库用户名
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="db[]" type="password" value="">
				</td>
				<td>
					<span>
						数据库密码
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="db[]" type="text" value="3306">
					</input>
				</td>
				<td>
					<span>
						数据库端口，数据库服务连接端口，一般为3306
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="db[]" type="text" value="rh_" class="form-control">
				</td>
				<td>
					<span>
						数据表前缀，同一个数据库运行多个系统时请修改为不同的前缀
					</span>
				</td>
			</tr>
		</table>
	</div>
	<div class="create-database">
		<h2>
			创始人帐号信息
		</h2>
		<table class="table-hover table">
			<tr>
				<td>
					<input class="form-control" name="admin[]" type="text" value="admin">
				</td>
				<td>
					<span>
						用户名(
						<span class="text-danger">
							英文+数字，严禁中文与特殊字符
						</span>
						)
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="admin[]" type="password" value="">
				</td>
				<td>
					<span>
						密码
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="admin[]" type="password" value="">
				</td>
				<td>
					<span>
						确认密码
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<input class="form-control" name="admin[]" type="text" value="admin@admin.com">
				</td>
				<td>
					<span>
						邮箱，请填写正确的邮箱便于收取提醒邮件
					</span>
				</td>
			</tr>
		</table>
		<div>
		</div>
	</div>
	<div class="text-center">
		<button class="btn btn-primary" id="submit" type="submit">
			下一步
		</button>
		<a class="btn btn-default" href="<?php echo url('extension/index/check'); ?>">
			上一步
		</a>
	</div>
</form>


			<div class="margin-top">
				
			</div>
		</div>
	</div>
</div>
</body>
</html>