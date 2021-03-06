<?php

namespace common\models;

use yii\db\ActiveRecord;

class Card extends ActiveRecord{

    public function addToCard($product, $qty = 1){

        if (isset($_SESSION['cart'] [$product->id])){
            $_SESSION['cart'] [$product->id] ['qty'] += $qty;
        }else{
            $_SESSION['cart'] [$product->id] = [
              'qty' => $qty,
                'id' => $product->id,
              'name' => $product->name,
              'price' => $product->price,
              'text' => $product->text
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
    }

    public function recalc($id){
        if (!isset($_SESSION['cart'] [$id])) return false;
        $qtyMinus = $_SESSION['cart'] [$id] ['qty'];
        $sumMinus = $_SESSION['cart'] [$id] ['qty'] * $_SESSION['cart'] [$id] ['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.sum'] -= $sumMinus;
        unset($_SESSION['cart'] [$id]);
    }

}