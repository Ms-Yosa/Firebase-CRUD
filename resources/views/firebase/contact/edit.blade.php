@extends('layouts.app')
@section('content')

     <div class="container">
          <main class="mx-auto m-4">
               
               <div class="row">
                    <a href="#" class="btn btn-sm btn-danger">Back</a>
                    <!-- Student Add Form -->
                    <form action="{{ url ('update contacts/'.$key)}}" method="POST" autocomplete="off">
                       
                         @csrf
                         @method('PUT')

                         <div class="col-md-4">
                              <div class="card">
                                   <div class="card-header bg-dark text-white">
                                        <h4> Student Update Form</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="mb-3">
                                             <label for="first_name" class="form-label">First Name</label>
                                             <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" value=" {{$editdata['first_name']}} " >
                                        </div>
                                        <div class="mb-3">
                                             <label for="last_name" class="form-label">Last Name</label>
                                             <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" value=" {{$editdata['last_name']}} " >
                                        </div>
                                        <div class="mb-3">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email " value=" {{$editdata['email']}} " >
                                        </div>
                                        <div class="mb-3">
                                             <label for="phone" class="form-label">Phone</label>
                                             <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value=" {{$editdata['phone']}} " >
                                        </div>
                                        <div class="card-footer">
                                             <button type="submit" id="createStudentButton" class="btn btn-success btn-block" >Create</button>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </form>
               </div>
          </main>
     </div>

     
<!-- Firebase Configuration -->
     <script>
           const firebaseConfig = {
          apiKey: "AIzaSyBDYTJfTi0Ttrea9WYVGyD9dcYeNLDxqao",
          authDomain: "laravel-firebase-crud-tutorial.firebaseapp.com",
          databaseURL: "https://laravel-firebase-crud-tutorial-default-rtdb.firebaseio.com",
          projectId: "laravel-firebase-crud-tutorial",
          storageBucket: "laravel-firebase-crud-tutorial.appspot.com",
          messagingSenderId: "748624661045",
          appId: "1:748624661045:web:cd26b5b9caa2ae00c83f7c",
          measurementId: "G-WQEHT8TZC7"
          };

          // Initialize Firebase
          const app = initializeApp(firebaseConfig);
          const analytics = getAnalytics(app);
     </script>
@endsection