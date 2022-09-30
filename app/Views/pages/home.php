    <div class="cover align-items-center d-flex justify-content-center">
        <h1>Jagadlab Invoice</h1>
    </div>

    <div class="container mt-5">
        <div class="row">

            <div class="text-center">
					<h2 class="span-title"><span>Main Menu</span></h2>
				</div>

            <div class="col-lg-4 col-12 mt-1">
                <div class="card bg-transparent m-3 p-3 menu-border">
                    <div class="card-body text-center">
                        <a href="<?= route_to('po-form'); ?>" class="h4 menu-card text-black">New PO</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-12 mt-1">
                <div class="card bg-transparent m-3 p-3 menu-border">
                    <div class="card-body text-center">
                        <a href="<?= route_to('invoice-form'); ?>" class="h4 menu-card text-black">New Invoice</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12 mt-1">
                <div class="card bg-transparent m-3 p-3 menu-border">
                    <div class="card-body text-center">
                        <a href="<?= route_to('invoice-data'); ?>" class="h4 menu-card text-black">List Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>