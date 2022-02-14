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
        return view('posts.index', [
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
        return view('posts.create');
    }

    /**
     * @param Request $request
     * @param Order $post
     * @return RedirectResponse
     */
    public function update(Request $request, Order $post) : RedirectResponse
    {
        return redirect()->route('posts.index');
    }

    /**
     * @param OrderStoreRequest $request
     * @return RedirectResponse
     */
    public function store(OrderStoreRequest $request, OrderStoreAction $action, OrderNotificationAction $notification) : RedirectResponse
    {
        $post = $action->handle($request->validated());

        if($post->exists) {
            $notification->handle($post);
        }

        return redirect()
            ->route('posts.index');
    }

    /**
     * @param Order $post
     * @return View
     */
    public function show(Order $post) : View
    {
        return view('posts.show', compact($post));
    }

    /**
     * @param Order $post
     * @return View
     */
    public function edit(Order $post) : View
    {
        return view('posts.edit', compact($post));
    }

    /**
     * @param Order $post
     * @return RedirectResponse
     */
    public function destroy(Order $post) : RedirectResponse
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
