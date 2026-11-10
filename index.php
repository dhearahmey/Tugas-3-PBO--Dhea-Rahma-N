<?php

// CLASS PARENT
class Clothes {
    public $brand; //Digunakan agar atribut brand dapat diakses dari dalam class maupun dari luar class.
    protected $size; //Digunakan agar atribut size hanya dapat diakses dari dalam class Clothes dan class turunannya, seperti Jacket, TShirt, dan Pants.
    public $color; //Digunakan agar atribut color dapat diakses dari dalam class maupun dari luar class.
    private $price; //Digunakan agar atribut price hanya dapat diakses dari dalam class Clothes dan tidak dapat diakses langsung dari class turunannya maupun dari luar class.

    // Constructor
    public function __construct($brand, $size, $color, $price) {
        $this->brand = $brand;
        $this->size = $size;
        $this->color = $color;
        $this->price = $price;
    }

    // Method Public
    public function displayBrand() { //Untuk menampilkan merek pakaian.
        echo "Brand: " . $this->brand . "<br>";
    }

    // Method Protected
    protected function displaySize() { //Untuk menampilkan ukuran pakaian.
        echo "Size: " . $this->size . "<br>";
    }

    // Method Public
    public function displayColor() { //Untuk menampilkan warna pakaian.
        echo "Color: " . $this->color . "<br>";
    }

    // Method Private
    private function displayPrice() { //Untuk menampilkan harga pakaian.
        echo "Price: Rp " . number_format($this->price, 0, ',', '.') . "<br>";
    }

    // Method menampilkan informasi
    public function tampilkanInformasi() { //Untuk menampilkan seluruh informasi pakaian dengan memanggil method-method sebelumnya.
        $this->displayBrand();
        $this->displaySize();
        $this->displayColor();
        $this->displayPrice();
    }
}


// CLASS CHILD 1
class Jacket extends Clothes {
    private $type;

    public function __construct($brand, $size, $color, $price, $type) {
        parent::__construct($brand, $size, $color, $price);
        $this->type = $type;
    }

    public function tampilkanInformasi() {
        echo "<h3>JACKET</h3>";
        parent::tampilkanInformasi();
        echo "Type: " . $this->type . "<br>";
    }
}


// CLASS CHILD 2
class TShirt extends Clothes {
    private $model;

    public function __construct($brand, $size, $color, $price, $model) {
        parent::__construct($brand, $size, $color, $price);
        $this->model = $model;
    }

    public function tampilkanInformasi() {
        echo "<h3>T-SHIRT</h3>";
        parent::tampilkanInformasi();
        echo "Model: " . $this->model . "<br>";
    }
}


// CLASS CHILD 3
class Pants extends Clothes {
    private $material;

    public function __construct($brand, $size, $color, $price, $material) {
        parent::__construct($brand, $size, $color, $price);
        $this->material = $material;
    }

    public function tampilkanInformasi() {
        echo "<h3>PANTS</h3>";
        parent::tampilkanInformasi();
        echo "Material: " . $this->material . "<br>";
    }
}


// MEMBUAT OBJECT
$jacket = new Jacket("Adidas", "L", "Black", 250000, "Hoodie");
$tshirt = new TShirt("Nike", "M", "White", 150000, "Oversize");
$pants = new Pants("Levis", "L", "Blue", 300000, "Jeans");


// MENAMPILKAN OUTPUT
$jacket->tampilkanInformasi();

echo "<br>";

$tshirt->tampilkanInformasi();

echo "<br>";

$pants->tampilkanInformasi();

?>