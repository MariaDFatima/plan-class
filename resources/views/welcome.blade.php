<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>bibi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        


        <style>
*{margin:10px;
  padding:5px 50px;
  font-family:Verdana, Geneva, Tahoma, sans-serif;
  border-block-end-style:20; 
  border:10px;
  line-height: 1px 10px;
            }
   body {
    text-align:center ;
    display:flex;
    background:rgb(114, 33, 103) ;    
    
          }
    h2{
        text-align:center ;
        border: 7px solid rgb(29, 1, 27);
        border-radius:402px;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
        border-bottom:1px solid rgb(255, 255, 255);
        
        
    }
    
    p{
        text-align:center ;
        backdrop-filter:rgb(41, 2, 31) 20px;
        color:rgb(255, 255, 255);
        
        
        
      }
    form{
        text-align:center ;
        border: 3px solid rgb(243, 242, 243);
        border-radius:30px;
        color:rgb(255, 255, 255); 
        width: 800px;
        height: 500px;
        margin: 5px 150px;
        font-weight: bold; /* Deixa o texto em negrito */
        text-shadow: 2px 2px 5px ;
    }
  


    button{
        border-radius: 10px;
        box-shadow:0 0 10px rgb(175, 14, 167);
        weight:600px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
        font-size: 13px;
        white-space: nowrap;
  
}

.button:hover {
  background-color: rgb(167, 98, 173);
  text-shadow: 2px 2px 5px ;
  white-space: nowrap;
}

    

        </style>
    </head>
                         
    
<html>

<body>
    
    <form action="{{ route("login") }}" method="post">
        @csrf
    <hr>
        <h1>Login</h1>
    <hr>
    <p> <h4>Criar conta </h4> <button>
        <a href="{{ route("register") }}">cadastre-se</a></button></p>
        <br>
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <hr>
        <br>
        <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>
