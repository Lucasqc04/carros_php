<?php

include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Carros;
use App\model\CarrosEspeciais;


$c1 = new Carros(1, "Ferrari", "LaFerrari", 8.3, 8.8, 9.6, 9.3, 10, 800000, "vermelho");

$c2 = new Carros(2, "McLaren", "P1", 9.4, 8.7, 9.5, 9.1, 10, 780000, "Laranja");

$c3 = new Carros(3, "Hennessey", "Venom GT", 10, 8.3, 9.4, 9.1, 10, 380000, "Amarelo");

$c4 = new Carros(4, "Bugatti", "Veyron Super Sport", 10, 8.2, 10, 10, 9.9, 1080000, "Preto e Laranja");

$c5 = new Carros(5, "Porsche", "918 Spyder", 8.4, 8.3, 9.7, 10, 10, 850000, "Prata");

$c6 = new CarrosEspeciais(6, "Tesla", "Foguete Car", 10, 8.0, 10, 10, 9.0, 3000000, "Cinza");

$c7 = new CarrosEspeciais(7, "Google", "AIcar", 9.8, 10, 9.0, 10, 10, 5000000, "Vermelho");



$carrosArray = [$c1, $c2, $c3, $c4, $c5, $c6, $c7];

foreach ($carrosArray as $carro) {
    echo $carro-> vercarros() . "<br><br>";
}




$escolha = readline("Escolha uma opção: ");

if ($escolha == 1) {
    echo "Você comprou um <br>" . $c1->vercarrosimples();
} elseif ($escolha == 2) {
    echo "Você comprou um <br>" . $c2->vercarrosimples();
} elseif ($escolha == 3) {
    echo "Você comprou um <br>" . $c3->vercarrosimples();
} elseif ($escolha == 4) { 
    echo "Você comprou um <br>" . $c4->vercarrosimples();
} elseif ($escolha == 5) {
    echo "Você comprou um <br>" . $c5->vercarrosimples();
} elseif ($escolha == 6) {
    echo "Você comprou um <br>" . $c6->vercarrosimples();
} elseif ($escolha == 7) {
    echo "Você comprou um <br>" . $c7->vercarrosimples();
}