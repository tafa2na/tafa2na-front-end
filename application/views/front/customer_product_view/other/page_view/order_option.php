<div id="pnopoi"></div>
<div class="social_icons py-3">
    <a href="#" class="icon-button facebook-icon"><i class="fa fa-facebook"></i><span></span></a>
    <a href="#" class="icon-button twitter-icon"><i class="fa fa-twitter"></i><span></span></a>
    <a href="#" class="icon-button instagram-icon"><i class="fa fa-instagram"></i><span></span></a> 
</div>
<!-- <div class="buttons">
    <div id="share"></div>
</div>
<script>
	$(document).ready(function() {
		$('#share').share({
			networks: ['facebook','googleplus','twitter','linkedin','tumblr','in1','stumbleupon','digg'],
			theme: 'square'
		});
	});
</script> -->
<script>
$(document).ready(function() {
	check_checkbox();
});
function check_checkbox(){
	$('.checkbox input[type="checkbox"]').each(function(){
        if($(this).prop('checked') == true){
			$(this).closest('label').find('.cr-icon').addClass('add');
		}else{
			$(this).closest('label').find('.cr-icon').addClass('remove');
		}
    });
}
</script>