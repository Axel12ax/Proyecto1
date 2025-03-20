package com.example.carbid.models

import java.time.Year

data class Vehiculo(val id: Int, val NSerie: String, val Marca: String,
                    val Modelo: String,val year: Int, val desc: String,
                    val precio: Double, val imagen: String, val ubicacion: String )
