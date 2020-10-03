<div class="box">
    <div class="box-header">
        Filter
    </div>
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <form action="" method="POST">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-2 col-xs-12">
                        <label for="code">ID</label>
                        <input name="id" type="text" id="id" class="form-control">
                    </div>
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
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-xs-12">
                        <label for="firm">Firm</label>
                        <select name="firm_id" id="firm" class="form-control">
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-xs-12 mt1">
                        <button type="submit" class="btn btn-primary btn-block">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
