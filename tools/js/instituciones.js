$(document).ready(function(){
	$("#loading").hide();

	$( "#frm_institu" ).on( "submit", function( event ) {
	  /*event.preventDefault();
	  console.log( $( this ).serialize() );*/

	  $.ajax({
	   url: $(this).attr("action"),
	   type: $(this).attr("method"),
	   data: $(this).serialize(),
	   beforeSend:function(){

	   	$("#loading").show();

	   },
	   success:function(){
	   	/*$("#loading").fadeOut("slow");*/
	    }
	   });

	});
});

