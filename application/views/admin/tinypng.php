<div class="layui-container site">
	<div class="layui-row">
		<div class="layui-col-lg12">
			<div class="setting-msg">
				可以使用 <a href="https://tinypng.com/" rel = "nofollow" target = "_blank">TinyPNG</a> 提供的API来压缩图片，免费API每月额度500张图片，可以用两个邮箱申请2个API KEY。
			</div>
		</div>
		<div class="layui-col-lg6">
			<div id="site">
			<form class="layui-form" action="/set/tinypng" method = "post">
				<div class="layui-form-item">
					<label class="layui-form-label">API key 1</label>
					<div class="layui-input-block">
					<input type="text" name="api1" required  lay-verify="required" placeholder="请输入API key" autocomplete="off" class="layui-input" value = "<?php echo @$values->api1; ?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">API key 2</label>
					<div class="layui-input-block">
					<input type="text" name="api2" lay-verify="required" placeholder="请输入API key" autocomplete="off" class="layui-input" value = "<?php echo @$values->api2; ?>">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">启用压缩</label>
					<div class="layui-input-block">
					<input type="checkbox" name="switch" lay-skin="switch" lay-text="ON|OFF" <?php echo $switch; ?>>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-input-block">
					<button class="layui-btn" lay-submit lay-filter="formtiny">保存</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>