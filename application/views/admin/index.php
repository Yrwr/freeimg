<script src="/static/js/Chart.min.js"></script>
<div class="layui-container" style = "margin-top:2em;">
	<div class="layui-row layui-col-space20">
		<div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-upload"></i> 累计上传</h3>
				<p><?php echo $num; ?>张</p>
			</div>
		</div>
		<div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-user-plus"></i> 管理员累积上传</h3>
				<p><?php echo $admin; ?>张</p>
			</div>
		</div>
		<div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-user-o"></i> 游客累积上传</h3>
				<p><?php echo $visitor; ?>张</p>
			</div>
		</div>
		<div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-question"></i> 可疑图片</h3>
				<p><?php echo $dubious; ?>张</p>
			</div>
		</div>
		<div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-calendar-check-o"></i> 本月上传</h3>
				<p><?php echo $month; ?>张</p>
			</div>
		</div>
		<div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-calendar-plus-o"></i> 今日上传</h3>
				<p><?php echo $day; ?>张</p>
			</div>
		</div>
      <div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-comments"></i> 问题反馈</h3>
				<p><a href="https://yrwr.net/1095.html" target = "_blank">https://yrwr.net/</a></p>
			</div>
		</div>
      <div class="layui-col-lg3">
			<div class = "analyze">
				<h3><i class="fa fa-github"></i> 源码下载</h3>
				<p><a href="https://github.com/Yrwr/freeimg" target = "_blank">https://github.com/Yrwr/freeimg/</a></p>
			</div>
		</div>
	</div>
</div>

  
 