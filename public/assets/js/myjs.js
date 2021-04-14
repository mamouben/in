$( document ).ready(function() {
    $( "#info_pro" ).hide();
    $( "#select_typeclient" ).on( "change", function() {
        var type = $( "#select_typeclient option:selected" ).text();

        if(type == "professionnels"){
            $( "#info_pro" ).show();
        }
        else if(type == "particuliers"){
            $( "#info_pro" ).hide();
        }
      });


});