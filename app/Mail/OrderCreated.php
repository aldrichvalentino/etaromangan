<?php

namespace App\Mail;

use App\Food;
use App\Order;
use App\Restaurant;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Instances
     */
    public $order;
    public $food;
    public $restaurant;
    public $user;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order, Restaurant $restaurant, User $user)
    {
        $this->order = $order;
        $this->user = $user;
        $this->food = Food::find($order->food_id);
        $this->restaurant = $restaurant;
        $this->url = "/dashboard/" . $this->user->id . "/orders";
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('etaromangan@gmail.com', 'Eta Ro Mangan!')
            ->subject('Horas! Pesanan Baru Diterima #' . $this->order->id)
            ->markdown('emails.orders.created');
    }
}
