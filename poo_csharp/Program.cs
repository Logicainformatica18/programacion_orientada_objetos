using System;

namespace poo_csharp
{
    class Program
    {
        static void Main(string[] args)
        {
            // creacion del objeto
            var persona1 = new Persona("anthony");
           persona1.setPaterno("cardenas");
            Console.WriteLine(persona1.getNombre());
           Console.WriteLine(persona1.getPaterno());    
        //objeto animal
         var animal1 = new Animal(persona1,"miau");
        Console.WriteLine(animal1.getNombre());
        Console.WriteLine(animal1.persona.nombre);

  //objeto gato
        var gato1 = new Gato(persona1,"miau","20");
         Console.WriteLine(gato1.getNombre());
           Console.WriteLine(gato1.persona.nombre);

        }
      
    }
}
