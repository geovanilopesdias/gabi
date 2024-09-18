<?php

include 'classroom_model.php';
include 'checkers.php';

class UserModel
{
    private $name;
    private $cpf;
    private $phone;
    private $cr;
    private $debt;
    private $outdated;

    function __construct($n, $cpf, $p, Classroom $cr){
        set_name($n);
        set_cpf($cpf);
        set_phone($p);
        $this->cr = $cr;
        $this->debt = 0;
        $this->outdated = false;
    }
    
    function set_name($name){
        if(is_name_valid($name))
            $this->name = $name;
        else
            throw new Exception("Nome inválido");
        
    }
    function get_name(){
        return $this->name;
    }
    
    function set_cpf($cpf){
        if(is_cpf_valid($cpf)) 
            $this->cpf = $cpf;
        else
            throw new Exception("CPF inválido");
    }
    function get_cpf(){
        return $this->cpf;
    }
    
    function set_phone($phone){
        if(is_phone_valid($phone))
            $this->phone = $phone;
        else
            throw new Exception("Telefone inválido");
    }
    
    function get_phone(){
        return $this->phone;
    }
    
    function set_cr(Classroom $cr){
        $this->cr = $cr;
    }
    function get_cr(): Classroom {
        return $this->cr;
    }
    function set_debt($debt){
        $this->debt = $debt;
    }
    
    function get_debt(){
        return $this->debt;
    }
    
    function set_outdated($outdated){
        $this->outdated = $outdated;
    }
    
    function is_outdated(){
        return $this->outdated;
    }
    