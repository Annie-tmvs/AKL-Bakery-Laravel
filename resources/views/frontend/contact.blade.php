@extends('layouts.front')

@section('title')
    Contact Us
@endsection
@section('content')

<div class="container-fluid con2">
    <div class="container py-5">
        <div class="card p-5 mb-3">
           <div class="row ">
               <div class="col-md-3 ">
                    <img src="{{ asset('assets/images/annie.jpg')}}" alt="..." width="250px" class="rounded border">
               </div>
               <div class="col-md-9">
                   <h4>Miss Annie Thammavongsa </h4>
                   <h5>Class : 3cw2</h5>
                   <p><i class="fa fa-phone"></i> : 020 5986xxxx</p>
                   <p><i class="fa-brands fa-facebook-square"></i> : Annie Thammavongsa</p>
                   <p><i class="fa fa-instagram"></i> : an_xx.ts</p>
                   <p><i class="fa fa-envelope"></i> : Annythammavongsa@gmail.com</p>
               </div>
           </div>
        </div>

        <div class="card p-5 mb-3">
           <div class="row">
            <div class="col-md-3 ">
                 <img src="{{ asset('assets/images/koung.jpg')}}" alt="..." width="250px" class="rounded border">
            </div>
            <div class="col-md-9">
                <h4>Miss Phaiphanit Khounnavong </h4>
                <h5>Class : 3cw2</h5>
                <p><i class="fa fa-phone"></i> : 020 9178xxxx</p>
                <p><i class="fa-brands fa-facebook-square"></i> : Phaiphanit Khounnavong</p>
                <p><i class="fa fa-instagram"></i> : kadingkk__</p>
                <p><i class="fa fa-envelope"></i> : phaiphanitknv@gmail.com</p>
            </div>
        </div>
        </div>

        
        <div class="card p-5 mb-5">
            <div class="row">
             <div class="col-md-3 ">
                  <img src="{{ asset('assets/images/la.jpg')}}" alt="..." width="250px" class="rounded border">
             </div>
             <div class="col-md-9">
                 <h4>MR Khonethala Phengdavong</h4>
                 <h5>Class : 3cw2</h5>
                 <p><i class="fa fa-phone"></i> : 020 9353xxxx</p>
                 <p><i class="fa-brands fa-facebook-square"></i> : Khonethala Phengdavong</p>
                 <p><i class="fa fa-instagram"></i> : __iamla.pdv</p>
                 <p><i class="fa fa-envelope"></i> : Khonethalapdv@gmail.com</p>
             </div>
         </div>
         </div>
    </div>
</div>
    
@endsection