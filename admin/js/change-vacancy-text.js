$('.change-text').click(function(){
	let parent=$(this).parent()
	let text=parent.find('textarea').val()
	let res=parent.find('textarea').attr('data-name')
    $.ajax({
    	method: 'post',
    	url: '../php/change-vacancy-text.php',
    	data: {response: res, change_text: text},
    	success: function(res){
    		parent.find('.res-text').html(res)
    	}
    })
})