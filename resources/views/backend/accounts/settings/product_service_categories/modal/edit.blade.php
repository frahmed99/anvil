<div class="modal" id="editCategoryModal{{ $category->id }}"
    tabindex="-1" role="dialog" aria-labelledby="modal-normal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title"><small>EDIT</small> CATEGORY</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="{{ route('product_service_category.update') }}"
                        method="POST">
                        @csrf
                        <input type="hidden" name="id"
                            value="{{ $category->id }}">
                        <div class="mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('edit_category_name') is-invalid @enderror"
                                    id="edit_category_name"
                                    name="edit_category_name"
                                    value="{{ $category->name }}">
                                @error('edit_category_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="form-label"
                                    for="edit_category_name">Category Name</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-floating">
                                <select class="form-select @error('edit_category_select') is-invalid @enderror"
                                    id="edit_category_select"
                                    name="edit_category_select" required>
                                    <option
                                        @if (old('edit_category_select', $category->type) == 'Product') selected @endif>
                                        Product
                                    </option>
                                    <option
                                        @if (old('edit_category_select', $category->type) == 'Services') selected @endif>
                                        Services
                                    </option>
                                    <option
                                        @if (old('edit_category_select', $category->type) == 'Income') selected @endif>
                                        Income</option>
                                    <option
                                        @if (old('edit_category_select', $category->type) == 'Expense') selected @endif>
                                        Expense
                                    </option>
                                </select>
                                @error('edit_category_select')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="form-label"
                                    for="edit_category_select">Category Type</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="form-floating">
                                <div class="input-group" id="editColorPicker">
                                    <input type="text" class="form-control input-lg @error('edit_category_color') is-invalid @enderror"
                                        value="{{ $category->color }}"
                                        id="edit_category_color"
                                        name="edit_category_color" required>
                                    <span class="input-group-append">
                                        <span
                                            class="input-group-text colorpicker-input-addon"><i></i></span>
                                    </span>
                                    @error('edit_category_color')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-alt-secondary"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <input type="submit" class="btn btn-alt-primary" value="Save">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
