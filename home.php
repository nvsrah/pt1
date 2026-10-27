<?php
ob_start();
?>
 
<!-- Sleek Welcome Banner -->
<div class="card shadow-sm border-0 bg-light mb-4">
    <div class="card-body p-4 p-lg-5">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-2 rounded-pill fw-semibold">
                    <i class="bi bi-shop me-1"></i> Management Dashboard
                </span>
                <h1 class="display-6 fw-bold text-dark mb-2">Welcome to Jam & Juniper</h1>
                <p class="text-secondary lead fs-6 mb-0">
                    Streamline your artisanal jam inventory, customer accounts, and sales operations from one centralized hub.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <div class="d-inline-flex gap-2">
                    <a href="products.php" class="btn btn-primary px-4">
                        <i class="bi bi-box-seam me-1"></i> Catalog
                    </a>
                    <a href="orders.php" class="btn btn-outline-secondary px-4">
                        <i class="bi bi-cart-check me-1"></i> Orders
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Statistics / Metrics Row -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center p-3">
                <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-3 me-3">
                    <i class="bi bi-grid-3x3-gap fs-4"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small">Total Catalog</h6>
                    <h4 class="fw-bold mb-0">20 Products</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center p-3">
                <div class="bg-success bg-opacity-10 text-success p-3 rounded-3 me-3">
                    <i class="bi bi-award fs-4"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small">Artisanal Brands</h6>
                    <h4 class="fw-bold mb-0">4 Brands</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body d-flex align-items-center p-3">
                <div class="bg-warning bg-opacity-10 text-warning p-3 rounded-3 me-3">
                    <i class="bi bi-tag fs-4"></i>
                </div>
                <div>
                    <h6 class="text-muted mb-1 small">Flavor Selections</h6>
                    <h4 class="fw-bold mb-0">5 Flavors</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Link Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-success">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-success">
                    <i class="bi bi-box-seam display-5"></i>
                </div>
                <h5 class="fw-bold">Products</h5>
                <p class="text-muted small mb-3">Manage inventory, prices, and brand catalog.</p>
                <a href="products.php" class="btn btn-sm btn-outline-success stretched-link w-100">Manage Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-primary">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-primary">
                    <i class="bi bi-people display-5"></i>
                </div>
                <h5 class="fw-bold">Customers</h5>
                <p class="text-muted small mb-3">Manage customer profiles and contact logs.</p>
                <a href="customers.php" class="btn btn-sm btn-outline-primary stretched-link w-100">Manage Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-warning">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-warning">
                    <i class="bi bi-person-badge display-5"></i>
                </div>
                <h5 class="fw-bold">Staffs</h5>
                <p class="text-muted small mb-3">Handle internal team records and permissions.</p>
                <a href="staffs.php" class="btn btn-sm btn-outline-warning stretched-link w-100">Manage Staffs</a>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm h-100 border-0 border-top border-4 border-info">
            <div class="card-body text-center p-4">
                <div class="mb-3 text-info">
                    <i class="bi bi-cart-check display-5"></i>
                </div>
                <h5 class="fw-bold">Orders</h5>
                <p class="text-muted small mb-3">Track transactions and print sales invoices.</p>
                <a href="orders.php" class="btn btn-sm btn-outline-info stretched-link w-100">View Orders</a>
            </div>
        </div>
    </div>
</div>

<!-- About the Company & System Overview -->
<div class="row g-4 mb-4">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-3 text-dark">
                    <i class="bi bi-info-circle text-primary me-2"></i>About Jam & Juniper
                </h5>
                <p class="text-secondary">
                    Welcome to <strong>Jam & Juniper</strong>, a boutique artisanal e-commerce platform dedicated to showcasing premium fruit spreads. We feature a curated collection across 4 specialized brands (Orchard Bliss, BerryBest, Spoonful, and The Jar House), offering 5 signature flavors from classic Strawberry to rich Fig & Honey.
                </p>
                <p class="text-secondary mb-0">
                    This administrative suite empowers staff to effortlessly perform full CRUD tracking on inventory, monitor customer relationships, process incoming order records, and print professional sales receipts instantly.
                </p>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body p-4">
                <h5 class="fw-bold mb-3 text-dark">
                    <i class="bi bi-shield-check text-success me-2"></i>System Highlights
                </h5>
                <ul class="list-unstyled text-secondary small mb-0">
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                        <span>20 Unique Curated Products</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                        <span>4 Premium Artisanal Brands</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                        <span>Complete Database CRUD Operations</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-success me-2 fs-5"></i>
                        <span>Print-Optimized Sales Invoices</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>