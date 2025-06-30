<?php
class Vehicle {
    protected $engine = "V8";

    public function showEngine() {
        echo "Engine: " . $this->engine;
    }
}

class Car extends Vehicle {
    public function upgradeEngine($newEngine) {
        $this->engine = $newEngine;     // ✅ child‑এ সরাসরি অ্যাক্সেস
    }
}

$bmw = new Car();
// echo $bmw->engine;          // ❌ বাইর থেকে দেখা যাবে না
$bmw->upgradeEngine("Electric");
$bmw->showEngine();             // আউটপুট: Engine: Electric
?>
