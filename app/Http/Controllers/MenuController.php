<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu(Request $request)
    {
        $validated = $request->validate([
            'search' => 'nullable|string|max:255',
        ]);

        $query = Category::with(['menus' => function ($query) use ($request) {
            if ($request->has('search') && $request->search != '') {
                $query->where('name', 'like', '%' . $request->search . '%');
            }
        }]);

        $categories = $query->get();

        return view('main-site.menu', compact('categories'));
    }

    public function menuItem($id)
    {
        $menu = Menu::with(['category'])->findOrFail($id);
        $cart = session()->get('cart_key', []);

        function getItemQuantity($cart, $itemId) {
            foreach ($cart as $item) {
                if ($item['id'] == $itemId) {
                    return $item['quantity'];
                }
            }
            return 0;
        }

        $quantity = getItemQuantity($cart, $id);
        $relatedMenus = Menu::where('id', '!=', $id)->inRandomOrder()->limit(5)->get();

        return view('main-site.menu-item', compact('menu', 'quantity', 'relatedMenus'));
    }
}
