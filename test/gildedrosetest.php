<?php
require_once '.\src\gilded_rose.php';
require_once '.\vendor\Autoload.php'; {
    function testFoo() {
        $items = array(new Item("foo", 0, 0));
        $gildedRose = new GildedRose($items);
        $gildedRose->update_quality();
        $this->assertEquals("fixme", $items[0]->name);
    }
}

