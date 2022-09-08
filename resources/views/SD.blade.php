@extends('layouts.navbar2')

{{-- Content Start --}}
@section('content')
   <h1 class="SD">Students Data</h1>
   <a href="/">
     <i class='bx bx-home w3-jumbo' ></i>
   </a>
   <div class="data">
      <table style="width:100%">
         <tr>
           <th>No</th>
           <th>Picture</th> 
           <th>Name</th>
           <th>Gender</th>
         </tr>
         <tr>
           <td>1</td>
           <td>ryan.jpg</td>
           <td>Muhammad Ryan Handhika Susanto</td>
           <td>man</td>
         </tr>
       </table>
   </div>
@endsection
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="asset/css/SD.css">
{{-- Link End --}}
