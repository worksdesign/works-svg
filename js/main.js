

$( document ).ready(function() {

	$('#peeps').on('click',function(){

	//	alert('in');

		$('#peeps svg').velocity({
	 	translateZ: 0, // Force HA by animating a 3D property
    	translateX: "200px"
		});

	})

});
