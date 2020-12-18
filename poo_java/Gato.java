class Gato extends Animal{
    protected String tamaniobigotes;

    public Gato(Persona persona,String nombre,String tamaniobigotes){
       super(persona,nombre);
       this.tamaniobigotes = tamaniobigotes;
    }
    //polimorfismo
    @Override
    public String getNombre() {
        return "polimorfismo " +this.nombre;
      }

}