class Main{
    public static void main(String[] args) {
        // creando el objeto
        Persona persona1 = new Persona("anthony");
     //   System.out.println(persona1.getNombre());
        Animal animal1 = new Animal(persona1,"miau");
    //    System.out.println(animal1.getNombre());
     //   System.out.println(animal1.persona.nombre);
        Gato gato1 = new Gato(persona1,"miau","20");
        System.out.println(gato1.getNombre());
        System.out.println(gato1.persona.nombre);

        Perro perro1 = new Perro(persona1,"guau","doberman");
        System.out.println(perro1.getNombre());
        System.out.println(perro1.persona.nombre);
    }
}