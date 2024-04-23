<?php

namespace App;

use App\Product;

class PanelProduct extends Product
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        //
    }

    public function getForeignkey()
    {
        // $parent = get_parent_class($this);

        // return (new $parent)->getForeignkey();

        $parentClass = get_parent_class($this);

        if ($parentClass !== false) {
            return (new $parentClass)->getForeignkey();
        }

        return null;
    }

    public function getMorphClass()
    {
        // $parent = get_parent_class($this);

        // return (new $parent)->getMorphClass();

        $parentClass = get_parent_class($this);

        if ($parentClass !== false) {
            return (new $parentClass)->getMorphClass();
        }

        return null;
    }
}