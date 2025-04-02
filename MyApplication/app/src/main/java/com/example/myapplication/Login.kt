package com.example.myapplication

import android.content.Context
import android.content.Intent
import android.os.Bundle
import android.util.Log
import android.view.View
import android.widget.EditText
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import androidx.navigation.findNavController
import androidx.navigation.ui.AppBarConfiguration
import androidx.navigation.ui.navigateUp
import androidx.navigation.ui.setupActionBarWithNavController
import com.example.carbid.ui.home.HomeFragment
import com.example.myapplication.databinding.ActivityLoginBinding
import com.example.myapplication.db.conection


class Login : AppCompatActivity() {

    private lateinit var appBarConfiguration: AppBarConfiguration
    private lateinit var binding: ActivityLoginBinding

        override fun onCreate(savedInstanceState: Bundle?) {
            super.onCreate(savedInstanceState)

            binding = ActivityLoginBinding.inflate(layoutInflater)
            setContentView(binding.root)
            val email = findViewById<EditText>(R.id.emailEditText)
            val password = findViewById<EditText>(R.id.passwordEditText)

            val btnl= findViewById<View>(R.id.loginButton)
            btnl.setOnClickListener {

                val db = conection(applicationContext , "db_carbid", null, 1)
                Toast.makeText(this, password.text.toString(), Toast.LENGTH_SHORT).show()
                val db2 = db.readableDatabase
                var query="SELECT * FROM users WHERE email = '"+email.text.toString()+"' AND password = '"+password.text.toString()+"'"
                val cursor = db2.rawQuery(query, null)
                Log.d("query",query)
           if (cursor.moveToFirst()) {
                    Toast.makeText(this, "Inicio de sesión exitoso", Toast.LENGTH_SHORT).show()
                    val intent = Intent(this, Principal::class.java)
                    startActivity(intent)
                }else{
                    Toast.makeText(this, "Inicio de sesión fallido ", Toast.LENGTH_SHORT).show()
                }
            }



           // val navController = findNavController(R.id.nav_host_fragment_content_login  )
           // appBarConfiguration = AppBarConfiguration(navController.graph)
           // setupActionBarWithNavController(navController, appBarConfiguration)


        }

        override fun onSupportNavigateUp(): Boolean {
            val navController = findNavController(R.id.nav_host_fragment_content_login)
            return navController.navigateUp(appBarConfiguration)
                    || super.onSupportNavigateUp()
        }

}