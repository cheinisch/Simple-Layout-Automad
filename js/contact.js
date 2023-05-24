

    $( '#contact-form').submit( function() {
        var formControl = true;

        $( '#frmGrpVorname' ).removeClass( 'has-error' );
		$( '#vorname' ).removeClass( 'has-error' );
        $( '#frmGrpNachname' ).removeClass( 'has-error' );
		$( '#name' ).removeClass( 'has-error' );
        $( '#frmGrpEmail' ).removeClass( 'has-error' );
		$( '#email' ).removeClass( 'has-error' );
        $( '#frmGrpNachricht' ).removeClass( 'has-error' );
		$( '#nachricht' ).removeClass( 'has-error' );


        var vorname = $( '#vorname' );
        var nachname = $( '#name' );
        var email = $( '#email' );
        var nachricht = $( '#nachricht' );
		
		var button = true;

        if(vorname.val() == '') {
            formControl = false;
			$( '#vorname' ).addClass( 'has-error' );
			button = false;
        }

        if(nachname.val() == '') {
            formControl = false;
			$( '#name' ).addClass( 'has-error' );
			button = false;
        }

        if(nachricht.val() == '') {
            formControl = false;
			$( '#nachricht' ).addClass( 'has-error' );
			button = false;
        }

        if(validateEmail(email.val()) == false) {
            formControl = false;
			$( '#email' ).addClass( 'has-error' );
			button = false;
        }
		System.out.println("asd");
        if(formControl == true) {
            $.ajax({
				System.out.println("test");
                type: "POST",
                url: "php/senden.php",
                data: { vorname:vorname.val(),
						nachname:nachname.val(),
						email:email.val(),
						nachricht:nachricht.val()
					  }
            }).done(function(msg) {
                $( '#message' ).addClass( 'alert' );
                $( '#message' ).addClass( 'alert-success' );
                $( '#message').html( msg );
            });
			document.getElementById("sendenbutton").disabled = true; 
        }
		
        return false;
    } );