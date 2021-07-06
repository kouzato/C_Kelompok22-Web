@extends('backend.layouts.template')
@section('content')

<!-- start: Content -->
<div id="content">
    <div class="panel box-shadow-none content-header">
         <div class="panel-body">
           <div class="col-md-12">
               <h3 class="animated fadeInLeft">List Dokter</h3>
               <p class="animated fadeInDown">
                 Option <span class="fa-angle-right fa"></span>List Dokter
               </p>
           </div>
         </div>
     </div>

   <div class="col-md-12 top-20 padding-0">
     <div class="col-md-12">
       <div class="panel">
         <div class="panel-body">
         <div class="col-md-12 padding-0" style="padding-bottom:20px;">
           <div class="col-md-6" style="padding-left:10px;">
               <input type="checkbox" class="icheck pull-left" name="checkbox1"/>
               <select>
                   <option>Delete</option>
                   <option>Ignore</option>
                   <option>Cancel</option>
               </select>
           </div>
           <div class="col-md-6">
                <div class="col-lg-12">
                   <div class="input-group">
                     <input type="text" class="form-control" aria-label="...">
                     <div class="input-group-btn">
                       <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search<span class="caret"></span></button>
                       <ul class="dropdown-menu dropdown-menu-right">
                         <li><a href="#">Action</a></li>
                         <li><a href="#">Another action</a></li>
                         <li><a href="#">Something else here</a></li>
                         <li role="separator" class="divider"></li>
                         <li><a href="#">Separated link</a></li>
                       </ul>
                     </div><!-- /btn-group -->
                   </div><!-- /input-group -->
                 </div><!-- /.col-lg-6 -->
           </div>
        </div>
         <div class="responsive-table">

           <table class="table table-striped table-bordered" width="100%" cellspacing="0">
           <thead>
             <tr>
               <th><input type="checkbox" class="icheck" name="checkbox1" /></th>
               <th>Name</th>
               <th>Position</th>
               <th>Office</th>
               <th>Age</th>
               <th>Start date</th>
               <th>Salary</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Tiger Nixon</td>
               <td>System Architect</td>
               <td>Edinburgh</td>
               <td>61</td>
               <td>2011/04/25</td>
               <td>$320,800</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Garrett Winters</td>
               <td>Accountant</td>
               <td>Tokyo</td>
               <td>63</td>
               <td>2011/07/25</td>
               <td>$170,750</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Ashton Cox</td>
               <td>Junior Technical Author</td>
               <td>San Francisco</td>
               <td>66</td>
               <td>2009/01/12</td>
               <td>$86,000</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Cedric Kelly</td>
               <td>Senior Javascript Developer</td>
               <td>Edinburgh</td>
               <td>22</td>
               <td>2012/03/29</td>
               <td>$433,060</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Airi Satou</td>
               <td>Accountant</td>
               <td>Tokyo</td>
               <td>33</td>
               <td>2008/11/28</td>
               <td>$162,700</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Brielle Williamson</td>
               <td>Integration Specialist</td>
               <td>New York</td>
               <td>61</td>
               <td>2012/12/02</td>
               <td>$372,000</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Herrod Chandler</td>
               <td>Sales Assistant</td>
               <td>San Francisco</td>
               <td>59</td>
               <td>2012/08/06</td>
               <td>$137,500</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Rhona Davidson</td>
               <td>Integration Specialist</td>
               <td>Tokyo</td>
               <td>55</td>
               <td>2010/10/14</td>
               <td>$327,900</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Colleen Hurst</td>
               <td>Javascript Developer</td>
               <td>San Francisco</td>
               <td>39</td>
               <td>2009/09/15</td>
               <td>$205,500</td>
             </tr>
             <tr>
               <td><input type="checkbox" class="icheck" name="checkbox1" /></td>
               <td>Sonya Frost</td>
               <td>Software Engineer</td>
               <td>Edinburgh</td>
               <td>23</td>
               <td>2008/12/13</td>
               <td>$103,600</td>
             </tr>
           </tbody>
         </table>
         </div>
         <div class="col-md-6" style="padding-top:20px;">
           <span>showing 0-10 of 30 items</span>
         </div>
         <div class="col-md-6">
               <ul class="pagination pull-right">
                 <li>
                   <a href="#" aria-label="Previous">
                     <span aria-hidden="true">&laquo;</span>
                   </a>
                 </li>
                 <li class="active"><a href="#">1</a></li>
                 <li><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a href="#">4</a></li>
                 <li><a href="#">5</a></li>
                 <li>
                   <a href="#" aria-label="Next">
                     <span aria-hidden="true">&raquo;</span>
                   </a>
                 </li>
               </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
 </div>
 <!-- end: content -->

 @endsection
