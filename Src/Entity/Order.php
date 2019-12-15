<?php declare (strict_types = 1);


namespace SCH\Unfi\Entity;


class Order
{
    private $salesOrder, $shipToName, $shipToAddressLine1, $shipToAddressLine2, $shipToCityAndState, $shipToZipCode;
    private $customerPo, $shipViaDescription, $subTotal , $amountLine, $freightAmount, $miscChargeAmount;
    private $volumeDiscountAmount, $projectedTotalAmount, $productLine;

    public function __construct(array $order)
    {
        $this->setSalesOrder($order['salesOrder']);
        $this->setShipToName($order['shipToName']);
        $this->setShipToAddressLine1($order['setShipToAddressLine1']);
        $this->setShipToAddressLine2($order['setShipToAddressLine2']);
        $this->setShipToZipCode($order['setShipToZipCode']);
        $this->setCustomerPo($order['setCustomerPo']);
        $this->setShipViaDescription($order['setShipViaDescription']);
        $this->setSubTotal($order['setSubTotal']);
        $this->setAmountLine($order['setAmountLine']);
        $this->setFreightAmount($order['freightAmount']);
        $this->setMiscChargeAmount($order['setMiscChargeAmount']);
        $this->setVolumeDiscountAmount($order['setVolumeDiscountAmount']);
        $this->setProjectedTotalAmount($order['setProjectedTotalAmount']);
    }

    /**
     * @return mixed
     */
    public function getSalesOrder()
    {
        return $this->salesOrder;
    }

    /**
     * @param mixed $salesOrder
     */
    public function setSalesOrder($salesOrder): void
    {
        $this->salesOrder = $salesOrder;
    }

    /**
     * @return mixed
     */
    public function getShipToName()
    {
        return $this->shipToName;
    }

    /**
     * @param mixed $shipToName
     */
    public function setShipToName($shipToName): void
    {
        $this->shipToMane = $shipToName;
    }

    /**
     * @return mixed
     */
    public function getShipToAddressLine1()
    {
        return $this->shipToAddressLine1;
    }

    /**
     * @param mixed $shipToAddressLine1
     */
    public function setShipToAddressLine1($shipToAddressLine1): void
    {
        $this->shipToAddressLine1 = $shipToAddressLine1;
    }

    /**
     * @return mixed
     */
    public function getShipToAddressLine2()
    {
        return $this->shipToAddressLine2;
    }

    /**
     * @param mixed $shipToAddressLine2
     */
    public function setShipToAddressLine2($shipToAddressLine2): void
    {
        $this->shipToAddressLine2 = $shipToAddressLine2;
    }

    /**
     * @return mixed
     */
    public function getShipToCityAndState()
    {
        return $this->shipToCityAndState;
    }

    /**
     * @param mixed $shipToCityAndState
     */
    public function setShipToCityAndState($shipToCityAndState): void
    {
        $this->shipToCityAndState = $shipToCityAndState;
    }

    /**
     * @return mixed
     */
    public function getShipToZipCode()
    {
        return $this->shipToZipCode;
    }

    /**
     * @param $shipToZipCode
     */
    public function setShipToZipCode($shipToZipCode): void
    {
        $this->shipToZipCode = $shipToZipCode;
    }

    /**
     * @return mixed
     */
    public function getCustomerPo()
    {
        return $this->customerPo;
    }

    /**
     * @param mixed $customerPo
     */
    public function setCustomerPo($customerPo): void
    {
        $this->customerPo = $customerPo;
    }

    /**
     * @return mixed
     */
    public function getShipViaDescription()
    {
        return $this->shipViaDescription;
    }

    /**
     * @param mixed $shipViaDescription
     */
    public function setShipViaDescription($shipViaDescription): void
    {
        $this->shipViaDescription = $shipViaDescription;
    }

    /**
     * @return mixed
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * @param mixed $subTotal
     */
    public function setSubTotal($subTotal): void
    {
        $this->subTotal = $subTotal;
    }

    /**
     * @return mixed
     */
    public function getAmountLine()
    {
        return $this->amountLine;
    }

    /**
     * @param mixed $amountLine
     */
    public function setAmountLine($amountLine): void
    {
        $this->amountLine = $amountLine;
    }

    /**
     * @return mixed
     */
    public function getFreightAmount()
    {
        return $this->freightAmount;
    }

    /**
     * @param mixed $freightAmount
     */
    public function setFreightAmount($freightAmount): void
    {
        $this->freightAmount = $freightAmount;
    }

    /**
     * @return mixed
     */
    public function getMiscChargeAmount()
    {
        return $this->miscChargeAmount;
    }

    /**
     * @param mixed $miscChargeAmount
     */
    public function setMiscChargeAmount($miscChargeAmount): void
    {
        $this->miscChargeAmount = $miscChargeAmount;
    }

    /**
     * @return mixed
     */
    public function getVolumeDiscountAmount()
    {
        return $this->volumeDiscountAmount;
    }

    /**
     * @param mixed $volumeDiscountAmount
     */
    public function setVolumeDiscountAmount($volumeDiscountAmount): void
    {
        $this->volumeDiscountAmount = $volumeDiscountAmount;
    }

    /**
     * @return mixed
     */
    public function getProjectedTotalAmount()
    {
        return $this->projectedTotalAmount;
    }

    /**
     * @param mixed $projectedTotalAmount
     */
    public function setProjectedTotalAmount($projectedTotalAmount): void
    {
        $this->projectedTotalAmount = $projectedTotalAmount;
    }

    /**
     * @return array
     */
    public function getProductLine(): array
    {
        return $this->productLine;
    }

    /**
     * @param OrderProduct $productLine
     */
    public function setProductLine(OrderProduct $productLine): void
    {
        $this->productLine[] = $productLine;
    }
}