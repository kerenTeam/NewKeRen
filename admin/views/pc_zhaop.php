<!-- content start -->
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">案例</strong> / <small>case</small></div>
  </div>
      
      <form action="" method="" enctype="multipart/form-data" class="pc_case">
      <a href="<?php echo site_url('pc_index/addzp')?>" class="am-cf"><i class="fa fa-plus"></i> 新增</a>
      <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults">
      <table class="am-table am-table-striped am-table-hover table-main wx_input">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" class="allchexed"/></th><th class="table-id">ID</th><th class="table-title">招聘岗位</th><th class="table-type">职位描述</th><th class="table-type">入职需求</th><th class="table-set">操作</th>
              </tr>

          </thead>
          <tbody id="movies">
              <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>PHP</td>
              <td>
                  负责后台
              </td>

              <td>
              1.技术好；2.人好；
             </td>
              <td>
                  <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                  <a class="am-btn am-btn-default am-btn-xs am-text-secondary" href="<?php echo site_url('pc_index/addzp')?>"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                    <a class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>
                  </div>
                </div>
              </td>
            </tr>

            </tbody>
        </table>
        <div class="am-cf">
  共 15 条记录
  <div class="am-fr">
    <div class="holder"></div> 
  </div>
</div>
</div>
        </div>
        </div>

        </form>
      </div>



<script type="text/javascript" src="assets/js/imgup.js"></script>
<script type="text/javascript">
  $(function (){
    $('.allchexed').click(function(){
      $(this).parentsUntil('table').next('tbody').find('input[type="checkbox"]').prop("checked",this.checked);
    });
    var $subBox = $(".wx_bankcheck");
    var $subBox2 = $(".wx_mollcheck");
    var allsubbox = $subBox.parentsUntil('table').prev('thead').find('input[type="checkbox"]');
    var allsubbox2 = $subBox2.parentsUntil('table').prev('thead').find('input[type="checkbox"]');
            $subBox.click(function(){
                allsubbox.prop("checked",$subBox.length == $(".wx_bankcheck:checked").length ? true : false);
            });
            $subBox2.click(function(){
              allsubbox2.prop("checked",$subBox2.length == $(".wx_mollcheck:checked").length ? true : false);
            })
  })
</script>
<!-- content end