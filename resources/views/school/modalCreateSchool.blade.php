<div class="modal fade" id="modalCreateSchool" role="dialog" aria-labelledby="modalCreateSchoolLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateSchoolLabel">Create School</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formCreateSchool" method="POST" action="{{ route('school-store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="schoolname">School Name</label>
                        <input type="text" class="form-control" id="schoolname" name="schoolname" placeholder="Enter School Name">
                    </div>
                    <div class="form-group">
                        <label for="schooladdress">School Address</label>
                        <input type="text" class="form-control" id="schooladdress" name="schooladdress" placeholder="Enter School Address">
                    </div>
                    <div class="form-group">
                        <label for="schoolcity">School City</label>
                        <input type="text" class="form-control" id="schoolcity" name="schoolcity" placeholder="Enter School City">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--<form>--}}
{{--    {{ csrf_field() }}--}}
{{-- <div class="modal" tabindex="-1" id="modalCreateSchool">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div> --}}
{{--</form>--}}


