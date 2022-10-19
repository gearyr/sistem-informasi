<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Buku | <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <div class="main d-flex justify-content-between flex-column">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Rental Buku</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
          </nav>

          <div class="body-content h-100">
                <div class="row g-0 h-100">
                    <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo03">
                        <?php if(Auth::user()->role_id == 1): ?>
                            <a href="/dashboard" <?php if(request()->route()->uri == 'dashboard'): ?> class="active" <?php endif; ?>>Dashboard</a>
                            <a href="/books" <?php if(request()->route()->uri == 'books' || request()->route()->uri == 'book-add' || request()->route()->uri == 'book-deleted' || request()->route()->uri == 'book-delete/{slug}' || request()->route()->uri == 'book-edit/{slug}'): ?> class='active' <?php endif; ?>>Books</a>
                            <a href="/categories" <?php if(request()->route()->uri == 'categories' || request()->route()->uri == 'category-add' || request()->route()->uri == 'category-deleted' || request()->route()->uri == 'category-delete/{slug}' || request()->route()->uri == 'category-edit/{slug}'): ?> class='active' <?php endif; ?>>Categories</a>
                            <a href="/users" <?php if(request()->route()->uri == 'users'||request()->route()->uri == 'registered-users'): ?> class="active" <?php endif; ?>>Users</a>
                            <a href="/rent-logs" <?php if(request()->route()->uri == 'rent-logs'): ?> class="active" <?php endif; ?>>Rent Log</a>
                            <a href="/logout" >Logout</a>
                        <?php else: ?>
                            <a href="/profile" <?php if(request()->route()->uri == 'profile'): ?> class="active" <?php endif; ?>>Profile</a>
                            <a href="/logout">Logout</a>
                        <?php endif; ?>
                    </div>
                    <div class="content col-lg-10 p-5">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ProjectPribadi\renting\resources\views/layouts/mainlayout.blade.php ENDPATH**/ ?>