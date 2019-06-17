
<?php
    //获取版本号
    $ver_file = FCPATH.'data/version.txt';
    if(is_file($ver_file)){
        @$version = file_get_contents($ver_file);
    }
?>
	<script src="/static/layui/layui.js"></script>
	<script src="/static/embed.js?v=<?php echo $version; ?>"></script>
	<script src="/static/clipBoard.min.js?v=1.40"></script>
</body>
</html>