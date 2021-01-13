function validate(){
var username = document.getElementById("name").value;
var phone = document.getElementById("phone").value;
var email = document.getElementById("email").value; 
var feedback = document.getElementById("feedback").value; 

        if ( username==""){  
            alert("Name can't be blank");  
            
        } 
         if ( username==!(/^[a-zA-Z]$/.test(username))){  
            alert("Name can only contain alphabets ");  
            
        } 
         if ( !(username.length>=3)){  
            alert("Name length can't less than 3 ");  
            
        } 

        if (!(/^[a-zA-Z0-9_]+@[a-zA-Z_]+(.[a-zA-Z]{2-4})*$/.test(email))) {
            alert("You have entered an invalid email address!"); 
            
        }

        
        else if(!(/^[789]\d{9}$/.test(phone))) {
            alert("Enter Correct Phone");  

        }

        else {
            alert("OK");
        }
}
