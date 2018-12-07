<?php
/**
 * Created by PhpStorm.
 * User: 11914
* Date: 2018/12/7
* Time: 21:00
*/






?>
<html>
<head>
    <script>
        function validation(){
            var form = document.forms[0];
            var error = "";

            if(form.surname.value==""){
                error  = error+" surname " ;

            }


            if(form.name.value==""){
                error = error+" name " ;

            }

            if(form.email.value==""){

            }

            if(form.telephone.value==""){
                error = error+" telephone" ;

            }

            var z = -1 ;
            for(var i=0 ; i<form.country.options.length ; i++){
                if(form.country.options[i].selected){
                    z = i ;
                }
            }


            if(error !=""){
                var errorText = "You forgot to fill in following fields:\n";
                errorText = errorText 1+ error;
                window.alert(errorText) ;
                return false ;
            }
            return true;

        }
    </script>

</head>
<body>
<h1>Contact form</h1>
<form action = "data.html" onsubmit="return validation();">
    <fieldset style = "text-align:right ; width:350px;">
        <legend>Your data</legend>
        Surname:<input name="surname" type="text" size="30" maxlength="30" /><br/>
        Name  : <input name = "name" type="text" size="30" maxlength = "30"/><br/>
        E-Mail:<input name="email" type ="text" size = "30" maxlength="30" /><br/>
        Telephone no:<input name="telephone" type="text" size="30"><br/>
        <select name="country">
            <option>Choose your country:</option>
            <option value="Germany">Germany</option>
            <option value="Austria">Austria</option>
            <option value="Switzerland">Switzerland</option>
        </select><br/>
        <input type="radio" name="clienttype" value="g"/>Business Client
        <input type="radio" name="clienttype" value="p"/>Private Client <br/>
        Contact via:
        <input type="checkbox" name="contact_tele" /> Telephone
        <input type="checkbox" name="contact_mail" /> E-Mail <br/>
    </fieldset>

    <fieldset style="text-align:right ; width: 350px;">
        <legend>Your message</legend>
        <textarea name ="message" cols="40" rows="6"></textarea><br/>

    </fieldset>
    <p>
        <input type="submit" value="Submit" />
        <input type="submit" value="Reset" />

    </p>

</form>
</body>

</html>>