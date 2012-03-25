mockdata=
	'/casecategory/@id':
		[{id:"1", name:'superwolf',img:'http://url.img'}
		,{id:"2", name:'superwolf',img:'http://url.img'}
		,{id:"3", name:'superwolf',img:'http://url.img'}]
	'/case/@id':
		id:"1"
		name:"superwolf"
		description:"description string"
		medias:[
			id:"123123"
			description:"superwolf"
			src:"http:/url.img"
			type:"image" #image or video
		]
	'/clients':
		[{id:"1",name:"superwolf",img:"http://url",description:"string"}
		,{id:"2",name:"superwolf",img:"http://url",description:"string"}
		,{id:"3",name:"superwolf",img:"http://url",description:"string"}
		,{id:"4",name:"superwolf",img:"http://url",description:"string"}]
	'/client/@id/events':
		[{id:"1",title:"superowlf",eventOn:new Date(),concept:'string',clientId:"12",user:{id:"123",name:"superwolf"}}
		,{id:"2",title:"superowlf",eventOn:new Date(),concept:'string',clientId:"12",user:{id:"123",name:"superwolf"}}
		,{id:"3",title:"superowlf",eventOn:new Date(),concept:'string',clientId:"12",user:{id:"123",name:"superwolf"}}]
	'/event/collection/@page'
		[{id:"1",title:"superowlf",eventOn:new Date(),concept:'string',clientId:"12",user:{id:"123",name:"superwolf"}}
		,{id:"2",title:"superowlf",eventOn:new Date(),concept:'string',clientId:"12",user:{id:"123",name:"superwolf"}}
		,{id:"3",title:"superowlf",eventOn:new Date(),concept:'string',clientId:"12",user:{id:"123",name:"superwolf"}}]
	'/event/@id':
		id:"1"
		title:"superowlf"
		eventOn:new Date()
		createOn:new Date()
		content:'string'
		clientId:"12"
		user:{id:"123",name:"superwolf"}
	'/backstage':
		["imageurl","imageurl","imageurl","imageurl"]
	'/resources'
		[{id:'123',name:"contract",url:'ftp://url.com',user:{id:"123",name:"superwolf"}}
		,{id:'2',name:"contract",url:'ftp://url.com',user:{id:"123",name:"superwolf"}}
		,{id:'3',name:"contract",url:'ftp://url.com',user:{id:"123",name:"superwolf"}}
		,{id:'4',name:"contract",url:'ftp://url.com',user:{id:"123",name:"superwolf"}}]