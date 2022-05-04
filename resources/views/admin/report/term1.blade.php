@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card  border-dark">
      <div class="card-header rounded border-dark">
      
        <div class="float-start">
            
        <div class="nav-profile-image">
             
             <img src="{{ asset('/images/logo/lms.png') }} "width="50px" height=" 50px" class="lms"/>
     
               <!--change to offline or busy as needed-->
             </div>
          <h4>CP/GP/Galaboda T.V</h4>
          
</div>
<div class="float-end">
<h4>Term 1</h4>
</br>
<h5> Over view of student result </h5>

</div>
</span>
</div>
        <br>
     <table class="table-bordered" style="text-align:center">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                      
                    
                        <th>Subject</th>
                        <th>Grade</th>
                        <th>No of Students   <br>      A(75-100)</th>
                        <th>No of Students <br>B(65-74)</th>
                        <th> No of Students <br>C(55-64)</th>
                        <th> No of Students <br>S(35-54)</th>
                        <th>No of Students<br> W(55-64)</th>
                    </tr>
                    </thead>
                     <tbody>
                        <tr>
                            <td><h5>Religion</h5></td>
                             <td>7B</td>
                            <td>10</td>
                            <td>12</td>
                            <td>15</td>
                            <td>06</td>
                            <td>02</td>
                        </tr>

                        <tr>
                            <td><h5>Maths</h5></td>
                             <td>9A</td>
                            <td>06</td>
                            <td>08</td>
                            <td>15</td>
                            <td>03</td>
                            <td>09</td>
                        </tr>

                        <tr>
                            <td><h5>Science</h5></td>
                             <td>7B</td>
                            <td>10</td>
                            <td>12</td>
                            <td>15</td>
                            <td>06</td>
                            <td>02</td>
                        </tr>

                        <tr>
                            <td><h5>Tamil</h5></td>
                             <td>9B</td>
                            <td>10</td>
                            <td>09</td>
                            <td>07</td>
                            <td>06</td>
                            <td>00</td>
                        </tr>
                        <tr>
                            <td><h5>Ict</h5></td>
                             <td>9B</td>
                            <td>15</td>
                            <td>09</td>
                            <td>07</td>
                            <td>04</td>
                            <td>2</td>
                        </tr>
                </tbody>
                
            </table>
            
      </div>
      </div>
      </div>  


               @endsection
