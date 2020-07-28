<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Tools\Img\ToServer;

use App\Area;
use App\Subarea;
use App\Review;

class ProfileController extends Controller {
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit() {
        $areas = auth()->user()->select('areas.id')
        ->join('cordinates', 'users.id', '=', 'cordinates.user_id')
        ->join('guards', 'cordinates.id', '=', 'guards.cordinate_id')
        ->join('areas', 'areas.id', '=', 'guards.area_id')
        ->where([['users.id',auth()->user()->id]])
        ->get()->count();
        $subareas = auth()->user()->select('subareas.id')
        ->join('cordinates', 'users.id', '=', 'cordinates.user_id')
        ->join('guards', 'cordinates.id', '=', 'guards.cordinate_id')
        ->join('areas', 'areas.id', '=', 'guards.area_id')
        ->join('subareas', 'areas.id', '=', 'subareas.area_id')
        ->where([['users.id',auth()->user()->id]])
        ->get()->count();
        $reviews = auth()->user()->select('reviews.id')
        ->join('cordinates', 'users.id', '=', 'cordinates.user_id')
        ->join('guards', 'cordinates.id', '=', 'guards.cordinate_id')
        ->join('areas', 'areas.id', '=', 'guards.area_id')
        ->join('subareas', 'areas.id', '=', 'subareas.area_id')
        ->join('targets', 'subareas.id', '=', 'targets.subarea_id')
        ->join('reviews', 'targets.id', '=', 'reviews.target_id')
        ->where([['users.id',auth()->user()->id]])
        ->get()->count();
        return view('profile.edit',compact('areas','subareas','reviews'));
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request) {
        $user = auth()->user();
        if ($request->file('foto') != null){
            $data = ToServer::saveImage($request, 'foto', 'avatars/1');
            if($user->foto != 'avatars/1/avatar-default.png')
            ToServer::deleteFile('', $user->foto);
        } else $data = $request->all();
        
        $user->update($data);

        return back()->withStatus(__('Perfil actualizado correctamente.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request) {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }
}