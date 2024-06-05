<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function createMenu(Request $request)
{
    // Logic to create menu

    // For example, you can retrieve data from the request
    $name = $request->input('name');
    $price = $request->input('price');

    // Then you can save it to the database or perform any other necessary actions
    Menu::create([
        'name' => $name,
        'price' => $price,
    ]);

    // Optionally, you can redirect the user to another page after creating the menu
    return redirect()->route('menu.index')->with('success', 'Menu created successfully.');
}

}
