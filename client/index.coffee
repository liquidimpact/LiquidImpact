define (require, exports) ->
	$(->	
		console.log 'start'

		# console.log 		$("#wrapper")
		
		screenWidth = document.body.clientWidth
		console.log screenWidth
	
		$(".leaf").each((index,item)=>
			$(item).css({width:screenWidth,left:screenWidth*index})
		)
		count = 0		
		$("#wrapper").click =>
			if count is 3 then count = 0 else count++
			
			# #directly change view
			# $wrapper = $("#wrapper")[0]
			# $wrapper.scrollLeft = count * screenWidth
			
			
			#css3
			$(".leaf").each((index,item)=>
				$(item).css("left",index * screenWidth - count * screenWidth)
			)
			# #move with scroll
			# move(count * screenWidth)
			
		move = (distance)->
			moveStep = ->
				$wrapper = $("#wrapper")[0]
				$wrapper.scrollLeft += 50
				
				if $wrapper.scrollLeft >= distance 
					$wrapper.scrollLeft = distance
				else
					setTimeout(moveStep,50)
					
			moveStep()
	)