package com.example.carbid.adapters

import android.content.Intent
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ImageView
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.bumptech.glide.Glide
import com.example.myapplication.Details2
import com.example.myapplication.R
import com.example.carbid.models.Vehiculo

class VehiculoAdapter (val Vehiculo: ArrayList<Vehiculo>) : RecyclerView.Adapter<VehiculoAdapter.ViewHolder>() {
    var position:Int= -1
class ViewHolder(itemView: View): RecyclerView.ViewHolder(itemView){
    init {

    }
    fun bindItem(Vehiculo: Vehiculo){
    var precio: TextView = itemView.findViewById(R.id.vehicle_price)
    var marca: TextView = itemView.findViewById(R.id.vehicle_title)
    var modelo: TextView = itemView.findViewById(R.id.model)
    var ubicacion: TextView = itemView.findViewById(R.id.vehicle_details2)
    var desc: TextView = itemView.findViewById(R.id.vehicle_Desc)
    var year: TextView = itemView.findViewById(R.id.vehicle_details)
    var item: View = itemView.findViewById(R.id.ItemLay)

        var imagen: ImageView = itemView.findViewById(R.id.vehicle_image)

        Glide.with(itemView.context).
        load(Vehiculo.imagen)
            .placeholder(R.drawable.car)
            .error(R.drawable.car)
            .into(imagen)
        precio.text="$"+Vehiculo.precio.toString()
        marca.text=Vehiculo.Marca+"-"
        modelo.text=Vehiculo.Modelo
        ubicacion.text=Vehiculo.ubicacion
        desc.text=Vehiculo.desc
        year.text=Vehiculo.year.toString()+" "

        item.setOnClickListener(View.OnClickListener {
    var intent = Intent(itemView.context, Details2::class.java)
intent.putExtra("Marca",Vehiculo.Marca)
            intent.putExtra("Modelo",Vehiculo.Modelo)
            intent.putExtra("year",Vehiculo.year.toString())
            intent.putExtra("Descripcion",Vehiculo.desc)
            intent.putExtra("Price",Vehiculo.precio.toString())
            intent.putExtra("imagen",Vehiculo.imagen)
            intent.putExtra("Ubicacion",Vehiculo.ubicacion)
            itemView.context.startActivity(intent)

        })
    }
}

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): VehiculoAdapter.ViewHolder {
        var view = LayoutInflater.from(parent.context).inflate(R.layout.item_veh   ,parent,false)
        return ViewHolder(view)
    }

    override fun onBindViewHolder(holder: VehiculoAdapter.ViewHolder, position: Int) {
        this.position=position
        holder.bindItem(Vehiculo[position])


    }

    override fun getItemCount(): Int {
        return Vehiculo.size
    }
}