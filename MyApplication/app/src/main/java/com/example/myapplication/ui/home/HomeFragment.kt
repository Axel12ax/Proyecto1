package com.example.carbid.ui.home

import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.ListAdapter
import android.widget.TextView
import androidx.fragment.app.Fragment
import androidx.lifecycle.ViewModelProvider
import androidx.recyclerview.widget.LinearLayoutManager
import androidx.recyclerview.widget.RecyclerView
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout
import com.example.carbid.adapters.CategoryAdapter
import com.example.carbid.adapters.VehiculoAdapter
import com.example.carbid.models.Category
import com.example.carbid.models.Vehiculo
import com.example.myapplication.R
import com.example.myapplication.databinding.FragmentHomeBinding

class HomeFragment : Fragment() {

    private var _binding: FragmentHomeBinding? = null
    lateinit var lista: RecyclerView
  lateinit var lista2: RecyclerView
    lateinit var swipe: SwipeRefreshLayout
    // This property is only valid between onCreateView and
    // onDestroyView.
    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater,
        container: ViewGroup?,
        savedInstanceState: Bundle?
    ): View {
        val homeViewModel =
            ViewModelProvider(this).get(HomeViewModel::class.java)

        _binding = FragmentHomeBinding.inflate(inflater, container, false)
        val root: View = binding.root
    swipe=root.findViewById<SwipeRefreshLayout>(R.id.swipe)
        lista= root.findViewById(R.id.recyCate)
        lista.layoutManager= LinearLayoutManager(root.context, LinearLayoutManager.HORIZONTAL,false)
lista2=root.findViewById(R.id.recyVeh)
        lista2.layoutManager=LinearLayoutManager(root.context,LinearLayoutManager.VERTICAL,false)
        swipe.setOnRefreshListener {
            cargarDatos()
            swipe.isRefreshing=false
        }
        return root
    }
    fun cargarDatos(){
        var listaCategory= ArrayList<Category>()
        listaCategory.add(Category(1,"SUV","default.jpg"))
        listaCategory.add(Category(2,"Sedan","default.jpg"))
        listaCategory.add(Category(3,"Pick Up","default.jpg"))
        listaCategory.add(Category(4,"Camioneta","default.jpg"))

        var adapter= CategoryAdapter(listaCategory)
        lista.adapter=adapter

        var listaVehiculos= ArrayList<Vehiculo>()
        listaVehiculos.add(Vehiculo(1,"12345678","Toyota","Corolla",2020,"Exelentes Condiciones",25000.0,"https://www.toyota.mx/adobe/dynamicmedia/deliver/dm-aid--c935fff7-67e5-45b1-b6c8-bb3cab436558/corollasecvt-c-02-carousel-features-exterior.jpg","Nuevo Casas Grandes, Chihuahua"))
        listaVehiculos.add(Vehiculo(2,"12345678q","Nissan","Xterra",2008,"Exelentes Condiciones",85000.0,"https://d1ypc8j62c29y8.cloudfront.net/fullsize/e/9/0/c31560159c6c478c3819ad9401f56265e1de009e.png","Nuevo Casas Grandes, Chihuahua"))

        var adapter2= VehiculoAdapter(listaVehiculos)
        lista2.adapter=adapter2
    }


    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}