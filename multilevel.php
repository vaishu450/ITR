<?php

class Customer {
    public $cname, $cmobno;

    public function acceptCustomer($name, $mobno) {
        $this->cname = $name;
        $this->cmobno = $mobno;
    }
}


class Travel extends Customer {
    public $start, $end, $vehicleType;

    public function acceptTravel($start, $end, $vehicleType) {
        $this->start = $start;
        $this->end = $end;
        $this->vehicleType = $vehicleType;
    }
}


class TravelExpense extends Travel {
    public $distance, $expense;

    public function acceptExpense($distance) {
        $this->distance = $distance;
    }

    public function calculateTE() {
        if ($this->vehicleType == "minibus") {
            $rate = 20;
        } elseif ($this->vehicleType == "swift") {
            $rate = 13;
        } else {
            $rate = 0;
        }

        $this->expense = $this->distance * $rate;
    }

    public function display() {
        echo "Customer Name: $this->cname <br>";
        echo "Mobile No: $this->cmobno <br>";
        echo "Start destination: $this->start <br>";
        echo "End destination: $this->end <br>";
        echo "Vehicle Type: $this->vehicleType <br>";
        echo "Distance: $this->distance km<br>";
        echo "Total Travel Expense: Rs. $this->expense<br>";
    }
}

// Object creation and method calling
$obj = new TravelExpense();
$obj->acceptCustomer("Vaishnavi", "9876543210");
$obj->acceptTravel("Pune", "Mumbai", "swift");
$obj->acceptExpense(150);  
$obj->calculateTE();
$obj->display();
?>