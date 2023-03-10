class Veiculos{
    listarVerificadores();
    ajustar();
    limpar();
}

class Bicicleta extends Veiculos{
    listarVerificadores(){
        System.out.println("Verificador 1 e 2 OK!");
    }

    ajustar(){
        System.out.println("Bicicleta ajustada com sucesso!!");
    }

    limpar(){
        System.out.println("Bicicleta limpa com sucesso!!");
    }
}

class Automovel extends Veiculos{
    listarVerificadores(){
        System.out.println("Verificador 1 e 2 OK!");
    }

    ajustar(){
        System.out.println("Automovel ajustada com sucesso!!");
    }

    limpar(){
        System.out.println("Automovel limpa com sucesso!!");
    }

    mudarOleo(){
        System.out.println("Oleo foi mudado com sucesso");
    }
}

class Dados{
    public static void main(String[]args) {
        Bicicleta bic = new Bicicleta();
            bic.listarVerificadores();
            bic.ajustar();
            bic.limpar();

        Automovel aut = new Automovel();
            aut.listarVerificadores();
            aut.ajustar();
            aut.limpar();
            aut.mudarOleo();
    }
}