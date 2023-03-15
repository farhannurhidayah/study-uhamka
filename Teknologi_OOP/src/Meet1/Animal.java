package Meet1;

public class Animal {
    public void animalSound() {
        System.out.println("The animal makes a sound");
    }
}
class Pig extends Animal {
    public void animalSound() {
        System.out.println("The pig says : wee wee");
    }
}
class Dog extends Animal {
    public void animalSound() {
        System.out.println("The dog says : gook gook");
    }
}
class Cat extends Animal {
    public void animalSound() {
        System.out.println("The cat says : Meow meow");
    }
}

class Main {
    public static void main(String[] args) {
        Animal myAnimal = new Animal();
        Animal myPig = new Pig();
        Animal myDog = new Dog();
        Animal myCat = new Cat();

        myAnimal.animalSound();
        myPig.animalSound();
        myDog.animalSound();
        myCat.animalSound();
    }
}