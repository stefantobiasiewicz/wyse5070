<!DOCTYPE html>
<html>
<head>
  <title>Lista plików</title>
</head>
<body>
<h1>Lista plików na serwerze</h1>
<h2>Konfiguracje</h2>
<ul>
  <?php
        // Ścieżka do katalogu, który chcesz przeglądać
        $sciezka = '/usr/share/nginx/html/';

        // Pobierz listę plików w katalogu
        $pliki = scandir($sciezka);

        // Wyświetl listę plików (omijając "." i "..")
        foreach ($pliki as $plik) {
            if ($plik != "." && $plik != "..") {
                echo "<li><a href='$plik'>$plik</a></li>";
  }
  }
  ?>
</ul>

<h2>Wersje aplikacji bug-box</h2>
<ul>
  <?php
        // Ścieżka do katalogu app-image
        $appImageSciezka = $sciezka . 'app-image/';

        // Pobierz listę plików w katalogu app-image
        $appImagePliki = scandir($appImageSciezka);

        // Wyświetl listę plików w app-image (omijając "." i "..")
        foreach ($appImagePliki as $plik) {
            if ($plik != "." && $plik != "..") {
                echo "<li><a href='app-image/$plik'>$plik</a></li>";
  }
  }
  ?>
</ul>
</body>
</html>
