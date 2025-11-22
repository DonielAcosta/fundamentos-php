<?php
/**
 * Clase CursoType
 * Define los tipos de curso disponibles
 */
namespace App;

class CursoType {
    const FREE = "free";
    const PAID = "paid";

    /**
     * Obtiene la etiqueta descriptiva del tipo de curso
     * @param string $type El tipo de curso (FREE o PAID)
     * @return string La etiqueta descriptiva
     */
    public static function label($type) {
        switch($type) {
            case self::FREE:
                return "Curso Gratis";
            case self::PAID:
                return "Curso Pagado";
            default:
                return "Tipo desconocido";
        }
    }
}