<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

// admin management
class UserController extends Controller{
    public function manageUser(){
        if(auth()->user()->is_admin){
            return view('dashboard.user.index', [
                'user' => User::all(),
            ]);
        } else{
            abort('403');
        } // Destroy User
    } public function destroy(User $user){
        if($user->is_admin === 1){
            return back()->with('GagalHapus', 'Role Admin hanya bisa dihapus didatabase!');
        } else{
            User::destroy($user->id);
            return back()->with('BerasilHapus', 'Data user berhasil dihapus!');
        } // Tambah User Baru
    } public function addUser(){
        if(auth()->user()->is_admin){
            return view('dashboard.user.add', [
                'user' => User::all()
            ]);
        } else{ abort('403');}
    } public function newUser(Request $request){
        $val = $request->validate([
            'name' => 'required|min:4|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255',
            'is_admin' => 'required',
            'website' => 'required',
        ]);
        $val['password'] = bcrypt($val['password']);
        User::create($val);
        $request->session()->flash('Adduser', 'Tambah User Berhasil!!');
        return redirect('/manageUser');
    } // User Edit
    public function userEdit(User $user){
        return view('dashboard.user.edit', [
            'user' => $user
        ]); // ganti Role User
    } public function editUser(Request $request, $id){
        $validUser = $request->validate([
            'is_admin' => 'required',
            'is_tokes' => 'nullable'
        ]);
        User::find($id)->update($validUser);
        return redirect('/manageUser');
    }
    // Update Profile
    public function profUpdate(Request $request){
        $attr = $request->validate([
            'name' => ['required', 'min:4', 'max:224',
                'unique:users,name,' . auth()->id()
            ], 'email' => ['required', 'email:dns',
                    'unique:users,email,' . auth()->id()
            ], 'pekerjaan' => ['max:100'], 'alamat' => ['max:1000'], 'tentang' => ['max:1000'],
            'phone' => ['max:13', 'unique:users,phone,' . auth()->id()], 'mobile' => ['max:13',
                'unique:users,mobile,' . auth()->id()], 'website' => ['max:50', 'unique:users,website,' . auth()->id()
            ], 'github' => ['max:100','unique:users,github,' . auth()->id()
            ], 'twitter' => ['unique:users,twitter,' . auth()->id()
            ], 'instagram' => ['unique:users,instagram,' . auth()->id()
            ], 'facebook' => ['unique:users,facebook,' . auth()->id()
            ], 'image' => ['image', 'file', 'max:1024',]
        ]); 
        if($request->file('image')){
            $attr['image'] = $request->file('image')->store('prof');
        } auth()->user()->update($attr);
        return redirect('/profile')->with('pesan', 'Profile telah berhasil di update');
    }
}
