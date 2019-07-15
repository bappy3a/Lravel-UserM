<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use App\Repositories\User\UserRepository;
use App\Http\Requests;
use App\User;
use DB;
use Auth;
use Carbon\Carbon;
use Session;
use App\Foo;
use View;



class DashboardController extends Controller
{
	
	  /**
     * Display a listing of the __construct.
     *
     * @return \Illuminate\Http\Response
     */
	 private $activities;
	 protected $foo;
	public function __construct(Foo $foo)
	{	
       $this->middleware('auth');	 
	   $this->foo = $foo;
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function index(Request $request){
		if (Auth::user()->hasRole('Admin')) {
			$totaluser = DB::table('users')->count();
			$newuser = DB::table('users')->where('created_at', '>=', Carbon::now()->startOfMonth())->count();
			$todayvisitor = count(DB::table('user_activity')->groupBy('ip_address')->whereDate('created_at', '=', date('Y-m-d'))->get());
			$monthvisitor = count(DB::table('user_activity')->select([DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d') AS `date`"),])->groupBy('ip_address')->groupBy('date')->where('created_at', '>=', Carbon::now()->startOfMonth())->get());			
			$recentuser = DB::table('users')->orderBy('id','DES')->limit(5)->get(); 			
			$graphregister = DB::table('users')->select([DB::raw("DATE_FORMAT(created_at, '%Y-%m') AS `date`,DATE_FORMAT(created_at, '%m') AS `month`"),
			DB::raw('COUNT(id) AS count'),])->groupBy('date')->orderBy('date', 'ASC')->get();
			
			return view('dashboard.dashboard_page',compact('todayvisitor','monthvisitor','totaluser','newuser','recentuser','recentactivity','graphregister')); 
		}
		
		return $this->defaultDashboard();
		
			
		
	}
	
	 private function defaultDashboard(){
		 $id = Auth::id();
         $startDate  =  Carbon::now();
          $endDate =  Carbon::now()->subWeeks(3);
           $endDatetotal =  $startDate->diffInDays($endDate);
			for($x = $endDatetotal; $x>=0; $x--){
			$loopdate = Carbon::now()->subDays($x);			
			$stringdate =   $loopdate ->toDateString();
		   $todayvisitor[$x]['datet'] = $stringdate;
		   $todayvisitor[$x]['countdata'] = DB::table('user_activity')->groupBy('ip_address')->where('user_id',$id)->whereDate('created_at', '=', $stringdate)->count();		
		}	
		return view('dashboard.dashboard_user',compact('todayvisitor')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

	
	
	

}
