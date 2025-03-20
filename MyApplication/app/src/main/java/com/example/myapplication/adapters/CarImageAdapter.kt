package com.example.carbid.adapters

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import androidx.recyclerview.widget.RecyclerView
import com.example.myapplication.R

class CarImageAdapter(private val images: List<Int>) :
    RecyclerView.Adapter<CarImageAdapter.CarImageViewHolder>() {

    class CarImageViewHolder(itemView: View) : RecyclerView.ViewHolder(itemView) {
        val imageView: ImageView = itemView.findViewById(R.id.imageViewCar)
    }

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): CarImageViewHolder {
        val view = LayoutInflater.from(parent.context)
            .inflate(R.layout.item_car_image, parent, false)
        return CarImageViewHolder(view)
    }

    override fun onBindViewHolder(holder: CarImageViewHolder, position: Int) {
        holder.imageView.setImageResource(images[position])
    }

    override fun getItemCount(): Int = images.size
}
