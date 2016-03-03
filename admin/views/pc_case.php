<!-- content start -->
<div class="admin-content">
  <div class="am-cf am-padding">
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">案例</strong> / <small>case</small></div>
  </div>
  
  
      
      <form action="" method="" enctype="multipart/form-data" class="pc_case">
      <a href="<?php echo site_url('pc_index/addcase')?>" class="am-cf"><i class="fa fa-plus"></i> 新增</a>
      <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults">
      <table class="am-table am-table-striped am-table-hover table-main wx_input">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" class="allchexed"/></th><th class="table-id">ID</th><th class="table-title">标题</th><th class="table-type">简介</th><th class="table-type">图片</th><th class="table-author">图文</th><th class="table-set">操作</th>
              </tr>

          </thead>
          <tbody id="movies">
              <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>案例标题</td>
              <td>
                  3436465
              </td>

              <td>
              <!-- <div class="wx_type_img">
              <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add"> -->
            <!-- 图片实时预览
            <div id="preview"> <img style="border-radius: 3px;" src="" alt="选择图片"> </div>
             </div> -->
             <img style="border-radius: 3px;" src="" alt="没有图片">
             </td>
              <td>
                  1234654
              </td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                  <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr>
              <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>案例标题</td>
              <td>
                  3436465
              </td>

              <td>
              <!-- <div class="wx_type_img">
              <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add"> -->
            <!-- 图片实时预览
            <div id="preview"> <img style="border-radius: 3px;" src="" alt="选择图片"> </div>
             </div> -->
             <img style="border-radius: 3px;" src="" alt="没有图片">
             </td>
              <td>
                  1234654
              </td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                  <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr>
              <tr>
              <td><input type="checkbox" class="wx_bankcheck" /></td>
              <td>1</td>
              <td>案例标题</td>
              <td>
                  3436465
              </td>

              <td>
              <!-- <div class="wx_type_img">
              <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add"> -->
            <!-- 图片实时预览
            <div id="preview"> <img style="border-radius: 3px;" src="" alt="选择图片"> </div>
             </div> -->
             <img style="border-radius: 3px;" src="" alt="没有图片">
             </td>
              <td>
                  1234654
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