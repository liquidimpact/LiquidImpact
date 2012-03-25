define (require, exports) ->
	$(->	
		console.log 'start'
		screenWidth = document.body.clientWidth
		console.log screenWidth
	
	
		$("#wrapper").width($(".leaf").length * screenWidth)
		$(".leaf").each((index,item)=>
			$(item).css({width:screenWidth})
		)
		
		$("#nav-ul").delegate('li','click',->
			$('#nav-ul li').removeClass('active')
			$(this).addClass('active')
			panelName =$(this).attr('data-ref')
			$panel = $("#{panelName}-panel")
			$("#wrapper").css({left:-$panel.attr('data-order')*screenWidth})
			
		)
	)