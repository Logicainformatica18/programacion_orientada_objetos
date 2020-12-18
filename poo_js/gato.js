class Gato extends Animal{
    tamaniobigotes;

    constructor(persona,nombre,tamaniobigotes){
        super(persona,nombre);
        this.tamaniobigotes = tamaniobigotes;
    }

    getTamanioBigotes(){
        return this.tamaniobigotes;
    }
    getNombre(){
        return  "polimorfismo "  + this.nombre;
    }
}