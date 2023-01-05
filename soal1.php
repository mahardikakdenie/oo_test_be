<?php
class Cart
{
    public $products = [];
    public function addProduct($name_product, $product_quantity)
    {
        $index = $this->getIndexItemProductsByName($this->products, $name_product);
        if ($index !== null) {
            $this->products[$index]["quantity"] += $product_quantity;
        } else {
            array_push($this->products, [
                "name" => $name_product,
                "quantity" => $product_quantity,
            ]);
        }
    }
    private function getIndexItemProductsByName($items, $target)
    {
        $index;
        foreach ($items as $key => $item) {
            if ($target === $item["name"]) {
                $index = $key;
            } else {
                $index = null;
            }
        }
        return $index;
    }
    public function removeProduct($name)
    {
        $index = $this->getIndexItemProductsByName($this->products, $name);
        unset($this->products[$index]);
    }
    public function getProduct()
    {
        foreach ($this->products as $key => $item) {
            echo $item["name"] . " Dengan Kuantitas : " . $item["quantity"] . " \n";
        }
    }
}


$cart = new Cart();
$cart->addProduct("Pisang Hijau", 2);
$cart->addProduct("Apel Merah", 1);
$cart->addProduct("Apel Merah", 4);
$cart->addProduct("Apel Merah", 2);
$cart->addProduct("Semangka Kuning", 3);

$cart->removeProduct("Semangka Kuning");
$cart->removeProduct("Semangka Merah");
$cart->getProduct();
