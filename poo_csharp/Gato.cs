namespace poo_csharp
{
    public class Gato : Animal
    {
        protected string tamaniobigotes;

        public Gato(Persona persona,string nombre,string tamaniobigotes)
            : base(persona,nombre)
        {
            
            this.tamaniobigotes = tamaniobigotes;
        }

            public override string getNombre(){
            return "polimorfismo " + this.nombre;
        }

    }
}