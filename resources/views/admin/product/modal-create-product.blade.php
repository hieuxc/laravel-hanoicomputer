<div id="modal_create_product" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('products.create')}}" id="form_create_product" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Chọn loại sản phẩm để thêm</label>
                        <select name="product_type_id" class="form-control select2bs4">
                            @foreach ($list_product_type as $product_type)
                            <option value="{{$product_type->id}}">{{$product_type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="form_create_product" class="btn btn-success">Add</button>
            </div>
        </div>
    </div>
</div>