<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Order Details</h2>
        <p class="text-muted mb-0">Order #O001 for Alice Johnson</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-3">
            <div class="col-md-4"><strong>Order Date</strong><br>2026-10-03</div>
            <div class="col-md-4"><strong>Staff</strong><br>Jane Smith</div>
            <div class="col-md-4"><strong>Customer</strong><br>Alice Johnson</div>
        </div>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3"><i class="bi bi-cart-plus text-primary me-2"></i>Add Product</h5>
        <hr>
        <form action="" method="post" class="needs-validation" novalidate>
            <input type="hidden" name="order_num" value="O001">
            <div class="row g-3">
                <div class="col-md-8">
                    <label for="product_num" class="form-label">Product <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_num" id="product_num" class="form-select" required>
                        <option value="">Select Product</option>
                        <option value="P001">P001 - Strawberry Jam (Stock = 10)</option>
                        <option value="P002">P002 - Blueberry Jam (Stock = 15)</option>
                        <option value="P003">P003 - Raspberry Jam (Stock = 12)</option>
                        <option value="P004">P004 - Fig & Honey Jam (Stock = 8)</option>
                        <option value="P005">P005 - Orange Marmalade (Stock = 20)</option>
                        <option value="P006">P006 - Strawberry Spread (Stock = 14)</option>
                        <option value="P007">P007 - Blueberry Burst (Stock = 10)</option>
                        <option value="P008">P008 - Raspberry Ripple (Stock = 18)</option>
                        <option value="P009">P009 - Fig & Lemon Honey (Stock = 7)</option>
                        <option value="P010">P010 - Citrus Marmalade (Stock = 25)</option>
                        <option value="P011">P011 - Wild Strawberry Preserve (Stock = 11)</option>
                        <option value="P012">P012 - Wild Blueberry Jam (Stock = 9)</option>
                        <option value="P013">P013 - Wild Raspberry Jam (Stock = 13)</option>
                        <option value="P014">P014 - Fig & Wild Honey (Stock = 6)</option>
                        <option value="P015">P015 - Sweet Orange Marmalade (Stock = 16)</option>
                        <option value="P016">P016 - Premium Strawberry (Stock = 22)</option>
                        <option value="P017">P017 - Premium Blueberry (Stock = 15)</option>
                        <option value="P018">P018 - Premium Raspberry (Stock = 14)</option>
                        <option value="P019">P019 - Premium Fig (Stock = 5)</option>
                        <option value="P020">P020 - Premium Marmalade (Stock = 19)</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="quantity" id="quantity" type="number" class="form-control" min="1" value="1" required>
                </div>
            </div>
            <hr class="mt-4 mb-3">
            <button type="submit" class="btn btn-primary"><i class="bi bi-save me-1"></i>Add Product</button>
            <a href="#" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0"><i class="bi bi-table text-primary me-2"></i>Products in Order</h5>
            <a href="invoice.php" class="btn btn-success"><i class="bi bi-receipt me-1"></i>View Invoice</a>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Wild Blueberry Jam</td>
                        <td>RM16.00</td>
                        <td>1</td>
                        <td>RM16.00</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr><td colspan="5" class="text-center">No products added to this order</td></tr>
                </tbody>
                <tfoot>
                    <tr><th colspan="3" class="text-end">Grand Total</th><th>RM16.00</th><th></th></tr>
                </tfoot>
            </table>
        </div>
        <a href="orders.php" class="btn btn-secondary mt-3"><i class="bi bi-arrow-left me-1"></i>Back to Orders</a>
    </div>
</div>
 
<?php
$content = ob_get_clean();
require_once 'layout.php';
?>