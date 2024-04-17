<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Qualification;
use App\Models\Review;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $user = User::select(
            'id',
            'name',
            'email',
            'phone',
            'address',
            'job',
            'degree',
            'profile_pic',
            'birth_day',
            'experience')->where('id',1)->first();

        $experiences = Qualification::where('type',['Work'])->orderBy('id', 'desc')->take(3)->get();
        $educations = Qualification::where('type',['Education'])->orderBy('id', 'desc')->take(3)->get();
        $skills = Skill::orderBy('id', 'desc')->take(6)->get();
        $services = Service::take(6)->get();
        $reviewers = Review::orderBy('id', 'desc')->take(5)->get();
        $portfolios= Portfolio::with('category')->orderBy('id', 'desc')->take(6)->get();
        $setting = Setting::first();

        return view('front.index',compact('user','experiences','educations','skills',
            'services','portfolios','setting','reviewers'));
    }
}
