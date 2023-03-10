class Imovel {
	String endereco;
	float preco;
	
	public Imovel (String end, float prec){
		endereco = end;
		preco = prec;
	}
}

class Novo extends Imovel {
	float adicional;
	
	public Novo (String end, float prec, float adicional){
		super (String end, float prec);
		this.adicional = adicional;
		precoNovo = preco+adicional;
	}

	public void mostrar (){
		System.out.println(“Endereço: ”+endereco);
		System.out.println(“Preço: ”+preco);
		System.out.println(“Adicional: ”+adicional);
		System.out.println(“Preço novo: ”+precoNovo);
	}
}

class Velho extends Imovel {
	float desconto;
	
	public Velho (String end, float prec, float desconto){
		super (String end, float prec);
		this.desconto = desconto;
		precoNovo1 = preco-desconto;
	}

	public void mostrar1 (){
		System.out.println(“Endereço: ”+endereco);
		System.out.println(“Preço: ”+preco);
		System.out.println(“Desconto: ”+desconto);
		System.out.println(“Preço novo: ”+precoNovo1);
	}
}
public class Dados {
	public static void main(String[] args) {
		Velho vel = new Velho (“Rua do Carpinteiro”, 10000f, 1000f);

		Novo nov = new Novo (“Rua dos Andrades”, 10000f, 500f);

		vel.mostrar();
		car.mostrar1();
	}

}