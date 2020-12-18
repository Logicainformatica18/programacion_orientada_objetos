
namespace poo_csharp
{
    public class Persona
    {
        protected int idpersona;
        public string nombre;
        protected string paterno;
        protected string materno;
        
        

        // constructor
        public Persona(string nombre){
         this.nombre = nombre;
        }
        public string getNombre(){
            return this.nombre;
        }
           public string getPaterno(){
            return this.paterno;
        }
        public string setPaterno(string paterno){
            return this.paterno =paterno;
        }
    }
}