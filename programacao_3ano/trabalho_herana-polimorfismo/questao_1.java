class Pessoa {
    String nome;
    String endereco;
    String telefone;

    public Pessoa(){}

    public Pessoa(String nome, String endereco, String telefone) {
        this.nome = nome;
        this.endereco = endereco;
        this.telefone = telefone;
    }

    public Pessoa(String nome, String endereco){
        this.nome = nome;
        this.endereco = endereco;
        this.telefone = "996568418";
    }

    public void setN(String nome){
        this.nome = nome;
    }
    public String getN(){
        return this.nome;
    }

    public void setEnd(String endereco){
        this.endereco = endereco;
    }
    public String getEnd(){
        return this.endereco;
    }

    public void setTel(String telefone){
        this.telefone = telefone;
    }

    public void mostrar(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nEndereço: "+endereco);
        System.out.println("\nTelefone: "+telefone);
    }
}

class Fornecedor extends Pessoa {
    float valorCredito;
    float valorDivida;
    float valorN;

    public Fornecedor(float valorCredito, float valorDivida, String nome, String endereco, String telefone){
        super( nome, endereco, telefone);
        this.valorCredito = valorCredito;
        this.valorDivida = valorDivida;
    }

    public void setValC(String valorCredito){
        this.valorCredito = valorCredito;
    }
    public String getValC(){
        return this.valorCredito;
    }

    public void setValD(String valorDivida){
        this.valorDivida = valorDivida;
    }
    public String setValD(){
        return this.valorDivida;
    }

    public float obterSaldo() {
        valorN = valorCredito - valorDivida;
        return this.valorN;
    }

    public void mostrar1(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nEndereço: "+endereco);
        System.out.println("\nTelefone: "+telefone);
        System.out.println("\nValor do crédito: "+valorCredito);
        System.out.println("\nValor da dívida: "+valorDivida);
        System.out.println("\nDiferença entre os valores: "+valorN);
    }
}

class Empregado extends Pessoa {
    int codigoSetor;
    float salarioBase;
    float impostos;
    float salEmp;

    public Empregado(int codigoSetor, float salarioBase, float impostos, String nome, String endereco, String telefone){
        super( nome, endereco, telefone);
        this.codigoSetor = codigoSetor;
        this.salarioBase = salarioBase;
        this.impostos = impostos;
    }

    public void setCod(String codigoSetor){
        this.codigoSetor = codigoSetor;
    }
    public String getCod(){
        return this.codigoSetor;
    }

    public void setSalB(String salarioBase){
        this.salarioBase = salarioBase;
    }
    public String getSalB(){
        return this.salarioBase;
    }

    public void setImp(String impostos){
        this.impostos = impostos;
    }
    public String getImp(){
        return this.impostos;
    }

    public float calcularSalario(){
        salEmp = salarioBase - (salarioBase * impostos/100);
        return this.salEmp;
    }

    public void mostrar2(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nEndereço: "+endereco);
        System.out.println("\nTelefone: "+telefone);
        System.out.println("\nCódigo do setor: "+codigoSetor);
        System.out.println("\nSalário base: "+salarioBase);
        System.out.println("\nSalário do empregado: "+salEmp);
        System.out.println("\nImpostos(%): "+impostos);
    }
}

class Administrador extends Empregado{
    float ajudaDeCusto;
    float salAdmin;

    public Administrador(float ajudaDeCusto, String nome, String endereco, String telefone, float salarioBase, int codigoSetor, float impostos){
        super(codigoSetor, salarioBase, impostos, nome, endereco, telefone);
        this.ajudaDeCusto = ajudaDeCusto;
    }

    public void setAjud(float ajudaDeCusto){
        this.ajudaDeCusto = ajudaDeCusto;
    }
    public float getAjud(){
        return this.ajudaDeCusto;
    }

    public float calcularSalario(float salEmp){
        salAdmin = salEmp + ajudaDeCusto;
        return this.salAdmin;
    }

