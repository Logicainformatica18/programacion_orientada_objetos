
namespace poo_csharp
{
    public class  Animal
    {
        private int idpersona;
        protected string nombre;
        public Persona persona;  
    //constructor
        public Animal(Persona persona,string nombre){
            this.persona = persona;
            this.nombre = nombre;
            
        }

        public  virtual string getNombre(){
            return this.nombre;
        }
    }

}