<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComparisonController extends Controller
{
    public function postCompare(Request $request) {
      $result = new \stdClass();

      $factor_points = [280,290,200,170,100,90];

      // Importing Data One
      $result->member_address_one = $request->input('member_address_one');
      $result->shipping_address_one = $request->input('shipping_address_one');
      $result->payment_one = $request->input('payment_one');
      $result->mobile_one = $request->input('mobile_one');
      $result->member_email_one = $request->input('member_email_one');
      $result->order_email_one = $request->input('order_email_one');

      // Importing Data Two
      $result->member_address_two = $request->input('member_address_two');
      $result->shipping_address_two = $request->input('shipping_address_two');
      $result->payment_two = $request->input('payment_two');
      $result->mobile_two = $request->input('mobile_two');
      $result->member_email_two = $request->input('member_email_two');
      $result->order_email_two = $request->input('order_email_two');

      // Generate Value Comparison
      similar_text($result->member_address_one, $result->member_address_two, $member_address_value);
        $result->member_address_value = $member_address_value;
      similar_text($result->shipping_address_one, $result->shipping_address_two, $shipping_address_value);
        $result->shipping_address_value = $shipping_address_value;
      similar_text($result->mobile_one, $result->mobile_two, $mobile_value);
        $result->mobile_value = $mobile_value;
      similar_text($result->member_email_one, $result->member_email_two, $member_email_value);
        $result->member_email_value = $member_email_value;
      similar_text($result->order_email_one, $result->order_email_two, $order_email_value);
        $result->order_email_value = $order_email_value;

      // Payment Value comparison
      if ($result->payment_one != $result->payment_two){
        $payment_value = 0;
        $result->payment_value = $payment_value;
      } else {
        $payment_value = 100;
        $result->payment_value = $payment_value;
      }

      // Calculate Points
      $member_address_point = $factor_points[0]*($member_address_value/100);
      $shipping_address_point = $factor_points[1]*($shipping_address_value/100);
      $payment_point = $factor_points[2]*($payment_value/100);
      $mobile_point = $factor_points[3]*($mobile_value/100);
      $member_email_point = $factor_points[4]*($member_email_value/100);
      $order_email_point = $factor_points[5]*($order_email_value/100);

      $total_points = $member_address_point+$shipping_address_point+$payment_point+$mobile_point+$member_email_point+$order_email_point;
      $result->total_points = $total_points;

      // Determine Status
      if ($total_points <= 400) {
    	  $result->hasil = 'Not Fraud';
      } elseif ($total_points > 400 && $total_points <= 500) {
      	$result->hasil = 'Need Concern';
      } else {
      	$result->hasil = 'fraud';
      }

      return back()->with('result',$result);
    }
}
