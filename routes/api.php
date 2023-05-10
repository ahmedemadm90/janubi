    <?php

    use App\Models\Ad;
    use App\Models\Comment;
    use App\Models\Like;
    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Composer;
    use Illuminate\Support\Facades\Artisan;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Storage;
    use Illuminate\Support\Facades\Validator;

    use function GuzzleHttp\Promise\all;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::get('/route-cache', function () {
        Artisan::call('route:cache');
        return 'Routes cache cleared';
    });
    //Clear config cache
    Route::get('/config-cache', function () {
        Artisan::call('config:cache');
        return 'Config cache cleared';
    });
    // Clear application cache
    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return 'Application cache cleared';
    });

    // Clear view cache
    Route::get('/view-clear', function () {
        Artisan::call('view:clear');
        return 'View cache cleared';
    });

    // Clear cache using reoptimized class
    Route::get('/optimize-clear', function () {
        Artisan::call('optimize:clear');
        return 'View cache cleared';
    });
    Route::post('/login', function (Request $request) {
        $request = json_decode($request->getContent(), true);
        $user = User::where('serial', $request['serial'])->first();
        if ($user) {
            $arr = [
                'code' => 200,
                'state' => 'true',
                'data' => $user,
                'token' => $user->createToken('auth_token')->plainTextToken,
            ];
            return response()->json($arr);
        } else {
            $arr = [
                'code' => 302,
                'state' => 'false',
                'data' => 'unauthrized',
            ];
            return response()->json($arr);
        }
    });
    Route::get('/comments', function (Request $request) {
        $commentsAll = Comment::all();
        $comments = [];
        foreach ($commentsAll as $comment) {
            $user = User::find($comment->user_id);
            $comment['user'] = $user;
            array_push($comments,$comment);
        }
        $arr = [
            'code' => 200,
            'state' => 'true',
            'comments_count' => count(Comment::all()),
            'comments' => $comments,
        ];
        return response()->json($arr);
    });
    Route::post('/register', function (Request $request) {
        $request = json_decode($request->getContent(), true);
        $roles = [
            'name' => 'required|string|max:150',
            'gender' => 'nullable|string',
            'image' => 'nullable|file:mimes:jpg,jpeg,gif,png',
            'serial' => 'required|unique:users,serial',
            'age' => 'required',
        ];
        $validator = Validator::make($request, $roles);
        //$request['role_id'] = 2;
        if ($validator->fails()) {
            $arr = [
                'code' => 302,
                'state' => 'false',
                'message' => $validator->errors(),
            ];
            return response()->json($arr);
        } else {
            if($request['image']){
                $path = $request->file('image')->store('public/media/users/images');
                $url = Storage::url($path);
                $request['image']= $url;
            }
            $user = User::create([
                'name' => $request['name'],
                'gender' => $request['gender'],
                'image' => $request['image'],
                'serial' => $request['serial'],
                'age' => $request['age'],
                'role_id' => 2,
            ]);
            $arr = [
                'code' => 200,
                'state' => 'success',
                'data' => $user,
                'token' => $user->createToken('auth_token')->plainTextToken,
            ];
            return response()->json($arr);
        }
    });
    Route::get('/ads',function(Request $request){
        $ads = Ad::all();
        $arr = [
            'code'=>200,
            'state'=>'success',
            'data'=>$ads
        ];
        return response()->json($arr);
    });
    Route::group(
        ['middleware' => 'auth:sanctum'],
        function () {
            Route::post('logout', function (Request $request) {
                $request->user()->tokens()->delete();
                $arr = [
                    'code' => 200,
                    'state' => true,
                    'data' => 'Logged Out',
                ];
                return response()->json($arr);
            });
            Route::post('/like', function (Request $request) {
                Like::create([
                    'user_id' => $request->user()->id,
                ]);
                $arr = [
                    'code' => 200,
                    'state' => 'true',
                    'likes_count' => count(Like::all()),
                    'likes' => Like::all(),
                ];
                return response()->json($arr);
            });
            Route::post('/comment', function (Request $request) {
                Comment::create([
                    'user_id' => $request->user()->id,
                    'comment' => $request->comment,
                ]);
                $arr = [
                    'code' => 200,
                    'state' => 'true',
                    'comments_count' => count(Comment::all()),
                    'comments' => Comment::all(),
                ];
                return response()->json($arr);
            });
            Route::post('/newad', function (Request $request) {
                if ($request['image']) {
                    $path = $request->file('image')->store('public/media/ads/images');
                    $url = Storage::url($path);
                    $request['image'] = $url;
                }else{
                    $request['image'] = 'https://media.istockphoto.com/id/1072055834/photo/red-stamp-on-a-white-background-temporary.jpg?s=612x612&w=is&k=20&c=pO5CCAaRt-NoKgNsYU-5hHuVi2sxQBZRpIfumWjw0Jk=';
                }
                Ad::create([
                    'ad_link' => $request->ad_link,
                    'image' => $request['image'],
                ]);
                $arr = [
                    'code' => 200,
                    'state' => 'true',
                    'ads_count' => count(Ad::all()),
                    'ads' => Ad::all(),
                ];
                return response()->json($arr);
            });
        }
    );
