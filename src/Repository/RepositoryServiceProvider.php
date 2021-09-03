<?php 

namespace VigneshAjay\TestPackage\Repository;

use VigneshAjay\TestPackage\Repository\NotesInterface;
use VigneshAjay\TestPackage\Repository\NotesRepository;
use Illuminate\Support\ServiceProvider; 

/** 
* Class RepositoryServiceProvider 
* @package App\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider 
{ 
   /** 
    * Register services. 
    * 
    * @return void  
    */ 
   public function register() 
   { 
       $this->app->bind(NotesInterface::class, NotesRepository::class);
   }
}