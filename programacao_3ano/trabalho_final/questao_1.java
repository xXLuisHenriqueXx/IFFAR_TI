class Funcionario{
    String nome;
    String cargo;
    String funcao;

    public Funcionario(String nome, String cargo, String funcao){
        this.nome = nome;
        this.cargo = cargo;
        this.funcao = funcao;
    }

    public void mostrarFunc(){
        System.out.println("\nNome:"+nome);
        System.out.println("\nCargo:"+cargo);
        System.out.println("\nFunção:"+funcao+"\n\n");
    }
}

class FuncionarioEfetivo extends Funcionario{
    float tempoTrab;

    public FuncionarioEfetivo(String nome, String cargo, String funcao, float tempoTrab){
        super(nome, cargo, funcao);
        this.tempoTrab = tempoTrab;
    }

    public void mostrarFuncEfet(){
        System.out.println("\nNome:"+nome);
        System.out.println("\nCargo:"+cargo);
        System.out.println("\nFunção:"+funcao);
        System.out.println("\nTempo de trabalho: Está há "+tempoTrab+" anos na empresa.\n\n");
    }
}

class FuncionarioTemporario extends Funcionario{
    float tempoFixo;

    public FuncionarioTemporario(String nome, String cargo, String funcao, float tempoFixo){
        super(nome, cargo, funcao);
        this.tempoFixo = tempoFixo;
    }

    public void mostrarFuncTemp(){
        System.out.println("\nNome:"+nome);
        System.out.println("\nCargo:"+cargo);
        System.out.println("\nFunção:"+funcao);
        System.out.println("\nTempo restante: Restam "+tempoFixo+" meses.\n\n");
    }
}

public class questao1{
    public static void main(String[] args){
        Funcionario f1 = new Funcionario("Armando", "Gerente", "Contratar novos funcionários, organização geral e definir metas");
        f1.mostrarFunc();

        Funcionario f2 = new Funcionario("Lucas", "Administrador", "Calcular gastos e lucros");
        f2.mostrarFunc();

        FuncionarioEfetivo fe = new FuncionarioEfetivo("Luis", "Vendedor", "Vender os produtos presentes na empresa", 2f);
        fe.mostrarFuncEfet();

        FuncionarioTemporario ft = new FuncionarioTemporario("Jorge", "Entregador", "Entregar os produtos vendidos", 9f);
        ft.mostrarFuncTemp();
    }
}