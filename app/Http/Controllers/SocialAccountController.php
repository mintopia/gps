<?php

namespace App\Http\Controllers;

use App\Exceptions\SocialProviderException;
use App\Models\SocialProvider;
use Illuminate\Http\Request;

class SocialAccountController extends Controller
{
    public function create(Request $request, SocialProvider $socialprovider)
    {
        return $socialprovider->redirect();
    }

    public function store(Request $request, SocialProvider $socialprovider)
    {
        $url = 'user.profile';
        if ($request->session()->get('returnToSpotify')) {
            $url = 'user.spotify';
        }
        try {
            $socialprovider->user();
            return response()->redirectToRoute($url)->with('successMessage', "Your {$socialprovider->name} account has been linked");
        } catch (SocialProviderException $ex) {
            throw $ex;
            return response()->redirectToRoute($url)->with('errorMessage', $ex->getMessage());
        } catch (\Exception $ex) {
            throw $ex;
            // Do Nothing
        }
        return response()->redirectToRoute($url)->with('errorMessage', "Unable to link your accounts");
    }
}
