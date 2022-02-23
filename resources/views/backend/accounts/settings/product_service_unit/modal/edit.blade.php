<div class="modal" id="editUnitModal{{ $unit->id }}" tabindex="-1"
    role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><small>EDIT</small> UNIT</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form
                        action="{{ route('product_service_category.update') }}"
                        method="POST">
                        @csrf
                        <input type="hidden" name="id"
                            value="{{ $unit->id }}">
                        <div class="mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control"
                                    id="edit_category_name"
                                    name="edit_category_name"
                                    value="{{ $unit->name }}">
                                <label class="form-label"
                                    for="edit_category_name">Unit Name</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <input type="submit" class="btn btn-alt-primary"
                        value="Save">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
