class Conta {
    int numConta;
    String titular;
    float saldo;

    public Conta (int numC, String tit, float sal){
        numConta = numC;
        titular = tit;
        saldo = sal;
    }
}

class ContaEspecial extends Conta{
	float limite;
	float valorTaxa;
	
	public ContaEspecial (int numC, String tit, float sal, float limite, float valorTaxa){
		super(numC, tit, sal);
		this.limite = limite;
		this.valorTaxa = valorTaxa;
	}

	public void mostrar (){
		System.out.println(“Numero da conta: ”+numConta);
		System.out.println(“Nome do titular: “+titular);
		System.out.println(“Saldo: ”+saldo);
		System.out.println(“Limite: ”+limite);
		System.out.println(“Valor da taxa: ”+valorTaxa);
	}
}

public call PrimConta {
	public static void main (String[] args){
		ContaEspecial conEsp = new ContaEspecial (1234, “Arnaldo”, 1300f, 1500f, 15f);
	    conEsp.mostrar();
    }
}