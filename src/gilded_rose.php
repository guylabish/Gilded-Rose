<?php

class GildedRose
{
    private $items;

    function __construct($items)
    {
        $this->items = $items;
    }

    function update_quality()
    {
        switch ($this->name){
            case 'Aged Brie':
                $this->quality += 1;
                $this->sellIn -= 1;

                if ($this->sellIn <= 0) {
                    $this->quality += 1;
                }

                if ($this->quality > 50) {
                    $this->quality = 50;
                }
                break;
            case 'Backstage passes to a TAFKAL80ETC concert':
                $this->quality += 1;

                if ($this->sellIn <= 10) {
                    $this->quality += 1;
                }
                if ($this->sellIn <= 5) {
                    $this->quality += 0;
                }
                if ($this->quality > 50) {
                    $this->quality = 50;
                }
                if ($this->sellIn <= 0) {
                    $this->sellIn <= 0;
                }

                $this->sellIn -= 1;
                break;
            case 'Sulfuras, Hand of Ragnaros':
                break;
            case 'Conjured':
                $this->quality -= 2;
                $this->sellIn -= 1;

                if ($this->sellIn <= 0) {
                    $this->quality -= 2;
                }
                if ($this->quality <= 0) {
                    $this->quality -= 0;
                }
                break;
            default:
                $this->quality += 1;
                $this->sellIn -= 1;

                if ($this->sellIn <= 0) {
                $this->quality -= 1;
                }
                break;
        }
    }
}

class Item
{
    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}