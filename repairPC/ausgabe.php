<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.html">Start</a>
        <a href="infos.html">Infos</a>
        <a href="service.html">Service</a>
    </nav>
    <header>
        <h1>PC Repair</h1>
    </header>
    <main>
        <h2>Wir reparieren dein PC!</h2>
        <img src="assets/repair1.jpg" alt="bild">
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

        <div class="container">
            <div class="card-left">
                <h3>Einträge</h3>
                <?php
                    $anrede = $_POST["anrede"];
                    $vorname = $_POST["vorname"];
                    $nachname = $_POST["nachname"];
                    $strasse = $_POST["strasse"];
                    $email = $_POST["email"];
                    $telefon = $_POST["telefon"];
                    $reparaturtyp = $_POST["reparaturtyp"];
                    $anmerkung = $_POST["anmerkung"];

                    if (!empty($vorname)){
                        echo "Sie haben folgende Daten eingetragen: <br>";
                        echo "Anrede: " .$anrede ."<br>
                        Vorname: " .$vorname ."<br>
                        Nachname: " .$nachname ."<br>
                        Straße: " .$strasse ."<br> 
                        E-mail: " .$email ."<br>
                        Telefon: " .$telefon ."<br>
                        Reparatur Typ: " .$reparaturtyp ."<br>";

                        if(empty($anmerkung)){
                            $anmerkung = "Es wurde keine Anmerkung eingegeben!";
                        }
                        echo "Anmerkung: " .$anmerkung;

                        
                    $csvdatei = "db.csv";
                    $handle = fopen($csvdatei,"a");

                    if($handle === false){
                        die("Fehler beim Öffnen!");
                    }

                    $daten = [$anrede, $vorname, $nachname, $strasse, $email, $telefon, $reparaturtyp, $anmerkung];
                    fputcsv($handle, $daten);
                    fclose($handle);
                    }


                ?>
            </div>
            
        </div>
    </main>
    <footer>
        <p>&copy; PC Repair</p>
    </footer>
</body>
</html>