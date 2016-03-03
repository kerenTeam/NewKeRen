   </div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">Copyright © 2012-2015 krrjgf.  可人软件 版权所有Power by krrjgf 蜀ICP备14021068号.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/imgup.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/jPages.js"></script>
<script>
  $(function(){
    $("div.holder").jPages({
      containerID : "movies",
      previous : "上一页",
      next : "下一页",
      perPage : 5,
      delay : 5
    });
  });
  </script>
</body>
</html>