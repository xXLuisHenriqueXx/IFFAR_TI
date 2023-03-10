class Veiculo{
    void checklist();
    void ajustar();
    void cleanup();
}

class Automovel extends Veiculo{
    void checklist(){
        System.out.println("O automóvel esta OK!");
    }
    void ajustar(){
        System.out.println("O automóvel está devidamente ajustado!");
    }
    void cleanup(){
        System.out.println("Cleanup em automóvel realizado com sucesso!");
    }
}

class Bicicleta extends Veiculo{
    void checklist(){
        System.out.println("A bicicleta está OK!");
    }
    void ajustar(){
        System.out.println("A bicicleta está devidamente ajustada!");
    }
    void cleanup(){
        System.out.println("Cleanup na bicicleta realizado com sucesso!");
    }
}

public class Dados{
    public static void main (String[]args){
        Automovel auto = new Automovel();
            auto.checklist();
            auto.ajustar();
            auto.cleanup();

        Bicicleta bici = new Bicicleta();
            bici.checklist();
            bici.ajustar();
            bici.cleanup();
        
    }
}