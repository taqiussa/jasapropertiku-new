<?php

namespace App\Http\Livewire\User;

use App\Models\IndonesiaCity;
use App\Models\IndonesiaDistrict;
use App\Models\IndonesiaProvince;
use App\Models\IndonesiaVillage;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
class UserEdit extends Component
{
    use WithFileUploads;
    public $name;
    public $birthplace;
    public $birthdate;
    public $address;
    public $province;
    public $city;
    public $cities;
    public $district;
    public $districts;
    public $village;
    public $villages;
    public $gender;
    public $whatsapp;
    public $photo;
    protected $rules = [
        'name' => 'required|string',
        'gender' => 'required',
        'photo' => 'image|mimes:jpg,jpeg,png,svg,gif|max:4096',
        'birthplace' => 'required|string',
        'birthdate' => 'required',
        'address' => 'required|string',
        'province' => 'required',
        'city' => 'required',
        'district' => 'required',
        'village' => 'required',
        'whatsapp' => 'required',
    ];
    public function mount(){
        $this->name = auth()->user()->name;
        $this->birthplace = auth()->user()->birthplace ?? '';
        $this->birthdate = auth()->user()->birthdate ?? gmdate('Y-m-d');
        $this->address = auth()->user()->address ?? '';
        $this->province = auth()->user()->province;
        $this->city = auth()->user()->city;
        $this->district = auth()->user()->district;
        $this->village = auth()->user()->village;
        $this->gender = auth()->user()->gender ?? '';
        $this->whatsapp = auth()->user()->whatsapp ?? '';
        $this->cities = IndonesiaCity::where('code', $this->city)->get();
        $this->districts = IndonesiaDistrict::where('code', $this->district)->get();
        $this->villages = IndonesiaVillage::where('code', $this->village)->get();
    }
    public function updateProfil(User $user){
        if(auth()->user()->photo && empty($this->photo)){
            $this->validate([
                'name' => 'required|string',
                'gender' => 'required',
                'birthplace' => 'required|string',
                'birthdate' => 'required',
                'address' => 'required|string',
                'province' => 'required',
                'city' => 'required',
                'district' => 'required',
                'village' => 'required',
                'whatsapp' => 'required',
            ]);
            $foto = auth()->user()->photo;
        }else{
            $this->validate();
            $foto = $this->photo->store('photos');
            Storage::delete(auth()->user()->photo);
        }    
        $user->find(auth()->user()->id)->update([
            'name' => $this->name,
            'gender' => $this->gender,
            'photo' => $foto,
            'birthplace' => $this->birthplace,
            'birthdate' => $this->birthdate,
            'address' => $this->address,
            'province' => $this->province,
            'city' => $this->city,
            'district' => $this->district,
            'village' => $this->village,
            'whatsapp' => $this->whatsapp,
        ]);
        $this->dispatchBrowserEvent('notyf:success', [
            'type' => 'success',
            'message' => 'Berhasil Ubah Profil'
        ]);
    }
    public function updatedProvince(){
        $this->cities = IndonesiaCity::where('province_code', $this->province)->orderBy('name')->get();
        $this->villages = '';
        $this->districts = '';
    }
    public function updatedCity(){
        $this->districts = IndonesiaDistrict::where('city_code', $this->city)->orderBy('name')->get();
        $this->villages = '';
    }
    public function updatedDistrict(){
        $this->villages = IndonesiaVillage::where('district_code', $this->district)->orderBy('name')->get();
    }
    public function render()
    {
        return view('livewire.user.user-edit',
        [
            'provinces' => IndonesiaProvince::orderBy('name')->get(),
            'cities' => $this->cities,
            'districts' => $this->districts,
            'villages' => $this->villages,
        ]
        );
    }
}
