<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                        Add New Particular
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="particular">Particular</label>
                            <input type="text" name="particular" class="form-control" id="particular" placeholder="Particular">
                            <small id="particulaHelp" class="form-text text-muted">Just a short description.</small>
                        </div>
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount">
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type1" name="debit" class="custom-control-input">
                            <label class="custom-control-label" for="debit">Debit</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="type2" name="credit" class="custom-control-input">
                            <label class="custom-control-label" for="credit">Credit</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>