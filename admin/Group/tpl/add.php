   <form action="<?php url("insert")?>" id="j_custom_form"  class=" form-validate col-md-12 form-label-right center-margin" method="post" noEnter>
      
        <div class="pageContainer">
            <div class="form-row mrg5B">
                <div class="form-label col-md-3">
                <label for="j_name">名称：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="validate[required,custom[onlyLetterNumber]] required" name="name" id="j_name" value=""  >
                </div>
            </div>
             <div class="form-row mrg5B">
                <div class="form-label col-md-3">
                <label for="j_icon">图标：</label>
                </div>
                <div class="form-input col-md-6">
                <input type="text" class="form-control validate[required] required" size="20" name="icon" id="j_icon" value=""  >
                 </div>
            </div>
            <div class="form-row mrg5B">
                <div class="form-label col-md-3">
                <label for="j_title">说明：</label>
                 </div>
                <div class="form-input col-md-6">
                <input type="text" class="form-control  validate[required] required" size="30" name="title" id="j_title" value="" >
            </div>
            </div>
             <div class="form-row mrg5B">
                <div class="form-label col-md-3">
                <label for="j_sort">排序：</label>
                 </div>
                <div class="form-input col-md-6">
                <input type="text" class="form-control validate[required,custom[integer]] required" size="5" name="sort" id="j_sort" value="" >
            </div>
            </div>

            <div class="form-row mrg5B">
                <div class="form-label col-md-3">
                <label for="j_status">状态：</label>
                 </div>
                <div class="col-md-6">
               <select name="status"  data-container="body"  id="j_status" class="selectpicker show-tick validate[required]" data-style="btn medium bg-green" data-width="auto">
                               
                                 <option value="1">启用</option>
                                <option value="0">禁用</option>
                 </select>
            </div>
            </div>
       
		       <div class="actionBar">
               
                <div class="form-input col-md-10 col-md-offset-3">
                    <button type="button" class="btn medium bg-blue xubox_yes"> <span class="button-content">保存</span></button>
            <button type="button" class="btn medium bg-red mrg15L xubox_close"><span class="button-content">取消</span></button>

                </div>
            </div>
	 </div>
    </form>
