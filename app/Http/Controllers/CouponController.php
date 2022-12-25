<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class CouponController extends Controller
{
    public function showCoupon($id)
    {
        if (empty(auth()->user()->id)) {
            return redirect('/login');
        }
        if (DB::table('coupon_user')->where('user_id', auth()->user()->id)->where('coupon_id', $id)->count() < 1) {
            DB::table('coupon_user')->insert([
                'user_id' => auth()->user()->id,
                'coupon_id' => $id,
            ]);
        }
        

        $coupon = Coupon::find($id);
        return view('coupon')->with([
            'id' => $coupon->id,
            'name' => $coupon->name,
            'status' => $coupon->status,
            'expireDate' => $coupon->expire_date,
            'description' => $coupon->description,
            'image' => $coupon->image,
            'offerCode' => $coupon->offer_code,
            'website' => $coupon->website,
        ]);
    }

    public function new()
    {
        if (! Gate::allows('isAdmin')) {
            abort(403);
        }
        return view('new-coupon');
    }

    public function add(Request $request)
    {
        $path = $request->file('image')->storeAs(
            'images', $request->file('image')->getClientOriginalName(), 'public'
        );
        Coupon::create([
            'name' => $request->name,
            'status' => $request->status,
            'expire_date' => $request->expireDate,
            'description' => $request->description,
            'image' => $path,
            'offer_code' => $request->offerCode,
            'website' => $request->website,
        ]);
        return view('success');
    }

    public function allCoupons()
    {
        $coupons = Coupon::all();
        return view('all-coupons')->with(['coupons' => $coupons]);
    }

    public function deleteCoupon(Request $request)
    {
        Coupon::destroy($request->id);
        return view('success');
    }

    public function editCoupon(Request $request)
    {
        $coupon = Coupon::find((int)$request->id);
        return view('coupon-edit-by-admin')->with(['coupon' => $coupon]);
    }

    public function edition(Request $request)
    {
        $path = $request->file('image')->storeAs(
            'images', $request->file('image')->getClientOriginalName(), 'public'
        );
        $t = Coupon::where('id', (int)$request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'expire_date' => $request->expireDate,
            'website' => $request->website,
            'image' => $path,
            'offer_code' => $request->offerCode,
        ]);
        return view('success');
    }
}
