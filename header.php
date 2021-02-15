<!DOCTYPE html>

<html lang="en">

    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">

            <header class="row">
                <div class="col-lg-12">
                    <h1 class="text-center"> CG - <?php echo $title; ?></h1>
                </div>                
            </header>

            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <li <?php if($page=='index') { echo "  class = active";} ?> > <a href="index.php">Home</a></li>
                        <li <?php if($page=='customer') { echo "  class = active";} ?> > <a href="customer.php">Customer</a></li>
                        <li <?php if($page=='employee') { echo "  class = active";} ?> > <a href="employee.php">Employee</a></li>
                        <li <?php if($page=='supplier') { echo "  class = active";} ?> > <a href="supplier.php">Supplier</a></li>
                        <li <?php if($page=='product') { echo "  class = active";} ?> > <a href="product.php">Product</a></li>
                    </ul>
                </div>
            </nav>