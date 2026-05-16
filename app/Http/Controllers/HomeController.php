use App\Models\Menu;
use App\Models\Meja; // Pastikan Model Meja di-import

public function index()
{
    $menus = Menu::all();
    // Ambil HANYA meja yang berstatus 'kosong'
    $mejas = Meja::where('status', 'kosong')->get();

    // Kirim $mejas bersamaan dengan $menus ke halaman home
    return view('home', compact('menus', 'mejas'));
}
