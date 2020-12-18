class Persona {
    //atributos
   protected Integer idpersona;
   protected String nombre;
   protected String paterno;
   protected String materno;
    //constructor
    public Persona(String nombre){
      this.nombre = nombre;
  }
    // metodos
    public String getNombre() {
      return this.nombre;
    }
    public Integer getIdpersona() {
      return this.idpersona;
    }
    public void setIdpersona(Integer idpersona) {
      this.idpersona = idpersona;
    }
    public String getPaterno() {
      return this.paterno;
    }
  
    public void setPaterno(String paterno) {
      this.paterno = paterno;
    }
    public String getMaterno() {
      return this.materno;
  }
  public void setMaterno(String materno) {
    this.materno = materno;
  }
  }