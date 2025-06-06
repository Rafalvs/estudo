package br.com.etecia.myapp;

import android.content.Intent;
import android.os.Bundle;
import android.widget.Button;

import androidx.appcompat.app.AppCompatActivity;


public class LoginScreen extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.login_screen_layout);

        Button btnLogin;

        btnLogin = findViewById(R.id.loginButton);

        btnLogin.setOnClickListener(v -> {
            // TODO Auto-generated method stub
            Intent myIntent = new Intent(LoginScreen.this,
                    MainActivity.class);
            startActivity(myIntent);

        });
    }
}