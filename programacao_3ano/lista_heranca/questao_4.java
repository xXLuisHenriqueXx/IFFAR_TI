class Ingresso {
	float valor;
	
	public Ingresso (float val){
		valor = val;
	}
	
	public void imprimeValor (){
		System.out.println(“Valor: ”+valor);
	}
}

class VIP extends Ingresso {
	float adicional;

	public VIP (float val, float adicional){
		super(val);
		this.adicional = adicional;
		valNovo = val+adicional;
	}
	public void imprimeValor1 (){
		System.out.println(“Valor: ”+valNovo);
		System.out.println(“Adicional: ”+adicional);
	}
}

	

class Normal extends Ingresso {
	public Normal (float val) {
		super(val);
	}
	public void imprimeValor2 (){
		System.out.println(“Ingresso normal”);
		System.out.println(“Valor: ”+valor);
	}
}

class CamaroteInferior extends VIP {
	public CamaroteInferior (float valNovo){
		super(valNovo);
    }
    public void imprimeValor3 (){
        System.out.println(“Localizaçao: Camarote inferior”);
        System.out.println(“Valor: ”+valNovo);
    }   
}

class CamaroteSuperior extends VIP {
	public CamaroteInferior (float valNovo, float adicional2){
		super(valNovo);
		this.adicional2 = adicional2;
		valNovo2 = valNovo+adicional2;
    }
    public void imprimeValor4 (){
        System.out.println(“Localizaçao: Camarote superior”);
        System.out.println(“Valor: ”+valNovo2);
    }
}

class Dados {
	public static void main (String[] args){
		Ingresso ing = new Ingresso ();
		VIP v = new VIP ();
		CamaroteInferior ci = new CamaroteInferior ();
		CamaroteSuperior cs = new CamaroteSuperior ();
	}
}