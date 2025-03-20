package com.example.carbid.adapters

import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import androidx.recyclerview.widget.RecyclerView
import com.example.myapplication.R
import com.example.carbid.models.Category

class CategoryAdapter (val Category:ArrayList<Category>) : RecyclerView.Adapter<CategoryAdapter.ViewHolder>(){
    var position:Int = -1
class ViewHolder(itemView: View) : RecyclerView.ViewHolder(itemView){
init {

}
fun bindItem(Category:Category){
var lbl: TextView = itemView.findViewById(R.id.lblItemCategory)
lbl.text=Category.name
}
}
    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): CategoryAdapter.ViewHolder {
        var view = LayoutInflater.from(parent.context).inflate(R.layout.item_cate   ,parent,false)
        return ViewHolder(view)
    }

    override fun onBindViewHolder(holder: CategoryAdapter.ViewHolder, position: Int) {
        this.position=position
        holder.bindItem(Category[position])


    }

    override fun getItemCount(): Int {
        return Category.size
    }

}