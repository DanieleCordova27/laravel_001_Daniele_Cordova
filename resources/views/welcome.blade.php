<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Homepage</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

{{--  laravel new nome-progetto-di-esempio
s_37691922DDC1364680013E925F463E1922F623B1891EEFDD762A70B23BC2B8CD_1691504952934_Cattura3.PNG



2 - selezionare in ordine:
No Starter Kit, 
Pest/PHPUnit (Non fa niente, scegliete quello che volete)
No
SQLite (Non abbiamo introdotto ancora Mysql, quindi non fate come me a lezione ma scegliete SQLite per non avere problemi e concentrarvi sulla lezione)
3 Apri il progetto Laravel appena creato con Visual Studio Code e con il terminale interno lancia il comando:
php artisan serve
4 Visualizza sul tuo browser la pagina iniziale di Laravel su
127.0.0.1:8000


2 - Punto Secondo
Vai nel file 

resources/views/welcome.blade.php 
e sostituisci tutto il contenuto con questo starter template di Bootstrap 5:

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


Creare, oltre a welcome.blade.php altre 3 viste dentro:

resources/views
chiamate in questo modo:

welcome.blade.php (gia esistente)
chisiamo.blade.php
contatti.blade.php
storia.blade.php
 Tutte e 4 le viste avranno lo stesso starter template ma, per verificare se effettivamente state caricando la vista giusta, modificherete staticamente il contenuto dell’<h1> con il nome relativo della pagina: 

<h1>Homepage</h1>
<h1>Chi Siamo</h1>
<h1>Contatti</h1>
<h1>Storia</h1>


Create, quindi, 3 Route::get() in 

routes/web.php
relative a 

Chi siamo
Contatti 
Storia 
in modo tale che digitando nel vostro browser i seguenti url:

127.0.0.1:8000
127.0.0.1:8000/chi-siamo
127.0.0.1:8000/contatti
127.0.0.1:8000/storia


Riceverete la pagina corretta in ogni fase. --}}