<?php
  
namespace App\Enums;
 
enum TipoEdificio: string {
    case Piso = 'Piso';
    case Casa = 'Casa';
    case Garaje = 'Garaje';
    case Trastero = 'Trastero';
    case Edificio = 'Edificio';
}