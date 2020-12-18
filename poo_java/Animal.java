class Animal {
    private Integer idanimal;
    protected String nombre;
    protected Persona persona;
  

    //constructor
    public Animal(Persona persona,String nombre){
        this.persona = persona;
        this.nombre = nombre;
    }


    public Integer getIdanimal() {
      return this.idanimal;
    }
  
    public void setIdanimal(Integer idanimal) {
      this.idanimal = idanimal;
    }
  
    public String getNombre() {
      return this.nombre;
    }
  
  }
  