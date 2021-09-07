<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected  $table ='my_table';

    protected $primaryKey='subject_id';

    public function getName($value){
        $this->attributes['name'] = strtolower($value);
    }

    public function getUserBasic($value){
        $fullnmae =$this->first_name.' '.$this->lastname;
        $email =$this->email;
        $propic =$this->pic;

        return [
            'name'=>$fullnmae,
            'email'=>$email,
            'pro'=>$propic
        ];
    }
}
