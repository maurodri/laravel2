<!-- Modal -->
<div wire:ignore.selt class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStudentModal">Add New Student</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="firtname">First Name</label>
                        <input type="text" name="firstname" class="form-control" wire:model="firstname" />
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" class="form-control" wire:model="lastname" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" wire:model="email" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" class="form-control" wire:model="phone" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" wire:click.prevent="store()">Add Student</button>
            </div>
        </div>
    </div>
</div>