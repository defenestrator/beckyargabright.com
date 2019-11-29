<?php

namespace App\Http\Controllers;

use App\GiftCard;
use App\User;
use Illuminate\Http\Request;
use Auth;

class GiftCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blank()
    {
        if (Auth::check() && Auth::user()->id == 1 && Auth::user()->email == 'epipha44@gmail.com') {
            return GiftCard::create();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('giftcards.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {

            $user = Auth::user();

            $request->validate([
                'to_name'  => 'required|min:1|max:48',
                'to_email' => 'email',
                'from_name'  => 'required|min:1|max:48',
                'from_email' => 'email',
                'hours'  => 'integer|numeric|min:60|max:600|required',
            ]);

            if ($user->id == 1 && $user->email == 'epipha44@gmail.com') {

                return GiftCard::create([
                    'user_id' => $user->id,
                    'to_name'  => $request->to_name,
                    'to_email' => $request->to_email,
                    'from_name'  => $request->from_name,
                    'from_email' => $request->from_email,
                    'minutes'  => $request->hours
                ]);
            }

            return GiftCard::create([
                'user_id' => $user->id,
                'to_name'  => $request->to_name,
                'to_email' => $request->to_email,
                'from_name'  => $request->from_name,
                'from_email' => $request->from_email,
                'hours'  => $request->hours
                ]
            );

        }
        // else...validate that shit, boi.
        $request->validate([
            'to_name'  => 'required|min:1|max:48',
            'to_email' => 'email',
            'from_name'  => 'required|min:1|max:48',
            'from_email' => 'email',
            'hours'  => 'integer|numeric|min:60|max:600|required',
        ]);


        return GiftCard::create([
            'to_name'  => $request->to_name,
            'to_email' => $request->to_email,
            'from_name'  => $request->from_name,
            'from_email' => $request->from_email,
            'minutes'  => $request->hours
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GiftCard  $giftCard
     * @return \Illuminate\Http\Response
     */
    public function show(GiftCard $giftCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GiftCard  $giftCard
     * @return \Illuminate\Http\Response
     */
    public function edit(GiftCard $giftCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GiftCard  $giftCard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GiftCard $giftCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GiftCard  $giftCard
     * @return \Illuminate\Http\Response
     */
    public function destroy(GiftCard $giftCard)
    {
        //
    }
}
