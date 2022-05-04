@extends('layouts.admin.master')
@section('title','index')
@section('content')
<div class="row">
  <div class="col-12 text-dark">
    <div class="card  border-dark">
      <div class="card-header rounded border-dark">
      
        <div class="float-start">
            
        
          <h4>CP/GP/Galaboda T.V</h4>
          <h4>Grade: 6A</h4>
</br>
<h5> Students Report</h5>
          
</div>

</div>
        <br>
     <table class="table-bordered" style="text-align:center">
                <thead class="thead-dark">
                    <tr style="text-align:center">
                      
                    
                        <th>Student Name</th>
                        <th>Maths</th>
                        <th>Religion</th>
                        <th>Science</th>
                        <th> Ict</th>
                        <th> History</th>
                        <th>Tamil</th>
                    </tr>
                    </thead>
                     <tbody>
                        <tr>
                            <td><h5>M.Punith</h5></td>
                             <td>98</td>
                            <td>75</td>
                            <td>36</td>
                            <td>78</td>
                            <td>59</td>
                            <td>74</td>
                        </tr>

                        <tr>
                            <td><h5>P.Dharshini</h5></td>
                             <td>98</td>
                            <td>65</td>
                            <td>45</td>
                            <td>89</td>
                            <td>98</td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td><h5>K.Dhakshith</h5></td>
                             <td>86</td>
                            <td>36</td>
                            <td>96</td>
                            <td>79</td>
                            <td>95</td>
                            <td>96</td>
                        </tr>

                        
                </tbody>
                
            </table>
            
      </div>
      </div>
      </div>  


               @endsection
