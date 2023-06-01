package learn;

public interface Animal {
    public void animalSound();
    public void sleep();
}

class Pig implements Animal {
    public void animalSound() {
        System.out.println("The pig Says: wee wee");
    }
    public void sleep() {
        System.out.println("Zzz");
    }
}

class Main1 {
    public static void main(String[] args) {
        Pig mypig = new Pig();
        mypig.animalSound();
        mypig.sleep();
    }
}
