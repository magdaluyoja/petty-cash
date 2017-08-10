<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Response;
class CLoginController extends Controller
{

	public function getLogin(){
		echo "string";
	}
	public function postLogin(Request $request){
		if(Request::ajax()){
			$username =  Request::input('username');
			$password =  Request::input('password');
			$users = DB::table('users')
					->select(DB::raw('*'))
                    ->where([
                    	['username','=',$username],
                    	['password','=',$password]
                    	])
                    ->first();
            echo $users->username;
            echo "<table class='table table-striped'>
					<thead class='thead-default'>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Username</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope='row'>1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope='row'>2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope='row'>3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>";
		}
	}
}
