@extends('layout.indexDefault')
@section('title','Memorial Library')
@section('body-class','home_page')
@section('main')

      @include('user.home.slideShow')    
      @include('user.home.aboutHome')
      @include('user.home.libraryHome')    
      @include('user.home.booksHome') 
      @include('user.home.contactHome')     
   
@endsection