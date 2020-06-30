

    
var selects = document.querySelectorAll('#qty');




Array.from(selects).forEach((element)=>{

    element.addEventListener('change',function(){
    	var rowId = this.getAttribute('data-id');
    	var token = document.querySelectorAll('meta[name="csrf-token"]').getAttribute('content');
    

    	fetch
    	(

    		`cart/${rowId}`,
    		{
    			headers:
    			{
    				"Content-type":"application/json",
    				"Accept":"application/json, text-plain,*/*",
    				"X-Request-With":"XMLHttpRequest",
    				"X-CSRF-TOKEN":token
    			},
    			method:'patch',
    			body:JSON.stringify({
    				qty:this.value
    			})
    		}
    	).then((data)=>{
    			console.log(data);
    			location:reload();
    		}).catch((error)=>{
    			console.log(error);
    	})
    })
   
});


