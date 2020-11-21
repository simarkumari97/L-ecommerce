@extends('layout')
@section('content')

<p class="text-2xl text-center p-3 inline-block">View Cart</p>

<style>


.card {
    margin-bottom: 1.5rem
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #c8ced3;
    border-radius: .25rem
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: #f0f3f5;
    border-bottom: 1px solid #c8ced3
}

.card-body {
    flex: 1 1 auto;
    padding: 1.25rem
}

.form-control:focus {
    color: #5c6873;
    background-color: #fff;
    border-color: #c8ced3 !important;
    outline: 0;
    box-shadow: 0 0 0 #F44336
}
</style>
<div class="container">
    <div class="row">
        <table class="cart_table" class="mt-2">
            <tr>
                <td>Amount</td>
                <td>{{ $total }}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$0</td>
            </tr>
            <tr>
                <td>Delivery Fee</td>
                <td>$10</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>{{ $total+10 }}</td>
            </tr>
        </table>

    </div>
</div>


<form action="orderplace" method="post" class="d-flex justify-content-center mt-4">
    @csrf
    <div class="row">
        <div class="col-sm-12 col-md-10 ">
            <div class="card">
                <div class="card-header">
                    <strong>Payment</strong>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" name="name" type="text" placeholder="Enter your name" >
                                <label for="address">Address</label>
                                <input class="form-control" name="address" type="text" placeholder="Enter your Address"  required>
                                <label for="email">Email</label>
                                <input class="form-control" name="email" type="text" placeholder="Enter your Email">
                                <label for="phone">Phone</label>
                                <input class="form-control" name="phone" type="text" placeholder="Enter your Phone Number"  required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                            <input type="radio" value="Creadit Card" name="payment">Credit Card<br>
                            <p class="mt-1">Credit Card Number</p>
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="0000 0000 0000 0000" autocomplete="email">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="mdi mdi-credit-card"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="ccmonth">Month</label>
                            <select class="form-control" id="ccmonth">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="ccyear">Year</label>
                            <select class="form-control" id="ccyear">
                                <option>2014</option>
                                <option>2015</option>
                                <option>2016</option>
                                <option>2017</option>
                                <option>2018</option>
                                <option>2019</option>
                                <option>2020</option>
                                <option>2021</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="cvv">CVV/CVC</label>
                                <input class="form-control" id="cvv" type="text" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="radio" value="cash" name="payment">Cash on Delivery
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    <button class="btn btn-sm btn-success" type="submit">
                        <i class="mdi mdi-gamepad-circle"></i> CheckOut</button>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
@endsection