    public void mostrar3(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nEndereço: "+endereco);
        System.out.println("\nTelefone: "+telefone);
        System.out.println("\nCódigo do setor: "+codigoSetor);
        System.out.println("\nSalário base: "+salarioBase);
        System.out.println("\nImpostos(%): "+impostos);
        System.out.println("\nAjuda de custo: "+ajudaDeCusto);
        System.out.println("\nSalário do Administrador: "+salAdmin);
    }
}

class Operario extends Empregado{
    float valorProducao;
    int comissao;
    float salOper;

    public Operario(String valorProducao, int comissao, String nome, String endereco, String telefone, int codigoSetor, float salarioBase, float impostos){
        super(codigoSetor, salarioBase, impostos, nome, endereco, telefone);
        this.valorProducao = valorProducao;
        this.comissao = comissao;
    }

    public void setValP(float valorProducao){
        this.valorProducao = valorProducao;
    }
    public float getValP(){
        return this.valorProducao;
    }

    public void setCom(int comissao){
        this.comissao = comissao;
    }
    public int getCom(){
        return this.comissao;
    }

    public float calcularSalario(float salEmp){
        salOper = salEmp + ((valorProducao * comissao/100) + salarioBase);
        return this.salOper;
    } 

    public void mostrar4(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nEndereço: "+endereco);
        System.out.println("\nTelefone: "+telefone);
        System.out.println("\nCódigo do setor: "+codigoSetor);
        System.out.println("\nSalário base: "+salarioBase);
        System.out.println("\nImpostos(%): "+impostos);
        System.out.println("\nValor de produção: "+valorProducao);
        System.out.println("\nComissão: "+comissao);
        System.out.println("\nSalário do operário: "+salOper);
    }
}

class Vendedor extends Empregado{
    float valorVendas;
    int comissao;
    float salVend;

    public Vendedor(float valorVendas, int comissao, String nome, String endereco, String telefone, int codigoSetor, float salarioBase, float impostos){
        super(codigoSetor, salarioBase, impostos, nome, endereco, telefone);
        this.valorVendas = valorVendas;
        this.comissao = comissao;
    }

    public void setValV(float valorVendas){
        this.valorVendas = valorVendas;
    }
    public float getValV(){
        return this.valorVendas;
    }

    public void setCom(int comissao){
        this.comissao = comissao;
    }
    public int getCom(){
        return this.comissao;
    }

    public float calcularSalario(float salEmp){
        salVend = salEmp + ((valorVendas * comissao/100) + salarioBase);
        return this.salVend;
    }

    public void mostrar5(){
        System.out.println("\nNome: "+nome);
        System.out.println("\nEndereço: "+endereco);
        System.out.println("\nTelefone: "+telefone);
        System.out.println("\nCódigo do setor: "+codigoSetor);
        System.out.println("\nSalário base: "+salarioBase);
        System.out.println("\nImpostos(%): "+impostos);
        System.out.println("\nValor das vendas: "+valorVendas);
        System.out.println("\nComissão: "+comissao);
        System.out.println("\nSalário do vendedor: "+salVend);
    }
}

public class Questao1 {
    public static void main(String[]args){
        Pessoa pes1 = new Pessoa("Joca", "Rua dos bobos", "991638745");
        Pessoa pes2 = new Pessoa("Amadeu", "Rua lopes");
        pes1.mostrar();
        pes2.mostrar();

        Fornecedor forn = new Fornecedor(1000f, 200f, "Cleber", "Rua do jacaré", "996721681");
        forn.mostrar1();

        Empregado em = new Empregado(0, 1200f, 5, "Gabriela", "Rua da pitangueira", "991875352");
        em.mostrar2();

        Administrador adm = new Administrador(200f, "Rafaela", "Rua do limoeiro", "999067833", 1300f, 1, 7);
        adm.mostrar3();

        Operario op = new Operario(350f, 100f, "Julio", "Rua do jaiminho", "999543278", 2, 1150f, 4);
        op.mostrar4();

        Vendedor ve = new Vendedor(1650f, 115, "Marcio", "Rua do regresso", "991875609", 3, 1200f, 5);
        ve.mostrar5();
    }
}