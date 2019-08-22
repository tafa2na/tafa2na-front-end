
<section class="page-section color get_into">
    <div class="container">
        <div class="row margin-top-0">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="logo_top">
                    <a href="<?php echo base_url()?>">
                        <img class="img-responsive" src="<?php echo $this->crud_model->logo('home_bottom_logo'); ?>" alt="Shop" style="z-index:200">
                    </a>
                </div>
                <?php
                    echo form_open(base_url() . 'home/vendor_logup/add_info/', array(
                        'class' => 'form-login',
                        'method' => 'post',
                        'id' => 'sign_form'
                    ));
                ?>
                    <div class="row box_shape">
                        <div class="title">
                            <?php echo translate('vendor_registration');?>
                            <div class="option">
                                <?php echo translate('already_a_vendor_?_click_to_');?>
                                <a href="<?php echo base_url(); ?>vendor" target="_blank" class="vendor_login_btn"> 
                                    <?php echo translate('login');?> <?php echo translate('as_vendor');?>
                                </a>!
                                <?php echo translate('not_a_member_yet_?_click_to_');?>
                                <a href="<?php echo base_url(); ?>home/login_set/registration"> 
                                    <?php echo translate('sign_up');?> <?php echo translate('as_customer');?>
                                </a>!
                            </div>
                        </div>
                        <hr>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="name" type="text" placeholder="<?php echo translate('name');?>" data-toggle="tooltip" title="<?php echo translate('name');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="display_name" type="text" placeholder="<?php echo translate('display_name');?>" data-toggle="tooltip" title="<?php echo translate('display_name');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control emails required" name="email" type="email" placeholder="<?php echo translate('email');?>" data-toggle="tooltip" title="<?php echo translate('email');?>">
                            </div>
                            <div id='email_note'></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control pass1 required" type="password" name="password1" placeholder="<?php echo translate('password');?>" data-toggle="tooltip" title="<?php echo translate('password');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control pass2 required" type="password" name="password2" placeholder="<?php echo translate('confirm_password');?>" data-toggle="tooltip" title="<?php echo translate('confirm_password');?>">
                            </div>
                            <div id='pass_note'></div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control" name="company" type="text" placeholder="<?php echo translate('company');?>" data-toggle="tooltip" title="<?php echo translate('company');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control required" name="address1" type="text" placeholder="<?php echo translate('address_line_1');?>" data-toggle="tooltip" title="<?php echo translate('address_line_1');?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input class="form-control required" name="address2" type="text" placeholder="<?php echo translate('address_line_2');?>" data-toggle="tooltip" title="<?php echo translate('address_line_2');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="city" type="text" placeholder="<?php echo translate('city');?>" data-toggle="tooltip" title="<?php echo translate('city');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="state" type="text" placeholder="<?php echo translate('state');?>" data-toggle="tooltip" title="<?php echo translate('state');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="country" type="text" placeholder="<?php echo translate('country');?>" data-toggle="tooltip" title="<?php echo translate('country');?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control required" name="zip" type="text" placeholder="<?php echo translate('zip');?>" data-toggle="tooltip" title="<?php echo translate('zip');?>">
                            </div>
                        </div>
                        <div class="col-md-12 terms">
                            <input  name="terms_check" type="checkbox" value="ok" > 
                            <?php echo translate('i_agree_with');?>
                            <a type="button" data-toggle="modal" data-target="#myModal">
                                <?php echo translate('terms_&_conditions');?>
                            </a>
                        </div>
                        <?php
                            if($this->crud_model->get_settings_value('general_settings','captcha_status','value') == 'ok'){
                        ?>
                        <div class="col-md-12">
                            <div class="outer required">
                                <div class="form-group">
                                    <?php echo $recaptcha_html; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                        <div class="col-md-12">
                            <span class="btn btn-theme-sm btn-block btn-theme-dark pull-right logup_btn" data-ing='<?php echo translate('registering..'); ?>' data-msg="">
                                <?php echo translate('register');?>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- terms codition popup -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content py-2 px-4 pb-4">
        <div class="modal-header p-0 m-0">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h2 class="section-title terms-and-coditions section-title-lg">
                Terms and coditions
                <span>
                    <?php 
                    if($type=='terms_conditions'){
                        echo translate('terms_&_condition');
                    }
                    elseif($type=='privacy_policy'){
                        echo translate('privacy_policy');
                    }
                    ?>
                </span>
            </h2>
        </div>
        <h4> <b> Licensing Policy </b> </h4>
        <p class="condition-text"> The Bootstrap themes are released under the GNU General Public License v2 or later. You can use all our themes for personal and commercial use. Please go through the licensing policy page for licensing details. </p>

        <h4> <b> Product Compatibility </b> </h4>
        <div class="ml-4 mt-3">
            <h5> <b>1. Delivery </b> </h5>
            <p class="condition-text"> The Bootstrap themes are released under the GNU General Public License v2 or later. You can use all our themes for personal and commercial use. Please go through the licensing policy page for licensing details. </p>
            <h5> <b>1. Delivery </b> </h5>
            <p class="condition-text"> The Bootstrap themes are released under the GNU General Public License v2 or later. You can use all our themes for personal and commercial use. Please go through the licensing policy page for licensing details. </p>
        </div>
        <h4> <b> Ownership </b> </h4>
        <p class="condition-text"> The Bootstrap Themes claims ownership on all of its products. Hence, you may not demand your any kind of proprietorship over any of our products, modified or unmodified. We provide our products without any warranty, as it is.  </p>

      </div>
    </div>
  </div>
</div>
<style>
    .condition-text{
        font-size: 14px;
        opacity: .7;
        margin-bottom: 3px !important;
    }
    .terms-and-coditions{
        font-size: 20px!important;
        margin-top: 10px;
        opacity: .9;
    }
    .get_into .terms a{
        margin:5px auto;
        font-size: 14px;
        line-height: 24px;
        font-weight: 400;
        color: #00a075;
        cursor:pointer;
        text-decoration:underline;
    }
    
    .get_into .terms input[type=checkbox] {
        margin:0px;
        width:15px;
        height:15px;
        vertical-align:middle;
    }
</style>