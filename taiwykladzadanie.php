<?php

$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

function odczyt($tablica, $numer_komorki) {
    if (isset($tablica[$numer_komorki])) {
        return $tablica[$numer_komorki];
    } else {
        return "Błąd: indeks poza zakresem!";
    }
}
echo "<h2>Patryk Pauter 4TD zadanie z wykładu";
echo "<h3>Zadanie 2.1 – Odczyt komórki</h3>";
echo "Zawartość 5. komórki tablicy tab1: " . odczyt($tab1, 4) . "<br>";

function zmiana($tablica, $numer_komorki, $nowa_wartosc) {
    if (isset($tablica[$numer_komorki])) {
        $tablica[$numer_komorki] = $nowa_wartosc;
    } else {
        echo "Błąd: indeks poza zakresem!<br>";
    }
    return $tablica;
}

$tab1 = zmiana($tab1, 6, 12);

echo "<h3>Zadanie 2.2 – Zmiana komórki</h3>";
echo "Tablica tab1 po zmianie 7. komórki:<br>";
print_r($tab1);
echo "<br><br>";

function kopiatab($zrodlo) {
    $kopia = array();
    foreach ($zrodlo as $element) {
        $kopia[] = $element;
    }
    return $kopia;
}

$tab2 = kopiatab($tab1);

echo "<h3>Zadanie 3.1 – Kopiowanie tablicy</h3>";
echo "Tablica tab2 (kopia tab1):<br>";
print_r($tab2);
echo "<br><br>";

function sumindex($tablica_a, $tablica_b) {
    $tablica_sum = array();
    $rozmiar = count($tablica_a);

    for ($i = 0; $i < $rozmiar; $i++) {
        $tablica_sum[$i] = $tablica_a[$i] + $tablica_b[$i];
    }

    return $tablica_sum;
}

$tab3 = sumindex($tab1, $tab2);

echo "<h3>Zadanie 3.2 – Sumowanie indeksów</h3>";
echo "Tablica tab3 (suma tab1 i tab2):<br>";
print_r($tab3);
echo "<br><br>";

function invert($zrodlo) {
    $odwrocona = array();
    $rozmiar = count($zrodlo);

    for ($i = $rozmiar - 1; $i >= 0; $i--) {
        $odwrocona[] = $zrodlo[$i];
    }

    return $odwrocona;
}

$tab2 = invert($tab1);

echo "<h3>Zadanie 3.3 – Odwrócenie kolejności</h3>";
echo "Tablica tab2 po odwróceniu tab1:<br>";
print_r($tab2);
echo "<br><br>";

function oblicz_srednia($tablica) {
    if (count($tablica) == 0) return 0;
    $suma = array_sum($tablica);
    $srednia = $suma / count($tablica);
    return $srednia;
}

echo "<h3>Zadanie 4.1 – Średnia wartość</h3>";
echo "Średnia arytmetyczna tablicy tab1: " . oblicz_srednia($tab1) . "<br><br>";
function maks($tablica) {
    if (count($tablica) == 0) return null;
    return max($tablica);
}

echo "<h3>Zadanie 4.2 – Znajdowanie maksimum</h3>";
echo "Największa wartość w tablicy tab3: " . maks($tab3) . "<br>";


// Zadanie z wykładu: Operacje na Tablicach
echo "<h3>Zadanie z wykładu";
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);

echo "<h3>Krok 1: Inicjalizacja i odczyt</h3>";
echo "Zawartość 5. komórki tablicy tab1: " . $tab1[4] . "<br><br>";


$tab1[6] = 12;

echo "<h3>Krok 2: Modyfikacja danych</h3>";
echo "Tablica tab1 po zmianie 7. komórki:<br>";
print_r($tab1);
echo "<br><br>";

$tab2 = array();
foreach ($tab1 as $wartosc) {
    $tab2[] = $wartosc;
}

echo "<h3>Krok 3: Kopiowanie</h3>";
echo "Tablica tab2 (kopia tab1):<br>";
print_r($tab2);
echo "<br><br>";

$tab3 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

echo "<h3>Krok 4: Sumowanie indeksów</h3>";
echo "Tablica tab3 (suma wartości tab1 i tab2):<br>";
print_r($tab3);
echo "<br><br>";

$tab2 = array();
for ($i = count($tab1) - 1; $i >= 0; $i--) {
    $tab2[] = $tab1[$i];
}

echo "<h3>Krok 5: Odwrócenie kolejności</h3>";
echo "Tablica tab2 po odwróceniu kolejności tab1:<br>";
print_r($tab2);
echo "<br>";
?>
