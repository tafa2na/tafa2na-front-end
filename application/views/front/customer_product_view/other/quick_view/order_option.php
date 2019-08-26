<div id="pnopoi"></div>
<!-- <div class="buttons">
	<div id="share"></div>
</div> -->
<div class="social_icons py-3">
    <a href="#" class="icon-button facebook-icon"><i class="fa fa-facebook"></i><span></span></a>
    <a href="#" class="icon-button twitter-icon"><i class="fa fa-twitter"></i><span></span></a>
    <a href="#" class="icon-button instagram-icon"><i class="fa fa-instagram"></i><span></span></a> 
</div>
<hr class="page-divider small"/>
<script>
/*$(document).ready(function() {
	$('#popup-7').find('.closeModal').on('click',function(){
		$('#pnopoi').remove();
	});
	check_checkbox();
	set_select();
	$('#share').share({
		urlToShare: '<?php //echo $this->crud_model->product_link($row['product_id']); ?>',
		networks: ['facebook','googleplus','twitter','linkedin','tumblr','in1','stumbleupon','digg'],
		theme: 'square'
	});
});*/
function check_checkbox(){
	$('.checkbox input[type="checkbox"]').each(function(){
        if($(this).prop('checked') == true){
			$(this).closest('label').find('.cr-icon').addClass('add');
		}else{
			$(this).closest('label').find('.cr-icon').addClass('remove');
		}
    });
}
function check(now){
	if($(now).find('input[type="checkbox"]').prop('checked') == true){
		$(now).find('.cr-icon').removeClass('remove');
		$(now).find('.cr-icon').addClass('add');
	}else{
		$(now).find('.cr-icon').removeClass('add');
		$(now).find('.cr-icon').addClass('remove');
	}
}
</script>