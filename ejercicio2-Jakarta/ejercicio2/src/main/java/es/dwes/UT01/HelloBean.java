package es.dwes.UT01;

import java.io.Serializable;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import jakarta.enterprise.context.RequestScoped;
import jakarta.inject.Named;

@Named("helloBean")
@RequestScoped
public class HelloBean implements Serializable {
    public List<Usuario> getUsuarios() {
        // Test users
        Usuario laura = new Usuario("Laura", "Gomez", "12345678A", "laura.gomez@example.com", 23);
        laura.AddSinglePayments("Enero", 20.0);
        laura.AddSinglePayments("Febrero", 20.0);
        laura.AddSinglePayments("Marzo", 0.0);
        laura.AddSinglePayments("Abril", 20.0);
        laura.AddSinglePayments("Mayo", 20.0);
        laura.AddSinglePayments("Junio", 20.0);
        laura.AddSinglePayments("Julio", 0.0);
        laura.AddSinglePayments("Agosto", 20.0);
        laura.AddSinglePayments("Septiembre", 0.0);
        
        Usuario juan = new Usuario("Juan", "Perez", "87654321A", "juan.perez@example.com", 20);
        juan.AddSinglePayments("Enero", 0.0);
        juan.AddSinglePayments("Febrero", 20.0);
        juan.AddSinglePayments("Marzo", 0.0);
        juan.AddSinglePayments("Abril", 20.0);
        juan.AddSinglePayments("Mayo", 0.0);
        juan.AddSinglePayments("Junio", 10.0);
        juan.AddSinglePayments("Julio", 20.0);
        juan.AddSinglePayments("Agosto", 20.0);
        juan.AddSinglePayments("Septiembre", 0.0);

        return List.of(
            laura,
            juan
        );
    }

    public static class Usuario {
        private String nombre;
        private String apellido;
        private String dni;
        private String email;
        private int  edad;
        private Map<String, Double> pagos;
        private double totalPayAmount;

        public Usuario(String nombre,String apellido,String dni,String email,int edad){
            this.nombre = nombre;
            this.apellido = apellido;
            this.dni = dni;
            this.email = email;
            this.edad = edad;
            
            pagos = new HashMap<>();
        }

        public void AddSinglePayments(String payMonth, Double payAmount){
            pagos.put(payMonth, payAmount);
        }

        public void AddMultiPayments(Map<String,Double> payments){
            pagos.putAll(payments);
        }

        public String getNombre() {
            return nombre;
        }

        public String getApellido() {
            return apellido;
        }

        public String getDni() {
            return dni;
        }

        public String getEmail() {
            return email;
        }

        public int getEdad() {
            return edad;
        }

        public Map<String, Double> getPagos(){
            return pagos;
        }

        public Double getTotalPayAmount(){
            totalPayAmount = pagos.values().stream().mapToDouble(Double::doubleValue).sum();
            return totalPayAmount;
        }
    }

    public List<Producto> getProductos() {
        return List.of(
            new Producto("Manzanas", 2.5),
            new Producto("Peras", 3.0),
            new Producto("Plátanos", 1.8)
        );
    }

    // Clase interna para productos
    public static class Producto {
        private String nombre;
        private double precio;

        public Producto(String nombre, double precio) {
            this.nombre = nombre;
            this.precio = precio;
        }

        public String getNombre() { return nombre; }
        public double getPrecio() { return precio; }
    }
}
