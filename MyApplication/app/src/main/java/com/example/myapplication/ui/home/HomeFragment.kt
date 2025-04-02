package com.example.carbid.ui.home

import android.content.ContentValues
import android.content.Context
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
import com.example.myapplication.db.conection
import com.example.myapplication.models.User


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
            cargarDatos(root.context)
            swipe.isRefreshing=false
        }
        return root
    }

    fun insertar(context: Context, Category:ArrayList<Category>, Vehiculo:ArrayList<Vehiculo>, User:ArrayList<User>){
var conexion= conection(context,"db_carbid",null,1)
        var db=conexion.writableDatabase
        for(x in Category){
        val registro= ContentValues()
            registro.put("name",x.name)
            registro.put("image",x.image)
            db.insert("categorys",null,registro)

        }
        for(x in Vehiculo){
val registro= ContentValues()
            registro.put("NSerie",x.NSerie)
            registro.put("Marca",x.Marca)
            registro.put("Modelo",x.Modelo)
            registro.put("year",x.year)
            registro.put("descripcion",x.desc)
            registro.put("precio",x.precio)
            registro.put("imagen",x.imagen)
            registro.put("ubicacion",x.ubicacion)
            db.insert("Vehiculo",null,registro)
        }
        for(x in User) {

            val registro = ContentValues()
            registro.put("name", x.name)
            registro.put("email", x.email)
            registro.put("password", x.password)
            db.insert("users", null, registro)
        }

        db.close()
    }
    fun cargarDatos(context: Context){
        var listaCategory= ArrayList<Category>()
      /* listaCategory.add(Category(1,"SUV","default.jpg"))
        listaCategory.add(Category(2,"Sedan","default.jpg"))
        listaCategory.add(Category(3,"Pick Up","default.jpg"))
        listaCategory.add(Category(4,"Camioneta","default.jpg"))
*/
val conction= conection(requireContext(),"db_carbid",null,1)
        val db=conction.readableDatabase
        val cursor=db.rawQuery("select * from categorys",null)
        if(cursor.moveToFirst()) {
        do {
        listaCategory.add(Category(cursor.getInt(0),cursor.getString(1),cursor.getString(2)))
        }while (cursor.moveToNext())
        }
        var adapter= CategoryAdapter(listaCategory)
        lista.adapter=adapter

        var listaVehiculos= ArrayList<Vehiculo>()
     /*  listaVehiculos.add(Vehiculo(1,"12345678","Toyota","Corolla",2020,"Exelentes Condiciones",25000.0,"https://www.toyota.mx/adobe/dynamicmedia/deliver/dm-aid--c935fff7-67e5-45b1-b6c8-bb3cab436558/corollasecvt-c-02-carousel-features-exterior.jpg","Nuevo Casas Grandes, Chihuahua"))
        listaVehiculos.add(Vehiculo(2,"12345678q","Nissan","Xterra",2008,"Exelentes Condiciones",85000.0,"https://d1ypc8j62c29y8.cloudfront.net/fullsize/e/9/0/c31560159c6c478c3819ad9401f56265e1de009e.png","Nuevo Casas Grandes, Chihuahua"))
*/


val cursor2=db.rawQuery("select * from Vehiculo",null)
        if(cursor2.moveToFirst()){
            do {
                listaVehiculos.add(Vehiculo(cursor2.getInt(0),cursor2.getString(1),cursor2.getString(2),cursor2.getString(3),cursor2.getInt(4),cursor2.getString(5),cursor2.getDouble(6),cursor2.getString(7),cursor2.getString(8)))
            }while (cursor2.moveToNext())
        }
val cursor3=db.rawQuery("select * from users",null)
        var listaUser= ArrayList<User>()

        if(cursor3.moveToFirst()) {
            do {
                listaUser.add(
                    User(
                        cursor3.getInt(0),
                        cursor3.getString(1),
                        cursor3.getString(2),
                        cursor3.getString(3)
                    )
                )
            } while (cursor3.moveToNext())
        }
  /*      listaUser.add(User(1,"Axel Fernadez","axelfernandez94533@gmail.com","Axel0012"))
    */    var adapter2= VehiculoAdapter(listaVehiculos)
        lista2.adapter=adapter2


     // insertar(context,listaCategory,listaVehiculos,listaUser)
    }


    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}