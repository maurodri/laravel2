@section('content')

        <div class="card">

<div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div> @include('livewire.create') @include('livewire.update') <section>
        <div class="container">
        
            <div class="row"> .@if (session()->has('message')) <div class="alert alert-success"> {{session('message')}} </div> @endif <div class="card">
                    <div class="card-header">
                        <h3> All Students <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal"> Add New Student </button> </h3>
                    </div>
                    <div class="card-body">
                        <table class="table tabl-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody> @foreach ($students as $student) <tr>
                                    <td>{{$student->firstname}}</td>
                                    <td>{{$student->lastname}}</td>
                                    <td>{{$student->email}}</td>
                                    <td>{{$student->phone}}</td>
                                    <td> <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">Edit</button> </td>
                                </tr> @endforeach </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</div>
@endsection
