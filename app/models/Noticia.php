<?php


class Noticia extends Eloquent{

    protected  $table = 'news';
    
    
   /* public function payments(){
        return $this->hasMany('Payment', 'employee_id');
        
    }
    
    public function job_records(){
        return $this->hasMany('JobRecord', 'employee_id');
        
    }
    
     public function jobs(){
        return $this->belongsTo('Job', 'job_id');
        
    }
    
    public function contract_types(){
        return $this->belongsTo('ContractType', 'contract_type_id');
        
    }*/
}