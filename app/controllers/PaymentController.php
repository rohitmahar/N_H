<?php

class PaymentController extends BaseController {

    public function addToDelivery($deliveryId){


        $deliveryId->users()->attach(Auth::user()->id);


        return Redirect::back();


    }

    public function orders(){
        return View::make('orders');
    }


    public function deliveryPost()
    {


        if (Input::get('delivery_address') == 'on') {

            $user_id = Auth::user()->id;
            $product_name = Input::get('product_name');
            $address = Auth::user()->address;
            $postal_code = Auth::user()->postal_code;

            $delivery = new Delivery;

            $data = [
                'user_id'   => $user_id,
                'address' => $address,
                'postal_code'   => $postal_code,
                'product_name'  => $product_name
            ];

            $delivery::create($data);

            return Redirect::back()->with('message', 'Delivery address uploaded Successfully.');


        }

        else {


            $validation = Validator::make(Input::all(), [


                'address' => 'required|min:2|max:100',
                'postal_code' => 'required|integer|digits:5'

            ]);

            // Validation passes
            if ($validation->passes()) {

                $user_id = Auth::user()->id;
                $address = Input::get('address');
                $postal_code = Input::get('postal_code');
                $product_name = Input::get('product_name');

                $delivery = new Delivery;

                $data = [
                    'user_id'  => $user_id,
                    'address' => $address,
                    'postal_code'   => $postal_code,
                    'product_name'  => $product_name
                ];

                $delivery::create($data);

                return Redirect::back()->with('message', 'Delivery Successfully');

            }

        }

            // when vlaidaion failed
            return Redirect::back()->withInput()->withErrors($validation->errors());
    }





    public function delivery() {
        $user_id = Auth::user()->id;
        $deliveries = Delivery::where('user_id', '=', $user_id)->get();


        return View::make('delivery', compact('deliveries'));


    }



    public function addToPayment($paymentId){


        $paymentId->users()->attach(Auth::user()->id);


        return Redirect::back();


    }

    public function paymentPost(){

        $user_id = Auth::user()->id;
        $payment_method = Input::get('payment_method');


        $payment_method = new Payment;

        $data = [
            'user_id'  => $user_id,
            'payment_method' => $payment_method,

        ];

        $payment_method::create($data);

        return Redirect::back()->with('message', 'Payment method selected');



    }

}