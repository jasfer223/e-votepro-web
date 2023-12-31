<div class="modal fade" id="logout-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div>
                    Are you sure you want to logout?
                </div>

                <div class="d-flex justify-content-end">
                    {{-- <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                        Close
                    </button> --}}
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Confirm
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
