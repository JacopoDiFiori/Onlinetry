<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @vite(['resources/css/books.css', 'resources/css/navbar.css' , 'resources/css/footer.css'])
</head>
<body >
    <x-navbar />
    
    <h3 class="booksIntro mt-5 roboto-bold-italic ">
        Amadeus offre un servizio semplice e completo per l'acquisto di libri di testo. Con un ampio catalogo che copre tutte le materie e i livelli scolastici, siamo qui per soddisfare ogni tua esigenza di studio. Inoltre, forniamo la possibilità di foderare i libri con il sistema Colibrì e ci occupiamo della fatturazione per i rimborsi dei libri scolastici. Il nostro servizio è disponibile per le seguenti scuole e non solo.</h3>
        <div class="section">
            <div class="video">
            </div>
            <div class="section-wrapper">
                <div class="content-wrapper">
                    <div class="content content-1">
                        <div class="mobile-visual">
                            <img
                            class="card-img"
                            src="img/scuola-virgilio.jpg"
                            alt="Fantasy warrior  - Video game character"
                            />
                        </div>
                        <div class="meta">
                            <h2 class="headline roboto-bold-italic">
                                Scuola Media Virgilio</span>
                            </h2>
                            <p class="desc">
                                Ardea I, Via San Antonio 2
                            </p>
                        </div>
                    </div>
                    <div class="content content-2">
                        <div class="mobile-visual">
                            <img
                            class="card-img"
                            src="/img/scuola-nf.png"
                            alt="Green haired ninja in armor - Video game character"
                            />
                        </div>
                        <div class="meta">
                            <h2 class="headline  roboto-bold-italic">
                                Scuola media
                                Nuova Florida</span>
                            </h2>
                            <p class="desc">
                                Ardea II,Via Tanaro 12
                            </p>
                        </div>
                    </div>
                    <div class="content content-3">
                        <div class="mobile-visual">
                            <img
                            class="card-img"
                            src="/img/scuola-tsl.png"
                            alt="Female warrior in armor - Video game character"
                            />
                        </div>
                        <div class="meta">
                            <h2 class="headline  roboto-bold-italic ">
                                Scuola Media 
                                Tor san Lorenzo</span>
                            </h2>
                            <p class="desc">
                                Ardea III,Via Campo Di Carne 2
                            </p>
                        </div>
                    </div>
                    <div class="content content-4">
                        <div class="mobile-visual">
                            <img
                            class="card-img"
                            src="/img/school-books.webp"
                            alt="Agile warrior - Video game character"
                            />
                        </div>
                        <div class="meta">
                            <h2 class="headline  roboto-bold-italic">
                                Libri di testo Scuole superiori
                            </h2>
                            <p class="desc">
                                Tutte le scuole superiori di Roma e dintorni
                            </p>
                        </div>
                    </div>
                </div>
                <div class="visual">
                    <div class="card-wrapper">
                        <div class="card card-1">
                            <img
                            class="card-img"
                            src="img/scuola-virgilio.jpg"
                            alt="Fantasy warrior  - Video game character"
                            />
                        </div>
                        <div class="card card-2">
                            <img
                            class="card-img"
                            src="/img/scuola-nf.png"
                            alt="Green haired ninja in armor - Video game character"
                            />
                        </div>
                        <div class="card card-3">
                            <img
                            class="card-img"
                            src="/img/scuola-tsl.png"
                            alt="Female warrior in armor - Video game character"
                            />
                        </div>
                        <div class="card card-4">
                            <img
                            class="card-img"
                            src="/img/school-books.webp"
                            alt="Agile warrior - Video game character"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </body>
    </html>