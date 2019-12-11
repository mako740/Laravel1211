<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index', ['message'=>'Hello!']);
    }
}

//3-33
/* class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@yamada'],
            ['name'=>'鈴木さちこ', 'mail'=>'sachico@yamada']
        ];
        return view('hello.index', ['data'=>$data]);
    }
} */

//3-
/* class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }
    
} */


//3-22
/* class HelloController extends Controller
{
    public function index()
    {
        $data = ['one','two','three','four','five'];
        return view('hello.index', ['data'=>$data]);
    }
    
} */


/* //3-20
class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index');
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }
} */

/* <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

//3-18
class HelloController extends Controller
{
    public function index()
    {
        return view('hello.index', ['msg'=>'']);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }
} */

//3-15
/* class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'お名前を入力して下さい',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg'=>'こんにちは、'. $msg .'さん',
        ];
        return view('hello.index', $data);
    }
} */

//2-15
/* class HelloContoroller extends Controller
{
    public function index(Request $request, Response $response) {

    $html = <<<EOF
    <html>
    <head>
    <title>Hello/Index</title>
    <style>
        body {font-size:16pt; color:#999; }
        h1 { font-size:100pt; text-align:right; color:#fafafa;
            margin:-50px 0px -120px 0px; }
    </style>
    </head>
    
    <body>
            <h1>Hello</h1>
            <h3>Request</h3>
            <pre>{$request}</pre>
            <h3>Response</h3>
            <pre>{$response}</pre>
    </body>
    </html>
    EOF;
        
            $response->setContent($html);
            return $response;
    }

} */

/* //3-3
class HelloContoroller extends Controller
{
    public function index() {

    return view('hello.index');
    }
} */

//3-6
/* class HelloContor oller extends Controller
{
    public function index() {

        $data = ['msg'=>'これはコントローラーから渡されたメッセージです'];
        return view('hello.index', $data);
    }
}  */

//3-8
/* class HelloContoroller extends Controller
{
    public function index($id='zero') {

        $data = [
            'msg'=>'これはコントローラーから渡されたメッセージです',
            'id'=>$id
        ];
        return view('hello.index', $data);
    }
}  */

//3-13
/* class HelloContoroller extends Controller
{
public function index()
{
    $data = [
        'msg'=>'これはBladeを利用したサンプルです',
    ];
    return view('hello.index', $data);
    }
} */

