<?php

namespace App\Http\Controllers;

use App\Models\WebsiteLogo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class WebsiteLogoController extends Controller
{
    public function website_logo()
    {
        $meta_title = 'Website Logo Update';
        $websiteLogo = WebsiteLogo::find(1);
        return view('admin.website_logo.update', compact('websiteLogo', 'meta_title'));
    }

    public function website_logo_update(Request $request)
    {
        $websiteLogo = WebsiteLogo::find(1);
        $websiteLogo->website_name = trim($request->website_name);
        if (!empty($request->logo)) {
            if (!empty($websiteLogo->logo) && file_exists('upload/logo/' . $websiteLogo->logo)) {
                unlink('upload/logo/' . $websiteLogo->logo);
            }
            $file = $request->file('logo');
            $fileName = Str::random(30) . '.' . $file->getClientOriginalExtension();
            $file->move('upload/logo/', $fileName);
            $websiteLogo->logo = $fileName;
        }
        $websiteLogo->save();
        return redirect('admin/website_logo')->with('success', 'Website Logo Updated Successfully.');
    }
}