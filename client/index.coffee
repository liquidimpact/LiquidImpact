define (require, exports) ->
	$(->	
		console.log 'start'
		window.onresize = ->
			initSize()
		
		initSize =->
			screenWidth = document.body.clientWidth
			$("#wrapper").width($(".leaf").length * screenWidth)
			$(".leaf").each((index,item)->
				$(item).css({width:screenWidth})
			)
			
		initSize()
		$(".leaf").each((index,item)->
			if $(item).html() is ''
				$('<div/>').addClass('test-content').html(item.id).appendTo(item)
		)
		
		$("#nav-ul").delegate('li','click',->
			$('#nav-ul li').removeClass('active')
			$(this).addClass('active')
			panelName =$(this).attr('data-ref')
			$panel = $("#{panelName}-panel")
			$("#wrapper").css({left:-$panel.attr('data-order')*document.body.clientWidth})
		)
	)