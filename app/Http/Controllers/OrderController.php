<?php

namespace App\Http\Controllers;

use App\Actions\Orders\OrderNotificationAction;
use App\Actions\Orders\OrderStoreAction;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * @return View
     */
    public function index() : View
    {
        return view('orders.index', [
           'items' => Order::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() : View
    {
        return view('orders.create');
    }

    /**
     * @param Request $request
     * @param Order $order
     * @return RedirectResponse
     */
    public function update(Request $request, Order $order) : RedirectResponse
    {
        return redirect()->route('orders.index');
    }

    /**
     * @param OrderStoreRequest $request
     * @return RedirectResponse
     */
    public function store(OrderStoreRequest $request, OrderStoreAction $action, OrderNotificationAction $notification) : RedirectResponse
    {
        if($order = $action->handle($request->validated())) {
            $notification->handle($order);
        }

        return redirect()
            ->route('orders.index');
    }

    /**
     * @param Order $order
     * @return View
     */
    public function show(Order $order) : View
    {
        return view('orders.show', compact($order));
    }

    /**
     * @param Order $order
     * @return View
     */
    public function edit(Order $order) : View
    {
        return view('orders.edit', compact($order));
    }

    /**
     * @param Order $order
     * @return RedirectResponse
     */
    public function destroy(Order $order) : RedirectResponse
    {
        $order->delete();

        return redirect()->route('orders.index');
    }
}
