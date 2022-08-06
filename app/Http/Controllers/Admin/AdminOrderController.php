<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderProduct;

class AdminOrderController extends Controller
{
    protected $productModel;
    protected $categoryModel;
    protected $orderModel;
    protected $orderProductModel;

    public function __construct(
        Product $product, 
        Category $category,
        Order $order,
        OrderProduct $orderProduct)
    {
        $this->productModel = $product;
        $this->categoryModel = $category;
        $this->orderModel = $order;
        $this->orderProductModel = $orderProduct;
    }

    public function index()
    {
        return view('admin.order.admin-order');
    }
}
