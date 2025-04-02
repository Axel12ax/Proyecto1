package com.example.myapplication.db

import android.content.Context
import android.database.sqlite.SQLiteDatabase
import android.database.sqlite.SQLiteOpenHelper


class conection(context: Context, name:String, factory: SQLiteDatabase.CursorFactory?, version:Int):
    SQLiteOpenHelper(context,name,factory,version){

override fun onCreate(db: SQLiteDatabase) {
    var table_v="create table Vehiculo(id integer primary key AUTOINCREMENT, NSerie text, Marca text, Modelo text, year integer, descripcion     text, precio double, imagen text, ubicacion text)"
    db.execSQL(table_v)
    val table_c="create table categorys(id integer primary key AUTOINCREMENT, name text, image text)"
    db.execSQL(table_c)

    val table_u="create table users(id integer primary key AUTOINCREMENT, name text, email text, password text)"
    db.execSQL(table_u)
}

override fun onUpgrade(db: SQLiteDatabase?, oldVersion: Int, newVersion: Int) {

}
}
