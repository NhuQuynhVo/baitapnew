use App\Models\Order;
use App\Models\User;

public function showByUser($id)
{
    $user = User::findOrFail($id);
    $orders = Order::with('orderItems.product') // nếu có liên kết
                ->where('user_id', $id)
                ->get();

    return view('orders.user_orders', compact('user', 'orders'));
}
