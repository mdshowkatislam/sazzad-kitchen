<?php

namespace App\Http\Livewire\Admin;

use App\Models\setting;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminSettingComponent extends Component
{
    use WithFileUploads;
     public $description;
     public $short_des;
     public $logo;
     public $photo;
     public $newlogo;
     public $newphoto;


    public $email;
    public $phone;
    public $phone2;
    public $address;
    public $map;
    public $twiter;
    public $facebook;
    public $pinterest;
    public $instagram;
    public $youtube;

    public function mount(){
        $setting = setting::find(1);
        if($setting)
        {   $this->description=$setting->description;
            $this->short_des=$setting->short_des;
             $this->logo=$setting->logo;
             $this->photo=$setting->photo;
             $this->newlogo=$setting->newlogo;
             $this->newphoto=$setting->newphoto;

            $this->email = $setting->email;
            $this->phone = $setting->phone;
            $this->phone2 = $setting->phone2;
            $this->address = $setting->address;
            $this->map = $setting->map;
            $this->twiter = $setting->twiter;
            $this->facebook = $setting->facebook;
            $this->pinterest = $setting->pinterest;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
        }
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',
        ]);
        if($this->newlogo)
        {
            $this->validateOnly($fields,[
                'newlogo' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        }
        if($this->newphoto)
        {
            $this->validateOnly($fields,[
                'newphoto' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        }
    }

    public function saveSettings()
    {
        $this->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'phone2' => 'required',
            'address' => 'required',


        ]);
        if($this->newlogo)
        {
            $this->validate([
                'newlogo' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        }
        if($this->newphoto)
        {
            $this->validate([
                'newphoto' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        }

        $setting = Setting::find(1);
        if(!$setting)
        {
            $setting = new Setting();
        }
        $setting->description=$this->description;
        $setting->short_des=$this->short_des;

        if($this->newlogo)
        {

            if(file_exists(public_path('images/slogo/'.$setting->newlogo))){
                unlink('images/slogo'.'/'.$setting->logo);
            }

            $logoName = $this->newlogo->getClientOriginalName();
              $this->newlogo->storeAs('images/slogo',$logoName);

            $setting->logo = $logoName;
        }
        if($this->newphoto)
        {

            if(file_exists(public_path('images/slogo/'.$setting->newphoto))){
                unlink('images/slogo'.'/'.$setting->photo);
            }

            $photoName = $this->newphoto->getClientOriginalName();
              $this->newphoto->storeAs('images/slogo',$photoName);

            $setting->photo = $photoName;
        }



        $setting->email = $this->email;
        $setting->phone = $this->phone;
        $setting->phone2 = $this->phone2;
        $setting->address = $this->address;
        $setting->map = $this->map;
        $setting->twiter = $this->twiter;
        $setting->facebook = $this->facebook;
        $setting->pinterest = $this->pinterest;
        $setting->instagram = $this->instagram;
        $setting->youtube = $this->youtube;
        $setting->save();
        session()->flash('message', 'Setting has been save successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-setting-component')->layout('layouts.base');
    }
}
