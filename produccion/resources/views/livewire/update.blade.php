<!-- Modal -->
<div wire:ignore.selt class="modal fade" id="updateStudentModal" tabindex="-1" aria-labelledby="updateStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateStudentModal">Edit Student</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form> <input type="hidden" name="id" wire:model="ids" />
                    <div class="form-group"> <label for="firtname">First Name</label> <input type="text" name="firstname" class="form-control" wire:model="firstname" /> @error('firstname') <span class="text-danger">{{$message}}</span> @enderror </div>
                    <div class="form-group"> <label for="lastname">Last Name</label> <input type="text" name="lastname" class="form-control" wire:model="lastname" /> @error('lastname') <span class="text-danger">{{$message}}</span> @enderror </div>
                    <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" class="form-control" wire:model="email" /> @error('email') <span class="text-danger">{{$message}}</span> @enderror </div>
                    <div class="form-group"> <label for="phone">Phone</label> <input type="text" name="phone" class="form-control" wire:model="phone" /> @error('phone') <span class="text-danger">{{$message}}</span> @enderror </div>
                </form>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btnprimary" wire:click.prevent="edit">Update Student</button> </div>
        </div>
    </div>
</div>