<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>

  
    <style>
   
 *{
    margin: 0%;
    padding: 20;
    border-radius: 10px;
    line-height: 1px 10px;
    
   }

body {
    fify-content: center;
    alignont-family:'Times New Roman', Times, serif;
    background-color:  rgb(157, 38, 173);
    display: flex;
    justify-items: center;
    height: 100vh;
    font-size:-10px
    
}

button {
    padding: 10px;
    background-color: #b84ec2;
    border: none;
    border-radius: 10px;
    color: #fff;
    font-size: 16px;
    cursor: pointer; 
    margin:9px 45px;
    padding: 10px; 
}
 label{
    
    padding: 0px;
    color:block;
    font-size: 20px;
    color: #fff;
    margin:0px 0px;
    padding:0px 0px; 
    vertical-align:25px; 
}

button:hover {
    background-color: #dbd5d5;
}
h2{
   text-align:center; 
   color: #fff;
   background:rgb(212, 45, 228);
   border-radius: 10px;
   width: 200px;
   position: relative;
   border-bottom:1px solid rgb(255, 255, 255);
   white-space: nowrap;
}

form
{
    background-image: linear-gradient(45deg,rgb(104, 12, 99),rgb(156, 53, 151),rgb(122, 32, 134)) ;  
    position:fixed;
    top:10% ;
    left:35%;
    transform: translate(-35px,-15px );
    padding: 8px 141px;
    height: 530px;
    border: 2px solid rgb(183, 61, 194);
    border-radius: 50px;
    text-align:center;
    
}


img{
    height: 115%;
    transform: translate(-10%,-10%);
}
    </style>

</head>
<body>
    
<img src="" alt="">


<form action="{{ route("cadastrar-livro") }}" method="POST">
        @csrf
        <h2>Login de livros</h2>
        <label for="">Autor</label>
         <br>
        <input type="text" name="Autor">
         <br>
        
        <label for="">Titulo</label>
        <br>
        <input type="text" name="Titulo">
        <br>
        <label for="">Subtitulo</label>
        <br>
        <input type="text" name="Subtitulo">
        <br>
        <label for="">Ediçao</label>
        <br>
        <input type="text" name="ediçao">
        <br>
        <label for="">Editora</label>
        <br>
        <input type="text" name="Editora">
        <br>
        <label for="">Ano de publicacao</label>
        <br>
        <input type="number" name="Ano_de_publicacao">
        <br>
        <br>
         <button type="submit">Cadastrar</button>
        <br>
    </form>

</body>
</html>