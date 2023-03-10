class Animal{
    String nome;
    String raca;

    public Animal(String nome, String raca){
        this.nome = nome;
        this.raca = raca;
    }

    public Animal(String raca){
        this.nome = "Bidu";
        this.raca = raca;
    }

    public void caminha(){
        System.out.println("\nO "+raca+" de nome "+nome+" caminha\n\n");
    }

    public void mostrarAni(){
        System.out.println("Nome: "+nome);
        System.out.println("\nRaça: "+raca);
    }
}

class Cachorro extends Animal{
    public Cachorro(String nome, String raca){
        super(nome, raca);
    }
    
    public void late(){
        System.out.println("\nO cachorro de "+raca+" de nome "+nome+" late\n\n");
    }

    public void mostrarCac(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nRaça: "+raca);
    }
}

class Gato extends Animal{
    public Gato(String nome, String raca){
        super(nome, raca);
    }
    public void mia(){
        System.out.println("\nO gato de "+raca+" de nome "+nome+" mia\n\n");
    }

    public void mostrarGato(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nRaça: "+raca);
    }
}

class Pessoa{
    String nome;
    int idade;

    public Pessoa(String nome, int idade){
        this.nome = nome;
        this.idade = idade;
    }

    public void mostrarPes(){
        System.out.println("\n\nNome: "+nome);
        System.out.println("\nIdade: "+idade);
    }
}

class Rica extends Pessoa{
    double dinheiro;

    public Rica(String nome, int idade, double dinheiro){
        super(nome, idade);
        this.dinheiro = dinheiro;
    }

    public void fazCompras(){
        System.out.println("O "+nome+" fez compras com um capital de R$"+dinheiro+".\n\n");
    }

    public void mostrarRica(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nIdade: "+idade);
        System.out.println("\nDinheiro: R$"+dinheiro);
    }
}

class Pobre extends Pessoa{
    public Pobre(String nome, int idade){
        super(nome, idade);
    }

    public void trabalha(){
        System.out.println("\nO "+nome+" trabalha.\n\n");
    }

    public void mostrarPobre(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nIdade: "+idade);
    }
}

class Miseravel extends Pessoa{
    public Miseravel(String nome, int idade){
        super(nome, idade);
    }

    public void Mendiga(){
        System.out.println("\nO "+nome+" mendiga.\n\n");
    }

    public void mostrarMise(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nIdade: "+idade);
    }
}

public class questao2{
    public static void main(String[] args){
        Animal a1 = new Animal("Lulu", "Gato Persa");
        a1.mostrarAni();
        a1.caminha();
        
        Animal a2 = new Animal("Cachorro Pastor Alemão");
        a2.mostrarAni();
        a2.caminha();

        Cachorro c1 = new Cachorro("Jack", "Poodle");
        c1.mostrarCac();
        c1.late();

        Gato g1 = new Gato("Laranjinha", "Comum europeu");
        g1.mostrarGato();
        g1.mia();

        Pessoa p1 = new Pessoa("Laura", 17);
        p1.mostrarPes();

        Rica r1 = new Rica("Bella", 28, 1500.5);
        r1.mostrarRica();
        r1.fazCompras();

        Pobre po1 = new Pobre("Juca", 34);
        po1.mostrarPobre();
        po1.trabalha();

        Miseravel m1 = new Miseravel("Geraldo", 67);
        m1.mostrarMise();
        m1.Mendiga();
    }
}