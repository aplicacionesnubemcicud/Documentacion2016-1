//Importo la libreria que me permite usar el puerto serial
import processing.serial.*;
//lf es el caracter de retorno de carro, que en ASCII es 10
int lf = 10;
// El puerto serie por defecto lo llamamos myPort
Serial myPort;

//metodo para configuración
void setup() {
  // Lista todos los puertos serie
  println(Serial.list());
  //Configuro el puerto seria
  myPort = new Serial(this, Serial.list()[4], 115200);
}

//metodo infinito para subir los datos adquiridos a la nube
void draw() {
  while (myPort.available() > 0) {
    String lectura = myPort.readStringUntil(lf);
    if (lectura != null) {
      println(lectura);
      //IMPORTANTE!link de la plataforma para visualizar los datos en la nube
      loadStrings("https://dweet.io/dweet/for/ajmorenom?CO="+lectura);
     
    }
  
  }
}