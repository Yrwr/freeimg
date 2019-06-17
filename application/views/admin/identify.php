<div class="layui-container site">
	<div class="layui-row">
		<div class="layui-col-lg12">
			<div class="setting-msg">
				可以使用<a href="http://www.moderatecontent.com/" rel = "nofollow" target = "_blank">Moderate Content</a>申请的API KEY来进行鉴黄识别。
			</div>
			<div class = "identify-msg">
				<ol>
					<li>由于某些原因可能接口会超时或者识别错误，建议配合人工审核。</li>
					<li>鉴黄接口地址为： <a href="/deal/identify_more">/deal/identify_more</a> </li>
					<li>Moderate Content无法做到100%精准，可能存在误判,识别后的图片会标记为可疑图片。</li>
				</ol>
			</div>
		</div>
		<div class="layui-col-lg6">
			<div id="site">
			<form class="layui-form" action="/set/moderate" method = "post">
				<div class="layui-form-item">
					<label class="layui-form-label">API key</label>
					<div class="layui-input-block">
					<input type="text" name="api" value = "<?php echo $values; ?>" required  lay-verify="required" placeholder="请输入Moderate Content API KEY" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">启用鉴黄</label>
					<div class="layui-input-block">
					<input type="checkbox" name="switch" lay-filter="jhswitch" lay-skin="switch" lay-text="ON|OFF" <?php echo $switch; ?>>
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-input-block">
					<button class="layui-btn" lay-submit lay-filter="formModerate">保存</button>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>