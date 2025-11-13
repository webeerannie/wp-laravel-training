@extends('client.layouts.main')

@section('contents')
   <div class="container">
       <div class="grid">
           <form action="{{ route('client.update', ['id' => $client->id]) }}" method="POST">
               @csrf
               @method('PUT')
               <div class="mb-3">
                   <label for="formGroupExampleInput" class="form-label">Name</label>
                   <input type="text"
                          class="form-control"
                          id="formGroupExampleInput"
                          placeholder="Enter name"
                          value="{{ $client->name }}"
                          name="name">
               </div>
               <div class="mb-3">
                   <label for="formGroupExampleInput2" class="form-label">Contact Number</label>
                   <input type="text"
                          class="form-control"
                          id="formGroupExampleInput2"
                          placeholder="Enter contact number"
                          value="{{ $client->contact_number }}"
                          name="contact_number">
               </div>
               <div class="mb-3">
                   <button type="submit" class="btn btn-primary">Save</button>
               </div>
           </form>
       </div>
   </div>
@endsection
