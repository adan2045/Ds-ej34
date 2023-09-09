<?php

require_once 'responses/ConsultartodosResponse.php';
require_once '../../modelo/equipo.php';
require_once '../../modelo/jugador.php';

header('Content-Type: application/json');



$resp= new ConsultatodosResponse ();

$j= new Jugador();
$j->Nombre='Pedro Gonzales';
$j->Posicion='delantero';
$j->Debut='17 de agosto 2005';
$j->Goles= '10';

$j2= new Jugador();
$j2->Nombre='Daniel Sanchez';
$j2->Posicion='delantero';
$j2->Debut='16 de diciembre 2010';
$j2->Goles= '0';

$j3= new Jugador();
$j3->Nombre='Juan Perez';
$j3->Posicion='defensor';
$j3->Debut='17 de septiembre 2019';
$j3->Goles= '10';

$j4= new Jugador();
$j4->Nombre='Ignacio Gonzales';
$j4->Posicion='arquero';
$j4->Debut='17 de enero de 2020';
$j4->Goles= '1';

$j5= new Jugador();
$j5->Nombre='Ariel Cosentino';
$j5->Posicion='Mediocampista';
$j5->Debut='16 de diciembre 2001';
$j5->Goles= '2';

$j6= new Jugador();
$j6->Nombre='Diego Dominguez';
$j6->Posicion='Defensor';
$j6->Debut='15 de febrero 2018';
$j6->Goles= '5';

$j7= new Jugador();
$j7->Nombre='Gustavo Santos';
$j7->Posicion='Delantero';
$j7->Debut='16 de diciembre 2019';
$j7->Goles= '3';


$e=new Equipo();
$e->Nombre = 'Equipo 1';
$e->Presidente = 'Javier Perez';
$e->Fundacion = '3 de noviembre de 1903';
$e->ListJugadores[] = $j;
$e->ListJugadores[] = $j2;
$e->ListJugadores[] = $j3;

$e2=new Equipo();
$e2->Nombre = 'Equipo 2';
$e2->Presidente = 'Ignacio Quinteros';
$e2->Fundacion = '5 de abril de 1923';
$e2->ListJugadores[] = $j4;
$e2->ListJugadores[] = $j5;
$e2->ListJugadores[] = $j6;
$e2->ListJugadores[] = $j7;

$resp->ListEquipos[] = $e;
$resp->ListEquipos[] = $e2;


echo json_encode($resp);
