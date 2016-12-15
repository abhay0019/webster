function validate_registration()
  {


         if( document.form1.Name.value == "" )
         {
            alert( "Please provide your name!" );
            document.form1.Name.focus() ;
            return false;
         }
          if( document.form1.username.value == "" )
         {
            alert( "Please provide your username!" );
            document.form1.username.focus() ;
            return false;
         }
          if( document.form1.reg_no.value == "" )
         {
            alert( "Please provide your registration number!" );
            document.form1.reg_no.focus() ;
            return false;

         }


         var x = document.forms["form1"]["email"].value;
         if(x=="")
          {
           alert("Please enter your email");
           document.form1.email.focus();
           return false;
          }
         var atpos = x.indexOf("@");
         var dotpos = x.lastIndexOf(".");
         if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
          {
            alert("Not a valid e-mail address");
            return false;
           }
         if( document.form1.mobile.value == "" ||
         isNaN( document.form1.mobile.value ) ||
         document.form1.mobile.value.length != 10)
         {
            alert( "Please provide a valid mobile number ");
            document.form1.mobile.focus() ;
            return false;
         }
        if(document.form1.passwd.value=="")
          {
            alert("Please enter the password ");
            document.form1.passwd.focus();
            return false;

          }
        if(document.form1.passwd.value!="" && document.form1.passwd.value.length<5)
          {
            alert("Password length cannot be less than 5");
            document.form1.passwd.focus();
            return false;
          }

  }
