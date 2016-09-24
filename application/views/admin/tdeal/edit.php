<!-- head -->
<?php $this->load->view('admin/tdeal/head', $this->data)?>

<div class="line"></div>

<div class="wrapper">
    
      <!-- Form -->
    <form enctype="multipart/form-data" method="post" action="" id="form" class="form">
      <fieldset>
        <div class="widget">
            <div class="title">
            <img class="titleIcon" src="<?php echo public_url('admin')?>/images/icons/dark/add.png">
            <h6>Thêm mới vé khuyến mãi</h6>
        </div>
          
            <ul class="tabs">
            <li class="activeTab"><a href="#tab1">Thông tin chung</a></li>
            </ul>
          
          <div class="tab_container">
               <div class="tab_content pd0" id="tab1" style="display: block;">

                 <div class="formRow">
                    <label for="param_name" class="formLeft">Nơi đi:<span class="req">*</span></label>
                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_from" value="<?php echo $tdeal->from ?>" name="from"></span>
                    <span class="autocheck" name="name_autocheck"></span>
                    <div class="clear error" name="name_error"></div>
                  </div>
                  <div class="clear"></div>
                </div>

                <div class="formRow">
                    <label for="param_name" class="formLeft">Nơi đến:<span class="req">*</span></label>
                  <div class="formRight">
                    <span class="oneTwo"><input type="text" _autocheck="true" id="param_to" value="<?php echo $tdeal->to ?>" name="to"></span>
                    <span class="autocheck" name="name_autocheck"></span>
                    <div class="clear error" name="name_error"></div>
                  </div>
                  <div class="clear"></div>
                </div>




              <div class="formRow">
                    <label for="param_name" class="formLeft">giá vé:<span class="req">*</span></label>
                  <div class="formRight">
                   <input type="text" _autocheck="true" id="param_price" value="<?php echo $tdeal->price ?>" name="price" style="width:100px">
                     <img src="<?php echo public_url('admin')?>/crown/images/icons/notifications/information.png" style="margin-bottom:-8px" class="tipS" original-title="Giá Vé khuyến mãi">
                    <span class="autocheck" name="name_autocheck"></span>
                    <div class="clear error" name="name_error"></div>
                  </div>
                  <div class="clear"></div>
                </div>
        

    <div class="formRow hide"></div>
             </div>
      
            
            
            
              </div><!-- End tab_container-->
              
              <div class="formSubmit">
                  <input type="submit" class="redB" value="Chinh sua">
                  <input type="reset" class="basic" value="Hủy bỏ">
              </div>
              <div class="clear"></div>
        </div>
      </fieldset>
    </form>
</div>
<div class="clear mt30"></div>
