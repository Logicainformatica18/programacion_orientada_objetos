class Perro extends Animal{
    protected String raza;

    public Perro(Persona persona,String nombre,String raza){
        super(persona,nombre);
        this.raza = raza;
     }

}
