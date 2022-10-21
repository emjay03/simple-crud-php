<html>   
   <head>
      <title>Customer Information</title> 
<Style>
  *{
  margin:0;
  padding:0;
  box-sizing:border-box;
  outline:none;
  
  }
  
  body{
  font-family:george,sans-serif;
  background-color:pink;
  
  justify-content:center;;
  align-item:Center;
  height:100%;
  }
  .form2{
  width:450px;
  background:#fff;
  box-shadow:0 5px 21px #d4d4d4;
  padding:40px;
  height:550px;
  border-radius:8px;
 
  text-align:Center;
  margin-left:450px;
  }
  label h4{
  
  position:relative;
  display:block;
  margin-bottom:2px;
  font-family:helvetica;
  font-family:georgia,serif;
  }
  
  .lab{
  width:390px;
  height:50px;
  padding:0 20px;
  font-size:18px;
  
  font-family:georgia,serif;
  text-align:center;
  border:none;
  border-bottom:2px solid black;
  

  
  }
  button{
  display:inline-block;
  width:180px;
  height:50px;
  line-height:50px;
  box-shadow:0 10px 25px blue;
  border-radius:30px;
  margin-top:10px;
  cursor:pointer;
  
  }
  h5{
  text-align:left;
  font-size:19px;
  font-family:goergia,serif;
  padding:10px 10px 10px 0px;
  
  
  }
  .insert{
  border:1px solid black;
  width:157px;
  height:48px;
  margin-top:9px;
  background:white;
  cursor:pointer;
  font-size:20px;
  font-family:georgia,sans-serif;
  }
  .insert:hover{
	  background:pink;
  }
  .viewall {
  border:1px solid black;
  padding-left:50px;
  padding-right:50px;
  padding-top:12px;
 padding-bottom:11px;
  font-size:20px;
 
  font-family:georgia,sans-serif;
  
  }
  .viewall:hover{
	  background:pink;
  }
  a{
  text-decoration:none;
  color:black;
  
  }
  .form1{
  width:450px;
  background:#fff;
  box-shadow:0 5px 21px #d4d4d4;
  padding:40px;
  border-radius:8px;
  height:240px;
  text-align:Center;
  margin-left:450px;
  font-family:georgia,serif;
  margin-bottom:10px;
  margin-top:20px;
  }
  .a{
	 width:390px;
 height:40px;
 border-radius:20px;
  font-family:georgia,serif;
  text-align:center;
 
 
  }
  .b{
	   border:1px solid black;
  padding-left:30px;
  padding-right:30px;
  padding-top:12px;
 padding-bottom:11px;
  font-size:15px;
 margin-top:10px;
 cursor:pointer;
  font-family:georgia,sans-serif;
  }
  .b:hover{
	  background:pink;
  }
 .search{
	 font-family:goergia,serif;
	 font-size:20px;
	 
 }
</style>  
      
   </head>
   
   <body>

  <form class="form1" action="er.php" method="post">
<label><h4>ID DELETE</h4>
            <input class="lab" type="text" name="id" required><br><br>

            <input class="insert"type="submit" name="delete" value="Clear Data">
</label>
        </form>
	
</form>
      <form class="form2" action = "r.php" method="post"name = "myForm" onsubmit = "return(validate());">
	


</label>	
	  <h5>New Customer</h5>
	  
	  <label><h4>ID</h4>
  <input class="lab" type="number" name="id">
  </label>
     <label><h4>Name</h4>
  <input class="lab" type="text" name="name">
  </label>
  
  <label>
      <h4>Agent Name</h4>
	  <input class="lab" type="text" name="agentname">
	  </label>
	<label>
	   <h4>Product ID</h4>
	   <input class="lab" type="number" name="productid">
	  </label>
	  
	  <label>
	  <h4>Address</h4>
	  <input class="lab" type="text" name="address">
	  </label>
	  <BR>
	   
	   
        <input class="insert "type="submit" name="update" value="Update Data">
	<a class="viewall"href="viewall.php">View all</a>
	

      </form>
	  
<script>
  
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         if( document.myForm.agentname.value == "" ) {
            alert( "Please provide your Agent Name!" );
            document.myForm.agentname.focus() ;
            return false;
         }
		 if( document.myForm.productid.value == "" ) {
            alert( "Please provide your Product ID!" );
            document.myForm.productid.focus() ;
            return false;
         }
		 if( document.myForm.address.value == "" ) {
            alert( "Please provide your Address" );
            document.myForm.address.focus() ;
            return false;
         }
         
     
      }
 
</script>      
   </body>
</html>
