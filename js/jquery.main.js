jQuery(document).ready(function(){
	jQuery('.share-blank').click(function(e){
		var url = jQuery(this).attr('href');
		window.open(url, 'sharer', 'toolbar=0,status=0,width=626,height=436');
		e.preventDefault();
	});
	jQuery('.btn-search').click(function(e){
		if(jQuery('.form-search .holder').hasClass('open'))
		{
			jQuery('.form-search').submit();
		}
		else
		{
			jQuery('.form-search .holder').addClass('open')
		}
		e.preventDefault();
	});
});