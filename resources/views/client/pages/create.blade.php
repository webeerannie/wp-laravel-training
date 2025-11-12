@extends('client.layouts.main')

@section('contents')
   <div class="container">
       <div class="grid">
           <form action="{{ route('client.save') }}" method="POST">
               @csrf
               <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Name</label>
                   <input type="text"
                          class="form-control"
                          id="formGroupExampleInput"
                          placeholder="Enter name"
                          name="name">
               </div>
               <div class="mb-3">
                   <label for="formGroupExampleInput2" class="form-label">Contact Number</label>
                   <input type="text"
                          class="form-control"
                          id="formGroupExampleInput2"
                          placeholder="Enter contact number"
                          name="contact_number">
               </div>
               <div class="mb-3">
                   <button type="submit" class="btn btn-primary">Save</button>
               </div>
           </form>
       </div>
   </div>
@endsection
