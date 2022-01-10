<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\User;
use App\Models\Good;
use App\Models\GoodsOrders;
use App\Http\Controllers;

class OrderController extends Controller
{
    public function list() {
        return view('orders-list', ['orders' => Order::all()]);
    }

    public function create($orderId = null)
    {
        $users = User::all();

        $goods = Good::all();

        $product_lines = [];

        if ($orderId)
        {
            $product_lines = $this->getProductLines($orderId);
        }

        return view('orders-create', ['users' => $users, 'goods' => $goods, 'orderId' => $orderId, 'products_lines' => $product_lines]);
    }

    public function post(Request $request)
    {
        $existedOrderId = $request->orderId;

        $order = null;

        if ($existedOrderId != null)
        {
            $order = Order::find($existedOrderId);
        } else {
            $order = new Order();//create new row in db
        };

        //create order
        

        $order->user_id = $request->chosenUser; //take user id from input

        $order->admin_id = 4; //to do on authefication

        $order->save();

        $orderId = $order->id;

        //create good order - one to many
        $good_id = $request->chosenProduct;

        $qty = $request->chosenQty;

        $good = Good::find($good_id );

        $total_price = $qty * $good->price;
        
        $goodOrder = new GoodsOrders(); //create new row in db

        $goodOrder->good_id = $good_id;

        $goodOrder->qty = $qty;

        $goodOrder->total_price = $total_price;

        $goodOrder->order_id = $orderId;

        $goodOrder->save();

        return redirect()->route('create', ['id' => $orderId ]);
    }

    private function getProductLines($order_id) {

        $goodsOrders = GoodsOrders::where('order_id', $order_id)->get();

        $order_lines = [];

        foreach($goodsOrders as $goodsorder) {

            $orderLine = new GoodOrderInfoClass();

            $orderLine->qty = $goodsorder->qty;
            $orderLine->total_price = $goodsorder->total_price;
            $orderLine->id = $goodsorder->id;

            $good = Good::find($goodsorder->good_id);

            $orderLine->price = $good->price;
            $orderLine->title = $good->title;
            
            array_push($order_lines, $orderLine);
        }

        return $order_lines;

    }

    public function delete($id) 
    {
        $product_line = GoodsOrders::find($id);  
        $orderId = $product_line->order_id;

        $product_line->delete();

        return redirect()->route('create', ['id' => $orderId ]);

       
    }
}