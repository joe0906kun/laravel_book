<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\CreateRequest;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateRequest $request, TweetService $TweetService)
    {
        // $tweet = new Tweet;
        // $tweet->user_id = $request->userId(); // ここでUserIdを保存している
        // $tweet->content = $request->tweet();
        // $tweet->save();
        $TweetService->saveTweet(
            $request->userId(),
            $request->tweet(),
            $request->images(),
        );
        return redirect()->route('tweet.index');
    }
}
