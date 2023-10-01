<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet"  href="editAccount.css">
        <title>Edit Account</title>

    </head>
    <body>
        <center>
            <img src="userAccountImages/blankPP.png" alt="Profile Photo" width="260px"><br>
            <h1 color="black">Welcome, User!</h1>
        </center>
       
        <form method="post">
            <div  style="margin-left:20%;width:800px; border:2px solid white; min-height: 650px;">
                         
              <br><br><br>
              <div style="margin-left: 250px;">      
        
                  
                  <label><b>You are currently signed in as, <a style="color:red">user name</a> </b></label> <br><br><br><br>
        
          
                  <label for="name"><b>Name : </b></label></br>
                  <input type="textt"   id="name : " required><br><br></br>
        
        
                  <label for="email"><b>E-mail Address : </b></label></br>
                  <input type="email"   id="email" ><br><br></br>
          
                  <label for="age"><b>Age : </b></label></br>
                  <input type="number"   id="age : " required><br><br></br>

                  <label for="address"><b>Address : </b></label></br>
                  <input type="textarea"   id="address : " required><br><br></br>
                 
          
                  <button type="submit" name="confirmChanges"  style="width:50%">Confirm Changes </a></button><br>
            
                  <button type="submit" name="submit"  style="width:50%"> Submit </a></button><br>

          
              <br><br>
                  
             </div>
            </div>  
        
             
            <br><br>         
          </form>
        

    </body> 
</html>