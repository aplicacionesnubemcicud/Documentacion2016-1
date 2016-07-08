//Código para el sensor MQ-7
//Definición de puertos de entrada 
const int AOUTpin=0;//Conexión al puerto Analogico A0 - Sensor salida Analogica
const int DOUTpin=8;//Conexión al puerto Digital D8 - Sensor Salida Digital
// declaración de variables, tipo de dato: entero 
int value;
// con el método setup, se configuran los parámetros del hardware
void setup() {
Serial.begin(115200);//Configura la tasa de transferencia (baut rate)
pinMode(DOUTpin, INPUT);//Establecemos el puerto D8  como entrada de datos
}
// El método loop se va a ejecutar siempre, entonces las sentencias que estén dentro del, se ejecutarán una y otra vez
void loop()
{
value= analogRead(AOUTpin);//Se lee el nivel de CO en el sensor y se entrega a traves del puerto analogico al sistema embebido
Serial.println(value);//Imprimimos el valor de la medida obtenida a través de comunicación serial
delay(500);//retraso de 500 mS, cada medio segundo toma una medida 
}
