class Veiculo {
	public String nomecarro;
	public String nomecondutor;
	public int numpneus;

	public Veiculo (String nomecarro, String nomecondutor, int numpneus){
		this.nomecarro = nomecarro;
		this.nomecondutor = nomecondutor;
		this.numpneus = numpneus;
	}
}

class Ford extends Veiculo {
	float preco;

	public Ford (String nomecarro, String nomecondutor, int numpneus, float preco) {
		super (String nomecarro, String nomecondutor, int numpneus);
		this.preco = preco;
	}
	
	public void mostrar (){
		System.out.println(“Nome veiculo: ”+nomecarro);
		System.out.println(“Nome do condutor: ”+nomecondutor);
		System.out.println(“Numero de pneus: ”+numpneus);
		System.out.println(“Preco do carro: ”+preco);
	}
}

class Fiat extends Veiculo {
	float preco;

	public Fiat (String nomecarro, String nomecondutor, int numpneus, float preco) {
		super (String nomecarro, String nomecondutor, int numpneus);
		this.preco = preco;
	}
	
	public void mostrar1 (){
		System.out.println(“Nome veiculo: ”+nomecarro);
		System.out.println(“Nome do condutor: ”+nomecondutor);
		System.out.println(“Numero de pneus: ”+numpneus);
		System.out.println(“Preco do carro: ”+preco);
	}

}

public class VeiculoNovo {
	public static void main(String[] args) {
		Ford c = new Ford (“Fusion”, “Beloto”, 5, 150000f);

		Fiat car = new Fiat (“Toro”, “Joana”, 5, 115000f);

		c.mostrar();
		car.mostrar1();
	}
}