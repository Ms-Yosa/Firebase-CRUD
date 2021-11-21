@extends('layouts.app')
@section('content')

     <div class="container">
          <main class="mx-auto m-4">
               
               <div class="row">
                    <div class="col-md-8">
                         <div class="card">
                              <div class="card-header bg-dark text-white">
                                   <h4> Contact List</h4>
                              </div>
                              <div class="card-body">
                                   <table class="table table-bordered border-primary">
                                        <thead>
                                             <tr>
                                                  <th>#</th>
                                                  <th>First Name</th>
                                                  <th>Last Name</th>
                                                  <th>Email</th>
                                                  <th>Phone</th>
                                                  <th>Edit</th>
                                                  <th>Delete</th>
                                             </tr>
                                        </thead>
                                        <tbody id="StudentData">
                                             @php $i=1; @endphp
                                             @forelse($contacts as $key => $item)
                                             <tr>
                                                  <td>{{$i}}</td>
                                                  <td>{{ $item['first_name']}}</td>
                                                  <td>{{ $item['last_name']}}</td>
                                                  <td>{{ $item['email']}}</td>
                                                  <td>{{ $item['phone']}}</td>
                                                  <td><a href="{{ url ('edit contacts/'.$key)}}" class="btn btn-sm btn-success">Edit</a></td>
                                                  <td>
                                                       <form action="{{ url ('delete contacts/'.$key)}}" method="POST">
                                                        @method('DELETE')
                                                          @csrf  
                                                        
                                                        <button class="badge bg-danger" type="submit"> <a  onclick="return confirm('Are you sure to want to delete it?')">Delete</a></button>  
                                                      </form> 
                                                  </td>
                                             </tr>
                                             @empty
                                             <tr>
                                                  <td colspan="7">No Record Found</td>
                                             </tr>
                                             @endforelse
                                        </tbody>

                                   </table>
                              </div>
                         </div>
                    </div>

                    <!-- Student Add Form -->
                    <form action="{{ route('add-contacts')}}" method="POST" autocomplete="off">
                         @if (Session::get('success'))
                              <div class="alert alert-success">
                              {{ Session::get('success') }}
                              </div>
                         @endif
                         @if (Session::get('fail'))
                              <div class="alert alert-danger">
                              {{ Session::get('fail') }}
                              </div>
                         @endif
                         @csrf
                         <div class="col-md-4">
                              <div class="card">
                                   <div class="card-header bg-dark text-white">
                                        <h4> Student Add Form</h4>
                                   </div>
                                   <div class="card-body">
                                        <div class="mb-3">
                                             <label for="first_name" class="form-label">First Name</label>
                                             <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
                                        </div>
                                        <div class="mb-3">
                                             <label for="last_name" class="form-label">Last Name</label>
                                             <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                                        </div>
                                        <div class="mb-3">
                                             <label for="email" class="form-label">Email</label>
                                             <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email ">
                                        </div>
                                        <div class="mb-3">
                                             <label for="phone" class="form-label">Phone</label>
                                             <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone">
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