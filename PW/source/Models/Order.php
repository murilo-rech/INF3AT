<?php

namespace source\Models;

class Order
{
    private $id;
    private $customerName;
    private $total;
    public function __construct($id, $customerName, $total)
    {
        $this->id = $id;
        $this->customerName = $customerName;
        $this->total = $total;
    }
    public function addFee($fee)
    {
        $this->total += $fee;
    }
    public function show()
    {
        echo "Pedido: #" . $this->id . " - Cliente: " . $this->customerName . " - Total: R$ " . number_format($this->total, 2, ",", ".") . "<br>";
    }
    public function getId()
    {
        return $this->id;
    }
    public function getCustomerName()
    {
        return $this->customerName;
    }
    public function getTotal()
    {
        return $this->total;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;
    }
    public function setTotal($total)
    {
        $this->total = $total;
    }
}