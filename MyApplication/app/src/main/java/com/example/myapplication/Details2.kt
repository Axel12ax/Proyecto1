package com.example.myapplication

import android.os.Bundle
import android.widget.ImageView
import android.widget.TextView
import androidx.activity.enableEdgeToEdge
import androidx.appcompat.app.AppCompatActivity
import androidx.core.view.ViewCompat
import androidx.core.view.WindowInsetsCompat
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import androidx.viewpager2.widget.ViewPager2
import com.bumptech.glide.Glide
import com.example.carbid.adapters.CarImageAdapter
import com.example.carbid.adapters.ThumbnailAdapter

class Details2 : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContentView(R.layout.activity_details2)

        val carImages = listOf(
            R.drawable.car,
            R.drawable.carbid,
            R.drawable.descarga

        )

        val viewPager: ViewPager2 = findViewById(R.id.viewPagerCar)
        val recyclerThumbnails: RecyclerView = findViewById(R.id.recyclerThumbnails)

        // Configurar el ViewPager2
        val carImageAdapter = CarImageAdapter(carImages)
        viewPager.adapter = carImageAdapter

        // Configurar las miniaturas
        val thumbnailAdapter = ThumbnailAdapter(carImages) { position ->
            viewPager.setCurrentItem(position, true)
        }
        recyclerThumbnails.layoutManager = LinearLayoutManager(this, LinearLayoutManager.HORIZONTAL, false)
        recyclerThumbnails.adapter = thumbnailAdapter

val img=findViewById<ImageView>(R.id.imgCar)
        Glide.with(applicationContext)
            .load(intent.getStringExtra("imagen"))
            .placeholder(R.drawable.car)
            .error(R.drawable.car)
            .into(img)

        val marca=findViewById<TextView>(R.id.Marca)
        marca.text=intent.getStringExtra("Marca")

        val modelo=findViewById<TextView>(R.id.Modelo)
        modelo.text=intent.getStringExtra("Modelo")

        val year=findViewById<TextView>(R.id.year)
        year.text=intent.getStringExtra("year")

        val desc=findViewById<TextView>(R.id.Descripcion)
        desc.text=intent.getStringExtra("Descripcion")

        val price=findViewById<TextView>(R.id.Price)
        price.text=intent.getStringExtra("Price")

        val ubicacion=findViewById<TextView>(R.id.Ubicacion)
        ubicacion.text=intent.getStringExtra("Ubicacion")



    }
}