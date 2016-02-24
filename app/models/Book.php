<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
    class Book extends Eloquent
    {	
    	 protected $fillable = array('isbn', 'title','author','publisher');
    }
?>