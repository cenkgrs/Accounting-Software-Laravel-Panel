<div class="box">
    <div class="box-header" data-box="insert">
        Insert Product
    </div>
    <div class="box-body" id="insert-body">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <form action="" method="POST">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-2 col-xs-12">
                            <label for="code">Product Code</label>
                            <input name="code" type="text" id="code" class="form-control">
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="name">Product Name</label>
                            <input name="name" type="text" id="name" class="form-control">
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="0" selected>All</option>
                                @foreach(range(0, 10) as $i)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-12">
                            <label for="firm">Firm</label>
                            <select name="firm_id" id="firm" class="form-control">
                                <option value="0">All</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-12 mt2">
                            <button type="submit" class="btn btn-primary btn-block pull-right">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</div>
