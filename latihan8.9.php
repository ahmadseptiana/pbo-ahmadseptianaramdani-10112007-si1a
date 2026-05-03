<?php
class komputer {
    
    private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
    protected $jenis_RAM = "DDR 4";
    public $jenis_VGA = "PCI Express";
    
    public function tampilkan_processor() {
        return $this->jenis_processor;
    }
    
    protected function tampilkan_ram() {
        return $this->jenis_RAM;
    }
    
    protected function tampilkan_vga() {
        return $this->jenis_VGA;
    }
    
    public function tampilkan_vga2() {
        return $this->jenis_VGA;
    }
}

class laptop extends komputer {
    
    public function display_processor() {
        return $this->tampilkan_processor(); // lewat method public
    }
    
    public function display_ram() {
        return $this->tampilkan_ram(); // sekarang bisa (protected)
    }
    
    public function display_vga() {
        return $this->tampilkan_vga(); // protected boleh di turunan
    }
}

$komputer = new komputer();
$laptop = new laptop();

echo "Processor Komputer : ".$komputer->tampilkan_processor()."<br />";
echo "Processor Laptop : ".$laptop->display_processor()."<br />";
echo "RAM Laptop : ".$laptop->display_ram()."<br />";
echo "VGA Laptop : ".$laptop->display_vga()."<br />";
?>