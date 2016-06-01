
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Matematika extends Controller
{
	public function getIndex()
	{
		return view('mtk.operator');
	}
	public function getTambah($a,$b)
	{
		$res = $a+$b;
		return view('mtk.tambah',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}
	public function getKurang($a,$b)
	{
		$res = $a-$b;
		return view('mtk.kurang',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}
	public function getBagi($a,$b) {
		$res = @($a/$b)+0;
		return view('mtk.bagi',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}
	public function getKali($a,$b) {
		$res = $a*$b;
		return view('mtk.kali',[
			'a' => $a,
			'b' => $b,
			'res' => $res
		]);
	}
}
