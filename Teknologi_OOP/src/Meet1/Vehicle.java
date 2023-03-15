package Meet1;

class Vehicle {
    protected String brand = "Ford";
    public void honk () {
        System.out.println("tuut, tuut!");
    }
}
class Car extends Vehicle {
    private String merkString = "Mustang";
    private String merkString2 = "Lamborgini";
    public static void main(String[] args) {
        Car myFastCar = new Car();
        myFastCar.honk();
        System.out.println(myFastCar.brand + " " + myFastCar.merkString) ;
        System.out.println(myFastCar.brand + " " + myFastCar.merkString2) ;
    }
}
