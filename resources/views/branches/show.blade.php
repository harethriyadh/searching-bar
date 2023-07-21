@extends('layouts.app')

@section('content')

  <div dir="left" class="container">

    @if ( $message = Session::get('seccess') )

        <div class="alert alert-primary container">
          {{$message}}
        </div>
    @endif

    




    @foreach ( $person as $item )
      
    
    <table class="table" style="text-align:center;">
      <thead class="thead-light">
        <tr>
          <th rowspan="2"> <p  style="transform:Translate(0px, 9px) ;" >جدول متابعة تنظيف القاطع</p> </th>
        </tr>

      </thead>
    </table>
    <table class="table text-center">

      <thead>
        <tr>
          <th>ت</th>
          <th>الفقرة</th>
          @if($item = $item)

            <th scope="row">{{$item -> theDate }}</th>

          @endif
        </tr>
      </thead>
      <tbody>
         <tr>

          @php
            
              if ( $id = 1 )
              {
          @endphp
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">باب الجناح</th>
          @php
              } 

          @endphp
        

            <td scope="col">{{ $item -> radiOne }}</td> 

        </tr>
        <tr>

          @php
            
              if ( $id = 1 )
              {
          @endphp
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">ارضية الجناح</th>
          @php
              } 
          @endphp 


            <td scope="col">{{ $item -> radioTwo }}</td>  

        </tr>
        <tr>

          @php
            
              if ( $id = 1 )
              {
          @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">ترتيب مكان المكواة</th>
          @php
              } 
          @endphp 

            <td scope="col">{{ $item -> radioThree}}</td>

        </tr>
        <tr>

          @php
            
              if ( $id = 1 )
              {
                @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">تفريغ حاوية النفايات</th>
                @php
              } 

          @endphp 
  

            <td scope="col">{{ $item -> radioFour}}</td>
             
        </tr>
        <tr>

          @php
            
              if ( $id = 1 )
              {
                @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">خزانة الاحذية</th>
                @php
              } 

          @endphp 

            <td scope="col">{{ $item -> radioFive}}</td> 

        </tr>
        <tr>

          @php
            
              if ( $id = 1 )
              {
                @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">الصحيات</th>
                @php
              } 

          @endphp

            <td scope="col">{{ $item -> radioSix}}</td> 
        </tr>
        <tr>
            @php
            
              if ( $id = 1 )
              {
                @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">سلم الطابق الاول مع صحن الدرج</th>
                @php
              } 

            @endphp
 
            <td scope="col">{{ $item -> radioseven}}</td> 

        </tr>
        <tr>

          @php
            
            if ( $id = 1 )
            {
              @endphp 
              <th scope="row">{{ $item -> id }}</th>
              <th scope="row">براد الماء</th>
              @php
            } 

          @endphp  

            <td scope="col">{{ $item -> radioIeght}}</td> 
 
        </tr>
        <tr>

          @php
            
              if ( $id = 1 )
              {
                @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">تنظيف فلتر المكنسة</th>
                @php
              } 

          @endphp
 

            <td scope="col">{{ $item -> radioNine}}</td> 
 
        </tr>
        <tc>

          @php

          if ( $id = 1 )
              {
                @endphp 
                <th scope="row">{{ $item -> id }}</th>
                <th scope="row">تعطير الجناح</th>
                @php
              } 

          @endphp
           
            <td scope="col">{{ $item -> radioTen}}</td> 
             
        </tc>
      </tbody>
    </table>
 

    @endforeach
    
  </div>


@endsection
