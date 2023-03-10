class Quadrilatero {
    float calcularArea();
    float calcularPerimetro();
}

class Retangulo extends Quadrilatero {
    float lado;
    float altura;

    public Retangulo(float l, float a) {
        lado = l;
        altura = a;
    }

    float calcularArea(){
        return lado * altura;
    }

    float calcularPerimetro(){
        return 2 * (lado + altura);
    }
}

class Circulo extends Quadrilatero {
    float raio;

    float calcularArea(){
        return 3.14 * raio;
    }

    float calcularPerimetro(){
        return (2 * 3.14) * raio;
    }
}

class Quadrado extends Retangulo {
    public Quadrado(float l, float a) {
        super(float l, float a);
    }

    public void mostrar(){
        System.out.println("Lado: "+lado);
        System.out.println("Altura: "+altura);
    }
}

public class Dados {
    public static void main(String[]args){
        Retangulo ret = new Retangulo(5, 4);
        ret.calcularArea();
        ret.calcularPerimetro();

        Circulo circ = new Circulo(5);
        circ.calcularArea();
        circ.calcularPerimetro();
}