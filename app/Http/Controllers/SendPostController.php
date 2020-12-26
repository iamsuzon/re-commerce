<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class SendPostController extends Controller
{
    public function sendTablets(Request $request)
    {
        $userId = $_COOKIE['profile_viewer_uid'];
        $firestore = app('firebase.firestore');
        $user = $firestore->database()->collection('Users')->document($request->userId)->snapshot();
        if ($request->isMethod('POST'))
        {
            $this->validateWith([
                'title' => 'required',
                'radio1' => 'required',
                'radio2' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image_uri' => 'required',
                'country' => 'required',
                'number' => 'required',
                'country_code' => 'required'
            ]);

            $url = $this->slugify($request->title);

            $time_date = Carbon::now('Asia/Dubai');
            $date_now = $time_date->isoFormat('D-MMMM-YYYY');
            $time_now = $time_date->isoFormat('h:mm A');

            $reqs = $firestore->database()->collection('Request')->documents();
            $count = 1;
            foreach ($reqs as $req)
            {
                ++$count;
            }

            if (strtolower($request->country) == 'pakistan')
            {
                $updateData = [
                    'MYID' => $request->userId,
                    'Product_Slug' => $url,
                    'Product_Name' => 'Tablets',
                    'Product_Condition' => $request->radio1,
                    'Product_Type' => $request->radio2,
                    'Product_Title' => $request->title,
                    'Product_Details' => $request->description,
                    'Product_Price' => $request->price,
                    'ProductFirstImageURI' => $request->image_uri,
                    'ProductSecondImageURI' => $request->image_uri2,
                    'ProductThirdImageURI' => $request->image_uri3,
                    'ProductFourthImageURI' => $request->image_uri4,
                    'Urgent' => $request->check1,
                    'Doorstep' => $request->check2,
                    'Country' => $request->country,
                    'State' => $request->state2,
                    'City' => $request->city,
                    'Phone' => $request->country_code.$request->number,
                    'Count' => $count,
                    'Date' => $date_now,
                    'Time' => $time_now,
                    'ProductStatus' => 'Pending'
                ];

                $post = $firestore->database()->collection('Request')->add($updateData);

                $reqs = $firestore->database()->collection('MyReq')->document($userId)->collection('Posts')->documents();

                $count = 1;
                foreach ($reqs as $req)
                {
                    ++$count;
                }
                $updateData = [
                    'MYID' => $request->userId,
                    'Product_Slug' => $url,
                    'Product_Name' => 'Tablets',
                    'Product_Condition' => $request->radio1,
                    'Product_Type' => $request->radio2,
                    'Product_Title' => $request->title,
                    'Product_Details' => $request->description,
                    'Product_Price' => $request->price,
                    'ProductFirstImageURI' => $request->image_uri,
                    'ProductSecondImageURI' => $request->image_uri2,
                    'ProductThirdImageURI' => $request->image_uri3,
                    'ProductFourthImageURI' => $request->image_uri4,
                    'Urgent' => $request->check1,
                    'Doorstep' => $request->check2,
                    'Country' => $request->country,
                    'State' => $request->state2,
                    'City' => $request->city,
                    'Phone' => $request->country_code.$request->number,
                    'Count' => $count,
                    'Date' => $date_now,
                    'Time' => $time_now,
                    'ProductStatus' => 'Pending'
                ];

                $post2 = $firestore->database()->collection('MyReq')->document($userId)->collection('Posts')->document($post->id())->set($updateData);
                if ($post AND $post2)
                {
                    return redirect()->route('user-profile')->with('upload_status','Your Ad is Published');
                }
            }
            else{
                $updateData = [
                    'MYID' => $request->userId,
                    'Product_Slug' => $url,
                    'Product_Name' => 'Tablets',
                    'Product_Condition' => $request->radio1,
                    'Product_Type' => $request->radio2,
                    'Product_Title' => $request->title,
                    'Product_Details' => $request->description,
                    'Product_Price' => $request->price,
                    'ProductFirstImageURI' => $request->image_uri,
                    'ProductSecondImageURI' => $request->image_uri2,
                    'ProductThirdImageURI' => $request->image_uri3,
                    'ProductFourthImageURI' => $request->image_uri4,
                    'Urgent' => $request->check1,
                    'Doorstep' => $request->check2,
                    'Country' => $request->country,
                    'State' => $request->state1,
                    'City' => $request->city,
                    'Phone' => $request->country_code.$request->number,
                    'Count' => $count,
                    'Date' => $date_now,
                    'Time' => $time_now,
                    'ProductStatus' => 'Pending'
                ];

                $post = $firestore->database()->collection('Request')->add($updateData);

                $reqs = $firestore->database()->collection('MyReq')->document($userId)->collection('Posts')->documents();

                $count = 1;
                foreach ($reqs as $req)
                {
                    ++$count;
                }
                $updateData = [
                    'MYID' => $request->userId,
                    'Product_Slug' => $url,
                    'Product_Name' => 'Tablets',
                    'Product_Condition' => $request->radio1,
                    'Product_Type' => $request->radio2,
                    'Product_Title' => $request->title,
                    'Product_Details' => $request->description,
                    'Product_Price' => $request->price,
                    'ProductFirstImageURI' => $request->image_uri,
                    'ProductSecondImageURI' => $request->image_uri2,
                    'ProductThirdImageURI' => $request->image_uri3,
                    'ProductFourthImageURI' => $request->image_uri4,
                    'Urgent' => $request->check1,
                    'Doorstep' => $request->check2,
                    'Country' => $request->country,
                    'State' => $request->state1,
                    'City' => $request->city,
                    'Phone' => $request->country_code.' '.$request->number,
                    'Count' => $count,
                    'Date' => $date_now,
                    'Time' => $time_now,
                    'ProductStatus' => 'Pending'
                ];

                $post2 = $firestore->database()->collection('MyReq')->document($userId)->collection('Posts')->document($post->id())->set($updateData);
                if ($post AND $post2)
                {
                    return redirect()->route('user-profile')->with('upload_status','Your Ad is Published');
                }
            }
        }
    }

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}
