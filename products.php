<?php
ob_start();
?>
 
<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Products</h2>
        <p class="text-muted mb-0">Manage and track all your products</p>
    </div>
</div>
 
<div class="card shadow-sm mb-4">
    <div class="card-body">
 
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-pencil-square text-primary me-2"></i>
                    Product Form
                </h5>
                <small class="text-muted">Fill in the details of a product</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
         
        <hr>
 
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Product ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_num" id="pid" type="text" class="form-control" placeholder="Enter Product ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_name" id="name" type="text" class="form-control" placeholder="Enter Product Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Price <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_price" id="price" type="number" class="form-control" placeholder="Enter Price" value="" required min="0" step="0.01">
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Brand <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_brand" id="brand" class="form-select" required>
                        <option value="">Select Brand</option>
                        <option value="Cervelo">Orchard Bliss</option>
                        <option value="Geometric">BerryBest</option>
                        <option value="Tecc">Spoonful</option>
                        <option value="Nosh">The Jar House</option>
                    </select>
                </div>
 
                <div class="col-md-3">
                    <label for="product_condition" class="form-label">Jar Style<span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_condition" id="product_condition" class="form-select" required>
                        <option value="">Select Jar Style</option>
                        <option value="Classic Gold-Lid">Classic Gold-Lid</option>
                        <option value="Vintage Ribbed-Glass">Vintage Ribbed-Glass</option>
                        <option value="Hexagonal Mason">Hexagonal Mason</option>
                        <option value="Traditional Tin-Tie">Traditional Tin-Tie</option>
                    </select>
                </div>
 
                <div class="col-md-3">
                    <label for="year" class="form-label">Dietary Label<span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="product_year" id="year" class="form-select" required>
                        <option value="">Select Dietary Label</option>
                        <option value="Standard/Classic">Standard / Classic</option>
                        <option value="Organic">Organic</option>
                        <option value="No Added Sugar">No Added Sugar</option>
                        <option value="Vegan & Gluten-Free">Vegan & Gluten-Free</option>
                        <option value="Halal Certified">Halal Certified</option>
                    </select>
                </div>
                 
                <div class="col-md-3">
                    <label for="quantity" class="form-label">Quantity <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="product_quantity" id="quantity" type="number" class="form-control" placeholder="Enter Quantity" value="" required min="0">
                </div>
                <div class="col-md-3">
                    <label for="product_image" class="form-label">Image</label>
                    <input name="product_image" id="product_image" type="text" class="form-control" placeholder="Enter image filename" value="">
                </div>
            </div>
             
            <hr class="mt-4 mb-3">
             
            <div>
                <button type="submit" name="create" class="btn btn-primary">
                    <i class="bi bi-save me-1"></i>Create
                </button>
                <button type="reset" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Clear
                </button>
            </div>
        </form>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
  
        <div class="row align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Product List
                </h5>
                <small class="text-muted">View and manage all products in the inventory</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>
 
        <hr>
 
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P001</td>
                        <td>Strawberry Jam </td>
                        <td>RM12.00</td>
                        <td>Orchard Bliss</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P002</td>
                        <td>Blueberry Jam </td>
                        <td>RM14.00</td>
                        <td>Orchard Bliss</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <!-- Continue mapping up to P020 -->
                     <tr>
                        <td>P003</td>
                        <td>Raspberry Jam </td>
                        <td>RM14.00</td>
                        <td>Orchard Bliss</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P004</td>
                        <td>Fig & Honey Jam </td>
                        <td>RM16.00</td>
                        <td>Orchard Bliss</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P005</td>
                        <td>Orange Marmalade </td>
                        <td>RM12.00</td>
                        <td>Orchard Bliss</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P006</td>
                        <td>Strawberry Spread </td>
                        <td>RM13.50</td>
                        <td>BerryBest</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P007</td>
                        <td>Blueberry Burst </td>
                        <td>RM15.00</td>
                        <td>BerryBest</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P008</td>
                        <td>Raspberry Ripple </td>
                        <td>RM15.00</td>
                        <td>BerryBest</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P009</td>
                        <td>Fig & Lemon Honey </td>
                        <td>RM17.50</td>
                        <td>BerryBest</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P010</td>
                        <td>Citrus Marmalade </td>
                        <td>RM13.50</td>
                        <td>BerryBest</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P011</td>
                        <td>Wild Strawberry Preserve </td>
                        <td>RM14.00</td>
                        <td>Spoonful</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P012</td>
                        <td>Wild Blueberry Jam </td>
                        <td>RM16.00</td>
                        <td>Spoonful</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P013</td>
                        <td>Wild Raspberry Jam </td>
                        <td>RM16.00</td>
                        <td>Spoonful</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <!-- Continue mapping up to P020 -->
                     <tr>
                        <td>P014</td>
                        <td>Fig & Wild Honey </td>
                        <td>RM18.00</td>
                        <td>Spoonful</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P015</td>
                        <td>Sweet Orange Marmalade </td>
                        <td>RM14.00</td>
                        <td>Spoonful</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P016</td>
                        <td>Premium Strawberry</td>
                        <td>RM15.00</td>
                        <td>The Jar House</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P017</td>
                        <td>Premium Blueberry </td>
                        <td>RM17.00</td>
                        <td>The Jar House</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P018</td>
                        <td>Premium Raspberry </td>
                        <td>RM17.00</td>
                        <td>The Jar House</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P019</td>
                        <td>Premium Fig </td>
                        <td>RM19.50</td>
                        <td>The Jar House</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>P020</td>
                        <td>Premium Marmalade </td>
                        <td>RM15.00</td>
                        <td>The Jar House</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-sm btn-info text-white" title="Image"><i class="bi bi-image"></i></button>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>
