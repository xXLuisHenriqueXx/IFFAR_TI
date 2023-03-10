class Animalia {
    public void obterDescricao();
}

class Chordata extends Animalia{
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
    }
}

class Mammalia extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
    }
}

class Primata extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Primata");
    }
}

class Hominidae extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Primata");
        System.out.println("Familia Hominidae");
    }
}

class Homo extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Primata");
        System.out.println("Familia Hominidae");
        System.out.println("Gênero Homo");
    }
}

class HomoSapiens extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Primata");
        System.out.println("Familia Hominidae");
        System.out.println("Gênero Homo");
        System.out.println("Espécie Homo Sapiens");
    }
}

class Carnivora extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Carnívora");;
    }
}

class Canidae extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Carnívora");
        System.out.println("Familia Canidae");
    }
}

class Canis extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Carnívora");
        System.out.println("Familia Canidae");
        System.out.println("Gênero Canis");
    }
}

class CanisFamilaris extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Chordata");
        System.out.println("Classe Mammalia");
        System.out.println("Ordem Carnívora");
        System.out.println("Familia Canidae");
        System.out.println("Gênero Canis");
        System.out.println("Espécie Canis familiaris");
    }
}

class Arthropoda extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Arthropoda");
    }
}

class Insecta extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Arthropoda");
        System.out.println("Classe Insecta");
    }
}

class Diptera extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Arthropoda");
        System.out.println("Classe Insecta");
        System.out.println("Ordem Díptera");
    }
}

class Muscidae extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Arthropoda");
        System.out.println("Classe Insecta");
        System.out.println("Ordem Díptera");
        System.out.println("Familia Muscidae");
    }
}

class Musca extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Arthropoda");
        System.out.println("Classe Insecta");
        System.out.println("Ordem Díptera");
        System.out.println("Familia Muscidae");
        System.out.println("Gênero Musca");
    }
}

class MuscaDomestica extends Animalia {
    public void obterDescricao(){
        System.out.println("Reino Animalia");
        System.out.println("Filo Arthropoda");
        System.out.println("Classe Insecta");
        System.out.println("Ordem Díptera");
        System.out.println("Familia Muscidae");
        System.out.println("Gênero Musca");
        System.out.println("Espécie Musca domestica");
    }
}

public class Questao2 {
    public static void main(String[]args){
        Chordata chor = new Chordata();
        chor.obterDescricao();

        Mammalia mamm = new Mammalia();
        mamm.obterDescricao();

        Primata prim = new Primata();
        prim.obterDescricao();

        Hominidae hom = new Hominidae();
        hom.obterDescricao();

        Homo ho = new Homo();
        ho.obterDescricao();

        HomoSapiens hosa = new HomoSapiens();
        hosa.obterDescricao();

        Carnivora carn = new Carnivora();
        carn.obterDescricao();

        Canidae cani = new Canidae();
        cani.obterDescricao();

        Canis can = new Canis();
        can.obterDescricao();

        CanisFamilaris cafa = new CanisFamilaris();
        cafa.obterDescricao();

        Arthropoda art = new Arthropoda();
        art.obterDescricao();

        Insecta ins = new Insecta();
        ins.obterDescricao();

        Diptera dip = new Diptera();
        dip.obterDescricao();

        Muscidae musc = new Muscidae();
        musc.obterDescricao();

        Musca mus = new Musca();
        mus.obterDescricao();

        MuscaDomestica mudo = new MuscaDomestica();
        mudo.obterDescricao();
    }
}