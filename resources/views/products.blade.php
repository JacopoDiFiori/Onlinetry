<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
{{--     
    <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite(['resources/css/products.css' , 'resources/css/navbar.css' , 'resources/css/footer.css'])
    
</head>
<body class="bodybg">
    <x-navbar />
    <h2 class="m-5 roboto-bold-italic">- TUTTI GLI ARTICOLI -</h2>
    <div class="container">
        
        <div class="card">
            <div class="product-image">
                <img src="/img/diario-comix.webp" alt="">
            </div>
            <div class="product-info">
                <h4>Diario comix</h4>
                <h4>Cartoleria</h4>
                <span class="circles row">
                <div class="circle none d-flex "></div>
                <div class="circle red "></div>
                <div class="circle blue"></div>
                <div class="circle green"></div>
            </span>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>
            
            <div class="card">
            <div class="product-image">
                <img src="/img/zaino-tintaunita.png" alt="" style="height: 230px;" >
            </div>
            <div class="product-info">
                <h4>Zaino Tintaunita</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>
        
        <div class="card">
            <div class="product-image">
                <img src="/img/zaino-eastpak.jpg" alt=""style="height: 230px;" >
            </div>
            <div class="product-info">
                <h4>Zaino Eastpack</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>
        
        <div class="card">
            <div class="product-image">
                <img  src="/img/evidenziatori-tintaunita.png" alt="" style="height: 230px">
            </div>
            <div class="product-info">
                <h4>Evidenziatori Tintaunita</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>

        <div class="card">
            <div class="product-image">
                <img  src="/img/maxi.jpg" alt="" style="height: 180px">
            </div>
            <div class="product-info">
                <h4>Maxi didattico</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>

        <div class="card">
            <div class="product-image">
                <img  src="/img/pastelli-tintaunita.jpeg" alt="" style="height: 180px">
            </div>
            <div class="product-info">
                <h4>Pastelli Tintaunita</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>

        <div class="card">
            <div class="product-image">
                <img  src="/img/attrezzatura-disegno.jpg" alt="" style="height: 180px">
            </div>
            <div class="product-info">
                <h4>Attrezzatura per disegno</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>

        <div class="card">
            <div class="product-image">
                <img  src="/img/astuccio-tintaunita.webp" alt="" style="height: 180px">
            </div>
            <div class="product-info">
                <h4>Astucci Tintaunita</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>
    
        <div class="card">
            <div class="product-image">
                <img  src="/img/colibrì.webp" alt="" style="height: 180px">
            </div>
            <div class="product-info">
                <h4>Foderine colibrì</h4>
                <h4>Cartoleria</h4>
                <div class="circle none"></div>
                <h4></h4>
            </div>
            <div class="btn d-flex">
                <button type="button">Vedi nel dettaglio</button>
            </div>
        </div>

    </div>

    <x-footer />
</body>
</html>