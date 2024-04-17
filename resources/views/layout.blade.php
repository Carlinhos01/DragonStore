<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Laila:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/logo/logo.png" />
    <title>DragonStore</title>
</head>
<body>
    <main>
        @yield('content')
    </main>

    <div class="boxmae">
    <div class="barranav">
        <img src="assets/logo/logo.png" alt="" class="logo">
        <input class="botoes" type="submit" value="Boxes">
        <input class="botoes" type="submit" value="Dados">
        <input class="botoes" type="submit" value="Grids de Batalha">
        <input class="botoes" type="submit" value="Livros">
    </div>
    <div class="itens">
        <img src="assets/etc/carrinho.png" alt="" class="img">
   </div>
   <div class="itens">
        <img src="assets/etc/usua.png" alt="" class="img">
   </div>
   </div>

</body>
</html>
<style type="text/css">
    body {
    background-color: #2f2f2f;
}
.barranav{
    width: 60%;
    height: 20%;
    margin-left:15%;
    background-color: #7B7B7B;
    border-radius:100px;
    justify-content: center;
    align-items: center;
    text-align: center;
}
.menu{
    width: 7%;
    
}
.botoes{
    background-color: #7B7B7B;
    font-family: "Laila", serif;
    font-weight: 300;
    margin: 10px;
    font-size:20px;
    border: none;
}
.boxmae{
    height: 20%;
    display:flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
}
.itens{

}
.img{
    width: 50px;
    height: auto;
}
.logo{
    width: 50px;
    border-radius: 100px;
}
</style>
