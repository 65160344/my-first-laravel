use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/myD', function () {
    return view('FolderExam.FileinFolder');
});

Route::post('/myD', function(Request $req){
    $data['myinput'] = $req->input('myinput'); 
    return view('myD', $data);
});