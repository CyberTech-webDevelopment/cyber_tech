$('.navbar-toggler').click(function(){
			let src=$(this).find('img').attr('src')
			let data_src=$(this).find('img').attr('data-src')
			$(this).find('img').attr('src', data_src)
			$(this).find('img').attr('data-src', src)
})