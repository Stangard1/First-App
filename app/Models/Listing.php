<?php

namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Velit debitis accusamus ab tempora nihil iure saepe ipsum culpa 
                 reprehenderit quod perferendis aliquid maiores optio, provident
                  nostrum adipisci nam quaerat recusandae?'
            ],
            [
                'id' => 2,
                'title' => 'Listing two ',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                 Velit debitis accusamus ab tempora nihil iure saepe ipsum culpa 
                 reprehenderit quod perferendis aliquid maiores optio, provident
                  nostrum adipisci nam quaerat recusandae?'
            ]
            ];
    }

    public static function find($id) {
       $listings = self::all();

       foreach($listings as $listing) {
        if ($listing['id'] == $id) {
            return $listing;
        }
       }
    }
}


