class Relogio {
    int horas;
    int minutos;
    int segundos;

    aumentarHoras(){
        return horas + 1;
    }
    diminuirHoras(){
        return horas - 1;
    }

    aumentarMinutos(){
        return minutos + 1;
    }
    diminuirMinutos(){
        return minutos - 1;
    }

    aumentarSegundos(){
        return segundos + 1;
    }
    diminuirSegundos(){
        return segundos - 1;
    }
}

public class Dados {
    Relogio rel = new Relogio("3, 5, 12");

    rel.aumentarHoras();
    rel.aumentarMinutos();
    rel.aumentarSegundos();

    rel.diminuirHoras();
    rel.diminuirMinutos();
    rel.diminuirSegundos();
}